@extends('layouts.admin')

@section('title', 'Detail Banner')

@section('content')
    <!-- Header Section -->
    <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <a href="{{ route('admin.banners.index') }}" class="inline-flex items-center text-sm font-semibold text-gray-500 hover:text-primary mb-2 transition-colors">
                <i class="fa-solid fa-arrow-left mr-2"></i> Kembali ke Daftar
            </a>
            <h1 class="font-heading text-2xl font-bold text-gray-900">Detail Banner</h1>
            <p class="text-gray-500 text-sm mt-1">Informasi lengkap terkait banner ini.</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.banners.edit', $banner) }}" class="btn-primary py-2.5 px-5 text-sm shadow-lg shadow-primary/20">
                <i class="fa-solid fa-pen-to-square mr-2"></i> Edit Banner
            </a>
            <form id="delete-form-{{ $banner->id }}" action="{{ route('admin.banners.destroy', $banner) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="button" onclick="confirmDelete('delete-form-{{ $banner->id }}', 'Banner {{ $banner->title }}')" class="btn-secondary py-2.5 px-5 text-sm shadow-lg shadow-accent/20 bg-red-500 hover:bg-red-600 border-none ring-0">
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
                    <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-4">Gambar Banner</h3>
                    <div class="rounded-2xl overflow-hidden shadow-md border border-gray-200">
                        <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}" class="w-full h-auto object-cover">
                    </div>
                </div>

                <!-- Info Details -->
                <div class="lg:col-span-2 space-y-8">
                    <div>
                        <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Judul Banner</h3>
                        <p class="text-xl font-bold text-gray-900">{{ $banner->title }}</p>
                    </div>

                    <div>
                        <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Deskripsi</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $banner->description }}</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Link Tujuan</h3>
                            @if($banner->link)
                                <a href="{{ $banner->link }}" target="_blank" class="text-blue-600 font-medium hover:underline inline-flex items-center gap-1.5">
                                    {{ $banner->link }} <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                                </a>
                            @else
                                <span class="text-gray-400 italic">Tidak ada link</span>
                            @endif
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Status Tampil</h3>
                            @if($banner->is_active)
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-green-50 text-green-600 text-sm font-bold border border-green-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Aktif
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-gray-100 text-gray-500 text-sm font-bold border border-gray-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span> Draft
                                </span>
                            @endif
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Urutan Tampil</h3>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-gray-50 border border-gray-200 text-gray-900 font-bold text-lg">
                                {{ $banner->order }}
                            </span>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Terakhir Diperbarui</h3>
                            <p class="text-gray-900 font-medium">{{ $banner->updated_at->isoFormat('D MMMM YYYY, HH:mm') }}</p>
                            <p class="text-xs text-gray-500 mt-1">{{ $banner->updated_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection