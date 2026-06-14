<nav x-data="{ 
    mobileMenuOpen: false,
    scrolled: false 
}" 
@scroll.window="scrolled = (window.pageYOffset > 20)"
:class="scrolled ? 'bg-white/90 backdrop-blur-lg shadow-xl h-20' : 'bg-transparent h-24 text-white'"
class="fixed top-0 w-full z-[100] transition-all duration-500 flex items-center">
    <div class="container-custom w-full">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="group flex items-center">
                    <img src="{{ !empty($site_settings['site_logo']) ? asset('storage/' . $site_settings['site_logo']) : asset('images/logo.png') }}" alt="{{ $site_settings['site_name'] ?? 'Sawit Prima Organik' }}" :class="scrolled ? 'h-14' : 'h-16'" class="w-auto transition-all duration-500 drop-shadow-sm">
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:block">
                <div class="flex items-center space-x-10">
                    <a href="{{ route('home') }}" 
                       :class="scrolled ? 'text-dark/70 hover:text-primary' : 'text-white/80 hover:text-white'"
                       class="text-sm font-bold uppercase tracking-widest transition-all {{ request()->routeIs('home') ? 'text-accent !text-accent' : '' }}">
                        Beranda
                    </a>
                    <a href="{{ route('product') }}" 
                       :class="scrolled ? 'text-dark/70 hover:text-primary' : 'text-white/80 hover:text-white'"
                       class="text-sm font-bold uppercase tracking-widest transition-all {{ request()->routeIs('product') ? 'text-accent !text-accent' : '' }}">
                        Produk
                    </a>
                    <a href="{{ route('gallery') }}" 
                       :class="scrolled ? 'text-dark/70 hover:text-primary' : 'text-white/80 hover:text-white'"
                       class="text-sm font-bold uppercase tracking-widest transition-all {{ request()->routeIs('gallery') ? 'text-accent !text-accent' : '' }}">
                        Galeri
                    </a>
                    <a href="{{ route('testimonial') }}" 
                       :class="scrolled ? 'text-dark/70 hover:text-primary' : 'text-white/80 hover:text-white'"
                       class="text-sm font-bold uppercase tracking-widest transition-all {{ request()->routeIs('testimonial') ? 'text-accent !text-accent' : '' }}">
                        Testimoni
                    </a>
                    <a href="https://wa.me/{{ $site_settings['contact_whatsapp'] ?? '6281373493884' }}" 
                       target="_blank" rel="noopener noreferrer"
                       class="btn-secondary py-3 px-8 text-sm font-black shadow-lg hover:scale-105">
                        HUBUNGI KAMI
                    </a>
                </div>
            </div>

            <!-- Mobile Toggle -->
            <div class="flex md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="p-2" :class="scrolled ? 'text-primary' : 'text-white'">
                    <i class="fas fa-bars text-2xl" x-show="!mobileMenuOpen"></i>
                    <i class="fas fa-times text-2xl" x-show="mobileMenuOpen" x-cloak></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-10"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-cloak 
         class="absolute top-full left-0 w-full bg-white shadow-2xl border-t border-gray-100 md:hidden">
        <div class="px-6 py-10 space-y-6">
            <a href="{{ route('home') }}" class="block text-xl font-black text-primary border-b border-gray-50 pb-4">Beranda</a>
            <a href="{{ route('product') }}" class="block text-xl font-black text-primary border-b border-gray-50 pb-4">Produk</a>
            <a href="{{ route('gallery') }}" class="block text-xl font-black text-primary border-b border-gray-50 pb-4">Galeri</a>
            <a href="{{ route('testimonial') }}" class="block text-xl font-black text-primary border-b border-gray-50 pb-4">Testimoni</a>
            <a href="https://wa.me/{{ $site_settings['contact_whatsapp'] ?? '6281373493884' }}" target="_blank" rel="noopener noreferrer" class="btn-primary w-full justify-center py-5 text-lg font-black text-center flex">HUBUNGI KAMI</a>
        </div>
    </div>
</nav>