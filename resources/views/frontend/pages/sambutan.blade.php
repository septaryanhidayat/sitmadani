@extends('layouts.frontend')

@php
    $unitKey = $currentUnitKey ?? request()->query('unit', 'smp');
    $leaderInfo = [
        'yayasan' => [
            'name' => 'Drs. H. Legianto, M.E.E.',
            'position' => 'Ketua Yayasan Agung Madani Kayuagung',
            'photo' => '/uploads/dewan/ust-legianto.webp',
            'tagline' => 'Menaungi Pendidikan Islam Terpadu Satu Atap (TK • SD • SMP)',
            'salutation' => 'Assalamu\'alaikum Warahmatullahi Wabarakatuh,',
            'content' => 'Alhamdulillahirabbil\'alamin, puji dan syukur kami panjatkan ke hadirat Allah Subhanahu Wa Ta\'ala. Yayasan Agung Madani hadir di Kayuagung dengan komitmen kokoh menyelenggarakan pendidikan Islam terpadu satu atap yang berkesinambungan mulai dari jenjang TKS IT Madani, SDS IT Madani, hingga SMPS IT Madani. Kami memadukan keluhuran nilai Al-Qur\'an dan as-Sunnah dengan keunggulan sains teknologi, bahasa global, dan adab islami untuk melahirkan generasi robbani yang cerdas, mandiri, dan berakhlak mulia.',
        ],
        'tk' => [
            'name' => 'Ayu Rahmayani, S.Pd.Gr. (Bunda Ayu)',
            'position' => 'Kepala Sekolah TKS IT Madani Kayuagung',
            'photo' => '/uploads/dewan/bunda-ayu.webp',
            'tagline' => 'Membentuk Generasi Rabbani yang Kreatif, Cerdas, dan Mandiri',
            'salutation' => 'Assalamu\'alaikum Warahmatullahi Wabarakatuh,',
            'content' => 'Selamat datang di laman resmi TKS IT Madani Kayuagung. Kami mendidik anak-anak usia dini dengan pendekatan Deep Learning yang berkesadaran, bermakna, dan menggembirakan. Melalui sentra bermain peran, ibadah harian, tahfidz cilik Juz 30, serta bimbingan penuh kasih sayang dari para ustadzah, kami memfasilitasi setiap ananda agar tumbuh percaya diri, ceria, dan beradab islami sejak dini.',
        ],
        'sd' => [
            'name' => 'Yudhi Arsyandi, S.Pd., Gr.',
            'position' => 'Kepala Sekolah SDS IT Madani Kayuagung',
            'photo' => '/uploads/dewan/ust-andi.webp',
            'tagline' => 'Membentuk Generasi Rabbani yang Berprestasi, Sholeh, Inovatif dan Mandiri',
            'salutation' => 'Assalamu\'alaikum Warahmatullahi Wabarakatuh,',
            'content' => 'Puji syukur kita panjatkan ke hadirat Allah SWT. Selamat datang di SDS IT Madani Kayuagung. Kami berkomitmen menyelenggarakan pendidikan dasar terpadu yang memadukan Kurikulum Merdeka dengan kurikulum khas JSIT. Dengan target hafalan 2 Juz Al-Qur\'an (Juz 30 & 29) serta 30 hadits adab, pembiasaan sholat berjamaah, dan penguatan literasi sains serta numerasi, kami mendampingi 293 siswa dalam 13 rombel untuk meraih prestasi gemilang.',
        ],
        'smp' => [
            'name' => 'Ribang Imam Satria, S.Pi., Gr.',
            'position' => 'Kepala Sekolah SMPS IT Madani Kayuagung',
            'photo' => '/uploads/dewan/kepala-sekolah.webp',
            'tagline' => 'Terbentuknya Generasi Qur\'ani, Mandiri, Inovatif, Visioner, dan Moderat',
            'salutation' => 'Assalamu\'alaikum Warahmatullahi Wabarakatuh,',
            'content' => 'Selamat datang di portal resmi SMPS IT Madani Kayuagung. Menjawab tantangan global dan era digital, kami menyajikan program Asrama Tahfidz (Boarding School) dan Full Day School yang memadukan hafalan Al-Qur\'an bersanad, pembinaan adab melalui Bina Pribadi Islam (BPI), sains modern, serta dwibahasa (Arab dan Inggris). Setiap siswa dipersiapkan menjadi pemimpin masa depan yang berwawasan luas dan berakhlakul karimah.',
        ],
    ];

    $cur = $leaderInfo[$unitKey] ?? $leaderInfo['smp'];
@endphp

@section('title', 'Sambutan ' . $cur['position'] . ' - SIT Madani')
@section('meta_description', 'Sambutan resmi ' . $cur['position'] . ', ' . $cur['name'] . '.')

@section('content')
{{-- HERO HEADER --}}
<div class="bg-gradient-to-r from-indigo-950 via-indigo-900 to-blue-950 border-b border-indigo-500/20 text-white py-10 sm:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left">
        <nav class="text-xs text-gray-300 mb-3 flex items-center justify-center sm:justify-start space-x-2 flex-wrap">
            <a href="{{ route('home') }}" class="hover:text-white transition">Beranda</a>
            <span>/</span>
            <span>Profil</span>
            <span>/</span>
            <span class="text-amber-400 font-bold">Sambutan Pimpinan</span>
        </nav>
        <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">Sambutan Pimpinan Lembaga &amp; Unit</h1>
        <p class="text-xs sm:text-sm text-gray-200 mt-2 font-light">
            Pesan komitmen, nilai-nilai pendidikan Qur'ani, dan visi mulia dari jajaran pimpinan Yayasan dan Kepala Sekolah SIT Madani.
        </p>
    </div>
</div>

<div class="max-w-5xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-14 space-y-8">
    
    {{-- TABS SWITCHER SAMBUTAN --}}
    <div class="flex flex-wrap items-center justify-center gap-2 bg-white p-2 sm:p-3 rounded-2xl shadow-sm border border-gray-100">
        <a href="{{ route('page.sambutan', ['unit' => 'yayasan']) }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $unitKey === 'yayasan' ? 'bg-indigo-600 text-white shadow' : 'bg-gray-50 text-gray-700 hover:bg-gray-100' }}">
            <i class="fa-solid fa-landmark text-amber-500 mr-1.5"></i> Yayasan Agung Madani
        </a>
        <a href="{{ route('unit.sambutan', 'tk') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $unitKey === 'tk' ? 'bg-amber-500 text-slate-950 font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-amber-50' }}">
            <i class="fa-solid fa-shapes text-amber-500 mr-1.5"></i> TKS IT Madani
        </a>
        <a href="{{ route('unit.sambutan', 'sd') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $unitKey === 'sd' ? 'bg-emerald-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-emerald-50' }}">
            <i class="fa-solid fa-book-open-reader text-emerald-500 mr-1.5"></i> SDS IT Madani
        </a>
        <a href="{{ route('unit.sambutan', 'smp') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $unitKey === 'smp' ? 'bg-blue-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-blue-50' }}">
            <i class="fa-solid fa-graduation-cap text-blue-500 mr-1.5"></i> SMPS IT Madani
        </a>
    </div>

    {{-- KARTU SAMBUTAN UTAMA --}}
    <div class="bg-white rounded-3xl p-5 sm:p-8 md:p-12 shadow-xl border border-gray-100">
        
        {{-- PROFIL PIMPINAN HEADER --}}
        <div class="flex flex-col md:flex-row items-center gap-6 sm:gap-8 mb-8 pb-8 border-b border-gray-100 text-center md:text-left">
            <div class="w-44 h-52 sm:w-52 sm:h-60 rounded-2xl overflow-hidden shadow-lg border-4 border-white ring-4 ring-indigo-100 flex-shrink-0 bg-indigo-50 mx-auto md:mx-0">
                <img src="{{ $cur['photo'] }}" alt="{{ $cur['name'] }} - {{ $cur['position'] }}" class="w-full h-full object-cover object-top" onerror="this.src='/uploads/logo-madani-square.webp'">
            </div>
            <div class="space-y-2 text-center md:text-left">
                <span class="inline-block bg-indigo-100 text-indigo-800 text-xs font-bold px-3.5 py-1.5 rounded-full uppercase tracking-wider">
                    {{ $cur['position'] }}
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">
                    {{ $cur['name'] }}
                </h2>
                <p class="text-xs sm:text-sm text-indigo-600 font-semibold">Pendidik Berpengalaman &amp; Praktisi Pendidikan Karakter Islami</p>
                <p class="text-xs sm:text-sm text-gray-600 italic pt-1">"{{ $cur['tagline'] }}"</p>
            </div>
        </div>

        {{-- KONTEN PIDATO --}}
        <div class="prose-content text-gray-800 text-xs sm:text-sm md:text-base leading-relaxed space-y-5 text-left sm:text-justify max-w-4xl mx-auto">
            <p class="font-semibold text-gray-900 text-sm sm:text-lg">{{ $cur['salutation'] }}</p>

            <p>{{ $cur['content'] }}</p>

            <p>
                Dunia pendidikan saat ini menghadapi dinamika global yang sangat dinamis. Melalui perpaduan Kurikulum Nasional, Standar Mutu JSIT Indonesia, pembiasaan ibadah yaumiyah, dan suasana sekolah yang ramah anak, kami yakin putra-putri kita akan tumbuh menjadi generasi sholeh, mandiri, dan berdaya saing tinggi.
            </p>

            <p>
                Terima kasih yang mendalam kami haturkan kepada ayah dan bunda atas amanah dan kepercayaan menyekolahkan ananda di lingkungan Sekolah Islam Terpadu Madani Kayuagung. Semoga ikhtiar bersama ini senantiasa diridhai Allah Subhanahu Wa Ta'ala.
            </p>

            <p class="font-semibold text-gray-900 pt-2">Wassalamu'alaikum Warahmatullahi Wabarakatuh.</p>

            <div class="pt-6 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
                <div>
                    <h3 class="font-bold text-gray-900 text-sm sm:text-base">{{ strtoupper($cur['name']) }}</h3>
                    <p class="text-xs text-gray-500">{{ $cur['position'] }}</p>
                </div>
                <div class="inline-flex items-center space-x-2 bg-emerald-50 px-4 py-2 rounded-xl text-xs text-emerald-700 border border-emerald-200">
                    <i class="fa-solid fa-certificate text-emerald-600"></i>
                    <span>Terakreditasi B &bull; JSIT Indonesia</span>
                </div>
            </div>
        </div>

        {{-- CTA DAFTAR SPMB --}}
        <div class="mt-10 pt-8 border-t border-gray-100 bg-gradient-to-r from-indigo-950 via-indigo-900 to-blue-900 rounded-2xl p-5 sm:p-8 text-white flex flex-col sm:flex-row items-center justify-between gap-6 shadow-xl border border-indigo-500/30 text-center sm:text-left">
            <div>
                <h4 class="text-lg sm:text-xl font-extrabold text-white">Pendaftaran Siswa Baru (SPMB Online)</h4>
                <p class="text-xs sm:text-sm text-indigo-200 mt-1">Mari bergabung bersama keluarga besar SIT Madani Kayuagung (TK, SD, SMP). Kuota terbatas telah dibuka.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto flex-shrink-0">
                <a href="{{ route('ppdb.index') }}" class="w-full sm:w-auto justify-center text-center bg-gradient-to-r from-amber-400 via-amber-500 to-amber-600 hover:from-amber-500 hover:to-amber-700 text-slate-950 px-6 py-2.5 rounded-xl font-black text-xs shadow-lg transition flex items-center transform hover:scale-105">
                    <i class="fa-solid fa-graduation-cap mr-1.5"></i> Daftar SPMB Online
                </a>
                <a href="{{ route('hubungi') }}" class="w-full sm:w-auto justify-center text-center bg-white/10 hover:bg-white/20 text-white border border-white/20 px-5 py-2.5 rounded-xl font-bold text-xs shadow transition flex items-center">
                    <i class="fa-solid fa-phone mr-1.5 text-amber-400"></i> Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
