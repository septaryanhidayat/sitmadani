@extends('layouts.frontend')

@php
    $activeKey = in_array($currentUnitKey, ['yayasan', 'tk', 'sd', 'smp']) ? $currentUnitKey : 'yayasan';
    $sejarahMap = [
        'yayasan' => [
            'key' => 'yayasan',
            'title' => 'Sejarah Berdirinya Yayasan Agung Madani Kayuagung',
            'subtitle' => 'Jejak langkah pengabdian para tokoh pendidikan Islam dalam membangun peradaban generasi Qur\'ani di Kabupaten Ogan Komering Ilir.',
            'heading' => 'Merajut Cita-Cita Luhur Menghadirkan Pendidikan Islam Terpadu Satu Atap',
            'image' => '/uploads/campus-sit-madani.webp',
            'badge' => 'YAYASAN AGUNG MADANI',
            'paragraphs' => [
                'Yayasan Agung Madani Kayuagung didirikan atas dasar cita-cita luhur para alim ulama, cendekiawan muslim, dan tokoh masyarakat di Kabupaten Ogan Komering Ilir yang merindukan hadirnya institusi pendidikan Islam terpadu yang memadukan secara harmonis antara kematangan akidah, akhlakul karimah, hafalan Al-Qur\'an, dan keunggulan sains-teknologi modern.',
                'Perjalanan berharga ini dirintis bertahap dengan penuh keikhlasan dan dedikasi. Pada tahun 2013, Yayasan Agung Madani mengawali langkah bersejarah dengan mendirikan SDS Islam Terpadu Madani guna menjawab kebutuhan pendidikan dasar bermutu di Kayuagung.',
                'Melihat tingginya sambutan dan kepercayaan para orang tua, pada tahun 2014 Yayasan mengembangkan layanan pendidikan anak usia dini melalui pendirian TKS Islam Terpadu Madani dengan pendekatan sentra dan deep learning yang menggembirakan.',
                'Seiring bertumbuhnya para lulusan sekolah dasar, pada tahun 2019 Yayasan Agung Madani menyempurnakan jenjang pendidikan lanjutan dengan mendirikan SMPS Islam Terpadu Madani. Sistem Full Day School terpadu diterapkan agar para santri dapat memperdalam hafalan Al-Qur\'an bersanad, menguasai sains, teknologi informasi, serta dwibahasa internasional (Arab dan Inggris).',
                'Kini, seluruh satuan pendidikan berhimpun harmonis dalam kawasan kampus terpadu SIT Madani di Jalan SMA Negeri 4, Kelurahan Tanjung Rancing, Kayuagung. Dengan sarana prasarana modern, akreditasi B BAN-SM dan BAN-PAUD, serta bernaung di bawah Jaringan Sekolah Islam Terpadu (JSIT) Indonesia, Yayasan Agung Madani terus berkomitmen mencetak generasi robbani yang cerdas, mandiri, dan berakhlakul karimah.'
            ],
            'milestones' => [
                ['year' => '2013', 'title' => 'Pendirian SDS IT Madani', 'desc' => 'Dimulainya kelas rintisan sekolah dasar Islam terpadu pertama di bawah naungan Yayasan Agung Madani.'],
                ['year' => '2014', 'title' => 'Pendirian TKS IT Madani', 'desc' => 'Peresmian unit PAUD/TK Islam Terpadu untuk pembinaan karakter anak usia dini berbasis sentra.'],
                ['year' => '2019', 'title' => 'Pendirian SMPS IT Madani', 'desc' => 'Hadirnya jenjang sekolah menengah pertama IT untuk melanjutkan pembinaan generasi Qur\'ani.'],
                ['year' => '2026', 'title' => 'Kampus Terpadu Modern', 'desc' => 'Penyempurnaan fasilitas laboratorium modern, ruang multimedia, dan ekosistem pendidikan satu atap.']
            ]
        ],
        'tk' => [
            'key' => 'tk',
            'title' => 'Sejarah TKS Islam Terpadu Madani Kayuagung',
            'subtitle' => 'Perjalanan menumbuhkan benih cinta Al-Qur\'an dan akhlak mulia sejak usia keemasan di Kabupaten OKI.',
            'heading' => 'Mendidik dengan Cinta, Merawat Masa Depan Ananda Sejak 2014',
            'image' => '/uploads/activities-sit-madani.webp',
            'badge' => 'PAUD / TK ISLAM TERPADU',
            'paragraphs' => [
                'TKS Islam Terpadu Madani Kayuagung resmi didirikan pada tahun 2014 di bawah naungan Yayasan Agung Madani Kayuagung dengan Nomor Pokok Sekolah Nasional (NPSN) 69915461.',
                'Pendirian sekolah ini berakar pada kesadaran mendalam akan pentingnya usia emas (golden age) dalam membentuk pondasi keimanan, kemandirian, dan adab islami anak. Para perintis menyusun konsep pembelajaran sentra yang aktif, kreatif, dan menggembirakan.',
                'Dari kelompok belajar awal yang sederhana, TKS IT Madani terus bertransformasi. Berbagai fasilitas bermain ramah anak indoor dan outdoor, pojok literasi bergambar, sentra ibadah, serta kebun edukatif dibangun guna mendukung stimulasi multi-kecerdasan anak.',
                'Alhamdulillah, TKS IT Madani telah meraih Akreditasi B BAN-PAUD dan menjadi rujukan utama pendidikan anak usia dini di Kota Kayuagung, melahirkan ratusan wisudawan tahfidz cilik yang siap melanjutkan ke jenjang sekolah dasar.'
            ],
            'milestones' => [
                ['year' => '2014', 'title' => 'Izin Operasional & Pendirian', 'desc' => 'Pembukaan perdana kelompok belajar TK A dan TK B di Kayuagung.'],
                ['year' => '2018', 'title' => 'Penerapan Model Sentra Terpadu', 'desc' => 'Implementasi kurikulum sentra bermain peran, ibadah, seni, dan motorik anak.'],
                ['year' => '2022', 'title' => 'Terakreditasi B BAN-PAUD', 'desc' => 'Pengakuan mutu layanan pendidikan usia dini berstandar nasional dan kekhasan JSIT.'],
                ['year' => '2026', 'title' => 'Pendekatan Deep Learning', 'desc' => 'Pembelajaran berkesadaran, bermakna, dan menggembirakan terintegrasi nilai-nilai Qur\'ani.']
            ]
        ],
        'sd' => [
            'key' => 'sd',
            'title' => 'Sejarah SDS Islam Terpadu Madani Kayuagung',
            'subtitle' => 'Pilar utama pendidikan dasar Islam terpadu yang telah meluluskan generasi berprestasi sejak 2013.',
            'heading' => 'Perintis Pendidikan Dasar Islam Terpadu di Bumi Caram Seguguk',
            'image' => '/uploads/campus-sit-madani.webp',
            'badge' => 'SEKOLAH DASAR ISLAM TERPADU',
            'paragraphs' => [
                'SDS Islam Terpadu Madani didirikan pada tahun 2013 (NPSN: 69881529) sebagai satuan pendidikan pertama yang digagas oleh Yayasan Agung Madani Kayuagung.',
                'Kelahiran SDS IT Madani menjawab kerinduan masyarakat Kabupaten Ogan Komering Ilir akan sekolah dasar yang tidak hanya unggul dalam aspek akademik sains dan matematika, namun juga mengakar kuat pada hafalan Al-Qur\'an, sholat berjamaah, dan pembiasaan adab nabawi harian.',
                'Dimulai dengan rombongan belajar pertama yang penuh tantangan dan perjuangan, dedikasi tiada henti dari para dewan guru membuktikan hasil nyata. SDS IT Madani kini telah berkembang pesat menjadi sekolah dasar terfavorit dengan 13 rombongan belajar dan 293 murid aktif.',
                'Didukung 37 tenaga pendidik profesional, fasilitas laboratorium komputer modern berkapasitas ANBK mandiri, perpustakaan representatif, serta kurikulum terpadu JSIT, SDS IT Madani konsisten menorehkan gelar juara OSN tingkat kabupaten hingga provinsi.'
            ],
            'milestones' => [
                ['year' => '2013', 'title' => 'Awal Pendirian Sekolah Dasar', 'desc' => 'Dimulainya KBM SDS IT Madani angkatan perdana di Tanjung Rancing Kayuagung.'],
                ['year' => '2016', 'title' => 'Pembangunan Gedung & Lab Komputer', 'desc' => 'Perluasan ruang kelas belajar dan sarana digital untuk literasi TIK siswa.'],
                ['year' => '2021', 'title' => 'Akreditasi B BAN-SM', 'desc' => 'Penetapan status akreditasi baik dengan predikat unggul di bidang karakter dan keagamaan.'],
                ['year' => '2026', 'title' => '13 Rombel & 293 Siswa Aktif', 'desc' => 'Menjadi SDIT rujukan utama di OKI dengan capaian prestasi olimpiade sains dan tahfidz mutqin.']
            ]
        ],
        'smp' => [
            'key' => 'smp',
            'title' => 'Sejarah SMPS Islam Terpadu Madani Kayuagung',
            'subtitle' => 'Melanjutkan estafet generasi Qur\'ani yang visioner, tangguh berkarakter, dan berdaya saing global sejak 2019.',
            'heading' => 'Melangkah Pasti Menyiapkan Pemimpin Masa Depan Berakhlak Karimah',
            'image' => '/uploads/campus-sit-madani.webp',
            'badge' => 'SEKOLAH MENENGAH PERTAMA IT',
            'paragraphs' => [
                'SMPS Islam Terpadu Madani Kayuagung resmi berdiri pada 04 November 2019 (NPSN: 70034917) sebagai respons strategis Yayasan Agung Madani dalam menyediakan jenjang lanjutan bagi lulusan SDIT dan siswa lulusan SD/MI di Kabupaten Ogan Komering Ilir.',
                'Dengan sistem Full Day School, SMPS IT Madani mengintegrasikan Kurikulum Merdeka Kemendikbudristek dengan Kurikulum Kekhasan Jaringan Sekolah Islam Terpadu (JSIT) Indonesia. Kurikulum ini menitikberatkan pada pembinaan akidah yang salim, ibadah yang shahih, dan akhlak yang matang.',
                'Sejak berdirinya, sekolah terus melengkapi sarana modern: laboratorium IPA sains terpadu, laboratorium komputer multimedia, perpustakaan digital, serta lapangan olahraga multifungsi.',
                'Berbagai prestasi bergengsi telah dipersembahkan oleh para santri, mulai dari Juara 1 Story Telling Bahasa Inggris se-Sumsel, Juara MHQ 5 Juz tingkat kabupaten, hingga Juara KSN Bidang IPA. SMPS IT Madani bertekad terus melahirkan kader pemimpin bangsa yang menguasai imtak dan iptek secara seimbang.'
            ],
            'milestones' => [
                ['year' => '2019', 'title' => 'Surat Keputusan Pendirian', 'desc' => 'Terbitnya SK Pendirian 04 November 2019 untuk membuka jenjang SMP IT di Kayuagung.'],
                ['year' => '2022', 'title' => 'Izin Operasional & Akreditasi BAN-SM', 'desc' => 'Penerbitan izin operasional DPMPTSP dan perolehan Akreditasi B BAN-SM.'],
                ['year' => '2024', 'title' => 'Penguatan Imtak & Iptek Modern', 'desc' => 'Laboratorium IPA terpadu dan pembiasaan dwibahasa (Arab & Inggris).'],
                ['year' => '2026', 'title' => 'Wisuda Akbar & Generasi Huffadz', 'desc' => 'Meluluskan generasi santri penghafal Al-Qur\'an yang siap menuju SMA/MA unggulan nasional.']
            ]
        ],
    ];
    $info = $sejarahMap[$activeKey] ?? $sejarahMap['yayasan'];
@endphp

@section('title', $info['title'] . ' - SIT Madani')
@section('meta_description', $info['subtitle'])

@section('content')
{{-- HERO HEADER --}}
<div class="bg-gradient-to-r from-indigo-950 via-indigo-900 to-blue-950 border-b border-indigo-500/20 text-white py-10 sm:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left reveal-fade-up">
        <nav class="text-xs text-indigo-200 mb-3 flex items-center justify-center sm:justify-start space-x-2 flex-wrap">
            <a href="{{ route('home') }}" class="hover:text-white transition">Beranda</a>
            <span>/</span>
            <span>Profil</span>
            <span>/</span>
            <span class="text-amber-300 font-semibold">Sejarah &amp; Jejak Langkah</span>
        </nav>
        <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">{{ $info['title'] }}</h1>
        <p class="text-xs sm:text-sm text-indigo-100 mt-2 font-light max-w-3xl">
            {{ $info['subtitle'] }}
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-14 space-y-10 sm:space-y-12">

    {{-- UNIT SWITCHER TABS --}}
    <div class="flex flex-wrap items-center justify-center gap-2 bg-white p-2 sm:p-3 rounded-2xl shadow-sm border border-gray-100">
        <a href="{{ route('page.sejarah.yayasan') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'yayasan' ? 'bg-indigo-600 text-white shadow' : 'bg-gray-50 text-gray-700 hover:bg-gray-100' }}">
            <i class="fa-solid fa-landmark text-amber-500 mr-1.5"></i> Yayasan Agung Madani
        </a>
        <a href="{{ route('unit.sejarah', 'tk') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'tk' ? 'bg-amber-500 text-slate-950 font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-amber-50' }}">
            <i class="fa-solid fa-shapes text-amber-500 mr-1.5"></i> TKS IT Madani
        </a>
        <a href="{{ route('unit.sejarah', 'sd') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'sd' ? 'bg-emerald-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-emerald-50' }}">
            <i class="fa-solid fa-book-open-reader text-emerald-500 mr-1.5"></i> SDS IT Madani
        </a>
        <a href="{{ route('unit.sejarah', 'smp') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'smp' ? 'bg-blue-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-blue-50' }}">
            <i class="fa-solid fa-graduation-cap text-blue-500 mr-1.5"></i> SMPS IT Madani
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10">
        
        {{-- KOLOM UTAMA (8/12) --}}
        <div class="lg:col-span-8 space-y-8">
            <article class="bg-white rounded-3xl p-6 sm:p-10 shadow-xl border border-gray-100 reveal-fade-up space-y-6">
                
                {{-- GAMBAR ILUSTRASI SEJARAH RESMI --}}
                <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-100 bg-gray-50 max-h-96">
                    <img src="{{ $info['image'] }}" alt="{{ $info['title'] }}" class="w-full h-full object-cover" onerror="this.onerror=null; this.src='/uploads/campus-sit-madani.webp'">
                </div>

                <div class="border-b border-gray-100 pb-4">
                    <span class="text-xs font-bold text-amber-500 uppercase tracking-wider block">{{ $info['badge'] }}</span>
                    <h2 class="text-xl sm:text-2xl font-black text-gray-900 tracking-tight mt-1">
                        {{ $info['heading'] }}
                    </h2>
                    <div class="w-16 h-1 bg-indigo-600 rounded-full mt-3"></div>
                </div>

                {{-- KONTEN NARASI SEJARAH --}}
                <div class="prose-content text-gray-700 text-xs sm:text-sm sm:text-base leading-relaxed space-y-4 text-justify">
                    @foreach($info['paragraphs'] as $p)
                        <p>{{ $p }}</p>
                    @endforeach
                </div>

                {{-- TIMELINE MILESTONE --}}
                <div class="pt-6 border-t border-gray-100 space-y-4">
                    <h3 class="font-extrabold text-gray-900 text-sm sm:text-base flex items-center">
                        <i class="fa-solid fa-timeline text-indigo-600 mr-2"></i> Tonggak Sejarah &amp; Milestone
                    </h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                        @foreach($info['milestones'] as $m)
                        <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200 flex items-start space-x-3">
                            <span class="bg-indigo-600 text-white font-black text-xs px-2.5 py-1 rounded-lg shrink-0">
                                {{ $m['year'] }}
                            </span>
                            <div>
                                <h4 class="font-black text-xs text-gray-900">{{ $m['title'] }}</h4>
                                <p class="text-[11px] text-gray-600 mt-0.5 leading-snug">{{ $m['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </article>
        </div>

        {{-- SIDEBAR KANAN (4/12) --}}
        <div class="lg:col-span-4 space-y-6 sm:space-y-8">
            
            {{-- WIDGET KABAR & BERITA TERBARU --}}
            <div class="bg-white rounded-3xl p-6 shadow-xl border border-gray-100 reveal-fade-up">
                <div class="flex items-center justify-between pb-3 border-b border-gray-100 mb-4">
                    <h3 class="font-black text-gray-900 text-sm flex items-center">
                        <i class="fa-solid fa-newspaper text-indigo-600 mr-2"></i> Berita Terkini
                    </h3>
                    <a href="{{ route('artikel.index') }}" class="text-[11px] font-bold text-indigo-600 hover:text-amber-500">
                        Lihat Semua &rarr;
                    </a>
                </div>

                <div class="space-y-3.5">
                    @forelse($latestPosts ?? [] as $lp)
                        <a href="{{ route('artikel.show', $lp->slug) }}" class="flex items-center space-x-3 group">
                            <div class="w-14 h-14 rounded-xl overflow-hidden bg-gray-100 flex-shrink-0">
                                <img src="{{ $lp->featured_image_url }}" alt="{{ $lp->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-300" onerror="this.onerror=null; this.src='/uploads/campus-sit-madani.webp'">
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs font-bold text-gray-800 group-hover:text-indigo-600 transition line-clamp-2 leading-snug">
                                    {{ $lp->title }}
                                </h4>
                                <span class="text-[10px] text-gray-400 block mt-0.5">
                                    {{ $lp->published_at ? $lp->published_at->translatedFormat('d M Y') : '' }}
                                </span>
                            </div>
                        </a>
                    @empty
                        <p class="text-xs text-gray-400 text-center py-4">Belum ada berita terbaru.</p>
                    @endforelse
                </div>
            </div>

            {{-- WIDGET AGENDA TERBARU --}}
            <div class="bg-white rounded-3xl p-6 shadow-xl border border-gray-100 reveal-fade-up">
                <div class="flex items-center justify-between pb-4 border-b border-gray-100 mb-5">
                    <h3 class="font-extrabold text-gray-900 text-sm">Agenda Sekolah</h3>
                    <a href="{{ route('agenda.index') }}" class="text-xs font-bold text-indigo-600 hover:text-amber-500">
                        Lihat Semua &rarr;
                    </a>
                </div>

                <div class="space-y-4">
                    @forelse($latestAgendas ?? [] as $la)
                        <a href="{{ route('agenda.show', $la->slug) }}" class="flex items-start space-x-3 group p-2.5 rounded-xl hover:bg-indigo-50/50 transition">
                            <div class="w-11 h-11 rounded-xl bg-indigo-50 text-indigo-600 flex flex-col items-center justify-center flex-shrink-0 font-bold text-xs border border-indigo-100">
                                <span class="text-sm font-extrabold leading-none">{{ $la->event_date ? $la->event_date->format('d') : '01' }}</span>
                                <span class="text-[9px] uppercase">{{ $la->event_date ? $la->event_date->translatedFormat('M') : 'SMP' }}</span>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs font-bold text-gray-800 group-hover:text-indigo-600 transition line-clamp-2 leading-snug">
                                    {{ $la->title }}
                                </h4>
                                <span class="text-[10px] text-gray-400 block mt-1">
                                    <i class="fa-solid fa-location-dot mr-1 text-amber-500"></i> {{ $la->location ?: 'Kampus SIT Madani Kayuagung' }}
                                </span>
                            </div>
                        </a>
                    @empty
                        <p class="text-xs text-gray-400 text-center py-4">Belum ada agenda terdekat.</p>
                    @endforelse
                </div>
            </div>

            {{-- WIDGET PRESTASI SANTRI --}}
            <div class="bg-gradient-to-br from-indigo-900 to-slate-900 text-white rounded-3xl p-6 shadow-xl reveal-fade-up delay-1">
                <span class="text-[10px] uppercase font-bold text-amber-400 tracking-wider block">Prestasi Santri</span>
                <h3 class="text-base font-black text-white mt-1">Generasi Qur'ani Berprestasi</h3>
                <p class="text-xs text-indigo-100 mt-1 leading-relaxed">
                    Siswa SIT Madani aktif menjuarai kompetisi tahfidz, sains, bahasa, dan kepanduan tingkat regional &amp; nasional.
                </p>
                <div class="mt-4 pt-3 border-t border-white/10">
                    <a href="{{ route('prestasi.index') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-amber-300 hover:text-white transition">
                        <span>Lihat Capaian Prestasi</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            {{-- CALL TO ACTION SPMB --}}
            <div class="bg-amber-400 text-slate-950 rounded-3xl p-6 shadow-lg reveal-fade-up delay-2">
                <span class="text-[10px] uppercase font-black bg-slate-950 text-white px-2.5 py-0.5 rounded-full inline-block mb-2">SPMB ONLINE</span>
                <h3 class="text-base font-black leading-tight">Daftarkan Putra-Putri Anda di SIT Madani</h3>
                <p class="text-xs text-slate-900 mt-1.5 leading-relaxed font-medium">
                    Tersedia jenjang TKS IT, SDS IT, dan SMPS IT Madani Kayuagung dengan sistem Full Day School terpadu.
                </p>
                <div class="mt-4">
                    <a href="{{ route('ppdb.index') }}" class="w-full inline-flex items-center justify-center bg-slate-950 hover:bg-slate-900 text-white font-black text-xs py-2.5 px-4 rounded-xl shadow transition">
                        <span>Daftar SPMB Online</span>
                        <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i>
                    </a>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
