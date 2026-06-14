<div class="grid grid-cols-1 lg:grid-cols-3 gap-10" x-data="avatarUpload('{{ isset($testimonial) && $testimonial->image ? asset('storage/' . $testimonial->image) : '' }}')">
    
    <!-- Upload Section (Profile) -->
    <div class="lg:col-span-1">
        <label class="text-sm font-bold text-gray-700 block mb-3">Foto Pelanggan <span class="text-gray-400 font-normal">(Opsional)</span></label>
        
        <div class="flex flex-col items-center">
            <div class="relative group cursor-pointer w-40 h-40 rounded-full bg-gray-50 border-2 border-dashed transition-all duration-300 overflow-hidden flex flex-col items-center justify-center shadow-inner @error('image') border-red-400 bg-red-50 @else border-gray-300 hover:border-primary hover:bg-primary/5 @enderror" 
                 @click="$refs.imageInput.click()" 
                 @dragover.prevent="isDragging = true" 
                 @dragleave.prevent="isDragging = false" 
                 @drop.prevent="handleDrop($event)"
                 :class="{'border-primary bg-primary/10 ring-4 ring-primary/20 scale-105': isDragging}">
                
                <template x-if="imageUrl">
                    <img :src="imageUrl" class="absolute inset-0 w-full h-full object-cover z-0" alt="Avatar">
                </template>
                
                <div class="relative z-10 flex flex-col items-center justify-center w-full h-full text-center transition-opacity" :class="{'opacity-0 group-hover:opacity-100 bg-black/50': imageUrl}">
                    <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary mb-2 shadow-sm" :class="{'text-white bg-white/20': imageUrl}">
                        <i class="fa-solid fa-camera text-lg"></i>
                    </div>
                    <span class="text-xs font-bold leading-tight px-4" :class="imageUrl ? 'text-white' : 'text-gray-500'">Upload Foto</span>
                </div>
                
                <input x-ref="imageInput" type="file" name="image" class="hidden" accept="image/png, image/jpeg, image/webp" @change="fileChosen">
            </div>
            
            <p class="text-xs text-gray-500 mt-4 text-center px-4">Disarankan rasio 1:1 (persegi). Maksimal 1MB.</p>
            
            @error('image')
                <p class="text-red-500 text-xs mt-2 flex items-center justify-center gap-1"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Form Section -->
    <div class="lg:col-span-2 space-y-6">
        <!-- Name -->
        <div class="space-y-2">
            <label class="text-sm font-bold text-gray-700">Nama Pelanggan <span class="text-red-500">*</span></label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fa-solid fa-user text-gray-400"></i>
                </div>
                <input type="text" name="name" value="{{ old('name', $testimonial->name ?? '') }}" required 
                       class="w-full bg-white border rounded-xl pl-11 pr-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('name') border-red-400 @else border-gray-200 @enderror" 
                       placeholder="Misal: Bapak Budi Santoso">
            </div>
            @error('name')
                <p class="text-red-500 text-xs mt-1 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</p>
            @enderror
        </div>

        <!-- Location -->
        <div class="space-y-2">
            <label class="text-sm font-bold text-gray-700">Lokasi / Asal (Opsional)</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fa-solid fa-location-dot text-gray-400"></i>
                </div>
                <input type="text" name="location" value="{{ old('location', $testimonial->location ?? '') }}" 
                       class="w-full bg-white border rounded-xl pl-11 pr-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('location') border-red-400 @else border-gray-200 @enderror" 
                       placeholder="Misal: Kampar, Riau">
            </div>
            @error('location')
                <p class="text-red-500 text-xs mt-1 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</p>
            @enderror
        </div>

        <!-- Content -->
        <div class="space-y-2">
            <label class="text-sm font-bold text-gray-700">Isi Testimoni <span class="text-red-500">*</span></label>
            <textarea name="content" rows="4" required
                      class="w-full bg-white border rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('content') border-red-400 @else border-gray-200 @enderror" 
                      placeholder="Tuliskan ulasan pengalaman pelanggan di sini...">{{ old('content', $testimonial->content ?? '') }}</textarea>
            @error('content')
                <p class="text-red-500 text-xs mt-1 flex items-center gap-1"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</p>
            @enderror
        </div>

        <!-- Status -->
        <div class="space-y-2">
            <label class="text-sm font-bold text-gray-700 block mb-3">Status Tampil</label>
            <label class="relative flex items-center cursor-pointer group w-max">
                <input type="hidden" name="is_active" value="0">
                <input type="checkbox" name="is_active" value="1" class="sr-only peer" {{ old('is_active', $testimonial->is_active ?? true) ? 'checked' : '' }}>
                <div class="w-14 h-7 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-primary"></div>
                <span class="ml-3 text-sm font-bold text-gray-700 peer-checked:text-primary transition-colors">Tampilkan di Web</span>
            </label>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('avatarUpload', (initialUrl) => ({
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
                // Validate size (1MB for avatar)
                if(file.size > 1 * 1024 * 1024) {
                    Swal.fire('Ukuran Terlalu Besar', 'Maksimal ukuran foto profil adalah 1MB.', 'error');
                    this.$refs.imageInput.value = '';
                    return;
                }
                
                // Validate type
                if(!['image/jpeg', 'image/png', 'image/webp'].includes(file.type)) {
                    Swal.fire('Format Tidak Didukung', 'Harap unggah foto dengan format JPG, PNG, atau WEBP.', 'error');
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