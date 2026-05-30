@extends('layouts.app')

@section('title', config('app.name') . ' — Zimbabwe\'s Premier Reinsurance Broker')
@section('meta_description', 'Classic Reinsurance Brokers delivers innovative and tailored reinsurance solutions to insurance companies across Zimbabwe. Expert treaty, facultative, and advisory services.')
@section('og_title', config('app.name') . ' — Premier Reinsurance Broker in Zimbabwe')

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "InsuranceBrokerage",
    "name": "Classic Reinsurance Brokers",
    "description": "Zimbabwe's premier reinsurance broker delivering innovative and tailored reinsurance solutions.",
    "url": "{{ url('/') }}",
    "telephone": "+263242773192",
    "email": "info@classicre.co.zw",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "11th Floor Fidelity Life Tower, 5 Raleigh Street",
        "addressLocality": "Harare",
        "addressCountry": "ZW"
    }
}
</script>
@endpush

@section('content')
{{-- Hero --}}
<section class="relative min-h-[85vh] flex items-center overflow-hidden bg-white">
    <div class="absolute inset-0">
        <img src="{{ asset('images/herobg.png') }}" alt="" class="h-full w-full object-cover opacity-15">
        <div class="absolute inset-0 bg-gradient-to-br from-white/80 via-white/60 to-white/90"></div>
    </div>
    <div class="relative mx-auto max-w-7xl px-6 lg:px-8 py-24 lg:py-32">
        <div class="max-w-3xl">
            <span class="fade-up inline-flex items-center gap-2 rounded-full bg-primary-50 px-4 py-1.5 text-xs font-semibold text-primary-700">Trusted by insurers across Zimbabwe</span>
            <h1 class="fade-up mt-6 text-5xl font-extrabold tracking-tight text-neutral-950 sm:text-6xl lg:text-7xl" style="transition-delay: 0.1s">
                Your trusted partner in reinsurance.
            </h1>
            <p class="fade-up mt-6 max-w-xl text-lg leading-relaxed text-neutral-500 sm:text-xl" style="transition-delay: 0.2s">
                Classic Reinsurance Brokers delivers expert treaty, facultative, and advisory services — helping Zimbabwean insurers manage risk with confidence.
            </p>
            <div class="fade-up mt-8 flex flex-wrap gap-4" style="transition-delay: 0.3s">
                <a href="{{ route('contact') }}" class="btn btn-primary text-base px-8 py-3">
                    Start a conversation
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg>
                </a>
                <a href="{{ route('services') }}" class="btn btn-outline text-base px-8 py-3">Our services</a>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-neutral-200 to-transparent"></div>
</section>

{{-- Client logos --}}
<section class="border-b border-neutral-100 bg-neutral-50/50 py-10">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="text-center text-xs font-medium uppercase tracking-widest text-neutral-400">Trusted by leading insurers</p>
        <div class="mt-6 overflow-hidden">
            <div class="marquee-track">
                <div class="flex items-center gap-16 px-8">
                    <span class="text-sm font-semibold text-neutral-400 uppercase tracking-wider whitespace-nowrap">Zimbabwe Insurers Association</span>
                    <span class="text-sm font-semibold text-neutral-400 uppercase tracking-wider whitespace-nowrap">IPEC</span>
                    <span class="text-sm font-semibold text-neutral-400 uppercase tracking-wider whitespace-nowrap">Insurance Institute of Zimbabwe</span>
                    <span class="text-sm font-semibold text-neutral-400 uppercase tracking-wider whitespace-nowrap">African Reinsurance Corporation</span>
                    <span class="text-sm font-semibold text-neutral-400 uppercase tracking-wider whitespace-nowrap">ZEP-RE</span>
                    <span class="text-sm font-semibold text-neutral-400 uppercase tracking-wider whitespace-nowrap">CICA Re</span>
                    <span class="text-sm font-semibold text-neutral-400 uppercase tracking-wider whitespace-nowrap">Continental Re</span>
                    <span class="text-sm font-semibold text-neutral-400 uppercase tracking-wider whitespace-nowrap">Kenya Re</span>
                </div>
                <div class="flex items-center gap-16 px-8">
                    <span class="text-sm font-semibold text-neutral-400 uppercase tracking-wider whitespace-nowrap">Zimbabwe Insurers Association</span>
                    <span class="text-sm font-semibold text-neutral-400 uppercase tracking-wider whitespace-nowrap">IPEC</span>
                    <span class="text-sm font-semibold text-neutral-400 uppercase tracking-wider whitespace-nowrap">Insurance Institute of Zimbabwe</span>
                    <span class="text-sm font-semibold text-neutral-400 uppercase tracking-wider whitespace-nowrap">African Reinsurance Corporation</span>
                    <span class="text-sm font-semibold text-neutral-400 uppercase tracking-wider whitespace-nowrap">ZEP-RE</span>
                    <span class="text-sm font-semibold text-neutral-400 uppercase tracking-wider whitespace-nowrap">CICA Re</span>
                    <span class="text-sm font-semibold text-neutral-400 uppercase tracking-wider whitespace-nowrap">Continental Re</span>
                    <span class="text-sm font-semibold text-neutral-400 uppercase tracking-wider whitespace-nowrap">Kenya Re</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About intro --}}
<section class="py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid items-center gap-16 lg:grid-cols-2">
            <div class="fade-up">
                <span class="section-label">About</span>
                <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl">Who we are</h2>
                <p class="mt-6 text-lg leading-relaxed text-neutral-500">
                    Classic Reinsurance Brokers is a leading independent reinsurance brokerage firm headquartered in Harare, Zimbabwe. We specialise in providing comprehensive reinsurance broking, advisory, and risk management solutions to insurance companies across Zimbabwe.
                </p>
                <p class="mt-4 text-lg leading-relaxed text-neutral-500">
                    Founded on integrity, professionalism, and technical excellence, our team brings decades of combined experience in the insurance and reinsurance industry.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('about') }}" class="btn btn-outline">Learn more about us</a>
                </div>
            </div>
            <div class="fade-up relative" style="transition-delay: 0.15s">
                <div class="aspect-[4/3] overflow-hidden rounded-2xl bg-neutral-100">
                    <img src="{{ asset('images/abouthome.png') }}" alt="Classic Reinsurance Brokers" class="h-full w-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Core services --}}
<section class="border-t border-neutral-100 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up max-w-2xl">
            <span class="section-label">Services</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl">What we do</h2>
            <p class="mt-4 text-lg leading-relaxed text-neutral-500">Comprehensive reinsurance solutions across four core areas, designed to support primary insurers with reliable risk transfer and technical expertise.</p>
        </div>
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <div class="fade-up card p-8">
                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary-50 text-primary-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3"/></svg>
                </div>
                <h3 class="mt-5 text-lg font-bold text-neutral-900">Treaty Reinsurance</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Proportional and non-proportional treaty structures including quota share, surplus, and excess of loss arrangements.</p>
                <a href="{{ route('services') }}" class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 hover:text-primary-700">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></a>
            </div>
            <div class="fade-up card p-8" style="transition-delay: 0.1s">
                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary-50 text-primary-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="mt-5 text-lg font-bold text-neutral-900">Facultative Placements</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Individual risk placements for large or complex exposures requiring bespoke underwriting and access to specialist markets.</p>
                <a href="{{ route('services') }}" class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 hover:text-primary-700">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></a>
            </div>
            <div class="fade-up card p-8" style="transition-delay: 0.2s">
                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary-50 text-primary-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                </div>
                <h3 class="mt-5 text-lg font-bold text-neutral-900">Alternative Risk Transfer</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Innovative solutions including parametric insurance, structured products, and capital market instruments for emerging risk exposures.</p>
                <a href="{{ route('services') }}" class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 hover:text-primary-700">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></a>
            </div>
            <div class="fade-up card p-8" style="transition-delay: 0.3s">
                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary-50 text-primary-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582"/></svg>
                </div>
                <h3 class="mt-5 text-lg font-bold text-neutral-900">Portfolio Management</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Strategic advisory on reinsurance programme design, regulatory compliance, risk modelling, capital management, and market intelligence.</p>
                <a href="{{ route('services') }}" class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600 hover:text-primary-700">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></a>
            </div>
        </div>
        <div class="fade-up mt-10 text-center">
            <a href="{{ route('services') }}" class="btn btn-outline">View all services <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></a>
        </div>
    </div>
</section>

{{-- Stats --}}
<section class="border-y border-neutral-100 bg-neutral-50/50 py-16 lg:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <div class="fade-up text-center">
                <div class="stat-value">10+</div>
                <p class="stat-label">Years of experience</p>
            </div>
            <div class="fade-up text-center" style="transition-delay: 0.1s">
                <div class="stat-value">50+</div>
                <p class="stat-label">Insurance partners</p>
            </div>
            <div class="fade-up text-center" style="transition-delay: 0.2s">
                <div class="stat-value">9</div>
                <p class="stat-label">Core product classes</p>
            </div>
            <div class="fade-up text-center" style="transition-delay: 0.3s">
                <div class="stat-value">9</div>
                <p class="stat-label">Specialty risk lines</p>
            </div>
        </div>
    </div>
</section>

{{-- Products --}}
<section class="py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up max-w-2xl">
            <span class="section-label">Products</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl">Reinsurance products</h2>
            <p class="mt-4 text-lg leading-relaxed text-neutral-500">Traditional reinsurance capacity across nine core classes, backed by strong relationships with leading global and regional reinsurers.</p>
        </div>
        <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <a href="{{ route('services.product', 'motor-insurance') }}" class="fade-up card flex items-center gap-4 p-5 group">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.764a2 2 0 011.789 1.106l1.054 2.108A1 1 0 0121 14v3a1 1 0 01-1 1h-1a2 2 0 11-4 0H9a2 2 0 11-4 0H4a1 1 0 01-1-1v-7a2 2 0 012-2h3m4 0V5a2 2 0 00-2-2H7a1 1 0 00-.707.293L4 5m10 5H8m4 0h2"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Motor Insurance</h3>
                    <p class="text-xs text-neutral-400 mt-0.5">Private & commercial vehicle fleets</p>
                </div>
            </a>
            <a href="{{ route('services.product', 'household') }}" class="fade-up card flex items-center gap-4 p-5 group" style="transition-delay: 0.05s">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Household</h3>
                    <p class="text-xs text-neutral-400 mt-0.5">Buildings & contents cover</p>
                </div>
            </a>
            <a href="{{ route('services.product', 'engineering') }}" class="fade-up card flex items-center gap-4 p-5 group" style="transition-delay: 0.1s">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.573-1.066z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Engineering</h3>
                    <p class="text-xs text-neutral-400 mt-0.5">CAR, EAR, plant & machinery</p>
                </div>
            </a>
            <a href="{{ route('services.product', 'assets-all-risks') }}" class="fade-up card flex items-center gap-4 p-5 group" style="transition-delay: 0.15s">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Assets All Risks</h3>
                    <p class="text-xs text-neutral-400 mt-0.5">Commercial & industrial assets</p>
                </div>
            </a>
            <a href="{{ route('services.product', 'liability-insurance') }}" class="fade-up card flex items-center gap-4 p-5 group" style="transition-delay: 0.2s">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Liability Insurance</h3>
                    <p class="text-xs text-neutral-400 mt-0.5">Public, product, professional indemnity</p>
                </div>
            </a>
            <a href="{{ route('services.product', 'goods-in-transit') }}" class="fade-up card flex items-center gap-4 p-5 group" style="transition-delay: 0.25s">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Goods In Transit</h3>
                    <p class="text-xs text-neutral-400 mt-0.5">Marine cargo & transportation</p>
                </div>
            </a>
            <a href="{{ route('services.product', 'group-personal-accidents') }}" class="fade-up card flex items-center gap-4 p-5 group" style="transition-delay: 0.3s">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Group Personal Accidents</h3>
                    <p class="text-xs text-neutral-400 mt-0.5">Employer & affinity group cover</p>
                </div>
            </a>
            <a href="{{ route('services.product', 'travel-insurance') }}" class="fade-up card flex items-center gap-4 p-5 group" style="transition-delay: 0.35s">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Travel Insurance</h3>
                    <p class="text-xs text-neutral-400 mt-0.5">Medical, trip, baggage cover</p>
                </div>
            </a>
            <a href="{{ route('services.product', 'agriculture-insurance') }}" class="fade-up card flex items-center gap-4 p-5 group" style="transition-delay: 0.4s">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Agriculture Insurance</h3>
                    <p class="text-xs text-neutral-400 mt-0.5">Crop, livestock & forestry</p>
                </div>
            </a>
        </div>
        <div class="fade-up mt-10 text-center">
            <a href="{{ route('services') }}" class="btn btn-outline">View all products & specialties <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></a>
        </div>
    </div>
</section>

{{-- Why us --}}
<section class="border-t border-neutral-100 bg-neutral-50/50 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid items-center gap-16 lg:grid-cols-2">
            <div class="fade-up order-2 lg:order-1">
                <div class="aspect-[4/3] overflow-hidden rounded-2xl bg-neutral-100">
                    <img src="{{ asset('images/HomeContact.png') }}" alt="Why Classic Reinsurance Brokers" class="h-full w-full object-cover">
                </div>
            </div>
            <div class="fade-up order-1 lg:order-2" style="transition-delay: 0.1s">
                <span class="section-label">Why us</span>
                <h2 class="mt-4 text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl">Why Classic Reinsurance Brokers</h2>
                <p class="mt-6 text-lg leading-relaxed text-neutral-500">What sets us apart in the reinsurance broking landscape.</p>
                <div class="mt-8 space-y-6">
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-neutral-900">Deep market expertise</h3>
                            <p class="text-sm text-neutral-500 mt-1">Intimate understanding of Zimbabwean insurance and reinsurance markets with strong local and international relationships.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-neutral-900">Client-first approach</h3>
                            <p class="text-sm text-neutral-500 mt-1">Personalised attention and tailored solutions that deliver measurable results for each client's unique needs.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-neutral-900">Technical excellence</h3>
                            <p class="text-sm text-neutral-500 mt-1">Deep technical knowledge combined with innovative thinking to develop creative reinsurance strategies.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-50 text-primary-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM3 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 019.374 21c-2.331 0-4.512-.645-6.374-1.766z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-neutral-900">Dedicated support</h3>
                            <p class="text-sm text-neutral-500 mt-1">Responsive, accessible support throughout the entire reinsurance lifecycle, from programme design to claims advocacy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="hero-gradient py-20 lg:py-28">
    <div class="mx-auto max-w-3xl px-6 text-center lg:px-8">
        <div class="fade-up">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Partner with Classic Reinsurance Brokers</h2>
            <p class="mt-6 text-lg leading-relaxed text-primary-100">Let our team help you navigate the complexities of the reinsurance market. Reach out today for a confidential consultation.</p>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="btn bg-white text-primary-700 hover:bg-primary-50 hover:text-primary-800 text-base px-8 py-3">
                    Get in touch
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg>
                </a>
                <a href="tel:+263242773192" class="btn btn-outline-white text-base px-8 py-3">+263 242 773192</a>
            </div>
        </div>
    </div>
</section>
@endsection
