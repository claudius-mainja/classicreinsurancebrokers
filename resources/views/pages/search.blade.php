@extends('layouts.app')

@section('title', 'Search Results')
@section('meta_description', 'Search Classic Reinsurance Brokers website for reinsurance services, products, and information across our comprehensive range of offerings.')
@section('og_title', 'Search Results | Classic Reinsurance Brokers')
@section('og_description', 'Find reinsurance services, products, and resources at Classic Reinsurance Brokers — Zimbabwe\'s premier reinsurance broker.')

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "SearchResultsPage",
    "name": "Search Results",
    "description": "Search results for {{ request('q') ?? 'all content' }} on Classic Reinsurance Brokers website.",
    "url": "{{ url()->current() }}",
    "isPartOf": {
        "@type": "WebSite",
        "name": "Classic Reinsurance Brokers",
        "url": "{{ url('/') }}"
    },
    "mainEntity": {
        "@type": "ItemList",
        "itemListElement": [
            @isset($results)
                @foreach($results as $index => $result)
                {
                    "@type": "ListItem",
                    "position": {{ $loop->index + 1 }},
                    "item": {
                        "@type": "Thing",
                        "name": "{{ $result->title ?? 'Result' }}",
                        "url": "{{ $result->url ?? url()->current() }}",
                        "description": "{{ Str::limit(strip_tags($result->excerpt ?? ''), 200) }}"
                    }
                }@if(!$loop->last),@endif
                @endforeach
            @endisset
        ]
    },
    "potentialAction": {
        "@type": "SearchAction",
        "target": "{{ url('/search') }}?q={search_term_string}",
        "query": "{{ request('q') ?? 'required' }}"
    }
}
</script>
@endpush

@section('content')
<section class="bg-white px-6 py-20 sm:py-28 lg:px-8">
    <div class="mx-auto max-w-5xl">
        <div class="reveal text-center">
            <h1 class="section-title">Search Results</h1>
            <p class="section-subtitle mx-auto">
                Find the reinsurance services, products, and information you need.
            </p>
        </div>

        <div class="reveal mx-auto mt-10 max-w-2xl">
            <form action="{{ route('search') }}" method="GET" role="search">
                <div class="relative">
                    <label for="search-input" class="sr-only">Search our website</label>
                    <input
                        id="search-input"
                        type="text"
                        name="q"
                        value="{{ request('q') }}"
                        placeholder="Search services, products, resources..."
                        class="w-full rounded-2xl border border-neutral-200 bg-neutral-50 px-6 py-4 pr-14 pl-12 text-base text-neutral-900 placeholder-neutral-400 transition-all duration-300 focus:border-primary-600 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary-600/20"
                        autocomplete="off"
                        aria-label="Search query"
                    />
                    <svg class="absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-neutral-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 rounded-xl bg-primary-600 px-5 py-2.5 text-sm font-semibold text-white transition-all duration-300 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500">
                        Search
                    </button>
                </div>
            </form>
        </div>

        @isset($results)
            @if($results->count() > 0)
                <div class="reveal mt-10">
                    <div class="flex flex-wrap items-center justify-between gap-4 border-b border-neutral-100 pb-4">
                        <p class="text-sm text-neutral-500">
                            Showing <strong class="text-neutral-900">{{ $results->firstItem() }}-{{ $results->lastItem() }}</strong> of <strong class="text-neutral-900">{{ $results->total() }}</strong> result{{ $results->total() !== 1 ? 's' : '' }}
                            @if(request('q'))
                                for "<strong class="text-primary-600">{{ request('q') }}</strong>"
                            @endif
                        </p>
                    </div>

                    <div class="mt-6 space-y-6">
                        @foreach($results as $result)
                            <article class="reveal rounded-2xl border border-neutral-100 bg-white p-6 transition-all duration-300 hover:border-primary-200 hover:shadow-md sm:p-8">
                                <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                                    <div class="flex-1 min-w-0">
                                        <div class="flex flex-wrap items-center gap-3">
                                            @if(isset($result->type))
                                                <span class="inline-flex items-center rounded-full bg-primary-50 px-3 py-0.5 text-xs font-semibold text-primary-700">{{ $result->type }}</span>
                                            @endif
                                        </div>
                                        <h3 class="mt-2 text-lg font-bold text-neutral-900 sm:text-xl">
                                            <a href="{{ $result->url ?? '#' }}" class="transition-colors hover:text-primary-600 focus:outline-none focus:text-primary-600">
                                                {{ $result->title ?? 'Untitled' }}
                                            </a>
                                        </h3>
                                        <p class="mt-2 text-sm leading-relaxed text-neutral-600">
                                            @if(isset($result->excerpt))
                                                {!! Str::limit($result->excerpt, 250) !!}
                                            @endif
                                            @if(request('q'))
                                                <span class="sr-only">Search term: {{ request('q') }}</span>
                                            @endif
                                        </p>
                                    </div>
                                    @if(isset($result->url))
                                        <a href="{{ $result->url }}" class="flex-shrink-0 self-start rounded-lg bg-neutral-50 p-2.5 text-neutral-400 transition-colors hover:bg-primary-50 hover:text-primary-600 sm:self-center" aria-label="View {{ $result->title ?? 'result' }}">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                        </a>
                                    @endif
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <div class="reveal mt-10">
                        {{ $results->links() }}
                    </div>
                </div>
            @else
                <div class="reveal mt-16 text-center">
                    <div class="mx-auto flex h-24 w-24 items-center justify-center rounded-full bg-neutral-100">
                        <svg class="h-12 w-12 text-neutral-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <h2 class="mt-6 text-2xl font-bold text-neutral-900">No Results Found</h2>
                    <p class="mx-auto mt-3 max-w-md text-base leading-relaxed text-neutral-500">
                        @if(request('q'))
                            We couldn't find any results matching "<strong class="text-neutral-700">{{ request('q') }}</strong>". Please try adjusting your search terms or browse our services below.
                        @else
                            Please enter a search term to find what you're looking for. You can search for services, products, resources, and more.
                        @endif
                    </p>
                    <div class="mt-8 flex flex-wrap justify-center gap-4">
                        <a href="{{ route('services') }}" class="btn-primary text-sm">View Our Services</a>
                        <a href="{{ route('contact') }}" class="btn-secondary text-sm">Contact Us</a>
                    </div>
                </div>
            @endif
        @else
            <div class="reveal mt-16 text-center">
                <div class="mx-auto flex h-24 w-24 items-center justify-center rounded-full bg-neutral-100">
                    <svg class="h-12 w-12 text-neutral-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <h2 class="mt-6 text-2xl font-bold text-neutral-900">Search Our Website</h2>
                <p class="mx-auto mt-3 max-w-md text-base leading-relaxed text-neutral-500">
                    Enter a keyword above to search our reinsurance services, products, and resources. Try searching for "motor", "aviation", "cyber", or "advisory".
                </p>
                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a href="{{ route('services') }}" class="btn-primary text-sm">Our Services</a>
                    <a href="{{ route('about') }}" class="btn-secondary text-sm">About Us</a>
                </div>
            </div>
        @endisset
    </div>
</section>
@endsection
