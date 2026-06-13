@extends('layouts.app')

@section('title', 'Sawit Prima Organik - Pupuk Organik Premium Kelapa Sawit')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[85vh] flex items-center overflow-hidden bg-primary pt-24 lg:pt-32 pb-24 lg:pb-32">
        <!-- Background Pattern -->
        <div class="absolute inset-0 z-0 opacity-10 bg-pattern"></div>
        
        <div class="container-custom relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                <!-- Hero Content -->
                <div class="text-white order-2 lg:order-1" data-aos="fade-right">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-8">
                        <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                        <span class="text-xs font-bold tracking-widest uppercase">Premium Bio-Technology</span>
                    </div>
                    
                    <h1 class="hero-title mb-8">
                        Solusi Panen <br>
                        <span class="text-gradient-gold">Melimpah</span> <br>
                        Berkelanjutan
                    </h1>
                    
                    <p class="text-lg md:text-xl text-white/70 mb-12 max-w-xl leading-relaxed">
                        Sawit Prima Organik menghadirkan formula premium yang diperkaya Asam Humat dan Konsorsium Mikroba Aktif untuk meningkatkan bobot TBS dan kesehatan tanah secara instan.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-6 items-start sm:items-center">
                        <a href="{{ route('contact') }}" class="btn-secondary px-10 py-5 text-lg font-bold shadow-2xl">
                            Konsultasi Gratis <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                        <div class="flex items-center gap-4">
                            <div class="flex -space-x-3">
                                <img src="https://i.pravatar.cc/150?u=1" class="w-10 h-10 rounded-full border-2 border-primary">
                                <img src="https://i.pravatar.cc/150?u=2" class="w-10 h-10 rounded-full border-2 border-primary">
                                <img src="https://i.pravatar.cc/150?u=3" class="w-10 h-10 rounded-full border-2 border-primary">
                            </div>
                            <div class="text-sm">
                                <p class="font-bold text-white">5,000+ Petani</p>
                                <p class="text-white/50 text-xs">Puas dengan Hasilnya</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Showcase (Hero) -->
                <div class="relative order-1 lg:order-2" data-aos="fade-left">
                    <div class="relative z-10 hero-image">
                        <div class="absolute inset-0 bg-accent/20 blur-[120px] rounded-full"></div>
                        <img src="{{ asset('images/products/packaging-mockup.png') }}" alt="Sawit Prima Organik Packaging" class="relative z-10 w-full max-w-[450px] mx-auto drop-shadow-[0_35px_35px_rgba(0,0,0,0.4)] float-animation" onerror="this.src='https://placehold.co/600x800/0F4D2E/D8A320?text=Produk+Sawit+Prima'">
                        
                        <!-- Floating Badges -->
                        <div class="absolute top-1/4 -left-4 lg:-left-12 glass-card p-4 rounded-2xl shadow-xl flex items-center gap-3 animate-bounce shadow-accent/10" style="animation-duration: 3s">
                            <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <div>
                                <p class="text-[10px] text-gray-500 font-bold uppercase tracking-tighter">Formula</p>
                                <p class="text-sm font-black text-primary">100% Organik</p>
                            </div>
                        </div>

                        <div class="absolute bottom-1/4 -right-4 lg:-right-12 glass-card p-4 rounded-2xl shadow-xl flex items-center gap-3 animate-bounce shadow-primary/10" style="animation-duration: 4s">
                            <div class="w-10 h-10 bg-accent rounded-lg flex items-center justify-center text-white">
                                <i class="fas fa-flask"></i>
                            </div>
                            <div>
                                <p class="text-[10px] text-gray-500 font-bold uppercase tracking-tighter">Diperkaya</p>
                                <p class="text-sm font-black text-primary">Asam Humat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted Section -->
    <section class="py-12 bg-white border-b border-gray-100">
        <div class="container-custom">
            <p class="text-center text-sm font-bold text-gray-400 uppercase tracking-[0.3em] mb-8">Pilihan Utama Perkebunan Sawit Modern</p>
            <div class="flex flex-wrap justify-center items-center gap-12 lg:gap-24 opacity-40 grayscale">
                <img src="https://placehold.co/150x50/white/0F4D2E?text=KEMENTAN" alt="Logo 1" class="h-10">
                <img src="https://placehold.co/150x50/white/0F4D2E?text=SUCOFINDO" alt="Logo 2" class="h-10">
                <img src="https://placehold.co/150x50/white/0F4D2E?text=LPPOM+MUI" alt="Logo 3" class="h-10">
                <img src="https://placehold.co/150x50/white/0F4D2E?text=ORGANIC" alt="Logo 4" class="h-10">
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

    <!-- Product Showcase Spotlight -->
    <section class="section-padding bg-primary text-white overflow-hidden spotlight relative">
        <div class="absolute top-0 left-0 w-full h-24 bg-gradient-to-b from-white to-transparent opacity-5"></div>
        
        <div class="container-custom relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-32">
                <div class="w-full lg:w-1/2" data-aos="zoom-in">
                    <div class="relative">
                        <!-- Premium Glow Effect -->
                        <div class="absolute inset-0 bg-accent/30 blur-[150px] rounded-full opacity-50"></div>
                        
                        <img src="{{ asset('images/products/packaging-front.png') }}" alt="Sawit Prima Organik Product" class="relative z-10 w-full max-w-lg mx-auto drop-shadow-[0_50px_50px_rgba(0,0,0,0.5)] float-animation" onerror="this.src='https://placehold.co/600x800/0F4D2E/D8A320?text=Premium+Packaging'">
                        
                        <!-- Floating Badges Small -->
                        <div class="absolute top-20 -right-4 lg:-right-8 glass-dark p-4 rounded-2xl border border-white/20 shadow-2xl backdrop-blur-xl" data-aos="fade-left" data-aos-delay="500">
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
                        
                        <div class="absolute bottom-20 -left-4 lg:-left-8 glass-dark p-4 rounded-2xl border border-white/20 shadow-2xl backdrop-blur-xl" data-aos="fade-right" data-aos-delay="700">
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
                    <div class="inline-block px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-xs font-bold uppercase tracking-widest text-accent mb-6">Product Anatomy</div>
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
                    @php
                        $displayTestimonials = $testimonials->count() > 0 ? $testimonials : collect([
                            (object)[
                                'id' => 1,
                                'name' => 'H. Ahmad Subarjo',
                                'location' => 'Riau, Pekanbaru',
                                'content' => 'Setelah pakai Sawit Prima Organik, hasil panen saya naik dari 1.8 ton jadi 2.4 ton per hektar. Berat janjangannya benar-benar terasa bedanya.',
                                'image' => null
                            ],
                            (object)[
                                'id' => 2,
                                'name' => 'Bpk. Nyoman Weda',
                                'location' => 'Kalimantan Barat',
                                'content' => 'Tanah yang dulunya keras sekarang jadi lebih gembur. Akar sawit jadi lebih sehat dan buah tidak gampang trek di musim kemarau.',
                                'image' => null
                            ],
                            (object)[
                                'id' => 3,
                                'name' => 'Ibu Siti Aminah',
                                'location' => 'Sumatera Selatan',
                                'content' => 'Sangat praktis aplikasinya. Campuran dengan kimia juga aman, malah jadi lebih hemat biaya pupuk keseluruhan sampai 30%.',
                                'image' => null
                            ]
                        ]);
                    @endphp

                    @foreach($displayTestimonials as $t)
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
                                <div class="w-14 h-14 rounded-2xl bg-primary/10 overflow-hidden shadow-inner flex-shrink-0">
                                    <img src="{{ isset($t->image) && $t->image ? asset('storage/' . $t->image) : 'https://i.pravatar.cc/150?u=' . $t->id }}" alt="{{ $t->name }}" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h5 class="font-bold text-primary text-lg leading-tight">{{ $t->name }}</h5>
                                    <p class="text-sm text-gray-500 font-medium">{{ $t->location }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination-test flex justify-center mt-8"></div>
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
                <div class="group relative overflow-hidden rounded-[2rem] aspect-[4/5] shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1542601906970-d4d915a96833?auto=format&fit=crop&q=80&w=800" alt="Aplikasi Pupuk" class="w-full h-full object-cover transition duration-1000 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-end p-10">
                        <div>
                            <p class="text-accent font-bold text-xs uppercase tracking-widest mb-2">Aplikasi</p>
                            <h4 class="text-white font-bold text-xl">Pemupukan TBM</h4>
                        </div>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-[2rem] aspect-[4/5] shadow-2xl lg:mt-12">
                    <img src="https://images.unsplash.com/photo-1516035054744-d474c5209db5?auto=format&fit=crop&q=80&w=800" alt="Panen Sawit" class="w-full h-full object-cover transition duration-1000 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-end p-10">
                        <div>
                            <p class="text-accent font-bold text-xs uppercase tracking-widest mb-2">Harvest</p>
                            <h4 class="text-white font-bold text-xl">Hasil TBS Maksimal</h4>
                        </div>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-[2rem] aspect-[4/5] shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1592419044706-39796d40f98c?auto=format&fit=crop&q=80&w=800" alt="Kebun Sawit" class="w-full h-full object-cover transition duration-1000 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-end p-10">
                        <div>
                            <p class="text-accent font-bold text-xs uppercase tracking-widest mb-2">Plantation</p>
                            <h4 class="text-white font-bold text-xl">Kesehatan Perakaran</h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-20">
                <a href="{{ route('gallery') }}" class="inline-flex items-center gap-4 px-8 py-4 rounded-xl border-2 border-primary text-primary font-bold hover:bg-primary hover:text-white transition-all duration-300">
                    Eksplor Galeri Kegiatan <i class="fas fa-arrow-right"></i>
                </a>
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

                <div class="relative z-10 max-w-4xl mx-auto text-center" data-aos="zoom-in">
                    <div class="inline-block px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-xs font-bold uppercase tracking-widest text-accent mb-8">Ready to Boost Your Yield?</div>
                    <h2 class="text-4xl md:text-6xl font-heading font-black text-white mb-10 leading-[1.1]">
                        Siap Bergabung dengan Ribuan Petani <span class="text-gradient-gold">Sukses</span>?
                    </h2>
                    <p class="text-xl text-white/70 mb-14 leading-relaxed max-w-2xl mx-auto">
                        Dapatkan penawaran harga spesial untuk pembelian partai besar dan konsultasi program pemupukan gratis bersama ahli agronomis kami.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row justify-center items-center gap-8">
                        <a href="https://wa.me/628123456789" target="_blank" class="w-full sm:w-auto bg-white text-primary px-12 py-6 rounded-2xl text-xl font-black shadow-2xl hover:scale-105 transition-all duration-300 flex items-center justify-center gap-4">
                            <i class="fab fa-whatsapp text-2xl"></i> Hubungi via WhatsApp
                        </a>
                        <a href="{{ route('contact') }}" class="text-white font-bold border-b-2 border-accent hover:text-accent transition-colors duration-300">Jadwalkan Konsultasi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
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