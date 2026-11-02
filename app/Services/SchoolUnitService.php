<?php

namespace App\Services;

class SchoolUnitService
{
    /**
     * Get all available units and yayasan.
     */
    public static function getUnits(): array
    {
        return [
            'yayasan' => [
                'key' => 'yayasan',
                'name' => 'Yayasan Agung Madani Kayuagung',
                'short_name' => 'Yayasan Agung Madani',
                'level' => 'Lembaga Penyelenggara',
                'tagline' => 'Menaungi TK, SD, dan SMP Sekolah Islam Terpadu Madani',
                'route' => route('home'),
                'icon' => 'fa-solid fa-landmark-flag',
                'color' => 'indigo',
                'leader_title' => 'Ketua Yayasan',
                'leader_name' => 'Drs. H. Legianto, M.E.E.',
                'leader_photo' => '/uploads/dewan/ust-legianto.webp',
                'address' => 'Jalan SMA Negeri 4, RT 02 LK III, Tanjung Rancing, Kayuagung, Kab. OKI, Sumatera Selatan 30618',
                'phone' => '0858-3817-3417',
                'email' => 'smpsislamterpadumadani@gmail.com',
            ],
            'tk' => [
                'key' => 'tk',
                'name' => 'TKS Islam Terpadu Madani Kayuagung',
                'short_name' => 'TKS IT Madani',
                'level' => 'PAUD / TK Islam Terpadu',
                'tagline' => 'Membentuk Generasi Rabbani yang Kreatif, Cerdas, dan Mandiri',
                'route' => route('unit.home', 'tk'),
                'ppdb_route' => route('unit.ppdb', 'tk'),
                'npsn' => '69915461',
                'akreditasi' => 'B (Menuju A)',
                'year_founded' => '2014',
                'icon' => 'fa-solid fa-shapes',
                'color' => 'amber',
                'leader_title' => 'Kepala Sekolah',
                'leader_name' => 'Ayu Rahmayani, S.Pd.Gr. (Bunda Ayu)',
                'leader_photo' => '/uploads/dewan/bunda-ayu.webp',
                'address' => 'Jln. SMA Negeri 4 RT. 04 RW. 02 Kel. Tanjung Rancing, Kayuagung, Kab. OKI 30618',
                'phone' => '0821-7936-9298',
                'email' => 'sitmadani@gmail.com',
                'badge' => 'PAUD / TK ISLAM TERPADU',
                'stats' => [
                    ['label' => 'NPSN', 'val' => '69915461'],
                    ['label' => 'Akreditasi', 'val' => 'B (BAN-PAUD)'],
                    ['label' => 'Kelompok Belajar', 'val' => 'TK A & TK B'],
                    ['label' => 'Model Belajar', 'val' => 'Sentra & Deep Learning'],
                ],
            ],
            'sd' => [
                'key' => 'sd',
                'name' => 'SDS Islam Terpadu Madani Kayuagung',
                'short_name' => 'SDS IT Madani',
                'level' => 'Sekolah Dasar Islam Terpadu',
                'tagline' => 'Membentuk Generasi Rabbani yang Berprestasi, Sholeh, Inovatif dan Mandiri',
                'route' => route('unit.home', 'sd'),
                'ppdb_route' => route('unit.ppdb', 'sd'),
                'npsn' => '69881529',
                'nss' => '102110241529',
                'akreditasi' => 'B (Baik)',
                'year_founded' => '2013',
                'icon' => 'fa-solid fa-book-open-reader',
                'color' => 'emerald',
                'leader_title' => 'Kepala Sekolah',
                'leader_name' => 'Yudhi Arsyandi, S.Pd., Gr.',
                'leader_photo' => '/uploads/dewan/ust-andi.webp',
                'address' => 'Jalan SMA Negeri 4 RT. 02 LK III, Tanjung Rancing, Kayuagung, Kab. OKI 30618',
                'phone' => '0811-7871-1313',
                'email' => 'sitmadani@gmail.com',
                'badge' => 'SEKOLAH DASAR ISLAM TERPADU',
                'stats' => [
                    ['label' => 'NPSN', 'val' => '69881529'],
                    ['label' => 'Akreditasi', 'val' => 'B (BAN-SM)'],
                    ['label' => 'Rombongan Belajar', 'val' => '13 Rombel'],
                    ['label' => 'Jumlah Murid', 'val' => '293 Siswa'],
                    ['label' => 'Guru & GTK', 'val' => '37 Tenaga'],
                ],
            ],
            'smp' => [
                'key' => 'smp',
                'name' => 'SMPS Islam Terpadu Madani Kayuagung',
                'short_name' => 'SMPS IT Madani',
                'level' => 'Sekolah Menengah Pertama Islam Terpadu',
                'tagline' => 'Terbentuknya Generasi Qur\'ani, Mandiri, Inovatif, Visioner & Moderat',
                'route' => route('unit.home', 'smp'),
                'ppdb_route' => route('unit.ppdb', 'smp'),
                'npsn' => '70034917',
                'nss' => '202110234917',
                'akreditasi' => 'B (Terakreditasi BAN-SM)',
                'year_founded' => '2019',
                'icon' => 'fa-solid fa-graduation-cap',
                'color' => 'indigo',
                'leader_title' => 'Kepala Sekolah',
                'leader_name' => 'Ribang Imam Satria, S.Pi., Gr. (Ust. Ribang)',
                'leader_photo' => '/uploads/dewan/kepala-sekolah.webp',
                'address' => 'Jalan SMA Negeri 4, RT 02 LK III, Tanjung Rancing, Kayuagung, Kab. OKI 30618',
                'phone' => '0858-3817-3417',
                'email' => 'smpsislamterpadumadani@gmail.com',
                'badge' => 'SEKOLAH MENENGAH PERTAMA IT',
                'stats' => [
                    ['label' => 'NPSN', 'val' => '70034917'],
                    ['label' => 'Akreditasi', 'val' => 'B (BAN-SM)'],
                    ['label' => 'Program', 'val' => 'Full Day School'],
                    ['label' => 'Target Tahfidz', 'val' => 'Tahfidz Mutqin Bersanad'],
                ],
            ],
        ];
    }

    /**
     * Get details of a single unit.
     */
    public static function getUnit(string $key): ?array
    {
        $units = self::getUnits();
        if (! isset($units[$key])) {
            return null;
        }

        $data = $units[$key];

        // Specific data per unit
        if ($key === 'tk') {
            $data['visi'] = 'Membentuk Generasi Rabbani yang Kreatif, Cerdas, dan Mandiri';
            $data['misi'] = [
                'Membiasakan Ibadah Harian: Sholat Dhuha, Doa harian, Muroja\'ah hafalan surat pendek, hadits, dan infaq Jumat.',
                'Membentuk Karakter yang Berakhlak Karimah: Jumat Sejahtera, ZISWAF, berbagi takjil, dan latihan kurban.',
                'Mengembangkan Daya Imajinasi: Melalui bermain peran, bercerita, sentra seni & kreativitas, karnaval, dan berkebun.',
                'Mendukung Bakat dan Kreativitas Anak: Sentra bermain terpadu, Market Day cilik, wisuda, dan berenang.',
                'Menyelenggarakan Proses Belajar Menyenangkan & Inovatif: Pendekatan Deep Learning (berkesadaran, bermakna, menggembirakan).',
                'Melatih Keterampilan Dasar Anak: Motorik kasar & halus, bahasa, kognitif, Jurnal Gambar, Fonik, dan Iqro\'.',
                'Menumbuhkan Rasa Percaya Diri: Tampil di depan umum, pentas ekspresi, manasik haji cilik, dan kemandirian.',
            ];
            $data['tujuan'] = [
                'Anak mampu membaca Iqro\' dan melafalkan doa-doa harian dengan lancar.',
                'Hafalan surat-surat pendek Juz 30 dan hadits-hadits pilihan anak.',
                'Membiasakan sholat dhuha dan adab sopan santun kepada guru dan orang tua.',
                'Kemandirian makan, berpakaian, dan bersosialisasi secara riang gembira.',
            ];
            $data['gurus'] = [
                ['name' => 'Ayu Rahmayani, S.Pd.Gr.', 'position' => 'Kepala Sekolah', 'fraction' => 'Pimpinan TKS IT', 'photo' => '/uploads/dewan/bunda-ayu.webp', 'education' => 'S1 Pendidikan, Gr', 'order' => 1],
                ['name' => 'Tesi Yurike, SH.', 'position' => 'Ketua FOMG', 'fraction' => 'Komite Orang Tua', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'Sarjana Hukum', 'order' => 2],
                ['name' => 'Dwi Putrianti, S.Pd.Gr.', 'position' => 'Bendahara Sekolah', 'fraction' => 'Tata Kelola', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Pendidikan, Gr', 'order' => 3],
                ['name' => 'Emi Yati Lindasari, S.Pd.Gr.', 'position' => 'Tata Usaha', 'fraction' => 'Tata Kelola', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Pendidikan, Gr', 'order' => 4],
                ['name' => 'Iwi Setyawati, S.Pd.Gr.', 'position' => 'Guru Kelas Cairo (TK A)', 'fraction' => 'Pendidik Sentra', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 PAUD, Gr', 'order' => 5],
                ['name' => 'Asmawati, S.Pd.', 'position' => 'Guru Kelas Cairo (TK A)', 'fraction' => 'Pendidik Sentra', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Kependidikan', 'order' => 6],
                ['name' => 'Sapriah, S.Sos', 'position' => 'Guru Kelas Mekah (TK B)', 'fraction' => 'Pendidik Sentra', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'Sarjana Sosial', 'order' => 7],
                ['name' => 'Rizka Diah Putri M, S.Pd.', 'position' => 'Guru Kelas Mekah (TK B)', 'fraction' => 'Pendidik Sentra', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Kependidikan', 'order' => 8],
                ['name' => 'Dina Wahyu Utami, S.Pd.', 'position' => 'Guru Kelas Madinah (TK B)', 'fraction' => 'Pendidik Sentra', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Kependidikan', 'order' => 9],
                ['name' => 'Lidya, S.Pd.', 'position' => 'Guru Kelas Madinah (TK B)', 'fraction' => 'Pendidik Sentra', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Kependidikan', 'order' => 10],
                ['name' => 'Meiliana, A.Ma', 'position' => 'Guru Kelas Mesir (TK B)', 'fraction' => 'Pendidik Sentra', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'Diploma Pendidikan', 'order' => 11],
                ['name' => 'Ghina Rahma Srikandi, A.Md.T.', 'position' => 'Guru Kelas Mesir (TK B)', 'fraction' => 'Pendidik Sentra', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'Ahli Madya Teknik', 'order' => 12],
            ];
            $data['programs'] = [
                ['name' => 'Sentra Ibadah & Muroja\'ah Harian', 'desc' => 'Sholat dhuha bersama, pembiasaan hafalan surat pendek, doa harian, dan tahsin Iqro\'.', 'icon' => 'fa-solid fa-mosque'],
                ['name' => 'Sentra Seni, Kreativitas & Jurnal Gambar', 'desc' => 'Mengeksplorasi imajinasi anak melalui jurnal lukis, mewarnai, kerajinan tangan, dan kreasi seni.', 'icon' => 'fa-solid fa-palette'],
                ['name' => 'Market Day & Entrepreneurship Cilik', 'desc' => 'Melatih kemandirian, komunikasi, interaksi sosial, serta pengenalan dasar berhitung melalui bermain jual-beli.', 'icon' => 'fa-solid fa-store'],
                ['name' => 'Manasik Haji Cilik & Outbound Edukatif', 'desc' => 'Pengenalan rukun Islam kelima sejak usia dini serta pelatihan motorik dan ketangkasan fisik.', 'icon' => 'fa-solid fa-kaaba'],
                ['name' => 'Fun Swimming & Motoric Exercise', 'desc' => 'Olahraga renang terpandu dan stimulasi motorik kasar untuk kesehatan dan kebugaran ananda.', 'icon' => 'fa-solid fa-person-swimming'],
                ['name' => 'Kunjungan Edukatif Profesi & Alam', 'desc' => 'Mengenalkan beragam profesi mulia dan eksplorasi alam sekitar untuk memperluas wawasan anak.', 'icon' => 'fa-solid fa-compass'],
            ];
            $data['facilities'] = [
                ['name' => 'Ruang Sentra Belajar Ber-AC', 'desc' => 'Ruang kelas tematik sentra yang nyaman, sejuk, dan aman dengan mainan edukatif terstandar.', 'icon' => 'fa-solid fa-door-open'],
                ['name' => 'Arena Bermain Edukatif Indoor & Outdoor', 'desc' => 'Wahana permainan ketangkasan luar dan dalam ruangan yang aman dan merangsang motorik.', 'icon' => 'fa-solid fa-gamepad'],
                ['name' => 'Pojok Baca & Literasi Cerita Bergambar', 'desc' => 'Koleksi buku dongeng islami, kisah para nabi, dan ensiklopedia anak yang memikat.', 'icon' => 'fa-solid fa-book-open'],
                ['name' => 'Kebun Edukasi & Pengenalan Tanaman', 'desc' => 'Area hijau sekolah untuk kegiatan berkebun bersama dan mengenal ciptaan Allah SWT.', 'icon' => 'fa-solid fa-seedling'],
                ['name' => 'Panggung Ekspresi & Aula Pentas Seni', 'desc' => 'Tempat anak-anak berlatih tampil percaya diri membawakan hafalan, puisi, dan bernyanyi.', 'icon' => 'fa-solid fa-microphone'],
            ];
            $data['slides'] = [
                [
                    'badge' => 'TKS ISLAM TERPADU MADANI KAYUAGUNG • TERAKREDITASI B',
                    'title' => 'Membentuk Generasi Rabbani yang Kreatif & Mandiri',
                    'subtitle' => 'Pendidikan Anak Usia Dini Berbasis Karakter Islami, Sentra Pembelajaran Menyenangkan & Tahfidz Cilik.',
                    'image' => '/uploads/campus-sit-madani.webp',
                    'btn_text' => 'Profil TKS IT Madani',
                    'btn_link' => route('unit.page', ['unit' => 'tk', 'slug' => 'tentang-kami']),
                    'btn2_text' => 'Daftar SPMB TK',
                    'btn2_link' => route('unit.ppdb', 'tk'),
                ],
            ];
        } elseif ($key === 'sd') {
            $data['visi'] = 'Membentuk Generasi Rabbani yang Berprestasi, Sholeh, Inovatif dan Mandiri';
            $data['misi'] = [
                'Membangun Atmosfer Belajar yang Islami.',
                'Membangun Kepercayaan Diri Siswa dan Civitas Akademika SIT Madani.',
                'Membangun Kreatifitas dan Inovasi Siswa dan Civitas Akademika SIT Madani.',
                'Mengembangkan Budaya Belajar untuk Belajar.',
            ];
            $data['tujuan'] = [
                'Anak mampu membaca Al-Qur\'an secara tartil, mendirikan sholat 5 waktu berjamaah, dan menghafal doa sehari-hari.',
                'Hafal minimal 2 Juz Al-Qur\'an (Juz 30 & Juz 29 mutqin bersanad).',
                'Hafal 30 Hadits pilihan sehari-hari tentang akhlak dan adab.',
                'Internalisasi nilai-nilai Islam dalam kehidupan sehari-hari siswa.',
                'Menguasai dasar-dasar berhitung (numerasi), sains, bahasa bilingual (Arab & Inggris), serta komputer/TIK.',
                'Sehat jasmani, cekatan, dan mandiri melalui olahraga, outbound, renang, dan kepanduan Pramuka SIT.',
            ];
            $data['gurus'] = [
                ['name' => 'Yudhi Arsyandi, S.Pd., Gr.', 'position' => 'Kepala Sekolah', 'fraction' => 'Pimpinan SDS IT', 'photo' => '/uploads/dewan/ust-andi.webp', 'education' => 'S1 Pendidikan, Gr (NIY: 01072021 01 066)', 'order' => 1],
                ['name' => 'Andi Kumaini, M.Pd.', 'position' => 'Ketua Komite Sekolah', 'fraction' => 'Komite Sekolah', 'photo' => '/uploads/dewan/ust-andi.webp', 'education' => 'S2 Manajemen Pendidikan', 'order' => 2],
                ['name' => 'Hayusnia Muslimah, S.Pd., Gr.', 'position' => 'Waka Bidang Kurikulum', 'fraction' => 'Kurikulum & PAI', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Kependidikan, Gr', 'order' => 3],
                ['name' => 'Rizki Jamali, S.Pd.', 'position' => 'Waka Bidang Kesiswaan', 'fraction' => 'Kesiswaan & PJOK', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Pendidikan Jasmani', 'order' => 4],
                ['name' => 'Mulya Budi Wijaya, S.Pd., Gr.', 'position' => 'Waka Bidang Sarpras', 'fraction' => 'Sarpras & TTQ', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Kependidikan, Gr', 'order' => 5],
                ['name' => 'Melna Andani, S.Sos., M.Si., Gr.', 'position' => 'Waka Bidang Humas & Sosmed', 'fraction' => 'Humas & Guru Kelas', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S2 Ilmu Sosial, Gr', 'order' => 6],
                ['name' => 'Siva Septiani, S.E.', 'position' => 'Bendahara SDS IT', 'fraction' => 'Keuangan', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'Sarjana Ekonomi', 'order' => 7],
                ['name' => 'Jeni Marselina, S.Kom.', 'position' => 'Tata Usaha & TIK', 'fraction' => 'Tata Usaha & Komputer', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'Sarjana Komputer', 'order' => 8],
                ['name' => 'Novi Sri Hardianti, S.Pd., Gr.', 'position' => 'Kepala Unit Lab Komputer & Guru B. Arab', 'fraction' => 'Lab Komputer & Bahasa', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Kependidikan, Gr', 'order' => 9],
                ['name' => 'Mei Beniarti, S.Pd., Gr.', 'position' => 'Kepala Unit Perpustakaan & Guru Kelas 1', 'fraction' => 'Perpustakaan & Guru Kelas', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Kependidikan, Gr', 'order' => 10],
                ['name' => 'Teti Kartini', 'position' => 'Kepala Unit UKS & Guru TTQ', 'fraction' => 'Kesehatan & TTQ', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'Tenaga Kesehatan & TTQ', 'order' => 11],
                ['name' => 'Deri Fatrin, S.P.', 'position' => 'Koordinator Guru TTQ', 'fraction' => 'Tahsin & Tahfidz', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'Sarjana Pertanian & Al-Qur\'an', 'order' => 12],
            ];
            $data['programs'] = [
                ['name' => 'Tahfidz Al-Qur\'an Target 2 Juz Mutqin', 'desc' => 'Bimbingan intensif hafalan Juz 30 dan 29 dengan talaqqi tartil dan munaqosah bersertifikat.', 'icon' => 'fa-solid fa-quran'],
                ['name' => 'Hafalan 30 Hadits Adab & Akhlak', 'desc' => 'Menanamkan hadits-hadits shahih tentang kejujuran, birrul walidain, dan kebaikan hidup.', 'icon' => 'fa-solid fa-hands-praying'],
                ['name' => 'Pembelajaran Bilingual Bahasa Arab & Inggris', 'desc' => 'Praktek percakapan dasar harian dan pembiasaan kosakata internasional sejak dini.', 'icon' => 'fa-solid fa-language'],
                ['name' => 'Kelas Riset Cilik Sains & Matematika MIPA', 'desc' => 'Mengasah logika numerasi, berpikir kritis, eksperimen laboratorium sains dasar.', 'icon' => 'fa-solid fa-flask'],
                ['name' => 'Laboratorium Komputer & Literasi Digital', 'desc' => 'Pengenalan teknologi informasi, software pendidikan, dan pembekalan Asesmen Nasional.', 'icon' => 'fa-solid fa-computer'],
                ['name' => 'Kepanduan Pramuka SIT & Outbound', 'desc' => 'Membentuk kemandirian, kepemimpinan, kepedulian sesama, dan cinta tanah air.', 'icon' => 'fa-solid fa-campground'],
            ];
            $data['facilities'] = [
                ['name' => '13 Ruang Kelas Nyaman & Multimedia', 'desc' => 'Ruang belajar bersih berpendingin udara, proyektor, dan tata letak ergonomis untuk 13 rombel.', 'icon' => 'fa-solid fa-school'],
                ['name' => 'Laboratorium Komputer Siswa', 'desc' => 'Perangkat PC modern lengkap dengan koneksi internet untuk literasi digital dan ANBK.', 'icon' => 'fa-solid fa-desktop'],
                ['name' => 'Perpustakaan & Pojok Literasi Sekolah', 'desc' => 'Koleksi buku pelajaran, ensiklopedia sains, dan cerita motivasi islami anak.', 'icon' => 'fa-solid fa-book'],
                ['name' => 'Unit Kesehatan Sekolah (UKS)', 'desc' => 'Layanan pertolongan pertama dan pemantauan kesehatan berkala siswa.', 'icon' => 'fa-solid fa-notes-medical'],
                ['name' => 'Lapangan Olahraga & Upacara', 'desc' => 'Lapangan serbaguna untuk futsal, voli, senam ceria, dan latihan kepanduan.', 'icon' => 'fa-solid fa-futbol'],
            ];
            $data['slides'] = [
                [
                    'badge' => 'SDS ISLAM TERPADU MADANI KAYUAGUNG • TERAKREDITASI B',
                    'title' => 'Mencetak Generasi Rabbani Berprestasi & Sholeh',
                    'subtitle' => 'Kurikulum Terpadu JSIT & Kurikulum Merdeka, Target Hafal 2 Juz Mutqin & 30 Hadits Adab.',
                    'image' => '/uploads/campus-sit-madani.webp',
                    'btn_text' => 'Profil SDS IT Madani',
                    'btn_link' => route('unit.page', ['unit' => 'sd', 'slug' => 'tentang-kami']),
                    'btn2_text' => 'Daftar SPMB SD',
                    'btn2_link' => route('unit.ppdb', 'sd'),
                ],
            ];
        } elseif ($key === 'smp') {
            $data['visi'] = 'Terbentuknya Generasi Qur\'ani, Mandiri, Inovatif, Visioner, dan Moderat Berbekal Ilmu Pengetahuan dan Teknologi.';
            $data['misi'] = [
                'Membangun Atmosfer Belajar Yang Islami.',
                'Menjadi Lembaga Pendidikan Islam Yang Mampu Melahirkan Generasi Unggulan Yang memiliki Semangat Pembaharuan dan Memiliki Jiwa Kepemimpinan Serta Wawasan Yang Luas.',
                'Menjadi Lembaga Pendidikan Islam Yang Modern, Inovatif, Visioner dan Terdepan Dalam Penguasaan Bahasa Inggris dan Bahasa Arab, Matematika dan Sains Serta Al-Qur\'an.',
                'Berpartisipasi Aktif dan Bertanggung Jawab dalam Proses Rekonstruksi Perbaikan Masyarakat, Bangsa dan Negara.',
            ];
            $data['tujuan'] = [
                'Terwujudnya penghafal Al-Qur\'an yang mutqin, tartil, dan memahami nilai-nilai kitabullah.',
                'Pencapaian prestasi akademik tinggi dalam olimpiade sains (OSN) dan bidang riset remaja.',
                'Kecakapan berkomunikasi aktif dalam Bahasa Inggris dan Bahasa Arab.',
                'Karakter mandiri, kepemimpinan visioner, dan kesiapan melanjutkan ke jenjang SMA/MA unggulan nasional.',
            ];
            $data['gurus'] = [
                ['name' => 'Ribang Imam Satria, S.Pi., Gr.', 'position' => 'Kepala Sekolah', 'fraction' => 'Pimpinan SMPS IT', 'photo' => '/uploads/dewan/kepala-sekolah.webp', 'education' => 'S1 Sains / Perikanan, Gr (Pendidikan Profesi Guru)', 'order' => 1],
                ['name' => 'Andi Kumaini, M.Pd.', 'position' => 'Ketua Komite Sekolah', 'fraction' => 'Komite Sekolah', 'photo' => '/uploads/dewan/ust-andi.webp', 'education' => 'S2 Manajemen Pendidikan', 'order' => 2],
                ['name' => 'Helen Lestari, S.Pd., Gr.', 'position' => 'Waka Bidang Kurikulum & Guru IPS', 'fraction' => 'Kurikulum & IPS', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Pendidikan IPS, Gr', 'order' => 3],
                ['name' => 'Yushamdalah, S.Pd.', 'position' => 'Waka Kesiswaan & Guru PAI / TTQ', 'fraction' => 'Kesiswaan & PAI', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Pendidikan Agama Islam', 'order' => 4],
                ['name' => 'Rudini, S.Pd., Gr.', 'position' => 'Waka Sarpras & Guru B. Arab', 'fraction' => 'Sarpras & B. Arab', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Pendidikan Bahasa Arab, Gr', 'order' => 5],
                ['name' => 'Reza Silvia, A.Md.P.', 'position' => 'Bendahara SMPS IT', 'fraction' => 'Keuangan', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'Diploma III Administrasi', 'order' => 6],
                ['name' => 'Reny Moulisa Ananda, S.E.', 'position' => 'Tata Usaha & Operator Dapodik', 'fraction' => 'Tata Usaha', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'Sarjana Ekonomi', 'order' => 7],
                ['name' => 'Eri Septiani, S.Ag.', 'position' => 'Guru TTQ & TIK', 'fraction' => 'TTQ & Informatika', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Agama Islam', 'order' => 8],
                ['name' => 'Weni Agustin, S.Pd., Gr.', 'position' => 'Wali Kelas VII & Guru B. Inggris', 'fraction' => 'Wali Kelas & B. Inggris', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Pendidikan Bahasa Inggris, Gr', 'order' => 9],
                ['name' => 'Nur Rahmah, S.Pd., Gr.', 'position' => 'Wali Kelas VIII & Guru IPA / BK', 'fraction' => 'Wali Kelas & IPA', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Pendidikan IPA, Gr', 'order' => 10],
                ['name' => 'Ayu Sukarni, S.Pd., Gr.', 'position' => 'Wali Kelas IX & Guru Matematika', 'fraction' => 'Wali Kelas & MTK', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Pendidikan Matematika, Gr', 'order' => 11],
                ['name' => 'Rizki Jamali, S.Pd.', 'position' => 'Guru PJOK & Pembina Olahraga', 'fraction' => 'Guru Penjas', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Pendidikan Jasmani', 'order' => 12],
                ['name' => 'Ewin Prima Sari, S.Pd.', 'position' => 'Guru Seni Rupa & Prakarya', 'fraction' => 'Guru Seni Budaya', 'photo' => '/uploads/dewan/avatar-default.svg', 'education' => 'S1 Kependidikan', 'order' => 13],
            ];
            $data['programs'] = [
                ['name' => 'Tahfidz Al-Qur\'an Full Day & Talaqqi Bersanad', 'desc' => 'Program hafalan Al-Qur\'an intensif dengan target mutqin dibimbing dewan asatidz bersanad.', 'icon' => 'fa-solid fa-quran'],
                ['name' => 'Talaqqi & Tasmi\' Al-Qur\'an Mutqin', 'desc' => 'Metode talaqqi tartil bertahap hingga wisuda akbar khotmil Qur\'an.', 'icon' => 'fa-solid fa-book-quran'],
                ['name' => 'Bina Pribadi Islami (BPI) & Mentoring', 'desc' => 'Pembinaan adab, kepribadian islam, serta kepekaan sosial dalam kelompok kecil (halaqah).', 'icon' => 'fa-solid fa-user-group'],
                ['name' => 'Laboratorium Komputer & Digital Literacy', 'desc' => 'Pembelajaran coding dasar, aplikasi produktivitas kantor, desain grafis, dan pemanfaatan AI positif.', 'icon' => 'fa-solid fa-laptop-code'],
                ['name' => 'Islamic Student Camp & Leadership Safari', 'desc' => 'Perkemahan kepemimpinan pemuda islam untuk melatih ketangguhan mental dan fisik.', 'icon' => 'fa-solid fa-mountain'],
                ['name' => 'Bilingual Environment (Arabic & English)', 'desc' => 'Hari bahasa terpadu untuk membangun rasa percaya diri berkomunikasi global.', 'icon' => 'fa-solid fa-comments'],
            ];
            $data['facilities'] = [
                ['name' => 'Laboratorium IPA & Riset Terpadu', 'desc' => 'Fasilitas laboratorium sains modern dan alat eksperimen ilmiah untuk praktikum fisika, biologi, dan kimia.', 'icon' => 'fa-solid fa-flask'],
                ['name' => 'Ruang Kelas Multimedia Ber-AC', 'desc' => 'Dilengkapi proyektor LCD dan audio-visual interaktif berkonsep joyful learning.', 'icon' => 'fa-solid fa-chalkboard-user'],
                ['name' => 'Laboratorium Komputer & ANBK', 'desc' => 'Komputer PC modern terhubung jaringan internet stabil untuk riset, literasi digital, dan asesmen nasional.', 'icon' => 'fa-solid fa-desktop'],
                ['name' => 'Perpustakaan & Pojok Diskusi Ilmiah', 'desc' => 'Koleksi buku ensiklopedia, referensi agama, dan literasi modern remaja.', 'icon' => 'fa-solid fa-book-bookmark'],
                ['name' => 'Lapangan Olahraga Multifungsi', 'desc' => 'Sarana futsal, basket, voli, bulutangkis, dan arena latihan kepramukaan.', 'icon' => 'fa-solid fa-basketball'],
                ['name' => 'Kebun Edukatif & Taman Refleksi', 'desc' => 'Sarana proyek lingkungan hidup dan ruang diskusi terbuka siswa di alam asri.', 'icon' => 'fa-solid fa-tree'],
            ];
            $data['slides'] = [
                [
                    'badge' => 'SMPS IT MADANI KAYUAGUNG • TERAKREDITASI B',
                    'title' => 'Membina Generasi Qur\'ani, Cerdas & Berakhlak Mulia',
                    'subtitle' => 'Sekolah Menengah Pertama Islam Terpadu di Kayuagung, Kab. OKI dengan Kurikulum Nasional Terintegrasi JSIT dan Program Full Day School.',
                    'image' => '/uploads/campus-sit-madani.webp',
                    'btn_text' => 'Profil SMPS IT Madani',
                    'btn_link' => route('unit.page', ['unit' => 'smp', 'slug' => 'tentang-kami']),
                    'btn2_text' => 'Daftar SPMB SMP',
                    'btn2_link' => route('unit.ppdb', 'smp'),
                ],
            ];
        } elseif ($key === 'yayasan') {
            $data['visi'] = 'Menjadi Yayasan Pendidikan Islam Terkemuka yang Melahirkan Generasi Rabbani Berkualitas Tinggi, Berakhlak Mulia, dan Unggul Menghadapi Era Global.';
            $data['misi'] = [
                'Menyelenggarakan pendidikan Islam terpadu yang berkualitas dari jenjang PAUD/TK, SD, hingga SMP.',
                'Menyediakan sarana dan prasarana pendidikan yang modern, representatif, islami, dan asri.',
                'Meningkatkan kompetensi, profesionalitas, dan kesejahteraan seluruh tenaga pendidik dan kependidikan.',
                'Membangun sinergi kokoh dengan orang tua, masyarakat, pemerintah, dan Jaringan Sekolah Islam Terpadu (JSIT) Indonesia.',
            ];
            $data['tujuan'] = [
                'Mewujudkan ekosistem pendidikan Islam terintegrasi satu atap di Kabupaten Ogan Komering Ilir.',
                'Melahirkan lulusan berakhlak mulia, hafal Al-Qur\'an, cerdas sains teknologi, dan berwawasan luas.',
            ];
            $data['pengurus'] = [
                ['name' => 'Drs. H. Legianto, M.E.E.', 'position' => 'Ketua Yayasan', 'fraction' => 'Pengurus Harian Yayasan', 'photo' => '/uploads/dewan/ust-legianto.webp', 'desc' => 'Memimpin dan mengayomi arah kebijakan strategis pengembangan seluruh unit pendidikan SIT Madani.'],
                ['name' => 'Yessi, S.H., M.H.', 'position' => 'Sekretaris Yayasan', 'fraction' => 'Pengurus Harian Yayasan', 'photo' => '/uploads/dewan/avatar-default.svg', 'desc' => 'Mengelola tata kelola administrasi legalitas, persuratan, dan regulasi kelembagaan yayasan.'],
                ['name' => 'Nurul Ramadhani, S.H.', 'position' => 'Bendahara Yayasan', 'fraction' => 'Pengurus Harian Yayasan', 'photo' => '/uploads/dewan/avatar-default.svg', 'desc' => 'Mengawasi perbendaharaan, transparansi finansial, dan alokasi anggaran pembangunan yayasan.'],
                ['name' => 'Wahyudi, S.Sos.I.', 'position' => 'Direktur Pendidikan', 'fraction' => 'Direktorat Yayasan', 'photo' => '/uploads/dewan/avatar-default.svg', 'desc' => 'Membawahi dan mengoordinasikan mutu akademik, kurikulum, dan pembinaan guru seluruh unit TK, SD, dan SMP.'],
                ['name' => 'Kosim Abduh, S.Pd.I.', 'position' => 'Direktur Sarana & Prasarana', 'fraction' => 'Direktorat Yayasan', 'photo' => '/uploads/dewan/avatar-default.svg', 'desc' => 'Mengelola aset gedung, fasilitas pembelajaran, pemeliharaan sarana, dan pengembangan fisik kampus terpadu.'],
            ];
            $data['pembina'] = [
                'Ustad H. Husnul Anam, S.H.I.',
                'Dr. H. Abdul Gofar, S.Pd., M.Pd.I.',
                'Ustad Rinto Andrian Usman, S.Pd.I.',
            ];
            $data['pengawas'] = [
                'Ustad Assoc. Prof. Dr. H. Husnul Amin, Lc., M.M., M.H.I.',
                'Hendri Suriyanto, S.Pd., M.Pd.',
            ];
        }

        return $data;
    }
}
