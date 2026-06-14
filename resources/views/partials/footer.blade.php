<footer class="bg-dark text-white pt-24 lg:pt-32 pb-12 overflow-hidden relative">
    <!-- Background Decoration -->
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px] -mr-32 -mb-32"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
    
    <div class="container-custom relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 lg:gap-24 mb-24">
            <!-- Brand Column -->
            <div class="lg:col-span-1">
                <a href="{{ route('home') }}" class="inline-flex items-center mb-8 group">
                    <img src="{{ !empty($site_settings['site_logo']) ? asset('storage/' . $site_settings['site_logo']) : asset('images/logo.png') }}" alt="{{ $site_settings['site_name'] ?? 'Sawit Prima Organik' }}" class="h-20 w-auto transition-transform group-hover:scale-105">
                </a>
                <p class="text-white/50 leading-relaxed mb-6 text-lg">
                    {{ $site_settings['site_description'] ?? 'Pelopor teknologi pupuk hayati premium untuk masa depan perkebunan kelapa sawit Indonesia yang lebih produktif dan berkelanjutan.' }}
                </p>
                <div class="mb-10 p-4 rounded-xl bg-white/5 border border-white/10 inline-block">
                    <p class="text-xs font-bold uppercase tracking-widest text-accent mb-1">Tagline</p>
                    <p class="text-white font-mono text-sm">{{ $site_settings['site_tagline'] ?? 'Pupuk Organik Premium' }}</p>
                </div>
                <div class="flex gap-4">
                    <a href="#" class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center hover:bg-primary hover:text-white transition-all duration-300 border border-white/10 hover:border-primary"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center hover:bg-primary hover:text-white transition-all duration-300 border border-white/10 hover:border-primary"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center hover:bg-primary hover:text-white transition-all duration-300 border border-white/10 hover:border-primary"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="lg:pl-8">
                <h4 class="font-black text-sm uppercase tracking-[0.2em] text-accent mb-10">Navigasi</h4>
                <ul class="space-y-5">
                    <li><a href="{{ route('home') }}" class="text-white/60 hover:text-white transition-colors flex items-center gap-3 group"><span class="w-1.5 h-1.5 rounded-full bg-accent opacity-0 group-hover:opacity-100 transition-opacity"></span> Beranda</a></li>
                    <li><a href="{{ route('product') }}" class="text-white/60 hover:text-white transition-colors flex items-center gap-3 group"><span class="w-1.5 h-1.5 rounded-full bg-accent opacity-0 group-hover:opacity-100 transition-opacity"></span> Produk</a></li>
                    <li><a href="{{ route('gallery') }}" class="text-white/60 hover:text-white transition-colors flex items-center gap-3 group"><span class="w-1.5 h-1.5 rounded-full bg-accent opacity-0 group-hover:opacity-100 transition-opacity"></span> Galeri</a></li>
                    <li><a href="{{ route('testimonial') }}" class="text-white/60 hover:text-white transition-colors flex items-center gap-3 group"><span class="w-1.5 h-1.5 rounded-full bg-accent opacity-0 group-hover:opacity-100 transition-opacity"></span> Testimoni</a></li>
                </ul>
            </div>

            <!-- Products -->
            <div>
                <h4 class="font-black text-sm uppercase tracking-[0.2em] text-accent mb-10">Katalog</h4>
                <ul class="space-y-6">
                    <li class="group cursor-default">
                        <span class="block font-bold text-white mb-1 group-hover:text-accent transition-colors">Sawit Prima Organik</span>
                        <span class="text-white/40 text-sm">Pupuk Organik Premium Karung 60 Kg</span>
                    </li>
                    <li class="group cursor-default">
                        <span class="block font-bold text-white mb-1 group-hover:text-accent transition-colors">Program Kredit</span>
                        <span class="text-white/40 text-sm">Cicilan Ringan hingga 5 Bulan</span>
                    </li>
                    <li class="group cursor-default">
                        <span class="block font-bold text-white mb-1 group-hover:text-accent transition-colors">Konsultasi Gratis</span>
                        <span class="text-white/40 text-sm">Program Pemupukan Ahli Agronomi</span>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="font-black text-sm uppercase tracking-[0.2em] text-accent mb-10">Hubungi Kami</h4>
                <div class="space-y-8">
                    <div class="flex gap-5">
                        <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center shrink-0 border border-white/10">
                            <i class="fas fa-map-marker-alt text-accent text-sm"></i>
                        </div>
                        <p class="text-white/60 text-sm leading-relaxed">{{ $site_settings['contact_address'] ?? 'Pekanbaru - Riau, Indonesia' }}</p>
                    </div>
                    <div class="flex gap-5">
                        <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center shrink-0 border border-white/10">
                            <i class="fas fa-phone-alt text-accent text-sm"></i>
                        </div>
                        <p class="text-white/60 text-sm leading-relaxed">+{{ substr($site_settings['contact_whatsapp'] ?? '6281373493884', 0, 2) }} {{ substr($site_settings['contact_whatsapp'] ?? '6281373493884', 2) }}</p>
                    </div>
                    <div class="flex gap-5">
                        <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center shrink-0 border border-white/10">
                            <i class="fas fa-envelope text-accent text-sm"></i>
                        </div>
                        <p class="text-white/60 text-sm leading-relaxed">{{ $site_settings['contact_email'] ?? 'sawitprimaindonesia@gmail.com' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-8">
            <p class="text-white/30 text-xs font-bold uppercase tracking-widest">
                &copy; {{ date('Y') }} {{ $site_settings['site_name'] ?? 'Sawit Prima Organik' }}. All Rights Reserved.
            </p>
            <div class="flex gap-10 text-[10px] font-black uppercase tracking-[0.2em] text-white/30">
                <a href="#" class="hover:text-accent transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-accent transition-colors">Terms & Conditions</a>
            </div>
        </div>
    </div>
</footer>