<div class="grid grid-cols-1 lg:grid-cols-3 gap-10" x-data="galleryUpload('{{ isset($gallery) && $gallery->image ? asset('storage/' . $gallery->image) : '' }}')">
    
    <!-- Upload Section -->
    <div class="lg:col-span-1">
        <label class="text-sm font-bold text-gray-700 block mb-3">File Foto <span class="text-red-500">*</span></label>
        <div class="relative group cursor-pointer w-full aspect-square rounded-2xl bg-gray-50 border-2 border-dashed transition-all duration-300 overflow-hidden flex flex-col items-center justify-center @error('image') border-red-400 bg-red-50 @else border-gray-300 hover:border-primary hover:bg-primary/5 @enderror" 
             @click="$refs.imageInput.click()" 
             @dragover.prevent="isDragging = true" 
             @dragleave.prevent="isDragging = false" 
             @drop.prevent="handleDrop($event)"
             :class="{'border-primary bg-primary/10 ring-4 ring-primary/20': isDragging}">
            
            <template x-if="imageUrl">
                <img :src="imageUrl" class="absolute inset-0 w-full h-full object-cover z-0" alt="Preview">
            </template>
            
            <div class="relative z-10 flex flex-col items-center p-6 text-center" :class="{'opacity-0 group-hover:opacity-100 bg-black/50 absolute inset-0 justify-center': imageUrl}">
                <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center text-primary mb-3 shadow-sm" :class="{'text-white bg-white/20': imageUrl}">
                    <i class="fa-solid fa-cloud-arrow-up text-xl"></i>
                </div>
                <span class="text-sm font-bold" :class="imageUrl ? 'text-white' : 'text-gray-700'">Klik atau Drag & Drop</span>
                <span class="text-xs mt-1" :class="imageUrl ? 'text-white/80' : 'text-gray-500'">Format: JPG, PNG</span>
                <span class="text-xs font-semibold mt-1" :class="imageUrl ? 'text-white/80' : 'text-primary'">Maks 2MB</span>
            </div>
            
            <input x-ref="imageInput" type="file" name="image" class="hidden" accept="image/png, image/jpeg" @change="fileChosen" {{ isset($gallery) ? '' : 'required' }}>
        </div>
        @error('image')
            <p class="text-red-500 text-xs mt-2 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</p>
        @enderror
    </div>

    <!-- Form Section -->
    <div class="lg:col-span-2 space-y-6">
        <!-- Title -->
        <div class="space-y-2">
            <label class="text-sm font-bold text-gray-700">Judul Foto <span class="text-red-500">*</span></label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fa-solid fa-heading text-gray-400"></i>
                </div>
                <input type="text" name="title" value="{{ old('title', $gallery->title ?? '') }}" required 
                       class="w-full bg-white border rounded-xl pl-11 pr-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('title') border-red-400 @else border-gray-200 @enderror" 
                       placeholder="Misal: Panen Kelapa Sawit 2026">
            </div>
            @error('title')
                <p class="text-red-500 text-xs mt-1 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</p>
            @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Category -->
            <div class="space-y-2">
                <label class="text-sm font-bold text-gray-700">Kategori <span class="text-red-500">*</span></label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fa-solid fa-tags text-gray-400"></i>
                    </div>
                    <select name="category" required 
                            class="appearance-none w-full bg-white border rounded-xl pl-11 pr-10 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('category') border-red-400 @else border-gray-200 @enderror text-gray-700">
                        <option value="" disabled {{ !isset($gallery) ? 'selected' : '' }}>Pilih Kategori</option>
                        @foreach($categories ?? ['Produk', 'Aktivitas'] as $cat)
                            <option value="{{ $cat }}" {{ (old('category', $gallery->category ?? '') == $cat) ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                        <i class="fa-solid fa-chevron-down text-gray-400 text-xs"></i>
                    </div>
                </div>
                @error('category')
                    <p class="text-red-500 text-xs mt-1 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</p>
                @enderror
            </div>

            <!-- Status -->
            <div class="space-y-2">
                <label class="text-sm font-bold text-gray-700 block mb-3">Status Tampil</label>
                <label class="relative flex items-center cursor-pointer group">
                    <input type="hidden" name="is_active" value="0">
                    <input type="checkbox" name="is_active" value="1" class="sr-only peer" {{ old('is_active', $gallery->is_active ?? true) ? 'checked' : '' }}>
                    <div class="w-14 h-7 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-primary"></div>
                    <span class="ml-3 text-sm font-bold text-gray-700 peer-checked:text-primary transition-colors">Tampilkan di Web</span>
                </label>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('galleryUpload', (initialUrl) => ({
            imageUrl: initialUrl,
            isDragging: false,
            
            handleDrop(event) {
                this.isDragging = false;
                if (event.dataTransfer.files.length) {
                    this.$refs.imageInput.files = event.dataTransfer.files;
                    this.processFile(event.dataTransfer.files[0]);
                }
            },
            
            fileChosen(event) {
                if (event.target.files.length) {
                    this.processFile(event.target.files[0]);
                }
            },
            
            processFile(file) {
                // Validate size (2MB)
                if(file.size > 2 * 1024 * 1024) {
                    Swal.fire('Ukuran Terlalu Besar', 'Maksimal ukuran gambar adalah 2MB.', 'error');
                    this.$refs.imageInput.value = '';
                    return;
                }
                
                // Validate type
                if(!['image/jpeg', 'image/png'].includes(file.type)) {
                    Swal.fire('Format Tidak Didukung', 'Harap unggah gambar dengan format JPG atau PNG.', 'error');
                    this.$refs.imageInput.value = '';
                    return;
                }

                let reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = e => this.imageUrl = e.target.result;
            }
        }))
    });
</script>
@endpush