<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login Admin - {{ \App\Models\Setting::get('site_name', 'Sawit Prima Organik') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700|montserrat:600,700,800,900" rel="stylesheet" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- AlpineJS & SweetAlert2 -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="font-body bg-hero-gradient min-h-screen flex items-center justify-center p-4 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0 opacity-20 pointer-events-none">
        <div class="absolute -top-40 -left-40 w-96 h-96 rounded-full bg-accent blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] rounded-full bg-primary blur-3xl"></div>
    </div>

    <!-- Login Card -->
    <div class="max-w-md w-full relative z-10">
        <div class="glass-card rounded-[2.5rem] shadow-2xl overflow-hidden backdrop-blur-xl bg-white/80 border border-white/40">
            <div class="p-10 sm:p-12">
                <!-- Logo & Header -->
                <div class="text-center mb-10">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-white shadow-soft mb-6 p-2">
                        <img src="{{ \App\Models\Setting::get('site_logo') ? asset('storage/' . \App\Models\Setting::get('site_logo')) : asset('images/logo.png') }}" alt="Logo" class="h-12 w-auto object-contain" onerror="this.src='https://ui-avatars.com/api/?name=SP&color=0F4D2E&background=E5E7EB'">
                    </div>
                    <h1 class="font-heading text-2xl font-bold text-gray-900 mb-2">Selamat Datang</h1>
                    <p class="text-gray-500 text-sm font-medium">Masuk ke Panel Administrasi</p>
                </div>

                <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-6" x-data="{ showPassword: false, isLoading: false }" @submit="isLoading = true">
                    @csrf
                    
                    <!-- Email Field -->
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-gray-700 uppercase tracking-wider ml-1">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fa-regular fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" name="email" value="{{ old('email') }}" required autofocus
                                class="w-full bg-white/50 border border-gray-200 rounded-xl pl-11 pr-4 py-3.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('email') border-red-500 focus:ring-red-500/20 focus:border-red-500 @enderror" 
                                placeholder="admin@sawitprima.com">
                        </div>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1 ml-1 flex items-center gap-1">
                                <i class="fa-solid fa-circle-exclamation"></i> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="space-y-2">
                        <div class="flex items-center justify-between ml-1">
                            <label class="text-xs font-bold text-gray-700 uppercase tracking-wider">Password</label>
                            <a href="#" class="text-xs font-semibold text-primary hover:text-secondary transition-colors" @click.prevent="Swal.fire('Fitur Segera Hadir', 'Silakan hubungi administrator sistem untuk mereset password.', 'info')">Lupa Password?</a>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fa-solid fa-lock text-gray-400"></i>
                            </div>
                            <input :type="showPassword ? 'text' : 'password'" name="password" required 
                                class="w-full bg-white/50 border border-gray-200 rounded-xl pl-11 pr-12 py-3.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('password') border-red-500 focus:ring-red-500/20 focus:border-red-500 @enderror" 
                                placeholder="••••••••">
                            <button type="button" @click="showPassword = !showPassword" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none">
                                <i class="fa-regular" :class="showPassword ? 'fa-eye-slash' : 'fa-eye'"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input id="remember" type="checkbox" name="remember" class="w-4 h-4 text-primary bg-white border-gray-300 rounded focus:ring-primary focus:ring-2 cursor-pointer">
                        <label for="remember" class="ml-2 text-sm text-gray-600 font-medium cursor-pointer">Ingat Saya</label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" :disabled="isLoading" 
                            class="w-full flex items-center justify-center gap-2 rounded-xl bg-primary px-6 py-4 text-white font-bold transition-all duration-300 hover:bg-secondary hover:shadow-lg hover:shadow-primary/30 hover:-translate-y-0.5 disabled:opacity-70 disabled:cursor-not-allowed disabled:transform-none">
                        <i class="fa-solid fa-circle-notch fa-spin" x-show="isLoading" style="display: none;"></i>
                        <span x-show="!isLoading">Masuk ke Dashboard</span>
                        <span x-show="isLoading" style="display: none;">Memproses...</span>
                    </button>
                </form>
            </div>
            
            <!-- Footer Link -->
            <div class="bg-gray-50/50 backdrop-blur-md p-6 text-center border-t border-gray-100">
                <a href="{{ route('home') }}" class="group inline-flex items-center gap-2 text-gray-500 text-sm font-semibold hover:text-primary transition-colors">
                    <i class="fa-solid fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

    <!-- Alert Handler -->
    @if($errors->any() && !$errors->has('email') && !$errors->has('password'))
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal Masuk',
                    text: '{{ $errors->first() }}',
                    confirmButtonColor: '#0F4D2E',
                    confirmButtonText: 'Coba Lagi'
                });
            });
        </script>
    @endif
</body>
</html>