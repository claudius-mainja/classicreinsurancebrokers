<?php $__env->startSection('title', $product['name'] . ' Reinsurance | Classic Reinsurance Brokers'); ?>
<?php $__env->startSection('meta_description', $product['subtitle']); ?>
<?php $__env->startSection('meta_keywords'); ?><?php echo e(Str::slug($product['name'])); ?> reinsurance, <?php echo e($product['name']); ?> reinsurance Zimbabwe, <?php echo e($product['name']); ?> treaty, <?php echo e($product['name']); ?> facultative, insurance companies Zimbabwe, reinsurance intermediary, Classic Reinsurance Brokers <?php echo e($product['name']); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('og_title', $product['name'] . ' Reinsurance | Classic Reinsurance Brokers'); ?>
<?php $__env->startSection('og_description', $product['subtitle']); ?>

<?php $__env->startPush('head'); ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "<?php echo e($product['name']); ?> Reinsurance",
    "description": "<?php echo e($product['subtitle']); ?>",
    "provider": { "@type": "InsuranceBrokerage", "name": "Classic Reinsurance Brokers", "url": "<?php echo e(url('/')); ?>" },
    "areaServed": ["Zimbabwe"],
    "serviceType": "Reinsurance Intermediary"
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What is <?php echo e($product['name']); ?> reinsurance?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "<?php echo e($product['name']); ?> reinsurance provides insurance companies with risk transfer capacity for their <?php echo e(lcfirst($product['name'])); ?> portfolios. Classic Reinsurance Brokers arranges treaty and facultative placements with leading global and regional reinsurers on behalf of insurance companies."
            }
        },
        {
            "@type": "Question",
            "name": "How does Classic Reinsurance Brokers structure <?php echo e($product['name']); ?> reinsurance programmes?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "As a specialist reinsurance broker, we connect insurance companies with leading global and regional reinsurance markets. We design proportional and non-proportional treaty structures tailored to each client's risk profile and portfolio needs, giving them access to the capacity and expertise required to grow with confidence."
            }
        },
        {
            "@type": "Question",
            "name": "Which markets do you access for <?php echo e($product['name']); ?> reinsurance?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We access capacity from leading global and regional reinsurance markets including Lloyd's, London company market, European reinsurers, South African, and Asian markets to structure optimal solutions for the Zimbabwean insurance sector."
            }
        }
    ]
}
</script>
<?php $__env->stopPush(); ?>

<?php
$allProducts = [
    'motor-insurance' => 'Motor Insurance',
    'household' => 'Household',
    'engineering' => 'Engineering',
    'assets-all-risks' => 'Assets All Risks',
    'liability-insurance' => 'Liability Insurance',
    'group-personal-accidents' => 'Group Personal Accidents',
    'travel-insurance' => 'Travel Insurance',
    'goods-in-transit' => 'Goods In Transit',
    'agriculture-insurance' => 'Agriculture Insurance',
];
?>

<?php $__env->startSection('content'); ?>
<section class="relative min-h-[50vh] flex items-center overflow-hidden bg-neutral-950">
    <div class="absolute inset-0 bg-cover bg-center bg-fixed opacity-15" style="background-image: url('<?php echo e(asset('images/hero-pattern.png')); ?>')"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900/70 via-neutral-950/90 to-neutral-950"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 h-2 w-2 rounded-full bg-primary-500/40 animate-pulse" style="animation-delay: 0s"></div>
        <div class="absolute top-1/3 right-1/5 h-3 w-3 rounded-full bg-primary-400/25 animate-pulse" style="animation-delay: 1.2s"></div>
        <div class="absolute bottom-1/4 right-1/4 h-1.5 w-1.5 rounded-full bg-primary-500/30 animate-pulse" style="animation-delay: 2.4s"></div>
        <div class="absolute top-2/3 left-1/3 h-2.5 w-2.5 rounded-full bg-white/10 animate-pulse" style="animation-delay: 0.6s"></div>
        <div class="absolute bottom-1/3 left-1/5 h-2 w-2 rounded-full bg-primary-400/20 animate-pulse" style="animation-delay: 1.8s"></div>
        <div class="absolute top-1/5 right-1/3 h-1 w-1 rounded-full bg-white/15 animate-pulse" style="animation-delay: 3s"></div>
    </div>
    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8 py-24 lg:py-32">
        <nav class="fade-up flex items-center gap-2 text-sm text-neutral-400 mb-8">
            <a href="<?php echo e(route('home')); ?>" class="transition-colors hover:text-white">Home</a>
            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg>
            <a href="<?php echo e(route('services')); ?>" class="transition-colors hover:text-white">Services</a>
            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg>
            <span class="text-white"><?php echo e($product['name']); ?></span>
        </nav>
        <div class="grid items-center gap-12 lg:grid-cols-2">
            <div class="fade-up">
                <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1.5 text-xs font-semibold text-primary-300 backdrop-blur-sm">Product detail</span>
                <h1 class="mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"><?php echo e($product['name']); ?></h1>
                <p class="mt-6 text-lg leading-relaxed text-neutral-300"><?php echo e($product['subtitle']); ?></p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="<?php echo e(route('contact')); ?>" class="btn bg-primary-600 text-white hover:bg-primary-700">Get a quote</a>
                    <a href="<?php echo e(route('services')); ?>" class="btn border border-white/30 text-white hover:bg-white/10">All products</a>
                </div>
            </div>
            <div class="fade-up relative" style="transition-delay: 0.1s">
                <div class="aspect-[4/3] overflow-hidden rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10">
                    <img src="<?php echo e(asset('images/' . Str::slug($product['name']) . '.png')); ?>" alt="<?php echo e($product['name']); ?>" class="h-full w-full object-cover" onerror="this.src='<?php echo e(asset('images/' . Str::slug($product['name']) . '.jpg')); ?>'; this.onerror=null">
                </div>
            </div>
        </div>
    </div>
</section>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($product['fullDescription']) || !empty($product['description'])): ?>
<section class="bg-neutral-950 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-5">
            <div class="fade-up lg:col-span-3">
                <span class="section-label">Overview</span>
                <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl">About this product</h2>
                <p class="mt-6 text-lg leading-relaxed text-neutral-300"><?php echo e($product['fullDescription'] ?? $product['description']); ?></p>
                <div class="mt-6 rounded-xl border border-primary-500/20 bg-primary-500/5 p-4">
                    <p class="text-sm text-primary-200">As a specialist <strong class="text-white">reinsurance broker</strong>, we connect insurance companies with leading global and regional reinsurance markets. We do not underwrite risk or assume liability directly. We facilitate the placement of risk with leading reinsurers, giving our clients access to the capacity, expertise, and terms they need to serve their policyholders with confidence.</p>
                </div>
            </div>
            <div class="fade-up lg:col-span-2" style="transition-delay:0.1s">
                <h3 class="text-xl font-bold text-white">At a glance</h3>
                <ul class="mt-6 space-y-4">
                    <li class="flex items-start gap-3">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-primary-600/15 text-primary-400"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12.75l6 6 9-13.5"/></svg></span>
                        <span class="text-sm text-neutral-400"><strong class="text-neutral-200">Reinsurance product</strong><br>Treaty and facultative support</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-primary-600/15 text-primary-400"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12.75l6 6 9-13.5"/></svg></span>
                        <span class="text-sm text-neutral-400"><strong class="text-neutral-200">Coverage area</strong><br>Zimbabwe and select African markets</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-primary-600/15 text-primary-400"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12.75l6 6 9-13.5"/></svg></span>
                        <span class="text-sm text-neutral-400"><strong class="text-neutral-200">Market access</strong><br>Global and regional reinsurer panel</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-primary-600/15 text-primary-400"><svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12.75l6 6 9-13.5"/></svg></span>
                        <span class="text-sm text-neutral-400"><strong class="text-neutral-200">Service model</strong><br>End-to-end broking and claims advocacy</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<section class="border-t border-white/10 bg-neutral-950 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up max-w-2xl mx-auto text-center">
            <span class="section-label">What we cover</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Key coverage areas</h2>
            <p class="mt-4 text-lg text-neutral-400">Comprehensive <?php echo e($product['name']); ?> reinsurance solutions designed for the Zimbabwean market.</p>
        </div>
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $product['features']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="fade-up card-glass relative overflow-hidden p-6 group">
                <div class="absolute right-0 top-0 h-20 w-20 translate-x-8 -translate-y-8 rounded-full bg-primary-600/5 transition-all group-hover:scale-150"></div>
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-600/10 text-primary-500 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-white"><?php echo e($feature); ?></h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-400">Comprehensive reinsurance capacity and specialist underwriting support for <?php echo e(lcfirst($feature)); ?>, structured to meet the needs of the Zimbabwean insurance market.</p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-span-full text-center text-neutral-500"><p>Coverage details coming soon.</p></div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($product['benefits'])): ?>
<section class="border-t border-white/10 bg-neutral-900 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-2">
            <div class="fade-up">
                <span class="section-label">Client benefits</span>
                <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl">Why choose our <?php echo e($product['name']); ?> solutions</h2>
                <p class="mt-6 text-lg leading-relaxed text-neutral-400">When you partner with Classic Reinsurance Brokers for your <?php echo e(lcfirst($product['name'])); ?> reinsurance, you gain access to market-leading expertise, capacity, and service delivery.</p>
            </div>
            <div class="fade-up space-y-4" style="transition-delay:0.1s">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $product['benefits']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card-glass flex items-start gap-4 p-5 transition-all hover:border-primary-500/30">
                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary-600/15 text-primary-400 text-sm font-bold"><?php echo e($i + 1); ?></span>
                    <div>
                        <p class="text-base font-semibold text-white"><?php echo e($benefit); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($product['process'])): ?>
<section class="border-t border-white/10 bg-neutral-950 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up max-w-2xl mx-auto text-center">
            <span class="section-label">How we work</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Our approach</h2>
            <p class="mt-4 text-lg text-neutral-400">A structured process from risk assessment through to ongoing programme management.</p>
        </div>
        <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $product['process']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="fade-up relative text-center">
                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-gradient-to-br from-primary-600 to-primary-800 text-white text-xl font-bold shadow-lg shadow-primary-600/20"><?php echo e($i + 1); ?></div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$loop->last): ?><div class="absolute left-[calc(50%+40px)] top-8 hidden h-0.5 w-[calc(100%-80px)] bg-gradient-to-r from-primary-500/50 to-transparent lg:block"></div><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <h3 class="mt-5 text-base font-bold text-white"><?php echo e($step); ?></h3>
                <p class="mt-2 text-xs text-neutral-400">Dedicated support throughout every stage of the reinsurance lifecycle.</p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<section class="border-t border-white/10 bg-neutral-950 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-3">
            <div class="lg:col-span-2">
                <div class="fade-up">
                    <span class="section-label">Why choose us</span>
                    <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl">Why Classic Reinsurance Brokers</h2>
                    <p class="mt-6 text-lg leading-relaxed text-neutral-400">With decades of combined experience in the African reinsurance market, we bring unparalleled expertise, strong carrier relationships, and a client-first approach to every placement.</p>
                </div>
                <div class="fade-up mt-10 grid gap-6 sm:grid-cols-2">
                    <div class="card-glass flex gap-4 p-5 transition-all hover:border-primary-500/30">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/10 text-primary-500">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9.004 9.004 0 008.716-6.747"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-white">Deep Market Knowledge</h3>
                            <p class="mt-1 text-xs text-neutral-400">Intimate understanding of local regulations, risks, and market dynamics across Africa.</p>
                        </div>
                    </div>
                    <div class="card-glass flex gap-4 p-5 transition-all hover:border-primary-500/30">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/10 text-primary-500">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 18.72a9.094 9.094 0 003.741-.479"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-white">Strong Carrier Relationships</h3>
                            <p class="mt-1 text-xs text-neutral-400">Access to leading global and regional reinsurers ensuring competitive terms and security.</p>
                        </div>
                    </div>
                    <div class="card-glass flex gap-4 p-5 transition-all hover:border-primary-500/30">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/10 text-primary-500">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-white">Tailored Solutions</h3>
                            <p class="mt-1 text-xs text-neutral-400">Customised reinsurance programmes designed around your specific risk profile and needs.</p>
                        </div>
                    </div>
                    <div class="card-glass flex gap-4 p-5 transition-all hover:border-primary-500/30">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-600/10 text-primary-500">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-white">End-to-End Support</h3>
                            <p class="mt-1 text-xs text-neutral-400">Dedicated broking team guiding you from programme design through to claims advocacy.</p>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="lg:col-span-1">
                <div class="fade-up sticky top-24 card-glass p-6">
                    <h3 class="text-base font-bold text-white">Reinsurance Products</h3>
                    <p class="mt-1 text-xs text-neutral-400">Explore our full range of reinsurance solutions.</p>
                    <ul class="mt-6 space-y-1">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $allProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug => $pname): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('services.product', $slug)); ?>" class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm text-neutral-400 transition-all hover:bg-primary-600/10 hover:text-primary-300 <?php if($pname === $product['name']): ?> bg-primary-600/10 text-primary-300 <?php endif; ?>">
                                <span class="h-1.5 w-1.5 rounded-full bg-current"></span>
                                <?php echo e($pname); ?>

                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-neutral-950 py-20 lg:py-28">
    <div class="absolute inset-0 bg-cover bg-center bg-fixed opacity-10" style="background-image: url('<?php echo e(asset('images/hero-pattern.png')); ?>')"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900/60 via-neutral-950/90 to-neutral-950"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/3 left-1/4 h-2 w-2 rounded-full bg-primary-500/30 animate-pulse" style="animation-delay: 0s"></div>
        <div class="absolute bottom-1/4 right-1/3 h-2.5 w-2.5 rounded-full bg-primary-400/20 animate-pulse" style="animation-delay: 1.5s"></div>
        <div class="absolute top-1/2 right-1/4 h-1.5 w-1.5 rounded-full bg-white/10 animate-pulse" style="animation-delay: 3s"></div>
    </div>
    <div class="relative z-10 mx-auto max-w-3xl px-6 text-center lg:px-8">
        <div class="fade-up">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Partner with Classic Reinsurance Brokers</h2>
            <p class="mt-6 text-lg leading-relaxed text-primary-200">Let our team of experienced reinsurance brokers help you structure the optimal programme for <?php echo e($product['name']); ?>. Contact us today for a confidential discussion.</p>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="<?php echo e(route('contact')); ?>" class="btn bg-primary-600 text-white hover:bg-primary-700 text-base px-8 py-3">Request a consultation</a>
                <a href="tel:+263242773192" class="btn border border-white/30 text-white hover:bg-white/10 text-base px-8 py-3">+263 242 773192/3/4</a>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\claud\OneDrive\Desktop\classicreinsurancebrokers\resources\views/pages/product.blade.php ENDPATH**/ ?>