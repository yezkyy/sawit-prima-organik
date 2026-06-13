<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Gallery;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'banners' => Banner::count(),
            'galleries' => Gallery::count(),
            'testimonials' => Testimonial::count(),
        ];
        
        return view('admin.dashboard', compact('stats'));
    }
}
