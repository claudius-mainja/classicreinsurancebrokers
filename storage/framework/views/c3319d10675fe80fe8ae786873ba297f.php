<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', config('app.name')); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Classic Reinsurance Brokers — Zimbabwe\'s premier reinsurance broker, connecting insurance companies with leading global and regional reinsurance markets through expert treaty, facultative, and advisory placements since 2015.'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('meta_keywords', 'reinsurance broker Zimbabwe, reinsurance broker Harare, treaty reinsurance Zimbabwe, facultative reinsurance, reinsurance advisory, Classic Reinsurance Brokers, insurance company reinsurance, African reinsurance broker, risk management Zimbabwe, insurance broker Zimbabwe, reinsurance intermediary, reinsurance products Zimbabwe, specialty reinsurance, political risk reinsurance, cyber reinsurance'); ?>">
    <meta name="author" content="Classic Reinsurance Brokers">
    <meta name="geo.region" content="ZW">
    <meta name="geo.placename" content="Harare">
    <meta name="geo.position" content="-17.8252;31.0335">
    <meta name="ICBM" content="-17.8252, 31.0335">
    <meta property="og:title" content="<?php echo $__env->yieldContent('og_title', config('app.name')); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('og_description', 'Zimbabwe\'s premier reinsurance broker delivering innovative and tailored reinsurance placements for insurance companies.'); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('og_image', asset('images/og-image.png')); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:site_name" content="<?php echo e(config('app.name')); ?>">
    <meta property="og:locale" content="en_ZW">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $__env->yieldContent('og_title', config('app.name')); ?>">
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('og_description', 'Zimbabwe\'s premier reinsurance broker, connecting insurance companies with leading reinsurance markets.'); ?>">
    <meta name="twitter:image" content="<?php echo $__env->yieldContent('og_image', asset('images/og-image.png')); ?>">
    <meta name="robots" content="<?php echo $__env->yieldContent('robots', 'index, follow'); ?>">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large">
    <link rel="canonical" href="<?php echo e(url()->current()); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/favicon.png')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js', 'resources/css/app.css']); ?>
    <?php echo $__env->yieldPushContent('head'); ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "InsuranceBrokerage",
        "name": "Classic Reinsurance Brokers",
        "description": "Zimbabwe's premier reinsurance broker connecting insurance companies with leading global and regional reinsurance markets for treaty, facultative, and specialty reinsurance solutions.",
        "url": "<?php echo e(url('/')); ?>",
        "telephone": "+263242773192",
        "email": "info@classicre.co.zw",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "11th Floor Fidelity Life Tower, 5 Raleigh Street",
            "addressLocality": "Harare",
            "addressRegion": "Harare",
            "addressCountry": "ZW",
            "postalCode": "BW 118"
        },
        "foundingDate": "2015",
        "founder": { "@type": "Person", "name": "Kingstone Mhinda" },
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

    <?php echo $__env->make('components.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main class="min-h-screen">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

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

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\claud\OneDrive\Desktop\classicreinsurancebrokers\resources\views/layouts/app.blade.php ENDPATH**/ ?>