<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Setting;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        User::updateOrCreate(
            ['email' => 'admin@sawitprima.com'],
            [
                'name' => 'Admin Sawit Prima',
                'password' => Hash::make('password'),
            ]
        );

        // General Settings
        $settings = [
            // General
            ['key' => 'site_name', 'value' => 'Sawit Prima Organik', 'group' => 'general'],
            ['key' => 'site_tagline', 'value' => 'Pupuk Organik Premium Khusus Kelapa Sawit', 'group' => 'general'],
            ['key' => 'site_description', 'value' => 'Sawit Prima Organik adalah pupuk organik premium yang dirancang khusus untuk meningkatkan produktivitas kelapa sawit dengan teknologi mikrobia dan nutrisi lengkap.', 'group' => 'general'],
            
            // SEO
            ['key' => 'meta_title', 'value' => 'Sawit Prima Organik - Pupuk Organik Premium Kelapa Sawit', 'group' => 'seo'],
            ['key' => 'meta_description', 'value' => 'Pupuk organik premium khusus kelapa sawit. Meningkatkan TBS, memperbaiki struktur tanah, dan ramah lingkungan.', 'group' => 'seo'],
            ['key' => 'meta_keywords', 'value' => 'pupuk sawit, pupuk organik, kelapa sawit, sawit prima organik, booster sawit', 'group' => 'seo'],
            
            // Contact
            ['key' => 'contact_whatsapp', 'value' => '6281234567890', 'group' => 'contact'],
            ['key' => 'contact_email', 'value' => 'info@sawitprima.com', 'group' => 'contact'],
            ['key' => 'contact_address', 'value' => 'Jl. Kebun Sawit No. 1, Riau, Indonesia', 'group' => 'contact'],
            ['key' => 'contact_maps', 'value' => 'https://www.google.com/maps/embed?pb=...', 'group' => 'contact'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
