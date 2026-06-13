<footer class="bg-dark text-white pt-24 lg:pt-32 pb-12 overflow-hidden relative">
    <!-- Background Decoration -->
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px] -mr-32 -mb-32"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
    
    <div class="container-custom relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 lg:gap-24 mb-24">
            <!-- Brand Column -->
            <div class="lg:col-span-1">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-3 mb-8 group">
                    <div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center transition-transform group-hover:rotate-12">
                        <i class="fas fa-leaf text-white"></i>
                    </div>
                    <span class="font-heading text-2xl font-black tracking-tighter text-white">
                        SAWIT PRIMA <span class="text-accent">ORGANIK</span>
                    </span>
                </a>
                <p class="text-white/50 leading-relaxed mb-10 text-lg">
                    Pelopor teknologi pupuk hayati premium untuk masa depan perkebunan kelapa sawit Indonesia yang lebih produktif dan berkelanjutan.
                </p>
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
                    <li><a href="{{ route('contact') }}" class="text-white/60 hover:text-white transition-colors flex items-center gap-3 group"><span class="w-1.5 h-1.5 rounded-full bg-accent opacity-0 group-hover:opacity-100 transition-opacity"></span> Kontak</a></li>
                </ul>
            </div>

            <!-- Products -->
            <div>
                <h4 class="font-black text-sm uppercase tracking-[0.2em] text-accent mb-10">Katalog</h4>
                <ul class="space-y-6">
                    <li class="group cursor-default">
                        <span class="block font-bold text-white mb-1 group-hover:text-accent transition-colors">Sawit Prima 1 Kg</span>
                        <span class="text-white/40 text-sm">Khusus Pembibitan & TBM</span>
                    </li>
                    <li class="group cursor-default">
                        <span class="block font-bold text-white mb-1 group-hover:text-accent transition-colors">Sawit Prima 5 Kg</span>
                        <span class="text-white/40 text-sm">Tanaman Menghasilkan (TM)</span>
                    </li>
                    <li class="group cursor-default">
                        <span class="block font-bold text-white mb-1 group-hover:text-accent transition-colors">Sawit Prima Liquid</span>
                        <span class="text-white/40 text-sm">Nutrisi Daun & Batang Aktif</span>
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
                        <p class="text-white/60 text-sm leading-relaxed">Jl. Perkebunan Nusantara No. 88,<br>Pekanbaru, Riau, Indonesia</p>
                    </div>
                    <div class="flex gap-5">
                        <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center shrink-0 border border-white/10">
                            <i class="fas fa-phone-alt text-accent text-sm"></i>
                        </div>
                        <p class="text-white/60 text-sm leading-relaxed">+62 812 3456 7890<br>+62 811 9876 543</p>
                    </div>
                    <div class="flex gap-5">
                        <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center shrink-0 border border-white/10">
                            <i class="fas fa-envelope text-accent text-sm"></i>
                        </div>
                        <p class="text-white/60 text-sm leading-relaxed">info@sawitprima.com<br>sales@sawitprima.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-8">
            <p class="text-white/30 text-xs font-bold uppercase tracking-widest">
                &copy; {{ date('Y') }} Sawit Prima Organik. All Rights Reserved.
            </p>
            <div class="flex gap-10 text-[10px] font-black uppercase tracking-[0.2em] text-white/30">
                <a href="#" class="hover:text-accent transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-accent transition-colors">Terms & Conditions</a>
            </div>
        </div>
    </div>
</footer>