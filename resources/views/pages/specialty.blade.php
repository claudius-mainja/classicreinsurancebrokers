@extends('layouts.app')

@section('title', $specialty['name'])
@section('meta_description', $specialty['description'])
@section('og_title', $specialty['name'] . ' | Classic Reinsurance Brokers')
@section('og_description', $specialty['description'])

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "Service",
    "name": "{{ $specialty['name'] }}",
    "description": "{{ $specialty['description'] }}",
    "serviceType": "Specialty Insurance",
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
            <span class="text-white">{{ $specialty['name'] }}</span>
        </nav>
        <div class="grid items-center gap-12 lg:grid-cols-2">
            <div class="fade-up">
                <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1.5 text-xs font-semibold text-primary-200">Specialty risk</span>
                <h1 class="mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">{{ $specialty['name'] }}</h1>
                <p class="mt-6 text-lg leading-relaxed text-neutral-300">{{ $specialty['description'] }}</p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}" class="btn bg-white text-primary-700 hover:bg-primary-50">Discuss your risk</a>
                    <a href="{{ route('services') }}" class="btn btn-outline-white">All specialties</a>
                </div>
            </div>
            <div class="fade-up relative" style="transition-delay: 0.1s">
                <div class="aspect-[4/3] overflow-hidden rounded-2xl bg-white/5">
                    <img src="{{ asset('images/specialty/' . Str::slug($specialty['name']) . '.jpg') }}" alt="{{ $specialty['name'] }}" class="h-full w-full object-cover" onerror="this.src='{{ asset('images/hero-pattern.png') }}'">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Features --}}
<section class="py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up max-w-2xl mx-auto text-center">
            <span class="section-label">Service details</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl">Coverage options</h2>
            <p class="mt-4 text-lg text-neutral-500">Specialist reinsurance capacity designed for complex and emerging risk classes.</p>
        </div>
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse($specialty['features'] as $feature)
            <div class="fade-up card p-6 group">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-neutral-900">{{ $feature }}</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Bespoke reinsurance solutions for {{ lcfirst($feature) }}, supported by deep underwriting expertise and access to global specialty markets.</p>
            </div>
            @empty
            <div class="col-span-full text-center text-neutral-400"><p>Coverage details coming soon.</p></div>
            @endforelse
        </div>
    </div>
</section>

{{-- Why partner --}}
<section class="border-t border-neutral-100 bg-neutral-50/50 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up max-w-2xl mx-auto text-center">
            <span class="section-label">Why partner with us</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl">Why partner with us</h2>
            <p class="mt-4 text-lg text-neutral-500">What makes Classic Reinsurance Brokers the right partner for your specialty reinsurance needs.</p>
        </div>
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <div class="fade-up card p-6 text-center">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-50 text-primary-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 9.75l-4.5 4.5L9 12"/></svg>
                </div>
                <h3 class="mt-4 text-base font-bold">Specialist Expertise</h3>
                <p class="mt-2 text-sm text-neutral-500">Deep technical knowledge across complex and emerging risk classes with proven placement track records.</p>
            </div>
            <div class="fade-up card p-6 text-center" style="transition-delay: 0.1s">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-50 text-primary-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9.004 9.004 0 008.716-6.747"/></svg>
                </div>
                <h3 class="mt-4 text-base font-bold">Global Market Access</h3>
                <p class="mt-2 text-sm text-neutral-500">Direct relationships with Lloyd's, London company market, and international specialty reinsurers.</p>
            </div>
            <div class="fade-up card p-6 text-center" style="transition-delay: 0.2s">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-50 text-primary-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                </div>
                <h3 class="mt-4 text-base font-bold">Technical Underwriting</h3>
                <p class="mt-2 text-sm text-neutral-500">Rigorous risk assessment and programme structuring backed by deep actuarial and underwriting capability.</p>
            </div>
            <div class="fade-up card p-6 text-center" style="transition-delay: 0.3s">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-50 text-primary-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3"/></svg>
                </div>
                <h3 class="mt-4 text-base font-bold">Dedicated Service</h3>
                <p class="mt-2 text-sm text-neutral-500">Responsive, client-dedicated teams providing continuity and deep understanding of your business.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="hero-gradient py-20 lg:py-28">
    <div class="mx-auto max-w-3xl px-6 text-center lg:px-8">
        <div class="fade-up">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Partner with Classic Reinsurance Brokers</h2>
            <p class="mt-6 text-lg leading-relaxed text-primary-100">Our specialty team is ready to help you navigate complex risks with bespoke reinsurance solutions. Contact us to discuss how we can support your unique requirements.</p>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="btn bg-white text-primary-700 hover:bg-primary-50 text-base px-8 py-3">Contact our team</a>
                <a href="tel:+263242773192" class="btn btn-outline-white text-base px-8 py-3">+263 242 773192/3/4</a>
            </div>
        </div>
    </div>
</section>
@endsection
