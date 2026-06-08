<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->passwordReset()
            ->brandLogo(asset('images/logo.png'))
            ->brandLogoHeight('2.5rem')
            ->font('Sora')
            ->colors([
                'primary' => Color::hex('#dc4a4a'),
                'gray' => Color::Gray,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->navigationItems([
                NavigationItem::make('Visit Website')
                    ->url(url('/'))
                    ->icon('heroicon-o-globe-alt')
                    ->group('Links')
                    ->sort(99),
                NavigationItem::make('Visit Blog')
                    ->url(url('/blog'))
                    ->icon('heroicon-o-globe-alt')
                    ->group('Links')
                    ->sort(98),
                NavigationItem::make('About Us')
                    ->url(url('/about'))
                    ->icon('heroicon-o-globe-alt')
                    ->group('Links')
                    ->sort(97),
                NavigationItem::make('Contact Us')
                    ->url(url('/contact'))
                    ->icon('heroicon-o-globe-alt')
                    ->group('Links')
                    ->sort(96),
            ])
            ->renderHook(
                'panels::head.start',
                fn () => '<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
    :root { --font-family: \'Sora\', sans-serif; }
    .fi-logo { --font-family: \'Sora\', sans-serif; font-weight: 700; }
    body { font-family: \'Montserrat\', sans-serif; }
</style>'
            )
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
