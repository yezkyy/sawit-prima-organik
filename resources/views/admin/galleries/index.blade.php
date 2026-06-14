@extends('layouts.admin')

@section('title', 'Manajemen Galeri')

@section('content')
    <!-- Header Section -->
    <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="font-heading text-2xl font-bold text-gray-900">Manajemen Galeri</h1>
            <p class="text-gray-500 text-sm mt-1">Kelola album foto dokumentasi produk dan aktivitas perusahaan.</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="btn-secondary py-2.5 px-4 text-sm" onclick="window.location.reload()">
                <i class="fa-solid fa-rotate-right"></i>
            </button>
            <a href="{{ route('admin.galleries.create') }}" class="btn-primary py-2.5 px-5 text-sm shadow-lg shadow-primary/20">
                <i class="fa-solid fa-cloud-arrow-up mr-2"></i> Unggah Foto
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
                    <input type="text" placeholder="Cari foto..." class="w-full sm:w-64 bg-white border border-gray-200 rounded-xl pl-9 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                </div>
                <div class="relative">
                    <select class="appearance-none bg-white border border-gray-200 rounded-xl pl-4 pr-10 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all text-gray-600 font-medium">
                        <option value="">Semua Kategori</option>
                        <option value="Produk">Produk</option>
                        <option value="Aktivitas">Aktivitas</option>
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
                        <th class="px-6 py-4 font-bold text-gray-500 text-xs uppercase tracking-wider w-32">Pratinjau</th>
                        <th class="px-6 py-4 font-bold text-gray-500 text-xs uppercase tracking-wider">Judul & Kategori <i class="fa-solid fa-sort ml-1 cursor-pointer hover:text-primary"></i></th>
                        <th class="px-6 py-4 font-bold text-gray-500 text-xs uppercase tracking-wider w-32 text-center">Status</th>
                        <th class="px-6 py-4 font-bold text-gray-500 text-xs uppercase tracking-wider w-40 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($galleries as $gallery)
                        <tr class="hover:bg-gray-50/50 transition-colors group">
                            <td class="px-6 py-4 text-center">
                                <input type="checkbox" class="w-4 h-4 text-primary bg-white border-gray-300 rounded focus:ring-primary focus:ring-2 cursor-pointer">
                            </td>
                            <td class="px-6 py-4">
                                <div class="relative w-20 h-20 rounded-xl overflow-hidden shadow-sm border border-gray-200 group-hover:border-primary/30 transition-colors">
                                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-full object-cover">
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <h4 class="font-bold text-gray-900 mb-1.5 group-hover:text-primary transition-colors">{{ $gallery->title }}</h4>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-widest bg-blue-50 text-blue-600 border border-blue-100">
                                    {{ $gallery->category }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                @if($gallery->is_active)
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-green-50 text-green-600 text-xs font-bold border border-green-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Tampil
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-gray-100 text-gray-500 text-xs font-bold border border-gray-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span> Sembunyi
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.galleries.show', $gallery) }}" class="p-2 text-gray-400 hover:text-blue-500 hover:bg-blue-50 rounded-xl transition-colors" title="Lihat Detail">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.galleries.edit', $gallery) }}" class="p-2 text-gray-400 hover:text-accent hover:bg-accent/10 rounded-xl transition-colors" title="Edit Data">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <form id="delete-form-{{ $gallery->id }}" action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete('delete-form-{{ $gallery->id }}', 'Foto {{ $gallery->title }}')" class="p-2 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-xl transition-colors" title="Hapus Data">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="p-0">
                                <x-admin.empty-state 
                                    icon="fa-images" 
                                    title="Galeri Masih Kosong" 
                                    message="Belum ada foto yang diunggah ke dalam galeri. Silakan tambah foto baru." 
                                    :actionUrl="route('admin.galleries.create')" 
                                    actionText="Unggah Foto" 
                                />
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($galleries->hasPages())
        <div class="p-6 border-t border-gray-100 bg-gray-50/50">
            {{ $galleries->links() }}
        </div>
        @else
        <div class="p-4 border-t border-gray-100 bg-gray-50/50 flex justify-between items-center text-sm text-gray-500 px-6">
            <span>Menampilkan {{ $galleries->count() }} foto galeri.</span>
        </div>
        @endif
    </div>
@endsection