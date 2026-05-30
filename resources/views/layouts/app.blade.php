<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Classic Reinsurance Brokers')) | {{ config('app.name') }}</title>
    <meta name="description" content="@yield('meta_description', 'Classic Reinsurance Brokers is Zimbabwe\'s premier reinsurance broker, delivering innovative and tailored reinsurance solutions across Africa.')">

    <meta property="og:title" content="@yield('og_title', config('app.name'))" />
    <meta property="og:description" content="@yield('og_description', 'Zimbabwe\'s premier reinsurance broker, delivering innovative and tailored reinsurance solutions across Africa.')" />
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', config('app.name'))">
    <meta name="twitter:description" content="@yield('og_description', 'Zimbabwe\'s premier reinsurance broker')">

    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @stack('head')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
</head>
<body class="min-h-screen bg-white">
    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@type": "InsuranceBrokerage",
        "name": "Classic Reinsurance Brokers",
        "description": "Zimbabwe's premier reinsurance broker",
        "url": "{{ url('/') }}",
        "telephone": "+263242773192",
        "email": "info@classicre.co.zw",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "11th Floor Fidelity Life Tower, 5 Raleigh Street",
            "addressLocality": "Harare",
            "addressCountry": "ZW"
        },
        "foundingDate": "2015",
        "areaServed": ["Zimbabwe", "Africa"],
        "priceRange": "$$"
    }
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // AOS initialization for simple fade-ups, fade-left, fade-right
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
            });

            // GSAP ScrollTrigger for hero headings and advanced animations
            gsap.registerPlugin(ScrollTrigger);

            // Animate hero headings on page load
            document.querySelectorAll('.hero-animate').forEach((el, i) => {
                gsap.from(el, {
                    y: 60,
                    opacity: 0,
                    duration: 0.8,
                    delay: i * 0.15,
                    ease: 'power3.out',
                });
            });

            // Scroll-triggered reveal for all .reveal elements (backward compat)
            const observerOptions = { threshold: 0.15, rootMargin: '0px 0px -50px 0px' };
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale, .reveal-stagger, .img-reveal').forEach(el => {
                revealObserver.observe(el);
            });

            // Typewriter effect for hero spans with .typewriter class
            document.querySelectorAll('.typewriter').forEach(el => {
                const text = el.textContent;
                el.textContent = '';
                let i = 0;
                const type = () => {
                    if (i < text.length) {
                        el.textContent += text.charAt(i);
                        i++;
                        setTimeout(type, 40);
                    }
                };
                setTimeout(type, 500);
            });
        });
    </script>

    @stack('scripts')
</body>
</html>
