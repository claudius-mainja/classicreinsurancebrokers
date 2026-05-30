<?php $__env->startSection('title', $specialty['name']); ?>
<?php $__env->startSection('meta_description', $specialty['description']); ?>
<?php $__env->startSection('og_title', $specialty['name'] . ' | Classic Reinsurance Brokers'); ?>
<?php $__env->startSection('og_description', $specialty['description']); ?>

<?php $__env->startPush('head'); ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "<?php echo e($specialty['name']); ?>",
    "description": "<?php echo e($specialty['description']); ?>",
    "serviceType": "Specialty Insurance",
    "provider": {
        "@type": "InsuranceBrokerage",
        "name": "Classic Reinsurance Brokers",
        "url": "<?php echo e(url('/')); ?>"
    },
    "areaServed": ["Zimbabwe", "Africa"]
}
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="relative overflow-hidden bg-gradient-to-br from-neutral-950 via-neutral-900 to-primary-950 pt-28 pb-20 lg:pb-28">
    <div class="pointer-events-none absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4wMyI+PHBhdGggZD0iTTM2IDM0djItSDI0di0yaDEyek0zNiAyNHYySDI0di0yaDEyeiIvPjwvZz48L2c+PC9zdmc+')] opacity-40"></div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <nav class="reveal mb-8 flex items-center gap-2 text-sm text-neutral-400">
            <a href="<?php echo e(route('home')); ?>" class="transition-colors hover:text-white">Home</a>
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="<?php echo e(route('services')); ?>" class="transition-colors hover:text-white">Services</a>
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-white"><?php echo e($specialty['name']); ?></span>
        </nav>
        <div class="grid items-center gap-12 lg:grid-cols-2">
            <div class="reveal">
                <span class="inline-block rounded-full bg-secondary-600/20 px-4 py-1.5 font-heading text-xs font-semibold uppercase tracking-widest text-secondary-300">Specialty Risk</span>
                <h1 class="mt-6 font-heading text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"><?php echo e($specialty['name']); ?></h1>
                <p class="mt-6 text-lg leading-relaxed text-neutral-300"><?php echo e($specialty['description']); ?></p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="<?php echo e(route('contact')); ?>" class="btn-primary text-sm">Discuss Your Risk</a>
                    <a href="<?php echo e(route('services')); ?>" class="btn-secondary border-white text-white hover:bg-white hover:text-neutral-900 text-sm">View All Specialties</a>
                </div>
            </div>
            <div class="reveal-scale relative">
                <div class="aspect-[4/3] overflow-hidden rounded-2xl shadow-2xl">
                    <img src="<?php echo e(asset('images/specialty/' . Str::slug($specialty['name']) . '.jpg')); ?>" alt="<?php echo e($specialty['name']); ?>" class="h-full w-full object-cover" onerror="this.src='<?php echo e(asset('images/hero-pattern.png')); ?>'">
                </div>
            </div>
        </div>
    </div>
    <div class="absolute -bottom-1 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>
</section>

<section class="bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <span class="reveal inline-block rounded-full bg-secondary-50 px-4 py-1.5 font-heading text-xs font-semibold uppercase tracking-widest text-secondary-700">Service Details</span>
            <h2 class="reveal section-title mt-4">Coverage Options</h2>
            <p class="reveal section-subtitle mx-auto">Specialist reinsurance capacity designed for complex and emerging risk classes.</p>
        </div>
        <div class="stagger-children mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $specialty['features']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-secondary-50 text-secondary-600 transition-colors group-hover:bg-secondary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-heading text-lg font-bold text-neutral-900"><?php echo e($feature); ?></h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Bespoke reinsurance solutions for <?php echo e(lcfirst($feature)); ?>, supported by deep underwriting expertise and access to global specialty markets.</p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-span-full text-center text-neutral-400">
                <p>Coverage details coming soon.</p>
            </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>

<section class="bg-neutral-50 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <span class="reveal inline-block rounded-full bg-secondary-50 px-4 py-1.5 font-heading text-xs font-semibold uppercase tracking-widest text-secondary-700">Why Partner With Us</span>
            <h2 class="reveal section-title mt-4">Why Partner With Us</h2>
            <p class="reveal section-subtitle mx-auto">What makes Classic Reinsurance Brokers the right partner for your specialty reinsurance needs.</p>
        </div>
        <div class="reveal mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <div class="card-hover text-center">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary-100 text-secondary-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 9.75l-4.5 4.5L9 12"/></svg>
                </div>
                <h3 class="font-heading text-lg font-bold text-neutral-900">Specialist Expertise</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Deep technical knowledge across complex and emerging risk classes with proven placement track records.</p>
            </div>
            <div class="card-hover text-center">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-amber-100 text-amber-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
                </div>
                <h3 class="font-heading text-lg font-bold text-neutral-900">Global Market Access</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Direct relationships with Lloyd's, London company market, and international specialty reinsurers.</p>
            </div>
            <div class="card-hover text-center">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-primary-100 text-primary-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                </div>
                <h3 class="font-heading text-lg font-bold text-neutral-900">Technical Underwriting</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Rigorous risk assessment and programme structuring backed by deep actuarial and underwriting capability.</p>
            </div>
            <div class="card-hover text-center">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-green-100 text-green-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM3 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 019.374 21c-2.331 0-4.512-.645-6.374-1.766z"/></svg>
                </div>
                <h3 class="font-heading text-lg font-bold text-neutral-900">Dedicated Service</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">Responsive, client-dedicated teams providing continuity and deep understanding of your business.</p>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-gradient-to-br from-secondary-700 via-secondary-600 to-secondary-800 py-20 lg:py-28">
    <div class="pointer-events-none absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMjAgMzB2Mmg4di0yaC04em0wLTE2djJoOHYtMmgtOHoiIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSIvPjwvc3ZnPg==')]"></div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="reveal font-heading text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl">Partner with Classic Reinsurance Brokers</h2>
            <p class="reveal mt-6 text-lg leading-relaxed text-secondary-100">Our specialty team is ready to help you navigate complex risks with bespoke reinsurance solutions. Contact us to discuss how we can support your unique requirements.</p>
            <div class="reveal mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="<?php echo e(route('contact')); ?>" class="btn-primary bg-white text-secondary-700 hover:bg-secondary-50 hover:text-secondary-800 shadow-lg shadow-secondary-900/30">Contact Our Team</a>
                <a href="tel:+263242773192" class="btn-ghost text-white hover:bg-white/10">+263 242 773192/3/4</a>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\claud\OneDrive\Desktop\classicreinsurancebrokers\resources\views/pages/specialty.blade.php ENDPATH**/ ?>