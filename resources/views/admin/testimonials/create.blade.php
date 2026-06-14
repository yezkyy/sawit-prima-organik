@extends('layouts.admin')

@section('title', 'Tambah Testimoni')

@section('content')
    <!-- Header Section -->
    <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <a href="{{ route('admin.testimonials.index') }}" class="inline-flex items-center text-sm font-semibold text-gray-500 hover:text-primary mb-2 transition-colors">
                <i class="fa-solid fa-arrow-left mr-2"></i> Kembali ke Daftar
            </a>
            <h1 class="font-heading text-2xl font-bold text-gray-900">Tambah Testimoni</h1>
            <p class="text-gray-500 text-sm mt-1">Lengkapi form di bawah ini untuk menambahkan ulasan pelanggan baru.</p>
        </div>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden max-w-5xl">
        <div class="p-8 border-b border-gray-100 bg-gray-50/50">
            <h3 class="font-bold text-gray-900 text-lg flex items-center gap-2">
                <i class="fa-solid fa-comment-medical text-primary"></i> Data Pelanggan & Ulasan
            </h3>
        </div>
        <div class="p-8 lg:p-12">
            <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" x-data="{ isSubmitting: false }" @submit="isSubmitting = true">
                @csrf
                
                @include('admin.testimonials._form')
                
                <div class="mt-12 pt-8 border-t border-gray-100 flex items-center justify-between">
                    <button type="button" onclick="history.back()" class="px-6 py-3 border border-gray-200 rounded-xl text-gray-600 font-semibold hover:bg-gray-50 transition-colors">
                        Batal
                    </button>
                    <button type="submit" :disabled="isSubmitting" class="btn-primary py-3 px-8 shadow-lg shadow-primary/20 text-sm flex items-center gap-2 disabled:opacity-70">
                        <i class="fa-solid fa-circle-notch fa-spin" x-show="isSubmitting" style="display: none;"></i>
                        <i class="fa-solid fa-floppy-disk" x-show="!isSubmitting"></i>
                        <span x-text="isSubmitting ? 'Menyimpan...' : 'Simpan Testimoni'"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection