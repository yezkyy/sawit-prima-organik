<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', $site_settings['meta_description'] ?? 'Pupuk organik premium khusus kelapa sawit.')">
    <meta name="keywords" content="@yield('meta_keywords', $site_settings['meta_keywords'] ?? 'pupuk sawit, sawit prima organik')">
    <meta name="author" content="{{ $site_settings['site_name'] ?? 'Sawit Prima Organik' }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', $site_settings['meta_title'] ?? 'Sawit Prima Organik')">
    <meta property="og:description" content="@yield('meta_description', $site_settings['meta_description'] ?? '')">
    <meta property="og:image" content="{{ !empty($site_settings['site_logo']) ? asset('storage/' . $site_settings['site_logo']) : asset('images/logo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', $site_settings['meta_title'] ?? 'Sawit Prima Organik')">
    <meta property="twitter:description" content="@yield('meta_description', $site_settings['meta_description'] ?? '')">
    <meta property="twitter:image" content="{{ !empty($site_settings['site_logo']) ? asset('storage/' . $site_settings['site_logo']) : asset('images/logo.png') }}">

    <link rel="icon" type="image/png" href="{{ !empty($site_settings['site_logo']) ? asset('storage/' . $site_settings['site_logo']) : asset('images/logo.png') }}">

    <title>@yield('title', $site_settings['meta_title'] ?? 'Sawit Prima Organik')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    @stack('styles')
</head>
<body class="font-body bg-background text-dark antialiased overflow-x-hidden">
    @include('partials.navbar')
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>@yield('content')</main>
            @include('partials.footer')
        </div>
    </div>
    @include('partials.whatsapp-bubble')
    @stack('scripts')
</body>
</html>