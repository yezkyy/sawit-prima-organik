@extends('layouts.admin')

@section('title', 'Manajemen Testimoni')

@section('content')
    <!-- Header Section -->
    <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="font-heading text-2xl font-bold text-gray-900">Manajemen Testimoni</h1>
            <p class="text-gray-500 text-sm mt-1">Kelola ulasan dan komentar positif dari pelanggan setia.</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="btn-secondary py-2.5 px-4 text-sm" onclick="window.location.reload()">
                <i class="fa-solid fa-rotate-right"></i>
            </button>
            <a href="{{ route('admin.testimonials.create') }}" class="btn-primary py-2.5 px-5 text-sm shadow-lg shadow-primary/20">
                <i class="fa-solid fa-plus mr-2"></i> Tambah Testimoni
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
                    <input type="text" placeholder="Cari nama atau ulasan..." class="w-full sm:w-64 bg-white border border-gray-200 rounded-xl pl-9 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                </div>
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
                        <th class="px-6 py-4 font-bold text-gray-500 text-xs uppercase tracking-wider w-20">Foto</th>
                        <th class="px-6 py-4 font-bold text-gray-500 text-xs uppercase tracking-wider">Pelanggan <i class="fa-solid fa-sort ml-1 cursor-pointer hover:text-primary"></i></th>
                        <th class="px-6 py-4 font-bold text-gray-500 text-xs uppercase tracking-wider">Ulasan</th>
                        <th class="px-6 py-4 font-bold text-gray-500 text-xs uppercase tracking-wider w-32 text-center">Status</th>
                        <th class="px-6 py-4 font-bold text-gray-500 text-xs uppercase tracking-wider w-40 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($testimonials as $t)
                        <tr class="hover:bg-gray-50/50 transition-colors group">
                            <td class="px-6 py-4 text-center">
                                <input type="checkbox" class="w-4 h-4 text-primary bg-white border-gray-300 rounded focus:ring-primary focus:ring-2 cursor-pointer">
                            </td>
                            <td class="px-6 py-4">
                                @if($t->image)
                                    <div class="w-12 h-12 rounded-full overflow-hidden shadow-sm border-2 border-white ring-1 ring-gray-100 group-hover:ring-primary/30 transition-colors">
                                        <img src="{{ asset('storage/' . $t->image) }}" alt="{{ $t->name }}" class="w-full h-full object-cover">
                                    </div>
                                @else
                                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-100 to-gray-200 text-gray-500 flex items-center justify-center font-bold text-lg shadow-sm border-2 border-white ring-1 ring-gray-100 group-hover:ring-primary/30 transition-colors">
                                        {{ substr($t->name, 0, 1) }}
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <h4 class="font-bold text-gray-900 mb-1 group-hover:text-primary transition-colors">{{ $t->name }}</h4>
                                <p class="text-xs text-gray-500 flex items-center gap-1">
                                    <i class="fa-solid fa-location-dot text-gray-400"></i> {{ $t->location ?: '-' }}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-xs text-gray-600 line-clamp-2 max-w-sm italic">"{{ $t->content }}"</p>
                            </td>
                            <td class="px-6 py-4 text-center">
                                @if($t->is_active)
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-green-50 text-green-600 text-xs font-bold border border-green-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Tampil
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-gray-100 text-gray-500 text-xs font-bold border border-gray-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span> Draft
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.testimonials.show', $t) }}" class="p-2 text-gray-400 hover:text-blue-500 hover:bg-blue-50 rounded-xl transition-colors" title="Lihat Detail">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.testimonials.edit', $t) }}" class="p-2 text-gray-400 hover:text-accent hover:bg-accent/10 rounded-xl transition-colors" title="Edit Data">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <form id="delete-form-{{ $t->id }}" action="{{ route('admin.testimonials.destroy', $t) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete('delete-form-{{ $t->id }}', 'Testimoni {{ $t->name }}')" class="p-2 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-xl transition-colors" title="Hapus Data">
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
                                    icon="fa-comments" 
                                    title="Belum ada Testimoni" 
                                    message="Tambahkan ulasan pelanggan pertama Anda untuk meningkatkan kepercayaan calon pembeli." 
                                    :actionUrl="route('admin.testimonials.create')" 
                                    actionText="Tambah Testimoni" 
                                />
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($testimonials->hasPages())
        <div class="p-6 border-t border-gray-100 bg-gray-50/50">
            {{ $testimonials->links() }}
        </div>
        @else
        <div class="p-4 border-t border-gray-100 bg-gray-50/50 flex justify-between items-center text-sm text-gray-500 px-6">
            <span>Menampilkan {{ $testimonials->count() }} data testimoni.</span>
        </div>
        @endif
    </div>
@endsection