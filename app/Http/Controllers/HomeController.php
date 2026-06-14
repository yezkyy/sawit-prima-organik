<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Testimonial;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('is_active', true)->orderBy('order')->get();
        $testimonials = Testimonial::where('is_active', true)->latest()->take(6)->get();
        $galleries = Gallery::where('is_active', true)->latest()->take(3)->get();
        
        return view('pages.home', compact('banners', 'testimonials', 'galleries'));
    }

    public function product()
    {
        return view('pages.product');
    }

    public function sitemap()
    {
        return response()->view('sitemap', [
            'routes' => ['home', 'product', 'gallery', 'testimonial', 'contact'],
        ])->header('Content-Type', 'text/xml');
    }
}
