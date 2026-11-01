<?php

namespace Database\Seeders;

use App\Models\Agenda;
use App\Models\AnggotaDewan;
use App\Models\Bidang;
use App\Models\Category;
use App\Models\Download;
use App\Models\Dpc;
use App\Models\Pengumuman;
use App\Models\Post;
use App\Models\PpdbTrack;
use App\Models\QuickMenu;
use App\Models\Setting;
use App\Models\Tag;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SchoolDataSeeder extends Seeder
{
    public function run(): void
    {
        $dataFile = __DIR__.'/data/madani_data.json';
        $data = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

        // 1. Settings SMPS IT Madani Kayuagung
        $settings = [
            'site_name' => 'SMPS IT Madani Kayuagung',
            'site_tagline' => 'Membina Generasi Qur\'ani, Cerdas, Berakhlak Mulia & Berprestasi Global',
            'site_description' => 'Official Website SMPS IT Madani Kayuagung (SIT Madani). Sekolah Menengah Pertama Islam Terpadu berakreditasi di Kayuagung, Kab. OKI dengan kurikulum terpadu nasional dan pembinaan karakter Qur\'ani.',
            'contact_email' => 'smpsislamterpadumadani@gmail.com',
            'contact_phone' => '0858-3817-3417',
            'contact_whatsapp' => '0858-3817-3417',
            'contact_phone_alt' => '0858-3817-3417',
            'contact_address' => 'Jalan SMA Negeri 4, RT 02 LK III, Kelurahan Tanjung Rancing, Kecamatan Kayuagung, Kabupaten Ogan Komering Ilir, Sumatera Selatan 30618',
            'social_facebook' => 'https://www.facebook.com/sitmadani',
            'social_instagram' => 'https://www.instagram.com/sitmadani/',
            'social_youtube' => 'https://www.youtube.com/@sitmadani',
            'social_tiktok' => 'https://www.tiktok.com/@sitmadani',
            'google_maps_url' => 'https://maps.app.goo.gl/oN2gtn7TuTGELXJ86',
            'banner_daftar_url' => '/spmb',
            'banner_donasi_url' => '/donasi',
            'site_logo' => '/uploads/logo-madani.png',
            'site_logo_square' => '/uploads/logo-madani-square.webp',
            'og_title' => 'SMPS IT Madani Kayuagung',
            'og_description' => 'Official Website SMPS IT Madani Kayuagung: Informasi SPMB Gelombang Exclusive, Berita & Prestasi, Profil Guru, Fasilitas, dan Program Tahfidz.',
            'og_image' => '/uploads/logo-madani-square.webp',
            'meta_keywords' => 'smps it madani kayuagung, smp it madani, sekolah islam terpadu kayuagung, spmb smp it madani, tahfidz kayuagung, jsit kayuagung',
            'npsn' => '70034917',
            'akreditasi' => 'B (Terakreditasi BAN-SM)',
            'no_sk_akreditasi' => '202110234917',
            'sk_pendirian' => '04 November 2019',
            'sk_izin' => '002/DPMPTSP/IPS-SMP/X/2022',
            'kepala_sekolah' => 'Ribang Imam Satria, S.Pi., Gr.',
            'spmb_promo_title' => 'SPMB Gelombang Exclusive',
            'spmb_promo_cashback' => 'Cash Back 1 Juta',
            'spmb_promo_quota' => '24 Siswa per Kelas',
            'spmb_promo_note' => '*Khusus Alumni SDS IT Madani',
            'spmb_banner_badge' => 'PENERIMAAN SISWA BARU GELOMBANG EXCLUSIVE',
            'spmb_banner_title' => 'SPMB Gelombang Exclusive & Class Meeting Semester Genap',
            'spmb_banner_year' => '2027-2028',
            'spmb_banner_description' => 'Bergabunglah bersama keluarga besar SMPS IT Madani Kayuagung. Memadukan kurikulum terpadu nasional dengan pembiasaan adab Qur\'ani, target hafalan 2 juz mutqin, serta penguasaan bahasa asing & teknologi.',
            'spmb_banner_card1_title' => 'KUOTA TERBATAS',
            'spmb_banner_card1_desc' => 'Hanya 24 Siswa',
            'spmb_banner_card2_title' => 'CASH BACK 1 JUTA',
            'spmb_banner_card2_desc' => 'Alumni SDS IT Madani',
            'spmb_banner_card3_title' => 'CLASS MEETING',
            'spmb_banner_card3_desc' => 'Mulai Rabu, 17 Juni',
            'spmb_banner_flyer_image' => '/uploads/flyer-spmb-sit-madani.webp',
            'spmb_banner_flyer_label' => 'Pengumuman Resmi Sekolah',
            'spmb_banner_btn_text' => 'Daftar SPMB Online',
            'spmb_banner_btn_url' => '/ppdb',
            'spmb_banner_contact_text' => 'Narahubung: 0858-3817-3417',
            'spmb_banner_contact_phone' => '0858-3817-3417',
            'ppdb_image_1' => '/uploads/madani/fasilitas_1377_IMG-20240528-WA0094-scaled.webp',
            'ppdb_image_2' => '/uploads/madani/fasilitas_3427_IMG-20240528-WA0106-scaled.webp',
            'ppdb_image_3' => '/uploads/madani/fasilitas_1278_HALL-SIT-Madani_.webp',
            'donation_bank_1_name' => 'Bank Syariah Indonesia (BSI)',
            'donation_bank_1_code' => '451',
            'donation_bank_1_rekening' => '718-293-8401',
            'donation_bank_1_holder' => 'YAYASAN AGUNG MADANI KAYUAGUNG',
            'donation_bank_2_name' => 'Bank Sumsel Babel Syariah',
            'donation_bank_2_code' => '120',
            'donation_bank_2_rekening' => '801-09-00123',
            'donation_bank_2_holder' => 'SMP IT MADANI KAYUAGUNG',
            'donation_confirm_phone' => '0858-3817-3417',
            'donation_confirm_text' => "Assalamu'alaikum Bendahara SMPS IT Madani, saya telah menyalurkan infaq pembangunan.",
            'donation_intro_text' => 'Salurkan infaq pembangunan sarana pendidikan, beasiswa tahfidz Qur\'an, dan pengembangan kampus SMPS IT Madani Kayuagung.',
            'hero_slides_yayasan' => json_encode([
                [
                    'active' => true,
                    'badge' => 'YAYASAN AGUNG MADANI KAYUAGUNG • KAB. OKI',
                    'title' => 'Mewujudkan Generasi Robbani yang Cerdas, Mandiri & Berakhlak Mulia',
                    'subtitle' => "Pendidikan Islam Terpadu Satu Atap Berbasis Al-Qur'an, As-Sunnah, Sains dan Teknologi Modern.",
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
                    'badge' => "TAHFIDZ QUR'AN MUTQIN & ADAB NABAWI",
                    'title' => "Pembinaan Karakter & Hafalan Al-Qur'an Berkesinambungan",
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
            ]),
            'hero_slides' => json_encode([
                [
                    'active' => true,
                    'badge' => 'SMPS IT Unggulan Kayuagung, Kab. OKI • Terakreditasi B',
                    'title' => 'Selamat Datang di Website Resmi',
                    'subtitle' => 'SMPS IT Madani Kayuagung',
                    'image' => '/uploads/campus-smpit-madani.webp',
                    'btn_text' => 'Sambutan Kepala Sekolah',
                    'btn_link' => '/sambutan-kepala-sekolah',
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'Info SPMB',
                    'btn2_link' => '/ppdb',
                    'btn2_target' => '_self',
                ],
                [
                    'active' => true,
                    'badge' => 'SMPS IT Unggulan Kayuagung, Kab. OKI • Terakreditasi B',
                    'title' => "Membina Generasi Qur'ani, Cerdas & Berakhlak Mulia",
                    'subtitle' => "Sekolah Menengah Pertama Islam Terpadu berakreditasi di Kayuagung, Kab. OKI dengan Kurikulum Terpadu & Tahfidz Al-Qur'an.",
                    'image' => '/uploads/activities-sit-madani.webp',
                    'btn_text' => 'Profil Singkat Sekolah',
                    'btn_link' => '/tentang-kami',
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'Info SPMB',
                    'btn2_link' => '/ppdb',
                    'btn2_target' => '_self',
                ],
                [
                    'active' => true,
                    'badge' => 'SMPS IT Unggulan Kayuagung, Kab. OKI • Terakreditasi B',
                    'title' => 'SPMB Gelombang Exclusive TP Baru',
                    'subtitle' => 'Kuota Terbatas Hanya 24 Orang & Promo Cash Back 1 Juta Alumni SDS IT Madani.',
                    'image' => '/uploads/tahfidz-sit-madani.webp',
                    'btn_text' => 'Daftar SPMB Online',
                    'btn_link' => '/ppdb',
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'Info SPMB',
                    'btn2_link' => '/ppdb',
                    'btn2_target' => '_self',
                ],
            ]),
            'hero_slides_tk' => json_encode([
                [
                    'active' => true,
                    'badge' => 'TKS IT MADANI KAYUAGUNG • TERAKREDITASI B',
                    'title' => 'Membentuk Generasi Rabbani yang Kreatif, Cerdas, dan Mandiri',
                    'subtitle' => 'Pendidikan Anak Usia Dini berbasis fitrah, adab islami, tahfidz juz 30 cilik, dan pembelajaran sentra bermakna.',
                    'image' => '/uploads/madani/kegiatan-madani-03.webp',
                    'btn_text' => 'Profil TKS IT',
                    'btn_link' => '/tk/tentang-kami',
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'SPMB TKS IT',
                    'btn2_link' => '/tk/ppdb',
                    'btn2_target' => '_self',
                ],
            ]),
            'hero_slides_sd' => json_encode([
                [
                    'active' => true,
                    'badge' => 'SDS IT MADANI KAYUAGUNG • TERAKREDITASI B',
                    'title' => 'Membentuk Generasi Berprestasi, Sholeh, Inovatif & Mandiri',
                    'subtitle' => 'Sekolah Dasar Islam Terpadu unggulan dengan target tahfidz 2 juz mutqin, kurikulum terpadu JSIT, dan pembinaan akhlak mulia.',
                    'image' => '/uploads/madani/kegiatan-madani-06.webp',
                    'btn_text' => 'Profil SDS IT',
                    'btn_link' => '/sd/tentang-kami',
                    'btn_target' => '_self',
                    'btn2_active' => true,
                    'btn2_text' => 'SPMB SDS IT',
                    'btn2_link' => '/sd/ppdb',
                    'btn2_target' => '_self',
                ],
            ]),
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // 2. Quick Menus (8 Menu Utama)
        $quickMenus = [
            ['name' => 'PPDB', 'url' => '/ppdb', 'icon' => 'fa-solid fa-graduation-cap', 'order' => 1],
            ['name' => 'Profil', 'url' => '/tentang-kami', 'icon' => 'fa-solid fa-school', 'order' => 2],
            ['name' => 'Guru', 'url' => '/dewan-guru', 'icon' => 'fa-solid fa-chalkboard-user', 'order' => 3],
            ['name' => 'Fasilitas', 'url' => '/fasilitas', 'icon' => 'fa-solid fa-layer-group', 'order' => 4],
            ['name' => 'Unggulan', 'url' => '/unggulan', 'icon' => 'fa-solid fa-award', 'order' => 5],
            ['name' => 'Prestasi', 'url' => '/prestasi', 'icon' => 'fa-solid fa-trophy', 'order' => 6],
            ['name' => 'Ekskul', 'url' => '/ekstrakurikuler', 'icon' => 'fa-solid fa-people-group', 'order' => 7],
            ['name' => 'Berita', 'url' => '/artikel', 'icon' => 'fa-solid fa-newspaper', 'order' => 8],
        ];

        QuickMenu::truncate();
        foreach ($quickMenus as $qm) {
            QuickMenu::create(array_merge($qm, ['is_active' => true]));
        }

        // 3. Dewan Guru & GTK
        AnggotaDewan::truncate();
        $gurus = $data['gurus'] ?? [
            [
                'name' => 'Ribang Imam Satria, S.Pi., Gr.',
                'slug' => 'ribang-imam-satria-spi-gr',
                'position' => 'Kepala Sekolah',
                'fraction' => 'Pimpinan Sekolah',
                'photo' => '/uploads/dewan/kepala-sekolah.webp',
                'profile_summary' => 'Kepala SMPS IT Madani Kayuagung. Berkomitmen mendidik generasi Qur\'ani yang cerdas, berakhlak mulia, dan berprestasi global.',
                'education' => 'S1 Ilmu Administrasi Negara, S2 Manajemen Pendidikan, Gr',
                'order' => 1,
            ],
        ];

        foreach ($gurus as $g) {
            AnggotaDewan::create($g);
        }

        // 4. Fasilitas Sekolah (Bidangs)
        Bidang::truncate();
        $facilities = $data['facilities'] ?? [];
        foreach ($facilities as $fac) {
            Bidang::create(array_merge($fac, [
                'address' => 'Kampus SMPS IT Madani Kayuagung',
                'phone' => '0858-3817-3417',
                'email' => 'smpsislamterpadumadani@gmail.com',
            ]));
        }

        // 5. Program Unggulan (Dpcs)
        $programs = [
            [
                'name' => 'Program Tahfidz 2 Juz Mutqin & Hadits',
                'slug' => 'program-tahfidz-2-juz-mutqin',
                'address' => 'Kurikulum Khusus Keislaman',
                'description' => 'Bimbingan intensif membaca Al-Qur\'an dengan tartil, tahsin bersanad, dan hafalan mutqin minimal 2 juz serta 12 hadits pilihan.',
                'order' => 1,
            ],
            [
                'name' => 'Bina Pribadi Islam (BPI) & Karakter Islami',
                'slug' => 'bina-pribadi-islam-bpi',
                'address' => 'Pembinaan Karakter Siswa',
                'description' => 'Halaqah pekanan pembinaan adab, pembiasaan ibadah yaumiyah, dzikir ma\'tsurat, serta penanaman akhlaqul karimah.',
                'order' => 2,
            ],
            [
                'name' => 'Kurikulum Terpadu JSIT & Kurikulum Merdeka',
                'slug' => 'kurikulum-terpadu-jsit-merdeka',
                'address' => 'Integrasi Nilai Islam & Sains',
                'description' => 'Memadukan standar capaian Kurikulum Merdeka Nasional dengan nilai-nilai Islam Terpadu berstandar JSIT Indonesia.',
                'order' => 3,
            ],
            [
                'name' => 'Program Belajar Bersama Maestro & Riset Sains',
                'slug' => 'belajar-bersama-maestro-riset',
                'address' => 'Pengembangan Akademik & Potensi',
                'description' => 'Eksplorasi bakat seni, budaya, sains dan teknologi langsung bersama tokoh dan pakar di bidangnya.',
                'order' => 4,
            ],
            [
                'name' => 'Madani Safar & Outing Class Edukatif',
                'slug' => 'madani-safar-outing-class',
                'address' => 'Outdoor Learning & Wawasan',
                'description' => 'Pembelajaran luar kelas berbasis observasi alam, rihlah edukatif, studi lingkungan, dan pengembangan wawasan santri SIT Madani di Kabupaten Ogan Komering Ilir.',
                'order' => 5,
            ],
            [
                'name' => 'Madani Peduli (Bakti Sosial Masyarakat)',
                'slug' => 'madani-peduli-bakti-sosial',
                'address' => 'Kepedulian Sosial & Dakwah',
                'description' => 'Kiprah nyata santri SIT Madani dalam melayani, menebar kebaikan, dan memberikan kontribusi positif bagi masyarakat di Kayuagung, Kab. OKI.',
                'order' => 6,
            ],
        ];

        Dpc::truncate();
        foreach ($programs as $prog) {
            Dpc::create($prog);
        }

        // 6. Categories & Tags
        DB::table('post_category')->delete();
        DB::table('post_tag')->delete();

        $categoriesMap = [
            'berita' => 'Berita',
            'prestasi-siswa' => 'Prestasi Siswa',
            'akademik-riset' => 'Akademik & Riset',
            'tahfidz-keislaman' => 'Tahfidz & Keislaman',
            'kesiswaan-ekskul' => 'Kesiswaan & Ekskul',
            'kabar-kampus' => 'Kabar Kampus',
            'opini' => 'Opini & Artikel',
        ];

        $categoryModels = [];
        foreach ($categoriesMap as $slug => $catName) {
            $categoryModels[$slug] = Category::updateOrCreate(
                ['slug' => $slug],
                ['name' => $catName, 'description' => 'Kategori '.$catName]
            );
        }

        $tagNames = [
            'ppdb' => 'PPDB',
            'tahfidz' => 'Tahfidz',
            'prestasi' => 'Prestasi',
            'juara' => 'Juara',
            'jsit' => 'JSIT',
            'outing-class' => 'Outing Class',
            'safar' => 'Madani Safar',
            'berkhidmat' => 'Madani Berkhidmat',
            'ekskul' => 'Ekskul',
            'kayuagung' => 'Kayuagung',
        ];

        $tagModels = [];
        foreach ($tagNames as $slug => $tName) {
            $tagModels[$slug] = Tag::updateOrCreate(
                ['slug' => $slug],
                ['name' => $tName]
            );
        }

        // 7. Video YouTube
        Video::truncate();
        $videos = $data['videos'] ?? [];
        foreach ($videos as $idx => $v) {
            Video::create(array_merge($v, [
                'created_at' => now()->subMinutes($idx * 5),
                'updated_at' => now()->subMinutes($idx * 5),
            ]));
        }

        // 8. Pengumuman
        Pengumuman::truncate();
        $pengumumen = $data['pengumumen'] ?? [];
        foreach ($pengumumen as $an) {
            Pengumuman::create($an);
        }

        // 9. Agenda Sekolah
        Agenda::truncate();
        $agendas = $data['agendas'] ?? [];
        foreach ($agendas as $ag) {
            Agenda::create($ag);
        }

        // 10. Testimonials
        Testimonial::truncate();
        $testimonials = $data['testimonials'] ?? [];
        foreach ($testimonials as $t) {
            Testimonial::create($t);
        }

        // 11. Downloads (Buku, Dokumen & Media)
        Download::truncate();
        $localDownloads = [
            [
                'title' => "Panduan Kurikulum Tahfidz Al-Qur'an 2 Juz SMPS IT Madani",
                'description' => 'Modul resmi kurikulum tahfidz mutqin SMPS IT Madani Kayuagung berbasis standar JSIT Indonesia.',
                'category_type' => 'E-Book',
                'file_path' => '/uploads/downloads/panduan-mutqin-tahfidz-madani.pdf',
                'cover_image' => '/uploads/covers/cover-tahfidz-mutqin.webp',
                'file_type' => 'PDF',
                'file_size' => '9.0 KB',
                'download_count' => 342,
            ],
            [
                'title' => 'Buku Saku Adab & 10 Karakter (Muwashofat) Siswa JSIT',
                'description' => 'Pedoman pembiasaan akhlak islami, adab kepada guru dan orang tua, tata tertib siswa asrama dan sekolah.',
                'category_type' => 'E-Book',
                'file_path' => '/uploads/downloads/buku-saku-adab-karakter-siswa.pdf',
                'cover_image' => '/uploads/covers/cover-karakter-siswa.webp',
                'file_type' => 'PDF',
                'file_size' => '6.9 KB',
                'download_count' => 284,
            ],
            [
                'title' => 'Petunjuk Praktikum Laboratorium IPA Terpadu SMPS IT Madani',
                'description' => 'Pedoman eksperimen laboratorium biologi dan fisika untuk siswa kelas VII-IX SMPS IT Madani.',
                'category_type' => 'E-Book',
                'file_path' => '/uploads/downloads/petunjuk-praktikum-sains-terpadu.pdf',
                'cover_image' => '/uploads/covers/cover-praktikum-sains.webp',
                'file_type' => 'PDF',
                'file_size' => '6.6 KB',
                'download_count' => 195,
            ],
            [
                'title' => "Kurikulum Pembinaan Da'i Muda, Khitabah & Public Speaking",
                'description' => 'Kumpulan materi public speaking, retorika dakwah 3 bahasa (Indonesia, Arab, Inggris), dan sistematika kultum.',
                'category_type' => 'E-Book',
                'file_path' => '/uploads/downloads/kurikulum-pembinaan-dai-muda.pdf',
                'cover_image' => '/uploads/covers/cover-dai-muda.webp',
                'file_type' => 'PDF',
                'file_size' => '6.5 KB',
                'download_count' => 210,
            ],
            [
                'title' => 'Buku Saku Kosakata Harian Bilingual Bahasa Arab & Inggris Siswa',
                'description' => 'Modul percakapan bilingual harian asrama dan lingkungan sekolah untuk mempercepat penguasaan active speaking.',
                'category_type' => 'E-Book',
                'file_path' => '/uploads/downloads/buku-saku-kosakata-bilingual.pdf',
                'cover_image' => '/uploads/covers/cover-bilingual-arab-inggris.webp',
                'file_type' => 'PDF',
                'file_size' => '6.6 KB',
                'download_count' => 312,
            ],
            [
                'title' => 'Panduan Sukses Asesmen Nasional & Masuk Sekolah Lanjutan Unggulan Favorit',
                'description' => 'Strategi sukses menembus sekolah lanjutan favorit impian, pembedahan materi literasi dan numerasi Asesmen Nasional.',
                'category_type' => 'E-Book',
                'file_path' => '/uploads/downloads/panduan-sukses-snbt-ptn.pdf',
                'cover_image' => '/uploads/covers/cover-sukses-snbt.webp',
                'file_type' => 'PDF',
                'file_size' => '6.6 KB',
                'download_count' => 450,
            ],

            [
                'title' => 'Logo Resmi SMPS IT Madani Kayuagung (High Resolution)',
                'description' => 'File logo resmi SMPS IT Madani Kayuagung format PNG transparan.',
                'category_type' => 'Logo',
                'file_path' => '/uploads/logo-madani.png',
                'file_type' => 'PNG',
                'file_size' => '120 KB',
                'download_count' => 780,
            ],
            [
                'title' => 'Logo Lambang Madani Square HD',
                'description' => 'Logo lambang persegi SMPS IT Madani Kayuagung format PNG.',
                'category_type' => 'Logo',
                'file_path' => '/uploads/logo-madani-square.webp',
                'file_type' => 'PNG',
                'file_size' => '85 KB',
                'download_count' => 315,
            ],
        ];

        foreach ($localDownloads as $dw) {
            Download::create($dw);
        }

        // 12. Articles (Posts)
        Post::where('type', 'post')->delete();
        $articles = $data['articles'] ?? [];

        foreach ($articles as $postData) {
            $catSlug = $postData['category'] ?? 'kabar-kampus';
            unset($postData['category']);

            $post = Post::create(array_merge($postData, [
                'type' => 'post',
                'status' => 'publish',
            ]));

            if (isset($categoryModels[$catSlug])) {
                $post->categories()->sync([$categoryModels[$catSlug]->id]);
            }

            // Sync tags
            $selectedTags = collect($tagModels)->random(min(3, count($tagModels)))->pluck('id')->toArray();
            $post->tags()->sync($selectedTags);
        }

        // 13. Halaman Statis Resmi Sekolah (Gunakan firstOrCreate agar editan admin di dashboard tidak terhapus)
        $officialPages = [
            [
                'slug' => 'sambutan-kepala-sekolah',
                'title' => 'Sambutan Kepala Sekolah SMPS IT Madani Kayuagung',
                'excerpt' => 'Sambutan resmi Kepala Sekolah SMPS IT Madani Kayuagung, Ribang Imam Satria, S.Pi., Gr..',
                'featured_image' => '/uploads/dewan/kepala-sekolah.webp',
                'content' => <<<'HTML'
<p><strong>Bismillahirrohmanirrohim. Assalamu'alaikum Warahmatullahi Wabarakatuh.</strong></p>
<p>Segala puji dan syukur kita panjatkan kehadirat Allah SWT yang senantiasa melimpahkan rahmat, taufik, dan inayah-Nya kepada kita semua. Sholawat beriring salam senantiasa tercurah kepada junjungan alam Nabi Besar Muhammad SAW, para keluarga, sahabat, dan pengikutnya hingga akhir zaman.</p>
<p>Selamat datang di website resmi <strong>SMPS IT Madani Kayuagung</strong>. Di era transformasi digital dan revolusi industri saat ini, kehadiran media informasi digital menjadi sarana vital untuk mempererat ukhuwah, menyajikan transparansi kegiatan sekolah, serta memberikan kemudahan akses informasi bagi para orang tua, siswa, dan masyarakat luas.</p>
<p>Sebagai Sekolah Menengah Pertama Islam Terpadu di bawah naungan <strong>Yayasan Agung Madani Kayuagung</strong>, kami berkomitmen menghadirkan pendidikan holistik yang memadukan keunggulan kurikulum nasional, penguatan adab Islami, target hafalan Al-Qur'an 2 juz mutqin, kompetensi sains-teknologi, dan pembiasaan bahasa asing (Arab dan Inggris).</p>
<p>Kami mengucapkan terima kasih yang sebesar-besarnya kepada Pembina dan Pengurus Yayasan Agung Madani, seluruh asatidz dan asatidzah, staf kependidikan, serta para wali murid yang senantiasa membersamai langkah kami dalam mendidik generasi terbaik umat. Mari bersama-sama kita wujudkan anak-anak yang sholih-sholihah, cerdas, berprestasi, dan berakhlakul karimah.</p>
<p><em>Wassalamu'alaikum Warahmatullahi Wabarakatuh.</em></p>
<p><strong>Kepala SMPS IT Madani Kayuagung</strong><br>
<strong>Ribang Imam Satria, S.Pi., Gr.</strong></p>
HTML,
            ],
            [
                'slug' => 'visi-dan-misi',
                'title' => 'Visi dan Misi SMPS IT Madani Kayuagung',
                'excerpt' => 'Visi, Misi, dan Tujuan penyelenggaraan pendidikan SMPS IT Madani Kayuagung.',
                'featured_image' => '/uploads/logo-madani.png',
                'content' => <<<'HTML'
<h3>VISI SEKOLAH</h3>
<blockquote class="text-xl font-bold text-school-primary my-4 p-4 border-l-4 border-school-primary bg-indigo-50/70 rounded-r-lg">
“MENJADI LEMBAGA ISLAM TERPADU YANG MENCETAK GENERASI TERBAIK, BERKEPRIBADIAN ISLAMI, BERAKHLAK MULIA, CERDAS, BERPRESTASI, DAN BERWAWASAN GLOBAL”
</blockquote>

<h3>MISI SEKOLAH</h3>
<ol class="list-decimal pl-6 space-y-2.5 text-gray-700">
    <li><strong>Unggul dalam Akhlakul Karimah:</strong> Menanamkan aqidah yang lurus, ibadah yang benar, dan akhlak mulia berlandaskan Al-Qur'an dan As-Sunnah.</li>
    <li><strong>Unggul Prestasi Akademik & Non-Akademik:</strong> Menyelenggarakan pembelajaran aktif, kreatif, dan menantang untuk meraih prestasi di tingkat kota, provinsi, dan nasional.</li>
    <li><strong>Berprestasi dalam Bahasa & MIPA:</strong> Membekali siswa dengan kecakapan berbahasa asing (Arab & Inggris) serta kemampuan sains dan nalar matematika.</li>
    <li><strong>Target Tahfidzul Qur'an:</strong> Membina kemampuan tahsin dan tahfidz Al-Qur'an dengan target minimal 2 juz mutqin serta hafalan 12 hadits pilihan.</li>
    <li><strong>Lingkungan Pendidikan Islami Profesional:</strong> Mewujudkan iklim sekolah yang kondusif, amanah, ramah anak, dan berbudaya Islami.</li>
</ol>

<h3 class="mt-8">TUJUAN PENDIDIKAN</h3>
<ul class="list-disc pl-6 space-y-2 text-gray-700">
    <li>Mencetak lulusan yang tertib dalam mendirikan sholat fardhu berjamaah dan gemar mengamalkan sunnah.</li>
    <li>Mencapai target hafalan minimal 2 juz Al-Qur'an (Juz 29 dan Juz 30) dengan tajwid tartil.</li>
    <li>Menghasilkan peserta didik yang berkarakter mandiri, santun, berpikir kritis, dan adaptif terhadap teknologi.</li>
    <li>Meraih prestasi gemilang dalam kompetisi sains, keolahragaan, seni Islam, dan baris-berbaris.</li>
    <li>Mempersiapkan siswa melanjutkan ke jenjang lanjutan/MA/Pesantren unggulan dengan bekal ilmu dan iman yang kokoh.</li>
</ul>
HTML,
            ],
            [
                'slug' => 'tentang-kami',
                'title' => 'Profil SMPS IT Madani Kayuagung',
                'excerpt' => 'Profil resmi lembaga pendidikan SMPS IT Madani Kayuagung, Kab. OKI.',
                'featured_image' => '/uploads/campus-sit-madani.webp',
                'content' => <<<'HTML'
<h3>Profil Singkat Sekolah</h3>
<p><strong>SMPS IT Madani Kayuagung</strong> adalah lembaga pendidikan formal tingkat menengah pertama berbasis Islam Terpadu di Kabupaten Ogan Komering Ilir, Sumatera Selatan, di bawah naungan <strong>Yayasan Agung Madani Kayuagung</strong>.</p>
<p>Berlokasi strategis di Jalan SMA Negeri 4, RT 02 LK III, Kelurahan Tanjung Rancing, Kecamatan Kayuagung, Kabupaten Ogan Komering Ilir, sekolah ini memadukan kurikulum nasional Kementerian Pendidikan Dasar dan Menengah dengan kurikulum khas Sekolah Islam Terpadu (SIT). Dengan pendekatan holistik, siswa dibina kecerdasan spiritual (SQ), emosional (EQ), dan intelektualnya (IQ) secara seimbang.</p>

<h4 class="mt-6 font-bold text-gray-900">Identitas Sekolah</h4>
<table class="w-full text-left border-collapse my-4 text-sm">
    <tr class="border-b"><td class="py-2.5 font-semibold w-1/3 text-gray-800">Nama Resmi Sekolah</td><td class="py-2.5 text-gray-700">SMPS IT MADANI KAYUAGUNG</td></tr>
    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">NPSN</td><td class="py-2.5 text-gray-700">70034917</td></tr>
    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Bentuk Pendidikan</td><td class="py-2.5 text-gray-700">SMP (Sekolah Menengah Pertama)</td></tr>
    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Status Sekolah</td><td class="py-2.5 text-gray-700">Swasta (Yayasan Agung Madani)</td></tr>
    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Akreditasi</td><td class="py-2.5 text-gray-700"><span class="inline-block px-2.5 py-0.5 rounded-full bg-indigo-100 text-school-primary font-bold text-xs">TERAKREDITASI B</span></td></tr>
    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Kepala Sekolah</td><td class="py-2.5 text-gray-700">Ribang Imam Satria, S.Pi., Gr.</td></tr>
    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Alamat Kampus</td><td class="py-2.5 text-gray-700">Jalan SMA Negeri 4, RT 02 LK III, Kelurahan Tanjung Rancing, Kecamatan Kayuagung, Kabupaten Ogan Komering Ilir, Sumatera Selatan 30618</td></tr>
    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Telepon / WhatsApp</td><td class="py-2.5 text-gray-700">0858-3817-3417 / 0858-3817-3417</td></tr>
    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Email Resmi</td><td class="py-2.5 text-gray-700">smpsislamterpadumadani@gmail.com</td></tr>
</table>
HTML,
            ],
            [
                'slug' => 'sejarah',
                'title' => 'Sejarah SMPS IT Madani Kayuagung',
                'excerpt' => 'Napak tilas perjalanan dan sejarah berdirinya SMPS IT Madani di Kayuagung, Kab. OKI.',
                'featured_image' => '/uploads/campus-sit-madani.webp',
                'content' => <<<'HTML'
<h3>Sejarah dan Latar Belakang Pendirian</h3>
<p><strong>SMPS IT Madani Kayuagung</strong> didirikan di bawah naungan <strong>Yayasan Agung Madani Kayuagung</strong> sebagai wujud kepedulian terhadap pentingnya pendidikan generasi muda Islam yang seimbang antara ilmu pengetahuan umum dan pemahaman agama yang mendalam.</p>
<p>Berawal dari kesuksesan pembinaan di tingkat sekolah dasar (SDIT Madani), masyarakat dan para wali murid mendambakan kelanjutan pendidikan tingkat pertama yang tetap mengusung nilai-nilai Qur'ani dan pembiasaan adab Islami. Maka berdirilah SMPS IT Madani Kayuagung untuk melayani kebutuhan masyarakat Kayuagung dan sekitarnya.</p>
<p>Di bawah kepemimpinan <strong>Ibu Ribang Imam Satria, S.Pi., Gr.</strong> beserta jajaran dewan guru yang amanah dan kompeten, SMPS IT Madani terus berinovasi dalam metode pembelajaran, sarana prasarana modern, pembinaan tahfidz 2 juz mutqin, serta prestasi siswa di berbagai ajang kejuaraan daerah dan nasional.</p>
HTML,
            ],
            [
                'slug' => 'struktur-organisasi',
                'title' => 'Struktur Organisasi SMPS IT Madani Kayuagung',
                'excerpt' => 'Bagan kepemimpinan, yayasan, dan dewan guru SMPS IT Madani Kayuagung.',
                'featured_image' => '/uploads/logo-madani.png',
                'content' => <<<'HTML'
<h3>Struktur Manajemen Sekolah & Yayasan</h3>
<ul class="space-y-3 text-gray-800">
    <li><strong>Yayasan Penyelenggara:</strong> Yayasan Agung Madani Kayuagung</li>
    <li><strong>Kepala Sekolah:</strong> Ribang Imam Satria, S.Pi., Gr.</li>
    <li><strong>Wakil Kepala Sekolah Bidang Kurikulum:</strong> Ustadz Fulan, S.Pd.</li>
    <li><strong>Koordinator Bidang Kesiswaan &amp; Ekskul:</strong> Ustadz Fulan, S.Kom.</li>
    <li><strong>Koordinator Tahsin &amp; Tahfidz Al-Qur'an (TTQ):</strong> Ustadzah Fulanah, S.Pd.I</li>
    <li><strong>Koordinator BPI &amp; Bina Karakter:</strong> Ustadzah Fulanah, S.Si.</li>
    <li><strong>Dewan Guru &amp; Tenaga Kependidikan:</strong> Asatidz dan asatidzah profesional berdedikasi tinggi.</li>
</ul>
HTML,
            ],
            [
                'slug' => 'donasi',
                'title' => 'Infaq & Wakaf Pembangunan SMPS IT Madani Kayuagung',
                'excerpt' => 'Salurkan infaq dan wakaf terbaik Anda untuk sarana pendidikan Islam dan beasiswa tahfidz di Kayuagung, Kab. OKI.',
                'featured_image' => '/uploads/campus-sit-madani.webp',
                'content' => <<<'HTML'
<h3>Investasi Akhirat Melalui Pendidikan Islam</h3>
<p>Yayasan Agung Madani Kayuagung membuka kesempatan seluas-luasnya bagi kaum muslimin dan para dermawan untuk menyalurkan infaq dan sedekah jariyah. Dana yang terhimpun disalurkan untuk pengembangan fasilitas laboratorium, masjid kampus, ruang kelas digital, serta beasiswa pendidikan bagi siswa penghafal Al-Qur'an.</p>
HTML,
            ],
            [
                'slug' => 'e-book',
                'title' => 'E-Library & Modul Pembelajaran SMPS IT Madani',
                'excerpt' => 'Kumpulan buku pelajaran, panduan kurikulum, dan modul e-library siswa SMPS IT Madani.',
                'featured_image' => '/uploads/activities-sit-madani.webp',
                'content' => <<<'HTML'
<h3>Pusat E-Library & Buku Digital</h3>
<p>Daftar koleksi buku pelajaran Kurikulum Merdeka, modul tahfidz 2 juz, dan bacaan islami yang dapat diakses dan diunduh oleh civitas akademika SMPS IT Madani Kayuagung.</p>
HTML,
            ],
            [
                'slug' => 'hymne-mars',
                'title' => 'Mars & Hymne Jaringan Sekolah Islam Terpadu',
                'excerpt' => 'Lagu mars dan hymne Sekolah Islam Terpadu kebanggaan SMPS IT Madani Kayuagung.',
                'featured_image' => '/uploads/logo-madani.png',
                'content' => <<<'HTML'
<h3>Mars JSIT Indonesia</h3>
<p class="italic text-gray-600">Membina tunas bangsa, beriman dan bertaqwa, cerdas berakhlak mulia...</p>
HTML,
            ],
            [
                'slug' => 'logo',
                'title' => 'Logo Resmi SMPS IT Madani Kayuagung',
                'excerpt' => 'Makna filosofis lambang dan logo resmi SMPS IT Madani Kayuagung.',
                'featured_image' => '/uploads/logo-madani.png',
                'content' => <<<'HTML'
<h3>Filosofi Logo SMPS IT Madani Kayuagung</h3>
<p>Logo SMPS IT Madani Kayuagung memadukan lambang perisai keimanan, kubah masjid, Al-Qur'an terbuka, dan obor semangat menuju terwujudnya generasi Qur'ani yang cerdas dan berakhlakul karimah.</p>
HTML,
            ],
            [
                'slug' => 'hubungi',
                'title' => 'Kontak & Sekretariat SPMB SMPS IT Madani',
                'excerpt' => 'Alamat dan kontak resmi sekretariat SMPS IT Madani Kayuagung.',
                'featured_image' => '/uploads/campus-sit-madani.webp',
                'content' => <<<'HTML'
<h3>Sekretariat Sekolah & Panitia SPMB</h3>
<p>Silakan kunjungi kampus kami atau hubungi panitia SPMB untuk informasi pendaftaran peserta didik baru gelombang exclusive, jadwal seleksi, dan cashback 1 juta.</p>
<p><strong>Alamat Kampus:</strong> Jalan Sadewa No. 45 RT 01 RW 04 Kel. Karang Raja, Kec. Kayuagung, Kabupaten Ogan Komering Ilir, Sumatera Selatan 31113.<br>
<strong>WhatsApp / Telp:</strong> 0858-3817-3417 / 0858-3817-3417<br>
<strong>Email:</strong> smpsislamterpadumadani@gmail.com</p>
HTML,
            ],
            [
                'slug' => 'privacy-policy',
                'title' => 'Kebijakan Privasi SMPS IT Madani Kayuagung',
                'excerpt' => 'Kebijakan privasi dan perlindungan data pengguna website resmi SMPS IT Madani.',
                'featured_image' => '/uploads/logo-madani.png',
                'content' => <<<'HTML'
<h3>Kebijakan Privasi SMPS IT Madani Kayuagung</h3>
<p>Privasi Anda adalah prioritas bagi kami. SMPS IT Madani Kayuagung berkomitmen melindungi setiap data pribadi yang Anda berikan melalui situs ini, baik saat mendaftar SPMB online maupun mengisi formulir kontak.</p>
<h4>1. Pengumpulan Informasi</h4>
<p>Informasi yang kami kumpulkan mencakup data pendaftaran calon siswa (nama, alamat, nomor telepon orang tua, data akademik) yang digunakan semata-mata untuk keperluan administrasi dan seleksi peserta didik baru.</p>
<h4>2. Keamanan Data</h4>
<p>Kami menerapkan standar perlindungan data yang ketat untuk mencegah akses tanpa izin atau penyalahgunaan informasi pribadi Anda.</p>
HTML,
            ],
        ];

        foreach ($officialPages as $p) {
            Post::firstOrCreate(
                ['slug' => $p['slug']],
                array_merge($p, [
                    'type' => 'page',
                    'status' => 'publish',
                    'meta_title' => $p['title'],
                    'meta_description' => $p['excerpt'],
                ])
            );
        }

        // Galeri Foto Dokumentasi Sekolah SMPS IT Madani Kayuagung (35 Foto Autentik SIT Madani)
        Post::where('type', 'gallery')->delete();

        $galleryTitles = [
            'Dokumentasi Pembelajaran & Praktikum Siswa SIT Madani',
            'Aktivitas Sentra Bermain & Kreativitas TKS IT Madani',
            'Pembiasaan Sholat Dhuha & Doa Bersama di Kampus Terpadu',
            'Kegiatan Tahfidz Al-Qur\'an Juz 30 & Tasmi\' Akbar Santri',
            'Upacara Hari Besar Nasional & Baris Berbaris Siswa',
            'Pramuka SIT: Perkemahan & Uji Keterampilan Lapangan',
            'Praktikum Sains & Eksperimen Ilmiah di Laboratorium IPA',
            'Literasi Digital & Pembelajaran Komputer SMPS IT Madani',
            'Market Day & Pengembangan Jiwa Wirausaha Cilik SDS IT',
            'Peringatan Maulid Nabi & Isra Mi\'raj Keluarga Besar SIT Madani',
            'Manasik Haji Cilik TKS IT Madani di Lapangan Terpadu',
            'Latihan Panahan & Olahraga Sunnah Santri Madani',
            'Bina Pribadi Islami (BPI) & Halaqah Karakter Robbani',
            'Suasana Belajar Nyaman & Berpusat Pada Siswa di Kelas',
            'Pemberian Apresiasi & Piagam Juara Siswa Berprestasi',
            'Pertemuan Komite Orang Tua & Parenting Pendidikan Islami',
            'Kunjungan Edukatif & Outbound Ceria Siswa di Luar Kelas',
            'Wisuda Tahfidz & Khotmil Qur\'an SIT Madani',
            'Gedung Asrama Tahfidz & Kampus Terpadu Kayuagung',
            'Latihan Kesenian Hadroh & Nasyid Islami Siswa',
            'Senam Sehat & Pembinaan Kebugaran Jasmani Siswa',
            'Bakti Sosial & Kepedulian Berbagi Santri Madani',
            'Simulasi Asesmen Nasional Berbasis Komputer (ANBK)',
            'Pameran Karya Seni & Proyek Penguatan Profil Pancasila (P5)',
            'Semarak Class Meeting & Perlombaan Antar Rombel Siswa',
            'Pelatihan Guru & Peningkatan Mutu Tenaga Pendidik',
            'Koleksi Perpustakaan & Pojok Baca Nyaman Siswa',
            'Pojok Sains & Pengamatan Lingkungan Hidup Sekolah',
            'Pelepasan & Wisuda Angkatan Siswa SIT Madani',
            'Kegiatan Keputrian & Pembinaan Adab Muslimah Santriwati',
            'Majelis Pagi: Muraja\'ah Bersama Sebelum Jam Pembelajaran',
            'Pemberdayaan Santri: Kepemimpinan & Organisasi Siswa',
            'Dokumentasi Tim Dewan Guru & Tenaga Kependidikan SIT Madani',
            'Ruang Laboratorium & Fasilitas Multimedia Siswa',
            'Keluarga Besar Yayasan Agung Madani & Seluruh Unit Sekolah',
        ];

        foreach ($galleryTitles as $idx => $title) {
            $num = str_pad((string) ($idx + 1), 2, '0', STR_PAD_LEFT);
            Post::create([
                'title' => $title,
                'slug' => Str::slug($title)."-{$num}",
                'type' => 'gallery',
                'status' => 'publish',
                'featured_image' => "/uploads/madani/kegiatan-madani-{$num}.webp",
                'content' => $title,
                'author_id' => 1,
                'published_at' => now()->subHours(35 - $idx),
            ]);
        }

        // Ekstrakurikuler SMPS IT Madani Kayuagung
        $ekskulItems = [
            [
                'title' => 'Pramuka SIT (Sekolah Islam Terpadu)',
                'slug' => 'pramuka-sit',
                'excerpt' => 'Kepanduan berkarakter Islam melatih kemandirian, kepemimpinan, dan kecintaan pada alam terbuka.',
                'featured_image' => '/uploads/activities-sit-madani.webp',
                'content' => '<p>Ekstrakurikuler Pramuka SIT (Satuan Komunitas Pramuka Sekolah Islam Terpadu) di SMPS IT Madani merupakan wadah pembinaan karakter, kedisiplinan, kemandirian, dan kepemimpinan berlandaskan nilai-nilai Islam. Melalui kegiatan perkemahan, penjelajahan alam, tali temali, semaphore, dan bakti sosial, para santri dilatih untuk tangguh, siap menolong sesama, dan berjiwa ksatria.</p><p>Kegiatan rutin dilaksanakan setiap pekan dibimbing oleh para pembina berpengalaman dan tersertifikasi KMD/KML.</p>',
            ],
            [
                'title' => 'Robotika & Coding IT Club',
                'slug' => 'robotika-coding-it-club',
                'excerpt' => 'Pelatihan logika pemrograman dasar, perakitan mikrokontroler, dan persiapan olimpiade robotika.',
                'featured_image' => '/uploads/madani/fasilitas_1274_Ruang-Lab-Komputer1.webp',
                'content' => '<p>Klub Robotika dan Pemrograman dirancang untuk mempersiapkan santri menghadapi era kecerdasan buatan (AI) dan teknologi digital. Siswa mempelajari algoritma logika pemrograman, dasar elektronika, perakitan sensor, pemrograman mikrokontroler Arduino/ESP32, hingga pembuatan robot mobile cerdas.</p><p>Klub ini aktif mengikuti berbagai kompetisi sains dan teknologi madrasah/sekolah tingkat provinsi hingga nasional.</p>',
            ],
            [
                'title' => 'Tahfidz & TTQ Club (Tartil Al-Qur\'an)',
                'slug' => 'tahfidz-ttq-club',
                'excerpt' => 'Pendalaman tajwid, makhorijul huruf, tilawah berirama, dan persiapan tasmi\' mutqin 2 juz.',
                'featured_image' => '/uploads/tahfidz-sit-madani.webp',
                'content' => '<p>Klub Tahsin dan Tahfidz Qur\'an (TTQ) berfokus pada pemantapan bacaan Al-Qur\'an berstandar riwayat Imam Hafsh, penguasaan matan Al-Jazariyah, perbaikan makharijul huruf, serta penguasaan seni tilawah berirama (Nahawand, Bayati, Hijaz, dll).</p><p>Klub ini mengantarkan para santri menuju ujian tasmi\' sekali duduk 2 juz mutqin serta ajang Musabaqah Tilawatil Qur\'an (MTQ) dan MHQ antarpelajar.</p>',
            ],
            [
                'title' => 'English & Arabic Public Speaking Club',
                'slug' => 'english-arabic-public-speaking-club',
                'excerpt' => 'Latihan percakapan bahasa asing aktif, pidato 3 bahasa, dan pembiasaan retorika dakwah.',
                'featured_image' => '/uploads/campus-sit-madani.webp',
                'content' => '<p>Membekali santri dengan kecakapan berbahasa internasional dan keberanian berbicara di depan publik (public speaking). Materi meliputi pidato (speech), debat bahasa Inggris, khitabah bahasa Arab, story telling islami, dan pembiasaan active daily conversation.</p><p>Siswa dilatih menjadi dai dan pemimpin muda berwawasan global yang mampu menyuarakan pesan kebaikan Islam kepada dunia.</p>',
            ],
            [
                'title' => 'Futsal & Olahraga Prestasi',
                'slug' => 'futsal-olahraga-prestasi',
                'excerpt' => 'Pembinaan kebugaran jasmani, teknik bermain futsal terpadu, dan kompetisi antarpelajar.',
                'featured_image' => '/uploads/activities-sit-madani.webp',
                'content' => '<p>Olahraga futsal dan kebugaran melatih fisik yang kuat (Qowiyyul Jismi), sportivitas, serta kerja sama tim solid. Didukung lapangan olahraga yang memadai, santri mendapatkan pembinaan teknik dasar dribbling, passing, formasi taktik bertanding, dan pola hidup sehat.</p><p>Tim futsal SMPS IT Madani rutin menjuarai turnamen tingkat kota dan persahabatan antarsekolah Islam di Sumatera Selatan.</p>',
            ],
            [
                'title' => 'Seni Hadrah & Kaligrafi Islam',
                'slug' => 'seni-hadrah-kaligrafi-islam',
                'excerpt' => 'Pelatihan tabuhan rebana hadrah, vokal sholawat, dan seni lukis kaligrafi mushaf.',
                'featured_image' => '/uploads/madani/fasilitas_1278_HALL-SIT-Madani_.webp',
                'content' => '<p>Wadah apresiasi seni budaya Islam yang menanamkan mahabbah (cinta) kepada Nabi Muhammad SAW melalui lantunan sholawat dan tabuhan rebana banjari/hadrah modern, serta mengasah kepekaan estetika melalui seni menulis khat kaligrafi indah (Khat Tsuluts, Naskhi, Riq\'ah).</p><p>Grup hadrah dan tim kaligrafi sering tampil dalam peringatan hari besar Islam, wisuda sekolah, dan festival kesenian Islam se-Sumatera Selatan.</p>',
            ],
        ];

        if (! Post::where('type', 'ekskul')->exists()) {
            foreach ($ekskulItems as $idx => $e) {
                Post::updateOrCreate(
                    ['slug' => $e['slug'], 'type' => 'ekskul'],
                    array_merge($e, [
                        'type' => 'ekskul',
                        'status' => 'publish',
                        'author_id' => 1,
                        'published_at' => now()->subDays(6 - $idx),
                    ])
                );
            }
        }

        // 11. Jalur Pendaftaran PPDB Dinamis (First Brive, Mutasi Kerja, Tahfidz, Alumni, Prestasi, Reguler)
        PpdbTrack::truncate();
        $defaultTracks = [
            [
                'name' => 'Jalur First Brive',
                'slug' => 'jalur-first-brive',
                'percentage' => '10%',
                'quota' => 'Kuota Terbatas',
                'cashback_info' => 'Cashback Khusus Pendaftar Gelombang Pertama',
                'description' => 'Keringanan biaya dan prioritas pendaftaran bagi calon siswa yang mendaftar pada periode awal (First Brive). Mendapatkan potongan biaya masuk serta souvenir eksklusif sekolah.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Jalur Mutasi Kerja',
                'slug' => 'jalur-mutasi-kerja',
                'percentage' => '5%',
                'quota' => 'Kuota Khusus Mutasi',
                'cashback_info' => 'Keringanan Khusus Pindahan Kedinasan / Perusahaan',
                'description' => 'Jalur khusus bagi putra-putri dari orang tua yang mengalami mutasi kerja atau pindah tugas kedinasan (TNI, Polri, ASN, BUMN, Perusahaan Swasta) ke wilayah Kayuagung, Kab. OKI dan sekitarnya.',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Jalur Tahfidz',
                'slug' => 'jalur-tahfidz',
                'percentage' => '5%',
                'quota' => 'Hanya 10 Siswa',
                'cashback_info' => 'Cashback Rp 750.000,- s/d Rp 1.000.000,-',
                'description' => "Tahfidz minimal 4-5 Juz Cashback Rp. 750.000,-\nTahfidz >5 Juz Cashback Rp. 1.000.000,-\nMengikuti tes sima'an tahfidz bersama dewan musyrif Al-Qur'an Madani.\nKuota Jalur Tahfidz Hanya 10 Siswa.",
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Jalur Alumni',
                'slug' => 'jalur-alumni',
                'percentage' => '25%',
                'quota' => 'Hanya 50 Siswa',
                'cashback_info' => 'Potongan Uang Pangkal Rp 1.000.000,-',
                'description' => 'Keringanan istimewa bagi lulusan SD IT Madani dan SD IT Madani Kayuagung 2 yang melanjutkan ke SMPS IT Madani Kayuagung berupa potongan biaya uang pangkal sebesar Rp. 1.000.000,- dengan kuota (hanya 50 siswa).',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Jalur Prestasi',
                'slug' => 'jalur-prestasi',
                'percentage' => '30%',
                'quota' => 'Prioritas Penerimaan',
                'cashback_info' => 'Bebas Tes Akademik & Potongan Biaya',
                'description' => 'Bebas tes tulis akademik bagi peraih Juara 1, 2, atau 3 tingkat Kota/Kabupaten, Provinsi, maupun Nasional pada bidang akademik, sains, seni, dan olahraga. Diskon khusus biaya masuk dan prioritas penerimaan.',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Jalur Reguler',
                'slug' => 'jalur-reguler',
                'percentage' => '25%',
                'quota' => 'Sesuai Kuota Kelas',
                'cashback_info' => 'Tes Mandiri Sekolah',
                'description' => "Jalur seleksi reguler melalui tahapan:\nTes Potensi Akademik (Matematika, Bahasa Indonesia, PAI).\nTes Kemampuan Membaca Al-Qur'an (Tahsin & Tajwid).\nWawancara Komitmen Orang Tua & Siswa.",
                'order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($defaultTracks as $track) {
            PpdbTrack::create($track);
        }

        // Sinkronisasi teks form tracks untuk kompatibilitas form
        $trackNames = array_map(fn ($t) => "{$t['name']} ({$t['percentage']})", $defaultTracks);
        Setting::set('ppdb_form_tracks', implode("\n", $trackNames), 'ppdb');
    }
}
