<div class="space-y-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label class="text-sm font-bold text-dark/70 ml-1">Nama Pelanggan</label>
            <input type="text" name="name" value="{{ old('name', $testimonial->name ?? '') }}" required class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition" placeholder="Masukkan nama pelanggan">
        </div>
        <div class="space-y-2">
            <label class="text-sm font-bold text-dark/70 ml-1">Lokasi (Opsional)</label>
            <input type="text" name="location" value="{{ old('location', $testimonial->location ?? '') }}" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition" placeholder="Contoh: Kampar, Riau">
        </div>
    </div>

    <div class="space-y-2">
        <label class="text-sm font-bold text-dark/70 ml-1">Isi Testimoni</label>
        <textarea name="content" rows="4" required class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition" placeholder="Tuliskan ulasan pelanggan di sini...">{{ old('content', $testimonial->content ?? '') }}</textarea>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label class="text-sm font-bold text-dark/70 ml-1">Foto (Opsional)</label>
            @if(isset($testimonial) && $testimonial->image)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $testimonial->image) }}" class="w-20 h-20 object-cover rounded-full border border-gray-200 shadow-sm">
                </div>
            @endif
            <input type="file" name="image" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition">
            <p class="text-xs text-dark/40 italic">* Format: JPG, PNG. Rekomendasi 1:1. Maksimal 1MB.</p>
        </div>
        <div class="space-y-2 flex flex-col">
            <label class="text-sm font-bold text-dark/70 ml-1 mb-4">Status</label>
            <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" name="is_active" class="sr-only peer" {{ old('is_active', $testimonial->is_active ?? true) ? 'checked' : '' }}>
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                <span class="ml-3 text-sm font-medium text-dark/70">Tampilkan di Website</span>
            </label>
        </div>
    </div>
</div>