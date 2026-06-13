<div class="space-y-6">
    <div class="space-y-2">
        <label class="text-sm font-bold text-dark/70 ml-1">Judul Foto</label>
        <input type="text" name="title" value="{{ old('title', $gallery->title ?? '') }}" required class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition" placeholder="Masukkan judul foto">
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label class="text-sm font-bold text-dark/70 ml-1">Kategori</label>
            <select name="category" required class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition appearance-none">
                <option value="">Pilih Kategori</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat }}" {{ (old('category', $gallery->category ?? '') == $cat) ? 'selected' : '' }}>{{ $cat }}</option>
                @endforeach
            </select>
        </div>
        <div class="space-y-2 flex flex-col">
            <label class="text-sm font-bold text-dark/70 ml-1 mb-4">Status</label>
            <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" name="is_active" class="sr-only peer" {{ old('is_active', $gallery->is_active ?? true) ? 'checked' : '' }}>
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                <span class="ml-3 text-sm font-medium text-dark/70">Tampilkan di Website</span>
            </label>
        </div>
    </div>

    <div class="space-y-2">
        <label class="text-sm font-bold text-dark/70 ml-1">File Foto</label>
        @if(isset($gallery) && $gallery->image)
            <div class="mb-4">
                <img src="{{ asset('storage/' . $gallery->image) }}" class="w-40 h-40 object-cover rounded-xl border border-gray-200 shadow-sm">
            </div>
        @endif
        <input type="file" name="image" {{ isset($gallery) ? '' : 'required' }} class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition">
        <p class="text-xs text-dark/40 italic">* Format: JPG, PNG. Maksimal 2MB.</p>
    </div>
</div>