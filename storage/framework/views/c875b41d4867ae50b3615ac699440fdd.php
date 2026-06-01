<nav x-data="{ open: false, scrolled: false, servicesOpen: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 40 })" class="navbar" :class="scrolled && 'scrolled'">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between lg:h-20">
            <a href="<?php echo e(route('home')); ?>" class="flex items-center gap-2 shrink-0">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="<?php echo e(config('app.name')); ?>" class="h-8 w-auto lg:h-9">
            </a>

            <div class="hidden lg:flex lg:items-center lg:gap-1">
                <a href="<?php echo e(route('home')); ?>" class="nav-link px-3 py-2">Home</a>
                <a href="<?php echo e(route('about')); ?>" class="nav-link px-3 py-2">About</a>

                
                <div class="relative" @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false">
                    <a href="<?php echo e(route('services')); ?>" class="nav-link px-3 py-2 inline-flex items-center gap-1">
                        Services
                        <svg class="h-3 w-3 transition-transform duration-200" :class="servicesOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div x-show="servicesOpen" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2" class="absolute left-0 top-full w-[680px]">
                        <div class="mt-2 overflow-hidden rounded-2xl border border-neutral-200 bg-white shadow-xl shadow-neutral-900/10">
                            <div class="grid grid-cols-2 divide-x divide-neutral-100">
                                
                                <div class="p-6">
                                    <h3 class="text-xs font-semibold uppercase tracking-widest text-primary-600">Reinsurance Products</h3>
                                    <ul class="mt-4 space-y-0.5">
                                        <li><a href="<?php echo e(route('services.product', 'motor-insurance')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Motor Insurance</a></li>
                                        <li><a href="<?php echo e(route('services.product', 'household')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Household</a></li>
                                        <li><a href="<?php echo e(route('services.product', 'engineering')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Engineering</a></li>
                                        <li><a href="<?php echo e(route('services.product', 'assets-all-risks')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Assets All Risks</a></li>
                                        <li><a href="<?php echo e(route('services.product', 'liability-insurance')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Liability Insurance</a></li>
                                        <li><a href="<?php echo e(route('services.product', 'group-personal-accidents')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Group Personal Accidents</a></li>
                                        <li><a href="<?php echo e(route('services.product', 'travel-insurance')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Travel Insurance</a></li>
                                        <li><a href="<?php echo e(route('services.product', 'goods-in-transit')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Goods In Transit</a></li>
                                        <li><a href="<?php echo e(route('services.product', 'agriculture-insurance')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Agriculture Insurance</a></li>
                                    </ul>
                                </div>
                                
                                <div class="p-6">
                                    <h3 class="text-xs font-semibold uppercase tracking-widest text-primary-600">Specialty Risk Insurance</h3>
                                    <ul class="mt-4 space-y-0.5">
                                        <li><a href="<?php echo e(route('services.specialty', 'aviation')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Aviation</a></li>
                                        <li><a href="<?php echo e(route('services.specialty', 'bankers-blanket')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Bankers' Blanket</a></li>
                                        <li><a href="<?php echo e(route('services.specialty', 'construction-projects')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Construction Projects</a></li>
                                        <li><a href="<?php echo e(route('services.specialty', 'cyber')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Cyber</a></li>
                                        <li><a href="<?php echo e(route('services.specialty', 'kidnap-and-ransom')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Kidnap & Ransom</a></li>
                                        <li><a href="<?php echo e(route('services.specialty', 'marine-hull')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Marine Hull</a></li>
                                        <li><a href="<?php echo e(route('services.specialty', 'power-projects')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Power Projects</a></li>
                                        <li><a href="<?php echo e(route('services.specialty', 'political-risks')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Political Risks</a></li>
                                        <li><a href="<?php echo e(route('services.specialty', 'political-violence-terrorism')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-primary-50 hover:text-primary-600">Political Violence & Terrorism</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="border-t border-neutral-100 bg-neutral-50 px-6 py-3">
                                <a href="<?php echo e(route('services')); ?>" class="text-sm font-semibold text-primary-600 hover:text-primary-700 transition-colors">View all services &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="<?php echo e(route('blog.index')); ?>" class="nav-link px-3 py-2">Insights</a>
                <a href="<?php echo e(route('careers')); ?>" class="nav-link px-3 py-2">Careers</a>
                <a href="<?php echo e(route('contact')); ?>" class="nav-link px-3 py-2">Contact</a>
            </div>

            <div class="hidden lg:flex lg:items-center lg:gap-3">
                <a href="tel:+263242773192" class="text-sm text-neutral-500 hover:text-primary-600 transition-colors">+263 242 773192</a>
                <a href="<?php echo e(route('contact')); ?>" class="btn btn-primary text-sm">Get a Quote</a>
            </div>

            <button @click="open = !open" class="relative z-50 flex h-10 w-10 items-center justify-center rounded-full transition-colors hover:bg-neutral-100 text-neutral-700 lg:hidden" aria-label="Toggle menu">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="!open"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/></svg>
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="open" x-cloak><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
    </div>

    
    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="border-t border-neutral-200 bg-white lg:hidden" @click.away="open = false">
        <div class="mx-auto max-w-7xl px-6 py-6 space-y-1">
            <a href="<?php echo e(route('home')); ?>" @click="open = false" class="block rounded-lg px-4 py-3 text-base font-medium text-neutral-700 hover:bg-primary-50 hover:text-primary-600">Home</a>
            <a href="<?php echo e(route('about')); ?>" @click="open = false" class="block rounded-lg px-4 py-3 text-base font-medium text-neutral-700 hover:bg-primary-50 hover:text-primary-600">About</a>
            <div x-data="{ mobServices: false }">
                <button @click="mobServices = !mobServices" class="flex w-full items-center justify-between rounded-lg px-4 py-3 text-base font-medium text-neutral-700 hover:bg-primary-50 hover:text-primary-600">
                    Services
                    <svg class="h-4 w-4 transition-transform duration-200" :class="mobServices ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="mobServices" x-collapse class="mt-1 space-y-1 pl-4">
                    <p class="px-4 pt-3 text-xs font-semibold uppercase tracking-widest text-primary-600">Reinsurance Products</p>
                    <a href="<?php echo e(route('services.product', 'motor-insurance')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Motor Insurance</a>
                    <a href="<?php echo e(route('services.product', 'household')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Household</a>
                    <a href="<?php echo e(route('services.product', 'engineering')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Engineering</a>
                    <a href="<?php echo e(route('services.product', 'assets-all-risks')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Assets All Risks</a>
                    <a href="<?php echo e(route('services.product', 'liability-insurance')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Liability Insurance</a>
                    <a href="<?php echo e(route('services.product', 'group-personal-accidents')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Group Personal Accidents</a>
                    <a href="<?php echo e(route('services.product', 'travel-insurance')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Travel Insurance</a>
                    <a href="<?php echo e(route('services.product', 'goods-in-transit')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Goods In Transit</a>
                    <a href="<?php echo e(route('services.product', 'agriculture-insurance')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Agriculture Insurance</a>
                    <p class="px-4 pt-3 text-xs font-semibold uppercase tracking-widest text-primary-600">Specialty Risk Insurance</p>
                    <a href="<?php echo e(route('services.specialty', 'aviation')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Aviation</a>
                    <a href="<?php echo e(route('services.specialty', 'bankers-blanket')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Bankers' Blanket</a>
                    <a href="<?php echo e(route('services.specialty', 'construction-projects')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Construction Projects</a>
                    <a href="<?php echo e(route('services.specialty', 'cyber')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Cyber</a>
                    <a href="<?php echo e(route('services.specialty', 'kidnap-and-ransom')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Kidnap & Ransom</a>
                    <a href="<?php echo e(route('services.specialty', 'marine-hull')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Marine Hull</a>
                    <a href="<?php echo e(route('services.specialty', 'power-projects')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Power Projects</a>
                    <a href="<?php echo e(route('services.specialty', 'political-risks')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Political Risks</a>
                    <a href="<?php echo e(route('services.specialty', 'political-violence-terrorism')); ?>" @click="open = false" class="block rounded-lg px-4 py-2 text-sm text-neutral-600 hover:bg-primary-50 hover:text-primary-600">Political Violence & Terrorism</a>
                </div>
            </div>
            <a href="<?php echo e(route('blog.index')); ?>" @click="open = false" class="block rounded-lg px-4 py-3 text-base font-medium text-neutral-700 hover:bg-primary-50 hover:text-primary-600">Insights</a>
            <a href="<?php echo e(route('careers')); ?>" @click="open = false" class="block rounded-lg px-4 py-3 text-base font-medium text-neutral-700 hover:bg-primary-50 hover:text-primary-600">Careers</a>
            <a href="<?php echo e(route('contact')); ?>" @click="open = false" class="block rounded-lg px-4 py-3 text-base font-medium text-neutral-700 hover:bg-primary-50 hover:text-primary-600">Contact</a>
            <div class="pt-4 border-t border-neutral-200 mt-4">
                <a href="<?php echo e(route('contact')); ?>" @click="open = false" class="btn btn-primary w-full justify-center">Get a Quote</a>
                <a href="tel:+263242773192" @click="open = false" class="inline-flex w-full items-center justify-center gap-2 rounded-full border border-neutral-300 px-6 py-2.5 text-sm font-semibold text-neutral-700 transition-all hover:bg-neutral-50 mt-2">+263 242 773192</a>
            </div>
        </div>
    </div>
</nav><?php /**PATH C:\Users\claud\OneDrive\Desktop\classicreinsurancebrokers\resources\views/components/navbar.blade.php ENDPATH**/ ?>