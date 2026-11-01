<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\Setting;
use App\Services\WebpService;
use Illuminate\Http\Request;

class AdminShowcaseController extends Controller
{
    public function __construct(protected WebpService $webpService) {}

    public static function getDefaultShowcaseCards(): array
    {
        return [
            'tk' => [
                'level_badge' => 'PAUD / TK ISLAM TERPADU',
                'accreditation' => 'AKREDITASI B',
                'info_badge' => 'Usia Dini • Karakter Rabbani',
                'title' => 'TKS Islam Terpadu Madani',
                'subtitle' => 'Kayuagung, Kabupaten Ogan Komering Ilir',
                'leader_title' => 'Kepala Sekolah',
                'leader_name' => 'Ayu Rahmayani, S.Pd.Gr.',
                'leader_sub' => 'Bunda Ayu • NIY: 01012021 02063',
                'leader_photo' => '/uploads/dewan/bunda-ayu.webp',
                'slogan' => 'Membentuk Generasi Rabbani yang Kreatif, Cerdas, dan Mandiri.',
                'features' => [
                    'Sentra Ibadah, Sholat Dhuha & Tahfidz Cilik Juz 30',
                    'Sentra Seni, Kreativitas & Jurnal Gambar',
                    'Market Day & Entrepreneurship Cilik',
                    'Manasik Haji Cilik, Outbound & Fun Swimming',
                    'Deep Learning (Berkesadaran & Menggembirakan)',
                ],
                'meta_left' => 'NPSN: 69915461',
                'meta_right' => 'Berdiri 2014',
                'btn_site_text' => 'Kunjungi Website TKS IT Madani',
                'btn_site_url' => '/tk',
                'btn_spmb_text' => 'SPMB TKS IT Online',
                'btn_spmb_url' => '/tk/ppdb',
            ],
            'sd' => [
                'level_badge' => 'SEKOLAH DASAR ISLAM TERPADU',
                'accreditation' => 'AKREDITASI B',
                'info_badge' => '13 Rombel • 293 Siswa',
                'title' => 'SDS Islam Terpadu Madani',
                'subtitle' => 'Kayuagung, Kabupaten Ogan Komering Ilir',
                'leader_title' => 'Pimpinan & Komite',
                'leader_name' => 'Yudhi Arsyandi, S.Pd., Gr.',
                'leader_sub' => 'Ketua Komite: Andi Kumaini, M.Pd.',
                'leader_photo' => '/uploads/dewan/ust-andi.webp',
                'slogan' => 'Membentuk Generasi Rabbani yang Berprestasi, Sholeh, Inovatif dan Mandiri.',
                'features' => [
                    'Target Hafalan 2 Juz Al-Qur\'an (Juz 30 & 29 Mutqin)',
                    'Hafalan 30 Hadits Harian & Pembiasaan Adab',
                    'Laboratorium Komputer Modern & Pembekalan ANBK',
                    'Bilingual Dasar: Bahasa Arab & Bahasa Inggris',
                    '37 Tenaga Pendidik & Karyawan Berdedikasi',
                ],
                'meta_left' => 'NPSN: 69881529',
                'meta_right' => '293 Murid Aktif',
                'btn_site_text' => 'Kunjungi Website SDS IT Madani',
                'btn_site_url' => '/sd',
                'btn_spmb_text' => 'SPMB SDS IT Online',
                'btn_spmb_url' => '/sd/ppdb',
            ],
            'smp' => [
                'level_badge' => 'SMP IT & ASRAMA TAHFIDZ',
                'accreditation' => 'AKREDITASI B',
                'info_badge' => 'Boarding & Full Day',
                'title' => 'SMPS Islam Terpadu Madani',
                'subtitle' => 'Kayuagung, Kabupaten Ogan Komering Ilir',
                'leader_title' => 'Kepala Sekolah',
                'leader_name' => 'Ribang Imam Satria, S.Pi., Gr.',
                'leader_sub' => 'Ust. Ribang • Gr (Profesi Guru)',
                'leader_photo' => '/uploads/dewan/kepala-sekolah.webp',
                'slogan' => 'Terbentuknya Generasi Qur\'ani, Mandiri, Inovatif, Visioner, dan Moderat.',
                'features' => [
                    'Program Asrama Tahfidz (Boarding School) & Full Day',
                    'Talaqqi & Tasmi\' Al-Qur\'an 30 Juz Bersanad',
                    'Integrasi Kurikulum Merdeka & Kurikulum Khas JSIT',
                    'Bina Pribadi Islami (BPI) & Islamic Student Camp',
                    'Laboratorium Komputer, Riset Sains & Bahasa Asing',
                ],
                'meta_left' => 'NPSN: 70034917',
                'meta_right' => 'NSS: 202110234917',
                'btn_site_text' => 'Kunjungi Website SMPS IT Madani',
                'btn_site_url' => '/smp',
                'btn_spmb_text' => 'SPMB SMPS IT Online',
                'btn_spmb_url' => '/smp/ppdb',
            ],
        ];
    }

    public static function getShowcaseCards(): array
    {
        $raw = Setting::get('unit_showcase_cards');
        if ($raw) {
            $decoded = json_decode($raw, true);
            if (is_array($decoded) && ! empty($decoded)) {
                return array_replace_recursive(self::getDefaultShowcaseCards(), $decoded);
            }
        }

        return self::getDefaultShowcaseCards();
    }

    public function index()
    {
        $cards = self::getShowcaseCards();

        return view('admin.showcase.index', compact('cards'));
    }

    public function update(Request $request)
    {
        $units = ['tk', 'sd', 'smp'];
        $currentCards = self::getShowcaseCards();
        $updatedCards = [];

        foreach ($units as $u) {
            $input = $request->input("cards.{$u}", []);
            $photo = $input['existing_photo'] ?? ($currentCards[$u]['leader_photo'] ?? '');

            if ($request->hasFile("cards.{$u}.photo_file")) {
                $converted = $this->webpService->processUploadedFile(
                    $request->file("cards.{$u}.photo_file"),
                    'dewan',
                    85,
                    800
                );
                if ($converted['success']) {
                    $photo = $converted['url'];
                }
            } elseif (! empty($input['leader_photo'])) {
                $photo = trim($input['leader_photo']);
            }

            // Parse features list from textarea (one per line)
            $features = [];
            if (! empty($input['features_raw'])) {
                $lines = explode("\n", str_replace("\r", '', $input['features_raw']));
                foreach ($lines as $line) {
                    $trimmed = trim($line);
                    if ($trimmed !== '') {
                        $features[] = $trimmed;
                    }
                }
            }
            if (empty($features)) {
                $features = $currentCards[$u]['features'] ?? [];
            }

            $updatedCards[$u] = [
                'level_badge' => trim($input['level_badge'] ?? $currentCards[$u]['level_badge']),
                'accreditation' => trim($input['accreditation'] ?? $currentCards[$u]['accreditation']),
                'info_badge' => trim($input['info_badge'] ?? $currentCards[$u]['info_badge']),
                'title' => trim($input['title'] ?? $currentCards[$u]['title']),
                'subtitle' => trim($input['subtitle'] ?? $currentCards[$u]['subtitle']),
                'leader_title' => trim($input['leader_title'] ?? $currentCards[$u]['leader_title']),
                'leader_name' => trim($input['leader_name'] ?? $currentCards[$u]['leader_name']),
                'leader_sub' => trim($input['leader_sub'] ?? $currentCards[$u]['leader_sub']),
                'leader_photo' => $photo,
                'slogan' => trim($input['slogan'] ?? $currentCards[$u]['slogan']),
                'features' => $features,
                'meta_left' => trim($input['meta_left'] ?? $currentCards[$u]['meta_left']),
                'meta_right' => trim($input['meta_right'] ?? $currentCards[$u]['meta_right']),
                'btn_site_text' => trim($input['btn_site_text'] ?? $currentCards[$u]['btn_site_text']),
                'btn_site_url' => trim($input['btn_site_url'] ?? $currentCards[$u]['btn_site_url']),
                'btn_spmb_text' => trim($input['btn_spmb_text'] ?? $currentCards[$u]['btn_spmb_text']),
                'btn_spmb_url' => trim($input['btn_spmb_url'] ?? $currentCards[$u]['btn_spmb_url']),
            ];
        }

        Setting::set(
            'unit_showcase_cards',
            json_encode($updatedCards, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
            'showcase'
        );

        ActivityLog::create([
            'user_id' => auth()->id(),
            'user_name' => auth()->user()->name ?? 'Admin',
            'action' => 'showcase_cards_update',
            'description' => 'Memperbarui data 3 Kartu Showcase Unit Sekolah di Beranda Yayasan',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'status' => 'info',
        ]);

        return redirect()->route('admin.showcase.index')->with('success', '3 Kartu Showcase Unit Pendidikan (TK • SD • SMP) berhasil disimpan dan diperbarui!');
    }
}
