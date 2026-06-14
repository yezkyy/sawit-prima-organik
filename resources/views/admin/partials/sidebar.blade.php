<!-- Sidebar Overlay for Mobile -->
<div x-show="sidebarOpen" 
     x-transition.opacity
     @click="sidebarOpen = false"
     class="fixed inset-0 z-40 bg-black/50 lg:hidden">
</div>

<!-- Sidebar -->
<aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" 
       class="fixed inset-y-0 left-0 z-50 w-72 bg-primary shadow-2xl transition-transform duration-300 lg:sticky lg:top-0 lg:h-screen lg:translate-x-0 flex flex-col">
    
    <!-- Logo Area -->
    <div class="flex h-20 items-center justify-center border-b border-white/10 px-6 shrink-0 bg-primary/95 backdrop-blur-sm">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 w-auto">
            <span class="font-heading text-xl font-bold text-white tracking-wide">Sawit Prima</span>
        </a>
    </div>

    <!-- Navigation -->
    <div class="flex-1 overflow-y-auto py-6 px-4 space-y-2 custom-scrollbar">
        <p class="px-4 text-xs font-semibold text-white/50 uppercase tracking-wider mb-2">Menu Utama</p>
        
        <a href="{{ route('admin.dashboard') }}" class="group flex items-center gap-3 rounded-xl px-4 py-3.5 transition-all duration-300 {{ request()->routeIs('admin.dashboard') ? 'bg-white/10 text-accentLight shadow-inner border-l-4 border-accentLight' : 'text-white/80 hover:bg-white/5 hover:text-white' }}">
            <i class="fa-solid fa-chart-line w-5 text-center transition-transform group-hover:scale-110 {{ request()->routeIs('admin.dashboard') ? 'text-accentLight' : 'text-white/60' }}"></i>
            <span class="font-medium text-sm">Dashboard</span>
        </a>

        <a href="{{ route('admin.banners.index') }}" class="group flex items-center gap-3 rounded-xl px-4 py-3.5 transition-all duration-300 {{ request()->routeIs('admin.banners.*') ? 'bg-white/10 text-accentLight shadow-inner border-l-4 border-accentLight' : 'text-white/80 hover:bg-white/5 hover:text-white' }}">
            <i class="fa-solid fa-images w-5 text-center transition-transform group-hover:scale-110 {{ request()->routeIs('admin.banners.*') ? 'text-accentLight' : 'text-white/60' }}"></i>
            <span class="font-medium text-sm">Banner</span>
        </a>

        <a href="{{ route('admin.galleries.index') }}" class="group flex items-center gap-3 rounded-xl px-4 py-3.5 transition-all duration-300 {{ request()->routeIs('admin.galleries.*') ? 'bg-white/10 text-accentLight shadow-inner border-l-4 border-accentLight' : 'text-white/80 hover:bg-white/5 hover:text-white' }}">
            <i class="fa-solid fa-image w-5 text-center transition-transform group-hover:scale-110 {{ request()->routeIs('admin.galleries.*') ? 'text-accentLight' : 'text-white/60' }}"></i>
            <span class="font-medium text-sm">Galeri</span>
        </a>

        <a href="{{ route('admin.testimonials.index') }}" class="group flex items-center gap-3 rounded-xl px-4 py-3.5 transition-all duration-300 {{ request()->routeIs('admin.testimonials.*') ? 'bg-white/10 text-accentLight shadow-inner border-l-4 border-accentLight' : 'text-white/80 hover:bg-white/5 hover:text-white' }}">
            <i class="fa-solid fa-comments w-5 text-center transition-transform group-hover:scale-110 {{ request()->routeIs('admin.testimonials.*') ? 'text-accentLight' : 'text-white/60' }}"></i>
            <span class="font-medium text-sm">Testimoni</span>
        </a>

        <div class="pt-4 mt-4 border-t border-white/10">
            <p class="px-4 text-xs font-semibold text-white/50 uppercase tracking-wider mb-2">Sistem</p>
            
            <a href="{{ route('admin.settings.index') }}" class="group flex items-center gap-3 rounded-xl px-4 py-3.5 transition-all duration-300 {{ request()->routeIs('admin.settings.*') ? 'bg-white/10 text-accentLight shadow-inner border-l-4 border-accentLight' : 'text-white/80 hover:bg-white/5 hover:text-white' }}">
                <i class="fa-solid fa-gear w-5 text-center transition-transform group-hover:rotate-90 {{ request()->routeIs('admin.settings.*') ? 'text-accentLight' : 'text-white/60' }}"></i>
                <span class="font-medium text-sm">Pengaturan</span>
            </a>
            
            <a href="{{ route('admin.profile.index') }}" class="group flex items-center gap-3 rounded-xl px-4 py-3.5 transition-all duration-300 {{ request()->routeIs('admin.profile.*') ? 'bg-white/10 text-accentLight shadow-inner border-l-4 border-accentLight' : 'text-white/80 hover:bg-white/5 hover:text-white' }}">
                <i class="fa-solid fa-user w-5 text-center transition-transform group-hover:scale-110 {{ request()->routeIs('admin.profile.*') ? 'text-accentLight' : 'text-white/60' }}"></i>
                <span class="font-medium text-sm">Profil Admin</span>
            </a>
        </div>
    </div>
</aside>

<style>
    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.2);
        border-radius: 10px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: rgba(255, 255, 255, 0.4);
    }
</style>