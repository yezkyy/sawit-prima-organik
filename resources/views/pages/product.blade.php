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
                                <img src="{{ asset('images/products/Sawit_Prima_Front.png') }}" alt="Kemasan Depan Sawit Prima" class="w-full max-w-[320px] mx-auto float-animation drop-shadow-2xl hover:scale-110 transition-transform duration-500 cursor-zoom-in" loading="lazy">
                                <p class="mt-6 text-[10px] font-black uppercase tracking-widest text-primary/40">Kemasan Depan</p>

                                <!-- Floating Badges -->
                                <div class="absolute -top-4 -left-4 z-20 bg-accent text-primary p-3 rounded-xl shadow-xl animate-bounce">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                            </div>
                            <div class="relative text-center group/item">
                                <img src="{{ asset('images/products/Sawit_Prima_Back.png') }}" alt="Kemasan Belakang Sawit Prima" class="w-full max-w-[320px] mx-auto float-animation drop-shadow-2xl hover:scale-110 transition-transform duration-500 cursor-zoom-in" style="animation-delay: 2s" loading="lazy">
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
                    <h2 class="section-title text-primary mt-4 mb-8">Sawit Prima Organik <br> <span class="text-accent text-3xl md:text-4xl italic">Pupuk Organik Premium</span></h2>

                    <p class="text-lg text-gray-600 mb-10 leading-relaxed">
                        Sawit Prima Organik adalah pupuk organik premium yang dirancang khusus untuk meningkatkan produktivitas kelapa sawit. Menggabungkan teknologi bio-nutrisi, asam humat, dan mikroba aktif untuk hasil panen maksimal.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-12">
                        <div class="flex gap-4 group">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
                                <i class="fas fa-box text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-primary mb-1 text-lg">Kemasan Karung</h5>
                                <p class="text-sm text-gray-500">1 Karung isi 30 Pcs (Total 60 Kg).</p>
                            </div>
                        </div>
                        <div class="flex gap-4 group">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
                                <i class="fas fa-weight text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-primary mb-1 text-lg">Berat per Pcs</h5>
                                <p class="text-sm text-gray-500">Setiap pcs memiliki berat 2 Kg.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 group">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
                                <i class="fas fa-map-marked-alt text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-primary mb-1 text-lg">Cakupan Lahan</h5>
                                <p class="text-sm text-gray-500">1 Karung untuk ± 2 Hektar lahan.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 group">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
                                <i class="fas fa-tree text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-primary mb-1 text-lg">Kapasitas Pokok</h5>
                                <p class="text-sm text-gray-500">1 Pcs (2 Kg) untuk ± 8 pokok sawit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="https://wa.me/{{ $site_settings['contact_whatsapp'] ?? '6281373493884' }}" class="btn-primary flex-1 sm:flex-none justify-center py-5 px-12 text-lg font-bold">
                            Konsultasi Pembelian <i class="fab fa-whatsapp ml-2 text-xl"></i>
                        </a>
                        <div class="flex items-center gap-3 px-6 py-4 bg-gray-50 rounded-2xl border border-gray-100">
                            <i class="fas fa-shield-alt text-primary"></i>
                            <span class="text-xs font-bold text-primary tracking-tighter uppercase">Tersedia Program Kredit</span>
                        </div>
                    </div>
                </div>
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
                            Setiap kemasan satuan Sawit Prima Organik memiliki berat bersih <span class="font-bold text-primary">2 Kg</span>. Diformulasikan secara presisi untuk mencukupi kebutuhan nutrisi sekitar <span class="font-bold text-primary">8 pokok</span> kelapa sawit dewasa.
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
                            Satu karung berisi <span class="font-bold text-primary">30 pcs</span> (Total <span class="font-bold text-primary">60 Kg</span>). Kapasitas ini dirancang untuk memenuhi kebutuhan pemupukan lahan seluas <span class="font-bold text-primary">± 2 Hektar</span> dengan efisiensi maksimal.
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
                                <span>Pembayaran Langsung</span>
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
                                <span class="font-bold text-primary">Tenor Cicilan 5 Bulan</span>
                            </li>
                            <li class="flex items-center gap-4 text-gray-600">
                                <i class="fas fa-check-circle text-accent"></i>
                                <span>Isi 30 pcs (Total 60 Kg)</span>
                            </li>
                            <li class="flex items-center gap-4 text-gray-600">
                                <i class="fas fa-check-circle text-accent"></i>
                                <span>Syarat & Ketentuan Mudah</span>
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

    <!-- Manfaat Section -->

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
                    <h2 class="text-4xl md:text-6xl font-black mb-10 leading-tight">Konsultasikan Kebutuhan <br>Kebun <span class="text-gradient-gold">Sawit</span> Anda</h2>
                    <p class="text-xl text-white/70 mb-14 max-w-2xl mx-auto leading-relaxed">Dapatkan perhitungan dosis yang tepat dan penawaran harga terbaik untuk kebun sawit Anda bersama tim agronomis kami.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-8">
                        <a href="https://wa.me/{{ $site_settings['contact_whatsapp'] ?? '6281373493884' }}" class="btn-secondary py-6 px-14 text-xl font-black shadow-2xl hover:scale-105 transition-all">Hubungi WhatsApp <i class="fab fa-whatsapp ml-3"></i></a>
                        <a href="{{ route('contact') }}" class="bg-white/10 backdrop-blur-md border border-white/20 hover:bg-white/20 transition px-14 py-6 rounded-[1.5rem] font-bold text-xl">Kontak Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection