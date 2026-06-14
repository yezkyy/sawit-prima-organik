<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->groupBy('group');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', 'site_logo']);
        
        // Handle WhatsApp formatting
        if (isset($data['contact_whatsapp'])) {
            $wa = preg_replace('/[^0-9]/', '', $data['contact_whatsapp']);
            // If it starts with 0, replace with 62
            if (str_starts_with($wa, '0')) {
                $wa = '62' . substr($wa, 1);
            }
            // If it doesn't start with 62, prepend it (assuming it's a raw number)
            elseif (!str_starts_with($wa, '62') && !empty($wa)) {
                $wa = '62' . $wa;
            }
            $data['contact_whatsapp'] = $wa;
        }

        // Handle File Uploads
        if ($request->hasFile('site_logo')) {
            $file = $request->file('site_logo');
            $path = $file->store('settings', 'public');
            Setting::updateOrCreate(['key' => 'site_logo'], ['value' => $path, 'group' => 'general']);
        }

        foreach ($data as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->route('admin.settings.index')->with('success', 'Pengaturan berhasil diperbarui.');
    }
}
