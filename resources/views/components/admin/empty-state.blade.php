@props([
    'icon' => 'fa-inbox',
    'title' => 'Belum ada data',
    'message' => 'Data yang Anda cari tidak ditemukan atau belum ditambahkan.',
    'actionUrl' => null,
    'actionText' => 'Tambah Data'
])

<div class="flex flex-col items-center justify-center py-16 px-4 text-center">
    <div class="w-24 h-24 bg-gray-50 rounded-full flex items-center justify-center mb-6 relative group">
        <div class="absolute inset-0 bg-primary/10 rounded-full scale-0 group-hover:scale-110 transition-transform duration-500"></div>
        <i class="fa-solid {{ $icon }} text-4xl text-gray-400 group-hover:text-primary transition-colors duration-500 relative z-10"></i>
    </div>
    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $title }}</h3>
    <p class="text-gray-500 text-sm max-w-sm mb-6">{{ $message }}</p>
    
    @if($actionUrl)
    <a href="{{ $actionUrl }}" class="btn-primary py-2.5 px-6 text-sm">
        <i class="fa-solid fa-plus mr-2"></i> {{ $actionText }}
    </a>
    @endif
</div>