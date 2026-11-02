@extends('layouts.frontend')

@php
    $activeKey = in_array($currentUnitKey, ['yayasan', 'tk', 'sd', 'smp']) ? $currentUnitKey : 'all';
    $facilityHeaders = [
        'all' => [
            'title' => 'Fasilitas & Sarana Prasarana Kampus Terpadu SIT Madani',
            'sub' => 'Infrastruktur modern dan lingkungan belajar satu atap yang asri, nyaman, dan mendukung potensi Qur\'ani serta sains seluruh unit.',
            'badge' => 'KAMPUS TERPADU SIT MADANI',
        ],
        'yayasan' => [
            'title' => 'Fasilitas Kampus Terpadu Yayasan Agung Madani',
            'sub' => 'Sarana utama kawasan pendidikan Islam terpadu SIT Madani Kayuagung.',
            'badge' => 'SARANA KAMPUS MADANI',
        ],
        'tk' => [
            'title' => 'Fasilitas & Sarana Belajar TKS Islam Terpadu Madani',
            'sub' => 'Sentra belajar tematik, wahana bermain ramah anak indoor & outdoor, dan lingkungan PAUD/TK yang aman serta menyenangkan.',
            'badge' => 'FASILITAS TKS IT MADANI',
        ],
        'sd' => [
            'title' => 'Fasilitas & Sarana Belajar SDS Islam Terpadu Madani',
            'sub' => '13 ruang kelas ber-AC, laboratorium komputer modern ANBK, perpustakaan, UKS, dan lapangan olahraga serbaguna.',
            'badge' => 'FASILITAS SDS IT MADANI',
        ],
        'smp' => [
            'title' => 'Fasilitas & Sarana Belajar SMPS Islam Terpadu Madani',
            'sub' => 'Laboratorium IPA terpadu, laboratorium komputer multimedia, perpustakaan digital, sarana olahraga, dan masjid kampus.',
            'badge' => 'FASILITAS SMPS IT MADANI',
        ],
    ];
    $head = $facilityHeaders[$activeKey] ?? $facilityHeaders['all'];

    // Data fasilitas spesifik jika dipilih unit tertentu
    $facilityList = [];
    if ($activeKey === 'tk') {
        $facilityList = [
            ['name' => 'Ruang Sentra Belajar Ber-AC', 'desc' => 'Ruang kelas tematik sentra yang nyaman, sejuk, dan ramah anak dengan alat peraga edukatif terstandar.', 'icon' => 'fa-solid fa-door-open', 'image' => '/uploads/activities-sit-madani.webp'],
            ['name' => 'Arena Bermain Edukatif Indoor & Outdoor', 'desc' => 'Wahana permainan ketangkasan luar dan dalam ruangan yang aman untuk menstimulasi motorik kasar dan kebugaran anak.', 'icon' => 'fa-solid fa-gamepad', 'image' => '/uploads/campus-sit-madani.webp'],
            ['name' => 'Pojok Baca & Literasi Bergambar', 'desc' => 'Koleksi buku dongeng islami, sirah nabawiyah anak, dan ensiklopedia cilik yang menumbuhkan minat membaca sejak dini.', 'icon' => 'fa-solid fa-book-open', 'image' => '/uploads/activities-sit-madani.webp'],
            ['name' => 'Kebun Edukasi & Tanaman Cilik', 'desc' => 'Area hijau sekolah untuk kegiatan berkebun bersama, mengenalkan ciptaan Allah SWT, dan menumbuhkan rasa syukur.', 'icon' => 'fa-solid fa-seedling', 'image' => '/uploads/campus-sit-madani.webp'],
            ['name' => 'Panggung Ekspresi & Aula Pentas Cilik', 'desc' => 'Tempat ananda berlatih tampil percaya diri membawakan hafalan surat pendek, puisi, dan bernyanyi riang gembira.', 'icon' => 'fa-solid fa-microphone', 'image' => '/uploads/activities-sit-madani.webp'],
            ['name' => 'Ruang UKS & Istirahat Ramah Anak', 'desc' => 'Ruangan bersih dan nyaman untuk pertolongan pertama serta penanganan kesehatan harian bagi ananda.', 'icon' => 'fa-solid fa-notes-medical', 'image' => '/uploads/campus-sit-madani.webp'],
        ];
    } elseif ($activeKey === 'sd') {
        $facilityList = [
            ['name' => '13 Ruang Kelas Ber-AC & Multimedia', 'desc' => 'Ruang belajar bersih berpendingin udara dengan pencahayaan alami optimal, proyektor, dan tata letak ergonomis untuk 13 rombel.', 'icon' => 'fa-solid fa-school', 'image' => '/uploads/campus-sit-madani.webp'],
            ['name' => 'Laboratorium Komputer Siswa Modern', 'desc' => 'Perangkat PC mutakhir terkoneksi jaringan internet berkecepatan tinggi untuk pembelajaran literasi digital dan ANBK mandiri.', 'icon' => 'fa-solid fa-desktop', 'image' => '/uploads/activities-sit-madani.webp'],
            ['name' => 'Perpustakaan & Pojok Literasi Sekolah', 'desc' => 'Koleksi ribuan buku pelajaran, ensiklopedia sains, sirah sahabat, dan buku pengayaan untuk menumbuhkan budaya membaca.', 'icon' => 'fa-solid fa-book', 'image' => '/uploads/tahfidz-sit-madani.webp'],
            ['name' => 'Unit Kesehatan Sekolah (UKS)', 'desc' => 'Layanan pemantauan kesehatan berkala, cek fisik, dan penanganan medis pertama bagi seluruh civitas sekolah.', 'icon' => 'fa-solid fa-notes-medical', 'image' => '/uploads/campus-sit-madani.webp'],
            ['name' => 'Lapangan Olahraga & Arena Upacara', 'desc' => 'Lapangan luas serbaguna untuk olahraga futsal, bulutangkis, senam ceria anak sholeh, dan latihan kepanduan Pramuka SIT.', 'icon' => 'fa-solid fa-futbol', 'image' => '/uploads/activities-sit-madani.webp'],
            ['name' => 'Ruang Halaqah Tahfidz Al-Qur\'an', 'desc' => 'Ruangan khusus yang tenang dan kondusif untuk bimbingan talaqqi, tasmi\', dan setoran hafalan 2 Juz Mutqin bersanad.', 'icon' => 'fa-solid fa-quran', 'image' => '/uploads/tahfidz-sit-madani.webp'],
        ];
    } elseif ($activeKey === 'smp') {
        $facilityList = [
            ['name' => 'Laboratorium IPA & Riset Sains Terpadu', 'desc' => 'Dilengkapi mikroskop, alat praktikum fisika, kimia, dan biologi modern untuk mengasah daya analisis dan riset ilmiah santri.', 'icon' => 'fa-solid fa-flask', 'image' => '/uploads/campus-sit-madani.webp'],
            ['name' => 'Laboratorium Komputer Multimedia & ANBK', 'desc' => 'Jajaran komputer PC berspesifikasi tinggi untuk coding dasar, desain grafis, riset internet, dan asesmen nasional terpadu.', 'icon' => 'fa-solid fa-desktop', 'image' => '/uploads/activities-sit-madani.webp'],
            ['name' => 'Ruang Kelas Multimedia Ber-AC', 'desc' => 'Ruang kelas representatif berpendingin udara dengan smart display proyektor LCD dan audio-visual joyful learning.', 'icon' => 'fa-solid fa-chalkboard-user', 'image' => '/uploads/campus-sit-madani.webp'],
            ['name' => 'Perpustakaan Digital & Ruang Diskusi', 'desc' => 'Koleksi literatur keislaman klasik dan modern, ensiklopedia sains, modul pembelajaran, dan area diskusi yang nyaman.', 'icon' => 'fa-solid fa-book-bookmark', 'image' => '/uploads/tahfidz-sit-madani.webp'],
            ['name' => 'Lapangan Olahraga Multifungsi', 'desc' => 'Sarana berolahraga futsal, bola basket, bola voli, bulutangkis, dan arena ketangkasan kepramukaan terpadu.', 'icon' => 'fa-solid fa-basketball', 'image' => '/uploads/activities-sit-madani.webp'],
            ['name' => 'Masjid Kampus Utama Madani', 'desc' => 'Pusat pembinaan ruhiyah siswa, sholat berjamaah lima waktu, kajian kitab adab, dan halaqah tahfidz Al-Qur\'an.', 'icon' => 'fa-solid fa-mosque', 'image' => '/uploads/campus-sit-madani.webp'],
        ];
    }
@endphp

@section('title', $head['title'] . ' - SIT Madani')
@section('meta_description', $head['sub'])

@section('content')
{{-- HERO HEADER --}}
<div class="bg-gradient-to-r from-indigo-950 via-indigo-900 to-blue-950 border-b border-indigo-500/20 text-white py-10 sm:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left reveal-fade-up">
        <nav class="text-xs text-indigo-200 mb-3 flex items-center justify-center sm:justify-start space-x-2 flex-wrap">
            <a href="{{ route('home') }}" class="hover:text-white transition">Beranda</a>
            <span>/</span>
            <span>Profil</span>
            <span>/</span>
            <span class="text-amber-300 font-semibold">Sarana &amp; Prasarana</span>
        </nav>
        <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">{{ $head['title'] }}</h1>
        <p class="text-xs sm:text-sm text-indigo-100 mt-2 font-light max-w-3xl">
            {{ $head['sub'] }}
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-14 space-y-8 sm:space-y-12">
    
    {{-- UNIT SWITCHER TABS --}}
    <div class="flex flex-wrap items-center justify-center gap-2 bg-white p-2 sm:p-3 rounded-2xl shadow-sm border border-gray-100">
        <a href="{{ route('bidang.index') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ ($activeKey === 'all' || $activeKey === 'yayasan') ? 'bg-indigo-600 text-white shadow' : 'bg-gray-50 text-gray-700 hover:bg-gray-100' }}">
            <i class="fa-solid fa-landmark text-amber-500 mr-1.5"></i> Kampus Terpadu SIT Madani
        </a>
        <a href="{{ route('unit.fasilitas', 'tk') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'tk' ? 'bg-amber-500 text-slate-950 font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-amber-50' }}">
            <i class="fa-solid fa-shapes text-amber-500 mr-1.5"></i> Fasilitas TKS IT
        </a>
        <a href="{{ route('unit.fasilitas', 'sd') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'sd' ? 'bg-emerald-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-emerald-50' }}">
            <i class="fa-solid fa-book-open-reader text-emerald-500 mr-1.5"></i> Fasilitas SDS IT
        </a>
        <a href="{{ route('unit.fasilitas', 'smp') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'smp' ? 'bg-blue-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-blue-50' }}">
            <i class="fa-solid fa-graduation-cap text-blue-500 mr-1.5"></i> Fasilitas SMPS IT
        </a>
    </div>

    {{-- GRID FASILITAS --}}
    @if(!empty($facilityList))
        {{-- TAMPILAN FASILITAS SPESIFIK UNIT (TK / SD / SMP) --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            @foreach($facilityList as $idx => $f)
                <div class="bg-white rounded-3xl overflow-hidden shadow-md border border-gray-100 hover:shadow-2xl transition transform hover:-translate-y-1.5 flex flex-col justify-between group reveal-fade-up delay-{{ $idx % 3 }}">
                    <div>
                        <div class="h-48 sm:h-52 w-full overflow-hidden bg-slate-100 relative">
                            <img src="{{ $f['image'] }}" alt="{{ $f['name'] }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500" onerror="this.onerror=null; this.src='/uploads/campus-sit-madani.webp'">
                            <span class="absolute top-3.5 left-3.5 bg-slate-900/80 backdrop-blur-xs text-white text-[10px] font-bold px-3 py-1 rounded-full shadow-md uppercase tracking-wider">
                                {{ $head['badge'] }}
                            </span>
                        </div>

                        <div class="p-6 space-y-3">
                            <div class="flex items-center space-x-2 text-xs text-indigo-600 font-bold">
                                <i class="{{ $f['icon'] }} text-sm"></i>
                                <span>{{ $head['badge'] }}</span>
                            </div>

                            <h3 class="font-black text-gray-900 text-base sm:text-lg group-hover:text-indigo-600 transition leading-snug">
                                {{ $f['name'] }}
                            </h3>
                            
                            <p class="text-xs text-gray-600 leading-relaxed font-normal">
                                {{ $f['desc'] }}
                            </p>
                        </div>
                    </div>

                    <div class="px-6 pb-6 pt-3 border-t border-gray-100 flex items-center justify-between text-xs">
                        <span class="text-[11px] text-gray-500 font-medium"><i class="fa-solid fa-circle-check text-emerald-500 mr-1"></i> Standar Terpadu</span>
                        <span class="text-[11px] text-indigo-600 font-bold">SIT Madani</span>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        {{-- TAMPILAN FASILITAS UMUM KAMPUS DARI DATABASE ($bidangs) --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            @forelse($bidangs as $idx => $b)
                <div class="bg-white rounded-3xl overflow-hidden shadow-md border border-gray-100 hover:shadow-2xl transition transform hover:-translate-y-1.5 flex flex-col justify-between group reveal-fade-up delay-{{ $idx % 3 }}">
                    <div>
                        <div class="h-48 sm:h-52 w-full overflow-hidden bg-slate-100 relative">
                            <img src="{{ $b->thumbnail_url }}" alt="{{ $b->name }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500" onerror="this.onerror=null; this.src='/uploads/campus-sit-madani.webp'">
                            <span class="absolute top-3.5 left-3.5 bg-slate-900/80 backdrop-blur-xs text-white text-[10px] font-bold px-3 py-1 rounded-full shadow-md uppercase tracking-wider">
                                Fasilitas Kampus Terpadu
                            </span>
                        </div>

                        <div class="p-6 space-y-3">
                            <div class="flex items-center space-x-2 text-xs text-indigo-600 font-bold">
                                @if(!empty($b->icon) && !str_starts_with($b->icon, '/') && !str_starts_with($b->icon, 'http'))
                                    <i class="{{ $b->icon }} text-sm text-indigo-600"></i>
                                @else
                                    <i class="fa-solid fa-school text-sm text-indigo-600"></i>
                                @endif
                                <span>SIT Madani Kayuagung</span>
                            </div>

                            <h3 class="font-black text-gray-900 text-base sm:text-lg group-hover:text-indigo-600 transition leading-snug">
                                <a href="{{ route('bidang.show', $b->slug) }}">{{ $b->name }}</a>
                            </h3>
                            
                            <p class="text-xs text-gray-600 line-clamp-3 leading-relaxed font-normal">
                                {{ strip_tags($b->description) }}
                            </p>
                        </div>
                    </div>

                    <div class="px-6 pb-6 pt-3 border-t border-gray-100 flex items-center justify-between text-xs">
                        <a href="{{ route('bidang.show', $b->slug) }}" class="inline-flex items-center font-bold text-indigo-600 hover:text-emerald-600 transition">
                            <span>Rincian Fasilitas</span>
                            <i class="fa-solid fa-arrow-right ml-1.5 text-[10px] group-hover:translate-x-1 transition"></i>
                        </a>
                        <span class="text-[11px] text-gray-500 font-medium">Kampus Terpadu</span>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12 text-gray-400 bg-white rounded-3xl border border-gray-100">
                    <i class="fa-solid fa-school text-4xl text-gray-300 mb-3 block"></i>
                    <span>Belum ada data fasilitas sekolah.</span>
                </div>
            @endforelse
        </div>
    @endif

</div>
@endsection
