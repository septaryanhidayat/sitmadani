<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\Setting;
use App\Services\WebpService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminSettingController extends Controller
{
    protected WebpService $webpService;

    public function __construct(WebpService $webpService)
    {
        $this->webpService = $webpService;
    }

    public function index()
    {
        $settings = Setting::all()->pluck('value', 'key')->toArray();

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', 'og_image_file', 'site_logo_file']);

        // Handle OG Image file upload (JPEG/PNG required for WhatsApp and social media preview)
        if ($request->hasFile('og_image_file')) {
            $file = $request->file('og_image_file');
            $ext = strtolower($file->getClientOriginalExtension());
            if (! in_array($ext, ['jpg', 'jpeg', 'png'])) {
                $ext = 'jpg';
            }
            $filename = 'og-image-'.time().'.'.$ext;
            $file->move(public_path('uploads'), $filename);
            $data['og_image'] = '/uploads/'.$filename;
        }

        // Handle Site Logo file upload
        if ($request->hasFile('site_logo_file')) {
            $converted = $this->webpService->processUploadedFile($request->file('site_logo_file'), 'settings', 95, 800);
            if ($converted['success']) {
                $data['site_logo'] = $converted['url'];
            }
        }

        foreach ($data as $key => $val) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $val ?? '', 'group' => 'general']
            );
        }

        if (isset($data['analytics_base_hits']) && is_numeric($data['analytics_base_hits'])) {
            @file_put_contents(storage_path('app/visitor_hits.txt'), (string) (int) $data['analytics_base_hits']);
        }

        try {
            ActivityLog::create([
                'user_id' => Auth::id(),
                'user_name' => Auth::user()?->name ?? 'Administrator',
                'action' => 'settings_update',
                'description' => 'Memperbarui konfigurasi website dan pengaturan SEO & OpenGraph',
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'status' => 'info',
            ]);
        } catch (\Throwable $e) {
            Log::warning('ActivityLog failed: '.$e->getMessage());
        }

        return back()->with('success', 'Pengaturan website dan SEO berhasil disimpan!');
    }
}
