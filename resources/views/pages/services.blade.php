@extends('layouts.app')

@section('title', 'Reinsurance Intermediary Services & Solutions | Classic Reinsurance Brokers')
@section('meta_description', 'Classic Reinsurance Brokers offers reinsurance-to-reinsurance intermediary services and capacity solutions across 9 core products and 9 specialty risk classes for the Zimbabwean and African reinsurance markets.')
@section('meta_keywords', 'reinsurance intermediary Zimbabwe, reinsurance capacity, retrocession solutions, co-reinsurance, treaty reinsurance, facultative reinsurance, specialty risk insurance, reinsurance broker Africa, reinsurance-to-reinsurance, risk distribution Zimbabwe, reinsurance products Africa')
@section('og_title', 'Reinsurance Intermediary Services | Classic Reinsurance Brokers')
@section('og_description', 'Explore our reinsurance-to-reinsurance intermediary services, retrocession solutions, and specialty risk capacity tailored for the Zimbabwean and African reinsurance markets.')

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "Classic Reinsurance Brokers Services",
    "description": "Reinsurance intermediary services, treaty reinsurance, facultative reinsurance, and specialty risk solutions",
    "url": "{{ url()->current() }}",
    "numberOfItems": 18
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What types of reinsurance services does Classic Reinsurance Brokers offer?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We offer comprehensive treaty reinsurance, facultative placement, alternative risk transfer, portfolio optimization, actuarial and analytics, market intelligence, regulatory and capital advisory, and strategic consulting services."
            }
        },
        {
            "@type": "Question",
            "name": "What core reinsurance products do you provide?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We provide reinsurance intermediary services across 9 core product classes: Motor Insurance, Household, Engineering, Assets All Risks, Liability Insurance, Group Personal Accidents, Travel Insurance, Goods In Transit, and Agriculture Insurance."
            }
        },
        {
            "@type": "Question",
            "name": "What specialty risk classes do you cover?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We cover 9 specialty risk classes: Aviation, Bankers' Blanket, Construction Projects, Cyber, Kidnap & Ransom, Marine Hull, Power Projects, Political Risks, and Political Violence & Terrorism."
            }
        },
        {
            "@type": "Question",
            "name": "How does Classic Reinsurance Brokers differ from other brokers?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We operate as a reinsurance-to-reinsurance intermediary, connecting reinsurers with other reinsurers for capacity, expertise, and diversification. We do not underwrite risk directly but facilitate retrocession and co-reinsurance placements between leading global and regional reinsurer partners."
            }
        }
    ]
}
</script>
@endpush

@section('content')
{{-- Hero --}}
<section class="relative min-h-[55vh] flex items-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/serviceshero.png') }}" alt="" class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-900/80 via-neutral-950/85 to-neutral-950"></div>
    </div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/5 w-2 h-2 bg-primary-400/30 rounded-full animate-float" style="animation-delay: 0s; animation-duration: 6s;"></div>
        <div class="absolute top-1/3 right-1/4 w-1.5 h-1.5 bg-primary-300/20 rounded-full animate-float" style="animation-delay: 1s; animation-duration: 8s;"></div>
        <div class="absolute top-2/3 left-1/3 w-2.5 h-2.5 bg-primary-500/25 rounded-full animate-float" style="animation-delay: 2s; animation-duration: 7s;"></div>
        <div class="absolute bottom-1/4 right-1/5 w-1 h-1 bg-primary-200/30 rounded-full animate-float" style="animation-delay: 0.5s; animation-duration: 9s;"></div>
    </div>
    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8 py-24 lg:py-32 w-full">
        <div class="max-w-3xl">
            <span class="fade-up inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1.5 text-xs font-semibold text-primary-200">Our services</span>
            <h1 class="fade-up mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl" style="transition-delay: 0.1s">Reinsurance Solutions & Advisory</h1>
            <p class="fade-up mt-6 max-w-xl text-lg leading-relaxed text-neutral-300" style="transition-delay: 0.2s">We navigate the complex world of risk distribution. Our comprehensive suite of intermediary services connects reinsurers across 9 core products and 9 specialty risk classes for optimal capacity sharing.</p>
            <div class="fade-up mt-8 flex flex-wrap gap-4" style="transition-delay: 0.3s">
                <a href="#reinsurance-products" class="btn bg-white text-primary-700 hover:bg-primary-50">Reinsurance solutions</a>
                <a href="#specialty-risk" class="btn btn-outline-white">Specialty risk</a>
            </div>
        </div>
    </div>
</section>

{{-- Products --}}
<section id="reinsurance-products" class="bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up max-w-2xl">
            <span class="section-label text-primary-600">Core offerings</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-neutral-900 sm:text-4xl lg:text-5xl">Reinsurance Products</h2>
            <p class="mt-4 text-lg leading-relaxed text-neutral-600">Traditional reinsurance capacity across nine core classes, connecting reinsurers for reliable retrocession, co-reinsurance, and portfolio diversification.</p>
        </div>
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <a href="{{ route('services.product', 'motor-insurance') }}" class="fade-up card border-neutral-200 bg-white p-6 group hover:shadow-lg hover:shadow-primary-500/10">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.764a2 2 0 011.789 1.106l1.054 2.108A1 1 0 0121 14v3a1 1 0 01-1 1h-1a2 2 0 11-4 0H9a2 2 0 11-4 0H4a1 1 0 01-1-1v-7a2 2 0 012-2h3m4 0V5a2 2 0 00-2-2H7a1 1 0 00-.707.293L4 5m10 5H8m4 0h2"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">Motor Insurance</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Comprehensive reinsurance solutions for motor fleet and individual vehicle risks, providing financial protection against accidents, theft, and liability.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <a href="{{ route('services.product', 'household') }}" class="fade-up card border-neutral-200 bg-white p-6 group hover:shadow-lg hover:shadow-primary-500/10" style="transition-delay: 0.05s">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">Household</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Household reinsurance coverage protecting against property damage, theft, and liability risks for residential properties.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <a href="{{ route('services.product', 'engineering') }}" class="fade-up card border-neutral-200 bg-white p-6 group hover:shadow-lg hover:shadow-primary-500/10" style="transition-delay: 0.1s">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.573-1.066z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">Engineering</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Specialized engineering reinsurance covering construction risks, machinery breakdown, and electronic equipment protection.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <a href="{{ route('services.product', 'assets-all-risks') }}" class="fade-up card border-neutral-200 bg-white p-6 group hover:shadow-lg hover:shadow-primary-500/10" style="transition-delay: 0.15s">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">Assets All Risks</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Comprehensive coverage for business assets against physical loss or damage from a wide range of perils.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <a href="{{ route('services.product', 'liability-insurance') }}" class="fade-up card border-neutral-200 bg-white p-6 group hover:shadow-lg hover:shadow-primary-500/10" style="transition-delay: 0.2s">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">Liability Insurance</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Protection against third-party liability claims, including public liability, product liability, and professional indemnity.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <a href="{{ route('services.product', 'group-personal-accidents') }}" class="fade-up card border-neutral-200 bg-white p-6 group hover:shadow-lg hover:shadow-primary-500/10" style="transition-delay: 0.25s">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">Group Personal Accidents</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Coverage for groups of individuals against accidental injury, disability, or death, often provided as employee benefits.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <a href="{{ route('services.product', 'travel-insurance') }}" class="fade-up card border-neutral-200 bg-white p-6 group hover:shadow-lg hover:shadow-primary-500/10" style="transition-delay: 0.3s">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">Travel Insurance</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Coverage for travelers against unforeseen events such as trip cancellations, medical emergencies, and lost luggage.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <a href="{{ route('services.product', 'goods-in-transit') }}" class="fade-up card border-neutral-200 bg-white p-6 group hover:shadow-lg hover:shadow-primary-500/10" style="transition-delay: 0.35s">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">Goods In Transit</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Protection for goods and merchandise while in transit by road, rail, sea, or air against damage, theft, or loss.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <a href="{{ route('services.product', 'agriculture-insurance') }}" class="fade-up card border-neutral-200 bg-white p-6 group hover:shadow-lg hover:shadow-primary-500/10" style="transition-delay: 0.4s">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">Agriculture Insurance</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Specialized coverage for agricultural risks including crop failure, livestock mortality, and equipment damage.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
        </div>
    </div>
</section>

{{-- Specialty --}}
<section id="specialty-risk" class="bg-neutral-950 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up max-w-2xl">
            <span class="section-label text-primary-400">Complex & emerging risks</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Specialty Risk Insurance</h2>
            <p class="mt-4 text-lg leading-relaxed text-neutral-400">Bespoke retrocession and co-reinsurance capacity for complex, high-value, and emerging risks, connecting reinsurers with specialist markets across Africa and globally.</p>
        </div>
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <a href="{{ route('services.specialty', 'aviation') }}" class="fade-up card-glass p-6 group">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19V5M5 12l7-7 7 7"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-white group-hover:text-primary-400 transition-colors">Aviation</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-400">Comprehensive aviation reinsurance solutions covering hull, liability, and passenger risks for commercial and private aircraft.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-400">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <a href="{{ route('services.specialty', 'bankers-blanket') }}" class="fade-up card-glass p-6 group" style="transition-delay: 0.05s">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-white group-hover:text-primary-400 transition-colors">Bankers' Blanket</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-400">Specialized coverage protecting financial institutions against fraud, theft, and other criminal activities.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-400">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <a href="{{ route('services.specialty', 'construction-projects') }}" class="fade-up card-glass p-6 group" style="transition-delay: 0.1s">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-white group-hover:text-primary-400 transition-colors">Construction Projects</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-400">Tailored reinsurance solutions for major construction projects, covering contractors' all risks and related liabilities.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-400">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <a href="{{ route('services.specialty', 'cyber') }}" class="fade-up card-glass p-6 group" style="transition-delay: 0.15s">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-white group-hover:text-primary-400 transition-colors">Cyber</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-400">Protection against cyber threats, data breaches, and associated business interruption and liability costs.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-400">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <a href="{{ route('services.specialty', 'kidnap-and-ransom') }}" class="fade-up card-glass p-6 group" style="transition-delay: 0.2s">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4.5c-.77-.833-2.694-.833-3.464 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-white group-hover:text-primary-400 transition-colors">Kidnap & Ransom</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-400">Specialized coverage for kidnapping, ransom demands, and extortion threats against individuals and organizations.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-400">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <a href="{{ route('services.specialty', 'marine-hull') }}" class="fade-up card-glass p-6 group" style="transition-delay: 0.25s">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-white group-hover:text-primary-400 transition-colors">Marine Hull</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-400">Coverage for vessels against physical damage, collision liability, and other maritime risks.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-400">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <a href="{{ route('services.specialty', 'power-projects') }}" class="fade-up card-glass p-6 group" style="transition-delay: 0.3s">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-white group-hover:text-primary-400 transition-colors">Power Projects</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-400">Specialized coverage for power generation facilities during construction and operational phases.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-400">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <a href="{{ route('services.specialty', 'political-risks') }}" class="fade-up card-glass p-6 group" style="transition-delay: 0.35s">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-white group-hover:text-primary-400 transition-colors">Political Risks</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-400">Protection against government actions, currency inconvertibility, and contract frustration in foreign markets.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-400">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <a href="{{ route('services.specialty', 'political-violence-terrorism') }}" class="fade-up card-glass p-6 group" style="transition-delay: 0.4s">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4.5c-.77-.833-2.694-.833-3.464 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-white group-hover:text-primary-400 transition-colors">Political Violence & Terrorism</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-400">Coverage against damage caused by political violence, terrorism, strikes, riots, and civil commotion.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-400">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="hero-gradient py-20 lg:py-28">
    <div class="mx-auto max-w-3xl px-6 text-center lg:px-8">
        <div class="fade-up">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Ready to partner with us?</h2>
            <p class="mt-6 text-lg leading-relaxed text-primary-100">Contact our team to discuss how Classic Reinsurance Brokers can facilitate your capacity requirements with tailored retrocession arrangements, technical expertise, and market access.</p>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="btn bg-white text-primary-700 hover:bg-primary-50 text-base px-8 py-3">Get in touch</a>
                <a href="tel:+263242773192" class="btn btn-outline-white text-base px-8 py-3">+263 242 773192/3/4</a>
            </div>
        </div>
    </div>
</section>
@endsection