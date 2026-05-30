@extends('layouts.app')

@section('title', 'Reinsurance Solutions & Advisory Services')
@section('meta_description', 'Classic Reinsurance Brokers offers comprehensive reinsurance solutions and strategic advisory services across 9 core products and 9 specialty risk classes, delivering tailored capacity and expertise across Zimbabwe.')
@section('og_title', 'Reinsurance & Advisory Services | Classic Reinsurance Brokers')
@section('og_description', 'Explore our full range of reinsurance products, advisory services, and specialty risk insurance solutions tailored for the Zimbabwean and African markets.')

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Classic Reinsurance Brokers Services",
    "description": "Reinsurance products and specialty risk insurance solutions",
    "url": "{{ url()->current() }}",
    "numberOfItems": 18,
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Motor Insurance",
            "url": "{{ route('services.product', 'motor-insurance') }}"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "Household Insurance",
            "url": "{{ route('services.product', 'household') }}"
        },
        {
            "@type": "ListItem",
            "position": 3,
            "name": "Engineering Insurance",
            "url": "{{ route('services.product', 'engineering') }}"
        },
        {
            "@type": "ListItem",
            "position": 4,
            "name": "Assets All Risks",
            "url": "{{ route('services.product', 'assets-all-risks') }}"
        },
        {
            "@type": "ListItem",
            "position": 5,
            "name": "Liability Insurance",
            "url": "{{ route('services.product', 'liability-insurance') }}"
        },
        {
            "@type": "ListItem",
            "position": 6,
            "name": "Group Personal Accidents",
            "url": "{{ route('services.product', 'group-personal-accidents') }}"
        },
        {
            "@type": "ListItem",
            "position": 7,
            "name": "Travel Insurance",
            "url": "{{ route('services.product', 'travel-insurance') }}"
        },
        {
            "@type": "ListItem",
            "position": 8,
            "name": "Goods In Transit",
            "url": "{{ route('services.product', 'goods-in-transit') }}"
        },
        {
            "@type": "ListItem",
            "position": 9,
            "name": "Agriculture Insurance",
            "url": "{{ route('services.product', 'agriculture-insurance') }}"
        },
        {
            "@type": "ListItem",
            "position": 10,
            "name": "Aviation Insurance",
            "url": "{{ route('services.specialty', 'aviation') }}"
        },
        {
            "@type": "ListItem",
            "position": 11,
            "name": "Bankers' Blanket Insurance",
            "url": "{{ route('services.specialty', 'bankers-blanket') }}"
        },
        {
            "@type": "ListItem",
            "position": 12,
            "name": "Construction Projects Insurance",
            "url": "{{ route('services.specialty', 'construction-projects') }}"
        },
        {
            "@type": "ListItem",
            "position": 13,
            "name": "Cyber Insurance",
            "url": "{{ route('services.specialty', 'cyber') }}"
        },
        {
            "@type": "ListItem",
            "position": 14,
            "name": "Kidnap & Ransom Insurance",
            "url": "{{ route('services.specialty', 'kidnap-and-ransom') }}"
        },
        {
            "@type": "ListItem",
            "position": 15,
            "name": "Marine Hull Insurance",
            "url": "{{ route('services.specialty', 'marine-hull') }}"
        },
        {
            "@type": "ListItem",
            "position": 16,
            "name": "Power Projects Insurance",
            "url": "{{ route('services.specialty', 'power-projects') }}"
        },
        {
            "@type": "ListItem",
            "position": 17,
            "name": "Political Risks Insurance",
            "url": "{{ route('services.specialty', 'political-risks') }}"
        },
        {
            "@type": "ListItem",
            "position": 18,
            "name": "Political Violence & Terrorism Insurance",
            "url": "{{ route('services.specialty', 'political-violence-terrorism') }}"
        }
    ]
}
</script>
@endpush

@section('content')
<section class="relative overflow-hidden bg-gradient-to-br from-neutral-950 via-neutral-900 to-primary-950 pt-32 pb-20 lg:pb-28">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <span class="hero-animate inline-block rounded-lg bg-primary-600/20 px-4 py-1.5 font-heading text-xs font-semibold uppercase tracking-widest text-primary-300">Our Services</span>
            <h1 class="hero-animate mt-6 font-heading text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Reinsurance Solutions & Advisory</h1>
            <p class="hero-animate mt-6 text-lg leading-relaxed text-neutral-300">We deliver comprehensive reinsurance solutions and strategic advisory services across traditional and specialty lines, empowering Zimbabwean and African insurers with the capacity, expertise, and confidence to underwrite complex risks.</p>
            <div class="hero-animate mt-8 flex flex-wrap items-center justify-center gap-4">
                <a href="#reinsurance-products" class="shine-effect inline-flex items-center gap-2 rounded-md bg-primary-600 px-6 py-3 text-sm font-semibold text-white shadow-lg transition-all duration-300 hover:bg-primary-700">Reinsurance Solutions</a>
                <a href="#specialty-risk" class="inline-flex items-center gap-2 rounded-md border border-white/30 px-6 py-3 text-sm font-semibold text-white transition-all duration-300 hover:border-white hover:bg-white/10">Advisory Services</a>
            </div>
        </div>
    </div>
    <div class="absolute -bottom-1 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>
</section>

<section id="reinsurance-products" class="relative bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <span class="reveal inline-block rounded-lg bg-primary-50 px-4 py-1.5 font-heading text-xs font-semibold uppercase tracking-widest text-primary-700">Core Offerings</span>
            <h2 class="reveal section-title mt-4">Reinsurance Products</h2>
            <p class="reveal section-subtitle mx-auto">Traditional reinsurance capacity across nine core classes, designed to support primary insurers with reliable risk transfer and technical expertise.</p>
        </div>

        <div class="stagger-children mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <a href="{{ route('services.product', 'motor-insurance') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.764a2 2 0 011.789 1.106l1.054 2.108A1 1 0 0121 14v3a1 1 0 01-1 1h-1a2 2 0 11-4 0H9a2 2 0 11-4 0H4a1 1 0 01-1-1v-7a2 2 0 012-2h3m4 0V5a2 2 0 00-2-2H7a1 1 0 00-.707.293L4 5m10 5H8m4 0h2"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Motor Insurance</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Comprehensive motor reinsurance covering private and commercial vehicle fleets, third-party liability, and accidental damage with facultative and treaty capacity across Southern Africa.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.product', 'household') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Household</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Domestic property reinsurance for buildings and contents, covering fire, allied perils, burglary, and weather-related risks for homeowners and tenants across urban and rural markets.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.product', 'engineering') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.573-1.066z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Engineering</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Specialist engineering reinsurance for contractor's all risks, erection all risks, plant & machinery breakdown, and electronic equipment insurance supporting infrastructure projects.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.product', 'assets-all-risks') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Assets All Risks</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Comprehensive all-risks reinsurance for commercial and industrial assets, including property damage, business interruption, and consequential loss on a worldwide coverage basis.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.product', 'liability-insurance') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Liability Insurance</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Comprehensive liability reinsurance covering public liability, product liability, professional indemnity, employers' liability, and directors & officers liability for diverse industries.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.product', 'group-personal-accidents') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Group Personal Accidents</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Group personal accident reinsurance for employers, associations, and affinity groups covering accidental death, permanent and temporary disablement, and medical expense reimbursement.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.product', 'travel-insurance') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Travel Insurance</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Comprehensive travel reinsurance covering medical evacuation, trip cancellation, baggage loss, personal accident, and emergency assistance for both domestic and international travellers.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.product', 'goods-in-transit') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Goods In Transit</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Marine cargo and goods-in-transit reinsurance covering loss or damage to merchandise during transportation by road, rail, air, or sea, including warehouse-to-warehouse extensions.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.product', 'agriculture-insurance') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Agriculture Insurance</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Agricultural reinsurance covering crop, livestock, aquaculture, and forestry risks including weather-index, multi-peril crop, and livestock mortality programmes for smallholder and commercial farming.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>
        </div>
    </div>
</section>

<section id="specialty-risk" class="relative bg-neutral-50 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <span class="reveal inline-block rounded-lg bg-primary-50 px-4 py-1.5 font-heading text-xs font-semibold uppercase tracking-widest text-primary-700">Complex & Emerging Risks</span>
            <h2 class="reveal section-title mt-4">Specialty Risk Insurance</h2>
            <p class="reveal section-subtitle mx-auto">Bespoke reinsurance capacity for complex, high-value, and emerging risks that demand deep technical underwriting expertise and access to global reinsurance markets.</p>
        </div>

        <div class="stagger-children mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <a href="{{ route('services.specialty', 'aviation') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19V5M5 12l7-7 7 7"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Aviation</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Aviation reinsurance covering hull & liability for commercial airlines, general aviation, rotorcraft, airports, and maintenance facilities with access to London and Lloyd's markets.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.specialty', 'bankers-blanket') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Bankers' Blanket</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Comprehensive reinsurance for financial institutions covering fidelity, forgery, theft, computer crime, and internal fraud with tailored limits for commercial and investment banks.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.specialty', 'construction-projects') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Construction Projects</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Project-specific reinsurance for major infrastructure developments covering CAR, EAR, delay in start-up, and third-party liability for roads, bridges, dams, and commercial developments.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.specialty', 'cyber') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Cyber</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Cyber reinsurance covering data breaches, ransomware, business interruption from system failure, network security liability, and privacy regulation defence for corporate and public entities.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.specialty', 'kidnap-and-ransom') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4.5c-.77-.833-2.694-.833-3.464 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Kidnap & Ransom</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Specialist K&R reinsurance covering ransom payments, crisis response consultancy, legal liability, and extortion threats for multinational corporations, executives, and high-net-worth individuals.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.specialty', 'marine-hull') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Marine Hull</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Marine hull reinsurance for ocean-going vessels, coastal craft, fishing fleets, and inland waterway boats covering hull & machinery, war risks, protection & indemnity, and excess liabilities.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.specialty', 'power-projects') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Power Projects</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Energy reinsurance for power generation assets including thermal, hydroelectric, solar, and wind projects covering construction, operational all risks, machinery breakdown, and business interruption.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.specialty', 'political-risks') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Political Risks</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Political risk reinsurance covering expropriation, currency inconvertibility, contract frustration, trade disruption, and sovereign default for cross-border investments and international trade.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.specialty', 'political-violence-terrorism') }}" class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4.5c-.77-.833-2.694-.833-3.464 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-neutral-900">Political Violence & Terrorism</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Specialist reinsurance covering sabotage, terrorism, riots, strikes, civil commotion, and malicious damage for commercial properties, government assets, and strategic infrastructure.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 transition-colors group-hover:text-primary-700">Learn more <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-gradient-to-br from-primary-700 via-primary-600 to-primary-800 py-20 lg:py-28">
    <div class="pointer-events-none absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMjAgMzB2Mmg4di0yaC04em0wLTE2djJoOHYtMmgtOHoiIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSIvPjwvc3ZnPg==')]"></div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="reveal font-heading text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl">Ready to Partner With Us?</h2>
            <p class="reveal mt-6 text-lg leading-relaxed text-primary-100">Contact our team to discuss how Classic Reinsurance Brokers can support your underwriting needs with tailored reinsurance capacity, technical expertise, and market access.</p>
            <div class="reveal mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="btn-primary bg-white text-primary-700 hover:bg-primary-50 hover:text-primary-800 shadow-lg shadow-primary-900/30">Get In Touch</a>
                <a href="tel:+263242773192" class="btn-ghost text-white hover:bg-white/10">+263 242 773192/3/4</a>
            </div>
        </div>
    </div>
</section>
@endsection
