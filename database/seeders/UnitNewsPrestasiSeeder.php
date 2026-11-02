<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class UnitNewsPrestasiSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Kategori Berita & Prestasi per Unit
        $categoryData = [
            ['name' => 'Berita TKS IT Madani', 'slug' => 'berita-tk', 'description' => 'Kabar kegiatan, pembelajaran sentra, dan aktivitas anak TKS IT Madani.'],
            ['name' => 'Berita SDS IT Madani', 'slug' => 'berita-sd', 'description' => 'Kabar kegiatan, kurikulum terpadu, dan aktivitas siswa SDS IT Madani.'],
            ['name' => 'Berita SMPS IT Madani', 'slug' => 'berita-smp', 'description' => 'Kabar kegiatan, tahfidz, sains, dan aktivitas santri SMPS IT Madani.'],
            ['name' => 'Kabar Yayasan Agung Madani', 'slug' => 'kabar-yayasan', 'description' => 'Warta resmi perkembangan kampus terpadu dan kebijakan Yayasan Agung Madani.'],
            ['name' => 'Prestasi TKS IT', 'slug' => 'prestasi-tk', 'description' => 'Capaian dan prestasi anak didik TKS IT Madani Kayuagung.'],
            ['name' => 'Prestasi SDS IT', 'slug' => 'prestasi-sd', 'description' => 'Capaian dan prestasi siswa SDS IT Madani Kayuagung.'],
            ['name' => 'Prestasi SMPS IT', 'slug' => 'prestasi-smp', 'description' => 'Capaian dan kejuaraan santri SMPS IT Madani Kayuagung.'],
        ];

        $categories = [];
        foreach ($categoryData as $cat) {
            $categories[$cat['slug']] = Category::firstOrCreate(
                ['slug' => $cat['slug']],
                ['name' => $cat['name'], 'description' => $cat['description']]
            );
        }

        // 2. Berita & Artikel Spesifik TKS IT Madani
        $tkPosts = [
            [
                'title' => 'Keseruan Sentra Seni & Jurnal Gambar Anak TKS IT Madani Kayuagung',
                'slug' => 'keseruan-sentra-seni-dan-jurnal-gambar-tks-it-madani',
                'excerpt' => 'Anak-anak kelompok bermain TKS IT Madani antusias mengekspresikan imajinasi melalui jurnal gambar dan eksplorasi warna di sentra kreativitas.',
                'content' => '<p>Suasana riang gembira mewarnai aktivitas belajar di TKS Islam Terpadu Madani Kayuagung pada Sentra Seni dan Kreativitas. Didampingi para bunda pendidik, anak-anak diajak menuangkan ide cerita melalui media gambar dan aneka teknik kreasi.</p><p>Kepala TKS IT Madani, <strong>Ayu Rahmayani, S.Pd.Gr. (Bunda Ayu)</strong>, menuturkan bahwa pendekatan sentra dan Deep Learning ini memberikan ruang seluas-luasnya bagi anak usia dini untuk bereksplorasi secara merdeka, mengasah motorik halus, sekaligus menumbuhkan rasa percaya diri.</p><p>Melalui jurnal gambar harian, anak-anak tidak hanya berlatih koordinasi visual dan motorik, tetapi juga belajar mengomunikasikan gagasan mereka dengan santun dan berani di depan teman-temannya.</p>',
                'featured_image' => '/uploads/activities-sit-madani.webp',
                'category_slugs' => ['berita-tk'],
            ],
            [
                'title' => 'Pentas Ekspresi & Manasik Haji Cilik TKS IT Madani: Mengenal Rukun Islam Sejak Dini',
                'slug' => 'pentas-ekspresi-dan-manasik-haji-cilik-tks-it-madani',
                'excerpt' => 'Mengenalkan rukun Islam kelima dan adab tawaf sejak usia dini dalam peragaan Manasik Haji Cilik TKS IT Madani Kayuagung.',
                'content' => '<p>Ratusan ananda sholeh dan sholehah TKS IT Madani Kayuagung dengan mengenakan pakaian ihram putih mengikuti peragaan <strong>Manasik Haji Cilik</strong> di halaman kampus terpadu SIT Madani.</p><p>Kegiatan edukatif ini bertujuan mengenalkan tata cara ibadah haji, melatih kesabaran, serta menanamkan rasa cinta kepada baitullah dan syiar Islam sejak masa usia keemasan (golden age).</p><p>Acara berlangsung dengan penuh keceriaan dan haru, didukung penuh oleh para orang tua yang tergabung dalam Forum Orang Tua Murid dan Guru (FOMG) TKS IT Madani.</p>',
                'featured_image' => '/uploads/campus-sit-madani.webp',
                'category_slugs' => ['berita-tk'],
            ],
            [
                'title' => 'Market Day Cilik TKS IT Madani: Belajar Mandiri, Jujur & Berbagi Berkah',
                'slug' => 'market-day-cilik-tks-it-madani-belajar-mandiri-dan-jujur',
                'excerpt' => 'Melatih kecakapan sosial, komunikasi positif, dan dasar berhitung melalui simulasi jual-beli halal yang menyenangkan di TKS IT Madani.',
                'content' => '<p>Kegiatan <strong>Market Day Cilik</strong> kembali diselenggarakan di TKS IT Madani Kayuagung. Anak-anak berperan aktif sebagai penjual dan pembeli makanan sehat serta suvenir hasil karya mereka sendiri.</p><p>Kegiatan ini dirancang untuk menumbuhkan jiwa wirausaha islami, melatih kejujuran, sikap saling menghargai, serta menanamkan kebiasaan bersedekah dari sebagian rezeki yang diperoleh.</p>',
                'featured_image' => '/uploads/activities-sit-madani.webp',
                'category_slugs' => ['berita-tk'],
            ],
        ];

        // 3. Berita & Artikel Spesifik SDS IT Madani
        $sdPosts = [
            [
                'title' => 'Pelaksanaan ANBK SDS IT Madani di Laboratorium Komputer Berlangsung Tertib & Lancar',
                'slug' => 'pelaksanaan-anbk-sds-it-madani-kayuagung-berlangsung-sukses',
                'excerpt' => 'Siswa kelas 5 SDS IT Madani Kayuagung sukses menyelesaikan Asesmen Nasional Berbasis Komputer (ANBK) dengan fasilitas laboratorium komputer modern.',
                'content' => '<p>Pelaksanaan Asesmen Nasional Berbasis Komputer (ANBK) di SDS Islam Terpadu Madani Kayuagung berjalan tertib, aman, dan tanpa kendala teknis. Sebanyak siswa kelas 5 mengikuti seluruh sesi literasi membaca dan numerasi di ruang laboratorium komputer sekolah.</p><p>Kepala SDS IT Madani, <strong>Yudhi Arsyandi, S.Pd., Gr.</strong>, memberikan apresiasi kepada tim proktor, teknisi, dan dewan guru yang telah mempersiapkan pembekalan literasi komputer bagi siswa sejak dini.</p><p>"Alhamdulillah, dengan fasilitas PC modern dan jaringan internet yang memadai, anak-anak kami dapat mengerjakan instrumen asesmen dengan tenang dan penuh rasa percaya diri," ungkap beliau.</p>',
                'featured_image' => '/uploads/campus-sit-madani.webp',
                'category_slugs' => ['berita-sd'],
            ],
            [
                'title' => 'Semarak Market Day & Gebyar Karya Siswa SDS IT Madani Kayuagung',
                'slug' => 'semarak-market-day-dan-gebyar-karya-siswa-sds-it-madani',
                'excerpt' => 'Sebanyak 293 siswa SDS IT Madani dalam 13 rombongan belajar memamerkan inovasi produk kuliner sehat dan kreasi kriya bernilai jual.',
                'content' => '<p>Halaman kampus terpadu SIT Madani dipadati pengunjung pada acara tahunan <strong>Gebyar Karya & Market Day SDS IT Madani</strong>. Kegiatan ini melibatkan seluruh jenjang kelas 1 hingga kelas 6.</p><p>Siswa tidak hanya mempraktikkan keterampilan berhitung dan transaksi keuangan, namun juga menerapkan 10 Muwashofat karakter JSIT seperti mandiri, jujur, dan berakhlak mulia.</p>',
                'featured_image' => '/uploads/activities-sit-madani.webp',
                'category_slugs' => ['berita-sd'],
            ],
            [
                'title' => 'Program Munaqosah Tahfidz 2 Juz Mutqin SDS IT Madani Cetak Generasi Penjaga Kalamullah',
                'slug' => 'program-munaqosah-tahfidz-2-juz-mutqin-sds-it-madani',
                'excerpt' => 'Uji publik hafalan Al-Qur\'an Juz 30 dan 29 mutqin bersanad bagi siswa sekolah dasar di SDS IT Madani Kayuagung.',
                'content' => '<p>SDS IT Madani menyelenggarakan agenda tahunan <strong>Munaqosah dan Uji Publik Tahfidz Al-Qur\'an</strong>. Di hadapan dewan penguji dan orang tua wali, puluhan santri cilik membuktikan kelancaran hafalan juz 30 dan 29 dengan bacaan tartil sesuai kaidah tajwid.</p><p>Program unggulan ini menjadi bukti komitmen SDS IT Madani dalam melahirkan anak-anak yang cerdas akal dan bercahaya hatinya dengan kalam ilahi.</p>',
                'featured_image' => '/uploads/tahfidz-sit-madani.webp',
                'category_slugs' => ['berita-sd'],
            ],
        ];

        // 4. Update existing SMP posts to have berita-smp category
        $smpPosts = Post::where('type', 'post')->get();
        foreach ($smpPosts as $p) {
            $p->content = str_replace('Ibu Ribang Imam Satria', 'Ustadz Ribang Imam Satria', $p->content);
            $p->save();

            if (isset($categories['berita-smp'])) {
                $p->categories()->syncWithoutDetaching([$categories['berita-smp']->id]);
            }
        }

        // Simpan Berita TK
        foreach ($tkPosts as $tp) {
            $post = Post::updateOrCreate(
                ['slug' => $tp['slug']],
                [
                    'title' => $tp['title'],
                    'excerpt' => $tp['excerpt'],
                    'content' => $tp['content'],
                    'featured_image' => $tp['featured_image'],
                    'status' => 'publish',
                    'type' => 'post',
                    'views_count' => rand(150, 650),
                    'published_at' => now()->subDays(rand(1, 15)),
                ]
            );
            if (isset($categories['berita-tk'])) {
                $post->categories()->sync([$categories['berita-tk']->id]);
            }
        }

        // Simpan Berita SD
        foreach ($sdPosts as $sp) {
            $post = Post::updateOrCreate(
                ['slug' => $sp['slug']],
                [
                    'title' => $sp['title'],
                    'excerpt' => $sp['excerpt'],
                    'content' => $sp['content'],
                    'featured_image' => $sp['featured_image'],
                    'status' => 'publish',
                    'type' => 'post',
                    'views_count' => rand(180, 850),
                    'published_at' => now()->subDays(rand(1, 20)),
                ]
            );
            if (isset($categories['berita-sd'])) {
                $post->categories()->sync([$categories['berita-sd']->id]);
            }
        }

        // 5. GENERATE DATA PRESTASI SANTRI / SISWA (TK, SD, SMP)
        $prestasiItems = [
            // TK
            [
                'title' => 'Juara 1 Lomba Mewarnai Tingkat PAUD/TK se-Kabupaten Ogan Komering Ilir',
                'slug' => 'juara-1-lomba-mewarnai-paud-tk-kabupaten-oki',
                'excerpt' => 'Ananda Aisyah Humaira dari TKS IT Madani berhasil meraih Juara 1 dalam Lomba Mewarnai Tingkat Kabupaten OKI.',
                'content' => '<p>Prestasi membanggakan ditorehkan oleh ananda <strong>Aisyah Humaira</strong>, siswi kelompok TK B Madinah TKS Islam Terpadu Madani Kayuagung yang sukses meraih <strong>Juara 1 Lomba Mewarnai</strong> pada Gebyar PAUD tingkat Kabupaten Ogan Komering Ilir.</p><p>Karya gambar yang rapi, pemilihan perpaduan warna yang harmonis, serta kreativitas visual yang ditunjukkan berhasil memikat dewan juri.</p>',
                'featured_image' => '/uploads/activities-sit-madani.webp',
                'category_slug' => 'prestasi-tk',
                'unit' => 'tk',
            ],
            [
                'title' => 'Juara 1 Lomba Tahfidz Cilik Surat Pendek Juz 30 Festival Anak Sholeh',
                'slug' => 'juara-1-lomba-tahfidz-cilik-festival-anak-sholeh',
                'excerpt' => 'M. Fatih Al-Farabi mengharumkan nama TKS IT Madani dengan meraih Juara 1 Tahfidz Cilik Juz 30.',
                'content' => '<p>Ananda <strong>M. Fatih Al-Farabi</strong> dari TKS IT Madani Kayuagung berhasil meraih <strong>Juara 1 Lomba Tahfidz Cilik</strong> dalam ajang Festival Anak Sholeh. Dengan kelancaran hafalan surat-surat pendek, ketepatan makharijul huruf, serta adab tilawah yang baik, ananda tampil memukau di hadapan dewan asatidz.</p>',
                'featured_image' => '/uploads/tahfidz-sit-madani.webp',
                'category_slug' => 'prestasi-tk',
                'unit' => 'tk',
            ],
            [
                'title' => 'Juara 2 Lomba Gerak & Lagu Anak Sholeh Se-Kecamatan Kota Kayuagung',
                'slug' => 'juara-2-lomba-gerak-dan-lagu-anak-sholeh-kayuagung',
                'excerpt' => 'Tim Cilik TKS IT Madani meraih Juara 2 Lomba Gerak dan Lagu Islami se-Kecamatan Kota Kayuagung.',
                'content' => '<p>Kekompakan regu ananda TKS IT Madani membuahkan hasil manis dengan diraihnya <strong>Juara 2 Lomba Gerak & Lagu Anak Sholeh</strong>. Menampilkan gerak ceria bertema adab islami, ananda tampil penuh senyum dan percaya diri.</p>',
                'featured_image' => '/uploads/activities-sit-madani.webp',
                'category_slug' => 'prestasi-tk',
                'unit' => 'tk',
            ],

            // SD
            [
                'title' => 'Juara 1 Olimpiade Sains Nasional (OSN) Bidang IPA SD se-Kabupaten OKI',
                'slug' => 'juara-1-olimpiade-sains-nasional-ipa-sd-kabupaten-oki',
                'excerpt' => 'Siswa SDS IT Madani Kayuagung sukses menorehkan prestasi puncak sebagai Juara 1 OSN IPA Tingkat Kabupaten.',
                'content' => '<p>Prestasi gemilang kembali diraih oleh keluarga besar SDS Islam Terpadu Madani Kayuagung. Siswa berprestasi atas nama <strong>Muhammad Rayhan Al-Ghifari</strong> sukses menyabet gelar <strong>Juara 1 Olimpiade Sains Nasional (OSN)</strong> bidang Ilmu Pengetahuan Alam (IPA) tingkat Kabupaten Ogan Komering Ilir.</p><p>Rayhan berhasil mengungguli puluhan peserta dari berbagai sekolah negeri dan swasta se-Kabupaten OKI dan berhak melaju mewakili kabupaten ke tingkat Provinsi Sumatera Selatan.</p>',
                'featured_image' => '/uploads/campus-sit-madani.webp',
                'category_slug' => 'prestasi-sd',
                'unit' => 'sd',
            ],
            [
                'title' => 'Juara 1 Musabaqah Hifdzil Qur\'an (MHQ) 2 Juz Tingkat Provinsi Sumatera Selatan',
                'slug' => 'juara-1-mhq-2-juz-tingkat-provinsi-sumsel',
                'excerpt' => 'Khadijah Azzahra membuktikan kualitas hafalan Qur\'an SDS IT Madani dengan meraih Juara 1 MHQ 2 Juz se-Sumsel.',
                'content' => '<p>Santriwati SDS IT Madani Kayuagung, <strong>Khadijah Azzahra</strong> (kelas 4), sukses meraih predikat <strong>Juara 1 Musabaqah Hifdzil Qur\'an (MHQ) Cabang 2 Juz</strong> pada kejuaraan pelajar tingkat Provinsi Sumatera Selatan. Keberhasilan ini menjadi bukti keunggulan program TTQ dan bimbingan talaqqi bersanad di SDS IT Madani.</p>',
                'featured_image' => '/uploads/tahfidz-sit-madani.webp',
                'category_slug' => 'prestasi-sd',
                'unit' => 'sd',
            ],
            [
                'title' => 'Juara Umum Lomba Senam & Kepanduan Pramuka SIT Tingkat SD se-Kabupaten OKI',
                'slug' => 'juara-umum-lomba-senam-dan-kepanduan-pramuka-sit-sd',
                'excerpt' => 'Regu Pramuka SIT SDS IT Madani memborong piala dan meraih trofi Juara Umum Kepanduan Sekolah Dasar.',
                'content' => '<p>Regu Pandu SIT SDS IT Madani Kayuagung berhasil mengukir sejarah dengan dinobatkan sebagai <strong>Juara Umum</strong> dalam Jambore Kepanduan Sekolah Islam Terpadu se-Kabupaten Ogan Komering Ilir. Menguasai lomba sandi, pioneering, ketangkasan halang rintang, serta senam kreasi anak sholeh, siswa tampil tangguh dan penuh sportivitas.</p>',
                'featured_image' => '/uploads/activities-sit-madani.webp',
                'category_slug' => 'prestasi-sd',
                'unit' => 'sd',
            ],

            // SMP
            [
                'title' => 'Juara 1 English Story Telling Competition Tingkat SMP se-Sumatera Selatan',
                'slug' => 'juara-1-english-story-telling-competition-tingkat-smp-sumsel',
                'excerpt' => 'Siswi SMPS IT Madani Kayuagung meraih Juara 1 Lomba Story Telling Bahasa Inggris bergengsi tingkat provinsi.',
                'content' => '<p>Kemampuan berbahasa asing santri SMPS IT Madani kembali diakui di level regional. <strong>Nayla Safira</strong>, siswi kelas IX SMPS IT Madani, berhasil meraih <strong>Juara 1 English Story Telling Competition</strong> pada Festival Bahasa Pelajar se-Sumatera Selatan.</p><p>Membawakan narasi bertema keteladanan tokoh Islam dunia dengan kefasihan tata bahasa, intonasi memukau, dan ekspresi teatrikal, Nayla sukses memikat seluruh dewan juri.</p>',
                'featured_image' => '/uploads/campus-sit-madani.webp',
                'category_slug' => 'prestasi-smp',
                'unit' => 'smp',
            ],
            [
                'title' => 'Juara 2 Kompetisi Sains Nasional (KSN) Bidang IPA SMP se-Kabupaten OKI',
                'slug' => 'juara-2-kompetisi-sains-nasional-ksn-ipa-smp-oki',
                'excerpt' => 'Ahmad Zaidan siswa SMPS IT Madani sukses meraih Juara 2 KSN Bidang IPA SMP tingkat Kabupaten Ogan Komering Ilir.',
                'content' => '<p>Siswa SMPS IT Madani, <strong>Ahmad Zaidan</strong>, meraih <strong>Juara 2 KSN Bidang IPA</strong> tingkat Kabupaten OKI. Pembekalan intensif di laboratorium sains terpadu SMPS IT Madani terbukti mengantarkan siswa bersaing unggul di bidang akademis tingkat kabupaten.</p>',
                'featured_image' => '/uploads/activities-sit-madani.webp',
                'category_slug' => 'prestasi-smp',
                'unit' => 'smp',
            ],
            [
                'title' => 'Juara 1 Musabaqah Hifdzil Qur\'an (MHQ) 5 Juz Antar Pelajar se-Kabupaten OKI',
                'slug' => 'juara-1-mhq-5-juz-antar-pelajar-kabupaten-oki',
                'excerpt' => 'Bilal Al-Anshari santri SMPS IT Madani berhasil meraih Juara 1 MHQ 5 Juz Mutqin.',
                'content' => '<p>Santri SMPS IT Madani Kayuagung, <strong>Bilal Al-Anshari</strong>, sukses meraih <strong>Juara 1 MHQ 5 Juz</strong> dalam kompetisi Musabaqah Tilawatil & Hifdzil Qur\'an tingkat Kabupaten OKI. Bimbingan tahfidz intensif dan halaqah Al-Qur\'an di SMPS IT Madani terus melahirkan generasi huffadz yang berkualitas.</p>',
                'featured_image' => '/uploads/tahfidz-sit-madani.webp',
                'category_slug' => 'prestasi-smp',
                'unit' => 'smp',
            ],
        ];

        foreach ($prestasiItems as $item) {
            $post = Post::updateOrCreate(
                ['slug' => $item['slug']],
                [
                    'title' => $item['title'],
                    'excerpt' => $item['excerpt'],
                    'content' => $item['content'],
                    'featured_image' => $item['featured_image'],
                    'status' => 'publish',
                    'type' => 'prestasi',
                    'views_count' => rand(200, 1200),
                    'published_at' => now()->subDays(rand(2, 45)),
                ]
            );

            if (isset($categories[$item['category_slug']])) {
                $post->categories()->sync([$categories[$item['category_slug']]->id]);
            }
        }

        // 6. UPDATE SETTINGS: Hapus video Ishlahul Ummah & Bersihkan jejak Boarding
        Setting::set('ppdb_youtube_id', 'ULMekhqxvqU');
        Setting::set('ppdb_video_title', 'Video Profil & Dokumentasi SIT Madani');
        Setting::set('ppdb_video_desc', 'Saksikan profil resmi, haflah akbar, dan aktivitas belajar siswa SIT Madani Kayuagung.');

        Setting::set('ppdb_boarding', 'Program Full Day School: Pembelajaran terpadu komprehensif dari pagi hingga sore hari dengan integrasi kurikulum nasional, kurikulum kekhasan JSIT, sholat berjamaah, pembinaan adab Qur\'ani, tahfidz bersanad, makan siang sehat, dan ekstrakurikuler minat & bakat.');
        Setting::set('ppdb_form_programs', "Full Day School (Sekolah Terpadu)\nReguler");

        // Perbaiki schema form pendaftaran
        $rawSchema = Setting::get('ppdb_form_schema');
        if ($rawSchema) {
            $schema = json_decode($rawSchema, true);
            if (is_array($schema)) {
                foreach ($schema as &$field) {
                    if ($field['key'] === 'program_type') {
                        $field['options'] = ['Full Day School (Sekolah Terpadu)', 'Reguler'];
                    }
                    if ($field['key'] === 'living_with') {
                        $field['options'] = ['Orang Tua', 'Wali', 'Keluarga / Kerabat', 'Lainnya'];
                    }
                    if ($field['key'] === 'previous_school') {
                        $field['label'] = 'Asal Sekolah / Lembaga Sebelumnya (PAUD/TK/SD/MI/dll)';
                        $field['placeholder'] = 'Nama sekolah asal...';
                    }
                }
                Setting::set('ppdb_form_schema', json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
            }
        }
    }
}
