@extends('layouts.app')

@section('title', 'Privacy Policy')
@section('meta_description', 'Read the Privacy Policy of Classic Reinsurance Brokers. Learn how we collect, use, protect, and handle your personal information in compliance with Zimbabwean data protection laws. Serving insurance and reinsurance companies in Harare, Bulawayo, Masvingo and all Zimbabwe cities.')
@section('og_title', 'Privacy Policy | Classic Reinsurance Brokers')
@section('og_description', 'Classic Reinsurance Brokers is committed to protecting your privacy. Understand how we collect, use, and safeguard your personal data.')

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}" },
        { "@type": "ListItem", "position": 2, "name": "Privacy Policy", "item": "{{ url()->current() }}" }
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Privacy Policy",
    "description": "Privacy Policy of Classic Reinsurance Brokers outlining how personal information is collected, used, and protected.",
    "url": "{{ url()->current() }}",
    "isPartOf": {
        "@type": "WebSite",
        "name": "Classic Reinsurance Brokers",
        "url": "{{ url('/') }}"
    },
    "about": {
        "@type": "Organization",
        "name": "Classic Reinsurance Brokers",
        "legalName": "Classic Reinsurance Brokers (Private) Limited",
        "telephone": "+263242773192",
        "email": "info@classicre.co.zw",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "11th Floor Fidelity Life Tower, 5 Raleigh Street",
            "addressLocality": "Harare",
            "addressCountry": "ZW"
        }
    },
    "dateModified": "2026-01-15",
    "inLanguage": "en-ZW",
    "isAccessibleForFree": true,
    "mainEntity": {
        "@type": "PrivacyPolicy",
        "name": "Privacy Policy of Classic Reinsurance Brokers",
        "privacyPolicy": "{{ url()->current() }}"
    }
}
</script>
@endpush

@section('content')
<section class="relative overflow-hidden bg-gradient-to-br from-neutral-950 via-neutral-900 to-primary-950 px-6 py-24 sm:py-32 lg:px-8">
    <div class="relative mx-auto max-w-7xl text-center">
        <div>
            <span class="hero-animate inline-flex items-center rounded-lg bg-primary-600/20 px-4 py-1.5 text-sm font-medium text-primary-200 ring-1 ring-primary-600/30">Legal</span>
            <h1 class="hero-animate mt-6 font-heading text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Privacy Policy</h1>
            <p class="hero-animate mx-auto mt-6 max-w-3xl text-lg leading-relaxed text-neutral-300">
                How Classic Reinsurance Brokers collects, uses, protects, and handles your personal information.
            </p>
        </div>
    </div>
</section>

<section class="bg-white px-6 py-16 sm:py-20 lg:px-8">
    <div class="mx-auto max-w-3xl">
        <div class="reveal">
            <p class="text-sm text-neutral-500">
                <strong>Last Updated:</strong> 15 January 2026
            </p>
            <p class="mt-4 leading-relaxed text-neutral-600">
                Classic Reinsurance Brokers (Private) Limited ("Classic Reinsurance Brokers", "we", "us", "our") is committed to protecting the privacy of individuals who visit our website and use our services. This Privacy Policy explains how we collect, use, disclose, and safeguard your personal information when you visit our website or interact with us.
            </p>
        </div>

        <div class="reveal prose prose-neutral mt-12 max-w-none prose-headings:font-heading prose-headings:font-bold prose-headings:text-neutral-900 prose-h2:mt-10 prose-h2:text-2xl prose-h2:sm:text-3xl prose-h3:mt-8 prose-h3:text-xl prose-p:leading-relaxed prose-p:text-neutral-600 prose-strong:text-neutral-900 prose-a:text-primary-600 prose-a:no-underline hover:prose-a:text-primary-700 prose-ul:marker:text-primary-500">
            <h2>1. Information We Collect</h2>
            <p>We may collect the following types of information when you visit our website or interact with us:</p>
            <h3>Personal Information You Provide</h3>
            <ul>
                <li><strong>Contact Information:</strong> Name, email address, telephone number, and postal address when you fill out forms on our website, request a quote, or communicate with us.</li>
                <li><strong>Professional Information:</strong> Company name, job title, industry, and professional credentials when you engage our services.</li>
                <li><strong>Correspondence:</strong> Records of your communications with us, including emails, messages, and call recordings for quality and training purposes.</li>
                <li><strong>Transaction Information:</strong> Details of reinsurance services you request, including policy information, claims data, and payment details.</li>
            </ul>
            <h3>Information Collected Automatically</h3>
            <ul>
                <li><strong>Device and Usage Data:</strong> IP address, browser type, operating system, referring URLs, pages visited, and time spent on our website.</li>
                <li><strong>Cookies and Tracking Technologies:</strong> We use cookies and similar tracking technologies as described in our Cookies section below.</li>
            </ul>

            <h2>2. How We Use Your Information</h2>
            <p>We use your personal information for the following purposes:</p>
            <ul>
                <li><strong>Service Delivery:</strong> To provide and manage our reinsurance broking and advisory services, including processing requests, managing accounts, and handling claims.</li>
                <li><strong>Communication:</strong> To respond to your inquiries, provide customer support, send service-related communications, and share important updates.</li>
                <li><strong>Business Improvement:</strong> To analyse website usage, improve our services, develop new offerings, and enhance user experience.</li>
                <li><strong>Compliance:</strong> To comply with legal and regulatory obligations, including anti-money laundering (AML) and know-your-customer (KYC) requirements under Zimbabwean law.</li>
                <li><strong>Marketing:</strong> To send you information about our services, industry insights, and events where you have provided consent or where we have a legitimate interest.</li>
            </ul>

            <h2>3. Data Protection</h2>
            <p>We implement appropriate technical and organisational measures to protect your personal information against unauthorised access, alteration, disclosure, or destruction, including:</p>
            <ul>
                <li>Encryption of sensitive data in transit and at rest using industry-standard protocols.</li>
                <li>Access controls and authentication mechanisms to restrict data access to authorised personnel only.</li>
                <li>Regular security assessments, penetration testing, and vulnerability scanning.</li>
                <li>Staff training on data protection and privacy best practices.</li>
                <li>Incident response procedures to promptly address any data breaches.</li>
            </ul>
            <p>While we strive to protect your personal information, no method of transmission or storage is completely secure. We cannot guarantee absolute security but will promptly notify you in the event of a data breach affecting your information.</p>

            <h2>4. Cookies</h2>
            <p>Our website uses cookies and similar tracking technologies to enhance your browsing experience, analyse site traffic, and understand where our visitors come from.</p>
            <h3>What Are Cookies</h3>
            <p>Cookies are small text files stored on your device by your web browser when you visit a website. They help the website remember your preferences and provide a more personalised experience.</p>
            <h3>Types of Cookies We Use</h3>
            <ul>
                <li><strong>Essential Cookies:</strong> Required for the website to function properly. These cannot be disabled.</li>
                <li><strong>Analytics Cookies:</strong> Help us understand how visitors interact with our website by collecting anonymous information.</li>
                <li><strong>Functional Cookies:</strong> Remember your preferences and settings to enhance your experience.</li>
            </ul>
            <h3>Managing Cookies</h3>
            <p>You can control and manage cookies through your browser settings. Please note that disabling certain cookies may affect the functionality of our website. Most browsers allow you to refuse or accept cookies, delete existing cookies, and set preferences for future cookie storage.</p>

            <h2>5. Third-Party Services</h2>
            <p>We may share your personal information with the following categories of third parties:</p>
            <ul>
                <li><strong>Reinsurers and Markets:</strong> To facilitate reinsurance placements, we may share relevant information with reinsurers, underwriting agencies, and insurance markets.</li>
                <li><strong>Service Providers:</strong> Trusted third-party vendors who assist us with website hosting, data analytics, payment processing, and IT services.</li>
                <li><strong>Regulatory Authorities:</strong> When required by law, we may disclose information to the Insurance and Pensions Commission (IPEC) of Zimbabwe, law enforcement, or other regulatory bodies.</li>
                <li><strong>Professional Advisors:</strong> Legal, accounting, and consulting professionals who provide services to us.</li>
            </ul>
            <p>We require all third parties to respect the confidentiality and security of your personal information and to process it only for specified purposes and in accordance with our instructions. We do not sell your personal information to third parties.</p>

            <h2>6. Your Rights</h2>
            <p>Under applicable data protection laws, including the Zimbabwean Data Protection Act, you have the following rights regarding your personal information:</p>
            <ul>
                <li><strong>Right of Access:</strong> Request a copy of the personal information we hold about you.</li>
                <li><strong>Right to Rectification:</strong> Request correction of inaccurate or incomplete personal information.</li>
                <li><strong>Right to Erasure:</strong> Request deletion of your personal information where there is no compelling reason for its continued processing.</li>
                <li><strong>Right to Restrict Processing:</strong> Request restriction of processing your personal information in certain circumstances.</li>
                <li><strong>Right to Data Portability:</strong> Request transfer of your personal information to another service provider in a structured, commonly used format.</li>
                <li><strong>Right to Object:</strong> Object to processing of your personal information for direct marketing purposes or based on legitimate interests.</li>
            </ul>
            <p>To exercise any of these rights, please contact us using the details provided below. We will respond to your request within 30 days, subject to any legal or regulatory obligations that may prevent us from doing so.</p>

            <h2>7. Contact Us</h2>
            <p>If you have any questions, concerns, or requests regarding this Privacy Policy or our data handling practices, please contact us:</p>
            <ul>
                <li><strong>Email:</strong> <a href="mailto:info@classicre.co.zw">info@classicre.co.zw</a></li>
                <li><strong>Phone:</strong> <a href="tel:+263242773192">+263 242 773192</a> / <a href="tel:+263242773193">773193</a> / <a href="tel:+263242773194">773194</a></li>
                <li><strong>Address:</strong> 11th Floor Fidelity Life Tower, 5 Raleigh Street, Harare, Zimbabwe</li>
            </ul>
            <p>We will acknowledge receipt of your query within 5 business days and endeavour to resolve your concern promptly. If you are dissatisfied with our response, you have the right to lodge a complaint with the relevant data protection authority in Zimbabwe.</p>
        </div>

        <div class="reveal mt-12 rounded-2xl bg-neutral-50 p-8">
            <h3 class="font-heading text-xl font-bold text-neutral-900">Policy Updates</h3>
            <p class="mt-2 text-sm leading-relaxed text-neutral-600">
                We may update this Privacy Policy from time to time to reflect changes in our practices, legal requirements, or operational needs. We will notify you of any material changes by posting the updated policy on this page with a revised "Last Updated" date. We encourage you to review this policy periodically.
            </p>
            <div class="mt-6 flex flex-wrap gap-4">
                <a href="{{ route('contact') }}" class="btn-primary text-sm">Contact Us</a>
                <a href="{{ route('terms') }}" class="btn-secondary text-sm">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</section>
@endsection
