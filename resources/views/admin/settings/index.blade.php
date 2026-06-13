@extends('layouts.admin')

@section('content')
    <div class="mb-8">
        <h1 class="font-heading text-2xl font-bold text-dark">Pengaturan Website</h1>
        <p class="text-dark/50 text-sm">Kelola informasi dasar, SEO, dan kontak website.</p>
    </div>

    <div x-data="{ tab: 'general' }" class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="flex border-b border-gray-100 bg-gray-50/50">
            <button @click="tab = 'general'" :class="tab === 'general' ? 'bg-white border-primary text-primary' : 'border-transparent text-dark/40 hover:text-dark'" class="px-8 py-5 border-b-2 font-bold transition duration-300">Umum</button>
            <button @click="tab = 'seo'" :class="tab === 'seo' ? 'bg-white border-primary text-primary' : 'border-transparent text-dark/40 hover:text-dark'" class="px-8 py-5 border-b-2 font-bold transition duration-300">SEO & Meta</button>
            <button @click="tab = 'contact'" :class="tab === 'contact' ? 'bg-white border-primary text-primary' : 'border-transparent text-dark/40 hover:text-dark'" class="px-8 py-5 border-b-2 font-bold transition duration-300">Kontak & Sosial</button>
        </div>

        <div class="p-8 lg:p-12">
            <form action="{{ route('admin.settings.update') }}" method="POST">
                @csrf
                
                <div x-show="tab === 'general'" class="space-y-6">
                    @if($settings->has('general'))
                        @foreach($settings['general'] as $setting)
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-dark/70 ml-1">{{ ucwords(str_replace('_', ' ', $setting->key)) }}</label>
                                <textarea name="{{ $setting->key }}" rows="4" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition">{{ $setting->value }}</textarea>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div x-show="tab === 'seo'" x-cloak class="space-y-6">
                    @if($settings->has('seo'))
                        @foreach($settings['seo'] as $setting)
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-dark/70 ml-1">{{ ucwords(str_replace('_', ' ', $setting->key)) }}</label>
                                <textarea name="{{ $setting->key }}" rows="4" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition">{{ $setting->value }}</textarea>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div x-show="tab === 'contact'" x-cloak class="space-y-6">
                    @if($settings->has('contact'))
                        @foreach($settings['contact'] as $setting)
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-dark/70 ml-1">{{ ucwords(str_replace('_', ' ', $setting->key)) }}</label>
                                <textarea name="{{ $setting->key }}" rows="3" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-5 py-4 focus:outline-none focus:border-primary transition">{{ $setting->value }}</textarea>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="mt-12 pt-8 border-t border-gray-100 flex justify-end">
                    <button type="submit" class="btn-primary px-12 py-4 shadow-lg shadow-primary/20">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
@endsection