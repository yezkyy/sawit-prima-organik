<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin - Sawit Prima Organik</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
</head>
<body class="font-body bg-primary min-h-screen flex items-center justify-center p-6">
    <div class="max-w-md w-full bg-white rounded-4xl shadow-2xl overflow-hidden">
        <div class="p-10">
            <div class="text-center mb-10">
                <img src="{{ asset('images/logo.png') }}" alt="Sawit Prima Organik" class="h-24 w-auto mx-auto mb-6">
                <p class="text-dark/50 text-sm font-medium">Masuk ke Panel Administrasi</p>
            </div>

            @if($errors->any())
                <div class="mb-6 p-4 bg-red-50 text-red-600 rounded-xl border border-red-100 text-sm">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-6">
                @csrf
                <div class="space-y-2">
                    <label class="text-sm font-bold text-dark/70 ml-1">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition" placeholder="admin@example.com">
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-bold text-dark/70 ml-1">Password</label>
                    <input type="password" name="password" required class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition" placeholder="••••••••">
                </div>
                <button type="submit" class="btn-primary w-full py-4 text-lg font-bold shadow-lg shadow-primary/20">Masuk Sekarang</button>
            </form>
        </div>
        <div class="bg-gray-50 p-6 text-center border-t border-gray-100">
            <a href="{{ route('home') }}" class="text-primary text-sm font-bold hover:underline"> Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>