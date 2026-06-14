@extends('layouts.admin')

@section('title', 'Profil Admin')

@section('content')
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Pengaturan Profil</h1>
        <p class="text-gray-500">Kelola informasi akun dan keamanan Anda.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Profile Information -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-8 border-b border-gray-100">
                    <h3 class="text-lg font-bold text-gray-900">Informasi Profil</h3>
                    <p class="text-sm text-gray-500">Perbarui nama dan alamat email akun Anda.</p>
                </div>
                <div class="p-8">
                    <form method="POST" action="{{ route('admin.profile.update') }}" class="space-y-6">
                        @csrf
                        @method('PATCH')

                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" 
                                   class="w-full rounded-xl border-gray-200 focus:border-primary focus:ring-primary transition-colors" required>
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" 
                                   class="w-full rounded-xl border-gray-200 focus:border-primary focus:ring-primary transition-colors" required>
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center gap-4 pt-4">
                            <button type="submit" class="px-6 py-3 bg-primary text-white font-bold rounded-xl hover:bg-primary/90 transition-colors shadow-lg shadow-primary/20">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Change Password -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-8 border-b border-gray-100">
                    <h3 class="text-lg font-bold text-gray-900">Update Password</h3>
                    <p class="text-sm text-gray-500">Pastikan akun Anda menggunakan password yang aman.</p>
                </div>
                <div class="p-8">
                    <form method="POST" action="{{ route('admin.profile.password') }}" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="current_password" class="block text-sm font-semibold text-gray-700 mb-2">Password Saat Ini</label>
                            <input type="password" name="current_password" id="current_password" 
                                   class="w-full rounded-xl border-gray-200 focus:border-primary focus:ring-primary transition-colors" required>
                            @error('current_password')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password Baru</label>
                            <input type="password" name="password" id="password" 
                                   class="w-full rounded-xl border-gray-200 focus:border-primary focus:ring-primary transition-colors" required>
                            @error('password')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2">Konfirmasi Password Baru</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" 
                                   class="w-full rounded-xl border-gray-200 focus:border-primary focus:ring-primary transition-colors" required>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="w-full px-6 py-3 bg-dark text-white font-bold rounded-xl hover:bg-dark/90 transition-colors shadow-lg shadow-dark/20">
                                Update Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
