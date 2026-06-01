@extends('layouts.app')

@section('title', config('app.name') . ' — Zimbabwe\'s Premier Reinsurance-to-Reinsurance Intermediary')
@section('meta_description', 'Classic Reinsurance Brokers — Zimbabwe\'s leading reinsurance-to-reinsurance intermediary delivering expert treaty, facultative, and advisory services to insurance companies across Zimbabwe since 2015.')
@section('meta_keywords', 'reinsurance intermediary Zimbabwe, reinsurance broker Harare, treaty reinsurance Zimbabwe, facultative reinsurance, reinsurance advisory, Classic Reinsurance Brokers, reinsurance-to-reinsurance, African reinsurance broker, risk management Zimbabwe, insurance intermediary Zimbabwe')
@section('og_title', config('app.name') . ' — Premier Reinsurance-to-Reinsurance Intermediary in Zimbabwe')

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What is a reinsurance-to-reinsurance intermediary?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A reinsurance-to-reinsurance intermediary connects reinsurance companies with other reinsurers to access additional capacity, specialised expertise, and risk diversification. Unlike traditional brokers who connect insurers with reinsurers, we facilitate placements between reinsurers themselves."
            }
        },
        {
            "@type": "Question",
            "name": "What services does Classic Reinsurance Brokers offer?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We offer comprehensive reinsurance intermediary services across 9 core product classes including Motor, Household, Engineering, Assets All Risks, Liability, Group Personal Accidents, Travel, Goods In Transit, and Agriculture Insurance. We also provide 9 specialty risk classes including Aviation, Cyber, Political Risks, Construction Projects, and more."
            }
        },
        {
            "@type": "Question",
            "name": "Who does Classic Reinsurance Brokers serve?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We serve insurance companies and reinsurance companies across Zimbabwe and the broader African market, providing access to global and regional reinsurance capacity."
            }
        },
        {
            "@type": "Question",
            "name": "Is Classic Reinsurance Brokers regulated in Zimbabwe?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, Classic Reinsurance Brokers is a licensed and regulated insurance brokerage firm operating in compliance with the Insurance and Pensions Commission (IPEC) of Zimbabwe."
            }
        }
    ]
}
</script>
@endpush

@section('content')
<section class="relative min-h-screen flex items-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/herobg.png') }}" alt="" class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-primary-900/80 via-primary-900/60 to-neutral-950/90"></div>
    </div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/5 w-2 h-2 bg-primary-400/30 rounded-full animate-float" style="animation-delay: 0s; animation-duration: 6s;"></div>
        <div class="absolute top-1/3 right-1/4 w-1.5 h-1.5 bg-primary-300/20 rounded-full animate-float" style="animation-delay: 1s; animation-duration: 8s;"></div>
        <div class="absolute top-2/3 left-1/3 w-2.5 h-2.5 bg-primary-500/25 rounded-full animate-float" style="animation-delay: 2s; animation-duration: 7s;"></div>
        <div class="absolute bottom-1/4 right-1/5 w-1 h-1 bg-primary-200/30 rounded-full animate-float" style="animation-delay: 0.5s; animation-duration: 9s;"></div>
        <div class="absolute top-1/2 left-3/4 w-2 h-2 bg-primary-400/20 rounded-full animate-float" style="animation-delay: 1.5s; animation-duration: 5s;"></div>
        <div class="absolute bottom-1/3 left-1/6 w-1.5 h-1.5 bg-primary-300/25 rounded-full animate-float" style="animation-delay: 3s; animation-duration: 7.5s;"></div>
        <div class="absolute top-1/5 right-1/3 w-1 h-1 bg-primary-200/20 rounded-full animate-float" style="animation-delay: 2.5s; animation-duration: 6.5s;"></div>
        <div class="absolute bottom-1/5 right-1/6 w-2.5 h-2.5 bg-primary-400/15 rounded-full animate-float" style="animation-delay: 0.8s; animation-duration: 8.5s;"></div>
    </div>
    <div class="relative mx-auto max-w-7xl px-6 lg:px-8 py-24 lg:py-32 w-full">
        <div class="max-w-3xl">
            <span class="fade-up glass inline-flex items-center gap-2 rounded-full px-4 py-1.5 text-xs font-semibold text-primary-200 border border-primary-700/50">
                Trusted by insurers across Zimbabwe
            </span>
            <h1 class="fade-up mt-6 text-5xl font-extrabold tracking-tight text-white sm:text-6xl lg:text-7xl font-heading" style="transition-delay: 0.1s">
                Your trusted partner in reinsurance.
            </h1>
            <p class="fade-up mt-6 max-w-xl text-lg leading-relaxed text-neutral-300 sm:text-xl" style="transition-delay: 0.2s">
                Classic Reinsurance Brokers delivers expert treaty, facultative, and advisory services — helping Zimbabwean insurers manage risk with confidence.
            </p>
            <div class="fade-up mt-8 flex flex-wrap gap-4" style="transition-delay: 0.3s">
                <a href="{{ route('contact') }}" class="btn btn-primary text-base px-8 py-3">
                    Start a conversation
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg>
                </a>
                <a href="{{ route('services') }}" class="btn btn-outline text-base px-8 py-3 border-neutral-400 text-neutral-200 hover:bg-white/10">Our services</a>
            </div>
        </div>
    </div>
</section>

<section class="bg-neutral-950 border-t border-neutral-800 py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="text-center text-xs font-medium uppercase tracking-widest text-neutral-500">Trusted by leading insurers</p>
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

<section class="bg-neutral-50 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid items-center gap-16 lg:grid-cols-2">
            <div class="fade-up">
                <span class="section-label text-primary-700">About</span>
                <h2 class="mt-4 text-3xl font-bold tracking-tight text-neutral-900 sm:text-4xl lg:text-5xl font-heading">Who we are</h2>
                <p class="mt-6 text-lg leading-relaxed text-neutral-700">
                    Classic Reinsurance Brokers is a leading independent reinsurance brokerage firm headquartered in Harare, Zimbabwe. We specialise in providing comprehensive reinsurance broking, advisory, and risk management solutions to insurance companies across Zimbabwe.
                </p>
                <p class="mt-4 text-lg leading-relaxed text-neutral-700">
                    Founded on integrity, professionalism, and technical excellence, our team brings decades of combined experience in the insurance and reinsurance industry.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('about') }}" class="btn border-neutral-700 text-neutral-800 hover:bg-neutral-800 hover:text-white">Learn more about us</a>
                </div>
            </div>
            <div class="fade-up relative" style="transition-delay: 0.15s">
                <div class="aspect-[4/3] overflow-hidden rounded-2xl bg-neutral-200">
                    <img src="{{ asset('images/abouthome.png') }}" alt="Classic Reinsurance Brokers" class="h-full w-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-neutral-950 py-20 lg:py-28 overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up text-center max-w-3xl mx-auto">
            <span class="section-label text-primary-400 justify-center">What we do</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl font-heading">Comprehensive Reinsurance Solutions</h2>
            <p class="mt-4 text-lg leading-relaxed text-neutral-400">We deliver strategic reinsurance solutions that optimize capital efficiency and strengthen your competitive position in the market.</p>
        </div>
        <div class="mt-16 space-y-20">
            {{-- Reinsurance Services --}}
            <div>
                <div class="fade-up mb-10 max-w-2xl">
                    <h3 class="text-2xl font-bold text-white font-heading">Reinsurance Services</h3>
                    <p class="mt-2 text-lg text-neutral-400">Core treaty and facultative solutions backed by strong global and regional market relationships.</p>
                </div>
                <div class="grid gap-8 lg:grid-cols-4">
                    <div class="fade-up card-glass group p-6 lg:p-8 text-center">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3"/></svg>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-white">Treaty Reinsurance</h3>
                        <p class="mt-2 text-sm leading-relaxed text-neutral-400">Optimize your reinsurance program with customized treaty structures that enhance capital efficiency and provide comprehensive protection across your portfolio.</p>
                    </div>
                    <div class="fade-up card-glass group p-6 lg:p-8 text-center" style="transition-delay: 0.1s">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5"/></svg>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-white">Facultative Placement</h3>
                        <p class="mt-2 text-sm leading-relaxed text-neutral-400">Access our global network of reinsurance markets to place challenging or specialized risks with confidence, leveraging our technical expertise and market relationships.</p>
                    </div>
                    <div class="fade-up card-glass group p-6 lg:p-8 text-center" style="transition-delay: 0.2s">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33"/></svg>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-white">Alternative Risk Transfer</h3>
                        <p class="mt-2 text-sm leading-relaxed text-neutral-400">Explore innovative capital solutions including cat bonds, collateralized reinsurance, and ILS structures to diversify your risk financing strategy.</p>
                    </div>
                    <div class="fade-up card-glass group p-6 lg:p-8 text-center" style="transition-delay: 0.3s">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/></svg>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-white">Portfolio Optimization</h3>
                        <p class="mt-2 text-sm leading-relaxed text-neutral-400">Achieve the optimal balance between retained and ceded risk with our advanced analytics and market intelligence, maximizing your risk-adjusted returns.</p>
                    </div>
                </div>
            </div>

            {{-- Advisory Services --}}
            <div>
                <div class="fade-up mb-10 max-w-2xl">
                    <h3 class="text-2xl font-bold text-white font-heading">Advisory Services</h3>
                    <p class="mt-2 text-lg text-neutral-400">Strategic insight and analytical support to strengthen your reinsurance decision-making.</p>
                </div>
                <div class="grid gap-8 lg:grid-cols-4">
                    <div class="fade-up card-glass group p-6 lg:p-8 text-center">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-white">Actuarial & Analytics</h3>
                        <p class="mt-2 text-sm leading-relaxed text-neutral-400">Leverage our advanced modeling capabilities to quantify risk exposures, optimize retention levels, and develop data-driven reinsurance strategies.</p>
                    </div>
                    <div class="fade-up card-glass group p-6 lg:p-8 text-center" style="transition-delay: 0.1s">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3"/></svg>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-white">Market Intelligence</h3>
                        <p class="mt-2 text-sm leading-relaxed text-neutral-400">Stay ahead with our proprietary market insights, capacity trends, and pricing forecasts, enabling strategic decision-making in dynamic market conditions.</p>
                    </div>
                    <div class="fade-up card-glass group p-6 lg:p-8 text-center" style="transition-delay: 0.2s">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.42 15.17l-4.59 4.59M18 10.5l-5.17 5.17M10.5 6l5.17-5.17M6 13.5l5.17-5.17M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-white">Regulatory & Capital Advisory</h3>
                        <p class="mt-2 text-sm leading-relaxed text-neutral-400">Navigate complex regulatory requirements with our expert guidance on capital modeling, Solvency II optimization, and regulatory compliance.</p>
                    </div>
                    <div class="fade-up card-glass group p-6 lg:p-8 text-center" style="transition-delay: 0.3s">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/></svg>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-white">Strategic Consulting</h3>
                        <p class="mt-2 text-sm leading-relaxed text-neutral-400">Enhance your competitive position with our strategic advice on market entry, portfolio diversification, and long-term reinsurance partnership development.</p>
                    </div>
                </div>
            </div>

            {{-- Specialty Market Expertise --}}
            <div>
                <div class="fade-up mb-10 max-w-2xl">
                    <h3 class="text-2xl font-bold text-white font-heading">Specialty Market Expertise</h3>
                    <p class="mt-2 text-lg text-neutral-400">Deep specialist knowledge across the full spectrum of complex and emerging reinsurance markets.</p>
                </div>
                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="fade-up card-glass flex items-center gap-4 p-5 group">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19V5M5 12l7-7 7 7"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Property Catastrophe</h3>
                            <p class="text-xs text-neutral-500 mt-0.5">Natural catastrophe exposure management</p>
                        </div>
                    </div>
                    <div class="fade-up card-glass flex items-center gap-4 p-5 group" style="transition-delay: 0.05s">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Marine & Energy</h3>
                            <p class="text-xs text-neutral-500 mt-0.5">Hull, cargo, offshore energy risks</p>
                        </div>
                    </div>
                    <div class="fade-up card-glass flex items-center gap-4 p-5 group" style="transition-delay: 0.1s">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19V5M5 12l7-7 7 7"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Aviation</h3>
                            <p class="text-xs text-neutral-500 mt-0.5">Hull, liability, airline, general aviation</p>
                        </div>
                    </div>
                    <div class="fade-up card-glass flex items-center gap-4 p-5 group" style="transition-delay: 0.15s">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Cyber Risk</h3>
                            <p class="text-xs text-neutral-500 mt-0.5">Data breach, ransomware, network liability</p>
                        </div>
                    </div>
                    <div class="fade-up card-glass flex items-center gap-4 p-5 group" style="transition-delay: 0.2s">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Political Risk</h3>
                            <p class="text-xs text-neutral-500 mt-0.5">Expropriation, currency, contract frustration</p>
                        </div>
                    </div>
                    <div class="fade-up card-glass flex items-center gap-4 p-5 group" style="transition-delay: 0.25s">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Life & Health</h3>
                            <p class="text-xs text-neutral-500 mt-0.5">Mortality, morbidity, critical illness</p>
                        </div>
                    </div>
                    <div class="fade-up card-glass flex items-center gap-4 p-5 group" style="transition-delay: 0.3s">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.764a2 2 0 011.789 1.106l1.054 2.108A1 1 0 0121 14v3a1 1 0 01-1 1h-1a2 2 0 11-4 0H9a2 2 0 11-4 0H4a1 1 0 01-1-1v-7a2 2 0 012-2h3m4 0V5a2 2 0 00-2-2H7a1 1 0 00-.707.293L4 5m10 5H8m4 0h2"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Motor & Liability</h3>
                            <p class="text-xs text-neutral-500 mt-0.5">Fleet, third-party, professional indemnity</p>
                        </div>
                    </div>
                    <div class="fade-up card-glass flex items-center gap-4 p-5 group" style="transition-delay: 0.35s">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.573-1.066z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Construction & Engineering</h3>
                            <p class="text-xs text-neutral-500 mt-0.5">CAR, EAR, plant & machinery</p>
                        </div>
                    </div>
                    <div class="fade-up card-glass flex items-center gap-4 p-5 group" style="transition-delay: 0.4s">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Agriculture</h3>
                            <p class="text-xs text-neutral-500 mt-0.5">Crop, livestock, weather-index</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fade-up text-center">
                <a href="{{ route('services') }}" class="btn btn-primary">Explore all services <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></a>
            </div>
        </div>
    </div>
</section>

<section class="bg-neutral-950 border-y border-neutral-800 py-16 lg:py-20">
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

<section class="bg-neutral-950 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up max-w-2xl">
            <span class="section-label text-primary-400">Products</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl font-heading">Reinsurance products</h2>
            <p class="mt-4 text-lg leading-relaxed text-neutral-400">Traditional reinsurance capacity across nine core classes, backed by strong relationships with leading global and regional reinsurers.</p>
        </div>
        <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <a href="{{ route('services.product', 'motor-insurance') }}" class="fade-up card-glass flex items-center gap-4 p-5 group rounded-xl">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.764a2 2 0 011.789 1.106l1.054 2.108A1 1 0 0121 14v3a1 1 0 01-1 1h-1a2 2 0 11-4 0H9a2 2 0 11-4 0H4a1 1 0 01-1-1v-7a2 2 0 012-2h3m4 0V5a2 2 0 00-2-2H7a1 1 0 00-.707.293L4 5m10 5H8m4 0h2"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Motor Insurance</h3>
                    <p class="text-xs text-neutral-500 mt-0.5">Private & commercial vehicle fleets</p>
                </div>
            </a>
            <a href="{{ route('services.product', 'household') }}" class="fade-up card-glass flex items-center gap-4 p-5 group rounded-xl" style="transition-delay: 0.05s">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Household</h3>
                    <p class="text-xs text-neutral-500 mt-0.5">Buildings & contents cover</p>
                </div>
            </a>
            <a href="{{ route('services.product', 'engineering') }}" class="fade-up card-glass flex items-center gap-4 p-5 group rounded-xl" style="transition-delay: 0.1s">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.573-1.066z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Engineering</h3>
                    <p class="text-xs text-neutral-500 mt-0.5">CAR, EAR, plant & machinery</p>
                </div>
            </a>
            <a href="{{ route('services.product', 'assets-all-risks') }}" class="fade-up card-glass flex items-center gap-4 p-5 group rounded-xl" style="transition-delay: 0.15s">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Assets All Risks</h3>
                    <p class="text-xs text-neutral-500 mt-0.5">Commercial & industrial assets</p>
                </div>
            </a>
            <a href="{{ route('services.product', 'liability-insurance') }}" class="fade-up card-glass flex items-center gap-4 p-5 group rounded-xl" style="transition-delay: 0.2s">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Liability Insurance</h3>
                    <p class="text-xs text-neutral-500 mt-0.5">Public, product, professional indemnity</p>
                </div>
            </a>
            <a href="{{ route('services.product', 'goods-in-transit') }}" class="fade-up card-glass flex items-center gap-4 p-5 group rounded-xl" style="transition-delay: 0.25s">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Goods In Transit</h3>
                    <p class="text-xs text-neutral-500 mt-0.5">Marine cargo & transportation</p>
                </div>
            </a>
            <a href="{{ route('services.product', 'group-personal-accidents') }}" class="fade-up card-glass flex items-center gap-4 p-5 group rounded-xl" style="transition-delay: 0.3s">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Group Personal Accidents</h3>
                    <p class="text-xs text-neutral-500 mt-0.5">Employer & affinity group cover</p>
                </div>
            </a>
            <a href="{{ route('services.product', 'travel-insurance') }}" class="fade-up card-glass flex items-center gap-4 p-5 group rounded-xl" style="transition-delay: 0.35s">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Travel Insurance</h3>
                    <p class="text-xs text-neutral-500 mt-0.5">Medical, trip, baggage cover</p>
                </div>
            </a>
            <a href="{{ route('services.product', 'agriculture-insurance') }}" class="fade-up card-glass flex items-center gap-4 p-5 group rounded-xl" style="transition-delay: 0.4s">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white group-hover:ring-primary-400">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                </div>
                <div class="min-w-0">
                    <h3 class="text-sm font-semibold text-white group-hover:text-primary-400 transition-colors">Agriculture Insurance</h3>
                    <p class="text-xs text-neutral-500 mt-0.5">Crop, livestock & forestry</p>
                </div>
            </a>
        </div>
        <div class="fade-up mt-10 text-center">
            <a href="{{ route('services') }}" class="btn btn-outline border-neutral-500 text-neutral-300 hover:bg-white/10">View all products & specialties <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></a>
        </div>
    </div>
</section>

<section class="bg-neutral-900/50 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid items-center gap-16 lg:grid-cols-2">
            <div class="fade-up order-2 lg:order-1">
                <div class="aspect-[4/3] overflow-hidden rounded-2xl bg-neutral-800">
                    <img src="{{ asset('images/HomeContact.png') }}" alt="Why Classic Reinsurance Brokers" class="h-full w-full object-cover opacity-90">
                </div>
            </div>
            <div class="fade-up order-1 lg:order-2" style="transition-delay: 0.1s">
                <span class="section-label text-primary-400">Why us</span>
                <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl font-heading">Why Classic Reinsurance Brokers</h2>
                <p class="mt-6 text-lg leading-relaxed text-neutral-400">What sets us apart in the reinsurance broking landscape.</p>
                <div class="mt-8 space-y-6">
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-white">Deep market expertise</h3>
                            <p class="text-sm text-neutral-400 mt-1">Intimate understanding of Zimbabwean insurance and reinsurance markets with strong local and international relationships.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-white">Client-first approach</h3>
                            <p class="text-sm text-neutral-400 mt-1">Personalised attention and tailored solutions that deliver measurable results for each client's unique needs.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-white">Technical excellence</h3>
                            <p class="text-sm text-neutral-400 mt-1">Deep technical knowledge combined with innovative thinking to develop creative reinsurance strategies.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM3 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 019.374 21c-2.331 0-4.512-.645-6.374-1.766z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-white">Dedicated support</h3>
                            <p class="text-sm text-neutral-400 mt-1">Responsive, accessible support throughout the entire reinsurance lifecycle, from programme design to claims advocacy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="hero-gradient py-20 lg:py-28">
    <div class="mx-auto max-w-3xl px-6 text-center lg:px-8">
        <div class="fade-up">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl font-heading">Partner with Classic Reinsurance Brokers</h2>
            <p class="mt-6 text-lg leading-relaxed text-primary-100">Let our team help you navigate the complexities of the reinsurance market. Reach out today for a confidential consultation.</p>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="btn bg-white text-primary-700 hover:bg-primary-50 hover:text-primary-800 text-base px-8 py-3">
                    Get in touch
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg>
                </a>
                <a href="tel:+263242773192" class="btn border border-white/30 text-white hover:bg-white/10 text-base px-8 py-3">+263 242 773192</a>
            </div>
        </div>
    </div>
</section>
@endsection
