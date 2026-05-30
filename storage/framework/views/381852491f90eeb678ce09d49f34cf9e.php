<?php $__env->startSection('title', 'Insurance Insights'); ?>
<?php $__env->startSection('meta_description', 'Expert insights, analysis, and thought leadership on reinsurance, risk management, and the African insurance market from Classic Reinsurance Brokers.'); ?>
<?php $__env->startSection('og_title', 'Insurance Insights | Classic Reinsurance Brokers Blog'); ?>
<?php $__env->startSection('og_description', 'Expert reinsurance insights, market analysis, and thought leadership from Zimbabwe\'s premier reinsurance broker.'); ?>

<?php $__env->startPush('head'); ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Blog",
    "name": "Classic Reinsurance Brokers Insights",
    "description": "Expert insights on reinsurance, risk management, and the African insurance market.",
    "url": "<?php echo e(url()->current()); ?>",
    "publisher": {
        "@type": "Organization",
        "name": "Classic Reinsurance Brokers"
    }
}
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="relative overflow-hidden bg-gradient-to-br from-primary-950 via-primary-900 to-primary-800 px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-0 bg-[url('<?php echo e(asset('images/hero-pattern.png')); ?>')] bg-cover bg-center opacity-10"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-primary-950/60 via-transparent to-transparent"></div>
    <div class="relative mx-auto max-w-7xl text-center">
        <div class="reveal">
            <span class="inline-flex items-center rounded-full bg-primary-500/20 px-4 py-1.5 text-sm font-medium text-primary-200 ring-1 ring-primary-500/30">Our Insights</span>
            <h1 class="section-title mt-6 text-white">Insurance Insights</h1>
            <p class="section-subtitle mx-auto text-primary-100">
                Expert analysis, market intelligence, and thought leadership on reinsurance, risk management, and the African insurance landscape.
            </p>
        </div>
    </div>
</section>

<section class="bg-white px-6 py-20 sm:py-28 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <div class="grid gap-12 lg:grid-cols-4">
            <div class="lg:col-span-3">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($posts->count() > 0): ?>
                    <div class="grid gap-8 sm:grid-cols-2">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <article class="card-hover group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-neutral-100 transition-all duration-300 hover:shadow-lg">
                                <a href="<?php echo e(route('blog.show', $post->slug)); ?>" class="block">
                                    <div class="aspect-[16/9] overflow-hidden bg-neutral-100">
                                        <img src="<?php echo e(asset($post->featured_image ?? 'images/blog-placeholder.jpg')); ?>" alt="<?php echo e($post->title); ?>" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                                    </div>
                                </a>
                                <div class="p-6">
                                    <div class="mb-3 flex flex-wrap items-center gap-2">
                                        <span class="inline-flex items-center rounded-full bg-primary-50 px-3 py-1 text-xs font-medium text-primary-700"><?php echo e($post->category->name ?? 'Insurance'); ?></span>
                                        <span class="text-xs text-neutral-400"><?php echo e($post->published_at->format('M d, Y')); ?></span>
                                    </div>
                                    <h2 class="text-xl font-bold text-neutral-900 transition-colors group-hover:text-primary-600">
                                        <a href="<?php echo e(route('blog.show', $post->slug)); ?>"><?php echo e($post->title); ?></a>
                                    </h2>
                                    <p class="mt-3 line-clamp-3 text-sm leading-relaxed text-neutral-600"><?php echo e(Str::limit($post->excerpt, 150)); ?></p>
                                    <div class="mt-4 flex items-center justify-between border-t border-neutral-100 pt-4">
                                        <div class="flex items-center gap-3">
                                            <img src="<?php echo e(asset($post->author->avatar ?? 'images/team-placeholder.jpg')); ?>" alt="<?php echo e($post->author->name); ?>" class="h-8 w-8 rounded-full object-cover">
                                            <span class="text-sm font-medium text-neutral-700"><?php echo e($post->author->name); ?></span>
                                        </div>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($post->tags->count() > 0): ?>
                                            <div class="flex gap-1">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $post->tags->take(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <span class="rounded bg-neutral-100 px-2 py-0.5 text-xs text-neutral-500">#<?php echo e($tag->name); ?></span>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </div>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <div class="mt-12">
                        <?php echo e($posts->links()); ?>

                    </div>
                <?php else: ?>
                    <div class="reveal py-20 text-center">
                        <svg class="mx-auto h-16 w-16 text-neutral-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                        <h3 class="mt-6 text-xl font-bold text-neutral-900">No Articles Yet</h3>
                        <p class="mt-2 text-neutral-500">Check back soon for our latest insights and analysis.</p>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            <aside class="lg:col-span-1">
                <div class="sticky top-28 space-y-8">
                    <div class="reveal rounded-2xl bg-neutral-50 p-6">
                        <h3 class="mb-4 font-heading text-sm font-semibold uppercase tracking-widest text-neutral-900">Categories</h3>
                        <ul class="space-y-2">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $categories ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(route('blog.category', $category->slug)); ?>" class="flex items-center justify-between rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-white hover:text-primary-600 <?php echo e(request('category') === $category->slug ? 'bg-white text-primary-600 font-medium' : ''); ?>">
                                        <?php echo e($category->name); ?>

                                        <span class="rounded-full bg-neutral-200 px-2 py-0.5 text-xs text-neutral-500"><?php echo e($category->posts_count ?? 0); ?></span>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </ul>
                    </div>

                    <div class="reveal rounded-2xl bg-primary-600 p-6 text-center">
                        <h3 class="text-lg font-bold text-white">Subscribe to Our Newsletter</h3>
                        <p class="mt-2 text-sm text-primary-100">Get the latest insights delivered to your inbox.</p>
                        <form action="<?php echo e(route('newsletter.subscribe')); ?>" method="POST" class="mt-4">
                            <?php echo csrf_field(); ?>
                            <input type="email" name="email" placeholder="your@email.com" required class="w-full rounded-lg border-0 px-4 py-2.5 text-sm text-neutral-900 placeholder-neutral-400 focus:outline-none focus:ring-2 focus:ring-white">
                            <button type="submit" class="btn-primary mt-3 w-full bg-white text-primary-700 hover:bg-primary-50 text-sm">Subscribe</button>
                        </form>
                    </div>

                    <div class="reveal rounded-2xl bg-neutral-50 p-6">
                        <h3 class="mb-4 font-heading text-sm font-semibold uppercase tracking-widest text-neutral-900">Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $tags ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('blog.tag', $tag->slug)); ?>" class="rounded-full bg-white px-3 py-1.5 text-xs font-medium text-neutral-600 shadow-sm transition-colors hover:bg-primary-50 hover:text-primary-600 <?php echo e(request('tag') === $tag->slug ? 'bg-primary-50 text-primary-600' : ''); ?>">
                                    <?php echo e($tag->name); ?>

                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\claud\OneDrive\Desktop\classicreinsurancebrokers\resources\views/blog/index.blade.php ENDPATH**/ ?>