@extends('layouts.app')

@section('title', 'Sawit Prima Organik - Pupuk Organik Premium Kelapa Sawit')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[85vh] flex items-center overflow-hidden bg-primary pt-24 lg:pt-32 pb-24 lg:pb-32">
        <!-- Background Pattern -->
        <div class="absolute inset-0 z-0 opacity-10 bg-pattern"></div>
        
        @if(isset($banners) && $banners->count() > 1)
            <!-- Swiper Slider -->
            <div class="swiper banner-swiper w-full h-full relative z-10">
                <div class="swiper-wrapper">
                    @foreach($banners as $banner)
                    <div class="swiper-slide h-auto">
                        <div class="container-custom relative z-10 flex items-center h-full pt-8">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center w-full">
                                <!-- Hero Content -->
                                <div class="text-white order-2 lg:order-1" data-aos="fade-right">
                                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-8">
                                        <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                                        <span class="text-xs font-bold tracking-widest uppercase">Premium Bio-Technology</span>
                                    </div>
                                    
                                    <h1 class="hero-title mb-8 text-4xl lg:text-6xl font-black leading-tight">
                                        {{ $banner->title }}
                                    </h1>
                                    
                                    <p class="text-lg md:text-xl text-white/70 mb-12 max-w-xl leading-relaxed">
                                        {{ $banner->description }}
                                    </p>
                                    
                                    <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
                                        <a href="{{ $banner->link ?? 'https://wa.me/' . ($site_settings['contact_whatsapp'] ?? '6281234567890') }}" class="btn-secondary px-10 py-5 text-lg font-bold shadow-2xl">
                                            {{ $banner->link ? 'Selengkapnya' : 'Konsultasi Gratis' }} <i class="fas fa-arrow-right ml-2"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Product Showcase (Hero) -->
                                <div class="relative order-1 lg:order-2" data-aos="fade-left">
                                    <div class="relative z-10 hero-image">
                                        <div class="absolute inset-0 bg-accent/20 blur-[150px] rounded-full"></div>
                                        <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}" class="relative z-10 w-full max-w-[500px] mx-auto drop-shadow-[0_35px_35px_rgba(0,0,0,0.5)] float-animation rounded-[2rem] object-cover aspect-video">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination-banner absolute bottom-10 left-0 w-full flex justify-center z-50"></div>
            </div>
        @else
            @php 
                $banner = isset($banners) && $banners->count() > 0 ? $banners->first() : null; 
            @endphp
            <div class="container-custom relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                    <!-- Hero Content -->
                    <div class="text-white order-2 lg:order-1" data-aos="fade-right">
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-8">
                            <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                            <span class="text-xs font-bold tracking-widest uppercase">Premium Bio-Technology</span>
                        </div>
                        
                        <h1 class="hero-title mb-8 text-4xl lg:text-6xl font-black leading-tight">
                            {!! $banner ? $banner->title : 'Pupuk Organik <br><span class="text-gradient-gold">Premium</span> <br>Khusus Kelapa Sawit' !!}
                        </h1>
                        
                        <p class="text-lg md:text-xl text-white/70 mb-12 max-w-xl leading-relaxed">
                            {{ $banner ? $banner->description : 'Solusi modern untuk meningkatkan produktivitas TBS dengan teknologi bio-nutrisi lengkap. Hasil panen melimpah, tanah tetap sehat berkelanjutan.' }}
                        </p>
                        
                        <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
                            <a href="{{ $banner->link ?? 'https://wa.me/' . ($site_settings['contact_whatsapp'] ?? '6281234567890') }}" class="btn-secondary px-10 py-5 text-lg font-bold shadow-2xl">
                                {{ isset($banner->link) ? 'Selengkapnya' : 'Konsultasi Gratis' }} <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center text-accent text-xl backdrop-blur-md">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="text-sm">
                                    <p class="font-bold text-white">5,000+ Mitra Petani</p>
                                    <p class="text-white/50 text-xs">Telah Membuktikan Hasilnya</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Showcase (Hero) -->
                    <div class="relative order-1 lg:order-2" data-aos="fade-left">
                        <div class="relative z-10 hero-image">
                            <div class="absolute inset-0 bg-accent/20 blur-[150px] rounded-full"></div>
                            @if($banner)
                                <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}" class="relative z-10 w-full max-w-[500px] mx-auto drop-shadow-[0_35px_35px_rgba(0,0,0,0.5)] float-animation rounded-[2rem] object-cover aspect-video">
                            @else
                                <img src="{{ asset('images/products/Sawit_Prima_Front.png') }}" alt="Sawit Prima Organik Packaging" class="relative z-10 w-full max-w-[500px] mx-auto drop-shadow-[0_35px_35px_rgba(0,0,0,0.5)] float-animation" onerror="this.src='https://placehold.co/600x800/0F4D2E/D8A320?text=Sawit+Prima+Front'">
                                <!-- Floating Badges -->
                                <div class="absolute top-1/4 -left-4 lg:-left-12 z-20 glass-card p-4 rounded-2xl shadow-xl flex items-center gap-3 animate-bounce shadow-accent/10" style="animation-duration: 3s">
                                    <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white">
                                        <i class="fas fa-leaf"></i>
                                    </div>
                                    <div>
                                        <p class="text-[10px] text-gray-500 font-bold uppercase tracking-tighter">Formula</p>
                                        <p class="text-sm font-black text-primary">100% Organik</p>
                                    </div>
                                </div>
                                <div class="absolute bottom-1/4 -right-4 lg:-right-12 z-20 glass-card p-4 rounded-2xl shadow-xl flex items-center gap-3 animate-bounce shadow-primary/10" style="animation-duration: 4s">
                                    <div class="w-10 h-10 bg-accent rounded-lg flex items-center justify-center text-white">
                                        <i class="fas fa-flask"></i>
                                    </div>
                                    <div>
                                        <p class="text-[10px] text-gray-500 font-bold uppercase tracking-tighter">Diperkaya</p>
                                        <p class="text-sm font-black text-primary">Asam Humat</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>

    <!-- Trusted Section -->
    <section class="py-12 bg-white border-b border-gray-100">
        <div class="container-custom">
            <p class="text-center text-sm font-bold text-gray-400 uppercase tracking-[0.3em] mb-8">Pilihan Utama Perkebunan Sawit Modern</p>
            <div class="flex flex-wrap justify-center items-center gap-8 lg:gap-16">
                <div class="px-6 py-3 rounded-xl border border-gray-100 bg-gray-50/50 flex items-center gap-3 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                    <i class="fas fa-certificate text-primary"></i>
                    <span class="font-black text-primary tracking-tighter">KEMENTAN RI</span>
                </div>
                <div class="px-6 py-3 rounded-xl border border-gray-100 bg-gray-50/50 flex items-center gap-3 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                    <i class="fas fa-check-double text-primary"></i>
                    <span class="font-black text-primary tracking-tighter">SUCOFINDO</span>
                </div>
                <div class="px-6 py-3 rounded-xl border border-gray-100 bg-gray-50/50 flex items-center gap-3 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                    <i class="fas fa-mosque text-primary"></i>
                    <span class="font-black text-primary tracking-tighter">LPPOM MUI</span>
                </div>
                <div class="px-6 py-3 rounded-xl border border-gray-100 bg-gray-50/50 flex items-center gap-3 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300">
                    <i class="fas fa-leaf text-primary"></i>
                    <span class="font-black text-primary tracking-tighter">ORGANIC CERTIFIED</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Keunggulan Section -->
    <section class="section-padding bg-background relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-pattern opacity-5"></div>
        <div class="container-custom relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <span class="text-primary font-black tracking-widest uppercase text-sm">Why Choose Us</span>
                <h2 class="section-title text-primary mt-4">Kualitas Premium untuk Petani Sawit Profesional</h2>
                <div class="w-20 h-1.5 bg-accent mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $features = [
                        ['title' => 'Menyuburkan Tanah', 'desc' => 'Memperbaiki biologi dan struktur tanah yang rusak akibat penggunaan kimia berlebih.', 'icon' => 'fa-seedling', 'color' => 'bg-green-100 text-green-700'],
                        ['title' => 'Bobot Maksimal', 'desc' => 'Meningkatkan rendemen dan berat Tandan Buah Segar (TBS) secara signifikan.', 'icon' => 'fa-weight-hanging', 'color' => 'bg-yellow-100 text-yellow-700'],
                        ['title' => 'Akar Masif', 'desc' => 'Merangsang pertumbuhan akar serabut untuk penyerapan nutrisi yang lebih optimal.', 'icon' => 'fa-project-diagram', 'color' => 'bg-blue-100 text-blue-700'],
                        ['title' => 'Anti Hama Alami', 'desc' => 'Meningkatkan imunitas tanaman terhadap serangan penyakit dan jamur pathogen.', 'icon' => 'fa-shield-halved', 'color' => 'bg-red-100 text-red-700'],
                    ];
                @endphp

                @foreach($features as $f)
                <div class="card-premium group hover-lift" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="w-16 h-16 {{ $f['color'] }} rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:scale-110 transition-transform duration-500">
                        <i class="fas {{ $f['icon'] }}"></i>
                    </div>
                    <h4 class="font-heading text-2xl font-bold mb-4 text-primary">{{ $f['title'] }}</h4>
                    <p class="text-dark/60 leading-relaxed">{{ $f['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Product Showcase Section -->
    <section class="section-padding bg-white relative overflow-hidden">
        <div class="container-custom">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <span class="text-primary font-black tracking-widest uppercase text-sm">Our Premium Product</span>
                <h2 class="section-title text-primary mt-4">Solusi Nutrisi Kelapa Sawit Terintegrasi</h2>
                <div class="w-20 h-1.5 bg-accent mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                <!-- Product Front -->
                <div class="relative group" data-aos="fade-right">
                    <div class="absolute inset-0 bg-primary/5 rounded-[3rem] transition-all duration-700 group-hover:bg-primary/10"></div>
                    <div class="relative p-12 text-center">
                        <img src="{{ asset('images/products/Sawit_Prima_Front.png') }}" alt="Sawit Prima Front" class="w-full max-w-[400px] mx-auto drop-shadow-2xl transition-transform duration-700 group-hover:scale-105">
                        <div class="mt-8">
                            <h4 class="text-2xl font-black text-primary mb-2 tracking-tighter">Sisi Depan</h4>
                            <p class="text-dark/50 font-bold uppercase tracking-widest text-xs">Identitas & Brand Utama</p>
                        </div>
                    </div>
                </div>

                <!-- Product Back -->
                <div class="relative group" data-aos="fade-left">
                    <div class="absolute inset-0 bg-primary/5 rounded-[3rem] transition-all duration-700 group-hover:bg-primary/10"></div>
                    <div class="relative p-12 text-center">
                        <img src="{{ asset('images/products/Sawit_Prima_Back.png') }}" alt="Sawit Prima Back" class="w-full max-w-[400px] mx-auto drop-shadow-2xl transition-transform duration-700 group-hover:scale-105">
                        <div class="mt-8">
                            <h4 class="text-2xl font-black text-primary mb-2 tracking-tighter">Sisi Belakang</h4>
                            <p class="text-dark/50 font-bold uppercase tracking-widest text-xs">Instruksi & Kandungan Teknis</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-20 text-center" data-aos="fade-up">
                <a href="{{ route('product') }}" class="btn-primary px-12 py-5 text-xl font-black shadow-2xl hover:scale-105 transition-all">
                    Lihat Detail Produk <i class="fas fa-search-plus ml-3"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Makna Logo Section -->
    <section class="section-padding bg-white relative overflow-hidden">
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-accent/5 rounded-full -ml-32 -mb-32"></div>
        <div class="container-custom relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                <!-- Left: Big Logo -->
                <div class="relative" data-aos="fade-right">
                    <div class="absolute inset-0 bg-primary/5 blur-[100px] rounded-full"></div>
                    <div class="relative z-10 p-12 lg:p-20 bg-background rounded-[3rem] border border-gray-100 shadow-soft group">
                        <img src="{{ asset('images/logo.png') }}" alt="Sawit Prima Organik Logo" class="w-full h-auto transition-transform duration-700 group-hover:scale-105">
                    </div>
                </div>

                <!-- Right: Explanations -->
                <div data-aos="fade-left">
                    <span class="text-accent font-black tracking-widest uppercase text-sm">Visual Identity</span>
                    <h2 class="section-title text-primary mt-4 mb-8">Makna Logo <br>Sawit Prima</h2>
                    <p class="text-dark/60 text-lg mb-12 leading-relaxed">
                        Logo Sawit Prima Organik bukan sekadar identitas visual, melainkan representasi dari visi dan komitmen kami dalam memajukan industri perkebunan sawit Indonesia.
                    </p>

                    <div class="space-y-8">
                        <div class="flex gap-6 group">
                            <div class="w-14 h-14 shrink-0 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-xl transition-all duration-300 group-hover:bg-primary group-hover:text-white">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary text-xl mb-2">Daun Sawit</h4>
                                <p class="text-dark/50 leading-relaxed">Melambangkan pertumbuhan yang sehat, produktivitas tinggi, dan perkembangan perkebunan yang berkelanjutan.</p>
                            </div>
                        </div>

                        <div class="flex gap-6 group">
                            <div class="w-14 h-14 shrink-0 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-xl transition-all duration-300 group-hover:bg-primary group-hover:text-white">
                                <i class="fas fa-award"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary text-xl mb-2">Buah Sawit</h4>
                                <p class="text-dark/50 leading-relaxed">Melambangkan hasil panen yang berkualitas, melimpah, dan memberikan nilai ekonomi yang optimal bagi petani.</p>
                            </div>
                        </div>

                        <div class="flex gap-6 group">
                            <div class="w-14 h-14 shrink-0 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-xl transition-all duration-300 group-hover:bg-primary group-hover:text-white">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary text-xl mb-2">Lengkungan Tanah</h4>
                                <p class="text-dark/50 leading-relaxed">Melambangkan tanah yang subur, keseimbangan nutrisi, serta fondasi kuat bagi pertumbuhan tanaman sawit.</p>
                            </div>
                        </div>

                        <div class="flex gap-6 group">
                            <div class="w-14 h-14 shrink-0 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-xl transition-all duration-300 group-hover:bg-primary group-hover:text-white">
                                <i class="fas fa-font"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary text-xl mb-2">Tipografi Sawit Prima</h4>
                                <p class="text-dark/50 leading-relaxed">Mencerminkan kualitas produk yang terpercaya, profesional, modern, dan berorientasi pada hasil.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Showcase Spotlight -->
    <section class="section-padding bg-primary text-white overflow-hidden spotlight relative">
        <div class="absolute top-0 left-0 w-full h-24 bg-gradient-to-b from-white to-transparent opacity-5"></div>
        
        <div class="container-custom relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-32">
                <div class="w-full lg:w-1/2" data-aos="zoom-in">
                    <div class="relative">
                        <!-- Premium Glow Effect -->
                        <div class="absolute inset-0 bg-accent/30 blur-[150px] rounded-full opacity-50"></div>
                        
                        <img src="{{ asset('images/products/Sawit_Prima_Front.png') }}" alt="Sawit Prima Organik Product" class="relative z-10 w-full max-w-lg mx-auto drop-shadow-[0_50px_50px_rgba(0,0,0,0.6)] float-animation" onerror="this.src='https://placehold.co/600x800/0F4D2E/D8A320?text=Sawit+Prima+Front'">
                        
                        <!-- Floating Badges Small -->
                        <div class="absolute top-20 -right-4 lg:-right-8 z-20 glass-dark p-4 rounded-2xl border border-white/20 shadow-2xl backdrop-blur-xl" data-aos="fade-left" data-aos-delay="500">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-accent flex items-center justify-center text-xs">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] text-accent font-bold uppercase">Bio-Active</p>
                                    <p class="text-sm font-bold">Mikoriza Aktif</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute bottom-20 -left-4 lg:-left-8 z-20 glass-dark p-4 rounded-2xl border border-white/20 shadow-2xl backdrop-blur-xl" data-aos="fade-right" data-aos-delay="700">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-secondary flex items-center justify-center text-xs">
                                    <i class="fas fa-shield-virus"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] text-accent font-bold uppercase">Protection</p>
                                    <p class="text-sm font-bold">Trichoderma</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="w-full lg:w-1/2" data-aos="fade-left">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="inline-block px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-xs font-bold uppercase tracking-widest text-accent">Product Anatomy</div>
                        <div class="inline-block px-4 py-1.5 rounded-full bg-accent/20 border border-accent/30 text-[10px] font-black uppercase tracking-widest text-accent">
                            NIB: 12062060102849
                        </div>
                    </div>
                    <h2 class="section-title text-white mb-8">Kandungan Nutrisi Hayati Terlengkap</h2>
                    <p class="text-white/70 text-lg mb-12 leading-relaxed">
                        Setiap gram Sawit Prima Organik mengandung milyaran mikroba aktif dan mineral organik yang dirancang khusus untuk kebutuhan spesifik kelapa sawit di berbagai fase pertumbuhan.
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-all duration-300">
                            <div class="w-12 h-12 rounded-xl bg-accent/20 flex items-center justify-center text-accent mb-4 group-hover:scale-110 transition-transform">
                                <i class="fas fa-vial"></i>
                            </div>
                            <h5 class="font-bold text-white mb-2">Asam Humat</h5>
                            <p class="text-sm text-white/50">Meningkatkan kapasitas tukar kation tanah dan mengikat nutrisi agar tidak tercuci.</p>
                        </div>
                        <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-all duration-300">
                            <div class="w-12 h-12 rounded-xl bg-accent/20 flex items-center justify-center text-accent mb-4 group-hover:scale-110 transition-transform">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <h5 class="font-bold text-white mb-2">Trichoderma Sp.</h5>
                            <p class="text-sm text-white/50">Agen hayati pelindung akar dari jamur Ganoderma yang mematikan.</p>
                        </div>
                        <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-all duration-300">
                            <div class="w-12 h-12 rounded-xl bg-accent/20 flex items-center justify-center text-accent mb-4 group-hover:scale-110 transition-transform">
                                <i class="fas fa-dna"></i>
                            </div>
                            <h5 class="font-bold text-white mb-2">Bacillus Sp.</h5>
                            <p class="text-sm text-white/50">Membantu melarutkan fosfat dan kalium yang terikat di dalam tanah.</p>
                        </div>
                        <div class="group p-6 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-all duration-300">
                            <div class="w-12 h-12 rounded-xl bg-accent/20 flex items-center justify-center text-accent mb-4 group-hover:scale-110 transition-transform">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <h5 class="font-bold text-white mb-2">Mikoriza</h5>
                            <p class="text-sm text-white/50">Memperluas area jangkauan serapan akar hingga 10x lipat lebih luas.</p>
                        </div>
                    </div>
                    
                    <div class="mt-12 flex flex-wrap items-center gap-6">
                        <div class="px-6 py-4 bg-white/10 rounded-2xl border border-white/10 backdrop-blur-md">
                            <p class="text-accent font-black text-2xl">C-Organik</p>
                            <p class="text-xs text-white/50 uppercase tracking-widest mt-1">Min. 15% Standard</p>
                        </div>
                        <div class="px-6 py-4 bg-white/10 rounded-2xl border border-white/10 backdrop-blur-md">
                            <p class="text-accent font-black text-2xl">pH 7.0</p>
                            <p class="text-xs text-white/50 uppercase tracking-widest mt-1">Optimal Neutrality</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="section-padding bg-white overflow-hidden">
        <div class="container-custom">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-12">
                <div class="text-center" data-aos="fade-up" data-aos-delay="0">
                    <div class="text-5xl lg:text-7xl font-black text-primary mb-4">
                        <span data-count="12">0</span>K+
                    </div>
                    <p class="text-gray-500 font-bold uppercase tracking-widest text-xs">Hektar Terlayani</p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-5xl lg:text-7xl font-black text-primary mb-4">
                        <span data-count="520">0</span>+
                    </div>
                    <p class="text-gray-500 font-bold uppercase tracking-widest text-xs">Kelompok Tani</p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-5xl lg:text-7xl font-black text-primary mb-4">
                        <span data-count="98">0</span>%
                    </div>
                    <p class="text-gray-500 font-bold uppercase tracking-widest text-xs">Tingkat Kepuasan</p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-5xl lg:text-7xl font-black text-primary mb-4">
                        <span data-count="15">0</span>+
                    </div>
                    <p class="text-gray-500 font-bold uppercase tracking-widest text-xs">Tahun Pengalaman</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="section-padding bg-background overflow-hidden">
        <div class="container-custom">
            <div class="flex flex-col lg:flex-row items-end justify-between mb-16 gap-8">
                <div class="max-w-2xl" data-aos="fade-right">
                    <div class="inline-block px-4 py-1.5 rounded-full bg-primary/10 border border-primary/20 text-xs font-bold uppercase tracking-widest text-primary mb-6">Real Success Stories</div>
                    <h2 class="section-title text-primary">Bukti Nyata di Lapangan</h2>
                </div>
                <div class="flex gap-4" data-aos="fade-left">
                    <button class="swiper-prev-test w-14 h-14 rounded-full border border-primary text-primary hover:bg-primary hover:text-white transition-all duration-300 flex items-center justify-center group">
                        <i class="fas fa-chevron-left group-hover:-translate-x-1 transition-transform"></i>
                    </button>
                    <button class="swiper-next-test w-14 h-14 rounded-full border border-primary text-primary hover:bg-primary hover:text-white transition-all duration-300 flex items-center justify-center group">
                        <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </div>
            </div>

            <div class="swiper testimonial-swiper pb-16" data-aos="fade-up">
                <div class="swiper-wrapper">
                    @forelse($testimonials as $t)
                    <div class="swiper-slide h-auto">
                        <div class="bg-white p-10 rounded-[2rem] shadow-soft h-full flex flex-col border border-gray-100 hover:border-primary/20 transition-colors duration-500">
                            <div class="flex text-accent gap-1 mb-8">
                                @for($i=0; $i<5; $i++)
                                <i class="fas fa-star text-sm"></i>
                                @endfor
                            </div>
                            <blockquote class="text-lg text-dark/70 italic mb-10 flex-grow leading-relaxed">
                                "{{ $t->content }}"
                            </blockquote>
                            <div class="flex items-center gap-5 pt-8 border-t border-gray-100">
                                <div class="w-14 h-14 rounded-2xl bg-primary/10 overflow-hidden shadow-inner flex-shrink-0 flex items-center justify-center text-primary text-xl">
                                    @if(isset($t->image) && $t->image)
                                        <img src="{{ asset('storage/' . $t->image) }}" alt="{{ $t->name }}" class="w-full h-full object-cover">
                                    @else
                                        <i class="fas fa-user"></i>
                                    @endif
                                </div>
                                <div>
                                    <h5 class="font-bold text-primary text-lg leading-tight">{{ $t->name }}</h5>
                                    <p class="text-sm text-gray-500 font-medium">{{ $t->location }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="w-full flex flex-col items-center justify-center py-16 px-4">
                        <div class="w-24 h-24 bg-primary/5 rounded-full flex items-center justify-center text-primary text-4xl mb-6">
                            <i class="fa-regular fa-comments"></i>
                        </div>
                        <h4 class="text-2xl font-bold text-primary mb-2 text-center">Belum Ada Testimoni</h4>
                        <p class="text-gray-500 text-center max-w-md">Jadilah yang pertama membuktikan kehebatan pupuk organik Sawit Prima. Kami menantikan kisah sukses Anda!</p>
                    </div>
                    @endforelse
                </div>
                @if($testimonials->count() > 0)
                <div class="swiper-pagination-test flex justify-center mt-8"></div>
                @endif
            </div>
        </div>
    </section>

    <!-- Gallery Preview -->
    <section class="section-padding bg-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full -mr-32 -mt-32"></div>
        
        <div class="container-custom relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <div class="inline-block px-4 py-1.5 rounded-full bg-primary/10 border border-primary/20 text-xs font-bold uppercase tracking-widest text-primary mb-6">Our Activity</div>
                <h2 class="section-title text-primary">Dokumentasi Lapangan</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up">
                @forelse($galleries as $gallery)
                <div class="group relative overflow-hidden rounded-[2rem] aspect-[4/5] shadow-2xl bg-primary/5 p-8 flex items-center justify-center {{ $loop->iteration == 2 ? 'lg:mt-12' : '' }}">
                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-auto object-contain transition duration-1000 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-end p-10">
                        <div>
                            <p class="text-accent font-bold text-xs uppercase tracking-widest mb-2">{{ $gallery->category }}</p>
                            <h4 class="text-white font-bold text-xl">{{ $gallery->title }}</h4>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 flex flex-col items-center justify-center py-16 px-4 bg-gray-50 rounded-[2rem] border border-gray-100">
                    <div class="w-24 h-24 bg-primary/5 rounded-full flex items-center justify-center text-primary text-4xl mb-6">
                        <i class="fa-regular fa-images"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-primary mb-2 text-center">Belum Ada Dokumentasi</h4>
                    <p class="text-gray-500 text-center max-w-md">Dokumentasi kegiatan dan produk akan segera kami tampilkan di sini.</p>
                </div>
                @endforelse
            </div>
            
            <div class="text-center mt-20">
                <a href="{{ route('gallery') }}" class="inline-flex items-center gap-4 px-8 py-4 rounded-xl border-2 border-primary text-primary font-bold hover:bg-primary hover:text-white transition-all duration-300">
                    Eksplor Galeri Kegiatan <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Rekomendasi Pemakaian Section -->
    <section class="section-padding bg-background relative overflow-hidden">
        <div class="container-custom relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <span class="text-primary font-black tracking-widest uppercase text-sm">Panduan Aplikasi</span>
                <h2 class="section-title text-primary mt-4">Rekomendasi Pemakaian</h2>
                <div class="w-20 h-1.5 bg-accent mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">
                <!-- 1 Pcs Info -->
                <div class="bg-white p-10 rounded-[3rem] shadow-soft border border-gray-100 flex flex-col md:flex-row gap-8 items-center group hover:border-primary/20 transition-all duration-500" data-aos="fade-right">
                    <div class="w-32 h-32 shrink-0 bg-primary/5 rounded-[2rem] flex items-center justify-center text-primary text-5xl group-hover:scale-110 transition-transform duration-500">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-black text-primary mb-4">Kemasan Satuan (Pcs)</h4>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            1 pcs Sawit Prima Organik memiliki berat <span class="font-bold text-primary">2 Kg</span>. Direkomendasikan untuk memenuhi kebutuhan nutrisi sekitar <span class="font-bold text-primary">8 pokok</span> kelapa sawit.
                        </p>
                        <div class="flex items-center gap-4 text-sm font-bold text-primary/60">
                            <span class="px-4 py-2 bg-primary/5 rounded-lg">2 Kg / Pcs</span>
                            <span class="px-4 py-2 bg-primary/5 rounded-lg">± 8 Pokok Sawit</span>
                        </div>
                    </div>
                </div>

                <!-- 1 Karung Info -->
                <div class="bg-white p-10 rounded-[3rem] shadow-soft border border-gray-100 flex flex-col md:flex-row gap-8 items-center group hover:border-primary/20 transition-all duration-500" data-aos="fade-left">
                    <div class="w-32 h-32 shrink-0 bg-accent/10 rounded-[2rem] flex items-center justify-center text-accent text-5xl group-hover:scale-110 transition-transform duration-500">
                        <i class="fas fa-truck-loading"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-black text-primary mb-4">Kemasan Karung (Bag)</h4>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            1 karung berisi <span class="font-bold text-primary">30 pcs</span> dengan total berat <span class="font-bold text-primary">60 Kg</span>. Sangat efektif untuk mencukupi kebutuhan sekitar <span class="font-bold text-primary">2 hektar</span> lahan kelapa sawit.
                        </p>
                        <div class="flex items-center gap-4 text-sm font-bold text-primary/60">
                            <span class="px-4 py-2 bg-accent/5 rounded-lg text-accent">60 Kg / Karung</span>
                            <span class="px-4 py-2 bg-accent/5 rounded-lg text-accent">± 2 Hektar Lahan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pilihan Pembelian Section -->
    <section class="section-padding bg-white relative overflow-hidden">
        <div class="container-custom">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <span class="text-primary font-black tracking-widest uppercase text-sm">Purchase Options</span>
                <h2 class="section-title text-primary mt-4">Pilihan Pembelian</h2>
                <div class="w-20 h-1.5 bg-accent mx-auto mt-6 rounded-full"></div>
                <p class="mt-8 text-gray-500">Kami menyediakan kemudahan bagi petani dan pengusaha perkebunan dengan program pembayaran yang fleksibel.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto">
                <!-- Pembelian Tunai -->
                <div class="relative group" data-aos="fade-right">
                    <div class="absolute inset-0 bg-primary/5 rounded-[3.5rem] rotate-3 transition-transform duration-500 group-hover:rotate-0"></div>
                    <div class="relative bg-white p-10 lg:p-14 rounded-[3.5rem] border border-gray-100 shadow-xl overflow-hidden flex flex-col h-full">
                        <div class="mb-8">
                            <span class="px-4 py-1.5 rounded-full bg-primary/10 text-primary text-xs font-black uppercase tracking-widest">Pembelian Tunai</span>
                        </div>
                        <h4 class="text-3xl font-black text-primary mb-2">Harga Tunai</h4>
                        <div class="flex items-baseline gap-2 mb-8">
                            <span class="text-sm font-bold text-gray-400">Mulai</span>
                            <span class="text-4xl font-black text-primary">Rp 2.000.000</span>
                            <span class="text-sm font-bold text-gray-400">/ Karung</span>
                        </div>
                        
                        <ul class="space-y-5 mb-12 flex-grow">
                            <li class="flex items-center gap-4 text-gray-600">
                                <i class="fas fa-check-circle text-primary"></i>
                                <span>Isi 30 pcs (Total 60 Kg)</span>
                            </li>
                            <li class="flex items-center gap-4 text-gray-600">
                                <i class="fas fa-check-circle text-primary"></i>
                                <span>Estimasi untuk ± 2 Hektar</span>
                            </li>
                            <li class="flex items-center gap-4 text-gray-600">
                                <i class="fas fa-check-circle text-primary"></i>
                                <span>Pupuk Organik Premium</span>
                            </li>
                        </ul>

                        <a href="https://wa.me/{{ $site_settings['contact_whatsapp'] ?? '6281373493884' }}" class="btn-primary w-full justify-center py-5 rounded-2xl font-bold">
                            Pesan Tunai Sekarang
                        </a>
                    </div>
                </div>

                <!-- Pembelian Kredit -->
                <div class="relative group" data-aos="fade-left">
                    <div class="absolute inset-0 bg-accent/10 rounded-[3.5rem] -rotate-3 transition-transform duration-500 group-hover:rotate-0"></div>
                    <div class="relative bg-white p-10 lg:p-14 rounded-[3.5rem] border border-gray-100 shadow-xl overflow-hidden flex flex-col h-full">
                        <div class="absolute top-8 right-8">
                            <span class="px-4 py-1.5 rounded-full bg-accent text-white text-[10px] font-black uppercase tracking-widest shadow-lg animate-pulse">Program Kredit Tersedia</span>
                        </div>
                        <div class="mb-8">
                            <span class="px-4 py-1.5 rounded-full bg-accent/10 text-accent text-xs font-black uppercase tracking-widest">Pembelian Kredit</span>
                        </div>
                        <h4 class="text-3xl font-black text-primary mb-2">Harga Kredit</h4>
                        <div class="flex items-baseline gap-2 mb-8">
                            <span class="text-4xl font-black text-primary">Rp 2.400.000</span>
                            <span class="text-sm font-bold text-gray-400">/ Karung</span>
                        </div>
                        
                        <ul class="space-y-5 mb-12 flex-grow">
                            <li class="flex items-center gap-4 text-gray-600">
                                <i class="fas fa-check-circle text-accent"></i>
                                <span class="font-bold text-primary">Tenor 5 Bulan</span>
                            </li>
                            <li class="flex items-center gap-4 text-gray-600">
                                <i class="fas fa-check-circle text-accent"></i>
                                <span>Isi 30 pcs (Total 60 Kg)</span>
                            </li>
                            <li class="flex items-center gap-4 text-gray-600">
                                <i class="fas fa-check-circle text-accent"></i>
                                <span>Estimasi untuk ± 2 Hektar</span>
                            </li>
                        </ul>

                        <a href="https://wa.me/{{ $site_settings['contact_whatsapp'] ?? '6281373493884' }}" class="btn-secondary w-full justify-center py-5 rounded-2xl font-bold">
                            Ajukan Kredit Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-padding bg-background relative overflow-hidden">
        <div class="container-custom relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <span class="text-primary font-black tracking-widest uppercase text-sm">FAQ</span>
                <h2 class="section-title text-primary mt-4">Pertanyaan Umum</h2>
                <div class="w-20 h-1.5 bg-accent mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="max-w-4xl mx-auto space-y-4" data-aos="fade-up">
                @php
                    $faqs = [
                        ['q' => 'Apa keunggulan utama Sawit Prima Organik dibanding pupuk lain?', 'a' => 'Sawit Prima Organik mengandung kombinasi Asam Humat, Mikoriza, Trichoderma, dan Bacillus Sp. yang tidak hanya memberi nutrisi tapi juga memperbaiki struktur tanah dan melindungi akar dari penyakit seperti Ganoderma.'],
                        ['q' => 'Berapa lama hasil pemupukan mulai terlihat?', 'a' => 'Secara visual, kesehatan daun dan kecepatan pertumbuhan akar mulai terlihat dalam 2-4 minggu. Untuk bobot TBS, hasil signifikan biasanya terlihat pada siklus panen berikutnya setelah pemakaian rutin.'],
                        ['q' => 'Apakah aman digunakan bersamaan dengan pupuk kimia?', 'a' => 'Sangat aman dan justru direkomendasikan. Sawit Prima Organik membantu meningkatkan efisiensi penyerapan pupuk kimia (NPK) sehingga Anda bisa mengurangi dosis pupuk kimia secara bertahap.'],
                        ['q' => 'Bagaimana cara pengajuan program kredit 5 bulan?', 'a' => 'Anda cukup menghubungi tim administrasi kami via WhatsApp dengan melampirkan identitas diri dan lokasi kebun. Tim kami akan melakukan verifikasi singkat sebelum menyetujui pengajuan kredit Anda.'],
                        ['q' => 'Di mana saya bisa mendapatkan produk ini?', 'a' => 'Kami melayani pengiriman ke seluruh wilayah Indonesia, khususnya area Riau dan sekitarnya. Pemesanan dapat dilakukan langsung melalui website ini atau WhatsApp resmi kami.'],
                    ];
                @endphp

                @foreach($faqs as $faq)
                <div x-data="{ open: false }" class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <button @click="open = !open" class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                        <span class="font-bold text-primary text-lg">{{ $faq['q'] }}</span>
                        <i class="fas fa-chevron-down text-primary transition-transform duration-300" :class="open ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="open" x-collapse x-cloak>
                        <div class="px-8 pb-8 text-gray-600 leading-relaxed">
                            {{ $faq['a'] }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 lg:py-32 overflow-hidden">
        <div class="container-custom">
            <div class="relative rounded-[3.5rem] p-12 lg:p-24 overflow-hidden shadow-[0_50px_100px_rgba(15,77,46,0.3)]">
                <!-- Premium Background -->
                <div class="absolute inset-0 bg-primary"></div>
                <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/20 rounded-full blur-[120px] -mr-48 -mt-48 animate-pulse"></div>
                <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-secondary/20 rounded-full blur-[100px] -ml-40 -mb-40"></div>
                <div class="absolute inset-0 opacity-10 bg-pattern"></div>

                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center" data-aos="zoom-in">
                    <div class="text-center lg:text-left">
                        <div class="inline-block px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-xs font-bold uppercase tracking-widest text-accent mb-8">Ready to Boost Your Yield?</div>
                        <h2 class="text-4xl md:text-6xl font-heading font-black text-white mb-10 leading-[1.1]">
                            Konsultasikan Kebutuhan <span class="text-gradient-gold">Pupuk</span> Kebun Sawit Anda
                        </h2>
                        <p class="text-xl text-white/70 mb-14 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                            Tim ahli kami siap membantu Anda menghitung kebutuhan nutrisi yang tepat untuk mengoptimalkan hasil panen kebun sawit Anda.
                        </p>

                        <!-- Trust Elements -->
                        <div class="flex flex-wrap justify-center lg:justify-start gap-6 lg:gap-8 mb-16">
                            <div class="flex items-center gap-3 text-white/90 font-bold">
                                <i class="fas fa-check-circle text-accent text-xl"></i>
                                <span>Tersedia Program Kredit</span>
                            </div>
                            <div class="flex items-center gap-3 text-white/90 font-bold">
                                <i class="fas fa-check-circle text-accent text-xl"></i>
                                <span>Pekanbaru - Riau</span>
                            </div>
                            <div class="flex items-center gap-3 text-white/90 font-bold">
                                <i class="fas fa-check-circle text-accent text-xl"></i>
                                <span>Respon Cepat</span>
                            </div>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row justify-center lg:justify-start items-center gap-8">
                            <a href="https://wa.me/{{ $site_settings['contact_whatsapp'] ?? '6281373493884' }}" target="_blank" class="w-full sm:w-auto bg-white text-primary px-12 py-6 rounded-2xl text-xl font-black shadow-2xl hover:scale-105 transition-all duration-300 flex items-center justify-center gap-4">
                                <i class="fab fa-whatsapp text-2xl"></i> Hubungi WhatsApp
                            </a>
                            <a href="{{ route('product') }}" class="text-white font-bold border-b-2 border-accent hover:text-accent transition-colors duration-300">Lihat Detail Produk</a>
                        </div>
                    </div>

                    <!-- CTA Product Image -->
                    <div class="hidden lg:block relative">
                        <div class="absolute inset-0 bg-accent/20 blur-[100px] rounded-full"></div>
                        <img src="{{ asset('images/products/Sawit_Prima_Front.png') }}" alt="Sawit Prima Organik Pack" class="relative z-10 w-full max-w-[350px] mx-auto drop-shadow-[0_35px_35px_rgba(0,0,0,0.5)] rotate-6 group-hover:rotate-0 transition-transform duration-700">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Initialize Swiper for Banners
        new Swiper('.banner-swiper', {
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination-banner',
                clickable: true,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            }
        });

        // Initialize Swiper for Testimonials
        new Swiper('.testimonial-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination-test',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-next-test',
                prevEl: '.swiper-prev-test',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });

        // Initialize CountUp for Hero and Stats
        document.querySelectorAll('[data-count]').forEach((el) => {
            const count = parseInt(el.getAttribute('data-count'));
            const counter = new countUp.CountUp(el, count, {
                duration: 2.5,
                useEasing: true,
                useGrouping: true,
            });
            
            if (!counter.error) {
                // Using AOS to trigger counter when visible
                el.addEventListener('aos:in', () => {
                    counter.start();
                });
            } else {
                console.error(counter.error);
            }
        });
    });
</script>
@endpush