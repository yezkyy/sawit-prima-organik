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

        // Generate dynamic chart data for the last 6 months
        $months = [];
        $bannerData = [];
        $galleryData = [];
        $testimonialData = [];

        for ($i = 5; $i >= 0; $i--) {
            $date = now()->subMonths($i);
            $months[] = $date->translatedFormat('M');
            
            $bannerData[] = Banner::whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->count();
            
            $galleryData[] = Gallery::whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->count();
                
            $testimonialData[] = Testimonial::whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->count();
        }

        $chartData = [
            'labels' => $months,
            'banners' => $bannerData,
            'galleries' => $galleryData,
            'testimonials' => $testimonialData,
        ];
        
        return view('admin.dashboard', compact('stats', 'chartData'));
    }
}
