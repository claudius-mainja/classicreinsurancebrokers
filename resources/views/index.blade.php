@extends('layouts.app')

@section('title', 'Classic Reinsurance Brokers - Premier Reinsurance Broker in Zimbabwe')
@section('description', 'Classic Reinsurance Brokers is Zimbabwe\'s premier reinsurance intermediary, offering treaty reinsurance, facultative placement, and alternative risk transfer solutions for the Zimbabwean market.')

@section('content')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "InsuranceBroker",
    "name": "Classic Reinsurance Brokers",
    "description": "Premier reinsurance brokerage firm based in Harare, Zimbabwe, offering comprehensive reinsurance solutions for the Zimbabwean market.",
    "url": "{{ url('/') }}",
    "telephone": "+263 242 773192",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "11th Floor Fidelity Life Tower, 5 Raleigh Street",
        "addressLocality": "Harare",
        "addressCountry": "ZW"
    },
    "areaServed": "Zimbabwe",
    "foundingDate": "2015",
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+263 242 773192",
        "contactType": "customer service",
        "email": "info@classicre.co.zw"
    }
}
</script>

{{-- Hero --}}
<section class="relative flex min-h-screen items-center justify-center overflow-hidden bg-neutral-950">
    <div class="absolute inset-0">
        <img src="{{ asset('images/herobg.png') }}" alt="" class="h-full w-full object-cover opacity-40">
        <div class="absolute inset-0 bg-gradient-to-b from-neutral-950/70 via-neutral-950/60 to-neutral-950"></div>
    </div>
    <div class="relative z-10 mx-auto max-w-7xl px-6 text-center">
        <div class="mx-auto max-w-4xl">
            <span class="hero-animate mb-6 inline-block text-xs font-semibold uppercase tracking-[0.25em] text-neutral-500">Zimbabwe's Premier Reinsurance Broker</span>
            <h1 class="hero-animate font-heading text-5xl font-extrabold leading-tight tracking-tight text-white sm:text-6xl lg:text-7xl">
                Reinsurance Broking<br>
                <span class="text-primary-400">for Zimbabwe</span>
            </h1>
            <p class="hero-animate mx-auto mt-6 max-w-3xl text-lg leading-relaxed text-neutral-400">
                Classic Reinsurance Brokers delivers specialist reinsurance broking services to insurance companies across Zimbabwe, combining deep local expertise with strong international reinsurer relationships.
            </p>
            <div class="hero-animate mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a href="{{ route('contact') }}" class="btn-primary">Schedule a Consultation</a>
                <a href="#solutions" class="btn-outline-light">Explore Solutions</a>
            </div>
        </div>
    </div>
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2">
        <svg class="h-5 w-5 animate-bounce text-neutral-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
    </div>
</section>

{{-- Client logo marquee --}}
<section class="border-b border-neutral-100 bg-neutral-50 py-10">
    <div class="mx-auto max-w-7xl px-6">
        <p class="mb-6 text-center text-xs font-semibold uppercase tracking-[0.2em] text-neutral-400">Trusted by leading insurers across Zimbabwe</p>
        <div class="overflow-hidden">
            <div class="marquee-track">
                <div class="flex items-center gap-16 px-8">
                    <span class="text-lg font-bold tracking-tight text-neutral-300">Zimbabwe Insure</span>
                    <span class="text-lg font-bold tracking-tight text-neutral-300">Old Mutual</span>
                    <span class="text-lg font-bold tracking-tight text-neutral-300">ZimRe</span>
                    <span class="text-lg font-bold tracking-tight text-neutral-300">FMRE</span>
                    <span class="text-lg font-bold tracking-tight text-neutral-300">NICOZ Diamond</span>
                    <span class="text-lg font-bold tracking-tight text-neutral-300">Hollard Zimbabwe</span>
                    <span class="text-lg font-bold tracking-tight text-neutral-300">First Mutual</span>
                    <span class="text-lg font-bold tracking-tight text-neutral-300">ZEP-RE</span>
                    <span class="text-lg font-bold tracking-tight text-neutral-300">Zimbabwe Insure</span>
                    <span class="text-lg font-bold tracking-tight text-neutral-300">Old Mutual</span>
                    <span class="text-lg font-bold tracking-tight text-neutral-300">ZimRe</span>
                    <span class="text-lg font-bold tracking-tight text-neutral-300">FMRE</span>
                    <span class="text-lg font-bold tracking-tight text-neutral-300">NICOZ Diamond</span>
                    <span class="text-lg font-bold tracking-tight text-neutral-300">Hollard Zimbabwe</span>
                    <span class="text-lg font-bold tracking-tight text-neutral-300">First Mutual</span>
                    <span class="text-lg font-bold tracking-tight text-neutral-300">ZEP-RE</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About --}}
<section class="overflow-hidden bg-white py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid items-center gap-16 lg:grid-cols-2">
            <div class="reveal-left relative">
                <div class="aspect-[4/3] overflow-hidden rounded-2xl">
                    <img src="{{ asset('images/abouthome.png') }}" alt="Classic Reinsurance Brokers Zimbabwe office" class="img-reveal h-full w-full object-cover">
                </div>
                <div class="absolute -bottom-6 -right-6 hidden rounded-2xl bg-primary-600 p-6 shadow-xl lg:block">
                    <p class="stat-value text-4xl font-extrabold tracking-tight text-white" data-target="10" data-suffix="+"></p>
                    <p class="text-sm font-medium text-primary-200">Years of Service</p>
                </div>
            </div>
            <div class="reveal-right">
                <span class="section-label">About</span>
                <h2 class="mt-4 font-heading text-4xl font-extrabold tracking-tight text-neutral-900 sm:text-5xl">Zimbabwe's Trusted Reinsurance Broker</h2>
                <p class="mt-6 text-base leading-relaxed text-neutral-600">Classic Reinsurance Brokers is a premier independent reinsurance brokerage firm headquartered in Harare, Zimbabwe. Licensed and regulated by the Insurance and Pensions Commission (IPEC), we provide innovative reinsurance solutions to insurance companies across Zimbabwe.</p>
                <p class="mt-4 text-base leading-relaxed text-neutral-600">Our team brings extensive experience in the Zimbabwean insurance market, offering deep technical expertise in treaty reinsurance, facultative placements, and strategic advisory services.</p>
                <div class="mt-8 grid grid-cols-2 gap-3">
                    <div class="rounded-xl border border-neutral-100 bg-neutral-50 p-4">
                        <p class="text-lg font-bold text-primary-600">IPEC</p>
                        <p class="text-xs text-neutral-500">Licensed & Regulated</p>
                    </div>
                    <div class="rounded-xl border border-neutral-100 bg-neutral-50 p-4">
                        <p class="text-lg font-bold text-primary-600">Global</p>
                        <p class="text-xs text-neutral-500">International Markets</p>
                    </div>
                    <div class="rounded-xl border border-neutral-100 bg-neutral-50 p-4">
                        <p class="text-lg font-bold text-primary-600">A2 Rated</p>
                        <p class="text-xs text-neutral-500">Partner Reinsurers</p>
                    </div>
                    <div class="rounded-xl border border-neutral-100 bg-neutral-50 p-4">
                        <p class="text-lg font-bold text-primary-600">Claims</p>
                        <p class="text-xs text-neutral-500">Advocacy Support</p>
                    </div>
                </div>
                <a href="{{ route('services') }}" class="mt-8 inline-flex items-center gap-2 rounded-full bg-primary-600 px-6 py-3 text-sm font-semibold text-white transition-all duration-300 hover:bg-primary-700">
                    Explore Our Services
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Core Services --}}
<section id="solutions" class="bg-neutral-950 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <span class="section-label justify-center text-neutral-500 before:bg-neutral-700">What We Do</span>
            <h2 class="reveal mt-4 font-heading text-4xl font-extrabold tracking-tight text-white sm:text-5xl">Reinsurance Broking Solutions</h2>
            <p class="reveal mt-4 text-neutral-400">Comprehensive reinsurance broking programmes designed for the unique risk environment of Zimbabwe.</p>
        </div>

        <div class="reveal-stagger reveal mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <div class="service-card bg-neutral-900/50 p-8 text-center" style="border-color: rgba(255,255,255,0.06);">
                <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-xl bg-primary-600/10 text-primary-400">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white">Treaty Reinsurance</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-400">Proportional and non-proportional treaty arrangements tailored to Zimbabwean insurers' portfolios.</p>
            </div>
            <div class="service-card bg-neutral-900/50 p-8 text-center" style="border-color: rgba(255,255,255,0.06);">
                <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-xl bg-primary-600/10 text-primary-400">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white">Facultative Placement</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-400">Access to A-rated global reinsurers for large or complex risks across Zimbabwe.</p>
            </div>
            <div class="service-card bg-neutral-900/50 p-8 text-center" style="border-color: rgba(255,255,255,0.06);">
                <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-xl bg-primary-600/10 text-primary-400">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white">Alternative Risk Transfer</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-400">Innovative risk financing including parametric solutions and structured reinsurance products.</p>
            </div>
            <div class="service-card bg-neutral-900/50 p-8 text-center" style="border-color: rgba(255,255,255,0.06);">
                <div class="mx-auto mb-5 flex h-14 w-14 items-center justify-center rounded-xl bg-primary-600/10 text-primary-400">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white">Portfolio Optimisation</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-400">Strategic portfolio analysis using advanced modelling to optimise retention levels.</p>
            </div>
        </div>

        <div class="reveal mt-12 text-center">
            <a href="{{ route('services') }}" class="btn-outline-light">View All Services</a>
        </div>
    </div>
</section>

{{-- Service cards (salo-style full-width) --}}
<section class="bg-white py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <span class="section-label justify-center">Our Products</span>
            <h2 class="reveal mt-4 font-heading text-4xl font-extrabold tracking-tight text-neutral-900 sm:text-5xl">Reinsurance Solutions</h2>
            <p class="reveal mt-4 text-neutral-500">Traditional reinsurance capacity across nine core classes.</p>
        </div>

        <div class="reveal mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <a href="{{ route('services.product', 'motor-insurance') }}" class="service-card group p-8">
                <div class="service-icon mb-4">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.764a2 2 0 011.789 1.106l1.054 2.108A1 1 0 0121 14v3a1 1 0 01-1 1h-1a2 2 0 11-4 0H9a2 2 0 11-4 0H4a1 1 0 01-1-1v-7a2 2 0 012-2h3m4 0V5a2 2 0 00-2-2H7a1 1 0 00-.707.293L4 5m10 5H8m4 0h2"/></svg>
                </div>
                <h3 class="font-heading text-lg font-bold text-neutral-900">Motor Insurance</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Comprehensive motor reinsurance covering private and commercial vehicle fleets, third-party liability, and accidental damage.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600">Learn more <svg class="h-3.5 w-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.product', 'engineering') }}" class="service-card group p-8">
                <div class="service-icon mb-4">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.573-1.066z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h3 class="font-heading text-lg font-bold text-neutral-900">Engineering</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Specialist engineering reinsurance for CAR, EAR, plant & machinery breakdown, and electronic equipment insurance.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600">Learn more <svg class="h-3.5 w-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.product', 'household') }}" class="service-card group p-8">
                <div class="service-icon mb-4">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                </div>
                <h3 class="font-heading text-lg font-bold text-neutral-900">Household</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Domestic property reinsurance for buildings and contents, covering fire, allied perils, burglary, and weather-related risks.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600">Learn more <svg class="h-3.5 w-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.product', 'assets-all-risks') }}" class="service-card group p-8">
                <div class="service-icon mb-4">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
                <h3 class="font-heading text-lg font-bold text-neutral-900">Assets All Risks</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Comprehensive all-risks reinsurance for commercial and industrial assets, including property damage and business interruption.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600">Learn more <svg class="h-3.5 w-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.product', 'liability-insurance') }}" class="service-card group p-8">
                <div class="service-icon mb-4">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-heading text-lg font-bold text-neutral-900">Liability Insurance</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Comprehensive liability reinsurance covering public liability, professional indemnity, and directors & officers liability.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600">Learn more <svg class="h-3.5 w-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>

            <a href="{{ route('services.product', 'agriculture-insurance') }}" class="service-card group p-8">
                <div class="service-icon mb-4">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                </div>
                <h3 class="font-heading text-lg font-bold text-neutral-900">Agriculture Insurance</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Agricultural reinsurance covering crop, livestock, and weather-index programmes for smallholder and commercial farming.</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600">Learn more <svg class="h-3.5 w-3.5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
            </a>
        </div>
    </div>
</section>

{{-- Stats --}}
<section class="border-y border-neutral-100 bg-neutral-50 py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-8 text-center sm:grid-cols-2 lg:grid-cols-4">
            <div class="reveal-scale">
                <p class="stat-number text-primary-600"><span class="stat-value" data-target="10" data-suffix="+"></span></p>
                <p class="stat-label">Years of Experience</p>
            </div>
            <div class="reveal-scale">
                <p class="stat-number text-primary-600"><span class="stat-value" data-target="50" data-suffix="+"></span></p>
                <p class="stat-label">Global Reinsurer Partners</p>
            </div>
            <div class="reveal-scale">
                <p class="stat-number text-primary-600"><span class="stat-value" data-target="9" data-suffix=""></span></p>
                <p class="stat-label">Core Product Classes</p>
            </div>
            <div class="reveal-scale">
                <p class="stat-number text-primary-600"><span class="stat-value" data-target="9" data-suffix=""></span></p>
                <p class="stat-label">Specialty Risk Classes</p>
            </div>
        </div>
    </div>
</section>

{{-- Specialty risks --}}
<section class="bg-white py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <span class="section-label justify-center">Specialty Classes</span>
            <h2 class="reveal mt-4 font-heading text-4xl font-extrabold tracking-tight text-neutral-900 sm:text-5xl">Specialty Risk Insurance</h2>
            <p class="reveal mt-4 text-neutral-500">Bespoke reinsurance capacity for complex, high-value, and emerging risks.</p>
        </div>

        <div class="reveal mt-16 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <a href="{{ route('services.specialty', 'aviation') }}" class="service-card flex items-center gap-4 p-5">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19V5M5 12l7-7 7 7"/></svg>
                </div>
                <div>
                    <h3 class="font-semibold text-neutral-900">Aviation</h3>
                    <p class="text-sm text-neutral-500">Hull & liability reinsurance</p>
                </div>
            </a>
            <a href="{{ route('services.specialty', 'bankers-blanket') }}" class="service-card flex items-center gap-4 p-5">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-primary-50 text-primary-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                    <h3 class="font-semibold text-neutral-900">Bankers' Blanket</h3>
                    <p class="text-sm text-neutral-500">Financial institution fidelity</p>
                </div>
            </a>
            <a href="{{ route('services.specialty', 'construction-projects') }}" class="service-card flex items-center gap-4 p-5">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-primary-50 text-primary-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <div>
                    <h3 class="font-semibold text-neutral-900">Construction Projects</h3>
                    <p class="text-sm text-neutral-500">Infrastructure & development</p>
                </div>
            </a>
            <a href="{{ route('services.specialty', 'cyber') }}" class="service-card flex items-center gap-4 p-5">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-primary-50 text-primary-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                </div>
                <div>
                    <h3 class="font-semibold text-neutral-900">Cyber</h3>
                    <p class="text-sm text-neutral-500">Data breach & ransomware</p>
                </div>
            </a>
            <a href="{{ route('services.specialty', 'marine-hull') }}" class="service-card flex items-center gap-4 p-5">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-primary-50 text-primary-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                    <h3 class="font-semibold text-neutral-900">Marine Hull</h3>
                    <p class="text-sm text-neutral-500">Vessel & cargo reinsurance</p>
                </div>
            </a>
            <a href="{{ route('services.specialty', 'power-projects') }}" class="service-card flex items-center gap-4 p-5">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-primary-50 text-primary-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <div>
                    <h3 class="font-semibold text-neutral-900">Power Projects</h3>
                    <p class="text-sm text-neutral-500">Energy & generation assets</p>
                </div>
            </a>
            <a href="{{ route('services.specialty', 'kidnap-and-ransom') }}" class="service-card flex items-center gap-4 p-5">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-primary-50 text-primary-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4.5c-.77-.833-2.694-.833-3.464 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
                </div>
                <div>
                    <h3 class="font-semibold text-neutral-900">Kidnap & Ransom</h3>
                    <p class="text-sm text-neutral-500">Executive & corporate protection</p>
                </div>
            </a>
            <a href="{{ route('services.specialty', 'political-risks') }}" class="service-card flex items-center gap-4 p-5">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-primary-50 text-primary-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                    <h3 class="font-semibold text-neutral-900">Political Risks</h3>
                    <p class="text-sm text-neutral-500">Expropriation & contract frustration</p>
                </div>
            </a>
            <a href="{{ route('services.specialty', 'political-violence-terrorism') }}" class="service-card flex items-center gap-4 p-5">
                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-primary-50 text-primary-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4.5c-.77-.833-2.694-.833-3.464 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
                </div>
                <div>
                    <h3 class="font-semibold text-neutral-900">Political Violence & Terrorism</h3>
                    <p class="text-sm text-neutral-500">Sabotage & civil commotion</p>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- Why ClassicRE --}}
<section class="bg-neutral-50 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid items-center gap-16 lg:grid-cols-2">
            <div class="reveal-left">
                <span class="section-label">Why ClassicRE</span>
                <h2 class="mt-4 font-heading text-4xl font-extrabold tracking-tight text-neutral-900 sm:text-5xl">The ClassicRE Difference</h2>
                <p class="mt-6 text-neutral-600">What sets us apart as Zimbabwe's trusted reinsurance intermediary.</p>
                <div class="mt-8 space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-primary-100 text-primary-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.893 13.393l-3.444 3.444a3.019 3.019 0 002.025 2.835l.712.237a3.01 3.01 0 001.666-2.887 3 3 0 00-.959-2.629zM8.572 14.45l5.42-5.42a3.004 3.004 0 000-4.242l-2.122-2.12a1.5 1.5 0 00-2.121 0L5.98 5.979a3.01 3.01 0 00-.86 2.519l.476 2.85a.75.75 0 01-.194.638L2.72 14.59a.75.75 0 000 1.06l2.121 2.122a.75.75 0 001.061 0l2.844-2.844a.75.75 0 01.638-.194l2.85.476a3.015 3.015 0 002.518-.86z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-neutral-900">Zimbabwe Market Specialists</h3>
                            <p class="mt-1 text-sm text-neutral-500">Deep understanding of the local insurance landscape, regulatory environment, and risk dynamics.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-primary-100 text-primary-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-neutral-900">Global Reinsurer Access</h3>
                            <p class="mt-1 text-sm text-neutral-500">Relationships with over 50 international reinsurers, giving our clients access to the best capacity and terms.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-primary-100 text-primary-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-neutral-900">IPEC Compliant</h3>
                            <p class="mt-1 text-sm text-neutral-500">Fully licensed and regulated by the Insurance and Pensions Commission of Zimbabwe.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-primary-100 text-primary-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.589-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.589-1.202L5.25 4.971z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-neutral-900">Claims Advocacy</h3>
                            <p class="mt-1 text-sm text-neutral-500">Dedicated claims support throughout the entire lifecycle, ensuring fair and prompt settlement.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reveal-right">
                <div class="aspect-[4/3] overflow-hidden rounded-2xl">
                    <img src="{{ asset('images/aboutusabout.png') }}" alt="Advisory services" class="img-reveal h-full w-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="relative overflow-hidden bg-neutral-950 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 text-center">
        <div class="reveal-scale mx-auto max-w-3xl">
            <h2 class="font-heading text-4xl font-extrabold tracking-tight text-white sm:text-5xl">Partner with Zimbabwe's Premier Reinsurance Broker</h2>
            <p class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-neutral-400">Whether you are an established insurer seeking to optimise your existing reinsurance programme or a new market entrant needing guidance on structuring your risk transfer framework, our team is ready to assist.</p>
            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a href="{{ route('contact') }}" class="btn-primary">Request a Consultation</a>
                <a href="tel:+263242773192" class="btn-outline-light">+263 242 773 192</a>
            </div>
        </div>
    </div>
</section>
@endsection
