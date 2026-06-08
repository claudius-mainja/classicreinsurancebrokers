@extends('layouts.app')

@section('title', $post->title)
@section('meta_description', $post->excerpt)
@section('og_title', $post->title)
@section('og_description', $post->excerpt)
@section('og_image', asset($post->featured_image ?? 'images/blog-placeholder.jpg'))

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@type": "ListItem", "position": 2, "name": "Insights", "item": "{{ route('blog.index') }}" },
        { "@type": "ListItem", "position": 3, "name": "{{ $post->title }}", "item": "{{ url()->current() }}" }
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "Article",
    "headline": "{{ $post->title }}",
    "description": "{{ $post->excerpt }}",
    "image": "{{ asset($post->featured_image ?? 'images/blog-placeholder.jpg') }}",
    "datePublished": "{{ $post->published_at->toIso8601String() }}",
    "author": { "@type": "Person", "name": "{{ $post->author->name }}" },
    "publisher": { "@type": "Organization", "name": "Classic Reinsurance Brokers", "logo": { "@type": "ImageObject", "url": "{{ asset('images/logo.png') }}" } },
    "articleSection": "{{ $post->category->name ?? 'Insurance' }}",
    "keywords": "{{ $post->tags->pluck('name')->implode(', ') }}"
}
</script>
@endpush

@section('content')
<div x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100 })" class="relative bg-neutral-950">
    <div class="fixed left-0 top-0 z-50 h-0.5 bg-primary-600 transition-all duration-150" :style="`width: ${scrolled}%`"></div>

    <section class="relative min-h-[50vh] flex items-end overflow-hidden bg-neutral-950">
        <div class="absolute inset-0 bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('images/herobg.png') }}')"></div>
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
        <div class="aspect-[21/9] overflow-hidden sm:aspect-[3/1] lg:aspect-[4/1]">
            <img src="{{ asset($post->featured_image ?? 'images/herobg.png') }}" alt="{{ $post->title }}" class="h-full w-full object-cover opacity-30">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-neutral-950 via-neutral-950/60 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 z-10">
            <div class="mx-auto max-w-4xl px-6 pb-12 sm:pb-16 lg:px-8">
                <div class="fade-up">
                    <div class="mb-4 flex flex-wrap items-center gap-3">
                        <span class="inline-flex items-center rounded-full bg-primary-500/20 px-3 py-1 text-xs font-medium text-primary-300">{{ $post->category->name ?? 'Insurance' }}</span>
                        <span class="text-sm text-neutral-400">{{ $post->published_at->format('M d, Y') }}</span>
                    </div>
                    <h1 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl">{{ $post->title }}</h1>
                    <div class="mt-6 flex items-center gap-4">
                        <img src="{{ asset($post->author->avatar ?? 'images/team-placeholder.jpg') }}" alt="{{ $post->author->name }}" class="h-10 w-10 rounded-full object-cover ring-2 ring-white/20">
                        <div>
                            <p class="text-sm font-medium text-white">{{ $post->author->name }}</p>
                            <p class="text-xs text-neutral-400">Reading time: {{ $post->reading_time ?? '5' }} min read</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[1fr_300px]">
            <article class="prose prose-lg max-w-none prose-invert prose-headings:text-white prose-a:text-primary-600 prose-a:no-underline hover:prose-a:underline prose-img:rounded-xl prose-strong:text-white prose-code:text-primary-300 prose-pre:bg-neutral-900 prose-pre:border prose-pre:border-neutral-800">
                {!! $post->content !!}

                @if($post->tags->count() > 0)
                    <div class="not-prose mt-8 border-t border-neutral-800 pt-8">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-sm font-semibold text-neutral-300">Tags:</span>
                            @foreach($post->tags as $tag)<a href="{{ route('blog.tag', $tag->slug) }}" class="tag">{{ $tag->name }}</a>@endforeach
                        </div>
                    </div>
                @endif

                <div class="not-prose mt-8 flex flex-wrap items-center justify-between gap-4 border-t border-neutral-800 pt-8">
                    <div class="flex items-center gap-3">
                        <span class="text-sm font-semibold text-neutral-300">Share:</span>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener" class="flex h-9 w-9 items-center justify-center rounded-full bg-neutral-800 text-neutral-400 transition-colors hover:bg-primary-600/20 hover:text-primary-600" aria-label="Share on Facebook"><svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
                        <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener" class="flex h-9 w-9 items-center justify-center rounded-full bg-neutral-800 text-neutral-400 transition-colors hover:bg-primary-600/20 hover:text-primary-600" aria-label="Share on Twitter/X"><svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg></a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($post->title) }}" target="_blank" rel="noopener" class="flex h-9 w-9 items-center justify-center rounded-full bg-neutral-800 text-neutral-400 transition-colors hover:bg-primary-600/20 hover:text-primary-600" aria-label="Share on LinkedIn"><svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                        <a href="mailto:?subject={{ urlencode($post->title) }}&body={{ urlencode(url()->current()) }}" class="flex h-9 w-9 items-center justify-center rounded-full bg-neutral-800 text-neutral-400 transition-colors hover:bg-primary-600/20 hover:text-primary-600" aria-label="Share via Email"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></a>
                    </div>
                </div>

                <div class="not-prose mt-10 card-glass rounded-xl border border-neutral-800 bg-neutral-900/60 backdrop-blur-sm p-8">
                    <h3 class="text-lg font-bold text-white">Leave a comment</h3>
                    <p class="mt-2 text-sm text-neutral-400">Have thoughts on this article? We'd love to hear from you.</p>
                    <form action="{{ route('blog.comment', $post->slug) }}" method="POST" class="mt-6 space-y-4">
                        @csrf
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div><label for="comment-name" class="block text-sm font-medium text-neutral-300">Name</label><input type="text" id="comment-name" name="name" required class="mt-1 block w-full rounded-lg border border-neutral-700 bg-neutral-800/50 px-4 py-2.5 text-sm text-white placeholder-neutral-500 focus:border-primary-600 focus:outline-none focus:ring-1 focus:ring-primary-600"></div>
                            <div><label for="comment-email" class="block text-sm font-medium text-neutral-300">Email</label><input type="email" id="comment-email" name="email" required class="mt-1 block w-full rounded-lg border border-neutral-700 bg-neutral-800/50 px-4 py-2.5 text-sm text-white placeholder-neutral-500 focus:border-primary-600 focus:outline-none focus:ring-1 focus:ring-primary-600"></div>
                        </div>
                        <div><label for="comment-message" class="block text-sm font-medium text-neutral-300">Comment</label><textarea id="comment-message" name="message" rows="4" required class="mt-1 block w-full rounded-lg border border-neutral-700 bg-neutral-800/50 px-4 py-2.5 text-sm text-white placeholder-neutral-500 focus:border-primary-600 focus:outline-none focus:ring-1 focus:ring-primary-600 resize-none"></textarea></div>
                        <button type="submit" class="btn bg-primary-600 text-white hover:bg-primary-500">Post comment</button>
                    </form>
                </div>
            </article>

            <aside class="lg:border-l lg:border-neutral-800 lg:pl-12">
                <div class="sticky top-24 space-y-6">
                    <div class="fade-up card-glass rounded-xl border border-neutral-800 bg-neutral-900/60 backdrop-blur-sm p-6 text-center">
                        <h3 class="text-base font-bold text-white">Subscribe</h3>
                        <p class="mt-2 text-sm text-neutral-400">Get the latest insights delivered to your inbox.</p>
                        <form action="{{ route('newsletter.subscribe') }}" method="POST" class="mt-4">
                            @csrf
                            <input type="email" name="email" placeholder="your@email.com" required class="block w-full rounded-lg border border-neutral-700 bg-neutral-800/50 px-4 py-2.5 text-sm text-white placeholder-neutral-500 focus:border-primary-600 focus:outline-none focus:ring-1 focus:ring-primary-600">
                            <button type="submit" class="btn mt-3 w-full bg-primary-600 text-white hover:bg-primary-500 text-sm">Subscribe</button>
                        </form>
                    </div>
                    @if($relatedPosts->count() > 0)
                        <div class="fade-up">
                            <h3 class="mb-4 text-sm font-semibold uppercase tracking-widest text-white">Related articles</h3>
                            <div class="space-y-4">
                                @foreach($relatedPosts as $related)
                                    <a href="{{ route('blog.show', $related->slug) }}" class="group flex gap-4">
                                        <div class="h-16 w-16 shrink-0 overflow-hidden rounded-xl bg-neutral-800"><img src="{{ asset($related->featured_image ?? 'images/blog-placeholder.jpg') }}" alt="{{ $related->title }}" class="h-full w-full object-cover"></div>
                                        <div><h4 class="text-sm font-semibold text-white transition-colors group-hover:text-primary-600 line-clamp-2">{{ $related->title }}</h4><p class="mt-1 text-xs text-neutral-500">{{ $related->published_at->format('M d, Y') }}</p></div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <div class="fade-up rounded-xl border border-primary-800/30 bg-gradient-to-br from-primary-900 via-primary-800 to-neutral-900 p-6 text-center">
                        <h3 class="text-base font-bold text-white">Need reinsurance solutions?</h3>
                        <p class="mt-2 text-sm text-primary-200">Let our expert team help you navigate the market.</p>
                        <a href="{{ route('contact') }}" class="btn mt-4 inline-flex w-full items-center justify-center bg-primary-600 text-white hover:bg-primary-500 text-sm">Contact us</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>
@endsection
