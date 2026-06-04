param(
    [string]$OutputZip = "classicreinsurancebrokers-deploy.zip"
)

$ErrorActionPreference = "Stop"
$ProjectRoot = Split-Path -Parent $MyInvocation.MyCommand.Definition
$DeployDir = Join-Path $ProjectRoot "deploy_build"
$LaravelDir = Join-Path $DeployDir "laravel"
$PublicHtmlDir = Join-Path $DeployDir "public_html"

Write-Host "=== Classic Reinsurance Brokers - Deployment Package Builder ===" -ForegroundColor Cyan

# Clean previous build
if (Test-Path $DeployDir) {
    Remove-Item -Recurse -Force $DeployDir
}
if (Test-Path (Join-Path $ProjectRoot $OutputZip)) {
    Remove-Item -Force (Join-Path $ProjectRoot $OutputZip)
}

# Create directory structure
Write-Host "[1/6] Creating directories..." -ForegroundColor Yellow
New-Item -ItemType Directory -Path $LaravelDir -Force | Out-Null
New-Item -ItemType Directory -Path $PublicHtmlDir -Force | Out-Null

# Use robocopy for fast bulk copy (mirror excludes the listed dirs/files)
Write-Host "[2/6] Copying Laravel core files (robocopy)..." -ForegroundColor Yellow
$excludeFile = Join-Path $DeployDir "_exclude.txt"
@"
public\
node_modules\
.git\
deploy\
deploy_build\
$OutputZip
deploy.ps1
"@ | Set-Content -Path $excludeFile

robocopy $ProjectRoot $LaravelDir /E /NP /NDL /NFL /NS /NC /XJD /XF $excludeFile /XD public node_modules .git deploy deploy_build | Out-Null

Write-Host "[3/6] Copying public assets to public_html/..." -ForegroundColor Yellow
robocopy (Join-Path $ProjectRoot "public") $PublicHtmlDir /E /NP /NDL /NFL /NS /NC /XJD | Out-Null

Write-Host "[4/6] Adding deployment config files..." -ForegroundColor Yellow

# Custom index.php for public_html (points to ../laravel/)
$indexContent = '<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define("LARAVEL_START", microtime(true));

if (file_exists($maintenance = __DIR__ . "/../laravel/storage/framework/maintenance.php")) {
    require $maintenance;
}

require __DIR__ . "/../laravel/vendor/autoload.php";

$app = require_once __DIR__ . "/../laravel/bootstrap/app.php";

$app->handleRequest(Request::capture());
'
Set-Content -Path (Join-Path $PublicHtmlDir "index.php") -Value $indexContent -NoNewline

# .htaccess for public_html
Copy-Item (Join-Path $ProjectRoot "deploy\public_htaccess") (Join-Path $PublicHtmlDir ".htaccess") -Force

# Root .htaccess
Copy-Item (Join-Path $ProjectRoot "deploy\root.htaccess") (Join-Path $DeployDir ".htaccess") -Force

# Production .env
Copy-Item (Join-Path $ProjectRoot "deploy\production.env") (Join-Path $LaravelDir ".env") -Force

# Empty storage dir in public_html (for storage:link symlink)
New-Item -ItemType Directory -Path (Join-Path $PublicHtmlDir "storage") -Force | Out-Null

# Remove exclude file
Remove-Item $excludeFile -Force

Write-Host "[5/6] Creating ZIP archive..." -ForegroundColor Yellow
$zipPath = Join-Path $ProjectRoot $OutputZip
& tar.exe -a -cf $zipPath -C $DeployDir .

Write-Host "[6/6] Cleaning up..." -ForegroundColor Yellow
Remove-Item -Recurse -Force $DeployDir

$zipSize = [math]::Round((Get-Item $zipPath).Length / 1MB, 2)
Write-Host ""
Write-Host "=== Deployment package created! ===" -ForegroundColor Green
Write-Host "File: $OutputZip ($zipSize MB)" -ForegroundColor Green
Write-Host ""
Write-Host "Zip structure:" -ForegroundColor Cyan
Write-Host "  ./laravel/       - App core (outside web root)" -ForegroundColor White
Write-Host "  ./public_html/   - Web root (point domain here)" -ForegroundColor White
Write-Host "  ./.htaccess      - Root security" -ForegroundColor White
Write-Host ""
Write-Host "Setup on shared hosting:" -ForegroundColor Yellow
Write-Host "  1. Upload & extract ZIP to your hosting root (/home/username/)" -ForegroundColor White
Write-Host "  2. Point your domain to the public_html/ folder" -ForegroundColor White
Write-Host "  3. Set PHP 8.2+ in hosting control panel" -ForegroundColor White
Write-Host "  4. Edit laravel/.env: add DB credentials, SMTP password" -ForegroundColor White
Write-Host "  5. SSH into hosting and run:" -ForegroundColor White
Write-Host "     cd laravel" -ForegroundColor Gray
Write-Host "     php artisan key:generate" -ForegroundColor Gray
Write-Host "     php artisan migrate --force" -ForegroundColor Gray
Write-Host "     php artisan storage:link" -ForegroundColor Gray
Write-Host "     php artisan config:cache" -ForegroundColor Gray
Write-Host "     php artisan route:cache" -ForegroundColor Gray
Write-Host "     php artisan view:cache" -ForegroundColor Gray
Write-Host "  6. Set permissions:" -ForegroundColor White
Write-Host "     chmod -R 755 laravel/storage laravel/bootstrap/cache" -ForegroundColor Gray
Write-Host "     chmod 644 laravel/.env" -ForegroundColor Gray
