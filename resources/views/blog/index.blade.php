@extends('layouts.app')

@section('title', 'Reinsurance Insights')
@section('meta_description', 'Expert insights, analysis, and thought leadership on reinsurance, risk management, and the Zimbabwean insurance market from Classic Reinsurance Brokers.')
@section('og_title', 'Reinsurance Insights | Classic Reinsurance Brokers Blog')
@section('og_description', 'Expert reinsurance insights, market analysis, and thought leadership from Zimbabwe\'s premier reinsurance broker.')

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "Blog",
    "name": "Classic Reinsurance Brokers Insights",
    "description": "Expert insights on reinsurance, risk management, and the African insurance market.",
    "url": "{{ url()->current() }}",
    "publisher": { "@type": "Organization", "name": "Classic Reinsurance Brokers" }
}
</script>
@endpush

@section('content')
{{-- Hero --}}
<section class="hero-gradient min-h-[40vh] flex items-center">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-24 lg:py-32">
        <div class="max-w-3xl">
            <span class="fade-up inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1.5 text-xs font-semibold text-primary-200">Our insights</span>
            <h1 class="fade-up mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl" style="transition-delay: 0.1s">Reinsurance Insights</h1>
            <p class="fade-up mt-6 max-w-xl text-lg leading-relaxed text-neutral-300" style="transition-delay: 0.2s">Expert analysis, market intelligence, and thought leadership on reinsurance, risk management, and the Zimbabwean insurance landscape.</p>
        </div>
    </div>
</section>

{{-- Posts --}}
<section class="py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-4">
            <div class="lg:col-span-3">
                @if($posts->count() > 0)
                    <div class="grid gap-8 sm:grid-cols-2">
                        @foreach($posts as $post)
                            <article class="fade-up card overflow-hidden transition-all duration-300 hover:shadow-md group">
                                <a href="{{ route('blog.show', $post->slug) }}" class="block">
                                    <div class="aspect-[16/9] overflow-hidden bg-neutral-100">
                                        <img src="{{ asset($post->featured_image ?? 'images/blog-placeholder.jpg') }}" alt="{{ $post->title }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.03]">
                                    </div>
                                </a>
                                <div class="p-6">
                                    <div class="mb-3 flex flex-wrap items-center gap-2">
                                        <span class="tag text-xs">{{ $post->category->name ?? 'Insurance' }}</span>
                                        <span class="text-xs text-neutral-400">{{ $post->published_at->format('M d, Y') }}</span>
                                    </div>
                                    <h2 class="text-lg font-bold text-neutral-900 transition-colors group-hover:text-primary-600"><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
                                    <p class="mt-2 text-sm leading-relaxed text-neutral-500 line-clamp-3">{{ Str::limit($post->excerpt, 150) }}</p>
                                    <div class="mt-4 flex items-center justify-between border-t border-neutral-100 pt-4">
                                        <div class="flex items-center gap-3">
                                            <img src="{{ asset($post->author->avatar ?? 'images/team-placeholder.jpg') }}" alt="{{ $post->author->name }}" class="h-7 w-7 rounded-full object-cover">
                                            <span class="text-sm font-medium text-neutral-600">{{ $post->author->name }}</span>
                                        </div>
                                        @if($post->tags->count() > 0)
                                            <div class="flex gap-1">
                                                @foreach($post->tags->take(2) as $tag)<span class="rounded bg-neutral-100 px-2 py-0.5 text-xs text-neutral-500">#{{ $tag->name }}</span>@endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <div class="fade-up mt-12">{{ $posts->links() }}</div>
                @else
                    <div class="fade-up py-20 text-center">
                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-neutral-100">
                            <svg class="h-8 w-8 text-neutral-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                        </div>
                        <h3 class="mt-4 text-xl font-bold">No articles yet</h3>
                        <p class="mt-2 text-neutral-500">Check back soon for our latest insights and analysis.</p>
                    </div>
                @endif
            </div>
            <aside class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">
                    <div class="fade-up card p-6">
                        <h3 class="text-sm font-semibold uppercase tracking-widest text-neutral-900">Categories</h3>
                        <ul class="mt-4 space-y-1">
                            @foreach($categories ?? [] as $category)
                                <li><a href="{{ route('blog.category', $category->slug) }}" class="flex items-center justify-between rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600 {{ request('category') === $category->slug ? 'bg-neutral-50 text-primary-600 font-medium' : '' }}">{{ $category->name }} <span class="rounded-md bg-neutral-100 px-2 py-0.5 text-xs text-neutral-500">{{ $category->posts_count ?? 0 }}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="fade-up hero-gradient card !border-0 p-6 text-center">
                        <h3 class="text-base font-bold text-white">Subscribe to our newsletter</h3>
                        <p class="mt-2 text-sm text-primary-100">Get the latest insights delivered to your inbox.</p>
                        <form action="{{ route('newsletter.subscribe') }}" method="POST" class="mt-4">
                            @csrf
                            <input type="email" name="email" placeholder="your@email.com" required class="w-full rounded-lg border-0 px-4 py-2.5 text-sm text-neutral-900 placeholder-neutral-400 focus:outline-none focus:ring-2 focus:ring-white">
                            <button type="submit" class="btn mt-3 w-full bg-white text-primary-700 hover:bg-primary-50 text-sm">Subscribe</button>
                        </form>
                    </div>
                    <div class="fade-up card p-6">
                        <h3 class="text-sm font-semibold uppercase tracking-widest text-neutral-900">Tags</h3>
                        <div class="mt-4 flex flex-wrap gap-2">
                            @foreach($tags ?? [] as $tag)
                                <a href="{{ route('blog.tag', $tag->slug) }}" class="tag {{ request('tag') === $tag->slug ? '!bg-primary-50 !text-primary-700' : '' }}">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
