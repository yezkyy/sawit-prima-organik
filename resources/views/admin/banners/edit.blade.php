@extends('layouts.admin')

@section('content')
    <div class="mb-8">
        <a href="{{ route('admin.banners.index') }}" class="inline-flex items-center text-sm font-bold text-primary hover:underline mb-4">
            <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
            Kembali ke Daftar Banner
        </a>
        <h1 class="font-heading text-2xl font-bold text-dark">Edit Banner</h1>
    </div>

    <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 max-w-4xl">
        <form action="{{ route('admin.banners.update', $banner) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.banners._form')
            <div class="mt-10 pt-6 border-t border-gray-100 flex justify-end">
                <button type="submit" class="btn-primary px-10 py-4">Perbarui Banner</button>
            </div>
        </form>
    </div>
@endsection