<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Pengumuman;
use App\Models\Post;
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

        // Sambutan Ketua Yayasan
        $sambutanYayasan = [
            'name' => 'Drs. H. Legianto, M.E.E.',
            'title' => 'Ketua Yayasan Agung Madani Kayuagung',
            'photo' => '/uploads/dewan/ust-legianto.webp',
            'text' => 'Bismillahirrohmanirrohim. Alhamdulillahi Rabbil \'Alamin, puji dan syukur kami panjatkan ke hadirat Allah SWT. Yayasan Agung Madani Kayuagung hadir dengan komitmen kokoh menyelenggarakan pendidikan Islam terpadu satu atap yang berkesinambungan mulai dari TKS IT Madani, SDS IT Madani, hingga SMPS IT Madani. Kami memadukan nilai keluhuran Al-Qur\'an dan as-Sunnah dengan keunggulan sains, teknologi, dan bahasa global untuk melahirkan generasi robbani yang cerdas, mandiri, dan berakhlak karimah.',
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
            'sambutanYayasan'
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
     * Tampilan Website Masing-Masing Unit Sekolah (TK, SD, SMP).
     * Dibuat SAMA PERSIS dengan layout & fitur web smpitishum, disesuaikan dengan data unit.
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
        $heroSlides = $currentUnit['slides'] ?? [];
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
        $dewan = collect($dewanData)->map(function ($g, $idx) {
            return (object) [
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
            ];
        })->take(8);

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
        $galleryRow1 = $fallbackRow1;
        $galleryRow2 = $fallbackRow2;
        $galleryPhotos = array_merge($galleryRow1, $galleryRow2);

        // 12. E-Books
        $ebooks = [];

        // 13. Testimonials
        $testimonials = Testimonial::where('status', 'publish')->take(4)->get();

        // 14. Visitor hits
        $visitorHits = view()->shared('visitorHits') ?? '0';

        // 15. Popup Settings
        $popupSettings = [
            'active' => '1',
            'image' => '/uploads/logo-madani-square.webp',
            'title' => 'SPMB '.$currentUnit['short_name'].' Telah Dibuka',
            'subtitle' => 'Tahun Pelajaran 2026/2027 • Segera Daftarkan Putra-Putri Anda',
            'link' => route('unit.ppdb', $unit),
            'target' => '_self',
            'button_text' => 'Daftar SPMB Online',
        ];

        // 16. SPMB Banner khusus unit
        $spmbBanner = [
            'badge' => 'PENERIMAAN PESERTA DIDIK BARU (SPMB ONLINE)',
            'title' => 'SPMB '.$currentUnit['name'].' TP 2026/2027',
            'year' => '2026/2027',
            'description' => 'Mari bergabung bersama keluarga besar '.$currentUnit['name'].'. Memadukan kurikulum nasional terpadu dengan pembinaan adab Qur\'ani, hafalan Al-Qur\'an, serta penguasaan keterampilan masa depan.',
            'card1_title' => 'PENDAFTARAN',
            'card1_desc' => 'Gelombang 1 Dibuka',
            'card1_color' => '#fde047',
            'card2_title' => 'BEASISWA & CASHBACK',
            'card2_desc' => 'Tersedia Potongan Spesial',
            'card2_color' => '#fde047',
            'card3_title' => 'KUOTA KELAS',
            'card3_desc' => 'Terbatas & Selektif',
            'card3_color' => '#fde047',
            'flyer_image' => '/uploads/logo-madani-square.webp',
            'flyer_label' => 'Brosur Resmi SPMB',
            'btn_text' => 'Daftar SPMB '.$currentUnit['short_name'],
            'btn_url' => route('unit.ppdb', $unit),
            'contact_text' => 'Hotline: '.$currentUnit['phone'],
            'contact_phone' => $currentUnit['phone'],
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
