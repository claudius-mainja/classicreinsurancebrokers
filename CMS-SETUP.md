# CMS & Auto-Deploy Setup Guide

This document explains how to set up the Decap CMS content manager and automatic deployment to your cPanel hosting.

**Estimated setup time:** 30 minutes

---

## What this gives you

- **`yourdomain.com/admin`** — A login page where you can write blog posts and add job openings using a Word-like editor (no coding)
- **Auto-deploy** — Every time you save a change in the CMS, the website rebuilds and uploads to cPanel automatically

---

## Step 1: Create a GitHub OAuth App

This allows the CMS to log you in securely with your GitHub account.

1. Go to https://github.com/settings/developers
2. Click **"OAuth Apps"** → **"New OAuth App"**
3. Fill in:
   - **Application name:** `Classic Re CMS`
   - **Homepage URL:** `https://www.classicre.co.zw`
   - **Authorization callback URL:** `https://classicre-oauth-proxy.onrender.com/api/callback`
4. Click **"Register application"**
5. You'll see a **Client ID** and **Client Secret** — copy both somewhere safe

> **Note:** The callback URL above points to a free OAuth proxy service. If it stops working, we can deploy our own (contact your developer).

---

## Step 2: Add FTP Secrets to GitHub

These tell the auto-deploy system how to upload files to your cPanel.

1. Go to your GitHub repository: https://github.com/claudius-mainja/classicreinsurancebrokers
2. Click **Settings** → **Secrets and variables** → **Actions**
3. Click **"New repository secret"** and add these four secrets:

| Secret Name | Value | Where to find it |
|---|---|---|
| `FTP_HOST` | Your cPanel hostname | Your cPanel → FTP Accounts → Host/Domain |
| `FTP_USERNAME` | Your cPanel FTP username | Your cPanel → FTP Accounts → Username |
| `FTP_PASSWORD` | Your cPanel FTP password | Your cPanel → FTP Accounts → Password |
| `FTP_TARGET` | `/public_html/` | Usually this, unless your site is in a subfolder |

**Important:** If your FTP login doesn't work with the full username (e.g. `classic@classicre.co.zw`), try just the prefix part. Contact your hosting provider if unsure.

---

## Step 3: Test the Auto-Deploy

1. Push a change to the `main` branch of your GitHub repo, OR
2. Go to https://github.com/claudius-mainja/classicreinsurancebrokers/actions
3. Click **"Build & Deploy to cPanel"** → **"Run workflow"** → **"Run workflow"**
4. Wait ~3 minutes — the site will build and upload automatically
5. Visit your website to confirm the updated version is live

---

## How to use the CMS

After setup is complete:

1. Visit **`https://www.classicre.co.zw/admin`**
2. Click **"Login with GitHub"**
3. Authorize the app (first time only)
4. You'll see two sections in the left sidebar:

### Blog Posts
- Click **"Blog Posts"** → **"New Blog Post"**
- Fill in the title, body, and optional fields
- Click **"Publish"** — the site will rebuild and deploy automatically

### Job Openings
- Click **"Job Openings"** → **"New Job Opening"**
- Fill in the job details and requirements list
- Toggle **"Published"** to show/hide without deleting
- Click **"Publish"** — the site will rebuild and deploy automatically

---

## Troubleshooting

| Problem | Solution |
|---|---|
| White screen at `/admin` | Wait a few seconds for the JavaScript to load (cached from CDN) |
| "Cannot find repository" error | Make sure the GitHub OAuth App is configured correctly (Step 1) |
| Changes not showing on website | Check https://github.com/claudius-mainja/classicreinsurancebrokers/actions for failed deployment — FTP credentials may be wrong |
| Login doesn't work | The OAuth proxy may be down. Contact your developer to redeploy it |
| Images not uploading | Make sure `public/images/uploads` folder exists in the repository (it will be created on first upload) |

---

## File structure (for reference)

```
public/admin/
  index.html    — The CMS login page (served at /admin)
  config.yml    — CMS configuration (what fields, which collections)

src/content/
  blog/         — Blog posts as markdown files (managed by CMS)
  jobs/         — Job openings as markdown files (managed by CMS)
  config.ts     — Schema definitions (field validation rules)

.github/workflows/
  deploy.yml    — Auto-deploy script (builds + FTPs to cPanel)
```
