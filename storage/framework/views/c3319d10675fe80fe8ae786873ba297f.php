<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title', config('app.name', 'Classic Reinsurance Brokers')); ?> | <?php echo e(config('app.name')); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Classic Reinsurance Brokers is Zimbabwe\'s premier reinsurance broker, delivering innovative and tailored reinsurance solutions across Africa.'); ?>">

    <meta property="og:title" content="<?php echo $__env->yieldContent('og_title', config('app.name')); ?>" />
    <meta property="og:description" content="<?php echo $__env->yieldContent('og_description', 'Zimbabwe\'s premier reinsurance broker, delivering innovative and tailored reinsurance solutions across Africa.'); ?>" />
    <meta property="og:image" content="<?php echo $__env->yieldContent('og_image', asset('images/og-default.jpg')); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo e(url()->current()); ?>" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $__env->yieldContent('og_title', config('app.name')); ?>">
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('og_description', 'Zimbabwe\'s premier reinsurance broker'); ?>">

    <link rel="canonical" href="<?php echo e(url()->current()); ?>" />
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/favicon.png')); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <?php echo $__env->yieldPushContent('head'); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="min-h-screen bg-white">
    <?php if (isset($component)) { $__componentOriginala591787d01fe92c5706972626cdf7231 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala591787d01fe92c5706972626cdf7231 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $attributes = $__attributesOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__attributesOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $component = $__componentOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__componentOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "InsuranceBrokerage",
        "name": "Classic Reinsurance Brokers",
        "description": "Zimbabwe's premier reinsurance broker",
        "url": "<?php echo e(url('/')); ?>",
        "telephone": "+263242773192",
        "email": "info@classicre.co.zw",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "11th Floor Fidelity Life Tower, 5 Raleigh Street",
            "addressLocality": "Harare",
            "addressCountry": "ZW"
        },
        "foundingDate": "2010",
        "areaServed": ["Zimbabwe", "Africa"],
        "priceRange": "$$"
    }
    </script>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\claud\OneDrive\Desktop\classicreinsurancebrokers\resources\views/layouts/app.blade.php ENDPATH**/ ?>