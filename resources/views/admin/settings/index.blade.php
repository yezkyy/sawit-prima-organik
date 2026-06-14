@extends('layouts.admin')

@section('title', 'Pengaturan Sistem')

@section('content')
    <!-- Header -->
    <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="font-heading text-2xl font-bold text-gray-900">Pengaturan Website</h1>
            <p class="text-gray-500 text-sm mt-1">Konfigurasi identitas, SEO, dan informasi kontak publik.</p>
        </div>
        <div class="flex items-center gap-3">
            <button type="button" onclick="document.getElementById('settings-form').submit();" class="btn-primary py-3 px-6 shadow-lg shadow-primary/20 text-sm" id="btn-save-top">
                <i class="fa-solid fa-floppy-disk mr-2"></i> Simpan Perubahan
            </button>
        </div>
    </div>

    <!-- Main Content -->
    <div x-data="{ tab: 'general', isSubmitting: false }" class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
        
        <!-- Tabs -->
        <div class="flex flex-nowrap overflow-x-auto border-b border-gray-100 bg-gray-50/50 custom-scrollbar">
            <button @click="tab = 'general'" 
                    :class="tab === 'general' ? 'bg-white border-primary text-primary shadow-sm' : 'border-transparent text-gray-500 hover:text-gray-900 hover:bg-white/50'" 
                    class="px-8 py-5 border-b-2 font-bold transition-all duration-300 whitespace-nowrap flex items-center gap-2">
                <i class="fa-solid fa-globe"></i> Informasi Umum
            </button>
            <button @click="tab = 'seo'" 
                    :class="tab === 'seo' ? 'bg-white border-primary text-primary shadow-sm' : 'border-transparent text-gray-500 hover:text-gray-900 hover:bg-white/50'" 
                    class="px-8 py-5 border-b-2 font-bold transition-all duration-300 whitespace-nowrap flex items-center gap-2">
                <i class="fa-solid fa-magnifying-glass"></i> SEO & Meta
            </button>
            <button @click="tab = 'contact'" 
                    :class="tab === 'contact' ? 'bg-white border-primary text-primary shadow-sm' : 'border-transparent text-gray-500 hover:text-gray-900 hover:bg-white/50'" 
                    class="px-8 py-5 border-b-2 font-bold transition-all duration-300 whitespace-nowrap flex items-center gap-2">
                <i class="fa-solid fa-address-book"></i> Kontak
            </button>
        </div>

        <!-- Form -->
        <div class="p-8 lg:p-12 relative">
            
            <!-- Loading Overlay -->
            <div x-show="isSubmitting" class="absolute inset-0 z-10 bg-white/80 backdrop-blur-sm flex items-center justify-center rounded-b-[2rem]" style="display: none;">
                <div class="flex flex-col items-center gap-3">
                    <i class="fa-solid fa-circle-notch fa-spin text-4xl text-primary"></i>
                    <p class="font-bold text-gray-900 animate-pulse">Menyimpan Perubahan...</p>
                </div>
            </div>

            <form id="settings-form" action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" @submit="isSubmitting = true">
                @csrf
                
                @php
                    $getSetting = function($group, $key) use ($settings) {
                        if(!isset($settings[$group])) return '';
                        $item = $settings[$group]->firstWhere('key', $key);
                        return $item ? $item->value : '';
                    };
                @endphp

                <!-- Tab: General -->
                <div x-show="tab === 'general'" x-transition.opacity.duration.300ms class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                    <div class="lg:col-span-2 space-y-6">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700">Nama Website</label>
                            <input type="text" name="site_name" value="{{ $getSetting('general', 'site_name') }}" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('site_name') border-red-500 @enderror">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700">Tagline / Slogan</label>
                            <input type="text" name="site_tagline" value="{{ $getSetting('general', 'site_tagline') }}" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700">Deskripsi Singkat</label>
                            <textarea name="site_description" rows="4" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">{{ $getSetting('general', 'site_description') }}</textarea>
                            <p class="text-xs text-gray-400 mt-1"><i class="fa-solid fa-circle-info mr-1"></i> Muncul di bagian footer atau tentang kami.</p>
                        </div>
                    </div>
                    <div class="lg:col-span-1 space-y-6">
                        <!-- Logo Upload -->
                        <div class="bg-gray-50 p-6 rounded-2xl border border-gray-200 text-center" x-data="imageViewer('{{ $getSetting('general', 'site_logo') ? asset('storage/' . $getSetting('general', 'site_logo')) : asset('images/logo.png') }}')">
                            <label class="text-sm font-bold text-gray-700 block mb-4">Logo Website</label>
                            
                            <div class="relative group cursor-pointer inline-block w-full max-w-[200px] aspect-square rounded-2xl bg-white border-2 border-dashed border-gray-300 hover:border-primary transition-colors overflow-hidden mx-auto" @click="$refs.logoInput.click()">
                                <template x-if="imageUrl">
                                    <img :src="imageUrl" class="w-full h-full object-contain p-4 group-hover:opacity-50 transition-opacity" alt="Logo Preview">
                                </template>
                                <template x-if="!imageUrl">
                                    <div class="absolute inset-0 flex flex-col items-center justify-center text-gray-400 group-hover:text-primary transition-colors">
                                        <i class="fa-solid fa-cloud-arrow-up text-3xl mb-2"></i>
                                        <span class="text-xs font-semibold">Upload Logo</span>
                                    </div>
                                </template>
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                    <span class="text-white text-sm font-bold">Ganti Foto</span>
                                </div>
                                <input x-ref="logoInput" type="file" name="site_logo" class="hidden" accept="image/png, image/jpeg, image/webp" @change="fileChosen">
                            </div>
                            <p class="text-xs text-gray-500 mt-4">Format: PNG, JPG (Transparan disarankan). Maks 2MB.</p>
                            @error('site_logo')
                                <p class="text-red-500 text-xs mt-2 flex items-center justify-center gap-1"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Tab: SEO -->
                <div x-show="tab === 'seo'" style="display: none;" x-transition.opacity.duration.300ms class="max-w-3xl space-y-6">
                    <div class="p-5 bg-blue-50 border border-blue-100 rounded-xl mb-6 flex gap-4">
                        <i class="fa-solid fa-lightbulb text-blue-500 text-xl shrink-0 mt-0.5"></i>
                        <div>
                            <h4 class="font-bold text-blue-800 text-sm mb-1">Tips SEO</h4>
                            <p class="text-xs text-blue-600">Isi dengan kata kunci yang relevan agar website mudah ditemukan di mesin pencari seperti Google. Contoh: "Pupuk Sawit Terbaik, Pupuk Organik Riau".</p>
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-gray-700">Meta Title</label>
                        <input type="text" name="meta_title" value="{{ $getSetting('seo', 'meta_title') }}" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        <p class="text-xs text-gray-400 mt-1">Judul yang muncul pada tab browser dan hasil pencarian Google.</p>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-gray-700">Meta Description</label>
                        <textarea name="meta_description" rows="3" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">{{ $getSetting('seo', 'meta_description') }}</textarea>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-gray-700">Meta Keywords</label>
                        <textarea name="meta_keywords" rows="2" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">{{ $getSetting('seo', 'meta_keywords') }}</textarea>
                        <p class="text-xs text-gray-400 mt-1">Pisahkan kata kunci dengan koma (,).</p>
                    </div>
                </div>

                <!-- Tab: Contact -->
                <div x-show="tab === 'contact'" style="display: none;" x-transition.opacity.duration.300ms class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700">Nomor WhatsApp</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-500 font-bold">+62</span>
                                <input type="text" name="contact_whatsapp" value="{{ str_replace('62', '', $getSetting('contact', 'contact_whatsapp')) }}" class="w-full bg-gray-50 border border-gray-200 rounded-xl pl-12 pr-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" placeholder="81234567890">
                            </div>
                            <p class="text-xs text-gray-400 mt-1">Masukkan angka mulai dari 8. Contoh: 812...</p>
                        </div>
                        
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700">Alamat Email</label>
                            <input type="email" name="contact_email" value="{{ $getSetting('contact', 'contact_email') }}" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700">Alamat Kantor/Pabrik</label>
                            <textarea name="contact_address" rows="3" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">{{ $getSetting('contact', 'contact_address') }}</textarea>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700">Google Maps Embed Link (Src URL)</label>
                            <textarea name="contact_maps" rows="5" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all font-mono text-xs" placeholder="https://www.google.com/maps/embed?pb=...">{{ $getSetting('contact', 'contact_maps') }}</textarea>
                            <p class="text-xs text-gray-400 mt-1">Ambil link URL (src) dari fitur "Embed a map" di Google Maps.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 pt-8 border-t border-gray-100 flex justify-end">
                    <button type="submit" class="btn-primary px-10 py-4 shadow-lg shadow-primary/20 text-sm">
                        <i class="fa-solid fa-floppy-disk mr-2"></i> Simpan Pengaturan
                    </button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('imageViewer', (initialUrl) => ({
                imageUrl: initialUrl,
                fileChosen(event) {
                    this.fileToDataUrl(event, src => this.imageUrl = src)
                },
                fileToDataUrl(event, callback) {
                    if (! event.target.files.length) return
                    let file = event.target.files[0],
                        reader = new FileReader()
                    
                    // Validate size (2MB)
                    if(file.size > 2 * 1024 * 1024) {
                        Swal.fire('File Terlalu Besar', 'Maksimal ukuran file adalah 2MB.', 'error');
                        event.target.value = '';
                        return;
                    }

                    reader.readAsDataURL(file)
                    reader.onload = e => callback(e.target.result)
                }
            }))
        })
    </script>
    @endpush
@endsection