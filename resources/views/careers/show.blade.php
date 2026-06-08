@extends('layouts.app')

@section('title', $job->title)
@section('meta_description', Str::limit(strip_tags($job->description), 160))
@section('og_title', $job->title . ' | Careers at Classic Reinsurance Brokers')
@section('og_description', Str::limit(strip_tags($job->description), 200))

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@type": "ListItem", "position": 2, "name": "Careers", "item": "{{ route('careers') }}" },
        { "@type": "ListItem", "position": 3, "name": "{{ $job->title }}", "item": "{{ url()->current() }}" }
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "JobPosting",
    "title": "{{ $job->title }}",
    "description": "{{ Str::limit(strip_tags($job->description), 200) }}",
    "datePosted": "{{ $job->posted_at->toIso8601String() }}",
    "validThrough": "{{ $job->closing_at?->toIso8601String() }}",
    "employmentType": "{{ $job->type ?? 'FULL_TIME' }}",
    "hiringOrganization": { "@type": "Organization", "name": "Classic Reinsurance Brokers", "sameAs": "{{ url('/') }}" },
    "jobLocation": { "@type": "Place", "address": { "@type": "PostalAddress", "addressLocality": "{{ $job->location ?? 'Harare' }}", "addressCountry": "ZW" } }
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
        <nav class="fade-up flex items-center gap-2 text-sm text-neutral-400 mb-8">
            <a href="{{ route('home') }}" class="transition-colors hover:text-white">Home</a>
            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg>
            <a href="{{ route('careers') }}" class="transition-colors hover:text-white">Careers</a>
            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg>
            <span class="text-white">{{ $job->title }}</span>
        </nav>
        <div class="max-w-3xl">
            <span class="fade-up inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1.5 text-xs font-semibold text-primary-300 backdrop-blur-sm">{{ $job->department ?? 'Careers' }}</span>
            <h1 class="fade-up mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl" style="transition-delay: 0.1s">{{ $job->title }}</h1>
            <div class="fade-up mt-4 flex flex-wrap items-center gap-4 text-sm text-neutral-300" style="transition-delay: 0.15s">
                <span class="inline-flex items-center gap-1.5"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>{{ $job->location ?? 'Harare, Zimbabwe' }}</span>
                <span class="inline-flex items-center gap-1.5"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>{{ $job->type ?? 'Full-time' }}</span>
                <span class="inline-flex items-center gap-1.5"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/></svg>Posted {{ $job->posted_at->diffForHumans() }}</span>
            </div>
        </div>
    </div>
</section>

<section class="py-20 lg:py-28 bg-neutral-950">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-16 lg:grid-cols-3">
            <div class="lg:col-span-2 space-y-12">
                @if($job->description)
                <div class="fade-up">
                    <h2 class="text-2xl font-bold tracking-tight text-white">About the role</h2>
                    <div class="mt-4 text-base leading-relaxed text-neutral-300 prose prose-invert max-w-none prose-headings:text-white prose-strong:text-white prose-code:text-primary-300 prose-pre:bg-neutral-900 prose-pre:border prose-pre:border-neutral-800">{!! nl2br(e($job->description)) !!}</div>
                </div>
                @endif

                @if($job->requirements)
                <div class="fade-up">
                    <h2 class="text-2xl font-bold tracking-tight text-white">Requirements</h2>
                    <div class="mt-4 text-base leading-relaxed text-neutral-300 prose prose-invert max-w-none prose-headings:text-white prose-strong:text-white prose-code:text-primary-300 prose-pre:bg-neutral-900 prose-pre:border prose-pre:border-neutral-800">{!! nl2br(e($job->requirements)) !!}</div>
                </div>
                @endif

                @if($job->responsibilities)
                <div class="fade-up">
                    <h2 class="text-2xl font-bold tracking-tight text-white">Responsibilities</h2>
                    <div class="mt-4 text-base leading-relaxed text-neutral-300 prose prose-invert max-w-none prose-headings:text-white prose-strong:text-white prose-code:text-primary-300 prose-pre:bg-neutral-900 prose-pre:border prose-pre:border-neutral-800">{!! nl2br(e($job->responsibilities)) !!}</div>
                </div>
                @endif
            </div>

            <aside class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">
                    <div class="fade-up card-glass rounded-xl border border-neutral-800 bg-neutral-900/60 backdrop-blur-sm p-6 text-center">
                        <h3 class="text-base font-bold text-white">Interested in this role?</h3>
                        <p class="mt-2 text-sm text-neutral-400">Apply now and our team will review your application.</p>
                        <a href="#apply" class="btn bg-primary-600 text-white hover:bg-primary-500 mt-4 w-full justify-center">Apply now</a>
                    </div>
                    <div class="fade-up card-glass rounded-xl border border-neutral-800 bg-neutral-900/60 backdrop-blur-sm p-6">
                        <div class="space-y-3 text-sm">
                            <div class="flex justify-between"><span class="text-neutral-400">Department</span><span class="font-medium text-white">{{ $job->department ?? 'General' }}</span></div>
                            <div class="flex justify-between"><span class="text-neutral-400">Location</span><span class="font-medium text-white">{{ $job->location ?? 'Harare, Zimbabwe' }}</span></div>
                            <div class="flex justify-between"><span class="text-neutral-400">Type</span><span class="font-medium text-white">{{ $job->type ?? 'Full-time' }}</span></div>
                            @if($job->closing_at)<div class="flex justify-between"><span class="text-neutral-400">Closes</span><span class="font-medium text-white">{{ $job->closing_at->format('M d, Y') }}</span></div>@endif
                        </div>
                    </div>
                    <div class="fade-up rounded-xl border border-primary-800/30 bg-gradient-to-br from-primary-900 via-primary-800 to-neutral-900 p-6 text-center">
                        <h3 class="text-base font-bold text-white">Not the right fit?</h3>
                        <p class="mt-2 text-sm text-primary-200">Explore other opportunities or send a speculative application.</p>
                        <a href="{{ route('careers') }}" class="btn mt-4 inline-flex w-full items-center justify-center bg-primary-600 text-white hover:bg-primary-500 text-sm">View all openings</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<section id="apply" class="border-t border-neutral-800 bg-neutral-900/50 py-20 lg:py-28">
    <div class="mx-auto max-w-3xl px-6 lg:px-8">
        <div class="fade-up text-center">
            <span class="section-label">Apply</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl">Apply for this position</h2>
            <p class="mt-4 text-lg text-neutral-400">Complete the form below to submit your application.</p>
        </div>
        <form action="{{ route('careers.apply', $job->slug) }}" method="POST" enctype="multipart/form-data" class="fade-up mt-10 space-y-5">
            @csrf
            @if(session('success'))
                <div class="rounded-xl bg-green-900/30 px-5 py-4 text-sm font-medium text-green-400 ring-1 ring-green-800">{{ session('success') }}</div>
            @endif
            <div class="grid gap-5 sm:grid-cols-2">
                <div>
                    <label for="name" class="block text-sm font-medium text-neutral-300">Full name <span class="text-primary-600">*</span></label>
                    <input type="text" id="name" name="name" required class="mt-1.5 block w-full rounded-lg border border-neutral-700 bg-neutral-800/50 px-4 py-2.5 text-sm text-white placeholder-neutral-500 focus:border-primary-600 focus:outline-none focus:ring-1 focus:ring-primary-600" placeholder="Your full name">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-neutral-300">Email <span class="text-primary-600">*</span></label>
                    <input type="email" id="email" name="email" required class="mt-1.5 block w-full rounded-lg border border-neutral-700 bg-neutral-800/50 px-4 py-2.5 text-sm text-white placeholder-neutral-500 focus:border-primary-600 focus:outline-none focus:ring-1 focus:ring-primary-600" placeholder="your@email.com">
                </div>
            </div>
            <div>
                <label for="phone" class="block text-sm font-medium text-neutral-300">Phone number <span class="text-primary-600">*</span></label>
                <input type="tel" id="phone" name="phone" required class="mt-1.5 block w-full rounded-lg border border-neutral-700 bg-neutral-800/50 px-4 py-2.5 text-sm text-white placeholder-neutral-500 focus:border-primary-600 focus:outline-none focus:ring-1 focus:ring-primary-600" placeholder="+263 242 773192">
            </div>
            <div>
                <label for="cover_letter" class="block text-sm font-medium text-neutral-300">Cover letter <span class="text-primary-600">*</span></label>
                <textarea id="cover_letter" name="cover_letter" rows="6" required class="mt-1.5 block w-full rounded-lg border border-neutral-700 bg-neutral-800/50 px-4 py-2.5 text-sm text-white placeholder-neutral-500 focus:border-primary-600 focus:outline-none focus:ring-1 focus:ring-primary-600 resize-none" placeholder="Tell us why you're interested in this role and why you'd be a great fit..."></textarea>
            </div>
            <div>
                <label for="cv" class="block text-sm font-medium text-neutral-300">CV / Resume <span class="text-primary-600">*</span></label>
                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required class="mt-1.5 block w-full rounded-lg border border-neutral-700 bg-neutral-800/50 px-4 py-2.5 text-sm text-white file:mr-4 file:rounded-lg file:border-0 file:bg-primary-600 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white hover:file:bg-primary-500">
                <p class="mt-1.5 text-xs text-neutral-500">Accepted: PDF, DOC, DOCX (max 5MB)</p>
            </div>
            <button type="submit" class="btn bg-primary-600 text-white hover:bg-primary-500">
                Submit application
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg>
            </button>
        </form>
    </div>
</section>
@endsection
