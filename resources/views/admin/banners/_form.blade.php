<div class="space-y-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label class="text-sm font-bold text-dark/70 ml-1">Judul Banner</label>
            <input type="text" name="title" value="{{ old('title', $banner->title ?? '') }}" required class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition" placeholder="Masukkan judul banner">
        </div>
        <div class="space-y-2">
            <label class="text-sm font-bold text-dark/70 ml-1">Link Tujuan (Opsional)</label>
            <input type="text" name="link" value="{{ old('link', $banner->link ?? '') }}" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition" placeholder="https://...">
        </div>
    </div>

    <div class="space-y-2">
        <label class="text-sm font-bold text-dark/70 ml-1">Deskripsi Singkat</label>
        <textarea name="description" rows="3" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition" placeholder="Tuliskan deskripsi banner...">{{ old('description', $banner->description ?? '') }}</textarea>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label class="text-sm font-bold text-dark/70 ml-1">Gambar Banner</label>
            @if(isset($banner) && $banner->image)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $banner->image) }}" class="w-40 h-24 object-cover rounded-xl border border-gray-200 shadow-sm">
                </div>
            @endif
            <input type="file" name="image" {{ isset($banner) ? '' : 'required' }} class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition">
            <p class="text-xs text-dark/40 italic">* Rekomendasi ukuran 1920x800px. Maksimal 2MB.</p>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="space-y-2">
                <label class="text-sm font-bold text-dark/70 ml-1">Urutan</label>
                <input type="number" name="order" value="{{ old('order', $banner->order ?? 0) }}" required class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition">
            </div>
            <div class="space-y-2 flex flex-col">
                <label class="text-sm font-bold text-dark/70 ml-1 mb-4">Status</label>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_active" class="sr-only peer" {{ old('is_active', $banner->is_active ?? true) ? 'checked' : '' }}>
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                    <span class="ml-3 text-sm font-medium text-dark/70">Aktif</span>
                </label>
            </div>
        </div>
    </div>
</div>