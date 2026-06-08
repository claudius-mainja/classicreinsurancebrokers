<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function home()
    {
        $products = Service::products()->active()->get();
        $specialties = Service::specialties()->active()->get();
        return view('index', compact('products', 'specialties'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $products = Service::products()->active()->get();
        $specialties = Service::specialties()->active()->get();
        return view('pages.services', compact('products', 'specialties'));
    }

    public function product($slug)
    {
        $service = Service::where('slug', $slug)->where('type', 'product')->active()->firstOrFail();

        $product = $this->mapServiceForView($service);
        $allProducts = Service::products()->active()->get()->mapWithKeys(fn ($s) => [$s->slug => $s->name])->toArray();

        return view('pages.product', compact('product', 'allProducts'));
    }

    public function specialty($slug)
    {
        $service = Service::where('slug', $slug)->where('type', 'specialty')->active()->firstOrFail();

        $specialty = $this->mapServiceForView($service);
        $allSpecialties = Service::specialties()->active()->get()->mapWithKeys(fn ($s) => [$s->slug => $s->name])->toArray();

        return view('pages.specialty', compact('specialty', 'allSpecialties'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function privacy()
    {
        return view('legal.privacy');
    }

    public function terms()
    {
        return view('legal.terms');
    }

    private function mapServiceForView($service): array
    {
        return [
            'name' => $service->name,
            'slug' => $service->slug,
            'subtitle' => $service->subtitle,
            'description' => $service->description,
            'fullDescription' => $service->full_description,
            'features' => collect($service->features ?? [])->pluck('value')->toArray(),
            'benefits' => collect($service->benefits ?? [])->pluck('value')->toArray(),
            'process' => collect($service->process ?? [])->pluck('value')->toArray(),
            'is_active' => $service->is_active,
        ];
    }
}
