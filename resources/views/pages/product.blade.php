@extends('layouts.app')

@section('title', $product['name'])
@section('meta_description', $product['subtitle'])
@section('og_title', $product['name'] . ' | Classic Reinsurance Brokers')
@section('og_description', $product['subtitle'])

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "Service",
    "name": "{{ $product['name'] }}",
    "description": "{{ $product['subtitle'] }}",
    "provider": { "@type": "InsuranceBrokerage", "name": "Classic Reinsurance Brokers", "url": "{{ url('/') }}" },
    "areaServed": ["Zimbabwe"]
}
</script>
@endpush

@section('content')
{{-- Hero --}}
<section class="hero-gradient min-h-[50vh] flex items-center">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-24 lg:py-32">
        <nav class="fade-up flex items-center gap-2 text-sm text-neutral-400 mb-8">
            <a href="{{ route('home') }}" class="transition-colors hover:text-white">Home</a>
            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg>
            <a href="{{ route('services') }}" class="transition-colors hover:text-white">Services</a>
            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg>
            <span class="text-white">{{ $product['name'] }}</span>
        </nav>
        <div class="grid items-center gap-12 lg:grid-cols-2">
            <div class="fade-up">
                <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1.5 text-xs font-semibold text-primary-200">Product detail</span>
                <h1 class="mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">{{ $product['name'] }}</h1>
                <p class="mt-6 text-lg leading-relaxed text-neutral-300">{{ $product['subtitle'] }}</p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}" class="btn bg-white text-primary-700 hover:bg-primary-50">Get a quote</a>
                    <a href="{{ route('services') }}" class="btn btn-outline-white">All products</a>
                </div>
            </div>
            <div class="fade-up relative" style="transition-delay: 0.1s">
                <div class="aspect-[4/3] overflow-hidden rounded-2xl bg-white/5">
                    <img src="{{ asset('images/' . Str::slug($product['name']) . '.png') }}" alt="{{ $product['name'] }}" class="h-full w-full object-cover" onerror="this.src='{{ asset('images/abstractpattern.png') }}'">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Features --}}
<section class="py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up max-w-2xl mx-auto text-center">
            <span class="section-label">Key features</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl">What we cover</h2>
            <p class="mt-4 text-lg text-neutral-500">Comprehensive coverage designed to protect your business and assets.</p>
        </div>
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse($product['features'] as $feature)
            <div class="fade-up card p-6 group">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-neutral-900">{{ $feature }}</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Tailored reinsurance capacity and expert underwriting support for {{ lcfirst($feature) }} risks across the Zimbabwean market.</p>
            </div>
            @empty
            <div class="col-span-full text-center text-neutral-400"><p>Feature details coming soon.</p></div>
            @endforelse
        </div>
    </div>
</section>

{{-- Why us + sidebar --}}
<section class="border-t border-neutral-100 bg-neutral-50/50 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-3">
            <div class="lg:col-span-2">
                <div class="fade-up">
                    <span class="section-label">Why choose us</span>
                    <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl">Why Classic Reinsurance Brokers</h2>
                    <p class="mt-6 text-lg leading-relaxed text-neutral-500">With decades of combined experience in the African reinsurance market, we bring unparalleled expertise, strong carrier relationships, and a client-first approach to every placement.</p>
                </div>
                <div class="fade-up mt-10 grid gap-6 sm:grid-cols-2">
                    <div class="card flex gap-4 p-5">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9.004 9.004 0 008.716-6.747"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-neutral-900">Deep Market Knowledge</h3>
                            <p class="mt-1 text-xs text-neutral-500">Intimate understanding of local regulations, risks, and market dynamics across Africa.</p>
                        </div>
                    </div>
                    <div class="card flex gap-4 p-5">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 18.72a9.094 9.094 0 003.741-.479"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-neutral-900">Strong Carrier Relationships</h3>
                            <p class="mt-1 text-xs text-neutral-500">Access to leading global and regional reinsurers ensuring competitive terms and security.</p>
                        </div>
                    </div>
                    <div class="card flex gap-4 p-5">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-neutral-900">Tailored Solutions</h3>
                            <p class="mt-1 text-xs text-neutral-500">Customised reinsurance programmes designed around your specific risk profile and needs.</p>
                        </div>
                    </div>
                    <div class="card flex gap-4 p-5">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-neutral-900">End-to-End Support</h3>
                            <p class="mt-1 text-xs text-neutral-500">Dedicated broking team guiding you from programme design through to claims advocacy.</p>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="lg:col-span-1">
                <div class="fade-up sticky top-24 card p-6">
                    <h3 class="text-base font-bold">Related products</h3>
                    <p class="mt-1 text-xs text-neutral-500">Explore our other reinsurance solutions.</p>
                    <ul class="mt-6 space-y-2">
                        <li><a href="{{ route('services') }}" class="card flex items-center gap-3 px-4 py-3 text-sm font-medium text-neutral-700 hover:text-primary-600"><span class="flex h-8 w-8 items-center justify-center rounded-lg bg-primary-50 text-primary-600"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>View all products</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="hero-gradient py-20 lg:py-28">
    <div class="mx-auto max-w-3xl px-6 text-center lg:px-8">
        <div class="fade-up">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Partner with Classic Reinsurance Brokers</h2>
            <p class="mt-6 text-lg leading-relaxed text-primary-100">Let our team of experienced reinsurance brokers help you structure the optimal programme for {{ $product['name'] }}. Contact us today for a confidential discussion.</p>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="btn bg-white text-primary-700 hover:bg-primary-50 text-base px-8 py-3">Request a consultation</a>
                <a href="tel:+263242773192" class="btn btn-outline-white text-base px-8 py-3">+263 242 773192/3/4</a>
            </div>
        </div>
    </div>
</section>
@endsection
