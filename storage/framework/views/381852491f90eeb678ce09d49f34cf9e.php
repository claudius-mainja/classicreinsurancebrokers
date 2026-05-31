<?php $__env->startSection('title', 'Reinsurance Insights'); ?>
<?php $__env->startSection('meta_description', 'Expert insights, analysis, and thought leadership on reinsurance, risk management, and the Zimbabwean insurance market from Classic Reinsurance Brokers.'); ?>
<?php $__env->startSection('og_title', 'Reinsurance Insights | Classic Reinsurance Brokers Blog'); ?>
<?php $__env->startSection('og_description', 'Expert reinsurance insights, market analysis, and thought leadership from Zimbabwe\'s premier reinsurance broker.'); ?>

<?php $__env->startPush('head'); ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Blog",
    "name": "Classic Reinsurance Brokers Insights",
    "description": "Expert insights on reinsurance, risk management, and the African insurance market.",
    "url": "<?php echo e(url()->current()); ?>",
    "publisher": { "@type": "Organization", "name": "Classic Reinsurance Brokers" }
}
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="relative min-h-[50vh] flex items-center overflow-hidden bg-neutral-950">
    <div class="absolute inset-0 bg-cover bg-center bg-fixed" style="background-image: url('<?php echo e(asset('images/herobg.png')); ?>')"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900/80 via-neutral-950/85 to-neutral-950"></div>
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-[15%] h-2 w-2 rounded-full bg-primary-500/40 particle" style="animation-delay: 0s"></div>
        <div class="absolute top-1/3 right-[20%] h-3 w-3 rounded-full bg-primary-400/25 particle" style="animation-delay: 1.2s"></div>
        <div class="absolute bottom-1/4 right-[25%] h-1.5 w-1.5 rounded-full bg-primary-500/30 particle" style="animation-delay: 2.4s"></div>
        <div class="absolute top-2/3 left-[30%] h-2.5 w-2.5 rounded-full bg-white/10 particle" style="animation-delay: 0.6s"></div>
        <div class="absolute bottom-1/3 left-[15%] h-2 w-2 rounded-full bg-primary-400/20 particle" style="animation-delay: 1.8s"></div>
        <div class="absolute top-[15%] right-1/3 h-1 w-1 rounded-full bg-white/15 particle" style="animation-delay: 3s"></div>
        <div class="absolute top-1/2 left-[60%] h-2 w-2 rounded-full bg-primary-500/35 particle" style="animation-delay: 0.9s"></div>
        <div class="absolute bottom-[30%] right-[10%] h-1.5 w-1.5 rounded-full bg-primary-400/30 particle" style="animation-delay: 2.1s"></div>
    </div>
    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8 py-24 lg:py-32">
        <div class="max-w-3xl">
            <span class="fade-up inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1.5 text-xs font-semibold text-primary-300 backdrop-blur-sm">Our insights</span>
            <h1 class="fade-up mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl" style="transition-delay: 0.1s">Reinsurance Insights</h1>
            <p class="fade-up mt-6 max-w-xl text-lg leading-relaxed text-neutral-300" style="transition-delay: 0.2s">Expert analysis, market intelligence, and thought leadership on reinsurance, risk management, and the Zimbabwean insurance landscape.</p>
        </div>
    </div>
</section>

<section class="py-20 lg:py-28 bg-neutral-950">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-4">
            <div class="lg:col-span-3">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($posts->count() > 0): ?>
                    <div class="grid gap-8 sm:grid-cols-2">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <article class="fade-up card-glass overflow-hidden rounded-xl border border-neutral-800 bg-neutral-900/60 backdrop-blur-sm transition-all duration-300 hover:border-primary-600/30 group">
                                <a href="<?php echo e(route('blog.show', $post->slug)); ?>" class="block">
                                    <div class="aspect-[16/9] overflow-hidden bg-neutral-800">
                                        <img src="<?php echo e(asset($post->featured_image ?? 'images/blog-placeholder.jpg')); ?>" alt="<?php echo e($post->title); ?>" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.03]">
                                    </div>
                                </a>
                                <div class="p-6">
                                    <div class="mb-3 flex flex-wrap items-center gap-2">
                                        <span class="tag text-xs"><?php echo e($post->category->name ?? 'Insurance'); ?></span>
                                        <span class="text-xs text-neutral-500"><?php echo e($post->published_at->format('M d, Y')); ?></span>
                                    </div>
                                    <h2 class="text-lg font-bold text-white transition-colors group-hover:text-primary-600"><a href="<?php echo e(route('blog.show', $post->slug)); ?>"><?php echo e($post->title); ?></a></h2>
                                    <p class="mt-2 text-sm leading-relaxed text-neutral-400 line-clamp-3"><?php echo e(Str::limit($post->excerpt, 150)); ?></p>
                                    <div class="mt-4 flex items-center justify-between border-t border-neutral-800 pt-4">
                                        <div class="flex items-center gap-3">
                                            <img src="<?php echo e(asset($post->author->avatar ?? 'images/team-placeholder.jpg')); ?>" alt="<?php echo e($post->author->name); ?>" class="h-7 w-7 rounded-full object-cover">
                                            <span class="text-sm font-medium text-neutral-300"><?php echo e($post->author->name); ?></span>
                                        </div>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($post->tags->count() > 0): ?>
                                            <div class="flex gap-1">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $post->tags->take(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><span class="rounded bg-neutral-800 px-2 py-0.5 text-xs text-neutral-400">#<?php echo e($tag->name); ?></span><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </div>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    <div class="fade-up mt-12"><?php echo e($posts->links()); ?></div>
                <?php else: ?>
                    <div class="fade-up py-20 text-center">
                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-neutral-800">
                            <svg class="h-8 w-8 text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                        </div>
                        <h3 class="mt-4 text-xl font-bold text-white">No articles yet</h3>
                        <p class="mt-2 text-neutral-400">Check back soon for our latest insights and analysis.</p>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
            <aside class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">
                    <div class="fade-up card-glass rounded-xl border border-neutral-800 bg-neutral-900/60 backdrop-blur-sm p-6">
                        <h3 class="text-sm font-semibold uppercase tracking-widest text-white">Categories</h3>
                        <ul class="mt-4 space-y-1">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $categories ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('blog.category', $category->slug)); ?>" class="flex items-center justify-between rounded-lg px-3 py-2 text-sm text-neutral-400 transition-colors hover:bg-neutral-800 hover:text-primary-600 <?php echo e(request('category') === $category->slug ? 'bg-neutral-800 text-primary-600 font-medium' : ''); ?>"><?php echo e($category->name); ?> <span class="rounded-md bg-neutral-800 px-2 py-0.5 text-xs text-neutral-500"><?php echo e($category->posts_count ?? 0); ?></span></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </ul>
                    </div>
                    <div class="fade-up rounded-xl border border-primary-800/30 bg-gradient-to-br from-primary-900 via-primary-800 to-neutral-900 p-6 text-center">
                        <h3 class="text-base font-bold text-white">Subscribe to our newsletter</h3>
                        <p class="mt-2 text-sm text-primary-200">Get the latest insights delivered to your inbox.</p>
                        <form action="<?php echo e(route('newsletter.subscribe')); ?>" method="POST" class="mt-4">
                            <?php echo csrf_field(); ?>
                            <input type="email" name="email" placeholder="your@email.com" required class="w-full rounded-lg border border-neutral-700 bg-neutral-800/50 px-4 py-2.5 text-sm text-white placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-primary-600">
                            <button type="submit" class="btn mt-3 w-full bg-primary-600 text-white hover:bg-primary-500 text-sm">Subscribe</button>
                        </form>
                    </div>
                    <div class="fade-up card-glass rounded-xl border border-neutral-800 bg-neutral-900/60 backdrop-blur-sm p-6">
                        <h3 class="text-sm font-semibold uppercase tracking-widest text-white">Tags</h3>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $tags ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('blog.tag', $tag->slug)); ?>" class="tag <?php echo e(request('tag') === $tag->slug ? '!bg-primary-600 !text-white' : ''); ?>"><?php echo e($tag->name); ?></a>
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