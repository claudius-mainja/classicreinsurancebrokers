<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer(['components.navbar', 'index'], function ($view) {
            $view->with('sharedProducts', Service::products()->active()->get());
            $view->with('sharedSpecialties', Service::specialties()->active()->get());
        });

        View::composer('pages.about', function ($view) {
            $view->with('teamMembers', \App\Models\TeamMember::where('is_active', true)->orderBy('sort_order')->get());
        });

        View::composer('pages.contact', function ($view) {
            $view->with('faqs', \App\Models\Faq::where('is_active', true)->orderBy('sort_order')->get());
        });

        View::composer('index', function ($view) {
            $view->with('testimonials', \App\Models\Testimonial::where('is_active', true)->get());
        });
    }
}
