<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::where('is_active', true)->latest()->get();
        $categories = ['Produk', 'Aktivitas', 'Kebun', 'Dokumentasi'];
        
        return view('pages.gallery', compact('galleries', 'categories'));
    }
}
