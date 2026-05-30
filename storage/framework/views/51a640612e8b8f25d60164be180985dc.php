<?php $__env->startSection('title', $product['name']); ?>
<?php $__env->startSection('meta_description', $product['subtitle']); ?>
<?php $__env->startSection('og_title', $product['name'] . ' | Classic Reinsurance Brokers'); ?>
<?php $__env->startSection('og_description', $product['subtitle']); ?>

<?php $__env->startPush('head'); ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "<?php echo e($product['name']); ?>",
    "description": "<?php echo e($product['subtitle']); ?>",
    "provider": {
        "@type": "InsuranceBrokerage",
        "name": "Classic Reinsurance Brokers",
        "url": "<?php echo e(url('/')); ?>"
    },
    "areaServed": ["Zimbabwe"]
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
            <span class="text-white"><?php echo e($product['name']); ?></span>
        </nav>
        <div class="grid items-center gap-12 lg:grid-cols-2">
            <div class="reveal">
                <span class="inline-block rounded-lg bg-primary-600/20 px-4 py-1.5 font-heading text-xs font-semibold uppercase tracking-widest text-primary-300">Product Detail</span>
                <h1 class="mt-6 font-heading text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"><?php echo e($product['name']); ?></h1>
                <p class="mt-6 text-lg leading-relaxed text-neutral-300"><?php echo e($product['subtitle']); ?></p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="<?php echo e(route('contact')); ?>" class="btn-primary text-sm">Get a Quote</a>
                    <a href="<?php echo e(route('services')); ?>" class="btn-secondary border-white text-white hover:bg-white hover:text-neutral-900 text-sm">All Products</a>
                </div>
            </div>
            <div class="reveal-scale relative">
                <div class="img-zoom aspect-[4/3] overflow-hidden rounded-md shadow-2xl">
                    <img src="<?php echo e(asset('images/' . Str::slug($product['name']) . '.png')); ?>" alt="<?php echo e($product['name']); ?>" class="img-reveal h-full w-full object-cover" onerror="this.src='<?php echo e(asset('images/abstractpattern.png')); ?>'">
                </div>
            </div>
        </div>
    </div>
    <div class="absolute -bottom-1 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>
</section>

<section class="bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <span class="reveal inline-block rounded-lg bg-primary-50 px-4 py-1.5 font-heading text-xs font-semibold uppercase tracking-widest text-primary-700">Key Features</span>
            <h2 class="reveal section-title mt-4">What We Cover</h2>
            <p class="reveal section-subtitle mx-auto">Comprehensive coverage designed to protect your business and assets.</p>
        </div>
        <div class="stagger-children mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $product['features']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="card-hover group">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-heading text-lg font-bold text-neutral-900"><?php echo e($feature); ?></h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-600">Tailored reinsurance capacity and expert underwriting support for <?php echo e(lcfirst($feature)); ?> risks across the Zimbabwean market.</p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-span-full text-center text-neutral-400">
                <p>Feature details coming soon.</p>
            </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>

<section class="bg-neutral-50 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-3">
            <div class="lg:col-span-2">
                <div class="reveal">
                    <span class="text-sm font-semibold uppercase tracking-widest text-primary-600">Why Choose Us</span>
                    <h2 class="section-title mt-3">Why Classic Reinsurance Brokers</h2>
                    <p class="mt-6 text-lg leading-relaxed text-neutral-600">
                        With decades of combined experience in the African reinsurance market, we bring unparalleled expertise, strong carrier relationships, and a client-first approach to every placement.
                    </p>
                </div>
                <div class="reveal mt-10 grid gap-6 sm:grid-cols-2">
                    <div class="card-hover flex gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-primary-100 text-primary-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-bold text-neutral-900">Deep Market Knowledge</h3>
                            <p class="mt-1 text-sm text-neutral-500">Intimate understanding of local regulations, risks, and market dynamics across Africa.</p>
                        </div>
                    </div>
                    <div class="card-hover flex gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-primary-100 text-primary-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-bold text-neutral-900">Strong Carrier Relationships</h3>
                            <p class="mt-1 text-sm text-neutral-500">Access to leading global and regional reinsurers ensuring competitive terms and security.</p>
                        </div>
                    </div>
                    <div class="card-hover flex gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-amber-100 text-amber-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-bold text-neutral-900">Tailored Solutions</h3>
                            <p class="mt-1 text-sm text-neutral-500">Customised reinsurance programmes designed around your specific risk profile and needs.</p>
                        </div>
                    </div>
                    <div class="card-hover flex gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-green-100 text-green-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM3 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 019.374 21c-2.331 0-4.512-.645-6.374-1.766z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-bold text-neutral-900">End-to-End Support</h3>
                            <p class="mt-1 text-sm text-neutral-500">Dedicated broking team guiding you from programme design through to claims advocacy.</p>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="lg:col-span-1">
                <div class="reveal sticky top-24 rounded-md bg-white p-6 shadow-sm ring-1 ring-neutral-100">
                    <h3 class="font-heading text-lg font-bold text-neutral-900">Related Products</h3>
                    <p class="mt-1 text-sm text-neutral-500">Explore our other reinsurance solutions.</p>
                    <ul class="mt-6 space-y-3">
                        <li>
                            <a href="<?php echo e(route('services')); ?>" class="card-hover flex items-center gap-3 rounded-md px-4 py-3 text-sm font-medium text-neutral-700 transition-colors hover:text-primary-600">
                                <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-primary-50 text-primary-600">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </span>
                                View All Products
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-gradient-to-br from-primary-700 via-primary-600 to-primary-800 py-20 lg:py-28">
    <div class="pointer-events-none absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMjAgMzB2Mmg4di0yaC04em0wLTE2djJoOHYtMmgtOHoiIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSIvPjwvc3ZnPg==')]"></div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="reveal font-heading text-3xl font-extrabold tracking-tight text-white sm:text-4xl lg:text-5xl">Partner with Classic Reinsurance Brokers</h2>
            <p class="reveal mt-6 text-lg leading-relaxed text-primary-100">Let our team of experienced reinsurance brokers help you structure the optimal programme for <?php echo e($product['name']); ?>. Contact us today for a confidential discussion.</p>
            <div class="reveal mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="<?php echo e(route('contact')); ?>" class="btn-primary bg-white text-primary-700 hover:bg-primary-50 hover:text-primary-800 shadow-lg shadow-primary-900/30">Request a Consultation</a>
                <a href="tel:+263242773192" class="btn-ghost text-white hover:bg-white/10">+263 242 773192/3/4</a>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\claud\OneDrive\Desktop\classicreinsurancebrokers\resources\views/pages/product.blade.php ENDPATH**/ ?>