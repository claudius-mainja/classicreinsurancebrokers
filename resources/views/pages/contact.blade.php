@extends('layouts.app')

@section('title', 'Contact Us | Classic Reinsurance Brokers')
@section('meta_description', 'Get in touch with Classic Reinsurance Brokers — Zimbabwe\'s premier reinsurance broker. Call +263 242 773192 or visit our Harare office at 11th Floor Fidelity Life Tower. Serving insurance and reinsurance companies across Harare, Bulawayo, Masvingo, Avondale, Borrowdale, Chishawasha, Highlands and all Zimbabwe cities.')
@section('meta_keywords', 'contact Classic Reinsurance Brokers, reinsurance broker Zimbabwe phone, Harare reinsurance broker address, reinsurance broker contact, insurance broker Harare Zimbabwe, +263 242 773192, info@classicre.co.zw, reinsurance broker Bulawayo contact, reinsurance broker Masvingo, reinsurance broker Avondale, reinsurance broker Borrowdale, reinsurance broker Highlands, insurance companies Zimbabwe, reinsurance companies Zimbabwe')
@section('og_title', 'Contact Classic Reinsurance Brokers | Harare Office')
@section('og_description', 'Reach out to Zimbabwe\'s premier reinsurance broker for tailored reinsurance placements across Africa. Call +263 242 773192 or email info@classicre.co.zw.')

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@type": "ListItem", "position": 2, "name": "Contact", "item": "{{ url()->current() }}" }
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "Contact Classic Reinsurance Brokers",
    "url": "{{ url()->current() }}",
    "mainEntity": {
        "@type": "Organization",
        "name": "Classic Reinsurance Brokers",
        "telephone": "+263242773192",
        "email": "info@classicre.co.zw",
        "address": { "@type": "PostalAddress", "streetAddress": "11th Floor Fidelity Life Tower, 5 Raleigh Street", "addressLocality": "Harare", "addressCountry": "ZW" },
        "openingHoursSpecification": [{ "@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"], "opens": "08:00", "closes": "16:30" }]
    }
}
</script>
@endpush

@section('content')
<section class="relative min-h-[50vh] flex items-center overflow-hidden bg-neutral-950">
    <div class="absolute inset-0 bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('images/serviceshero.png') }}')"></div>
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
            <span class="fade-up inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1.5 text-xs font-semibold text-primary-300 backdrop-blur-sm">Contact</span>
            <h1 class="fade-up mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl" style="transition-delay: 0.1s">Get in touch</h1>
            <p class="fade-up mt-6 max-w-xl text-lg leading-relaxed text-neutral-300" style="transition-delay: 0.2s">Have a question or ready to discuss your reinsurance needs? Our team is here to help.</p>
        </div>
    </div>
</section>

<section class="bg-neutral-950 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-16 lg:grid-cols-2">
            <div class="fade-up">
                <span class="section-label">Send us a message</span>
                <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl">Let's start a conversation</h2>
                <p class="mt-4 text-lg leading-relaxed text-neutral-400">Fill out the form below and a member of our team will get back to you within 24 hours.</p>
                <form action="{{ route('contact.submit') }}" method="POST" class="mt-10 space-y-5">
                    @csrf
                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="name" class="block text-sm font-medium text-neutral-300">Full name <span class="text-primary-500">*</span></label>
                            <input type="text" id="name" name="name" required class="mt-1.5 w-full rounded-lg border border-white/10 bg-neutral-800/50 px-4 py-3 text-sm text-white placeholder-neutral-500 focus:border-primary-500 focus:outline-none focus:ring-1 focus:ring-primary-500 transition-colors" placeholder="Your full name">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-neutral-300">Email <span class="text-primary-500">*</span></label>
                            <input type="email" id="email" name="email" required class="mt-1.5 w-full rounded-lg border border-white/10 bg-neutral-800/50 px-4 py-3 text-sm text-white placeholder-neutral-500 focus:border-primary-500 focus:outline-none focus:ring-1 focus:ring-primary-500 transition-colors" placeholder="your@email.com">
                        </div>
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-neutral-300">Phone number</label>
                        <input type="tel" id="phone" name="phone" class="mt-1.5 w-full rounded-lg border border-white/10 bg-neutral-800/50 px-4 py-3 text-sm text-white placeholder-neutral-500 focus:border-primary-500 focus:outline-none focus:ring-1 focus:ring-primary-500 transition-colors" placeholder="+263 242 773192">
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-neutral-300">Subject <span class="text-primary-500">*</span></label>
                        <select id="subject" name="subject" required class="mt-1.5 w-full rounded-lg border border-white/10 bg-neutral-800/50 px-4 py-3 text-sm text-white focus:border-primary-500 focus:outline-none focus:ring-1 focus:ring-primary-500 transition-colors">
                            <option value="" class="bg-neutral-900">Select a subject</option>
                            <option value="Reinsurance Broking" class="bg-neutral-900">Reinsurance Broking</option>
                            <option value="Facultative Placement" class="bg-neutral-900">Facultative Placement</option>
                            <option value="Advisory Services" class="bg-neutral-900">Advisory Services</option>
                            <option value="Claims Support" class="bg-neutral-900">Claims Support</option>
                            <option value="Partnership Opportunity" class="bg-neutral-900">Partnership Opportunity</option>
                            <option value="Career Inquiry" class="bg-neutral-900">Career Inquiry</option>
                            <option value="General Inquiry" class="bg-neutral-900">General Inquiry</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-neutral-300">Message <span class="text-primary-500">*</span></label>
                        <textarea id="message" name="message" rows="5" required class="mt-1.5 w-full rounded-lg border border-white/10 bg-neutral-800/50 px-4 py-3 text-sm text-white placeholder-neutral-500 focus:border-primary-500 focus:outline-none focus:ring-1 focus:ring-primary-500 transition-colors resize-none" placeholder="Tell us about your reinsurance requirements..."></textarea>
                    </div>
                    <button type="submit" class="btn bg-primary-600 text-white hover:bg-primary-700">
                        Send message
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/></svg>
                    </button>
                </form>
            </div>
            <div class="space-y-8">
                <div class="fade-up card-glass p-8" style="transition-delay: 0.1s">
                    <h3 class="text-lg font-bold text-white">Contact information</h3>
                    <p class="mt-2 text-sm text-neutral-400">Reach out to us through any of the channels below.</p>
                    <div class="mt-8 space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-primary-600/10 text-primary-500">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-white">Office address</h4>
                                <p class="mt-1 text-sm leading-relaxed text-neutral-400">11th Floor Fidelity Life Tower<br>5 Raleigh Street, Harare, Zimbabwe</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-primary-600/10 text-primary-500">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-white">Phone</h4>
                                <a href="tel:+263242773192" class="mt-1 block text-sm text-primary-500 hover:text-primary-400">+263 242 773192</a>
                                <a href="tel:+263242773193" class="mt-1 block text-sm text-primary-500 hover:text-primary-400">+263 242 773193</a>
                                <a href="tel:+263242773194" class="mt-1 block text-sm text-primary-500 hover:text-primary-400">+263 242 773194</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-primary-600/10 text-primary-500">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-white">Email</h4>
                                <a href="mailto:info@classicre.co.zw" class="mt-1 block text-sm text-primary-500 hover:text-primary-400">info@classicre.co.zw</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-primary-600/10 text-primary-500">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-white">Working hours</h4>
                                <p class="mt-1 text-sm leading-relaxed text-neutral-400">Monday – Friday: 8:00 AM – 4:30 PM<br>Saturday – Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fade-up overflow-hidden rounded-xl bg-neutral-800 border border-white/10" style="transition-delay: 0.15s">
                    <div class="aspect-[16/9]">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3799.9999999999995!2d31.046!3d-17.825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTfCsDQ5JzMwLjAiUyAzMcKwMDInNDUuNiJF!5e0!3m2!1sen!2szw!4v1" width="100%" height="100%" style="border:0; min-height: 320px;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Classic Reinsurance Brokers office location"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="border-t border-white/10 bg-neutral-950 py-20 lg:py-28">
    <div class="mx-auto max-w-3xl px-6 lg:px-8">
        <div class="fade-up text-center">
            <span class="section-label">FAQ</span>
            <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Frequently asked questions</h2>
            <p class="mt-4 text-lg text-neutral-400">Quick answers to common questions about our services and how we can help your business.</p>
        </div>
        @if($faqs->isNotEmpty())
        <div class="mt-12 space-y-3" x-data="{ open: null }">
            @foreach($faqs as $i => $faq)
            <div class="fade-up card-glass transition-all duration-200" :class="open === {{ $i + 1 }} ? 'ring-1 ring-primary-600/30' : ''">
                <button @click="open = open === {{ $i + 1 }} ? null : {{ $i + 1 }}" class="flex w-full items-center justify-between px-6 py-5 text-left">
                    <span class="text-sm font-semibold text-white">{{ $faq->question }}</span>
                    <svg class="h-4 w-4 shrink-0 text-neutral-500 transition-transform duration-200" :class="open === {{ $i + 1 }} ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === {{ $i + 1 }}" x-collapse>
                    <div class="border-t border-white/10 px-6 py-5 text-sm leading-relaxed text-neutral-400">{!! $faq->answer !!}</div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="mt-12 text-center text-neutral-500">
            <p>No FAQs available yet. Please check back later.</p>
        </div>
        @endif
    </div>
</section>
@endsection
