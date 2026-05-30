<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 - Page Not Found | {{ config('app.name') }}</title>
    <meta name="description" content="The page you are looking for could not be found. Classic Reinsurance Brokers - Zimbabwe's premier reinsurance broker.">
    <meta name="robots" content="noindex, follow">
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: #f6f6f6;
            color: #3d3d3d;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .error-container {
            max-width: 600px;
            width: 100%;
            text-align: center;
        }
        .error-logo {
            margin-bottom: 3rem;
        }
        .error-logo img {
            height: 56px;
            width: auto;
        }
        .error-code {
            font-family: 'Manrope', sans-serif;
            font-size: clamp(6rem, 20vw, 10rem);
            font-weight: 800;
            line-height: 1;
            color: #c93333;
            letter-spacing: -0.04em;
            position: relative;
            display: inline-block;
        }
        .error-code::after {
            content: '';
            position: absolute;
            bottom: 0.1em;
            left: 10%;
            right: 10%;
            height: 4px;
            background: linear-gradient(90deg, transparent, #c93333, transparent);
            border-radius: 2px;
        }
        .error-title {
            font-family: 'Manrope', sans-serif;
            font-size: clamp(1.5rem, 4vw, 2rem);
            font-weight: 700;
            color: #262626;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }
        .error-description {
            font-size: 1.125rem;
            line-height: 1.75;
            color: #6d6d6d;
            margin-bottom: 2.5rem;
            max-width: 480px;
            margin-left: auto;
            margin-right: auto;
        }
        .error-actions {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: center;
        }
        @media (min-width: 480px) {
            .error-actions {
                flex-direction: row;
                justify-content: center;
            }
        }
        .btn-home {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.875rem 2rem;
            background: #c93333;
            color: #fff;
            font-family: 'Manrope', sans-serif;
            font-size: 0.9375rem;
            font-weight: 600;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
            min-width: 180px;
            box-shadow: 0 4px 14px rgba(201, 51, 51, 0.25);
        }
        .btn-home:hover {
            background: #a92525;
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(201, 51, 51, 0.35);
        }
        .btn-home svg {
            width: 18px;
            height: 18px;
            flex-shrink: 0;
        }
        .btn-contact {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.875rem 2rem;
            background: transparent;
            color: #3d3d3d;
            font-family: 'Manrope', sans-serif;
            font-size: 0.9375rem;
            font-weight: 600;
            border: 2px solid #d1d1d1;
            border-radius: 0.5rem;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
            min-width: 180px;
        }
        .btn-contact:hover {
            border-color: #c93333;
            color: #c93333;
            background: rgba(201, 51, 51, 0.04);
        }
        .error-divider {
            width: 60px;
            height: 2px;
            background: linear-gradient(90deg, transparent, #c93333, transparent);
            margin: 1.5rem auto;
            border: 0;
        }
        .error-footer-text {
            margin-top: 3.5rem;
            font-size: 0.8125rem;
            color: #888888;
        }
        .error-footer-text a {
            color: #c93333;
            text-decoration: none;
        }
        .error-footer-text a:hover {
            text-decoration: underline;
        }
        .error-card {
            background: #ffffff;
            border-radius: 1.25rem;
            padding: 3.5rem 2.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04), 0 1px 2px rgba(0, 0, 0, 0.06);
            border: 1px solid #f0f0f0;
        }
        @media (max-width: 480px) {
            .error-card {
                padding: 2.5rem 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-card">
            <div class="error-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}">
                </a>
            </div>

            <div class="error-code">404</div>

            <h1 class="error-title">Page Not Found</h1>

            <hr class="error-divider">

            <p class="error-description">
                The page you're looking for doesn't exist or has been moved.
                Let us help you find your way back.
            </p>

            <div class="error-actions">
                <a href="{{ route('home') }}" class="btn-home">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Back to Home
                </a>
                <a href="{{ route('contact') }}" class="btn-contact">Contact Us</a>
            </div>
        </div>

        <p class="error-footer-text">
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </p>
    </div>
</body>
</html>