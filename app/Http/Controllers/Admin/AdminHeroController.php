<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\Setting;
use App\Services\WebpService;
use Illuminate\Http\Request;

class AdminHeroController extends Controller
{
    public function __construct(protected WebpService $webpService) {}

    /**
     * Default slides fallback
     */
    protected function getDefaultSlides(string $unit = 'yayasan'): array
    {
        if ($unit === 'tk') {
            return [
                [
                    'active' => true,
                    'badge' => 'TKS IT MADANI KAYUAGUNG • TERAKREDITASI B',
                    'title' => 'Membentuk Generasi Rabbani yang Kreatif, Cerdas, dan Mandiri',
                    'subtitle' => 'Pendidikan Anak Usia Dini berbasis fitrah, adab islami, tahfidz juz 30 cilik, dan pembelajaran sentra bermakna.',
                    'image' => '/uploads/hero-slide-yayasan-2.webp',
                    'btn_text' => 'Profil TKS IT',
                    'btn_link' => '/tk/tentang-kami',
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'SPMB TKS IT',
                    'btn2_link' => '/tk/ppdb',
                    'btn2_target' => '_self',
                ],
            ];
        }

        if ($unit === 'sd') {
            return [
                [
                    'active' => true,
                    'badge' => 'SDS IT MADANI KAYUAGUNG • TERAKREDITASI B',
                    'title' => 'Membentuk Generasi Berprestasi, Sholeh, Inovatif & Mandiri',
                    'subtitle' => 'Sekolah Dasar Islam Terpadu unggulan dengan target tahfidz 2 juz mutqin, kurikulum terpadu JSIT, dan pembinaan akhlak mulia.',
                    'image' => '/uploads/hero-slide-yayasan-1.webp',
                    'btn_text' => 'Profil SDS IT',
                    'btn_link' => '/sd/tentang-kami',
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'SPMB SDS IT',
                    'btn2_link' => '/sd/ppdb',
                    'btn2_target' => '_self',
                ],
            ];
        }

        if ($unit === 'smp') {
            return [
                [
                    'active' => true,
                    'badge' => 'SMPS IT UNGGULAN KAYUAGUNG • TERAKREDITASI B',
                    'title' => 'Membina Generasi Qur\'ani, Cerdas & Berakhlak Mulia',
                    'subtitle' => 'Sekolah Menengah Pertama Islam Terpadu berakreditasi di Kayuagung, Kab. OKI dengan Program Asrama Tahfidz & Imtak Modern.',
                    'image' => '/uploads/campus-smpit-madani.webp',
                    'btn_text' => 'Sambutan Kepala Sekolah',
                    'btn_link' => '/smp/sambutan-kepala-sekolah',
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'Info SPMB SMPS IT',
                    'btn2_link' => '/smp/ppdb',
                    'btn2_target' => '_self',
                ],
            ];
        }

        return [
            [
                'active' => true,
                'badge' => 'YAYASAN AGUNG MADANI KAYUAGUNG • KAB. OKI',
                'title' => 'Mewujudkan Generasi Robbani yang Cerdas, Mandiri & Berakhlak Mulia',
                'subtitle' => 'Pendidikan Islam Terpadu Satu Atap Berbasis Al-Qur\'an, As-Sunnah, Sains dan Teknologi Modern di Bawah Naungan JSIT Indonesia.',
                'image' => '/uploads/hero-slide-yayasan-1.webp',
                'btn_text' => 'Pilih Unit Sekolah',
                'btn_link' => '#unit-sekolah',
                'btn_target' => '_self',
                'btn2_active' => true,
                'btn2_text' => 'Daftar SPMB Terpadu',
                'btn2_link' => '/ppdb',
                'btn2_target' => '_self',
            ],
            [
                'active' => true,
                'badge' => 'TAHFIDZ QUR\'AN MUTQIN & ADAB NABAWI',
                'title' => 'Pembinaan Karakter & Hafalan Al-Qur\'an Berkesinambungan',
                'subtitle' => 'Mulai dari tahfidz cilik PAUD/TKS IT, target 2 juz mutqin di SDS IT, hingga program Asrama Tahfidz di SMPS IT Madani.',
                'image' => '/uploads/hero-slide-yayasan-2.webp',
                'btn_text' => 'Profil Singkat Yayasan',
                'btn_link' => '/yayasan/tentang-kami',
                'btn_target' => '_self',
                'btn2_active' => true,
                'btn2_text' => 'Struktur Yayasan',
                'btn2_link' => '/yayasan/struktur',
                'btn2_target' => '_self',
            ],
            [
                'active' => true,
                'badge' => 'SAINS, TEKNOLOGI & BAHASA INTERNASIONAL',
                'title' => 'Integrasi Keunggulan Imtak dan Iptek Masa Depan',
                'subtitle' => 'Laboratorium komputer modern, pembekalan literasi digital, bimbingan olimpiade sains, serta pembiasaan Bahasa Arab dan Inggris.',
                'image' => '/uploads/hero-slide-yayasan-3.webp',
                'btn_text' => 'Kunjungi SMPS IT Madani',
                'btn_link' => '/smp',
                'btn_target' => '_self',
                'btn2_active' => true,
                'btn2_text' => 'Kunjungi SDS IT Madani',
                'btn2_link' => '/sd',
                'btn2_target' => '_self',
            ],
        ];
    }

    /**
     * Display the Hero Slider configuration page.
     */
    public function index(Request $request)
    {
        $userUnit = auth()->user()->unit ?? 'yayasan';
        $selectedUnit = $request->query('unit', (in_array($userUnit, ['tk', 'sd', 'smp']) ? $userUnit : 'yayasan'));
        if (! in_array($selectedUnit, ['yayasan', 'tk', 'sd', 'smp'])) {
            $selectedUnit = 'yayasan';
        }

        $settingKey = $selectedUnit === 'yayasan' ? 'hero_slides_yayasan' : 'hero_slides_'.$selectedUnit;
        $raw = Setting::get($settingKey);

        if (! $raw && $selectedUnit === 'smp') {
            $raw = Setting::get('hero_slides');
        }

        $slides = [];
        if ($raw) {
            $decoded = json_decode($raw, true);
            if (is_array($decoded) && ! empty($decoded)) {
                $slides = $decoded;
            }
        }

        if (empty($slides)) {
            $slides = $this->getDefaultSlides($selectedUnit);
        }

        $chips = self::getHeroChips();

        return view('admin.hero.index', compact('slides', 'selectedUnit', 'chips'));
    }

    public static function getDefaultHeroChips(): array
    {
        return [
            ['title' => '3 Unit', 'value' => '3 Unit', 'subtitle' => 'TK, SD & SMP', 'label' => 'TK, SD & SMP', 'color' => 'text-amber-400'],
            ['title' => 'Terakreditasi', 'value' => 'Terakreditasi', 'subtitle' => 'BAN-SM / PAUD', 'label' => 'BAN-SM / PAUD', 'color' => 'text-emerald-400'],
            ['title' => 'JSIT', 'value' => 'JSIT', 'subtitle' => 'Jaringan Nasional', 'label' => 'Jaringan Nasional', 'color' => 'text-cyan-400'],
            ['title' => 'Tahfidz', 'value' => 'Tahfidz', 'subtitle' => 'Mutqin Bersanad', 'label' => 'Mutqin Bersanad', 'color' => 'text-amber-300'],
        ];
    }

    public static function getHeroChips(): array
    {
        $raw = Setting::get('hero_stats_chips_yayasan');
        if ($raw) {
            $decoded = json_decode($raw, true);
            if (is_array($decoded) && count($decoded) === 4) {
                return $decoded;
            }
        }

        return self::getDefaultHeroChips();
    }

    /**
     * Update the Hero Slider configuration.
     */
    public function update(Request $request)
    {
        $hasUnitInput = $request->filled('unit');
        $selectedUnit = $request->input('unit', 'smp');
        if (! in_array($selectedUnit, ['yayasan', 'tk', 'sd', 'smp'])) {
            $selectedUnit = 'smp';
        }

        $request->validate([
            'unit' => 'nullable|string|in:yayasan,tk,sd,smp',
            'slides' => 'required|array|min:1|max:6',
            'slides.*.title' => 'required|string|max:255',
            'slides.*.subtitle' => 'nullable|string|max:500',
            'slides.*.badge' => 'nullable|string|max:100',
            'slides.*.btn_text' => 'nullable|string|max:100',
            'slides.*.btn_link' => 'nullable|string|max:255',
            'slides.*.btn_target' => 'nullable|string|in:_self,_blank',
            'slides.*.btn2_text' => 'nullable|string|max:100',
            'slides.*.btn2_link' => 'nullable|string|max:255',
            'slides.*.btn2_target' => 'nullable|string|in:_self,_blank',
            'slides.*.image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        $inputSlides = $request->input('slides', []);
        $cleanSlides = [];

        foreach ($inputSlides as $index => $slideData) {
            $currentImage = $slideData['existing_image'] ?? '/uploads/campus-sit-madani.webp';

            // Check if user uploaded a new image file for this slide
            if ($request->hasFile("slides.{$index}.image_file")) {
                $converted = $this->webpService->processUploadedFile(
                    $request->file("slides.{$index}.image_file"),
                    'hero',
                    85,
                    1920
                );
                if ($converted['success']) {
                    $currentImage = $converted['url'];
                }
            } elseif (! empty($slideData['image_url'])) {
                $currentImage = trim($slideData['image_url']);
            }

            $cleanSlides[] = [
                'active' => isset($slideData['active']) && ($slideData['active'] === '1' || $slideData['active'] === 1 || $slideData['active'] === true),
                'badge' => trim($slideData['badge'] ?? 'SMPS IT Unggulan Kayuagung, Kab. OKI • Terakreditasi B'),
                'title' => trim($slideData['title'] ?? ''),
                'subtitle' => trim($slideData['subtitle'] ?? ''),
                'image' => $currentImage,
                'btn_text' => trim($slideData['btn_text'] ?? ''),
                'btn_link' => trim($slideData['btn_link'] ?? '#'),
                'btn_target' => $slideData['btn_target'] ?? '_self',
                'btn2_active' => isset($slideData['btn2_active']) && ($slideData['btn2_active'] === '1' || $slideData['btn2_active'] === 1 || $slideData['btn2_active'] === true),
                'btn2_text' => trim($slideData['btn2_text'] ?? ''),
                'btn2_link' => trim($slideData['btn2_link'] ?? '/ppdb'),
                'btn2_target' => $slideData['btn2_target'] ?? '_self',
            ];
        }

        $settingKey = $selectedUnit === 'yayasan' ? 'hero_slides_yayasan' : 'hero_slides_'.$selectedUnit;
        Setting::set(
            $settingKey,
            json_encode($cleanSlides, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
            'hero'
        );

        if ($selectedUnit === 'smp' || ! $hasUnitInput) {
            Setting::set(
                'hero_slides',
                json_encode($cleanSlides, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
                'hero'
            );
        }

        // Simpan 4 Kartu Statistik / Keunggulan Hero Yayasan jika ada input
        if ($selectedUnit === 'yayasan' && $request->has('chips')) {
            $inputChips = $request->input('chips', []);
            $cleanChips = [];
            foreach ($inputChips as $c) {
                $val = trim($c['title'] ?? $c['value'] ?? '');
                $sub = trim($c['subtitle'] ?? $c['label'] ?? '');
                if (! empty($val) || ! empty($sub)) {
                    $cleanChips[] = [
                        'title' => $val,
                        'value' => $val,
                        'subtitle' => $sub,
                        'label' => $sub,
                        'color' => trim($c['color'] ?? 'text-amber-400'),
                    ];
                }
            }
            if (count($cleanChips) === 4) {
                Setting::set(
                    'hero_stats_chips_yayasan',
                    json_encode($cleanChips, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
                    'hero'
                );
            }
        }

        ActivityLog::create([
            'user_id' => auth()->id(),
            'user_name' => auth()->user()->name ?? 'Admin',
            'action' => 'hero_settings_update',
            'description' => "Memperbarui pengaturan Banner Hero Slider untuk unit {$selectedUnit} (".count($cleanSlides).' slide dikonfigurasi)',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'status' => 'info',
        ]);

        $redirectUrl = $hasUnitInput
            ? route('admin.hero.index', ['unit' => $selectedUnit])
            : route('admin.hero.index');

        return redirect($redirectUrl)->with('success', "Banner Hero Slider untuk unit {$selectedUnit} berhasil diperbarui dan disimpan!");
    }
}
