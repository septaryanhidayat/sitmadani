@extends('layouts.frontend')

@php
    $activeKey = in_array($currentUnitKey, ['yayasan', 'tk', 'sd', 'smp']) ? $currentUnitKey : 'yayasan';
    $profileMap = [
        'yayasan' => [
            'key' => 'yayasan',
            'title' => 'Profil Yayasan Agung Madani Kayuagung',
            'sub' => 'Lembaga Penyelenggara Pendidikan Islam Terpadu Satu Atap (TKS IT • SDS IT • SMPS IT)',
            'leader_title' => 'Ketua Yayasan',
            'leader_name' => 'Drs. H. Legianto, M.E.E.',
            'leader_photo' => '/uploads/dewan/ust-legianto.webp',
            'heading_sambutan' => 'Mewujudkan Ekosistem Pendidikan Islam Terpadu Satu Atap di Kabupaten OKI',
            'text_sambutan' => "Assalamu'alaikum Warahmatullahi Wabarakatuh. Yayasan Agung Madani Kayuagung hadir dengan komitmen kokoh menyelenggarakan pendidikan Islam terpadu satu atap yang berkesinambungan mulai dari jenjang TKS IT Madani, SDS IT Madani, hingga SMPS IT Madani. Kami memadukan keluhuran nilai Al-Qur'an dan as-Sunnah dengan keunggulan sains teknologi, bahasa global, dan adab islami untuk melahirkan generasi robbani yang cerdas, mandiri, dan berakhlak mulia.",
            'sambutan_url' => route('page.sambutan.yayasan'),
            'sejarah_title' => 'Sejarah Berdirinya Yayasan Agung Madani Kayuagung',
            'sejarah_sub' => 'Membangun Peradaban Pendidikan Islam di Kabupaten OKI',
            'sejarah_text1' => 'Yayasan Agung Madani didirikan di Kayuagung atas inisiatif para alim ulama dan tokoh pendidikan Islam di Kabupaten Ogan Komering Ilir yang mendambakan hadirnya institusi pendidikan Islam terpadu yang bermutu tinggi, berwawasan global, namun tetap berakar kuat pada nilai-nilai tradisi keislaman.',
            'sejarah_text2' => 'Secara bertahap, Yayasan Agung Madani merintis satuan pendidikan terpadu: diawali dengan SDS IT Madani pada tahun 2013, disusul TKS IT Madani pada tahun 2014, dan SMPS IT Madani pada tahun 2019. Kini, dalam naungan kampus terpadu SIT Madani di Kayuagung, seluruh unit bersinergi mewujudkan pendidikan Islam modern, berkarakter robbani, dan berprestasi unggul.',
            'sejarah_url' => route('page.sejarah.yayasan'),
            'campus_photo' => '/uploads/campus-sit-madani.webp',
            'badge' => 'YAYASAN AGUNG MADANI',
            'fasilitas_url' => route('bidang.index'),
            'dewan_url' => route('page.struktur.yayasan'),
            'visi' => 'Menjadi Yayasan Pendidikan Islam Terkemuka yang Melahirkan Generasi Rabbani Berkualitas Tinggi, Berakhlak Mulia, dan Unggul Menghadapi Era Global.',
            'misi' => [
                'Menyelenggarakan pendidikan Islam terpadu yang berkualitas dari jenjang PAUD/TK, SD, hingga SMP.',
                'Menyediakan sarana dan prasarana pendidikan yang modern, representatif, islami, dan asri.',
                'Meningkatkan kompetensi, profesionalitas, dan kesejahteraan seluruh tenaga pendidik dan kependidikan.',
                'Membangun sinergi kokoh dengan orang tua, masyarakat, pemerintah, dan Jaringan Sekolah Islam Terpadu (JSIT) Indonesia.',
            ],
        ],
        'tk' => [
            'key' => 'tk',
            'title' => 'Profil TKS Islam Terpadu Madani Kayuagung',
            'sub' => 'PAUD / TK Islam Terpadu (NPSN: 69915461 • Terakreditasi B BAN-PAUD)',
            'leader_title' => 'Kepala Sekolah',
            'leader_name' => 'Ayu Rahmayani, S.Pd.Gr. (Bunda Ayu)',
            'leader_photo' => '/uploads/dewan/bunda-ayu.webp',
            'heading_sambutan' => 'Mendidik dengan Sepenuh Kasih Membentuk Generasi Kreatif & Mandiri',
            'text_sambutan' => "Assalamu'alaikum Warahmatullahi Wabarakatuh. Selamat datang di TKS IT Madani Kayuagung. Kami mendidik ananda usia emas (golden age) dengan pendekatan sentra dan Deep Learning yang berkesadaran, bermakna, dan menggembirakan. Melalui sentra bermain peran, ibadah harian, tahfidz cilik Juz 30, serta bimbingan penuh kasih sayang dari para bunda ustadzah, kami memfasilitasi setiap ananda agar tumbuh percaya diri, ceria, dan beradab islami sejak dini.",
            'sambutan_url' => route('unit.sambutan', 'tk'),
            'sejarah_title' => 'Sejarah Berdirinya TKS Islam Terpadu Madani',
            'sejarah_sub' => 'Merintis Pendidikan Anak Usia Dini Berkarakter Islami Sejak 2014',
            'sejarah_text1' => 'TKS IT Madani didirikan pada tahun 2014 di bawah naungan Yayasan Agung Madani Kayuagung (NPSN: 69915461). Berdiri di atas komitmen menghadirkan wadah PAUD/TK berkualitas tinggi yang berlandaskan nilai-nilai keislaman dan pembiasaan adab nabawi sejak usia keemasan.',
            'sejarah_text2' => 'Dengan kurikulum sentra dan pendekatan joyful learning, TKS IT Madani telah terakreditasi B BAN-PAUD dan menjadi pilihan utama orang tua di Kayuagung dalam meletakkan fondasi akhlak, kemandirian, dan kecintaan pada Al-Qur\'an bagi buah hati tercinta.',
            'sejarah_url' => route('unit.sejarah', 'tk'),
            'campus_photo' => '/uploads/activities-sit-madani.webp',
            'badge' => 'PAUD / TK ISLAM TERPADU',
            'fasilitas_url' => route('unit.fasilitas', 'tk'),
            'dewan_url' => route('unit.dewan', 'tk'),
            'visi' => 'Membentuk Generasi Rabbani yang Kreatif, Cerdas, dan Mandiri.',
            'misi' => [
                'Membiasakan ibadah harian: Sholat Dhuha, Doa harian, Muroja\'ah hafalan surat pendek, hadits, dan infaq Jumat.',
                'Membentuk karakter yang berakhlak karimah melalui kegiatan Jumat Sejahtera, ZISWAF, dan kepedulian sosial.',
                'Mengembangkan daya imajinasi melalui bermain peran, sentra seni, kreativitas, dan eksplorasi lingkungan.',
                'Menumbuhkan rasa percaya diri, kemandirian, dan kebiasaan hidup bersih sehat dan gembira.',
            ],
        ],
        'sd' => [
            'key' => 'sd',
            'title' => 'Profil SDS Islam Terpadu Madani Kayuagung',
            'sub' => 'Sekolah Dasar Islam Terpadu (NPSN: 69881529 • 13 Rombel • 293 Siswa)',
            'leader_title' => 'Kepala Sekolah',
            'leader_name' => 'Yudhi Arsyandi, S.Pd., Gr.',
            'leader_photo' => '/uploads/dewan/ust-andi.webp',
            'heading_sambutan' => 'Membentuk Generasi Rabbani Berprestasi, Sholeh, Inovatif dan Mandiri',
            'text_sambutan' => "Assalamu'alaikum Warahmatullahi Wabarakatuh. Selamat datang di SDS IT Madani Kayuagung. Kami memadukan Kurikulum Merdeka dengan kurikulum kekhasan JSIT untuk menumbuhkan kecintaan pada Al-Qur'an dengan target mutqin 2 juz, penguasaan 30 hadits adab, pembekalan sains dan komputer sejak dini, serta pembiasaan sholat berjamaah yang membekas sepanjang hayat.",
            'sambutan_url' => route('unit.sambutan', 'sd'),
            'sejarah_title' => 'Sejarah Berdirinya SDS Islam Terpadu Madani',
            'sejarah_sub' => 'Pilar Pertama Satuan Pendidikan SIT Madani Sejak 2013',
            'sejarah_text1' => 'SDS IT Madani didirikan pada tahun 2013 (NPSN: 69881529) sebagai unit sekolah pertama di bawah Yayasan Agung Madani Kayuagung. Bermula dari kelas rintisan yang didorong oleh antusiasme masyarakat akan pendidikan dasar bernuansa islami.',
            'sejarah_text2' => 'Kini SDS IT Madani telah berkembang pesat menjadi sekolah dasar unggulan di Kabupaten OKI dengan 13 rombongan belajar, 293 murid aktif, dan 37 tenaga pendidik profesional terakreditasi B BAN-SM, mencatatkan berbagai prestasi di olimpiade sains, tahfidz Qur\'an, dan kepanduan.',
            'sejarah_url' => route('unit.sejarah', 'sd'),
            'campus_photo' => '/uploads/campus-sit-madani.webp',
            'badge' => 'SEKOLAH DASAR ISLAM TERPADU',
            'fasilitas_url' => route('unit.fasilitas', 'sd'),
            'dewan_url' => route('unit.dewan', 'sd'),
            'visi' => 'Membentuk Generasi Rabbani yang Berprestasi, Sholeh, Inovatif dan Mandiri.',
            'misi' => [
                'Membangun atmosfer belajar yang islami dan menyenangkan bagi seluruh siswa.',
                'Menumbuhkan hafalan Al-Qur\'an minimal 2 juz mutqin bersanad dan 30 hadits adab.',
                'Membangun kepercayaan diri, kreativitas, dan daya nalar ilmiah siswa.',
                'Mengembangkan budaya belajar untuk belajar dan menguasai dasar-dasar TIK modern.',
            ],
        ],
        'smp' => [
            'key' => 'smp',
            'title' => 'Profil SMPS Islam Terpadu Madani Kayuagung',
            'sub' => 'Sekolah Menengah Pertama Islam Terpadu (NPSN: 70034917 • Full Day School)',
            'leader_title' => 'Kepala Sekolah',
            'leader_name' => 'Ribang Imam Satria, S.Pi., Gr.',
            'leader_photo' => '/uploads/dewan/kepala-sekolah.webp',
            'heading_sambutan' => 'Mendidik Generasi Qur\'ani yang Cerdas, Mandiri, Inovatif & Visioner',
            'text_sambutan' => "Assalamu'alaikum Warahmatullahi Wabarakatuh. Selamat datang di portal resmi SMPS IT Madani Kayuagung. Menjawab tantangan global dan era digital, kami menyajikan pendidikan menengah pertama Full Day School yang memadukan hafalan Al-Qur'an bersanad, pembinaan adab melalui Bina Pribadi Islam (BPI), sains teknologi modern, serta dwibahasa (Arab dan Inggris). Setiap siswa dipersiapkan menjadi pemimpin masa depan yang berwawasan luas dan berakhlakul karimah.",
            'sambutan_url' => route('unit.sambutan', 'smp'),
            'sejarah_title' => 'Sejarah Berdirinya SMPS Islam Terpadu Madani',
            'sejarah_sub' => 'Melanjutkan Estafet Pendidikan Islam Terpadu Berkualitas Sejak 2019',
            'sejarah_text1' => 'SMPS IT Madani didirikan pada tahun 2019 (NPSN: 70034917) guna menjawab kebutuhan alumni SDIT dan masyarakat Kabupaten Ogan Komering Ilir akan kelanjutan jenjang sekolah menengah pertama Islam terpadu yang bermutu tinggi.',
            'sejarah_text2' => 'Menerapkan Kurikulum Merdeka terintegrasi JSIT dengan program Full Day School, SMPS IT Madani berfokus pada kematangan spiritual, laboratorium sains modern, literasi digital, dan pembinaan karakter remaja Qur\'ani.',
            'sejarah_url' => route('unit.sejarah', 'smp'),
            'campus_photo' => '/uploads/campus-sit-madani.webp',
            'badge' => 'SEKOLAH MENENGAH PERTAMA IT',
            'fasilitas_url' => route('unit.fasilitas', 'smp'),
            'dewan_url' => route('unit.dewan', 'smp'),
            'visi' => 'Terbentuknya Generasi Qur\'ani, Mandiri, Inovatif, Visioner, dan Moderat Berbekal Ilmu Pengetahuan dan Teknologi.',
            'misi' => [
                'Membangun atmosfer belajar yang islami, ilmiah, dan berdaya saing global.',
                'Melahirkan penghafal Al-Qur\'an yang mutqin, tartil, dan memahami maknanya.',
                'Terdepan dalam penguasaan Bahasa Arab, Bahasa Inggris, Matematika, dan Sains.',
                'Membina kepemimpinan pemuda islam yang tangguh, amanah, dan moderat.',
            ],
        ],
    ];
    $info = $profileMap[$activeKey] ?? $profileMap['yayasan'];
@endphp

@section('title', $info['title'] . ' - SIT Madani')
@section('meta_description', $info['sub'])

@section('content')
{{-- HERO HEADER & BREADCRUMB --}}
<div class="bg-gradient-to-r from-indigo-950 via-indigo-900 to-blue-950 border-b border-indigo-500/20 text-white py-10 sm:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left reveal-fade-up">
        <nav class="text-xs text-indigo-200 mb-3 flex items-center justify-center sm:justify-start space-x-2 flex-wrap">
            <a href="{{ route('home') }}" class="hover:text-white transition">Beranda</a>
            <span>/</span>
            <span>Profil</span>
            <span>/</span>
            <span class="text-amber-300 font-semibold">{{ $info['leader_title'] }} &amp; Profil</span>
        </nav>
        <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">{{ $info['title'] }}</h1>
        <p class="text-xs sm:text-sm text-indigo-100 mt-2 font-light">
            {{ $info['sub'] }}
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-14 space-y-10 sm:space-y-14">

    {{-- UNIT SWITCHER TABS --}}
    <div class="flex flex-wrap items-center justify-center gap-2 bg-white p-2 sm:p-3 rounded-2xl shadow-sm border border-gray-100">
        <a href="{{ route('page.tentang.yayasan') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'yayasan' ? 'bg-indigo-600 text-white shadow' : 'bg-gray-50 text-gray-700 hover:bg-gray-100' }}">
            <i class="fa-solid fa-landmark text-amber-500 mr-1.5"></i> Yayasan Agung Madani
        </a>
        <a href="{{ route('unit.tentang-kami', 'tk') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'tk' ? 'bg-amber-500 text-slate-950 font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-amber-50' }}">
            <i class="fa-solid fa-shapes text-amber-500 mr-1.5"></i> TKS IT Madani
        </a>
        <a href="{{ route('unit.tentang-kami', 'sd') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'sd' ? 'bg-emerald-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-emerald-50' }}">
            <i class="fa-solid fa-book-open-reader text-emerald-500 mr-1.5"></i> SDS IT Madani
        </a>
        <a href="{{ route('unit.tentang-kami', 'smp') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'smp' ? 'bg-blue-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-blue-50' }}">
            <i class="fa-solid fa-graduation-cap text-blue-500 mr-1.5"></i> SMPS IT Madani
        </a>
    </div>

    {{-- SEKSI UTAMA: PROFIL SEKOLAH / YAYASAN DARI DASHBOARD ADMIN JIKA ADA --}}
    @if(!empty($page?->content) && strlen(trim(strip_tags($page?->content ?? ''))) > 20 && !str_contains($page?->title, 'SMPS IT Madani Kayuagung'))
    <section class="bg-white rounded-3xl p-5 sm:p-8 md:p-12 shadow-xl border border-gray-100 reveal-fade-up">
        <div class="border-b border-gray-100 pb-5 mb-8">
            <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider block">Identitas &amp; Profil Resmi</span>
            <h2 class="text-xl sm:text-3xl font-extrabold text-gray-900 tracking-tight mt-1">
                {{ $page?->title ?? $info['title'] }}
            </h2>
            <div class="w-16 h-1 bg-emerald-600 rounded-full mt-3"></div>
        </div>

        <div class="prose-content text-gray-700 text-sm sm:text-base leading-relaxed space-y-6">
            {!! $page?->content !!}
        </div>
    </section>
    @endif

    {{-- SEKSI 1: SAMBUTAN PIMPINAN --}}
    <section class="bg-white rounded-3xl p-5 sm:p-8 md:p-12 shadow-xl border border-gray-100 reveal-fade-up">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-10 items-center">
            <div class="lg:col-span-4 flex justify-center">
                <div class="w-48 h-64 sm:w-60 sm:h-76 rounded-2xl overflow-hidden shadow-xl border-4 border-white ring-4 ring-indigo-100 bg-indigo-50 relative group">
                    <img src="{{ $info['leader_photo'] }}" alt="{{ $info['leader_name'] }} - {{ $info['leader_title'] }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition duration-500" onerror="this.onerror=null; this.src='/uploads/dewan/avatar-default.svg'">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute bottom-3 left-3 right-3 text-white text-center sm:text-left">
                        <span class="block text-xs sm:text-sm font-extrabold">{{ $info['leader_name'] }}</span>
                        <span class="block text-[11px] text-amber-300">{{ $info['leader_title'] }}</span>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-8 space-y-4 text-center lg:text-left">
                <div class="inline-flex items-center space-x-2 bg-indigo-100 text-indigo-800 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                    <i class="fa-solid fa-user-tie text-indigo-600"></i>
                    <span>Sambutan {{ $info['leader_title'] }}</span>
                </div>
                <h2 class="text-xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">
                    {{ $info['heading_sambutan'] }}
                </h2>
                <div class="w-16 h-1 bg-indigo-600 rounded-full mx-auto lg:mx-0"></div>
                <p class="text-gray-600 text-xs sm:text-base leading-relaxed text-left sm:text-justify">
                    {{ $info['text_sambutan'] }}
                </p>
                <div class="pt-4 flex justify-center lg:justify-start">
                    <a href="{{ $info['sambutan_url'] }}" class="w-full sm:w-auto inline-flex items-center justify-center bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl text-xs font-bold shadow-md hover:shadow-lg transition">
                        <span>Baca Sambutan Lengkap</span>
                        <i class="fa-solid fa-arrow-right ml-2 text-[11px]"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- SEKSI 2: SEJARAH & JEJAK LANGKAH --}}
    <section class="bg-white rounded-3xl p-5 sm:p-8 md:p-12 shadow-xl border border-gray-100 reveal-fade-up">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-10 items-center">
            <div class="lg:col-span-7 space-y-4 order-2 lg:order-1 text-center lg:text-left">
                <div class="inline-flex items-center space-x-2 bg-amber-100 text-amber-900 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                    <i class="fa-solid fa-landmark"></i>
                    <span>Jejak Langkah &amp; Sejarah</span>
                </div>
                <h2 class="text-xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">
                    {{ $info['sejarah_title'] }}
                </h2>
                <span class="block text-xs sm:text-sm font-semibold text-emerald-600">{{ $info['sejarah_sub'] }}</span>
                <div class="w-16 h-1 bg-emerald-600 rounded-full mx-auto lg:mx-0"></div>
                <p class="text-gray-600 text-xs sm:text-base leading-relaxed text-left sm:text-justify">
                    {{ $info['sejarah_text1'] }}
                </p>
                <p class="text-gray-600 text-xs sm:text-base leading-relaxed text-left sm:text-justify">
                    {{ $info['sejarah_text2'] }}
                </p>
                <div class="pt-4 flex justify-center lg:justify-start">
                    <a href="{{ $info['sejarah_url'] }}" class="w-full sm:w-auto inline-flex items-center justify-center bg-gray-900 hover:bg-black text-white px-6 py-3 rounded-xl text-xs font-bold shadow-md hover:shadow-lg transition">
                        <span>Baca Sejarah Lengkap</span>
                        <i class="fa-solid fa-arrow-right ml-2 text-[11px]"></i>
                    </a>
                </div>
            </div>
            <div class="lg:col-span-5 order-1 lg:order-2 flex justify-center">
                <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-100 max-h-80 bg-gray-50 w-full">
                    <img src="{{ $info['campus_photo'] }}" alt="{{ $info['title'] }}" class="w-full h-full object-cover object-center" onerror="this.onerror=null; this.src='/uploads/campus-sit-madani.webp'">
                </div>
            </div>
        </div>
    </section>

    {{-- SEKSI 3: QUICK CARDS FASILITAS, AGENDA & DEWAN GURU --}}
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
        {{-- Card 1: Fasilitas --}}
        <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-md border border-gray-100 hover:shadow-xl transition transform hover:-translate-y-1 flex flex-col justify-between space-y-6 reveal-fade-up">
            <div class="space-y-4">
                <div class="w-14 h-14 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-2xl shadow-inner">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider block">Sarana &amp; Prasarana</span>
                <h3 class="text-lg sm:text-xl font-extrabold text-gray-900">Fasilitas Belajar Modern</h3>
                <p class="text-xs text-gray-500 leading-relaxed">
                    Ruang kelas representatif ber-AC, laboratorium komputer multimedia, laboratorium IPA, perpustakaan terpadu, sarana olahraga, dan masjid kampus.
                </p>
            </div>
            <div class="pt-4 border-t border-gray-100">
                <a href="{{ $info['fasilitas_url'] }}" class="inline-flex items-center text-xs font-bold text-indigo-600 hover:text-emerald-600">
                    <span>Lihat Fasilitas Lengkap</span>
                    <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i>
                </a>
            </div>
        </div>

        {{-- Card 2: Agenda --}}
        <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-md border border-gray-100 hover:shadow-xl transition transform hover:-translate-y-1 flex flex-col justify-between space-y-6 reveal-fade-up delay-1">
            <div class="space-y-4">
                <div class="w-14 h-14 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center text-2xl shadow-inner">
                    <i class="fa-solid fa-calendar-days"></i>
                </div>
                <span class="text-xs font-bold text-amber-600 uppercase tracking-wider block">Kalender Pendidikan</span>
                <h3 class="text-lg sm:text-xl font-extrabold text-gray-900">Agenda &amp; Kegiatan</h3>
                <p class="text-xs text-gray-500 leading-relaxed">
                    Jadwal SPMB, wisuda akbar khotmil Qur'an, kemah kepanduan Pramuka SIT, olimpiade sains, dan kegiatan belajar mengajar aktif.
                </p>
            </div>
            <div class="pt-4 border-t border-gray-100">
                <a href="{{ route('agenda.index') }}" class="inline-flex items-center text-xs font-bold text-amber-600 hover:text-amber-800">
                    <span>Lihat Agenda Sekolah</span>
                    <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i>
                </a>
            </div>
        </div>

        {{-- Card 3: Dewan Guru / Tata Kelola --}}
        <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-md border border-gray-100 hover:shadow-xl transition transform hover:-translate-y-1 flex flex-col justify-between space-y-6 reveal-fade-up delay-2">
            <div class="space-y-4">
                <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-emerald-700 flex items-center justify-center text-2xl shadow-inner">
                    <i class="fa-solid fa-chalkboard-user"></i>
                </div>
                <span class="text-xs font-bold text-emerald-700 uppercase tracking-wider block">Tenaga Pendidik &amp; GTK</span>
                <h3 class="text-lg sm:text-xl font-extrabold text-gray-900">{{ $activeKey === 'yayasan' ? 'Struktur Kepengurusan' : 'Dewan Guru & GTK' }}</h3>
                <p class="text-xs text-gray-500 leading-relaxed">
                    Para asatidz dan pendidik profesional berkualifikasi sarjana & magister yang berdedikasi membimbing kecerdasan dan akhlak santri.
                </p>
            </div>
            <div class="pt-4 border-t border-gray-100">
                <a href="{{ $info['dewan_url'] }}" class="inline-flex items-center text-xs font-bold text-emerald-700 hover:text-indigo-800">
                    <span>Lihat Struktur &amp; Guru</span>
                    <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- SEKSI 4: VISI DAN MISI --}}
    <section class="bg-white rounded-3xl p-6 sm:p-10 md:p-12 shadow-xl border border-gray-100 reveal-fade-up space-y-8">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider block">Pedoman Pendidikan &amp; Haluan Mulia</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight mt-1">
                Visi dan Misi {{ $info['title'] }}
            </h2>
            <div class="w-16 h-1 bg-emerald-600 mx-auto rounded-full mt-3"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
            {{-- Card Visi --}}
            <div class="bg-gradient-to-br from-indigo-50/70 to-blue-50/70 p-6 sm:p-8 rounded-3xl border border-indigo-100 flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-xl bg-indigo-600 text-white flex items-center justify-center font-bold text-base shadow">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <h3 class="text-xl font-extrabold text-gray-900">Visi Utama</h3>
                    </div>
                    <blockquote class="text-sm sm:text-base text-gray-800 italic leading-relaxed border-l-4 border-indigo-600 pl-4 font-serif">
                        "{{ $info['visi'] }}"
                    </blockquote>
                </div>
                <div class="pt-2">
                    <a href="{{ $activeKey === 'yayasan' ? route('page.visi-misi.yayasan') : route('unit.visi-misi', $activeKey) }}" class="inline-flex items-center text-xs font-bold text-indigo-600 hover:underline">
                        <span>Rincian Visi &amp; Misi</span>
                        <i class="fa-solid fa-arrow-right ml-1.5 text-[10px]"></i>
                    </a>
                </div>
            </div>

            {{-- Card Misi --}}
            <div class="bg-gradient-to-br from-gray-50 to-gray-100 p-6 sm:p-8 rounded-3xl border border-gray-200 flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-xl bg-gray-900 text-white flex items-center justify-center font-bold text-base shadow">
                            <i class="fa-solid fa-list-check"></i>
                        </div>
                        <h3 class="text-xl font-extrabold text-gray-900">Misi Lembaga</h3>
                    </div>
                    <ol class="text-xs sm:text-sm text-gray-700 space-y-2 list-decimal list-inside leading-relaxed">
                        @foreach($info['misi'] as $m)
                            <li>{{ $m }}</li>
                        @endforeach
                    </ol>
                </div>
                <div class="pt-2">
                    <a href="{{ $activeKey === 'yayasan' ? route('page.visi-misi.yayasan') : route('unit.visi-misi', $activeKey) }}" class="inline-flex items-center text-xs font-bold text-gray-900 hover:text-indigo-600 transition">
                        <span>Pelajari Selengkapnya</span>
                        <i class="fa-solid fa-arrow-right ml-1.5 text-[10px]"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- SEKSI 5: TESTIMONIAL ALUMNI & WALI MURID --}}
    @if(isset($testimonials) && $testimonials->isNotEmpty())
    <section class="space-y-8 reveal-fade-up">
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider block">Aspirasi &amp; Testimoni</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight mt-1">
                Komentar Alumni &amp; Orang Tua
            </h2>
            <p class="text-xs sm:text-sm text-gray-500 font-semibold mt-1">Pengalaman berharga belajar dan bertumbuh di lingkungan SIT Madani Kayuagung</p>
            <div class="w-16 h-1 bg-emerald-600 mx-auto rounded-full mt-3"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($testimonials->take(3) as $testi)
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex flex-col justify-between space-y-4 hover:shadow-lg transition">
                    <div class="space-y-2">
                        <i class="fa-solid fa-quote-left text-2xl text-indigo-200"></i>
                        <p class="text-xs sm:text-sm text-gray-700 italic leading-relaxed">
                            "{!! strip_tags($testi->content) !!}"
                        </p>
                    </div>
                    <div class="flex items-center space-x-3 pt-3 border-t border-gray-100">
                        <div class="w-10 h-10 rounded-full overflow-hidden bg-indigo-50 border border-indigo-100 flex-shrink-0">
                            <img src="{{ $testi->photo ?? '/uploads/dewan/avatar-default.svg' }}" alt="{{ $testi->name }}" class="w-full h-full object-cover" onerror="this.onerror=null; this.src='/uploads/dewan/avatar-default.svg'">
                        </div>
                        <div>
                            <h4 class="text-xs sm:text-sm font-extrabold text-gray-900 leading-tight">{{ $testi->name }}</h4>
                            <span class="text-[11px] text-indigo-600 font-semibold">{{ $testi->profession }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    @endif

</div>
@endsection
