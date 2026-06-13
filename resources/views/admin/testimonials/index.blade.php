@extends('layouts.admin')

@section('content')
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="font-heading text-2xl font-bold text-dark">Manajemen Testimoni</h1>
            <p class="text-dark/50 text-sm">Kelola ulasan dari pelanggan dan mitra.</p>
        </div>
        <a href="{{ route('admin.testimonials.create') }}" class="btn-primary flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
            <span>Tambah Testimoni</span>
        </a>
    </div>

    <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-100">
                        <th class="px-6 py-4 font-bold text-dark text-sm uppercase tracking-wider w-24 text-center">Foto</th>
                        <th class="px-6 py-4 font-bold text-dark text-sm uppercase tracking-wider">Pelanggan & Lokasi</th>
                        <th class="px-6 py-4 font-bold text-dark text-sm uppercase tracking-wider">Isi Testimoni</th>
                        <th class="px-6 py-4 font-bold text-dark text-sm uppercase tracking-wider w-32 text-center">Status</th>
                        <th class="px-6 py-4 font-bold text-dark text-sm uppercase tracking-wider w-40 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($testimonials as $t)
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="px-6 py-4">
                                @if($t->image)
                                    <img src="{{ asset('storage/' . $t->image) }}" alt="{{ $t->name }}" class="w-12 h-12 object-cover rounded-full border border-gray-100 shadow-sm mx-auto">
                                @else
                                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold mx-auto">
                                        {{ substr($t->name, 0, 1) }}
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <h4 class="font-bold text-dark mb-1">{{ $t->name }}</h4>
                                <p class="text-xs text-dark/40 font-medium">{{ $t->location }}</p>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-xs text-dark/60 line-clamp-2 leading-relaxed">"{{ $t->content }}"</p>
                            </td>
                            <td class="px-6 py-4 text-center">
                                @if($t->is_active)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-bold">Aktif</span>
                                @else
                                    <span class="inline-flex items-center px-3 py-1 rounded-full bg-red-100 text-red-700 text-xs font-bold">Nonaktif</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.testimonials.edit', $t) }}" class="p-2 text-primary hover:bg-primary/10 rounded-lg transition" title="Edit">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                    </a>
                                    <form action="{{ route('admin.testimonials.destroy', $t) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus testimoni ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition" title="Hapus">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-20 text-center text-dark/40 italic">Belum ada data testimoni.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection