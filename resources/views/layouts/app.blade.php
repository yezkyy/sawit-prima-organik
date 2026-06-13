<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sawit Prima Organik - Nutrisi Prima, Sawit Berkualitas. Solusi pupuk organik premium khusus kelapa sawit untuk hasil panen melimpah.">
    <meta name="keywords" content="pupuk sawit, pupuk organik, sawit prima organik, kelapa sawit, riau, pekanbaru, nutrisi sawit">
    <meta name="author" content="Sawit Prima Organik">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Sawit Prima Organik - Nutrisi Prima, Sawit Berkualitas">
    <meta property="og:description" content="Pelopor teknologi pupuk hayati premium untuk masa depan perkebunan kelapa sawit Indonesia yang lebih produktif dan berkelanjutan.">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Sawit Prima Organik - Nutrisi Prima, Sawit Berkualitas">
    <meta property="twitter:description" content="Pelopor teknologi pupuk hayati premium untuk masa depan perkebunan kelapa sawit Indonesia yang lebih produktif dan berkelanjutan.">
    <meta property="twitter:image" content="{{ asset('images/logo.png') }}">

    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <title>@yield('title', 'Sawit Prima Organik - Nutrisi Prima, Sawit Berkualitas')</title>
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