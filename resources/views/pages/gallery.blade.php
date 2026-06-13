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

    <!-- Gallery Grid -->
    <section class="section-padding bg-background">
        <div class="container-custom">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up">
                @forelse($galleries as $gallery)
                    <div class="group relative overflow-hidden rounded-[2.5rem] bg-white p-4 shadow-soft border border-gray-100 hover:border-primary/20 transition-all duration-500">
                        <div class="relative overflow-hidden rounded-[1.8rem] aspect-square">
                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title ?? 'Dokumentasi Sawit Prima' }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                                <p class="text-white font-bold">{{ $gallery->title ?? 'Kegiatan Lapangan' }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    @php
                        $dummies = [
                            ['img' => asset('images/products/Sawit_Prima_Front.png'), 'title' => 'Kemasan Depan Sawit Prima'],
                            ['img' => asset('images/products/Sawit_Prima_Back.png'), 'title' => 'Kemasan Belakang Sawit Prima'],
                            ['img' => asset('images/products/Sawit_Prima_Front.png'), 'title' => 'Produk Organik Premium'],
                            ['img' => asset('images/products/Sawit_Prima_Back.png'), 'title' => 'Instruksi Penggunaan'],
                            ['img' => asset('images/products/Sawit_Prima_Front.png'), 'title' => 'Sawit Prima Organik'],
                            ['img' => asset('images/products/Sawit_Prima_Back.png'), 'title' => 'Nutrisi Lengkap Sawit'],
                        ];
                    @endphp
                    @foreach($dummies as $d)
                        <div class="group relative overflow-hidden rounded-[2.5rem] bg-white p-4 shadow-soft border border-gray-100 hover:border-primary/20 transition-all duration-500">
                            <div class="relative overflow-hidden rounded-[1.8rem] aspect-square bg-primary/5 flex items-center justify-center p-8">
                                <img src="{{ $d['img'] }}" alt="{{ $d['title'] }}" class="w-full h-auto object-contain transition duration-1000 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                                    <p class="text-white font-bold">{{ $d['title'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforelse
            </div>
        </div>
    </section>
@endsection