<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\AdminHeroController;
use App\Http\Controllers\Admin\AdminShowcaseController;
use App\Models\Agenda;
use App\Models\AnggotaDewan;
use App\Models\Download;
use App\Models\Pengumuman;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\Video;
use App\Services\SchoolUnitService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Web Utama / Portal Yayasan Agung Madani Kayuagung.
     * Menampilkan profil Yayasan dan 3 Showcase Cards akses ke TKS, SDS, dan SMPS IT Madani.
     */
    public function index(Request $request)
    {
        if ($request->has('unit') && in_array($request->query('unit'), ['tk', 'sd', 'smp'])) {
            return $this->unit($request, $request->query('unit'));
        }

        $units = SchoolUnitService::getUnits();
        $yayasan = SchoolUnitService::getUnit('yayasan');
        $currentUnitKey = 'yayasan';
        $currentUnit = $yayasan;

        // Berita & Artikel Terpadu
        $latestPosts = Post::posts()
            ->published()
            ->with(['categories'])
            ->orderBy('published_at', 'desc')
            ->orderBy('id', 'desc')
            ->take(6)
            ->get();

        // Agenda & Pengumuman
        $announcements = Pengumuman::where('status', 'publish')->latest()->take(4)->get();
        $agendas = Agenda::where('status', '!=', 'draft')->orderBy('event_date', 'desc')->take(4)->get();

        // Galeri & Video
        $videos = Video::latest()->take(4)->get();
        $testimonials = Testimonial::where('status', 'publish')->take(3)->get();

        // Hero Slides Yayasan (Dinamis dari Setting Admin)
        $rawHero = Setting::get('hero_slides_yayasan');
        $heroSlides = [];
        if ($rawHero) {
            $decoded = json_decode($rawHero, true);
            if (is_array($decoded) && ! empty($decoded)) {
                $heroSlides = array_values(array_filter($decoded, fn ($s) => ! empty($s['active'])));
            }
        }

        if (empty($heroSlides)) {
            $heroSlides = [
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
                    'btn2_link' => route('ppdb.index'),
                    'btn2_target' => '_self',
                ],
                [
                    'active' => true,
                    'badge' => 'TAHFIDZ QUR\'AN MUTQIN & ADAB NABAWI',
                    'title' => 'Pembinaan Karakter & Hafalan Al-Qur\'an Berkesinambungan',
                    'subtitle' => 'Mulai dari tahfidz cilik PAUD/TKS IT, target 2 juz mutqin di SDS IT, hingga program Asrama Tahfidz di SMPS IT Madani.',
                    'image' => '/uploads/hero-slide-yayasan-2.webp',
                    'btn_text' => 'Profil Singkat Yayasan',
                    'btn_link' => route('page.tentang.yayasan'),
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'Struktur Yayasan',
                    'btn2_link' => route('page.struktur.yayasan'),
                    'btn2_target' => '_self',
                ],
                [
                    'active' => true,
                    'badge' => 'SAINS, TEKNOLOGI & BAHASA INTERNASIONAL',
                    'title' => 'Integrasi Keunggulan Imtak dan Iptek Masa Depan',
                    'subtitle' => 'Laboratorium komputer modern, pembekalan literasi digital, bimbingan olimpiade sains, serta pembiasaan Bahasa Arab dan Inggris.',
                    'image' => '/uploads/hero-slide-yayasan-3.webp',
                    'btn_text' => 'Kunjungi SMPS IT Madani',
                    'btn_link' => route('unit.smp'),
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'Kunjungi SDS IT Madani',
                    'btn2_link' => route('unit.sd'),
                    'btn2_target' => '_self',
                ],
            ];
        }

        // Sambutan Ketua Yayasan (Dinamis dari Post jika ada)
        $sambutanPost = Post::pages()->where('slug', 'sambutan-ketua-yayasan')->first();
        $sambutanYayasan = [
            'name' => 'Drs. H. Legianto, M.E.E.',
            'title' => 'Ketua Yayasan Agung Madani Kayuagung',
            'photo' => '/uploads/dewan/ust-legianto.webp',
            'text' => $sambutanPost ? strip_tags($sambutanPost->content) : 'Bismillahirrohmanirrohim. Alhamdulillahi Rabbil \'Alamin, puji dan syukur kami panjatkan ke hadirat Allah SWT. Yayasan Agung Madani Kayuagung hadir dengan komitmen kokoh menyelenggarakan pendidikan Islam terpadu satu atap yang berkesinambungan mulai dari TKS IT Madani, SDS IT Madani, hingga SMPS IT Madani. Kami memadukan nilai keluhuran Al-Qur\'an dan as-Sunnah dengan keunggulan sains, teknologi, dan bahasa global untuk melahirkan generasi robbani yang cerdas, mandiri, dan berakhlak karimah.',
            'content_html' => $sambutanPost ? $sambutanPost->content : null,
        ];

        // 4 Kartu Statistik & Keunggulan Hero Yayasan
        $heroChips = AdminHeroController::getHeroChips();

        // 3 Kartu Showcase Unit Sekolah
        $unitShowcaseCards = AdminShowcaseController::getShowcaseCards();

        // Popup SPMB Settings
        $popupSettings = [
            'active' => Setting::get('popup_active', '1'),
            'image' => Setting::get('popup_image', '/uploads/flyer-spmb-sit-madani.webp'),
            'title' => Setting::get('popup_title', 'Telah Dibuka SPMB SIT Madani (TP 2026/2027)'),
            'subtitle' => Setting::get('popup_subtitle', 'Sistem Penerimaan Murid Baru SIT Madani Kayuagung (TK • SD • SMP)'),
            'link' => Setting::get('popup_link', '/ppdb'),
            'target' => Setting::get('popup_target', '_self'),
            'button_text' => Setting::get('popup_button_text', 'Info & Daftar SPMB Online'),
            'version' => md5(Setting::get('popup_image', '').Setting::get('popup_title', '')),
        ];

        return view('frontend.yayasan', compact(
            'units',
            'yayasan',
            'currentUnitKey',
            'currentUnit',
            'latestPosts',
            'announcements',
            'agendas',
            'videos',
            'testimonials',
            'sambutanYayasan',
            'heroSlides',
            'heroChips',
            'unitShowcaseCards',
            'popupSettings'
        ));
    }

    /**
     * Alias route untuk Portal Yayasan.
     */
    public function yayasan(Request $request)
    {
        return $this->index($request);
    }

    /**
     * Tampilan Website Masing-Masing Unit Sekolah (TK, SD, SMP SIT Madani).
     * Disesuaikan dengan data dan identitas unit masing-masing.
     */
    public function unit(Request $request, string $unit)
    {
        if (! in_array($unit, ['tk', 'sd', 'smp'])) {
            return redirect()->route('home');
        }

        $units = SchoolUnitService::getUnits();
        $currentUnitKey = $unit;
        $currentUnit = SchoolUnitService::getUnit($unit);

        // 1. Hero slides unit
        $heroSlides = [];
        if ($unit === 'smp') {
            $customSlides = Setting::get('hero_slides');
            if ($customSlides) {
                $decoded = json_decode($customSlides, true);
                if (is_array($decoded) && ! empty($decoded)) {
                    $heroSlides = array_values(array_filter($decoded, fn ($s) => ! isset($s['active']) || $s['active']));
                }
            }
        }
        if (empty($heroSlides)) {
            $heroSlides = $currentUnit['slides'] ?? [];
        }
        if (empty($heroSlides)) {
            $heroSlides = [
                [
                    'badge' => strtoupper($currentUnit['name']).' • TERAKREDITASI '.$currentUnit['akreditasi'],
                    'title' => 'Selamat Datang di Website Resmi',
                    'subtitle' => $currentUnit['name'].' ('.$currentUnit['level'].')',
                    'image' => '/uploads/campus-sit-madani.webp',
                    'btn_text' => 'Profil Sekolah',
                    'btn_link' => route('unit.page', ['unit' => $unit, 'slug' => 'tentang-kami']),
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'Info SPMB',
                    'btn2_link' => route('unit.ppdb', $unit),
                    'btn2_target' => '_self',
                ],
            ];
        }

        // 2. Sambutan Kepala Sekolah unit
        $sambutan = (object) [
            'title' => 'Sambutan Kepala '.$currentUnit['short_name'],
            'excerpt' => 'Assalamu\'alaikum Warahmatullahi Wabarakatuh. Selamat datang di portal resmi '.$currentUnit['name'].'. Kami berikhtiar mendidik dengan sepenuh hati dan cinta.',
            'content' => '<p><strong>Assalamu\'alaikum Warahmatullahi Wabarakatuh.</strong></p><p>Puji syukur kita panjatkan ke hadirat Allah Subhanahu Wa Ta\'ala atas limpahan rahmat dan karunia-Nya. Selamat datang di laman resmi <strong>'.$currentUnit['name'].'</strong> di bawah naungan Yayasan Agung Madani Kayuagung.</p><p>Visi kami adalah <em>"'.$currentUnit['visi'].'"</em>. Dengan bimbingan tenaga pendidik yang kompeten dan berdedikasi, kami menanamkan kecintaan pada Al-Qur\'an, pembiasaan adab islami, serta pembelajaran bermakna dan menggembirakan.</p><p>Wassalamu\'alaikum Warahmatullahi Wabarakatuh.</p>',
            'featured_image' => $currentUnit['leader_photo'],
            'author_name' => $currentUnit['leader_name'],
        ];

        // 3. Post publik
        $allPosts = Post::posts()
            ->published()
            ->with(['categories'])
            ->orderBy('published_at', 'desc')
            ->orderBy('id', 'desc')
            ->take(50)
            ->get();

        $featuredPost = $allPosts->first();
        $sidePosts = $allPosts->slice(1, 4);

        // 4. Program Unggulan Unit (Mapping dari SchoolUnitService)
        $senayanPosts = Post::posts()
            ->published()
            ->with(['categories'])
            ->orderBy('published_at', 'desc')
            ->take(8)
            ->get();

        // 5. Prestasi Siswa
        $fraksiPosts = Post::where('type', 'prestasi')
            ->published()
            ->with(['categories'])
            ->orderBy('published_at', 'desc')
            ->take(8)
            ->get();

        if ($fraksiPosts->isEmpty()) {
            $fraksiPosts = $allPosts->take(4);
        }

        // 6 & 7. Kabar Akademik & Kesiswaan
        $nasionalPosts = $allPosts->take(6);
        $daerahPosts = $allPosts->slice(2, 6);

        // 8. Dewan Guru & GTK Unit
        $dewanData = $currentUnit['gurus'] ?? [];
        if ($unit === 'smp') {
            $dbDewan = AnggotaDewan::orderBy('order', 'asc')->take(8)->get();
            if ($dbDewan->isNotEmpty()) {
                $dewan = $dbDewan->map(function ($d) {
                    return (object) [
                        'id' => $d->id,
                        'name' => $d->name,
                        'slug' => $d->slug ?? str()->slug($d->name),
                        'position' => $d->position,
                        'fraction' => $d->fraction ?? 'Pendidik',
                        'education' => $d->education ?? 'Sarjana Kependidikan',
                        'photo' => $d->photo ?? '/uploads/dewan/avatar-default.svg',
                        'photo_url' => $d->photo_url ?? ($d->photo ?? '/uploads/dewan/avatar-default.svg'),
                        'profile_summary' => $d->profile_summary ?? 'Tenaga pendidik profesional dan berdedikasi.',
                        'order' => $d->order,
                    ];
                });
            } else {
                $dewan = collect($dewanData)->map(fn ($g, $idx) => (object) [
                    'id' => $idx + 1,
                    'name' => $g['name'],
                    'slug' => str()->slug($g['name']),
                    'position' => $g['position'],
                    'fraction' => $g['fraction'] ?? 'Pendidik',
                    'education' => $g['education'] ?? 'Sarjana Kependidikan',
                    'photo' => $g['photo'] ?? '/uploads/dewan/avatar-default.svg',
                    'photo_url' => $g['photo'] ?? '/uploads/dewan/avatar-default.svg',
                    'profile_summary' => 'Tenaga pendidik profesional dan berdedikasi.',
                    'order' => $g['order'] ?? ($idx + 1),
                ])->take(8);
            }
        } else {
            $dewan = collect($dewanData)->map(fn ($g, $idx) => (object) [
                'id' => $idx + 1,
                'name' => $g['name'],
                'slug' => str()->slug($g['name']),
                'position' => $g['position'],
                'fraction' => $g['fraction'] ?? 'Pendidik',
                'education' => $g['education'] ?? 'Sarjana Kependidikan',
                'photo' => $g['photo'] ?? '/uploads/dewan/avatar-default.svg',
                'photo_url' => $g['photo'] ?? '/uploads/dewan/avatar-default.svg',
                'profile_summary' => 'Tenaga pendidik profesional dan berdedikasi.',
                'order' => $g['order'] ?? ($idx + 1),
            ])->take(8);
        }

        // 9. Video
        $videos = Video::latest()->take(6)->get();

        // 10. Pengumuman & Agenda
        $announcements = Pengumuman::where('status', 'publish')->latest()->take(4)->get();
        $agendas = Agenda::where('status', '!=', 'draft')->orderBy('event_date', 'desc')->take(4)->get();

        // 11. Galeri
        $fallbackRow1 = [
            ['url' => '/uploads/campus-sit-madani.webp', 'title' => 'Gedung Sekolah '.$currentUnit['short_name']],
            ['url' => '/uploads/activities-sit-madani.webp', 'title' => 'Aktivitas Belajar & Karakter Terpadu'],
            ['url' => '/uploads/logo-madani.webp', 'title' => 'Kompleks Kampus SIT Madani Kayuagung'],
            ['url' => '/uploads/tahfidz-sit-madani.webp', 'title' => 'Pembinaan Tahfidz & Tartil Qur\'an'],
        ];
        $fallbackRow2 = [
            ['url' => '/uploads/dewan/ust-legianto.webp', 'title' => 'Ketua Yayasan Agung Madani'],
            ['url' => $currentUnit['leader_photo'], 'title' => 'Kepala Sekolah '.$currentUnit['short_name']],
            ['url' => '/uploads/campus-sit-madani.webp', 'title' => 'Lingkungan Asri & Ramah Anak'],
            ['url' => '/uploads/activities-sit-madani.webp', 'title' => 'Keceriaan Belajar Bersama'],
        ];

        $dbGallery = Post::where('type', 'gallery')
            ->where('status', 'publish')
            ->latest()
            ->take(16)
            ->get()
            ->map(fn ($g) => [
                'url' => $g->featured_image ?? '/uploads/campus-sit-madani.webp',
                'title' => $g->title,
            ])->toArray();

        if (! empty($dbGallery)) {
            $half = (int) ceil(count($dbGallery) / 2);
            $galleryRow1 = array_slice($dbGallery, 0, $half);
            $galleryRow2 = array_slice($dbGallery, $half);
        } else {
            $galleryRow1 = $fallbackRow1;
            $galleryRow2 = $fallbackRow2;
        }
        $galleryPhotos = array_merge($galleryRow1, $galleryRow2);

        // 12. E-Books
        $ebookDownloads = Download::where('category_type', 'E-Book')->orderBy('id', 'asc')->get();
        if ($ebookDownloads->isNotEmpty()) {
            $ebooks = $ebookDownloads->map(fn ($dl) => [
                'id' => $dl->id,
                'title' => $dl->title,
                'cover' => $dl->cover_image ?: '/uploads/covers/cover-tahfidz-mutqin.webp',
                'pdf' => route('download.file', $dl->id, false),
                'direct_file' => $dl->file_path,
            ])->toArray();
        } else {
            $ebooks = [];
        }

        // 13. Testimonials
        $testimonials = Testimonial::where('status', 'publish')->take(4)->get();

        // 14. Visitor hits
        $visitorHits = view()->shared('visitorHits') ?? '0';

        // 15. Popup Settings (Dinamis dari Setting Admin)
        $popupSettings = [
            'active' => Setting::get('popup_active', '1'),
            'image' => Setting::get('popup_image', '/uploads/flyer-spmb-sit-madani.webp'),
            'title' => Setting::get('popup_title', 'SPMB '.$currentUnit['short_name'].' Telah Dibuka'),
            'subtitle' => Setting::get('popup_subtitle', 'Tahun Pelajaran 2026/2027 • Segera Daftarkan Putra-Putri Anda'),
            'link' => route('unit.ppdb', $unit),
            'target' => Setting::get('popup_target', '_self'),
            'button_text' => Setting::get('popup_button_text', 'Daftar SPMB Online'),
            'version' => md5(Setting::get('popup_image', '').Setting::get('popup_title', '')),
        ];

        // 16. SPMB Banner khusus unit
        $spmbBanner = [
            'badge' => Setting::get('spmb_banner_badge', 'PENERIMAAN PESERTA DIDIK BARU (SPMB ONLINE)'),
            'title' => Setting::get('spmb_banner_title', 'SPMB '.$currentUnit['name'].' TP 2026/2027'),
            'year' => Setting::get('spmb_banner_year', '2026/2027'),
            'description' => Setting::get('spmb_banner_description', 'Mari bergabung bersama keluarga besar '.$currentUnit['name'].'. Memadukan kurikulum nasional terpadu dengan pembinaan adab Qur\'ani, hafalan Al-Qur\'an, serta penguasaan keterampilan masa depan.'),
            'card1_title' => Setting::get('spmb_banner_card1_title', 'PENDAFTARAN'),
            'card1_desc' => Setting::get('spmb_banner_card1_desc', 'Gelombang 1 Dibuka'),
            'card1_color' => Setting::get('spmb_banner_card1_color', '#fde047'),
            'card2_title' => Setting::get('spmb_banner_card2_title', 'BEASISWA & CASHBACK'),
            'card2_desc' => Setting::get('spmb_banner_card2_desc', 'Tersedia Potongan Spesial'),
            'card2_color' => Setting::get('spmb_banner_card2_color', '#fde047'),
            'card3_title' => Setting::get('spmb_banner_card3_title', 'KUOTA KELAS'),
            'card3_desc' => Setting::get('spmb_banner_card3_desc', 'Terbatas & Selektif'),
            'card3_color' => Setting::get('spmb_banner_card3_color', '#fde047'),
            'flyer_image' => Setting::get('spmb_banner_flyer_image', '/uploads/logo-madani-square.webp'),
            'flyer_label' => Setting::get('spmb_banner_flyer_label', 'Brosur Resmi SPMB'),
            'btn_text' => Setting::get('spmb_banner_btn_text', 'Daftar SPMB '.$currentUnit['short_name']),
            'btn_url' => Setting::get('spmb_banner_btn_url', route('unit.ppdb', $unit)),
            'contact_text' => Setting::get('spmb_banner_contact_text', 'Hotline: '.$currentUnit['phone']),
            'contact_phone' => Setting::get('spmb_banner_contact_phone', $currentUnit['phone']),
        ];

        // 17. Ekskul
        $ekskulPosts = Post::where('type', 'ekskul')
            ->where('status', 'publish')
            ->orderBy('id', 'asc')
            ->take(6)
            ->get();

        return view('frontend.home', compact(
            'units',
            'currentUnitKey',
            'currentUnit',
            'heroSlides',
            'sambutan',
            'featuredPost',
            'sidePosts',
            'fraksiPosts',
            'nasionalPosts',
            'daerahPosts',
            'senayanPosts',
            'ekskulPosts',
            'dewan',
            'videos',
            'announcements',
            'agendas',
            'galleryPhotos',
            'galleryRow1',
            'galleryRow2',
            'ebooks',
            'testimonials',
            'visitorHits',
            'popupSettings',
            'spmbBanner'
        ));
    }
}
