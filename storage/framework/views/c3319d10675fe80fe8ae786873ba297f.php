<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', config('app.name')); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Classic Reinsurance Brokers — Zimbabwe\'s premier reinsurance broker.'); ?>">
    <meta property="og:title" content="<?php echo $__env->yieldContent('og_title', config('app.name')); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('og_description', 'Zimbabwe\'s premier reinsurance broker delivering innovative and tailored reinsurance solutions.'); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('og_image', asset('images/og-image.png')); ?>">
    <meta property="og:type" content="website">
    <meta name="robots" content="<?php echo $__env->yieldContent('robots', 'index, follow'); ?>">
    <link rel="canonical" href="<?php echo e(url()->current()); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/favicon.png')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js', 'resources/css/app.css']); ?>
    <?php echo $__env->yieldPushContent('head'); ?>
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