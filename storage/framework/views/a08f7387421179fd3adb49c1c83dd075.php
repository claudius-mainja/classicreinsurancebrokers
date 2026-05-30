<?php $__env->startSection('title', 'About Us'); ?>
<?php $__env->startSection('meta_description', 'Classic Reinsurance Brokers is Zimbabwe\'s premier reinsurance broker, delivering innovative and tailored reinsurance solutions since 2015.'); ?>
<?php $__env->startSection('og_title', 'About Classic Reinsurance Brokers'); ?>
<?php $__env->startSection('og_description', 'Learn about Zimbabwe\'s premier reinsurance broker — our mission, vision, values, leadership team, and comprehensive reinsurance services.'); ?>

<?php $__env->startPush('head'); ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "AboutPage",
    "name": "About Classic Reinsurance Brokers",
    "description": "Zimbabwe's premier reinsurance broker delivering innovative and tailored reinsurance solutions.",
    "mainEntity": [
        {
            "@type": "Organization",
            "name": "Classic Reinsurance Brokers",
            "description": "Zimbabwe's premier reinsurance broker",
            "url": "<?php echo e(url('/')); ?>",
            "telephone": "+263242773192",
            "email": "info@classicre.co.zw",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "11th Floor Fidelity Life Tower, 5 Raleigh Street",
                "addressLocality": "Harare",
                "addressCountry": "ZW"
            },
            "foundingDate": "2015",
            "areaServed": ["Zimbabwe"],
            "knowsAbout": ["Reinsurance Broking", "Reinsurance Advisory", "Insurance Risk Management"],
            "numberOfEmployees": {
                "@type": "QuantitativeValue",
                "value": "15"
            }
        },
        {
            "@type": "Person",
            "name": "Kingstone Mhinda",
            "jobTitle": "General Manager",
            "worksFor": {
                "@type": "Organization",
                "name": "Classic Reinsurance Brokers"
            },
            "url": "<?php echo e(url('/about')); ?>"
        },
        {
            "@type": "Person",
            "name": "Nyasha E Whende",
            "jobTitle": "Operations Manager",
            "worksFor": {
                "@type": "Organization",
                "name": "Classic Reinsurance Brokers"
            },
            "url": "<?php echo e(url('/about')); ?>"
        },
        {
            "@type": "Person",
            "name": "Rachel N. Hakutangwi",
            "jobTitle": "Senior Reinsurance Broker",
            "worksFor": {
                "@type": "Organization",
                "name": "Classic Reinsurance Brokers"
            },
            "url": "<?php echo e(url('/about')); ?>"
        }
    ]
}
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="relative flex min-h-[60vh] items-center justify-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="<?php echo e(asset('images/abouthero.png')); ?>" alt="About Classic Reinsurance Brokers" class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-neutral-950/80 via-neutral-900/70 to-neutral-950/90"></div>
    </div>
    <div class="relative z-10 mx-auto max-w-4xl px-4 text-center">
        <div>
            <span class="hero-animate inline-block border border-white/20 bg-white/10 px-5 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-white/90 backdrop-blur-sm">About Us</span>
            <h1 class="hero-animate mt-8 text-4xl font-extrabold leading-tight text-white sm:text-5xl lg:text-6xl">About Classic Reinsurance Brokers</h1>
            <p class="hero-animate mx-auto mt-6 max-w-3xl text-lg leading-relaxed text-white/70 sm:text-xl">Zimbabwe's premier reinsurance broker, delivering innovative and tailored reinsurance solutions since 2015.</p>
            <div class="hero-animate mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a href="#who-we-are" class="shine-effect inline-flex items-center gap-2 rounded-md bg-primary-600 px-8 py-4 text-base font-semibold text-white shadow-lg shadow-primary-900/30 transition-all duration-300 hover:bg-primary-700 hover:shadow-xl">Our Story</a>
                <a href="<?php echo e(route('contact')); ?>" class="inline-flex items-center gap-2 rounded-md border-2 border-white/30 px-8 py-4 text-base font-semibold text-white transition-all duration-300 hover:border-white hover:bg-white/10">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<section id="who-we-are" class="bg-white px-6 py-20 sm:py-28 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <div class="reveal grid items-center gap-12 lg:grid-cols-2">
            <div class="relative">
                <div class="img-zoom aspect-[4/3] overflow-hidden rounded-md shadow-xl">
                    <img src="<?php echo e(asset('images/about.jpg')); ?>" alt="Classic Reinsurance Brokers team" class="img-reveal h-full w-full object-cover">
                </div>
                <div class="absolute -bottom-6 -right-6 hidden rounded-md bg-primary-600 p-6 shadow-lg lg:block">
                    <p class="text-4xl font-bold text-white">10+</p>
                    <p class="text-sm font-medium text-primary-100">Years of Excellence</p>
                </div>
            </div>
            <div>
                <span class="text-sm font-semibold uppercase tracking-widest text-primary-600">Who We Are</span>
                <h2 class="section-title mt-3">Your Trusted Reinsurance Partner</h2>
                <p class="mt-6 text-lg leading-relaxed text-neutral-600">
                    Classic Reinsurance Brokers is a leading independent reinsurance brokerage firm headquartered in Harare, Zimbabwe. 
                    We specialize in providing comprehensive reinsurance broking services, reinsurance advisory, and risk management 
                    solutions to insurance companies across Zimbabwe.
                </p>
                <p class="mt-4 text-lg leading-relaxed text-neutral-600">
                    Founded on the principles of integrity, professionalism, and technical excellence, our team brings decades of 
                    combined experience in the insurance and reinsurance industry. We pride ourselves on our deep understanding of 
                    local and international reinsurance markets, enabling us to craft bespoke solutions that meet the unique needs 
                    of each client.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="<?php echo e(route('contact')); ?>" class="btn-primary">Get in Touch</a>
                    <a href="<?php echo e(route('services')); ?>" class="btn-secondary">Our Services</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-neutral-50 px-6 py-20 sm:py-28 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <div class="reveal text-center">
            <span class="text-sm font-semibold uppercase tracking-widest text-primary-600">Our Foundation</span>
            <h2 class="section-title mt-3">Mission, Vision &amp; Core Values</h2>
            <p class="section-subtitle mx-auto">
                Our guiding principles shape every interaction and solution we deliver.
            </p>
        </div>
        <div class="mt-16 grid gap-8 lg:grid-cols-3">
            <div class="reveal card-hover stagger-children">
                <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-md bg-primary-100 text-primary-600">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-neutral-900">Our Mission</h3>
                <p class="mt-4 leading-relaxed text-neutral-600">
                    To provide innovative, reliable, and cost-effective reinsurance solutions that empower our clients to manage 
                    risk effectively, while fostering long-term partnerships built on trust and technical excellence.
                </p>
            </div>
            <div class="reveal card-hover stagger-children">
                <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-md bg-primary-100 text-primary-600">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-neutral-900">Our Vision</h3>
                <p class="mt-4 leading-relaxed text-neutral-600">
                    To be the most respected and trusted reinsurance brokerage firm in Zimbabwe, recognized for our unwavering 
                    commitment to client success, innovation, and the highest standards of professionalism.
                </p>
            </div>
            <div class="reveal card-hover stagger-children">
                <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-md bg-amber-100 text-amber-600">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-neutral-900">Core Values</h3>
                <p class="mt-4 leading-relaxed text-neutral-600">
                    Our values are the bedrock of our business — <strong>Professionalism</strong>, <strong>Accessibility</strong>, 
                    <strong>Excellence</strong>, <strong>Loyalty</strong>, and <strong>Innovation</strong> — guiding every decision we make.
                </p>
            </div>
        </div>
        <div class="reveal mt-12">
            <div class="rounded-md bg-white p-8 shadow-sm ring-1 ring-neutral-100">
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-5">
                    <div class="text-center">
                        <div class="mx-auto mb-3 flex h-12 w-12 items-center justify-center rounded-md bg-primary-100 text-primary-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                        </div>
                        <h4 class="font-heading font-bold text-neutral-900">Professionalism</h4>
                        <p class="mt-1 text-sm text-neutral-500">Upholding the highest industry standards</p>
                    </div>
                    <div class="text-center">
                        <div class="mx-auto mb-3 flex h-12 w-12 items-center justify-center rounded-md bg-primary-100 text-primary-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/></svg>
                        </div>
                        <h4 class="font-heading font-bold text-neutral-900">Accessibility</h4>
                        <p class="mt-1 text-sm text-neutral-500">Always available when you need us</p>
                    </div>
                    <div class="text-center">
                        <div class="mx-auto mb-3 flex h-12 w-12 items-center justify-center rounded-md bg-amber-100 text-amber-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                        </div>
                        <h4 class="font-heading font-bold text-neutral-900">Excellence</h4>
                        <p class="mt-1 text-sm text-neutral-500">Delivering beyond expectations</p>
                    </div>
                    <div class="text-center">
                        <div class="mx-auto mb-3 flex h-12 w-12 items-center justify-center rounded-md bg-green-100 text-green-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                        </div>
                        <h4 class="font-heading font-bold text-neutral-900">Loyalty</h4>
                        <p class="mt-1 text-sm text-neutral-500">Building lasting client relationships</p>
                    </div>
                    <div class="text-center">
                        <div class="mx-auto mb-3 flex h-12 w-12 items-center justify-center rounded-md bg-purple-100 text-purple-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                        </div>
                        <h4 class="font-heading font-bold text-neutral-900">Innovation</h4>
                        <p class="mt-1 text-sm text-neutral-500">Forward-thinking solutions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white px-6 py-20 sm:py-28 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <div class="reveal text-center">
            <span class="text-sm font-semibold uppercase tracking-widest text-primary-600">What We Do</span>
            <h2 class="section-title mt-3">Our Services</h2>
            <p class="section-subtitle mx-auto">
                Comprehensive reinsurance solutions tailored to the unique needs of insurance companies across Zimbabwe.
            </p>
        </div>
        <div class="mt-16 grid gap-8 lg:grid-cols-3">
            <div class="reveal-scale card-hover stagger-children overflow-hidden rounded-md shadow-sm ring-1 ring-neutral-100">
                <div class="aspect-[16/10] overflow-hidden bg-gradient-to-br from-primary-50 to-primary-100">
                    <img src="<?php echo e(asset('images/abstractpattern.png')); ?>" alt="Reinsurance Broking" class="h-full w-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-neutral-900">Reinsurance Broking Core Products</h3>
                    <p class="mt-3 leading-relaxed text-neutral-600">
                        We offer comprehensive reinsurance broking services across all major classes of business, including 
                        property, casualty, engineering, marine, aviation, and life. Our team structures optimal reinsurance 
                        programmes that balance security, capacity, and cost.
                    </p>
                </div>
            </div>
            <div class="reveal-scale card-hover stagger-children overflow-hidden rounded-md shadow-sm ring-1 ring-neutral-100">
                <div class="aspect-[16/10] overflow-hidden bg-gradient-to-br from-primary-50 to-primary-100">
                    <img src="<?php echo e(asset('images/aboutusabout.png')); ?>" alt="Reinsurance Services" class="h-full w-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-neutral-900">Reinsurance Services</h3>
                    <p class="mt-3 leading-relaxed text-neutral-600">
                        From treaty and facultative placements to claims advocacy and contract wordings, our team provides 
                        end-to-end reinsurance services. We leverage our extensive network of reinsurers to secure the best 
                        possible terms for our clients.
                    </p>
                </div>
            </div>
            <div class="reveal-scale card-hover stagger-children overflow-hidden rounded-md shadow-sm ring-1 ring-neutral-100">
                <div class="aspect-[16/10] overflow-hidden bg-gradient-to-br from-amber-50 to-amber-100">
                    <img src="<?php echo e(asset('images/whyusabout.png')); ?>" alt="Advisory Services" class="h-full w-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-neutral-900">Advisory Services</h3>
                    <p class="mt-3 leading-relaxed text-neutral-600">
                        Our advisory practice delivers strategic insights on reinsurance programme design, regulatory compliance, 
                        risk modelling, capital management, and market intelligence. We help insurers navigate complex risk 
                        landscapes with confidence.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-neutral-50 px-6 py-20 sm:py-28 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <div class="reveal text-center">
            <span class="text-sm font-semibold uppercase tracking-widest text-primary-600">Our Team</span>
            <h2 class="section-title mt-3">Our Team</h2>
            <p class="section-subtitle mx-auto">
                Meet the experienced professionals driving Classic Reinsurance Brokers forward.
            </p>
        </div>
        <div class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
            <div class="reveal card-hover stagger-children text-center">
                <div class="img-zoom mx-auto h-48 w-48 overflow-hidden rounded-md bg-primary-100 shadow-lg">
                    <img src="<?php echo e(asset('images/Kingstone.png')); ?>" alt="Kingstone Mhinda" class="img-reveal h-full w-full object-cover">
                </div>
                <h3 class="mt-6 text-xl font-bold text-neutral-900">Kingstone Mhinda</h3>
                <p class="text-sm font-semibold text-primary-600">General Manager</p>
                <p class="mt-3 text-sm leading-relaxed text-neutral-500">
                    With extensive experience in the reinsurance industry, Kingstone leads our team with strategic vision 
                    and a commitment to technical excellence.
                </p>
            </div>
            <div class="reveal card-hover stagger-children text-center">
                <div class="img-zoom mx-auto h-48 w-48 overflow-hidden rounded-md bg-primary-100 shadow-lg">
                    <img src="<?php echo e(asset('images/Nyasha.png')); ?>" alt="Nyasha E Whende" class="img-reveal h-full w-full object-cover">
                </div>
                <h3 class="mt-6 text-xl font-bold text-neutral-900">Nyasha E Whende</h3>
                <p class="text-sm font-semibold text-primary-600">Operations Manager</p>
                <p class="mt-3 text-sm leading-relaxed text-neutral-500">
                    Nyasha ensures seamless operational delivery, driving efficiency and excellence across our day-to-day 
                    reinsurance broking activities.
                </p>
            </div>
            <div class="reveal card-hover stagger-children text-center">
                <div class="img-zoom mx-auto h-48 w-48 overflow-hidden rounded-md bg-primary-100 shadow-lg">
                    <img src="<?php echo e(asset('images/rachel.png')); ?>" alt="Rachel N. Hakutangwi" class="img-reveal h-full w-full object-cover">
                </div>
                <h3 class="mt-6 text-xl font-bold text-neutral-900">Rachel N. Hakutangwi</h3>
                <p class="text-sm font-semibold text-primary-600">Senior Reinsurance Broker</p>
                <p class="mt-3 text-sm leading-relaxed text-neutral-500">
                    Rachel brings deep technical expertise in treaty and facultative placements, delivering optimal 
                    reinsurance solutions for our diverse client base.
                </p>
            </div>
            <div class="reveal card-hover stagger-children text-center">
                <div class="img-zoom mx-auto h-48 w-48 overflow-hidden rounded-md bg-primary-100 shadow-lg">
                    <img src="<?php echo e(asset('images/team/Tinashe.jpeg')); ?>" alt="Tinashe Y Chadenga" class="img-reveal h-full w-full object-cover">
                </div>
                <h3 class="mt-6 text-xl font-bold text-neutral-900">Tinashe Y Chadenga</h3>
                <p class="text-sm font-semibold text-primary-600">Assistant Accountant</p>
                <p class="mt-3 text-sm leading-relaxed text-neutral-500">
                    Tinashe manages our financial operations with precision and dedication, ensuring robust accounting 
                    practices and financial integrity across the organisation.
                </p>
            </div>
            <div class="reveal card-hover stagger-children text-center">
                <div class="img-zoom mx-auto h-48 w-48 overflow-hidden rounded-md bg-primary-100 shadow-lg">
                    <img src="<?php echo e(asset('images/team/Doreen.jpeg')); ?>" alt="Doreen Mabhiza" class="img-reveal h-full w-full object-cover">
                </div>
                <h3 class="mt-6 text-xl font-bold text-neutral-900">Doreen Mabhiza</h3>
                <p class="text-sm font-semibold text-primary-600">Trainee Broker</p>
                <p class="mt-3 text-sm leading-relaxed text-neutral-500">
                    Doreen is developing her expertise in reinsurance broking, bringing enthusiasm and fresh perspective 
                    to our client service and placement activities.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white px-6 py-20 sm:py-28 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <div class="reveal text-center">
            <span class="text-sm font-semibold uppercase tracking-widest text-primary-600">Why Choose Us</span>
            <h2 class="section-title mt-3">Why Classic Reinsurance Brokers</h2>
            <p class="section-subtitle mx-auto">
                What sets us apart in the reinsurance broking landscape.
            </p>
        </div>
        <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <div class="reveal card-hover stagger-children text-center">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-md bg-primary-100 text-primary-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
                </div>
                <h3 class="text-lg font-bold text-neutral-900">Market Expertise</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">
                    Deep understanding of the Zimbabwean insurance and reinsurance market with strong local and international relationships.
                </p>
            </div>
            <div class="reveal card-hover stagger-children text-center">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-md bg-primary-100 text-primary-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-neutral-900">Client-Centric Approach</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">
                    We prioritise our clients' needs, providing personalised attention and tailored solutions that deliver measurable results.
                </p>
            </div>
            <div class="reveal card-hover stagger-children text-center">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-md bg-amber-100 text-amber-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-neutral-900">Technical Excellence</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">
                    Our team combines deep technical knowledge with innovative thinking to develop creative reinsurance strategies.
                </p>
            </div>
            <div class="reveal card-hover stagger-children text-center">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-md bg-green-100 text-green-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM3 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 019.374 21c-2.331 0-4.512-.645-6.374-1.766z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-neutral-900">Dedicated Support</h3>
                <p class="mt-2 text-sm leading-relaxed text-neutral-500">
                    We provide responsive, accessible support throughout the entire reinsurance lifecycle, from placement to claims.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-gradient-to-br from-primary-800 to-primary-950 px-6 py-20 sm:py-28 lg:px-8">
    <div class="absolute inset-0 bg-primary-950/60"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-primary-950/40 via-transparent to-transparent"></div>
    <div class="relative mx-auto max-w-3xl text-center">
        <div class="reveal-scale">
            <h2 class="section-title text-white">Partner with Classic Reinsurance Brokers</h2>
            <p class="section-subtitle mx-auto text-primary-100">
                Let us help you navigate the complexities of the reinsurance market. Reach out to our team today for a 
                consultation on how we can support your business.
            </p>
            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a href="<?php echo e(route('contact')); ?>" class="btn-primary bg-white text-primary-700 hover:bg-primary-50 hover:shadow-xl hover:shadow-white/25">
                    Contact Us Today
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
                <a href="tel:+263242773192" class="btn-secondary border-white text-white hover:bg-white hover:text-primary-700">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                    +263 242 773 192
                </a>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\claud\OneDrive\Desktop\classicreinsurancebrokers\resources\views/pages/about.blade.php ENDPATH**/ ?>