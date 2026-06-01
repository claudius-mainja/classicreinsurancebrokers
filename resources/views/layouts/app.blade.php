<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('meta_description', 'Classic Reinsurance Brokers — Zimbabwe\'s premier reinsurance-to-reinsurance intermediary, delivering expert treaty, facultative, and advisory reinsurance solutions since 2015.')">
    <meta name="keywords" content="@yield('meta_keywords', 'reinsurance broker Zimbabwe, reinsurance intermediary, reinsurance-to-reinsurance, treaty reinsurance, facultative reinsurance, reinsurance advisory, Classic Reinsurance Brokers, Harare reinsurance broker, African reinsurance, insurance companies Zimbabwe, risk management Zimbabwe, reinsurance solutions, reinsurance products Zimbabwe, specialty reinsurance, political risk reinsurance, cyber reinsurance')">
    <meta name="author" content="Classic Reinsurance Brokers">
    <meta name="geo.region" content="ZW">
    <meta name="geo.placename" content="Harare">
    <meta name="geo.position" content="-17.8252;31.0335">
    <meta name="ICBM" content="-17.8252, 31.0335">
    <meta property="og:title" content="@yield('og_title', config('app.name'))">
    <meta property="og:description" content="@yield('og_description', 'Zimbabwe\'s premier reinsurance broker delivering innovative and tailored reinsurance-to-reinsurance intermediary solutions.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.png'))">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:locale" content="en_ZW">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', config('app.name'))">
    <meta name="twitter:description" content="@yield('og_description', 'Zimbabwe\'s premier reinsurance-to-reinsurance intermediary.')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/og-image.png'))">
    <meta name="robots" content="@yield('robots', 'index, follow')">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @stack('head')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "InsuranceBrokerage",
        "name": "Classic Reinsurance Brokers",
        "description": "Zimbabwe's premier reinsurance-to-reinsurance intermediary brokering treaty, facultative, and specialty reinsurance solutions.",
        "url": "{{ url('/') }}",
        "telephone": "+263242773192",
        "email": "info@classicre.co.zw",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "11th Floor Fidelity Life Tower, 5 Raleigh Street",
            "addressLocality": "Harare",
            "addressRegion": "Harare",
            "addressCountry": "ZW",
            "postalCode": "BW 118"
        },
        "foundingDate": "2015",
        "founder": { "@@type": "Person", "name": "Kingstone Mhinda" },
        "areaServed": ["Zimbabwe", "Africa"],
        "priceRange": "$$",
        "sameAs": [
            "https://linkedin.com/company/classicreinsurancebrokers",
            "https://web.facebook.com/classicreinsurancebrokers"
        ],
        "knowsAbout": ["Treaty Reinsurance", "Facultative Reinsurance", "Advisory Services", "Specialty Risk Insurance", "Reinsurance Intermediary Services"]
    }
    </script>
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
