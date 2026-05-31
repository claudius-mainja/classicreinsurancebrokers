@extends('layouts.app')

@section('title', 'Join Our Team')
@section('meta_description', 'Explore career opportunities at Classic Reinsurance Brokers — Zimbabwe\'s premier reinsurance broker.')
@section('og_title', 'Careers at Classic Reinsurance Brokers')
@section('og_description', 'Join Zimbabwe\'s premier reinsurance broker and build a rewarding career in reinsurance, risk management, and insurance broking.')

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "EmploymentAgency",
    "name": "Classic Reinsurance Brokers Careers",
    "description": "Career opportunities at Zimbabwe's premier reinsurance broker.",
    "url": "{{ url()->current() }}",
    "publisher": { "@type": "Organization", "name": "Classic Reinsurance Brokers" }
}
</script>
@endpush

@section('content')
<section class="relative min-h-[50vh] flex items-center overflow-hidden bg-neutral-950">
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
            <span class="fade-up inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1.5 text-xs font-semibold text-primary-300 backdrop-blur-sm">Careers</span>
            <h1 class="fade-up mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl" style="transition-delay: 0.1s">Join our team</h1>
            <p class="fade-up mt-6 max-w-xl text-lg leading-relaxed text-neutral-300" style="transition-delay: 0.2s">Build a rewarding career at Zimbabwe's premier reinsurance broker. We're always looking for talented individuals who share our passion for excellence.</p>
        </div>
    </div>
</section>

@if(isset($departments) && $departments->count() > 0)
    <section class="py-20 lg:py-28 bg-neutral-950">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="fade-up text-center max-w-2xl mx-auto">
                <span class="section-label">Open positions</span>
                <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Current vacancies</h2>
                <p class="mt-4 text-lg text-neutral-400">Explore our current openings across all departments.</p>
            </div>
            <div class="mt-16 space-y-12">
                @foreach($departments as $department)
                    <div class="fade-up">
                        <div class="mb-6 flex items-center gap-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary-600/20 text-primary-500">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                            </div>
                            <h3 class="text-xl font-bold text-white">{{ $department->name }}</h3>
                        </div>
                        @if($department->jobs->count() > 0)
                            <div class="grid gap-4">
                                @foreach($department->jobs as $job)
                                    <div class="card-glass rounded-xl border border-neutral-800 bg-neutral-900/60 backdrop-blur-sm p-6 transition-all duration-300 hover:border-primary-600/30 group">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                                            <div class="flex-1">
                                                <h4 class="text-lg font-bold text-white transition-colors group-hover:text-primary-600">{{ $job->title }}</h4>
                                                <div class="mt-2 flex flex-wrap items-center gap-3 text-sm text-neutral-400">
                                                    <span class="inline-flex items-center gap-1"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>{{ $job->location ?? 'Harare, Zimbabwe' }}</span>
                                                    <span class="inline-flex items-center gap-1"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>{{ $job->type ?? 'Full-time' }}</span>
                                                    <span class="inline-flex items-center gap-1"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/></svg>Posted {{ $job->created_at->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                            <a href="{{ route('careers.show', $job->slug) }}" class="btn bg-primary-600 text-white hover:bg-primary-500 shrink-0 text-sm">View & apply</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-sm text-neutral-500 italic">No open positions in this department currently.</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@else
    <section class="py-20 lg:py-28 bg-neutral-950">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="fade-up text-center max-w-2xl mx-auto">
                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-neutral-800">
                    <svg class="h-8 w-8 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/></svg>
                </div>
                <h2 class="mt-6 text-3xl font-bold text-white">No open positions right now</h2>
                <p class="mt-4 text-lg text-neutral-400">We don't have any vacancies at the moment, but we're always interested in connecting with talented professionals. Send us your CV and we'll keep you in mind for future opportunities.</p>
                <a href="{{ route('contact') }}" class="btn bg-primary-600 text-white hover:bg-primary-500 mt-8">Get in touch</a>
            </div>
        </div>
    </section>
@endif

<section class="border-t border-neutral-800 bg-neutral-900/50 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up max-w-2xl mx-auto text-center">
            <span class="section-label">Culture & values</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Life at Classic Reinsurance Brokers</h2>
            <p class="mt-4 text-lg text-neutral-400">We foster a culture of excellence, collaboration, and continuous growth.</p>
        </div>
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <div class="fade-up card-glass rounded-xl border border-neutral-800 bg-neutral-900/60 backdrop-blur-sm p-6 text-center">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-600/20 text-primary-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                </div>
                <h3 class="mt-4 text-base font-bold text-white">Professional Growth</h3>
                <p class="mt-2 text-sm text-neutral-400">Continuous learning and development opportunities with a clear career progression path.</p>
            </div>
            <div class="fade-up card-glass rounded-xl border border-neutral-800 bg-neutral-900/60 backdrop-blur-sm p-6 text-center" style="transition-delay: 0.1s">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-600/20 text-primary-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719"/></svg>
                </div>
                <h3 class="mt-4 text-base font-bold text-white">Collaborative Environment</h3>
                <p class="mt-2 text-sm text-neutral-400">Work alongside industry experts in a supportive, team-oriented environment.</p>
            </div>
            <div class="fade-up card-glass rounded-xl border border-neutral-800 bg-neutral-900/60 backdrop-blur-sm p-6 text-center" style="transition-delay: 0.2s">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-600/20 text-primary-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242"/></svg>
                </div>
                <h3 class="mt-4 text-base font-bold text-white">Open Communication</h3>
                <p class="mt-2 text-sm text-neutral-400">Transparent dialogue at all levels. Your voice matters and diverse perspectives are valued.</p>
            </div>
            <div class="fade-up card-glass rounded-xl border border-neutral-800 bg-neutral-900/60 backdrop-blur-sm p-6 text-center" style="transition-delay: 0.3s">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-600/20 text-primary-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="mt-4 text-base font-bold text-white">Work-Life Balance</h3>
                <p class="mt-2 text-sm text-neutral-400">We prioritise well-being with flexible working arrangements and healthy balance.</p>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-gradient-to-br from-primary-950 via-primary-900 to-neutral-950 py-20 lg:py-28">
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <span class="absolute top-1/4 left-1/5 h-3 w-3 rounded-full bg-primary-500/20 animate-pulse"></span>
        <span class="absolute top-1/3 left-3/4 h-2 w-2 rounded-full bg-primary-400/20 animate-pulse" style="animation-delay: 1s"></span>
        <span class="absolute top-2/3 left-1/3 h-1.5 w-1.5 rounded-full bg-white/10 animate-pulse" style="animation-delay: 2s"></span>
    </div>
    <div class="mx-auto max-w-3xl px-6 text-center lg:px-8 relative z-10">
        <div class="fade-up">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Don't see the right role?</h2>
            <p class="mt-6 text-lg leading-relaxed text-primary-200">We're always on the lookout for exceptional talent. Send us your CV and cover letter, and we'll reach out when a suitable position becomes available.</p>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('contact') }}?subject=Speculative%20Application" class="btn bg-primary-600 text-white hover:bg-primary-500 text-base px-8 py-3">
                    Send speculative application
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg>
                </a>
                <a href="mailto:hr@classicre.co.zw" class="btn border border-white/20 text-white hover:bg-white/10 text-base px-8 py-3">
                    Contact HR
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
