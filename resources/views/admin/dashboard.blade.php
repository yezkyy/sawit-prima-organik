@extends('layouts.admin')

@section('content')
    <div class="mb-8">
        <h1 class="font-heading text-2xl font-bold text-dark">Ringkasan Statistik</h1>
        <p class="text-dark/50">Selamat datang kembali di panel administrasi Sawit Prima Organik.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-6">
            <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary">
                <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
            </div>
            <div>
                <span class="block text-dark/50 text-sm font-medium uppercase tracking-wider">Total Banner</span>
                <span class="text-2xl font-bold text-dark">{{ $stats['banners'] }}</span>
            </div>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-6">
            <div class="w-14 h-14 bg-accent/10 rounded-xl flex items-center justify-center text-accent">
                <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" /></svg>
            </div>
            <div>
                <span class="block text-dark/50 text-sm font-medium uppercase tracking-wider">Total Galeri</span>
                <span class="text-2xl font-bold text-dark">{{ $stats['galleries'] }}</span>
            </div>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-6">
            <div class="w-14 h-14 bg-secondary/10 rounded-xl flex items-center justify-center text-secondary">
                <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" /></svg>
            </div>
            <div>
                <span class="block text-dark/50 text-sm font-medium uppercase tracking-wider">Total Testimoni</span>
                <span class="text-2xl font-bold text-dark">{{ $stats['testimonials'] }}</span>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
        <h3 class="font-heading text-xl font-bold text-dark mb-6">Aksi Cepat</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="{{ route('admin.banners.create') }}" class="flex flex-col items-center justify-center p-6 rounded-2xl bg-gray-50 border border-dashed border-gray-200 hover:border-primary hover:bg-primary/5 transition group text-center">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-dark/40 mb-3 shadow-sm group-hover:text-primary transition">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                </div>
                <span class="font-bold text-dark text-sm">Tambah Banner</span>
            </a>
            <a href="{{ route('admin.galleries.create') }}" class="flex flex-col items-center justify-center p-6 rounded-2xl bg-gray-50 border border-dashed border-gray-200 hover:border-primary hover:bg-primary/5 transition group text-center">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-dark/40 mb-3 shadow-sm group-hover:text-primary transition">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                </div>
                <span class="font-bold text-dark text-sm">Unggah Foto</span>
            </a>
            <a href="{{ route('admin.testimonials.create') }}" class="flex flex-col items-center justify-center p-6 rounded-2xl bg-gray-50 border border-dashed border-gray-200 hover:border-primary hover:bg-primary/5 transition group text-center">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-dark/40 mb-3 shadow-sm group-hover:text-primary transition">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                </div>
                <span class="font-bold text-dark text-sm">Tambah Testimoni</span>
            </a>
            <a href="{{ route('admin.settings.index') }}" class="flex flex-col items-center justify-center p-6 rounded-2xl bg-gray-50 border border-dashed border-gray-200 hover:border-primary hover:bg-primary/5 transition group text-center">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-dark/40 mb-3 shadow-sm group-hover:text-primary transition">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                </div>
                <span class="font-bold text-dark text-sm">Edit Pengaturan</span>
            </a>
        </div>
    </div>
@endsection