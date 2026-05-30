@extends('layouts.app')

@section('title', 'Terms & Conditions')
@section('meta_description', 'Read the Terms & Conditions of Classic Reinsurance Brokers. Understand the terms governing the use of our website and reinsurance broking services.')
@section('og_title', 'Terms & Conditions | Classic Reinsurance Brokers')
@section('og_description', 'Classic Reinsurance Brokers Terms & Conditions — governing the use of our website, services, and the legal relationship between clients and our firm.')

@push('head')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Terms & Conditions",
    "description": "Terms and Conditions governing the use of Classic Reinsurance Brokers website and services.",
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
        "@type": "WebPageElement",
        "name": "Terms and Conditions",
        "description": "The terms and conditions that govern the relationship between Classic Reinsurance Brokers and its clients."
    }
}
</script>
@endpush

@section('content')
<section class="relative overflow-hidden bg-gradient-to-br from-neutral-950 via-neutral-900 to-primary-950 px-6 py-24 sm:py-32 lg:px-8">
    <div class="relative mx-auto max-w-7xl text-center">
        <div>
            <span class="hero-animate inline-flex items-center rounded-lg bg-primary-600/20 px-4 py-1.5 text-sm font-medium text-primary-200 ring-1 ring-primary-600/30">Legal</span>
            <h1 class="hero-animate mt-6 font-heading text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Terms &amp; Conditions</h1>
            <p class="hero-animate mx-auto mt-6 max-w-3xl text-lg leading-relaxed text-neutral-300">
                The terms governing your use of our website and reinsurance broking services.
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
                Please read these Terms &amp; Conditions ("Terms", "Terms &amp; Conditions") carefully before using the website and services of Classic Reinsurance Brokers (Private) Limited ("Classic Reinsurance Brokers", "we", "us", "our"). By accessing or using our website, you agree to be bound by these Terms. If you do not agree with any part of these Terms, you must not use our website or services.
            </p>
        </div>

        <div class="reveal prose prose-neutral mt-12 max-w-none prose-headings:font-heading prose-headings:font-bold prose-headings:text-neutral-900 prose-h2:mt-10 prose-h2:text-2xl prose-h2:sm:text-3xl prose-h3:mt-8 prose-h3:text-xl prose-p:leading-relaxed prose-p:text-neutral-600 prose-strong:text-neutral-900 prose-a:text-primary-600 prose-a:no-underline hover:prose-a:text-primary-700 prose-ul:marker:text-primary-500">
            <h2>1. Introduction</h2>
            <p>
                Classic Reinsurance Brokers is a licensed insurance brokerage firm registered in Zimbabwe, operating under the regulatory oversight of the Insurance and Pensions Commission (IPEC). We provide reinsurance broking, advisory, and risk management services to insurance companies across Zimbabwe and the broader African market.
            </p>
            <p>
                These Terms constitute a legally binding agreement between you and Classic Reinsurance Brokers regarding your use of our website, the content displayed on it, and the services we offer. By engaging our services, you agree to be bound by these Terms as well as any additional terms that may apply to specific services.
            </p>

            <h2>2. Services</h2>
            <p>We offer the following reinsurance-related services, subject to separate engagement agreements where applicable:</p>
            <ul>
                <li><strong>Reinsurance Broking:</strong> Placement of treaty and facultative reinsurance across multiple classes of business, including property, casualty, engineering, marine, aviation, and life.</li>
                <li><strong>Reinsurance Advisory:</strong> Strategic advice on reinsurance programme design, risk modelling, capital management, regulatory compliance, and market intelligence.</li>
                <li><strong>Claims Advocacy:</strong> Assistance with preparation, documentation, submission, and negotiation of claims with reinsurers.</li>
                <li><strong>Alternative Risk Transfer:</strong> Structured solutions including parametric insurance, insurance-linked securities, and other capital market instruments.</li>
            </ul>
            <p>
                All services are provided on a best-efforts basis and are subject to market conditions, regulatory requirements, and the acceptance of risk by reinsurers. Nothing in these Terms constitutes a guarantee of coverage, pricing, or placement.
            </p>

            <h2>3. User Obligations</h2>
            <p>By using our website and services, you agree to:</p>
            <ul>
                <li>Provide accurate, complete, and up-to-date information when engaging our services or submitting inquiries.</li>
                <li>Use the website in compliance with all applicable laws and regulations, including those of Zimbabwe.</li>
                <li>Not misuse the website by introducing viruses, trojans, worms, or other malicious or technologically harmful material.</li>
                <li>Not attempt to gain unauthorised access to our systems, servers, or databases.</li>
                <li>Not use our website for any unlawful purpose or in any way that could damage, disable, or impair our services.</li>
                <li>Maintain the confidentiality of any account credentials or access information provided to you.</li>
                <li>Promptly notify us of any changes to your contact or business information to ensure accurate service delivery.</li>
            </ul>
            <p>
                We reserve the right to suspend or terminate access to our website or services if we reasonably believe you have violated these obligations.
            </p>

            <h2>4. Intellectual Property</h2>
            <p>
                All content on our website, including but not limited to text, graphics, logos, icons, images, audio clips, video clips, data compilations, page layout, underlying code, and software, is the property of Classic Reinsurance Brokers or its content suppliers and is protected by Zimbabwean and international intellectual property laws.
            </p>
            <p>You may not, without our prior written consent:</p>
            <ul>
                <li>Reproduce, distribute, modify, display, perform, or publish any content from our website.</li>
                <li>Create derivative works based on our website or its content.</li>
                <li>Use any trademarks, service marks, or trade names displayed on our website without our permission.</li>
                <li>Frame or mirror any part of our website on another website or platform.</li>
            </ul>
            <p>
                You are granted a limited, non-exclusive, non-transferable license to access and view the content on our website for personal, non-commercial use. Any unauthorised use of our intellectual property may result in legal action.
            </p>

            <h2>5. Limitation of Liability</h2>
            <p>
                To the maximum extent permitted by applicable law, Classic Reinsurance Brokers, its directors, officers, employees, agents, and affiliates shall not be liable for any:
            </p>
            <ul>
                <li>Direct, indirect, incidental, special, consequential, or punitive damages arising out of or relating to your use of our website or services.</li>
                <li>Loss of profits, business, revenue, goodwill, or anticipated savings.</li>
                <li>Loss or corruption of data or information.</li>
                <li>Business interruption or loss of business opportunity.</li>
                <li>Errors, omissions, or inaccuracies in the content on our website.</li>
            </ul>
            <p>
                Our total liability to you for any claim arising from these Terms or your use of our services shall not exceed the fees paid by you to us in the 12-month period preceding the event giving rise to the claim. This limitation does not apply to liability that cannot be excluded or limited by law, including death or personal injury caused by our negligence, fraud, or fraudulent misrepresentation.
            </p>
            <p>
                The information provided on our website is for general informational purposes only and does not constitute professional advice. We make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability of the information on our website.
            </p>

            <h2>6. Governing Law</h2>
            <p>
                These Terms shall be governed by and construed in accordance with the laws of Zimbabwe. Any disputes arising out of or relating to these Terms or your use of our website and services shall be subject to the exclusive jurisdiction of the courts of Zimbabwe.
            </p>
            <p>
                If any provision of these Terms is found to be invalid, illegal, or unenforceable by a court of competent jurisdiction, the remaining provisions shall remain in full force and effect. Our failure to enforce any right or provision of these Terms shall not be deemed a waiver of such right or provision.
            </p>

            <h2>7. Changes to Terms</h2>
            <p>
                We reserve the right to modify or replace these Terms at any time at our sole discretion. Changes will be effective immediately upon posting the updated Terms on this page, with a revised "Last Updated" date indicating when the changes were made.
            </p>
            <p>
                We encourage you to review these Terms periodically for any updates or changes. Your continued use of our website or services after any modifications to these Terms constitutes acceptance of the revised Terms. If you do not agree with the changes, you must discontinue use of our website and services.
            </p>
            <p>
                For significant changes that materially affect your rights or obligations, we will make reasonable efforts to notify you via email or a prominent notice on our website prior to the changes taking effect.
            </p>
        </div>

        <div class="reveal mt-12 rounded-2xl bg-neutral-50 p-8">
            <h3 class="font-heading text-xl font-bold text-neutral-900">Contact Us</h3>
            <p class="mt-2 text-sm leading-relaxed text-neutral-600">
                If you have any questions about these Terms &amp; Conditions, please contact us:
            </p>
            <ul class="mt-4 space-y-2 text-sm text-neutral-600">
                <li><strong>Email:</strong> <a href="mailto:info@classicre.co.zw" class="text-primary-600 hover:text-primary-700">info@classicre.co.zw</a></li>
                <li><strong>Phone:</strong> <a href="tel:+263242773192" class="text-primary-600 hover:text-primary-700">+263 242 773192</a> / <a href="tel:+263242773193" class="text-primary-600 hover:text-primary-700">773193</a> / <a href="tel:+263242773194" class="text-primary-600 hover:text-primary-700">773194</a></li>
                <li><strong>Address:</strong> 11th Floor Fidelity Life Tower, 5 Raleigh Street, Harare, Zimbabwe</li>
            </ul>
            <div class="mt-6 flex flex-wrap gap-4">
                <a href="{{ route('contact') }}" class="btn-primary text-sm">Contact Us</a>
                <a href="{{ route('privacy') }}" class="btn-secondary text-sm">Privacy Policy</a>
            </div>
        </div>
    </div>
</section>
@endsection
