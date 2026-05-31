<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('meta_description', 'Classic Reinsurance Brokers — Zimbabwe\'s premier reinsurance broker.')">
    <meta property="og:title" content="@yield('og_title', config('app.name'))">
    <meta property="og:description" content="@yield('og_description', 'Zimbabwe\'s premier reinsurance broker delivering innovative and tailored reinsurance solutions.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.png'))">
    <meta property="og:type" content="website">
    <meta name="robots" content="@yield('robots', 'index, follow')">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @stack('head')
</head>
<body class="bg-neutral-950 text-neutral-300 antialiased">

    <div class="reading-progress" x-data="{ progress: 0 }" x-init="window.addEventListener('scroll', () => { progress = Math.min((window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100, 100) })" :style="`width: ${progress}%`"></div>

    @include('components.navbar')

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('components.footer')

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
        document.querySelectorAll('.fade-up, .fade-in, .fade-left, .fade-right, .reveal').forEach(function(el) {
            observer.observe(el);
        });
    });
    </script>

    @stack('scripts')
</body>
</html>
