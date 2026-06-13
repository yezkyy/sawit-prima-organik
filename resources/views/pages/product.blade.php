@extends('layouts.app')

@section('title', 'Inovasi Nutrisi Premium - Sawit Prima Organik')

@section('content')
    <!-- Premium Header -->
    <section class="relative bg-primary pt-48 pb-32 overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10 bg-pattern"></div>
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[120px] -mr-40 -mt-40 animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-secondary/10 rounded-full blur-[100px] -ml-20 -mb-20"></div>
        
        <div class="container-custom relative z-10 text-white text-center">
            <div data-aos="zoom-in">
                <div class="inline-block px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-xs font-bold uppercase tracking-widest text-accent mb-8">Our Product Science</div>
                <h1 class="hero-title mb-8 leading-tight">Teknologi <span class="text-gradient-gold">Hayati</span> Mutakhir</h1>
                <p class="text-xl text-white/70 max-w-3xl mx-auto leading-relaxed">
                    Kami menggabungkan kearifan alam dengan inovasi bioteknologi untuk menciptakan ekosistem tanah yang sempurna bagi pertumbuhan kelapa sawit Anda.
                </p>
            </div>
        </div>
    </section>

    <!-- Product Spotlight -->
    <section class="section-padding bg-white relative overflow-hidden">
        <div class="container-custom">
            <div class="flex flex-col lg:flex-row items-center gap-20">
                <!-- Product Image -->
                <div class="w-full lg:w-1/2" data-aos="fade-right">
                    <div class="relative group">
                        <div class="absolute inset-0 bg-primary/5 rounded-[3rem] -rotate-3 scale-105 group-hover:rotate-0 transition duration-700"></div>
                        <div class="relative bg-background rounded-[3rem] p-12 shadow-2xl overflow-hidden border border-gray-100">
                            <img src="{{ asset('images/products/packaging-mockup.png') }}" alt="Sawit Prima Organik" class="w-full h-auto float-animation" onerror="this.src='https://placehold.co/800x1000/F8FAF7/0F4D2E?text=Sawit+Prima+Pack'">
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="w-full lg:w-1/2" data-aos="fade-left">
                    <span class="text-primary font-black tracking-widest uppercase text-sm">Product Overview</span>
                    <h2 class="section-title text-primary mt-4 mb-8">Sawit Prima Organik <br> <span class="text-accent text-3xl md:text-4xl">All-in-One Nutrient System</span></h2>
                    
                    <p class="text-lg text-gray-600 mb-10 leading-relaxed">
                        Bukan sekadar penambah hara, Sawit Prima Organik bekerja sebagai **Soil Conditioner** dan **Biostimulant**. Produk ini mengaktifkan kembali mikroba tanah yang tertidur dan memperbaiki pH tanah secara alami.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-12">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary shrink-0">
                                <i class="fas fa-microscope text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-primary mb-1 text-lg">Bio-Tech Formula</h5>
                                <p class="text-sm text-gray-500">Mengandung Konsorsium 7 Mikroba Unggul.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary shrink-0">
                                <i class="fas fa-vial text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-primary mb-1 text-lg">Pure Organic</h5>
                                <p class="text-sm text-gray-500">100% Bebas bahan kimia berbahaya.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary shrink-0">
                                <i class="fas fa-bolt text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-primary mb-1 text-lg">Fast Action</h5>
                                <p class="text-sm text-gray-500">Nutrisi langsung terserap dalam 72 jam.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary shrink-0">
                                <i class="fas fa-leaf text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-primary mb-1 text-lg">Eco-Friendly</h5>
                                <p class="text-sm text-gray-500">Mendukung sertifikasi ISPO & RSPO.</p>
                            </div>
                        </div>
                    </div>

                    <a href="https://wa.me/628123456789" class="btn-primary w-full sm:w-auto justify-center py-5 px-12 text-lg font-bold">
                        Pesan Sekarang <i class="fab fa-whatsapp ml-2 text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Analysis -->
    <section class="section-padding bg-background" x-data="{ tab: 'nutrisi' }">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-wrap gap-4 justify-center mb-16 p-2 bg-white rounded-2xl shadow-soft">
                    <button @click="tab = 'nutrisi'" :class="tab === 'nutrisi' ? 'bg-primary text-white shadow-lg' : 'text-gray-500 hover:bg-gray-50'" class="px-10 py-4 rounded-xl font-bold transition-all duration-300">
                        Kandungan Nutrisi
                    </button>
                    <button @click="tab = 'aplikasi'" :class="tab === 'aplikasi' ? 'bg-primary text-white shadow-lg' : 'text-gray-500 hover:bg-gray-50'" class="px-10 py-4 rounded-xl font-bold transition-all duration-300">
                        Dosis & Aplikasi
                    </button>
                    <button @click="tab = 'mekanisme'" :class="tab === 'mekanisme' ? 'bg-primary text-white shadow-lg' : 'text-gray-500 hover:bg-gray-50'" class="px-10 py-4 rounded-xl font-bold transition-all duration-300">
                        Mekanisme Kerja
                    </button>
                </div>

                <!-- Tab: Nutrisi -->
                <div x-show="tab === 'nutrisi'" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0" class="bg-white p-12 rounded-[3rem] shadow-soft border border-gray-100">
                    <h3 class="font-heading text-3xl font-black text-primary mb-8 text-center">Analisis Kandungan</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                        <div class="space-y-6">
                            <div class="flex justify-between items-end border-b border-gray-100 pb-2">
                                <span class="font-bold text-gray-700">C-Organik</span>
                                <span class="text-primary font-black">15.2% - 20%</span>
                            </div>
                            <div class="flex justify-between items-end border-b border-gray-100 pb-2">
                                <span class="font-bold text-gray-700">Asam Humat</span>
                                <span class="text-primary font-black">Min. 5%</span>
                            </div>
                            <div class="flex justify-between items-end border-b border-gray-100 pb-2">
                                <span class="font-bold text-gray-700">N + P2O5 + K2O</span>
                                <span class="text-primary font-black">4.5% - 6%</span>
                            </div>
                            <div class="flex justify-between items-end border-b border-gray-100 pb-2">
                                <span class="font-bold text-gray-700">pH H2O</span>
                                <span class="text-primary font-black">6.8 - 7.5</span>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <p class="font-bold text-primary text-lg">Konsorsium Mikroba:</p>
                            <ul class="space-y-3">
                                <li class="flex items-center gap-3 text-gray-600"><i class="fas fa-check-circle text-accent"></i> Azotobacter Sp. (Penambat N)</li>
                                <li class="flex items-center gap-3 text-gray-600"><i class="fas fa-check-circle text-accent"></i> Bacillus Sp. (Pelarut P)</li>
                                <li class="flex items-center gap-3 text-gray-600"><i class="fas fa-check-circle text-accent"></i> Trichoderma Harzianum</li>
                                <li class="flex items-center gap-3 text-gray-600"><i class="fas fa-check-circle text-accent"></i> Pseudomonas Fluorescens</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Tab: Aplikasi -->
                <div x-show="tab === 'aplikasi'" x-cloak x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0" class="bg-white p-12 rounded-[3rem] shadow-soft border border-gray-100">
                    <h3 class="font-heading text-3xl font-black text-primary mb-12 text-center">Panduan Pemupukan</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="p-8 bg-background rounded-3xl border border-gray-100 text-center">
                            <div class="w-16 h-16 bg-white rounded-2xl mx-auto flex items-center justify-center text-primary text-2xl shadow-sm mb-6">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <h4 class="font-bold text-xl mb-4">Fase TBM (Muda)</h4>
                            <p class="text-primary font-black text-2xl mb-2">0.5 - 1.0 KG</p>
                            <p class="text-sm text-gray-500">Per pohon / Aplikasi (2x Setahun)</p>
                        </div>
                        <div class="p-8 bg-background rounded-3xl border border-gray-100 text-center">
                            <div class="w-16 h-16 bg-white rounded-2xl mx-auto flex items-center justify-center text-primary text-2xl shadow-sm mb-6">
                                <i class="fas fa-tree"></i>
                            </div>
                            <h4 class="font-bold text-xl mb-4">Fase TM (Menghasilkan)</h4>
                            <p class="text-primary font-black text-2xl mb-2">1.5 - 3.0 KG</p>
                            <p class="text-sm text-gray-500">Per pohon / Aplikasi (2x Setahun)</p>
                        </div>
                    </div>
                    <div class="mt-12 p-6 bg-accent/10 border-l-4 border-accent rounded-r-2xl">
                        <p class="text-primary italic"><span class="font-bold">Tips:</span> Untuk hasil maksimal, aplikasikan pada piringan pohon dengan jarak 1.5 - 2 meter dari batang utama saat kondisi tanah lembab.</p>
                    </div>
                </div>

                <!-- Tab: Mekanisme -->
                <div x-show="tab === 'mekanisme'" x-cloak x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0" class="bg-white p-12 rounded-[3rem] shadow-soft border border-gray-100">
                    <h3 class="font-heading text-3xl font-black text-primary mb-8 text-center">Bagaimana Ini Bekerja?</h3>
                    <div class="space-y-8">
                        <div class="flex gap-6">
                            <div class="font-black text-4xl text-accent/20">01</div>
                            <div>
                                <h5 class="font-bold text-primary text-xl mb-2">Detoksifikasi Tanah</h5>
                                <p class="text-gray-600">Asam Humat menetralisir residu kimia dan logam berat yang menghambat pertumbuhan akar.</p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="font-black text-4xl text-accent/20">02</div>
                            <div>
                                <h5 class="font-bold text-primary text-xl mb-2">Bio-Activation</h5>
                                <p class="text-gray-600">Mikroba mengaktifkan siklus nutrisi alami di tanah, mengubah hara "mati" menjadi siap serap.</p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="font-black text-4xl text-accent/20">03</div>
                            <div>
                                <h5 class="font-bold text-primary text-xl mb-2">Root Expansion</h5>
                                <p class="text-gray-600">Mikoriza membentuk simbiosis dengan akar, memperluas area pencarian air dan nutrisi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="section-padding bg-white">
        <div class="container-custom">
            <div class="bg-primary rounded-[3rem] p-12 lg:p-20 text-center text-white relative overflow-hidden">
                <div class="absolute inset-0 bg-hero-overlay opacity-30"></div>
                <div class="relative z-10">
                    <h2 class="text-3xl md:text-5xl font-black mb-8 leading-tight">Mulai Transformasi Kebun Sawit Anda Hari Ini</h2>
                    <p class="text-xl text-white/70 mb-12 max-w-2xl mx-auto">Tingkatkan rendemen, perbaiki tanah, dan pastikan panen berkelanjutan untuk generasi mendatang.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-6">
                        <a href="{{ route('contact') }}" class="btn-secondary py-5 px-12 text-lg font-bold">Hubungi Agronomist</a>
                        <a href="https://wa.me/628123456789" class="bg-white/10 backdrop-blur-md border border-white/20 hover:bg-white/20 transition px-12 py-5 rounded-xl font-bold">Download Katalog PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection