@extends('layouts.admin')

@section('title', 'Detail Testimoni')

@section('content')
    <!-- Header Section -->
    <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <a href="{{ route('admin.testimonials.index') }}" class="inline-flex items-center text-sm font-semibold text-gray-500 hover:text-primary mb-2 transition-colors">
                <i class="fa-solid fa-arrow-left mr-2"></i> Kembali ke Daftar
            </a>
            <h1 class="font-heading text-2xl font-bold text-gray-900">Detail Testimoni</h1>
            <p class="text-gray-500 text-sm mt-1">Informasi lengkap ulasan pelanggan.</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn-primary py-2.5 px-5 text-sm shadow-lg shadow-primary/20">
                <i class="fa-solid fa-pen-to-square mr-2"></i> Edit Testimoni
            </a>
            <form id="delete-form-{{ $testimonial->id }}" action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="button" onclick="confirmDelete('delete-form-{{ $testimonial->id }}', 'Testimoni {{ $testimonial->name }}')" class="btn-secondary py-2.5 px-5 text-sm shadow-lg shadow-accent/20 bg-red-500 hover:bg-red-600 border-none ring-0">
                    <i class="fa-solid fa-trash-can mr-2"></i> Hapus
                </button>
            </form>
        </div>
    </div>

    <!-- Detail Card -->
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden max-w-5xl">
        <div class="p-8 lg:p-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                
                <!-- Avatar Preview -->
                <div class="lg:col-span-1 flex flex-col items-center">
                    <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-6 self-start w-full">Profil Pelanggan</h3>
                    @if($testimonial->image)
                        <div class="w-48 h-48 rounded-full overflow-hidden shadow-lg border-4 border-white ring-2 ring-gray-100 mb-6">
                            <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="w-full h-full object-cover">
                        </div>
                    @else
                        <div class="w-48 h-48 rounded-full bg-gradient-to-br from-gray-100 to-gray-200 text-gray-400 flex items-center justify-center font-bold text-6xl shadow-lg border-4 border-white ring-2 ring-gray-100 mb-6">
                            {{ substr($testimonial->name, 0, 1) }}
                        </div>
                    @endif
                    <div class="text-center">
                        <h2 class="text-2xl font-bold text-gray-900">{{ $testimonial->name }}</h2>
                        <p class="text-gray-500 mt-1 flex items-center justify-center gap-1.5">
                            <i class="fa-solid fa-location-dot text-gray-400"></i> {{ $testimonial->location ?: 'Tidak ada lokasi' }}
                        </p>
                    </div>
                </div>

                <!-- Info Details -->
                <div class="lg:col-span-2 space-y-8">
                    <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 relative">
                        <i class="fa-solid fa-quote-left text-4xl text-gray-200 absolute top-4 left-4"></i>
                        <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-3 relative z-10">Ulasan Pelanggan</h3>
                        <p class="text-gray-700 text-lg italic leading-relaxed relative z-10 pl-2">"{{ $testimonial->content }}"</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Status Tampil</h3>
                            @if($testimonial->is_active)
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-green-50 text-green-600 text-sm font-bold border border-green-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Ditampilkan
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-gray-100 text-gray-500 text-sm font-bold border border-gray-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span> Disembunyikan
                                </span>
                            @endif
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Terakhir Diperbarui</h3>
                            <p class="text-gray-900 font-medium">{{ $testimonial->updated_at->isoFormat('D MMMM YYYY, HH:mm') }}</p>
                            <p class="text-xs text-gray-500 mt-1">{{ $testimonial->updated_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection