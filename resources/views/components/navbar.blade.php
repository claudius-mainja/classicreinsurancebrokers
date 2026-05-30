<nav class="site-nav fixed top-0 left-0 right-0 z-50 bg-white/98 backdrop-blur-md transition-all duration-300" x-data="{ mobileOpen: false, servicesOpen: false }">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Classic Reinsurance Brokers" class="h-12 w-auto">
            </a>

            <div class="hidden items-center gap-1 lg:flex">
                <a href="{{ route('home') }}" class="rounded-lg px-4 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-neutral-50 hover:text-primary-600">Home</a>
                <a href="{{ route('about') }}" class="rounded-lg px-4 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-neutral-50 hover:text-primary-600">About Us</a>

                <div class="relative" @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false">
                    <a href="{{ route('services') }}" class="inline-flex items-center gap-1 rounded-lg px-4 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-neutral-50 hover:text-primary-600">
                        Services
                        <svg class="h-3.5 w-3.5 transition-transform duration-200" :class="servicesOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div x-show="servicesOpen" @click.away="servicesOpen = false" x-cloak class="absolute left-0 top-full z-50 mt-1 w-[680px] rounded-2xl bg-white p-6 shadow-xl ring-1 ring-neutral-100" x-transition:enter="transition duration-200 ease-out" x-transition:enter-start="translate-y-2 opacity-0" x-transition:enter-end="translate-y-0 opacity-100">
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <h4 class="mb-3 text-xs font-semibold uppercase tracking-widest text-primary-600">Reinsurance Products</h4>
                                <ul class="space-y-1">
                                    <li><a href="{{ route('services.product', 'motor-insurance') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Motor Insurance</a></li>
                                    <li><a href="{{ route('services.product', 'household') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Household</a></li>
                                    <li><a href="{{ route('services.product', 'engineering') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Engineering</a></li>
                                    <li><a href="{{ route('services.product', 'assets-all-risks') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Assets All Risks</a></li>
                                    <li><a href="{{ route('services.product', 'liability-insurance') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Liability Insurance</a></li>
                                    <li><a href="{{ route('services.product', 'group-personal-accidents') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Group Personal Accidents</a></li>
                                    <li><a href="{{ route('services.product', 'travel-insurance') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Travel Insurance</a></li>
                                    <li><a href="{{ route('services.product', 'goods-in-transit') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Goods In Transit</a></li>
                                    <li><a href="{{ route('services.product', 'agriculture-insurance') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Agriculture Insurance</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="mb-3 text-xs font-semibold uppercase tracking-widest text-primary-600">Specialty Risk Insurance</h4>
                                <ul class="space-y-1">
                                    <li><a href="{{ route('services.specialty', 'aviation') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Aviation</a></li>
                                    <li><a href="{{ route('services.specialty', 'bankers-blanket') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Bankers' Blanket</a></li>
                                    <li><a href="{{ route('services.specialty', 'construction-projects') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Construction Projects</a></li>
                                    <li><a href="{{ route('services.specialty', 'cyber') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Cyber</a></li>
                                    <li><a href="{{ route('services.specialty', 'kidnap-and-ransom') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Kidnap & Ransom</a></li>
                                    <li><a href="{{ route('services.specialty', 'marine-hull') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Marine Hull</a></li>
                                    <li><a href="{{ route('services.specialty', 'power-projects') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Power Projects</a></li>
                                    <li><a href="{{ route('services.specialty', 'political-risks') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Political Risks</a></li>
                                    <li><a href="{{ route('services.specialty', 'political-violence-terrorism') }}" class="block rounded-lg px-3 py-2 text-sm text-neutral-600 transition-colors hover:bg-neutral-50 hover:text-primary-600">Political Violence & Terrorism</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('blog') }}" class="rounded-lg px-4 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-neutral-50 hover:text-primary-600">Insights</a>
                <a href="{{ route('careers') }}" class="rounded-lg px-4 py-2 text-sm font-medium text-neutral-700 transition-colors hover:bg-neutral-50 hover:text-primary-600">Careers</a>
                <a href="{{ route('contact') }}" class="ml-4 rounded-full bg-primary-600 px-5 py-2.5 text-sm font-semibold text-white transition-all duration-300 hover:bg-primary-700">Contact Us</a>
            </div>

            <button @click="mobileOpen = !mobileOpen" class="rounded-lg p-2 text-neutral-700 lg:hidden" aria-label="Toggle navigation">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </div>

    <div x-show="mobileOpen" x-cloak class="border-t border-neutral-100 bg-white lg:hidden" x-transition:enter="transition duration-200" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
        <div class="space-y-1 px-4 py-4">
            <a href="{{ route('home') }}" class="block rounded-lg px-4 py-3 text-sm font-medium text-neutral-700 hover:bg-neutral-50">Home</a>
            <a href="{{ route('about') }}" class="block rounded-lg px-4 py-3 text-sm font-medium text-neutral-700 hover:bg-neutral-50">About Us</a>
            <details class="group">
                <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-3 text-sm font-medium text-neutral-700 hover:bg-neutral-50">
                    <a href="{{ route('services') }}" class="flex-1">Services</a>
                    <svg class="h-4 w-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </summary>
                <div class="ml-4 mt-1 space-y-1 border-l-2 border-neutral-100 pl-4">
                    <a href="{{ route('services') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">All Services</a>
                    <p class="px-4 pt-2 text-xs font-semibold uppercase tracking-wider text-neutral-400">Reinsurance Products</p>
                    <a href="{{ route('services.product', 'motor-insurance') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Motor Insurance</a>
                    <a href="{{ route('services.product', 'household') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Household</a>
                    <a href="{{ route('services.product', 'engineering') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Engineering</a>
                    <a href="{{ route('services.product', 'assets-all-risks') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Assets All Risks</a>
                    <a href="{{ route('services.product', 'liability-insurance') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Liability Insurance</a>
                    <a href="{{ route('services.product', 'group-personal-accidents') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Group Personal Accidents</a>
                    <a href="{{ route('services.product', 'travel-insurance') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Travel Insurance</a>
                    <a href="{{ route('services.product', 'goods-in-transit') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Goods In Transit</a>
                    <a href="{{ route('services.product', 'agriculture-insurance') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Agriculture Insurance</a>
                    <p class="px-4 pt-2 text-xs font-semibold uppercase tracking-wider text-neutral-400">Specialty Risk</p>
                    <a href="{{ route('services.specialty', 'aviation') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Aviation</a>
                    <a href="{{ route('services.specialty', 'bankers-blanket') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Bankers' Blanket</a>
                    <a href="{{ route('services.specialty', 'construction-projects') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Construction Projects</a>
                    <a href="{{ route('services.specialty', 'cyber') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Cyber</a>
                    <a href="{{ route('services.specialty', 'kidnap-and-ransom') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Kidnap & Ransom</a>
                    <a href="{{ route('services.specialty', 'marine-hull') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Marine Hull</a>
                    <a href="{{ route('services.specialty', 'power-projects') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Power Projects</a>
                    <a href="{{ route('services.specialty', 'political-risks') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Political Risks</a>
                    <a href="{{ route('services.specialty', 'political-violence-terrorism') }}" class="block rounded-lg px-4 py-2 text-sm text-neutral-600">Political Violence & Terrorism</a>
                </div>
            </details>
            <a href="{{ route('blog') }}" class="block rounded-lg px-4 py-3 text-sm font-medium text-neutral-700 hover:bg-neutral-50">Insights</a>
            <a href="{{ route('careers') }}" class="block rounded-lg px-4 py-3 text-sm font-medium text-neutral-700 hover:bg-neutral-50">Careers</a>
            <a href="{{ route('contact') }}" class="mt-4 block rounded-full bg-primary-600 px-5 py-3 text-center text-sm font-semibold text-white transition-all duration-300 hover:bg-primary-700">Contact Us</a>
        </div>
    </div>
</nav>
