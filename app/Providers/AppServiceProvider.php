<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            if (!app()->runningInConsole() && Schema::hasTable('settings')) {
                $settings = Setting::all()->pluck('value', 'key')->toArray();
                View::share('site_settings', $settings);
            }
        } catch (\Exception $e) {
            // Silently fail if database is not ready
        }
    }
}
