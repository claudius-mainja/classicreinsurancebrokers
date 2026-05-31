@extends('layouts.app')

@section('title', 'Search Results')
@section('meta_description', 'Search Classic Reinsurance Brokers website for reinsurance services, products, and information.')
@section('og_title', 'Search Results | Classic Reinsurance Brokers')
@section('og_description', 'Find reinsurance services, products, and resources at Classic Reinsurance Brokers.')

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "SearchResultsPage",
    "name": "Search Results",
    "url": "{{ url()->current() }}",
    "potentialAction": {
        "@type": "SearchAction",
        "target": "{{ url('/search') }}?q={search_term_string}",
        "query": "{{ request('q') ?? 'required' }}"
    }
}
</script>
@endpush

@section('content')
<section class="relative overflow-hidden bg-gradient-to-br from-primary-950 via-primary-900 to-neutral-950 py-20 lg:py-28">
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <span class="absolute top-1/4 left-1/5 h-3 w-3 rounded-full bg-primary-500/20 animate-pulse"></span>
        <span class="absolute top-1/3 left-3/4 h-2 w-2 rounded-full bg-primary-400/20 animate-pulse" style="animation-delay: 1s"></span>
        <span class="absolute top-2/3 left-1/3 h-1.5 w-1.5 rounded-full bg-white/10 animate-pulse" style="animation-delay: 2s"></span>
        <span class="absolute top-1/5 left-2/3 h-2.5 w-2.5 rounded-full bg-primary-600/15 animate-pulse" style="animation-delay: 0.5s"></span>
        <span class="absolute top-3/4 left-1/6 h-2 w-2 rounded-full bg-primary-500/15 animate-pulse" style="animation-delay: 1.5s"></span>
    </div>
    <div class="mx-auto max-w-4xl px-6 lg:px-8 relative z-10">
        <div class="fade-up text-center">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">Search results</h1>
            <p class="mt-4 text-lg text-neutral-300">Find the reinsurance services, products, and information you need.</p>
        </div>
        <div class="fade-up mx-auto mt-10 max-w-xl">
            <form action="{{ route('search') }}" method="GET" role="search">
                <div class="relative">
                    <label for="search-input" class="sr-only">Search our website</label>
                    <input id="search-input" type="text" name="q" value="{{ request('q') }}" placeholder="Search services, products, resources..." class="block w-full rounded-lg border border-neutral-700 bg-neutral-800/50 px-4 py-4 pl-12 pr-32 text-sm text-white placeholder-neutral-500 focus:border-primary-600 focus:outline-none focus:ring-1 focus:ring-primary-600" autocomplete="off" aria-label="Search query">
                    <svg class="absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <button type="submit" class="absolute right-1.5 top-1/2 -translate-y-1/2 btn bg-primary-600 text-white hover:bg-primary-500 text-sm py-2 px-5">Search</button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="py-20 lg:py-28 bg-neutral-950">
    <div class="mx-auto max-w-4xl px-6 lg:px-8">
        @isset($results)
            @if($results->count() > 0)
                <div class="fade-up">
                    <div class="flex flex-wrap items-center justify-between gap-4 border-b border-neutral-800 pb-4">
                        <p class="text-sm text-neutral-400">Showing <strong class="text-white">{{ $results->firstItem() }}-{{ $results->lastItem() }}</strong> of <strong class="text-white">{{ $results->total() }}</strong> result{{ $results->total() !== 1 ? 's' : '' }} @if(request('q')) for "<strong class="text-primary-600">{{ request('q') }}</strong>"@endif</p>
                    </div>
                    <div class="mt-6 space-y-4">
                        @foreach($results as $result)
                            <article class="fade-up card-glass rounded-xl border border-neutral-800 bg-neutral-900/60 backdrop-blur-sm p-6 hover:border-neutral-700 sm:p-8">
                                <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                                    <div class="flex-1 min-w-0">
                                        @if(isset($result->type))<span class="tag mb-2">{{ $result->type }}</span>@endif
                                        <h3 class="mt-1 text-lg font-bold text-white"><a href="{{ $result->url ?? '#' }}" class="hover:text-primary-600 transition-colors">{{ $result->title ?? 'Untitled' }}</a></h3>
                                        @if(isset($result->excerpt))<p class="mt-2 text-sm leading-relaxed text-neutral-400">{!! Str::limit($result->excerpt, 250) !!}</p>@endif
                                    </div>
                                    @if(isset($result->url))<a href="{{ $result->url }}" class="shrink-0 self-start rounded-lg bg-neutral-800 p-2.5 text-neutral-500 transition-colors hover:bg-primary-600/20 hover:text-primary-600 sm:self-center" aria-label="View {{ $result->title ?? 'result' }}"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></a>@endif
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <div class="fade-up mt-10">{{ $results->links() }}</div>
                </div>
            @else
                <div class="fade-up mt-16 text-center">
                    <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-neutral-800">
                        <svg class="h-8 w-8 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>
                    <h2 class="mt-6 text-2xl font-bold text-white">No results found</h2>
                    <p class="mx-auto mt-3 max-w-md text-base text-neutral-400">@if(request('q'))We couldn't find any results matching "<strong class="text-neutral-200">{{ request('q') }}</strong>". Please try adjusting your search terms or browse our services below.@else Please enter a search term to find what you're looking for.@endif</p>
                    <div class="mt-8 flex flex-wrap justify-center gap-4">
                        <a href="{{ route('services') }}" class="btn border border-neutral-700 text-neutral-300 hover:bg-neutral-800">View our services</a>
                        <a href="{{ route('contact') }}" class="btn bg-primary-600 text-white hover:bg-primary-500">Contact us</a>
                    </div>
                </div>
            @endif
        @else
            <div class="fade-up mt-16 text-center">
                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-neutral-800">
                    <svg class="h-8 w-8 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <h2 class="mt-6 text-2xl font-bold text-white">Search our website</h2>
                <p class="mx-auto mt-3 max-w-md text-base text-neutral-400">Enter a keyword above to search our reinsurance services, products, and resources. Try searching for "motor", "aviation", "cyber", or "advisory".</p>
                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a href="{{ route('services') }}" class="btn border border-neutral-700 text-neutral-300 hover:bg-neutral-800">Our services</a>
                    <a href="{{ route('about') }}" class="btn bg-primary-600 text-white hover:bg-primary-500">About us</a>
                </div>
            </div>
        @endisset
    </div>
</section>
@endsection
