@extends('layouts.app')

@section('title', 'Join Our Team')
@section('meta_description', 'Explore career opportunities at Classic Reinsurance Brokers — Zimbabwe\'s premier reinsurance broker. Join our team of insurance and reinsurance professionals.')
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
    "publisher": {
        "@type": "Organization",
        "name": "Classic Reinsurance Brokers"
    }
}
</script>
@endpush

@section('content')
<section class="relative overflow-hidden bg-gradient-to-br from-primary-950 via-primary-900 to-primary-800 px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-0 bg-[url('{{ asset('images/hero-pattern.png') }}')] bg-cover bg-center opacity-10"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-primary-950/60 via-transparent to-transparent"></div>
    <div class="relative mx-auto max-w-7xl text-center">
        <div class="reveal">
            <span class="inline-flex items-center rounded-full bg-primary-500/20 px-4 py-1.5 text-sm font-medium text-primary-200 ring-1 ring-primary-500/30">Careers</span>
            <h1 class="section-title mt-6 text-white">Join Our Team</h1>
            <p class="section-subtitle mx-auto text-primary-100">
                Build a rewarding career at Zimbabwe's premier reinsurance broker. We're always looking for talented individuals who share our passion for excellence.
            </p>
        </div>
    </div>
</section>

@if(isset($departments) && $departments->count() > 0)
    <section class="bg-white px-6 py-20 sm:py-28 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="reveal text-center">
                <span class="text-sm font-semibold uppercase tracking-widest text-primary-600">Open Positions</span>
                <h2 class="section-title mt-3">Current Vacancies</h2>
                <p class="section-subtitle mx-auto">
                    Explore our current openings across all departments.
                </p>
            </div>

            <div class="mt-16 space-y-12">
                @foreach($departments as $department)
                    <div class="reveal">
                        <div class="mb-6 flex items-center gap-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary-100 text-primary-600">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                            </div>
                            <h3 class="text-2xl font-bold text-neutral-900">{{ $department->name }}</h3>
                        </div>

                        @if($department->jobs->count() > 0)
                            <div class="grid gap-4">
                                @foreach($department->jobs as $job)
                                    <div class="card-hover group rounded-2xl border border-neutral-100 bg-white p-6 shadow-sm transition-all duration-300 hover:shadow-md">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                                            <div class="flex-1">
                                                <h4 class="text-lg font-bold text-neutral-900 transition-colors group-hover:text-primary-600">{{ $job->title }}</h4>
                                                <div class="mt-2 flex flex-wrap items-center gap-3 text-sm text-neutral-500">
                                                    <span class="inline-flex items-center gap-1">
                                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                                        {{ $job->location ?? 'Harare, Zimbabwe' }}
                                                    </span>
                                                    <span class="inline-flex items-center gap-1">
                                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                                        {{ $job->type ?? 'Full-time' }}
                                                    </span>
                                                    <span class="inline-flex items-center gap-1">
                                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/></svg>
                                                        Posted {{ $job->created_at->diffForHumans() }}
                                                    </span>
                                                </div>
                                            </div>
                                            <a href="{{ route('careers.apply', $job->slug) }}" class="btn-primary shrink-0 text-sm">Apply Now</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-sm text-neutral-400 italic">No open positions in this department currently.</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@else
    <section class="bg-white px-6 py-20 sm:py-28 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="reveal text-center">
                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-2xl bg-neutral-100">
                    <svg class="h-10 w-10 text-neutral-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/></svg>
                </div>
                <h2 class="section-title mt-6">No Open Positions Right Now</h2>
                <p class="section-subtitle mx-auto">
                    We don't have any vacancies at the moment, but we're always interested in connecting with talented professionals. Send us your CV and we'll keep you in mind for future opportunities.
                </p>
                <a href="{{ route('contact') }}" class="btn-primary mt-8 inline-flex">Get in Touch</a>
            </div>
        </div>
    </section>
@endif

<section class="bg-neutral-50 px-6 py-20 sm:py-28 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <div class="reveal text-center">
            <span class="text-sm font-semibold uppercase tracking-widest text-primary-600">Culture & Values</span>
            <h2 class="section-title mt-3">Life at Classic Reinsurance Brokers</h2>
            <p class="section-subtitle mx-auto">
                We foster a culture of excellence, collaboration, and continuous growth.
            </p>
        </div>

        <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <div class="reveal card-hover stagger-children text-center">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-primary-100 text-primary-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                </div>
                <h3 class="text-lg font-bold text-neutral-900">Professional Growth</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">
                    Continuous learning and development opportunities, mentoring programmes, and a clear career progression path tailored to your aspirations.
                </p>
            </div>

            <div class="reveal card-hover stagger-children text-center">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary-100 text-secondary-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-neutral-900">Collaborative Environment</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">
                    Work alongside industry experts in a supportive, team-oriented environment where ideas are valued and innovation is encouraged.
                </p>
            </div>

            <div class="reveal card-hover stagger-children text-center">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-amber-100 text-amber-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"/></svg>
                </div>
                <h3 class="text-lg font-bold text-neutral-900">Open Communication</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">
                    Transparent and open dialogue at all levels. Your voice matters, and we believe the best ideas come from diverse perspectives.
                </p>
            </div>

            <div class="reveal card-hover stagger-children text-center">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-green-100 text-green-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-neutral-900">Work-Life Balance</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">
                    We prioritise the well-being of our team members with flexible working arrangements and a healthy work-life balance.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-gradient-to-br from-primary-700 via-primary-600 to-primary-800 px-6 py-20 sm:py-28 lg:px-8">
    <div class="absolute inset-0 bg-[url('{{ asset('images/cta-pattern.png') }}')] bg-cover bg-center opacity-5"></div>
    <div class="relative mx-auto max-w-3xl text-center">
        <div class="reveal-scale">
            <h2 class="section-title text-white">Don't See the Right Role?</h2>
            <p class="section-subtitle mx-auto text-primary-100">
                We're always on the lookout for exceptional talent. Send us your CV and cover letter, and we'll reach out when a suitable position becomes available.
            </p>
            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a href="{{ route('careers.apply', 'speculative') }}" class="btn-primary bg-white text-primary-700 hover:bg-primary-50 hover:shadow-xl hover:shadow-white/25">
                    Send Speculative Application
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
                <a href="{{ route('contact') }}" class="btn-secondary border-white text-white hover:bg-white hover:text-primary-700">
                    Contact HR
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
