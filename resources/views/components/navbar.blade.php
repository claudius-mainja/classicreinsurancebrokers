<nav x-data="{ open: false, scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 40 })" :class="scrolled || open ? 'bg-white/95 backdrop-blur shadow-sm' : 'bg-transparent'" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between lg:h-20">
            <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0">
                <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" class="h-8 w-auto lg:h-9">
            </a>

            <div class="hidden lg:flex lg:items-center lg:gap-8">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-link">About</a>
                <a href="{{ route('services') }}" class="nav-link">Services</a>
                <a href="{{ route('blog.index') }}" class="nav-link">Insights</a>
                <a href="{{ route('careers') }}" class="nav-link">Careers</a>
                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
            </div>

            <div class="hidden lg:flex lg:items-center lg:gap-3">
                <a href="tel:+263242773192" class="text-sm text-neutral-500 hover:text-neutral-900 transition-colors">+263 242 773192</a>
                <a href="{{ route('contact') }}" class="btn btn-primary text-sm">Get a Quote</a>
            </div>

            <button @click="open = !open" class="relative z-50 flex h-10 w-10 items-center justify-center rounded-full transition-colors hover:bg-neutral-100 lg:hidden" :class="scrolled ? 'text-neutral-900' : 'text-white'" aria-label="Toggle menu">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="!open"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/></svg>
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="open" x-cloak><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
    </div>

    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="border-t border-neutral-100 bg-white lg:hidden" @@click.away="open = false">
        <div class="mx-auto max-w-7xl px-6 py-6 space-y-1">
            <a href="{{ route('home') }}" @@click="open = false" class="block rounded-lg px-4 py-3 text-base font-medium text-neutral-700 hover:bg-neutral-50 hover:text-primary-600">Home</a>
            <a href="{{ route('about') }}" @@click="open = false" class="block rounded-lg px-4 py-3 text-base font-medium text-neutral-700 hover:bg-neutral-50 hover:text-primary-600">About</a>
            <a href="{{ route('services') }}" @@click="open = false" class="block rounded-lg px-4 py-3 text-base font-medium text-neutral-700 hover:bg-neutral-50 hover:text-primary-600">Services</a>
            <a href="{{ route('blog.index') }}" @@click="open = false" class="block rounded-lg px-4 py-3 text-base font-medium text-neutral-700 hover:bg-neutral-50 hover:text-primary-600">Insights</a>
            <a href="{{ route('careers') }}" @@click="open = false" class="block rounded-lg px-4 py-3 text-base font-medium text-neutral-700 hover:bg-neutral-50 hover:text-primary-600">Careers</a>
            <a href="{{ route('contact') }}" @@click="open = false" class="block rounded-lg px-4 py-3 text-base font-medium text-neutral-700 hover:bg-neutral-50 hover:text-primary-600">Contact</a>
            <div class="pt-4 border-t border-neutral-100 mt-4">
                <a href="{{ route('contact') }}" @@click="open = false" class="btn btn-primary w-full justify-center">Get a Quote</a>
                <a href="tel:+263242773192" @@click="open = false" class="btn btn-outline w-full justify-center mt-2">+263 242 773192</a>
            </div>
        </div>
    </div>
</nav>
