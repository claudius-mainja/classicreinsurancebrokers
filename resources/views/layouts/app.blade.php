<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('meta_description', 'Classic Reinsurance Brokers — Zimbabwe\'s premier reinsurance broker, connecting insurance companies with leading global and regional reinsurance markets through expert treaty, facultative, and advisory placements since 2015.')">
    <meta name="keywords" content="@yield('meta_keywords', 'reinsurance broker Zimbabwe, reinsurance broker Harare, treaty reinsurance Zimbabwe, facultative reinsurance, reinsurance advisory, Classic Reinsurance Brokers, insurance company reinsurance, African reinsurance broker, risk management Zimbabwe, insurance broker Zimbabwe, reinsurance intermediary, reinsurance products Zimbabwe, specialty reinsurance, political risk reinsurance, cyber reinsurance')">
    <meta name="author" content="Classic Reinsurance Brokers">
    <meta name="geo.region" content="ZW">
    <meta name="geo.placename" content="Harare">
    <meta name="geo.position" content="-17.8252;31.0335">
    <meta name="ICBM" content="-17.8252, 31.0335">
    <meta property="og:title" content="@yield('og_title', config('app.name'))">
    <meta property="og:description" content="@yield('og_description', 'Zimbabwe\'s premier reinsurance broker delivering innovative and tailored reinsurance placements for insurance companies.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.png'))">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:locale" content="en_ZW">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', config('app.name'))">
    <meta name="twitter:description" content="@yield('og_description', 'Zimbabwe\'s premier reinsurance broker, connecting insurance companies with leading reinsurance markets.')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/og-image.png'))">
    <meta name="robots" content="@yield('robots', 'index, follow')">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large">

    {{-- ChatGPT / Perplexity / Gemini / AI SEO meta tags --}}
    <meta name="chatgpt:title" content="@yield('og_title', config('app.name'))">
    <meta name="chatgpt:description" content="@yield('meta_description', config('app.name') . ' — Zimbabwe\'s premier reinsurance broker.')">
    <meta name="perplexity:title" content="@yield('og_title', config('app.name'))">
    <meta name="perplexity:description" content="@yield('meta_description', config('app.name') . ' — Zimbabwe\'s premier reinsurance broker.')">
    <meta name="perplexity:site" content="Classic Reinsurance Brokers">
    <meta name="perplexity:locale" content="en_ZW">

    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])

    {{-- Google Tag Manager --}}
    @if(config('services.google_tag_manager'))
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','{{ config('services.google_tag_manager') }}');</script>
    @endif

    {{-- Google Analytics (GA4) --}}
    @if(config('services.google_analytics'))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google_analytics') }}"></script>
    <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','{{ config('services.google_analytics') }}');</script>
    @endif

    {{-- Google Ads --}}
    @if(config('services.google_ads'))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google_ads') }}"></script>
    <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','{{ config('services.google_ads') }}');</script>
    @endif

    {{-- Facebook / Meta Pixel --}}
    @if(config('services.facebook_pixel'))
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '{{ config('services.facebook_pixel') }}');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ config('services.facebook_pixel') }}&ev=PageView&noscript=1"/></noscript>
    @endif

    {{-- Meta Ads Pixel --}}
    @if(config('services.meta_ads_pixel'))
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '{{ config('services.meta_ads_pixel') }}');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ config('services.meta_ads_pixel') }}&ev=PageView&noscript=1"/></noscript>
    @endif

    @stack('head')

    {{-- Core JSON-LD: WebSite + InsuranceBrokerage --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "WebSite",
        "name": "{{ config('app.name') }}",
        "url": "{{ url('/') }}",
        "description": "Zimbabwe's premier reinsurance broker connecting insurance companies with leading global and regional reinsurance markets.",
        "potentialAction": {
            "@type": "SearchAction",
            "target": {
                "@type": "EntryPoint",
                "urlTemplate": "{{ url('/search') }}?q={search_term_string}"
            },
            "query-input": "required name=search_term_string"
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": ["InsuranceBrokerage", "LocalBusiness"],
        "name": "Classic Reinsurance Brokers",
        "description": "Zimbabwe's premier reinsurance broker connecting insurance companies with leading global and regional reinsurance markets for treaty, facultative, and specialty reinsurance solutions.",
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
        "areaServed": [
            "Zimbabwe", "Africa",
            "Harare", "Bulawayo", "Masvingo", "Chitungwiza", "Mutare",
            "Gweru", "Kwekwe", "Kadoma", "Chegutu", "Chinhoyi",
            "Karoi", "Kariba", "Victoria Falls", "Hwange",
            "Bindura", "Marondera", "Rusape", "Chipinge",
            "Avondale", "Borrowdale", "Chishawasha", "Highlands"
        ],
        "priceRange": "$$",
        "image": "{{ asset('images/og-image.png') }}",
        "logo": "{{ asset('images/logo.png') }}",
        "sameAs": [
            "https://linkedin.com/company/classicreinsurancebrokers",
            "https://web.facebook.com/classicreinsurancebrokers"
        ],
        "knowsAbout": [
            "Treaty Reinsurance", "Facultative Reinsurance", "Advisory Services",
            "Specialty Risk Insurance", "Reinsurance Intermediary Services",
            "Motor Reinsurance", "Household Reinsurance", "Engineering Reinsurance",
            "Assets All Risks Reinsurance", "Liability Reinsurance",
            "Group Personal Accidents Reinsurance", "Travel Reinsurance",
            "Goods In Transit Reinsurance", "Agriculture Reinsurance",
            "Aviation Reinsurance", "Cyber Reinsurance", "Political Risk Reinsurance"
        ],
        "openingHoursSpecification": [
            { "@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"], "opens": "08:00", "closes": "16:30" }
        ]
    }
    </script>
</head>
<body class="bg-neutral-950 text-neutral-300 antialiased">
    {{-- Google Tag Manager (noscript) --}}
    @if(config('services.google_tag_manager'))
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ config('services.google_tag_manager') }}" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @endif

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
