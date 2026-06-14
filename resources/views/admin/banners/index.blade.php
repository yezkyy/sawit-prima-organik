@extends('layouts.admin')

@section('title', 'Manajemen Banner')

@section('content')
    <!-- Header Section -->
    <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="font-heading text-2xl font-bold text-gray-900">Manajemen Banner</h1>
            <p class="text-gray-500 text-sm mt-1">Kelola slide banner yang tampil di halaman beranda utama.</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="btn-secondary py-2.5 px-4 text-sm" onclick="window.location.reload()">
                <i class="fa-solid fa-rotate-right"></i>
            </button>
            <a href="{{ route('admin.banners.create') }}" class="btn-primary py-2.5 px-5 text-sm shadow-lg shadow-primary/20">
                <i class="fa-solid fa-plus mr-2"></i> Tambah Banner
            </a>
        </div>
    </div>

    <!-- Table Card -->
    <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden flex flex-col">
        <!-- Toolbar: Search & Filter -->
        <div class="p-6 border-b border-gray-100 bg-gray-50/50 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass text-gray-400 text-sm"></i>
                    </div>
                    <input type="text" placeholder="Cari banner..." class="w-full sm:w-64 bg-white border border-gray-200 rounded-xl pl-9 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                </div>
                <div class="relative">
                    <select class="appearance-none bg-white border border-gray-200 rounded-xl pl-4 pr-10 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all text-gray-600 font-medium">
                        <option value="">Semua Status</option>
                        <option value="1">Aktif</option>
                        <option value="0">Nonaktif</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <i class="fa-solid fa-chevron-down text-gray-400 text-xs"></i>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center gap-2">
                <button class="px-4 py-2 bg-white border border-gray-200 rounded-xl text-sm font-semibold text-gray-600 hover:bg-gray-50 hover:text-primary transition-colors flex items-center gap-2">
                    <i class="fa-solid fa-file-export"></i> <span class="hidden sm:inline">Export</span>
                </button>
            </div>
        </div>

        <!-- Table Responsive Wrapper -->
        <div class="overflow-x-auto custom-scrollbar">
            <table class="w-full text-left border-collapse min-w-[800px]">
                <thead>
                    <tr class="bg-gray-50/80 border-b border-gray-100">
                        <th class="px-6 py-4 font-bold text-gray-500 text-xs uppercase tracking-wider w-12 text-center">
                            <input type="checkbox" class="w-4 h-4 text-primary bg-white border-gray-300 rounded focus:ring-primary focus:ring-2 cursor-pointer">
                        </th>
                        <th class="px-6 py-4 font-bold text-gray-500 text-xs uppercase tracking-wider w-32">Gambar</th>
                        <th class="px-6 py-4 font-bold text-gray-500 text-xs uppercase tracking-wider">Informasi Banner <i class="fa-solid fa-sort ml-1 cursor-pointer hover:text-primary"></i></th>
                        <th class="px-6 py-4 font-bold text-gray-500 text-xs uppercase tracking-wider w-24 text-center">Urutan</th>
                        <th class="px-6 py-4 font-bold text-gray-500 text-xs uppercase tracking-wider w-32 text-center">Status</th>
                        <th class="px-6 py-4 font-bold text-gray-500 text-xs uppercase tracking-wider w-40 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($banners as $banner)
                        <tr class="hover:bg-gray-50/50 transition-colors group">
                            <td class="px-6 py-4 text-center">
                                <input type="checkbox" class="w-4 h-4 text-primary bg-white border-gray-300 rounded focus:ring-primary focus:ring-2 cursor-pointer">
                            </td>
                            <td class="px-6 py-4">
                                <div class="relative w-24 h-16 rounded-xl overflow-hidden shadow-sm border border-gray-200 group-hover:border-primary/30 transition-colors">
                                    <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}" class="w-full h-full object-cover">
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <h4 class="font-bold text-gray-900 mb-1 group-hover:text-primary transition-colors">{{ $banner->title }}</h4>
                                <p class="text-xs text-gray-500 line-clamp-1 max-w-md">{{ $banner->description }}</p>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="inline-flex items-center justify-center w-8 h-8 rounded-xl bg-gray-100 text-gray-700 font-bold text-xs border border-gray-200">{{ $banner->order }}</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                @if($banner->is_active)
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-green-50 text-green-600 text-xs font-bold border border-green-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Aktif
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-gray-100 text-gray-500 text-xs font-bold border border-gray-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span> Draft
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.banners.show', $banner) }}" class="p-2 text-gray-400 hover:text-blue-500 hover:bg-blue-50 rounded-xl transition-colors" title="Lihat Detail">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.banners.edit', $banner) }}" class="p-2 text-gray-400 hover:text-accent hover:bg-accent/10 rounded-xl transition-colors" title="Edit Data">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <form id="delete-form-{{ $banner->id }}" action="{{ route('admin.banners.destroy', $banner) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete('delete-form-{{ $banner->id }}', 'Banner {{ $banner->title }}')" class="p-2 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-xl transition-colors" title="Hapus Data">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-0">
                                <x-admin.empty-state 
                                    icon="fa-images" 
                                    title="Belum ada Banner" 
                                    message="Tambahkan banner pertama Anda untuk ditampilkan di halaman utama website." 
                                    :actionUrl="route('admin.banners.create')" 
                                    actionText="Tambah Banner" 
                                />
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($banners->hasPages())
        <div class="p-6 border-t border-gray-100 bg-gray-50/50">
            {{ $banners->links() }}
        </div>
        @else
        <div class="p-4 border-t border-gray-100 bg-gray-50/50 flex justify-between items-center text-sm text-gray-500 px-6">
            <span>Menampilkan {{ $banners->count() }} data banner.</span>
        </div>
        @endif
    </div>
@endsection