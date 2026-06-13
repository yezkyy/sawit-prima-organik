@extends('layouts.app')

@section('title', 'Produk Premium - Sawit Prima Organik')

@section('content')
    <!-- Header Premium -->
    <section class="relative bg-primary pt-48 pb-32 overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10 bg-pattern"></div>
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[120px] -mr-40 -mt-40 animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-secondary/10 rounded-full blur-[100px] -ml-20 -mb-20"></div>

        <div class="container-custom relative z-10 text-white text-center">
            <div data-aos="zoom-in">
                <div class="inline-block px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-xs font-bold uppercase tracking-widest text-accent mb-8">Teknologi Produk Kami</div>
                <h1 class="hero-title mb-8 leading-tight">Teknologi <span class="text-gradient-gold">Hayati</span> Mutakhir</h1>
                <p class="text-xl text-white/70 max-w-3xl mx-auto leading-relaxed">
                    Kami menggabungkan kearifan alam dengan inovasi bioteknologi untuk menciptakan ekosistem tanah yang sempurna bagi pertumbuhan kelapa sawit Anda.
                </p>
            </div>
        </div>
    </section>

    <!-- Sorotan Produk -->
    <section class="section-padding bg-white relative overflow-hidden">
        <div class="container-custom">
            <div class="flex flex-col lg:flex-row items-center gap-20">
                <!-- Gambar Produk -->
                <div class="w-full lg:w-1/2" data-aos="fade-right">
                    <div class="relative group">
                        <div class="absolute inset-0 bg-primary/5 rounded-[3rem] -rotate-3 scale-105 group-hover:rotate-0 transition duration-700"></div>
                        <div class="relative bg-background rounded-[3rem] p-8 md:p-12 shadow-2xl overflow-hidden border border-gray-100 flex flex-col md:flex-row gap-8 items-center justify-center">
                            <div class="relative text-center group/item">
                                <img src="{{ asset('images/products/Sawit_Prima_Front.png') }}" alt="Kemasan Depan Sawit Prima" class="w-full max-w-[320px] mx-auto float-animation drop-shadow-2xl hover:scale-110 transition-transform duration-500 cursor-zoom-in">
                                <p class="mt-6 text-[10px] font-black uppercase tracking-widest text-primary/40">Kemasan Depan</p>

                                <!-- Floating Badges -->
                                <div class="absolute -top-4 -left-4 z-20 bg-accent text-primary p-3 rounded-xl shadow-xl animate-bounce">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                            </div>
                            <div class="relative text-center group/item">
                                <img src="{{ asset('images/products/Sawit_Prima_Back.png') }}" alt="Kemasan Belakang Sawit Prima" class="w-full max-w-[320px] mx-auto float-animation drop-shadow-2xl hover:scale-110 transition-transform duration-500 cursor-zoom-in" style="animation-delay: 2s">
                                <p class="mt-6 text-[10px] font-black uppercase tracking-widest text-primary/40">Informasi Kandungan</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informasi Produk -->
                <div class="w-full lg:w-1/2" data-aos="fade-left">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="text-primary font-black tracking-widest uppercase text-sm">Ringkasan Produk</span>
                        <div class="px-4 py-1.5 rounded-full bg-primary/5 border border-primary/10 text-[10px] font-black uppercase tracking-widest text-primary">
                            NIB: 12062060102849
                        </div>
                    </div>
                    <h2 class="section-title text-primary mt-4 mb-8">Sawit Prima Organik <br> <span class="text-accent text-3xl md:text-4xl italic">Sistem Nutrisi Lengkap</span></h2>

                    <p class="text-lg text-gray-600 mb-10 leading-relaxed">
                        Bukan sekadar penambah hara, Sawit Prima Organik bekerja sebagai **Pembenah Tanah** dan **Biostimulan**. Produk ini mengaktifkan kembali mikroba tanah yang tertidur dan memperbaiki pH tanah secara alami.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-12">
                        <div class="flex gap-4 group">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
                                <i class="fas fa-microscope text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-primary mb-1 text-lg">Formula Bio-Tek</h5>
                                <p class="text-sm text-gray-500">Mengandung Konsorsium 7 Mikroba Unggul.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 group">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
                                <i class="fas fa-leaf text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-primary mb-1 text-lg">100% Organik</h5>
                                <p class="text-sm text-gray-500">Murni alami tanpa bahan kimia berbahaya.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 group">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
                                <i class="fas fa-bolt text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-primary mb-1 text-lg">Reaksi Cepat</h5>
                                <p class="text-sm text-gray-500">Nutrisi langsung terserap dalam 72 jam.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 group">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
                                <i class="fas fa-globe-asia text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-primary mb-1 text-lg">Ramah Lingkungan</h5>
                                <p class="text-sm text-gray-500">Mendukung sertifikasi ISPO & RSPO.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="https://wa.me/628123456789" class="btn-primary flex-1 sm:flex-none justify-center py-5 px-12 text-lg font-bold">
                            Pesan Sekarang <i class="fab fa-whatsapp ml-2 text-xl"></i>
                        </a>
                        <div class="flex items-center gap-3 px-6 py-4 bg-gray-50 rounded-2xl border border-gray-100">
                            <i class="fas fa-shield-alt text-primary"></i>
                            <span class="text-xs font-bold text-primary tracking-tighter uppercase">Legal & Terdaftar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Manfaat Section -->
    <section class="section-padding bg-background relative overflow-hidden">
        <div class="container-custom">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <span class="text-primary font-black tracking-widest uppercase text-sm">Keunggulan Utama</span>
                <h2 class="section-title text-primary mt-4">Manfaat Sawit Prima Organik</h2>
                <div class="w-20 h-1.5 bg-accent mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $manfaat = [
                        ['title' => 'Menyuburkan Tanah', 'desc' => 'Memperbaiki struktur biologi tanah yang rusak akibat pemakaian kimia jangka panjang.', 'icon' => 'fa-seedling'],
                        ['title' => 'Menguatkan Perakaran', 'desc' => 'Merangsang pertumbuhan akar rambut secara masif untuk jangkauan nutrisi lebih luas.', 'icon' => 'fa-project-diagram'],
                        ['title' => 'Meningkatkan Hasil', 'desc' => 'Meningkatkan bobot TBS dan rendemen CPO secara signifikan pada setiap panen.', 'icon' => 'fa-chart-line'],
                        ['title' => 'Kesehatan Tanaman', 'desc' => 'Meningkatkan imunitas tanaman terhadap serangan penyakit dan perubahan cuaca ekstrem.', 'icon' => 'fa-shield-heart'],
                        ['title' => 'Ramah Lingkungan', 'desc' => '100% aman bagi ekosistem perkebunan dan mendukung pertanian berkelanjutan.', 'icon' => 'fa-leaf'],
                        ['title' => 'TBM & TM', 'desc' => 'Efektif untuk Tanaman Belum Menghasilkan maupun Tanaman Menghasilkan.', 'icon' => 'fa-tree'],
                    ];
                @endphp

                @foreach($manfaat as $m)
                <div class="bg-white p-10 rounded-[2.5rem] shadow-soft hover-lift group border border-gray-100" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="w-16 h-16 bg-primary/5 rounded-2xl flex items-center justify-center text-primary text-2xl mb-8 group-hover:bg-primary group-hover:text-white transition-all duration-500">
                        <i class="fas {{ $m['icon'] }}"></i>
                    </div>
                    <h4 class="font-bold text-primary text-xl mb-4 tracking-tight">{{ $m['title'] }}</h4>
                    <p class="text-gray-500 leading-relaxed">{{ $m['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Kandungan Infografis -->
    <section class="section-padding bg-white">
        <div class="container-custom">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <span class="text-accent font-black tracking-widest uppercase text-sm">Analisis Laboratorium</span>
                <h2 class="section-title text-primary mt-4">Kandungan Nutrisi Hayati</h2>
                <p class="text-gray-500 mt-6">Diformulasikan secara presisi untuk memenuhi standar pupuk organik premium.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Asam Humat -->
                <div class="p-10 rounded-[3rem] bg-primary text-white relative overflow-hidden group shadow-2xl" data-aos="flip-left">
                    <div class="absolute -right-8 -top-8 w-32 h-32 bg-white/10 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                    <i class="fas fa-vial text-4xl text-accent mb-8"></i>
                    <h4 class="text-2xl font-black mb-4">Asam Humat</h4>
                    <p class="text-white/70 leading-relaxed mb-6">Menetralisir residu kimia dan mengikat nutrisi tanah agar tidak mudah tercuci air hujan.</p>
                    <div class="inline-block px-4 py-1 rounded-full bg-white/20 text-accent font-bold text-sm">Min. 5%</div>
                </div>

                <!-- Trichoderma -->
                <div class="p-10 rounded-[3rem] border border-gray-100 bg-background relative overflow-hidden group" data-aos="flip-left" data-aos-delay="100">
                    <i class="fas fa-shield-virus text-4xl text-primary mb-8"></i>
                    <h4 class="text-2xl font-black text-primary mb-4 tracking-tight">Trichoderma</h4>
                    <p class="text-gray-500 leading-relaxed mb-6">Agen hayati pelindung akar dari serangan jamur Ganoderma yang sangat mematikan bagi sawit.</p>
                    <div class="inline-block px-4 py-1 rounded-full bg-primary/10 text-primary font-bold text-sm">Bio-Protector</div>
                </div>

                <!-- Mikoriza -->
                <div class="p-10 rounded-[3rem] border border-gray-100 bg-background relative overflow-hidden group" data-aos="flip-left" data-aos-delay="200">
                    <i class="fas fa-project-diagram text-4xl text-primary mb-8"></i>
                    <h4 class="text-2xl font-black text-primary mb-4 tracking-tight">Mikoriza</h4>
                    <p class="text-gray-500 leading-relaxed mb-6">Memperluas jangkauan serapan akar hingga 10x lipat untuk mencari air dan mineral.</p>
                    <div class="inline-block px-4 py-1 rounded-full bg-primary/10 text-primary font-bold text-sm">Penyerap Nutrisi</div>
                </div>

                <!-- Bacillus -->
                <div class="p-10 rounded-[3rem] border border-gray-100 bg-background relative overflow-hidden group" data-aos="flip-left">
                    <i class="fas fa-microbe text-4xl text-primary mb-8"></i>
                    <h4 class="text-2xl font-black text-primary mb-4 tracking-tight">Bacillus Sp.</h4>
                    <p class="text-gray-500 leading-relaxed mb-6">Membantu melarutkan unsur Fosfat (P) dan Kalium (K) yang terikat kuat di dalam tanah.</p>
                    <div class="inline-block px-4 py-1 rounded-full bg-primary/10 text-primary font-bold text-sm">Pelarut Hara</div>
                </div>

                <!-- C-Organik -->
                <div class="p-10 rounded-[3rem] border border-gray-100 bg-background relative overflow-hidden group" data-aos="flip-left" data-aos-delay="100">
                    <i class="fas fa-seedling text-4xl text-primary mb-8"></i>
                    <h4 class="text-2xl font-black text-primary mb-4 tracking-tight">C-Organik</h4>
                    <p class="text-gray-500 leading-relaxed mb-6">Meningkatkan kesuburan tanah dengan menyediakan karbon sebagai sumber energi mikroba.</p>
                    <div class="inline-block px-4 py-1 rounded-full bg-primary/10 text-primary font-bold text-sm">Min. 15%</div>
                </div>

                <!-- pH Optimal -->
                <div class="p-10 rounded-[3rem] border border-gray-100 bg-background relative overflow-hidden group" data-aos="flip-left" data-aos-delay="200">
                    <i class="fas fa-vial-circle-check text-4xl text-primary mb-8"></i>
                    <h4 class="text-2xl font-black text-primary mb-4 tracking-tight">pH Optimal</h4>
                    <p class="text-gray-500 leading-relaxed mb-6">Menjaga keseimbangan tingkat keasaman tanah agar tetap netral (6.8 - 7.5).</p>
                    <div class="inline-block px-4 py-1 rounded-full bg-primary/10 text-primary font-bold text-sm">Penyeimbang Tanah</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Makna Logo Section -->
    <section class="section-padding bg-background relative overflow-hidden">
        <div class="container-custom">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative" data-aos="fade-right">
                    <div class="absolute inset-0 bg-primary/5 blur-[100px] rounded-full"></div>
                    <div class="relative z-10 p-12 lg:p-20 bg-white rounded-[3rem] border border-gray-100 shadow-soft">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo Sawit Prima Organik" class="w-full h-auto">
                    </div>
                </div>
                <div data-aos="fade-left">
                    <h2 class="section-title text-primary mb-10">Makna Filosofis <br>Logo Sawit Prima</h2>
                    <div class="space-y-6">
                        <div class="flex gap-6 p-6 rounded-2xl bg-white shadow-sm border border-gray-50">
                            <i class="fas fa-leaf text-accent text-2xl mt-1"></i>
                            <div>
                                <h5 class="font-bold text-primary mb-1">Daun Sawit</h5>
                                <p class="text-sm text-gray-500">Melambangkan pertumbuhan sehat, produktivitas, dan keberlanjutan.</p>
                            </div>
                        </div>
                        <div class="flex gap-6 p-6 rounded-2xl bg-white shadow-sm border border-gray-50">
                            <i class="fas fa-award text-accent text-2xl mt-1"></i>
                            <div>
                                <h5 class="font-bold text-primary mb-1">Buah Sawit</h5>
                                <p class="text-sm text-gray-500">Melambangkan kualitas panen melimpah dan nilai ekonomi tinggi.</p>
                            </div>
                        </div>
                        <div class="flex gap-6 p-6 rounded-2xl bg-white shadow-sm border border-gray-50">
                            <i class="fas fa-circle-notch text-accent text-2xl mt-1"></i>
                            <div>
                                <h5 class="font-bold text-primary mb-1">Lengkungan Tanah</h5>
                                <p class="text-sm text-gray-500">Melambangkan kesuburan tanah dan fondasi pertanian yang kuat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Legalitas & Trust -->
    <section class="py-20 bg-white">
        <div class="container-custom text-center">
            <h3 class="font-black text-primary text-2xl mb-12 uppercase tracking-[0.2em]">Legalitas Resmi Perusahaan</h3>
            <div class="flex flex-wrap justify-center gap-8 lg:gap-16">
                <div class="px-10 py-8 rounded-[2rem] bg-background border border-gray-100 flex flex-col items-center gap-4 group hover:border-primary transition-all shadow-sm">
                    <i class="fas fa-file-contract text-3xl text-primary group-hover:scale-110 transition-transform"></i>
                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">NIB Terdaftar</p>
                    <p class="text-xl font-black text-primary">12062060102849</p>
                </div>
                <div class="px-10 py-8 rounded-[2rem] bg-background border border-gray-100 flex flex-col items-center gap-4 group hover:border-primary transition-all shadow-sm">
                    <i class="fas fa-map-marked-alt text-3xl text-primary group-hover:scale-110 transition-transform"></i>
                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Domisili Kantor</p>
                    <p class="text-xl font-black text-primary">Pekanbaru - Riau</p>
                </div>
                <div class="px-10 py-8 rounded-[2rem] bg-background border border-gray-100 flex flex-col items-center gap-4 group hover:border-primary transition-all shadow-sm">
                    <i class="fas fa-certificate text-3xl text-primary group-hover:scale-110 transition-transform"></i>
                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Standar Mutu</p>
                    <p class="text-xl font-black text-primary">Kualitas Premium</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="section-padding bg-background">
        <div class="container-custom">
            <div class="bg-primary rounded-[4rem] p-12 lg:p-24 text-center text-white relative overflow-hidden shadow-2xl">
                <div class="absolute inset-0 bg-hero-overlay opacity-30"></div>
                <div class="absolute -right-20 -top-20 w-80 h-80 bg-accent/20 rounded-full blur-[100px]"></div>

                <div class="relative z-10">
                    <h2 class="text-4xl md:text-6xl font-black mb-10 leading-tight">Siap Untuk Panen <br><span class="text-gradient-gold">Terbaik</span> Anda?</h2>
                    <p class="text-xl text-white/70 mb-14 max-w-2xl mx-auto leading-relaxed">Bergabunglah dengan mitra petani sukses kami lainnya. Dapatkan konsultasi program pemupukan gratis hari ini.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-8">
                        <a href="https://wa.me/628123456789" class="btn-secondary py-6 px-14 text-xl font-black shadow-2xl hover:scale-105 transition-all">Hubungi Kami <i class="fab fa-whatsapp ml-3"></i></a>
                        <a href="#" class="bg-white/10 backdrop-blur-md border border-white/20 hover:bg-white/20 transition px-14 py-6 rounded-[1.5rem] font-bold text-xl">Unduh Katalog PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection