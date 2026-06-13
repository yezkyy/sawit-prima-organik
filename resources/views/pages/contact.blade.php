@extends('layouts.app')

@section('title', 'Kontak - Sawit Prima Organik')

@section('content')
    <!-- Header -->
    <section class="relative bg-primary pt-48 pb-32 overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10 bg-pattern"></div>
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent/10 rounded-full blur-[120px] -mr-32 -mt-32"></div>
        
        <div class="container-custom relative z-10 text-white text-center">
            <div data-aos="zoom-in">
                <div class="inline-block px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-xs font-bold uppercase tracking-widest text-accent mb-8">Get In Touch</div>
                <h1 class="hero-title mb-8">Hubungi <span class="text-gradient-gold">Ahli Kami</span></h1>
                <p class="text-xl text-white/70 max-w-2xl mx-auto leading-relaxed">
                    Siap berkonsultasi mengenai program pemupukan atau pemesanan skala besar? Tim kami siap memberikan solusi terbaik.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section-padding bg-background relative">
        <div class="container-custom relative z-10">
            <div class="flex flex-col lg:flex-row gap-16 lg:gap-24">
                <!-- Contact Info -->
                <div class="w-full lg:w-2/5" data-aos="fade-right">
                    <h2 class="section-title text-primary mb-10">Informasi Kontak</h2>
                    <div class="space-y-10">
                        <div class="flex gap-6 group">
                            <div class="w-16 h-16 rounded-2xl bg-white shadow-soft flex items-center justify-center text-primary text-2xl group-hover:bg-primary group-hover:text-white transition-all duration-300 border border-gray-100">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-xl text-primary mb-2">Kantor Pusat</h5>
                                <p class="text-gray-500 leading-relaxed">Jl. Perkebunan Nusantara No. 88,<br>Pekanbaru, Riau, Indonesia</p>
                            </div>
                        </div>
                        <div class="flex gap-6 group">
                            <div class="w-16 h-16 rounded-2xl bg-white shadow-soft flex items-center justify-center text-primary text-2xl group-hover:bg-primary group-hover:text-white transition-all duration-300 border border-gray-100">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-xl text-primary mb-2">Telepon / WA</h5>
                                <p class="text-gray-500 leading-relaxed">+62 812 3456 7890<br>+62 811 9876 543</p>
                            </div>
                        </div>
                        <div class="flex gap-6 group">
                            <div class="w-16 h-16 rounded-2xl bg-white shadow-soft flex items-center justify-center text-primary text-2xl group-hover:bg-primary group-hover:text-white transition-all duration-300 border border-gray-100">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-xl text-primary mb-2">Email Resmi</h5>
                                <p class="text-gray-500 leading-relaxed">info@sawitprima.com<br>sales@sawitprima.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-16 p-10 bg-primary rounded-[2.5rem] text-white relative overflow-hidden shadow-2xl">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-accent/20 rounded-full blur-2xl -mr-16 -mt-16"></div>
                        <h4 class="font-bold text-2xl mb-4 relative z-10">Layanan Pelanggan</h4>
                        <p class="text-white/70 mb-8 relative z-10">Senin - Jumat: 08.00 - 17.00 WIB<br>Sabtu: 08.00 - 14.00 WIB</p>
                        <a href="https://wa.me/628123456789" class="inline-flex items-center gap-3 font-bold text-accent hover:text-white transition-colors relative z-10">
                            Chat via WhatsApp <i class="fas fa-arrow-right text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="w-full lg:w-3/5" data-aos="fade-left">
                    <div class="bg-white p-10 lg:p-16 rounded-[3rem] shadow-soft border border-gray-100">
                        @if(session('success'))
                            <div class="mb-10 p-6 bg-green-50 text-green-700 border-l-4 border-green-500 rounded-r-2xl font-bold flex items-center gap-4">
                                <i class="fas fa-check-circle text-xl"></i>
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-8">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-3">
                                    <label class="block font-bold text-primary ml-1">Nama Lengkap</label>
                                    <input type="text" name="name" required placeholder="Contoh: Bpk. Sugeng" class="w-full p-5 rounded-2xl border border-gray-100 bg-background focus:bg-white focus:ring-4 focus:ring-primary/5 focus:border-primary transition-all outline-none">
                                </div>
                                <div class="space-y-3">
                                    <label class="block font-bold text-primary ml-1">Nomor WhatsApp</label>
                                    <input type="tel" name="phone" placeholder="Contoh: 081234567890" class="w-full p-5 rounded-2xl border border-gray-100 bg-background focus:bg-white focus:ring-4 focus:ring-primary/5 focus:border-primary transition-all outline-none">
                                </div>
                            </div>
                            <div class="space-y-3">
                                <label class="block font-bold text-primary ml-1">Lokasi Perkebunan</label>
                                <input type="text" name="location" placeholder="Contoh: Kampar, Riau" class="w-full p-5 rounded-2xl border border-gray-100 bg-background focus:bg-white focus:ring-4 focus:ring-primary/5 focus:border-primary transition-all outline-none">
                            </div>
                            <div class="space-y-3">
                                <label class="block font-bold text-primary ml-1">Pesan / Pertanyaan</label>
                                <textarea name="message" required rows="5" placeholder="Tuliskan pesan atau pertanyaan Anda di sini..." class="w-full p-5 rounded-2xl border border-gray-100 bg-background focus:bg-white focus:ring-4 focus:ring-primary/5 focus:border-primary transition-all outline-none resize-none"></textarea>
                            </div>
                            <button type="submit" class="btn-primary w-full py-6 text-xl font-black shadow-2xl hover:scale-[1.02] active:scale-[0.98]">
                                Kirim Permintaan <i class="fas fa-paper-plane ml-3"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection