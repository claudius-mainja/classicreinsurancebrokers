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

@php
$allSpecialties = [
    'aviation' => 'Aviation',
    'bankers-blanket' => 'Bankers\' Blanket',
    'construction-projects' => 'Construction Projects',
    'cyber' => 'Cyber',
    'kidnap-and-ransom' => 'Kidnap & Ransom',
    'marine-hull' => 'Marine Hull',
    'power-projects' => 'Power Projects',
    'political-risks' => 'Political Risks',
    'political-violence-terrorism' => 'Political Violence & Terrorism',
];
@endphp

@section('content')
<section class="relative min-h-[50vh] flex items-center overflow-hidden bg-neutral-950">
    <div class="absolute inset-0 bg-cover bg-center bg-fixed opacity-15" style="background-image: url('{{ asset('images/hero-pattern.png') }}')"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900/70 via-neutral-950/90 to-neutral-950"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 h-2 w-2 rounded-full bg-primary-500/40 animate-pulse" style="animation-delay: 0s"></div>
        <div class="absolute top-1/3 right-1/5 h-3 w-3 rounded-full bg-primary-400/25 animate-pulse" style="animation-delay: 1.2s"></div>
        <div class="absolute bottom-1/4 right-1/4 h-1.5 w-1.5 rounded-full bg-primary-500/30 animate-pulse" style="animation-delay: 2.4s"></div>
        <div class="absolute top-2/3 left-1/3 h-2.5 w-2.5 rounded-full bg-white/10 animate-pulse" style="animation-delay: 0.6s"></div>
        <div class="absolute bottom-1/3 left-1/5 h-2 w-2 rounded-full bg-primary-400/20 animate-pulse" style="animation-delay: 1.8s"></div>
        <div class="absolute top-1/5 right-1/3 h-1 w-1 rounded-full bg-white/15 animate-pulse" style="animation-delay: 3s"></div>
    </div>
    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8 py-24 lg:py-32">
        <nav class="fade-up flex items-center gap-2 text-sm text-neutral-400 mb-8">
            <a href="{{ route('home') }}" class="transition-colors hover:text-white">Home</a>
            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg>
            <a href="{{ route('services') }}" class="transition-colors hover:text-white">Services</a>
            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg>
            <span class="text-white">{{ $specialty['name'] }}</span>
        </nav>
        <div class="grid items-center gap-12 lg:grid-cols-2">
            <div class="fade-up">
                <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1.5 text-xs font-semibold text-primary-300 backdrop-blur-sm">Specialty risk</span>
                <h1 class="mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">{{ $specialty['name'] }}</h1>
                <p class="mt-6 text-lg leading-relaxed text-neutral-300">{{ $specialty['description'] }}</p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}" class="btn bg-primary-600 text-white hover:bg-primary-700">Discuss your risk</a>
                    <a href="{{ route('services') }}" class="btn border border-white/30 text-white hover:bg-white/10">All specialties</a>
                </div>
            </div>
            <div class="fade-up relative" style="transition-delay: 0.1s">
                @php
                $specImage = 'images/specialty/' . Str::slug($specialty['name']) . '.jpg';
                $specImagePng = 'images/specialty/' . Str::slug($specialty['name']) . '.png';
                @endphp
                <div class="aspect-[4/3] overflow-hidden rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10">
                    <img src="{{ asset($specImage) }}" alt="{{ $specialty['name'] }}" class="h-full w-full object-cover" onerror="this.onerror=null;this.src='{{ asset($specImagePng) }}';this.onerror=null;this.src='{{ asset('images/hero-pattern.png') }}'">
                </div>
            </div>
        </div>
    </div>
</section>

@if(!empty($specialty['fullDescription']))
<section class="bg-neutral-950 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-5">
            <div class="fade-up lg:col-span-3">
                <span class="section-label">About this specialty</span>
                <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl">{{ $specialty['name'] }} Reinsurance</h2>
                <p class="mt-6 text-lg leading-relaxed text-neutral-300">{{ $specialty['fullDescription'] }}</p>
                <div class="mt-6 rounded-xl border border-primary-500/20 bg-primary-500/5 p-4">
                    <p class="text-sm text-primary-200">As a <strong class="text-white">reinsurance broker</strong>, we act as an intermediary between insurance companies and specialty reinsurers — we do not underwrite risk or assume liability directly. We facilitate the placement of complex and emerging risks with leading global specialty markets.</p>
                </div>
            </div>
            <div class="fade-up lg:col-span-2" style="transition-delay:0.1s">
                <h3 class="text-xl font-bold text-white">At a glance</h3>
                <ul class="mt-6 space-y-4">
                    <li class="flex items-start gap-3">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-primary-600/15 text-primary-400"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12.75l6 6 9-13.5"/></svg></span>
                        <span class="text-sm text-neutral-400"><strong class="text-neutral-200">Specialty class</strong><br>Facultative and treaty support</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-primary-600/15 text-primary-400"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12.75l6 6 9-13.5"/></svg></span>
                        <span class="text-sm text-neutral-400"><strong class="text-neutral-200">Coverage area</strong><br>Zimbabwe, Africa, and select global markets</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-primary-600/15 text-primary-400"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12.75l6 6 9-13.5"/></svg></span>
                        <span class="text-sm text-neutral-400"><strong class="text-neutral-200">Market access</strong><br>Lloyd's, London market, international specialty</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-primary-600/15 text-primary-400"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12.75l6 6 9-13.5"/></svg></span>
                        <span class="text-sm text-neutral-400"><strong class="text-neutral-200">Service model</strong><br>Dedicated specialty broker support</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endif

<section class="border-t border-white/10 bg-neutral-950 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up max-w-2xl mx-auto text-center">
            <span class="section-label">Service details</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Coverage options</h2>
            <p class="mt-4 text-lg text-neutral-400">Specialist reinsurance capacity designed for {{ lcfirst($specialty['name']) }} risks.</p>
        </div>
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse($specialty['features'] as $i => $feature)
            <div class="fade-up card-glass relative overflow-hidden p-6 group">
                <div class="absolute right-0 top-0 h-20 w-20 translate-x-8 -translate-y-8 rounded-full bg-primary-600/5 transition-all group-hover:scale-150"></div>
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-600/10 text-primary-500 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-white">{{ $feature }}</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-400">Bespoke reinsurance solutions for {{ lcfirst($feature) }}, supported by deep specialty underwriting expertise and access to leading global specialty markets.</p>
            </div>
            @empty
            <div class="col-span-full text-center text-neutral-500"><p>Coverage details coming soon.</p></div>
            @endforelse
        </div>
    </div>
</section>

@if(!empty($specialty['benefits']))
<section class="border-t border-white/10 bg-neutral-900 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-2">
            <div class="fade-up">
                <span class="section-label">Client benefits</span>
                <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl">Why our {{ $specialty['name'] }} solutions</h2>
                <p class="mt-6 text-lg leading-relaxed text-neutral-400">Partner with Classic Reinsurance Brokers for your {{ lcfirst($specialty['name']) }} reinsurance needs and gain access to specialist expertise, global capacity, and dedicated service.</p>
            </div>
            <div class="fade-up space-y-4" style="transition-delay:0.1s">
                @foreach($specialty['benefits'] as $i => $benefit)
                <div class="card-glass flex items-start gap-4 p-5 transition-all hover:border-primary-500/30">
                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary-600/15 text-primary-400 text-sm font-bold">{{ $i + 1 }}</span>
                    <div>
                        <p class="text-base font-semibold text-white">{{ $benefit }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif

@if(!empty($specialty['process']))
<section class="border-t border-white/10 bg-neutral-950 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up max-w-2xl mx-auto text-center">
            <span class="section-label">How we work</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Our approach</h2>
            <p class="mt-4 text-lg text-neutral-400">A structured process from risk assessment through to ongoing programme management.</p>
        </div>
        <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($specialty['process'] as $i => $step)
            <div class="fade-up relative text-center">
                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-gradient-to-br from-primary-600 to-primary-800 text-white text-xl font-bold shadow-lg shadow-primary-600/20">{{ $i + 1 }}</div>
                @if(!$loop->last)<div class="absolute left-[calc(50%+40px)] top-8 hidden h-0.5 w-[calc(100%-80px)] bg-gradient-to-r from-primary-500/50 to-transparent lg:block"></div>@endif
                <h3 class="mt-5 text-base font-bold text-white">{{ $step }}</h3>
                <p class="mt-2 text-xs text-neutral-400">Dedicated support throughout every stage of the specialty reinsurance lifecycle.</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<section class="border-t border-white/10 bg-neutral-950 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-3">
            <div class="lg:col-span-2">
                <div class="fade-up max-w-2xl">
                    <span class="section-label">Why partner with us</span>
                    <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Why partner with us</h2>
                    <p class="mt-4 text-lg text-neutral-400">What makes Classic Reinsurance Brokers the right partner for your specialty reinsurance needs.</p>
                </div>
                <div class="mt-12 grid gap-6 sm:grid-cols-2">
                    <div class="fade-up card-glass p-6 text-center">
                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-600/10 text-primary-500">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 9.75l-4.5 4.5L9 12"/></svg>
                        </div>
                        <h3 class="mt-4 text-base font-bold text-white">Specialist Expertise</h3>
                        <p class="mt-2 text-sm text-neutral-400">Deep technical knowledge across complex and emerging risk classes with proven placement track records.</p>
                    </div>
                    <div class="fade-up card-glass p-6 text-center" style="transition-delay: 0.1s">
                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-600/10 text-primary-500">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9.004 9.004 0 008.716-6.747"/></svg>
                        </div>
                        <h3 class="mt-4 text-base font-bold text-white">Global Market Access</h3>
                        <p class="mt-2 text-sm text-neutral-400">Direct relationships with Lloyd's, London company market, and international specialty reinsurers.</p>
                    </div>
                    <div class="fade-up card-glass p-6 text-center" style="transition-delay: 0.2s">
                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-600/10 text-primary-500">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                        </div>
                        <h3 class="mt-4 text-base font-bold text-white">Technical Underwriting</h3>
                        <p class="mt-2 text-sm text-neutral-400">Rigorous risk assessment and programme structuring backed by deep actuarial and underwriting capability.</p>
                    </div>
                    <div class="fade-up card-glass p-6 text-center" style="transition-delay: 0.3s">
                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-600/10 text-primary-500">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3"/></svg>
                        </div>
                        <h3 class="mt-4 text-base font-bold text-white">Dedicated Service</h3>
                        <p class="mt-2 text-sm text-neutral-400">Responsive, client-dedicated teams providing continuity and deep understanding of your business.</p>
                    </div>
                </div>
            </div>
            <aside class="lg:col-span-1">
                <div class="fade-up sticky top-24 card-glass p-6">
                    <h3 class="text-base font-bold text-white">Specialty Risk Classes</h3>
                    <p class="mt-1 text-xs text-neutral-400">Explore our full range of specialty insurance solutions.</p>
                    <ul class="mt-6 space-y-1">
                        @foreach($allSpecialties as $slug => $sname)
                        <li>
                            <a href="{{ route('services.specialty', $slug) }}" class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm text-neutral-400 transition-all hover:bg-primary-600/10 hover:text-primary-300 @if($sname === $specialty['name']) bg-primary-600/10 text-primary-300 @endif">
                                <span class="h-1.5 w-1.5 rounded-full bg-current"></span>
                                {{ $sname }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-neutral-950 py-20 lg:py-28">
    <div class="absolute inset-0 bg-cover bg-center bg-fixed opacity-10" style="background-image: url('{{ asset('images/hero-pattern.png') }}')"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900/60 via-neutral-950/90 to-neutral-950"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/3 left-1/4 h-2 w-2 rounded-full bg-primary-500/30 animate-pulse" style="animation-delay: 0s"></div>
        <div class="absolute bottom-1/4 right-1/3 h-2.5 w-2.5 rounded-full bg-primary-400/20 animate-pulse" style="animation-delay: 1.5s"></div>
        <div class="absolute top-1/2 right-1/4 h-1.5 w-1.5 rounded-full bg-white/10 animate-pulse" style="animation-delay: 3s"></div>
    </div>
    <div class="relative z-10 mx-auto max-w-3xl px-6 text-center lg:px-8">
        <div class="fade-up">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Partner with Classic Reinsurance Brokers</h2>
            <p class="mt-6 text-lg leading-relaxed text-primary-200">Our specialty team is ready to help you navigate complex risks with bespoke reinsurance solutions. Contact us to discuss how we can support your unique requirements.</p>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="btn bg-primary-600 text-white hover:bg-primary-700 text-base px-8 py-3">Contact our team</a>
                <a href="tel:+263242773192" class="btn border border-white/30 text-white hover:bg-white/10 text-base px-8 py-3">+263 242 773192/3/4</a>
            </div>
        </div>
    </div>
</section>
@endsection
