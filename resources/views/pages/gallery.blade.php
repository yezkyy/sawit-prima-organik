@extends('layouts.app')

@section('title', 'Galeri - Sawit Prima Organik')

@section('content')
    <!-- Header -->
    <section class="relative bg-primary pt-48 pb-32 overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10 bg-pattern"></div>
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent/10 rounded-full blur-[120px] -mr-32 -mt-32"></div>
        
        <div class="container-custom relative z-10 text-white text-center">
            <div data-aos="zoom-in">
                <div class="inline-block px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-xs font-bold uppercase tracking-widest text-accent mb-8">Visual Journey</div>
                <h1 class="hero-title mb-8">Dokumentasi <span class="text-gradient-gold">Lapangan</span></h1>
                <p class="text-xl text-white/70 max-w-2xl mx-auto leading-relaxed">
                    Melihat lebih dekat aktivitas tim agronomis kami dan keberhasilan mitra petani di berbagai wilayah Indonesia.
                </p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="section-padding bg-background" x-data="{ currentCategory: 'Semua' }">
        <div class="container-custom">
            
            <!-- Filter Categories -->
            <div class="flex flex-wrap justify-center gap-3 mb-12" data-aos="fade-up">
                <button @click="currentCategory = 'Semua'" 
                        :class="currentCategory === 'Semua' ? 'bg-primary text-white shadow-lg' : 'bg-white text-gray-600 hover:bg-primary/5 hover:text-primary border border-gray-200'"
                        class="px-6 py-2.5 rounded-full font-bold text-sm transition-all duration-300">
                    Semua
                </button>
                @foreach($categories as $category)
                <button @click="currentCategory = '{{ $category }}'" 
                        :class="currentCategory === '{{ $category }}' ? 'bg-primary text-white shadow-lg' : 'bg-white text-gray-600 hover:bg-primary/5 hover:text-primary border border-gray-200'"
                        class="px-6 py-2.5 rounded-full font-bold text-sm transition-all duration-300">
                    {{ $category }}
                </button>
                @endforeach
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up">
                @forelse($galleries as $gallery)
                    <div x-show="currentCategory === 'Semua' || currentCategory === '{{ $gallery->category }}'"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform scale-95"
                         x-transition:enter-end="opacity-100 transform scale-100"
                         class="group relative overflow-hidden rounded-[2.5rem] bg-white p-4 shadow-soft border border-gray-100 hover:border-primary/20 transition-all duration-500 block">
                        <a href="{{ asset('storage/' . $gallery->image) }}" data-fancybox="gallery" data-caption="{{ $gallery->title }} - {{ $gallery->category }}">
                            <div class="relative overflow-hidden rounded-[1.8rem] aspect-square">
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title ?? 'Dokumentasi Sawit Prima' }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
                                    <span class="text-accent text-xs font-bold uppercase tracking-widest mb-1">{{ $gallery->category }}</span>
                                    <p class="text-white font-bold text-lg leading-tight">{{ $gallery->title ?? 'Kegiatan Lapangan' }}</p>
                                </div>
                                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-all duration-500 transform scale-50 group-hover:scale-100">
                                    <i class="fa-solid fa-expand text-2xl"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-span-1 md:col-span-2 lg:col-span-3 flex flex-col items-center justify-center py-20 px-4 bg-white rounded-[2rem] shadow-sm border border-gray-100">
                        <div class="w-24 h-24 bg-primary/5 rounded-full flex items-center justify-center text-primary text-4xl mb-6">
                            <i class="fa-regular fa-images"></i>
                        </div>
                        <h4 class="text-2xl font-bold text-primary mb-2 text-center">Belum Ada Galeri</h4>
                        <p class="text-gray-500 text-center max-w-md">Dokumentasi kegiatan dan produk akan segera kami tampilkan di sini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection