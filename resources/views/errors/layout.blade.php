<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Sawit Prima Organik</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700|montserrat:600,700,800,900" rel="stylesheet" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css'])
</head>
<body class="font-body bg-gray-50 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-2xl w-full text-center">
        <div class="bg-white rounded-[3rem] p-10 md:p-16 shadow-2xl border border-gray-100 relative overflow-hidden">
            
            <!-- Decoration -->
            <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-primary via-accent to-primary"></div>
            
            <div class="relative z-10 flex flex-col items-center">
                <div class="w-32 h-32 rounded-full flex items-center justify-center mb-8 relative">
                    <div class="absolute inset-0 rounded-full @yield('color', 'bg-primary/10') animate-pulse"></div>
                    <i class="fa-solid @yield('icon', 'fa-triangle-exclamation') text-6xl relative z-10 @yield('text-color', 'text-primary')"></i>
                </div>
                
                <h1 class="font-heading text-8xl md:text-9xl font-black @yield('text-color', 'text-primary') mb-2 tracking-tighter">
                    @yield('code', 'Error')
                </h1>
                
                <h2 class="font-heading text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                    @yield('title')
                </h2>
                
                <p class="text-gray-500 text-lg mb-10 max-w-md mx-auto leading-relaxed">
                    @yield('message')
                </p>
                
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 w-full">
                    <button onclick="window.history.back()" class="w-full sm:w-auto px-8 py-4 rounded-xl border-2 border-gray-200 text-gray-600 font-bold hover:bg-gray-50 hover:text-gray-900 transition-colors">
                        <i class="fa-solid fa-arrow-left mr-2"></i> Kembali
                    </button>
                    <a href="{{ url('/') }}" class="w-full sm:w-auto btn-primary px-8 py-4 shadow-lg @yield('shadow-color', 'shadow-primary/30') text-base">
                        <i class="fa-solid fa-house mr-2"></i> Beranda Utama
                    </a>
                </div>
            </div>
            
            <!-- Watermark Logo -->
            <div class="absolute -bottom-10 -right-10 opacity-5 pointer-events-none">
                <i class="fa-solid fa-leaf text-[250px]"></i>
            </div>
        </div>
        
        <p class="mt-8 text-gray-400 text-sm font-medium">
            &copy; {{ date('Y') }} Sawit Prima Organik. All rights reserved.
        </p>
    </div>
</body>
</html>