@extends('layouts.app')

@section('title', 'About Us — Classic Reinsurance Brokers')
@section('meta_description', 'Classic Reinsurance Brokers is Zimbabwe\'s premier reinsurance-to-reinsurance intermediary, delivering innovative and tailored reinsurance intermediary solutions since 2015. Learn about our mission, vision, values, and leadership team.')
@section('meta_keywords', 'about Classic Reinsurance Brokers, reinsurance broker Zimbabwe history, Kingstone Mhinda, reinsurance intermediary Harare, reinsurance company Zimbabwe, insurance intermediary Zimbabwe, reinsurance broker team, insurance and reinsurance Zimbabwe')
@section('og_title', 'About Classic Reinsurance Brokers — Reinsurance-to-Reinsurance Intermediary')
@section('og_description', 'Learn about Zimbabwe\'s premier reinsurance intermediary — our mission, vision, values, leadership team, and comprehensive reinsurance services since 2015.')

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "AboutPage",
    "name": "About Classic Reinsurance Brokers",
    "description": "Zimbabwe's premier reinsurance broker delivering innovative and tailored reinsurance solutions.",
    "mainEntity": {
        "@type": "Organization",
        "name": "Classic Reinsurance Brokers",
        "url": "{{ url('/') }}",
        "telephone": "+263242773192",
        "email": "info@classicre.co.zw",
        "address": { "@type": "PostalAddress", "streetAddress": "11th Floor Fidelity Life Tower, 5 Raleigh Street", "addressLocality": "Harare", "addressCountry": "ZW" },
        "foundingDate": "2015"
    }
}
</script>
@endpush

@section('content')
<section class="relative min-h-[60vh] lg:min-h-[70vh] flex items-center overflow-hidden bg-neutral-950">
    <div class="absolute inset-0 bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('images/abouthero.png') }}')"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900/80 via-neutral-950/85 to-neutral-950"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-[15%] h-2 w-2 rounded-full bg-primary-500/40 particle" style="animation-delay: 0s"></div>
        <div class="absolute top-1/3 right-[20%] h-3 w-3 rounded-full bg-primary-400/25 particle" style="animation-delay: 1.2s"></div>
        <div class="absolute bottom-1/4 right-[25%] h-1.5 w-1.5 rounded-full bg-primary-500/30 particle" style="animation-delay: 2.4s"></div>
        <div class="absolute top-2/3 left-[30%] h-2.5 w-2.5 rounded-full bg-white/10 particle" style="animation-delay: 0.6s"></div>
        <div class="absolute bottom-1/3 left-[15%] h-2 w-2 rounded-full bg-primary-400/20 particle" style="animation-delay: 1.8s"></div>
        <div class="absolute top-[15%] right-1/3 h-1 w-1 rounded-full bg-white/15 particle" style="animation-delay: 3s"></div>
        <div class="absolute top-1/2 left-[60%] h-2 w-2 rounded-full bg-primary-500/35 particle" style="animation-delay: 0.9s"></div>
        <div class="absolute bottom-[30%] right-[10%] h-1.5 w-1.5 rounded-full bg-primary-400/30 particle" style="animation-delay: 2.1s"></div>
    </div>
    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8 py-24 lg:py-32">
        <div class="max-w-3xl">
            <span class="fade-up inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1.5 text-xs font-semibold text-primary-200 glass">About us</span>
            <h1 class="fade-up mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl" style="transition-delay: 0.1s">About Classic Reinsurance Brokers</h1>
            <p class="fade-up mt-6 max-w-xl text-lg leading-relaxed text-neutral-300" style="transition-delay: 0.2s">Zimbabwe's premier reinsurance broker, delivering innovative and tailored reinsurance solutions since 2015.</p>
        </div>
    </div>
</section>

<section class="bg-neutral-950 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid items-center gap-16 lg:grid-cols-2">
            <div class="fade-up relative">
                <div class="aspect-[4/3] overflow-hidden rounded-2xl bg-neutral-800">
                    <img src="{{ asset('images/abouthero.png') }}" alt="Classic Reinsurance Brokers" class="h-full w-full object-cover">
                </div>
            </div>
            <div class="fade-up" style="transition-delay: 0.1s">
                <span class="section-label">Who we are</span>
                <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl">Your trusted reinsurance partner</h2>
                <p class="mt-6 text-lg leading-relaxed text-neutral-400">
                    Classic Reinsurance Brokers is a leading independent reinsurance brokerage firm headquartered in Harare, Zimbabwe. We specialise in providing comprehensive reinsurance broking services, reinsurance advisory, and risk management solutions to insurance companies across Zimbabwe.
                </p>
                <p class="mt-4 text-lg leading-relaxed text-neutral-400">
                    Founded on the principles of integrity, professionalism, and technical excellence, our team brings decades of combined experience in the insurance and reinsurance industry. We pride ourselves on our deep understanding of local and international reinsurance markets, enabling us to craft bespoke solutions that meet the unique needs of each client.
                </p>
                <div class="mt-6 rounded-xl border border-primary-500/20 bg-primary-500/5 p-4">
                    <p class="text-sm text-primary-200"><strong class="text-primary-300">Note:</strong> As a <strong class="text-white">reinsurance-to-reinsurance intermediary</strong>, we connect reinsurance companies with other reinsurers to access additional capacity, specialised expertise, and risk diversification. We do not underwrite risk or assume liability directly; instead, we facilitate the placement of risk with leading global and regional reinsurers on behalf of our clients.</p>
                </div>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Get in touch</a>
                    <a href="{{ route('services') }}" class="btn btn-outline">Our services</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-neutral-900/50 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up text-center max-w-2xl mx-auto">
            <span class="section-label">Our foundation</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Mission, Vision & Core Values</h2>
            <p class="mt-4 text-lg text-neutral-400">The principles that guide our operations and define our commitment to excellence in reinsurance intermediary services.</p>
        </div>
        <div class="mt-16 grid gap-8 lg:grid-cols-3">
            <div class="fade-up card-glass p-8 text-center">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-600/10 text-primary-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4"/></svg>
                </div>
                <h3 class="mt-6 text-xl font-bold text-white">Our Mission</h3>
                <p class="mt-3 text-sm leading-relaxed text-neutral-400">To enhance wealth creation for all our stakeholders through providing cost effective and innovative Reinsurance Intermediary services in Zimbabwe, Africa and other selected markets.</p>
            </div>
            <div class="fade-up card-glass p-8 text-center" style="transition-delay: 0.1s">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-600/10 text-primary-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                </div>
                <h3 class="mt-6 text-xl font-bold text-white">Our Vision</h3>
                <p class="mt-3 text-sm leading-relaxed text-neutral-400">To be a leading Reinsurance Broker in Africa and other selected markets.</p>
            </div>
            <div class="fade-up card-glass p-8 text-center" style="transition-delay: 0.2s">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-600/10 text-primary-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                </div>
                <h3 class="mt-6 text-xl font-bold text-white">Core Values</h3>
                <ul class="mt-8 flex flex-col gap-4 max-w-md mx-auto">
                    <li class="flex items-center gap-4 card-glass p-4">
                        <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-primary-600/15 text-primary-500 ring-2 ring-primary-500/20">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                        </span>
                        <span class="text-base font-bold text-white">Professionalism</span>
                    </li>
                    <li class="flex items-center gap-4 card-glass p-4">
                        <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-primary-600/15 text-primary-500 ring-2 ring-primary-500/20">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719"/></svg>
                        </span>
                        <span class="text-base font-bold text-white">Accessibility</span>
                    </li>
                    <li class="flex items-center gap-4 card-glass p-4">
                        <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-primary-600/15 text-primary-500 ring-2 ring-primary-500/20">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                        </span>
                        <span class="text-base font-bold text-white">Excellence</span>
                    </li>
                    <li class="flex items-center gap-4 card-glass p-4">
                        <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-primary-600/15 text-primary-500 ring-2 ring-primary-500/20">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                        </span>
                        <span class="text-base font-bold text-white">Loyalty</span>
                    </li>
                    <li class="flex items-center gap-4 card-glass p-4">
                        <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-primary-600/15 text-primary-500 ring-2 ring-primary-500/20">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                        </span>
                        <span class="text-base font-bold text-white">Innovation</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="bg-neutral-950 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up max-w-2xl">
            <span class="section-label">What we do</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Our services</h2>
            <p class="mt-4 text-lg leading-relaxed text-neutral-400">Comprehensive reinsurance solutions tailored to the unique needs of insurance companies across Zimbabwe.</p>
        </div>
        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            <div class="fade-up card-glass overflow-hidden">
                <div class="aspect-[16/9] bg-neutral-800">
                    <img src="{{ asset('images/about-reinsurance-broking.jpg') }}" alt="Reinsurance Broking Services" class="h-full w-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-white">Reinsurance Broking Core Products</h3>
                    <p class="mt-2 text-sm leading-relaxed text-neutral-400">Comprehensive reinsurance broking services across all major classes of business, including property, casualty, engineering, marine, aviation, and life.</p>
                </div>
            </div>
            <div class="fade-up card-glass overflow-hidden" style="transition-delay: 0.1s">
                <div class="aspect-[16/9] bg-neutral-800">
                    <img src="{{ asset('images/aboutusabout.png') }}" alt="Reinsurance Services" class="h-full w-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-white">Reinsurance Services</h3>
                    <p class="mt-2 text-sm leading-relaxed text-neutral-400">From treaty and facultative placements to claims advocacy and contract wordings, our team provides end-to-end reinsurance services with extensive market access.</p>
                </div>
            </div>
            <div class="fade-up card-glass overflow-hidden" style="transition-delay: 0.2s">
                <div class="aspect-[16/9] bg-neutral-800">
                    <img src="{{ asset('images/calltoabout.png') }}" alt="Advisory Services" class="h-full w-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-white">Advisory Services</h3>
                    <p class="mt-2 text-sm leading-relaxed text-neutral-400">Strategic insights on reinsurance programme design, regulatory compliance, risk modelling, capital management, and market intelligence.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-neutral-900/50 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up text-center max-w-2xl mx-auto">
            <span class="section-label">Our team</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Meet the team</h2>
            <p class="mt-4 text-lg text-neutral-400">The experienced professionals driving Classic Reinsurance Brokers forward.</p>
        </div>
        <div class="mt-16 flex justify-center">
            <div class="fade-up text-center">
                <div class="mx-auto h-40 w-40 overflow-hidden rounded-full bg-neutral-800 ring-4 ring-primary-600/30 shadow-lg">
                    <img src="{{ asset('images/Kingstone.png') }}" alt="Kingstone Mhinda" class="h-full w-full object-cover">
                </div>
                <h3 class="mt-5 text-lg font-bold text-white">Kingstone Mhinda</h3>
                <p class="text-sm font-semibold text-primary-500">General Manager</p>
            </div>
        </div>
        <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4 max-w-4xl mx-auto">
            <div class="fade-up text-center">
                <div class="mx-auto h-32 w-32 overflow-hidden rounded-full bg-neutral-800 ring-4 ring-primary-600/20 shadow-lg">
                    <img src="{{ asset('images/Nyasha.png') }}" alt="Nyasha E Whende" class="h-full w-full object-cover">
                </div>
                <h3 class="mt-4 text-base font-bold text-white">Nyasha E Whende</h3>
                <p class="text-xs font-semibold text-primary-500">Operations Manager</p>
            </div>
            <div class="fade-up text-center" style="transition-delay: 0.05s">
                <div class="mx-auto h-32 w-32 overflow-hidden rounded-full bg-neutral-800 ring-4 ring-primary-600/20 shadow-lg">
                    <img src="{{ asset('images/rachel.png') }}" alt="Rachel N. Hakutangwi" class="h-full w-full object-cover">
                </div>
                <h3 class="mt-4 text-base font-bold text-white">Rachel N. Hakutangwi</h3>
                <p class="text-xs font-semibold text-primary-500">Senior Reinsurance Broker</p>
            </div>
            <div class="fade-up text-center" style="transition-delay: 0.1s">
                <div class="mx-auto h-32 w-32 overflow-hidden rounded-full bg-neutral-800 ring-4 ring-primary-600/20 shadow-lg">
                    <img src="{{ asset('images/team/Tinashe.jpeg') }}" alt="Tinashe Y Chadenga" class="h-full w-full object-cover">
                </div>
                <h3 class="mt-4 text-base font-bold text-white">Tinashe Y Chadenga</h3>
                <p class="text-xs font-semibold text-primary-500">Assistant Accountant</p>
            </div>
            <div class="fade-up text-center" style="transition-delay: 0.15s">
                <div class="mx-auto h-32 w-32 overflow-hidden rounded-full bg-neutral-800 ring-4 ring-primary-600/20 shadow-lg">
                    <img src="{{ asset('images/team/Doreen.jpeg') }}" alt="Doreen Mabhiza" class="h-full w-full object-cover">
                </div>
                <h3 class="mt-4 text-base font-bold text-white">Doreen Mabhiza</h3>
                <p class="text-xs font-semibold text-primary-500">Trainee Broker</p>
            </div>
        </div>
    </div>
</section>

<section class="hero-gradient py-20 lg:py-28">
    <div class="mx-auto max-w-3xl px-6 text-center lg:px-8">
        <div class="fade-up">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Partner with Classic Reinsurance Brokers</h2>
            <p class="mt-6 text-lg leading-relaxed text-primary-100">Let us help you navigate the complexities of the reinsurance market. Reach out to our team today for a consultation on how we can support your business.</p>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="btn bg-white text-primary-700 hover:bg-primary-50 text-base px-8 py-3">
                    Contact us today
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg>
                </a>
                <a href="tel:+263242773192" class="btn btn-outline-white text-base px-8 py-3">+263 242 773192</a>
            </div>
        </div>
    </div>
</section>
@endsection
