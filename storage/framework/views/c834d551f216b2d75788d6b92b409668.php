<?php $__env->startSection('title', 'Reinsurance Broking Services & Solutions | Classic Reinsurance Brokers'); ?>
<?php $__env->startSection('meta_description', 'Classic Reinsurance Brokers offers professional reinsurance broking services across 9 core products and 9 specialty risk classes, connecting insurance companies with leading global and regional reinsurance markets.'); ?>
<?php $__env->startSection('meta_keywords', 'reinsurance broker Zimbabwe, reinsurance broking services, treaty reinsurance, facultative reinsurance, specialty risk insurance, reinsurance broker Africa, insurance company reinsurance, risk transfer Zimbabwe, reinsurance products Africa, insurance broker Zimbabwe'); ?>
<?php $__env->startSection('og_title', 'Reinsurance Broking Services | Classic Reinsurance Brokers'); ?>
<?php $__env->startSection('og_description', 'Explore our professional reinsurance broking services — connecting insurance companies with leading global and regional reinsurance markets for treaty, facultative, and specialty risk solutions.'); ?>

<?php $__env->startPush('head'); ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Classic Reinsurance Brokers Services",
    "description": "Reinsurance intermediary services, treaty reinsurance, facultative reinsurance, and specialty risk solutions",
    "url": "<?php echo e(url()->current()); ?>",
    "numberOfItems": 18
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What types of reinsurance services does Classic Reinsurance Brokers offer?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We provide professional reinsurance broking services including treaty placements, facultative placements, portfolio optimisation, actuarial and analytics, market intelligence, regulatory and capital advisory, and strategic consulting — all designed to connect insurance companies with the right reinsurance capacity."
            }
        },
        {
            "@type": "Question",
            "name": "What core reinsurance products do you provide?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We provide reinsurance intermediary services across 9 core product classes: Motor Insurance, Household, Engineering, Assets All Risks, Liability Insurance, Group Personal Accidents, Travel Insurance, Goods In Transit, and Agriculture Insurance."
            }
        },
        {
            "@type": "Question",
            "name": "What specialty risk classes do you cover?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We cover 9 specialty risk classes: Aviation, Bankers' Blanket, Construction Projects, Cyber, Kidnap & Ransom, Marine Hull, Power Projects, Political Risks, and Political Violence & Terrorism."
            }
        },
        {
            "@type": "Question",
            "name": "How does Classic Reinsurance Brokers add value to insurance companies?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We act as a specialist reinsurance broker, connecting insurance companies with leading global and regional reinsurance markets. We do not underwrite risk directly; instead, we facilitate treaty and facultative placements that give our clients access to the capacity, expertise, and competitive terms they need to grow their portfolios and protect their balance sheets."
            }
        }
    ]
}
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<section class="relative min-h-[55vh] flex items-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="<?php echo e(asset('images/serviceshero.png')); ?>" alt="" class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-900/80 via-neutral-950/85 to-neutral-950"></div>
    </div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/5 w-2 h-2 bg-primary-400/30 rounded-full animate-float" style="animation-delay: 0s; animation-duration: 6s;"></div>
        <div class="absolute top-1/3 right-1/4 w-1.5 h-1.5 bg-primary-300/20 rounded-full animate-float" style="animation-delay: 1s; animation-duration: 8s;"></div>
        <div class="absolute top-2/3 left-1/3 w-2.5 h-2.5 bg-primary-500/25 rounded-full animate-float" style="animation-delay: 2s; animation-duration: 7s;"></div>
        <div class="absolute bottom-1/4 right-1/5 w-1 h-1 bg-primary-200/30 rounded-full animate-float" style="animation-delay: 0.5s; animation-duration: 9s;"></div>
    </div>
    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8 py-24 lg:py-32 w-full">
        <div class="max-w-3xl">
            <span class="fade-up inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1.5 text-xs font-semibold text-primary-200">Our services</span>
            <h1 class="fade-up mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl" style="transition-delay: 0.1s">Reinsurance Broking & Advisory</h1>
            <p class="fade-up mt-6 max-w-xl text-lg leading-relaxed text-neutral-300" style="transition-delay: 0.2s">We connect insurance companies with leading reinsurance markets. Our comprehensive suite of broking services spans 9 core products and 9 specialty risk classes, delivering the capacity and expertise you need to grow with confidence.</p>
            <div class="fade-up mt-8 flex flex-wrap gap-4" style="transition-delay: 0.3s">
                <a href="#reinsurance-products" class="btn bg-white text-primary-700 hover:bg-primary-50">Reinsurance solutions</a>
                <a href="#specialty-risk" class="btn btn-outline-white">Specialty risk</a>
            </div>
        </div>
    </div>
</section>


<section id="reinsurance-products" class="bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up max-w-2xl">
            <span class="section-label text-primary-600">Core offerings</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-neutral-900 sm:text-4xl lg:text-5xl">Reinsurance Products</h2>
            <p class="mt-4 text-lg leading-relaxed text-neutral-600">Professional reinsurance broking across nine core classes, connecting insurance companies with leading markets for reliable capacity and portfolio support.</p>
        </div>
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <a href="<?php echo e(route('services.product', $p->slug)); ?>" class="fade-up card border-neutral-200 bg-white p-6 group hover:shadow-lg hover:shadow-primary-500/10" <?php if($i > 0): ?> style="transition-delay: <?php echo e($i * 0.05); ?>s"<?php endif; ?>>
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-600 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.764a2 2 0 011.789 1.106l1.054 2.108A1 1 0 0121 14v3a1 1 0 01-1 1h-1a2 2 0 11-4 0H9a2 2 0 11-4 0H4a1 1 0 01-1-1v-7a2 2 0 012-2h3m4 0V5a2 2 0 00-2-2H7a1 1 0 00-.707.293L4 5m10 5H8m4 0h2"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-neutral-900 group-hover:text-primary-600 transition-colors"><?php echo e($p->name); ?></h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500"><?php echo e($p->subtitle ?: Str::limit(strip_tags($p->description ?? ''), 120)); ?></p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-600">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-span-full text-center text-neutral-400 py-12">No products available yet.</div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>


<section id="specialty-risk" class="bg-neutral-950 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="fade-up max-w-2xl">
            <span class="section-label text-primary-400">Complex & emerging risks</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Specialty Risk Insurance</h2>
            <p class="mt-4 text-lg leading-relaxed text-neutral-400">Specialist broking services for complex, high-value, and emerging risks, connecting insurance companies with global specialty reinsurance markets across Africa and beyond.</p>
        </div>
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $specialties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <a href="<?php echo e(route('services.specialty', $s->slug)); ?>" class="fade-up card-glass p-6 group" <?php if($i > 0): ?> style="transition-delay: <?php echo e($i * 0.05); ?>s"<?php endif; ?>>
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-600/20 text-primary-400 ring-1 ring-primary-500/30 transition-all duration-300 group-hover:bg-primary-500 group-hover:text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19V5M5 12l7-7 7 7"/></svg>
                </div>
                <h3 class="mt-4 text-lg font-bold text-white group-hover:text-primary-400 transition-colors"><?php echo e($s->name); ?></h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-400"><?php echo e(Str::limit(strip_tags($s->description ?? ''), 120)); ?></p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary-400">Learn more <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 12h-15m11.667-4l3.333 4-3.333 4"/></svg></span>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-span-full text-center text-neutral-500 py-12">No specialties available yet.</div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>


<section class="hero-gradient py-20 lg:py-28">
    <div class="mx-auto max-w-3xl px-6 text-center lg:px-8">
        <div class="fade-up">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Ready to partner with us?</h2>
            <p class="mt-6 text-lg leading-relaxed text-primary-100">Contact our team to discuss how Classic Reinsurance Brokers can connect your insurance portfolio with the right reinsurance capacity, technical expertise, and market access.</p>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="<?php echo e(route('contact')); ?>" class="btn bg-white text-primary-700 hover:bg-primary-50 text-base px-8 py-3">Get in touch</a>
                <a href="tel:+263242773192" class="btn btn-outline-white text-base px-8 py-3">+263 242 773192/3/4</a>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\claud\OneDrive\Desktop\classicreinsurancebrokers\resources\views/pages/services.blade.php ENDPATH**/ ?>