<footer class="border-t border-neutral-100 bg-neutral-50">
    <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20">
        <div class="grid gap-12 lg:grid-cols-4">
            <div class="lg:col-span-2">
                <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" class="h-9 w-auto">
                <p class="mt-4 max-w-sm text-sm leading-relaxed text-neutral-500">
                    Zimbabwe's premier reinsurance broker, delivering innovative and tailored reinsurance solutions to insurance companies across Zimbabwe since 2015.
                </p>
                <div class="mt-6 flex gap-3">
                    <a href="https://linkedin.com/company/classicreinsurancebrokers" target="_blank" rel="noopener" class="flex h-9 w-9 items-center justify-center rounded-full border border-neutral-200 text-neutral-400 transition-colors hover:border-primary-300 hover:text-primary-600" aria-label="LinkedIn">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="https://twitter.com/classicre" target="_blank" rel="noopener" class="flex h-9 w-9 items-center justify-center rounded-full border border-neutral-200 text-neutral-400 transition-colors hover:border-primary-300 hover:text-primary-600" aria-label="Twitter/X">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    <a href="mailto:info@classicre.co.zw" class="flex h-9 w-9 items-center justify-center rounded-full border border-neutral-200 text-neutral-400 transition-colors hover:border-primary-300 hover:text-primary-600" aria-label="Email">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="text-sm font-semibold text-neutral-900">Quick Links</h4>
                <ul class="mt-4 space-y-3">
                    <li><a href="{{ route('about') }}" class="text-sm text-neutral-500 transition-colors hover:text-neutral-900">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="text-sm text-neutral-500 transition-colors hover:text-neutral-900">Services</a></li>
                    <li><a href="{{ route('blog.index') }}" class="text-sm text-neutral-500 transition-colors hover:text-neutral-900">Insights</a></li>
                    <li><a href="{{ route('careers') }}" class="text-sm text-neutral-500 transition-colors hover:text-neutral-900">Careers</a></li>
                    <li><a href="{{ route('contact') }}" class="text-sm text-neutral-500 transition-colors hover:text-neutral-900">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-sm font-semibold text-neutral-900">Contact</h4>
                <ul class="mt-4 space-y-3">
                    <li class="text-sm text-neutral-500">11th Floor Fidelity Life Tower<br>5 Raleigh Street, Harare</li>
                    <li><a href="tel:+263242773192" class="text-sm text-neutral-500 transition-colors hover:text-neutral-900">+263 242 773192</a></li>
                    <li><a href="tel:+263242773193" class="text-sm text-neutral-500 transition-colors hover:text-neutral-900">+263 242 773193</a></li>
                    <li><a href="mailto:info@classicre.co.zw" class="text-sm text-neutral-500 transition-colors hover:text-neutral-900">info@classicre.co.zw</a></li>
                    <li class="text-sm text-neutral-500">Mon–Fri: 8:00–16:30</li>
                </ul>
            </div>
        </div>
        <div class="mt-12 flex flex-col items-center justify-between gap-4 border-t border-neutral-200 pt-8 text-center sm:flex-row">
            <p class="text-xs text-neutral-400">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            <div class="flex gap-6">
                <a href="{{ route('privacy') }}" class="text-xs text-neutral-400 transition-colors hover:text-neutral-600">Privacy Policy</a>
                <a href="{{ route('terms') }}" class="text-xs text-neutral-400 transition-colors hover:text-neutral-600">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
