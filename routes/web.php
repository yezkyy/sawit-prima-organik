<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/produk', [HomeController::class, 'product'])->name('product');
Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery');
Route::get('/testimoni', [TestimonialController::class, 'index'])->name('testimonial');
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');

Route::get('/sitemap.xml', [HomeController::class, 'sitemap'])->name('sitemap');

// Admin Routes (Placeholder for now)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login');
    Route::post('/login', [App\Http\Controllers\Admin\AuthController::class, 'authenticate'])->name('login.post');
    Route::post('/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        
        Route::resource('banners', App\Http\Controllers\Admin\BannerController::class);
        Route::resource('galleries', App\Http\Controllers\Admin\GalleryController::class);
        Route::resource('testimonials', App\Http\Controllers\Admin\TestimonialController::class);
        
        Route::get('profile', [App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('profile.index');
        Route::patch('profile', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('profile.update');
        Route::put('profile/password', [App\Http\Controllers\Admin\ProfileController::class, 'updatePassword'])->name('profile.password');

        Route::get('settings', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
        Route::post('settings', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');
    });
});
