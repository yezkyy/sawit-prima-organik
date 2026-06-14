@extends('layouts.admin')

@section('title', 'Detail Galeri')

@section('content')
    <!-- Header Section -->
    <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <a href="{{ route('admin.galleries.index') }}" class="inline-flex items-center text-sm font-semibold text-gray-500 hover:text-primary mb-2 transition-colors">
                <i class="fa-solid fa-arrow-left mr-2"></i> Kembali ke Daftar
            </a>
            <h1 class="font-heading text-2xl font-bold text-gray-900">Detail Foto Galeri</h1>
            <p class="text-gray-500 text-sm mt-1">Informasi lengkap terkait foto galeri ini.</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.galleries.edit', $gallery) }}" class="btn-primary py-2.5 px-5 text-sm shadow-lg shadow-primary/20">
                <i class="fa-solid fa-pen-to-square mr-2"></i> Edit Foto
            </a>
            <form id="delete-form-{{ $gallery->id }}" action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="button" onclick="confirmDelete('delete-form-{{ $gallery->id }}', 'Foto {{ $gallery->title }}')" class="btn-secondary py-2.5 px-5 text-sm shadow-lg shadow-accent/20 bg-red-500 hover:bg-red-600 border-none ring-0">
                    <i class="fa-solid fa-trash-can mr-2"></i> Hapus
                </button>
            </form>
        </div>
    </div>

    <!-- Detail Card -->
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden max-w-5xl">
        <div class="p-8 lg:p-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                
                <!-- Image Preview -->
                <div class="lg:col-span-1">
                    <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-4">Gambar Foto</h3>
                    <div class="rounded-2xl overflow-hidden shadow-md border border-gray-200">
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-auto object-cover aspect-square">
                    </div>
                </div>

                <!-- Info Details -->
                <div class="lg:col-span-2 space-y-8">
                    <div>
                        <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Judul Foto</h3>
                        <p class="text-xl font-bold text-gray-900">{{ $gallery->title }}</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Kategori</h3>
                            <span class="inline-flex items-center px-4 py-1.5 rounded-lg font-bold uppercase tracking-widest bg-blue-50 text-blue-600 border border-blue-100">
                                {{ $gallery->category }}
                            </span>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Status Tampil</h3>
                            @if($gallery->is_active)
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-green-50 text-green-600 text-sm font-bold border border-green-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Aktif
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-gray-100 text-gray-500 text-sm font-bold border border-gray-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span> Sembunyi
                                </span>
                            @endif
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Ditambahkan Pada</h3>
                            <p class="text-gray-900 font-medium">{{ $gallery->created_at->isoFormat('D MMMM YYYY, HH:mm') }}</p>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Terakhir Diperbarui</h3>
                            <p class="text-gray-900 font-medium">{{ $gallery->updated_at->isoFormat('D MMMM YYYY, HH:mm') }}</p>
                            <p class="text-xs text-gray-500 mt-1">{{ $gallery->updated_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection