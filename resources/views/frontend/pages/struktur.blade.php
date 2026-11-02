@extends('layouts.frontend')

@php
    $activeKey = in_array($currentUnitKey, ['yayasan', 'tk', 'sd', 'smp']) ? $currentUnitKey : 'yayasan';
    $titles = [
        'yayasan' => [
            'title' => 'Struktur Kepengurusan Yayasan Agung Madani Kayuagung',
            'sub' => 'Susunan formatur Dewan Pembina, Pengawas, Pengurus Harian, dan Direktorat Yayasan Agung Madani.',
            'badge' => 'TATA KELOLA YAYASAN',
        ],
        'tk' => [
            'title' => 'Struktur Organisasi TKS Islam Terpadu Madani Kayuagung',
            'sub' => 'Bagan resmi kepemimpinan, komite FOMG, tata usaha, dan tim pendidik sentra PAUD/TK IT Madani.',
            'badge' => 'STRUKTUR TKS IT',
        ],
        'sd' => [
            'title' => 'Struktur Organisasi SDS Islam Terpadu Madani Kayuagung',
            'sub' => 'Bagan manajemen sekolah dasar, kepala sekolah, komite, waka bidang, dan dewan guru SDS IT Madani.',
            'badge' => 'STRUKTUR SDS IT',
        ],
        'smp' => [
            'title' => 'Struktur Manajemen SMPS Islam Terpadu Madani Kayuagung',
            'sub' => 'Bagan pimpinan sekolah menengah pertama, waka kurikulum, waka kesiswaan, waka sarpras, dan tim pendidik.',
            'badge' => 'STRUKTUR SMPS IT',
        ],
    ];
    $headerInfo = $titles[$activeKey] ?? $titles['yayasan'];
@endphp

@section('title', $headerInfo['title'] . ' - SIT Madani')
@section('meta_description', $headerInfo['sub'])

@section('content')
{{-- HERO HEADER --}}
<div class="bg-gradient-to-r from-indigo-950 via-indigo-900 to-blue-950 border-b border-indigo-500/20 text-white py-10 sm:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left reveal-fade-up">
        <nav class="text-xs text-indigo-200 mb-3 flex items-center justify-center sm:justify-start space-x-2 flex-wrap">
            <a href="{{ route('home') }}" class="hover:text-white transition">Beranda</a>
            <span>/</span>
            <span>Profil</span>
            <span>/</span>
            <span class="text-amber-300 font-semibold">{{ $headerInfo['badge'] }}</span>
        </nav>
        <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">{{ $headerInfo['title'] }}</h1>
        <p class="text-xs sm:text-sm text-indigo-100 mt-2 font-light max-w-3xl">
            {{ $headerInfo['sub'] }}
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-14 space-y-8 sm:space-y-12">
    
    {{-- UNIT SWITCHER TABS --}}
    <div class="flex flex-wrap items-center justify-center gap-2 bg-white p-2 sm:p-3 rounded-2xl shadow-sm border border-gray-100">
        <a href="{{ route('page.struktur.yayasan') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'yayasan' ? 'bg-indigo-600 text-white shadow' : 'bg-gray-50 text-gray-700 hover:bg-gray-100' }}">
            <i class="fa-solid fa-landmark text-amber-500 mr-1.5"></i> Yayasan Agung Madani
        </a>
        <a href="{{ route('unit.struktur', 'tk') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'tk' ? 'bg-amber-500 text-slate-950 font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-amber-50' }}">
            <i class="fa-solid fa-shapes text-amber-500 mr-1.5"></i> TKS IT Madani
        </a>
        <a href="{{ route('unit.struktur', 'sd') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'sd' ? 'bg-emerald-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-emerald-50' }}">
            <i class="fa-solid fa-book-open-reader text-emerald-500 mr-1.5"></i> SDS IT Madani
        </a>
        <a href="{{ route('unit.struktur', 'smp') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $activeKey === 'smp' ? 'bg-blue-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-blue-50' }}">
            <i class="fa-solid fa-graduation-cap text-blue-500 mr-1.5"></i> SMPS IT Madani
        </a>
    </div>

    {{-- KONTEN STRUKTUR SPESIFIK UNIT (TIDAK CAMPUR ADUK) --}}
    @if($activeKey === 'yayasan')
        {{-- STRUKTUR RESMI YAYASAN AGUNG MADANI --}}
        <section class="bg-white p-6 sm:p-10 rounded-3xl shadow-xl border border-gray-100 space-y-8 reveal-fade-up">
            <div class="text-center max-w-2xl mx-auto">
                <span class="text-xs font-bold text-amber-500 uppercase tracking-wider block">Pusat Tata Kelola Lembaga</span>
                <h2 class="text-2xl sm:text-3xl font-black text-gray-900 tracking-tight mt-1">
                    Bagan Kepengurusan Yayasan Agung Madani
                </h2>
                <div class="w-16 h-1 bg-indigo-600 mx-auto rounded-full mt-3"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-stretch">
                {{-- Pembina & Pengawas --}}
                <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200 space-y-4 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center space-x-2 text-indigo-800 font-bold text-sm mb-3">
                            <i class="fa-solid fa-shield-halved text-amber-500"></i>
                            <span>Dewan Pembina &amp; Pengawas</span>
                        </div>
                        <div class="space-y-3 text-xs text-gray-700">
                            <div>
                                <p class="font-bold text-gray-900 border-b border-gray-200 pb-1">Pembina Yayasan:</p>
                                <ul class="list-disc pl-4 space-y-1 text-slate-600 mt-1">
                                    <li>Ustad H. Husnul Anam, S.H.I.</li>
                                    <li>Dr. H. Abdul Gofar, S.Pd., M.Pd.I.</li>
                                    <li>Ustad Rinto Andrian Usman, S.Pd.I.</li>
                                </ul>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 border-b border-gray-200 pb-1 pt-1">Pengawas Yayasan:</p>
                                <ul class="list-disc pl-4 space-y-1 text-slate-600 mt-1">
                                    <li>Assoc. Prof. Dr. H. Husnul Amin, Lc., M.M.</li>
                                    <li>Hendri Suriyanto, S.Pd., M.Pd.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pengurus Harian Yayasan --}}
                <div class="bg-gradient-to-br from-indigo-900 to-blue-900 text-white p-6 rounded-2xl shadow-md space-y-4 md:scale-105 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center space-x-2 text-amber-300 font-bold text-sm mb-3">
                            <i class="fa-solid fa-landmark text-amber-400"></i>
                            <span>Pengurus Harian Yayasan</span>
                        </div>
                        <div class="space-y-3 text-xs">
                            <div class="bg-white/10 p-2.5 rounded-xl">
                                <span class="text-[10px] uppercase text-amber-300 font-bold block">Ketua Yayasan</span>
                                <span class="font-black text-sm">Drs. H. Legianto, M.E.E.</span>
                            </div>
                            <div class="bg-white/10 p-2.5 rounded-xl">
                                <span class="text-[10px] uppercase text-amber-300 font-bold block">Sekretaris Yayasan</span>
                                <span class="font-bold text-xs">Yessi, S.H., M.H.</span>
                            </div>
                            <div class="bg-white/10 p-2.5 rounded-xl">
                                <span class="text-[10px] uppercase text-amber-300 font-bold block">Bendahara Yayasan</span>
                                <span class="font-bold text-xs">Nurul Ramadhani, S.H.</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Direktorat Yayasan --}}
                <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200 space-y-4 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center space-x-2 text-indigo-800 font-bold text-sm mb-3">
                            <i class="fa-solid fa-briefcase text-amber-500"></i>
                            <span>Direktorat Operasional</span>
                        </div>
                        <div class="space-y-3 text-xs">
                            <div class="border border-slate-200 bg-white p-2.5 rounded-xl">
                                <span class="text-[10px] uppercase text-indigo-600 font-bold block">Direktur Pendidikan</span>
                                <span class="font-bold text-gray-900">Wahyudi, S.Sos.I.</span>
                                <p class="text-[10px] text-gray-500 mt-0.5">Membina mutu kurikulum &amp; guru seluruh unit TK, SD, SMP.</p>
                            </div>
                            <div class="border border-slate-200 bg-white p-2.5 rounded-xl">
                                <span class="text-[10px] uppercase text-indigo-600 font-bold block">Direktur Sarana &amp; Prasarana</span>
                                <span class="font-bold text-gray-900">Kosim Abduh, S.Pd.I.</span>
                                <p class="text-[10px] text-gray-500 mt-0.5">Pengembangan aset, gedung, dan fasilitas kampus terpadu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @elseif($activeKey === 'tk')
        {{-- STRUKTUR ORGANISASI KHUSUS TKS IT MADANI --}}
        <section class="bg-white p-6 sm:p-10 rounded-3xl shadow-xl border border-gray-100 space-y-6 reveal-fade-up">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 border-b border-gray-100 pb-4 text-center sm:text-left">
                <div>
                    <span class="text-xs font-bold text-amber-500 uppercase tracking-wider block">Bagan Resmi PAUD / TK</span>
                    <h2 class="text-xl sm:text-2xl font-black text-gray-900 tracking-tight mt-1 flex items-center justify-center sm:justify-start">
                        <i class="fa-solid fa-shapes text-amber-500 mr-2"></i> Struktur Organisasi TKS IT Madani Kayuagung
                    </h2>
                    <p class="text-xs text-gray-500 mt-1">Kepala Sekolah: Ayu Rahmayani, S.Pd.Gr. (Bunda Ayu) &bull; Ketua FOMG: Tesi Yurike, SH.</p>
                </div>
                <a href="{{ route('unit.dewan', 'tk') }}" class="px-4 py-2 bg-amber-500 text-slate-950 rounded-xl text-xs font-black hover:bg-amber-600 transition flex items-center space-x-1.5 flex-shrink-0">
                    <i class="fa-solid fa-chalkboard-user text-xs"></i>
                    <span>Dewan Guru TK</span>
                </a>
            </div>

            <div class="rounded-2xl overflow-hidden border border-gray-200 shadow-md bg-slate-50">
                <img src="/uploads/dewan/struktur-tks-it-madani.webp" alt="Bagan Struktur Organisasi TKS IT Madani Kayuagung" class="w-full h-auto object-contain mx-auto block hover:scale-[1.01] transition duration-300" loading="lazy">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 pt-4">
                <div class="bg-amber-50/70 p-4 rounded-2xl border border-amber-200">
                    <span class="text-[10px] font-bold text-amber-800 uppercase block">Kepala Sekolah</span>
                    <h4 class="font-extrabold text-sm text-gray-900 mt-0.5">Ayu Rahmayani, S.Pd.Gr.</h4>
                    <p class="text-[11px] text-gray-600 mt-1">Pimpinan lembaga &amp; pembina sentra pembelajaran.</p>
                </div>
                <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200">
                    <span class="text-[10px] font-bold text-gray-600 uppercase block">Ketua FOMG / Komite</span>
                    <h4 class="font-extrabold text-sm text-gray-900 mt-0.5">Tesi Yurike, SH.</h4>
                    <p class="text-[11px] text-gray-600 mt-1">Kemitraan orang tua murid dan sekolah.</p>
                </div>
                <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200">
                    <span class="text-[10px] font-bold text-gray-600 uppercase block">Bendahara Sekolah</span>
                    <h4 class="font-extrabold text-sm text-gray-900 mt-0.5">Dwi Putrianti, S.Pd.Gr.</h4>
                    <p class="text-[11px] text-gray-600 mt-1">Tata kelola administrasi keuangan TK.</p>
                </div>
                <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200">
                    <span class="text-[10px] font-bold text-gray-600 uppercase block">Tata Usaha</span>
                    <h4 class="font-extrabold text-sm text-gray-900 mt-0.5">Emi Yati Lindasari, S.Pd.Gr.</h4>
                    <p class="text-[11px] text-gray-600 mt-1">Layanan administrasi &amp; data kependidikan.</p>
                </div>
            </div>
        </section>

    @elseif($activeKey === 'sd')
        {{-- STRUKTUR ORGANISASI KHUSUS SDS IT MADANI --}}
        <section class="bg-white p-6 sm:p-10 rounded-3xl shadow-xl border border-gray-100 space-y-6 reveal-fade-up">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 border-b border-gray-100 pb-4 text-center sm:text-left">
                <div>
                    <span class="text-xs font-bold text-emerald-600 uppercase tracking-wider block">Bagan Resmi Sekolah Dasar</span>
                    <h2 class="text-xl sm:text-2xl font-black text-gray-900 tracking-tight mt-1 flex items-center justify-center sm:justify-start">
                        <i class="fa-solid fa-book-open-reader text-emerald-600 mr-2"></i> Struktur Organisasi SDS IT Madani Kayuagung
                    </h2>
                    <p class="text-xs text-gray-500 mt-1">Kepala Sekolah: Yudhi Arsyandi, S.Pd., Gr. &bull; Ketua Komite: Andi Kumaini, M.Pd.</p>
                </div>
                <a href="{{ route('unit.dewan', 'sd') }}" class="px-4 py-2 bg-emerald-600 text-white rounded-xl text-xs font-bold hover:bg-emerald-700 transition flex items-center space-x-1.5 flex-shrink-0">
                    <i class="fa-solid fa-chalkboard-user text-xs"></i>
                    <span>Dewan Guru SD</span>
                </a>
            </div>

            <div class="rounded-2xl overflow-hidden border border-gray-200 shadow-md bg-slate-50">
                <img src="/uploads/dewan/struktur-sds-it-madani.webp" alt="Bagan Struktur Organisasi SDS IT Madani Kayuagung" class="w-full h-auto object-contain mx-auto block hover:scale-[1.01] transition duration-300" loading="lazy">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 pt-4">
                <div class="bg-emerald-50/70 p-4 rounded-2xl border border-emerald-200">
                    <span class="text-[10px] font-bold text-emerald-800 uppercase block">Kepala Sekolah</span>
                    <h4 class="font-extrabold text-sm text-gray-900 mt-0.5">Yudhi Arsyandi, S.Pd., Gr.</h4>
                    <p class="text-[11px] text-gray-600 mt-1">Pimpinan lembaga &amp; pembina 13 rombel SDS IT.</p>
                </div>
                <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200">
                    <span class="text-[10px] font-bold text-gray-600 uppercase block">Waka Kurikulum</span>
                    <h4 class="font-extrabold text-sm text-gray-900 mt-0.5">Hayusnia Muslimah, S.Pd., Gr.</h4>
                    <p class="text-[11px] text-gray-600 mt-1">Kurikulum Merdeka &amp; kekhasan JSIT.</p>
                </div>
                <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200">
                    <span class="text-[10px] font-bold text-gray-600 uppercase block">Waka Kesiswaan</span>
                    <h4 class="font-extrabold text-sm text-gray-900 mt-0.5">Rizki Jamali, S.Pd.</h4>
                    <p class="text-[11px] text-gray-600 mt-1">Pembinaan karakter, PJOK, &amp; pramuka.</p>
                </div>
                <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200">
                    <span class="text-[10px] font-bold text-gray-600 uppercase block">Waka Sarpras &amp; TTQ</span>
                    <h4 class="font-extrabold text-sm text-gray-900 mt-0.5">Mulya Budi Wijaya, S.Pd., Gr.</h4>
                    <p class="text-[11px] text-gray-600 mt-1">Fasilitas kelas, lab komputer, &amp; tahfidz.</p>
                </div>
            </div>
        </section>

    @elseif($activeKey === 'smp')
        {{-- STRUKTUR ORGANISASI KHUSUS SMPS IT MADANI --}}
        <section class="bg-white p-6 sm:p-10 rounded-3xl shadow-xl border border-gray-100 space-y-6 reveal-fade-up">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 border-b border-gray-100 pb-4 text-center sm:text-left">
                <div>
                    <span class="text-xs font-bold text-blue-600 uppercase tracking-wider block">Bagan Manajemen Sekolah Menengah</span>
                    <h2 class="text-xl sm:text-2xl font-black text-gray-900 tracking-tight mt-1 flex items-center justify-center sm:justify-start">
                        <i class="fa-solid fa-graduation-cap text-blue-600 mr-2"></i> Susunan Manajemen SMPS IT Madani Kayuagung
                    </h2>
                    <p class="text-xs text-gray-500 mt-1">Kepala Sekolah: Ribang Imam Satria, S.Pi., Gr. &bull; Terakreditasi B BAN-SM</p>
                </div>
                <a href="{{ route('unit.dewan', 'smp') }}" class="px-4 py-2 bg-blue-600 text-white rounded-xl text-xs font-bold hover:bg-blue-700 transition flex items-center space-x-1.5 flex-shrink-0">
                    <i class="fa-solid fa-chalkboard-user text-xs"></i>
                    <span>Dewan Guru SMP</span>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 pt-2">
                <div class="bg-blue-50/70 p-4 rounded-2xl border border-blue-100">
                    <span class="text-[10px] font-bold text-blue-800 uppercase block">Kepala Sekolah</span>
                    <h4 class="font-extrabold text-sm text-gray-900 mt-0.5">Ribang Imam Satria, S.Pi., Gr.</h4>
                    <p class="text-[11px] text-gray-600 mt-1">Pimpinan lembaga &amp; pembina karakter Qur'ani.</p>
                </div>
                <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200">
                    <span class="text-[10px] font-bold text-gray-600 uppercase block">Waka Kurikulum</span>
                    <h4 class="font-extrabold text-sm text-gray-900 mt-0.5">Helen Lestari, S.Pd., Gr.</h4>
                    <p class="text-[11px] text-gray-600 mt-1">Perencanaan kurikulum nasional &amp; JSIT.</p>
                </div>
                <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200">
                    <span class="text-[10px] font-bold text-gray-600 uppercase block">Waka Kesiswaan &amp; TTQ</span>
                    <h4 class="font-extrabold text-sm text-gray-900 mt-0.5">Yushamdalah, S.Pd.</h4>
                    <p class="text-[11px] text-gray-600 mt-1">Pembinaan akhlak, BPI &amp; tahfidz bersanad.</p>
                </div>
                <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200">
                    <span class="text-[10px] font-bold text-gray-600 uppercase block">Waka Sarana &amp; Prasarana</span>
                    <h4 class="font-extrabold text-sm text-gray-900 mt-0.5">Rudini, S.Pd., Gr.</h4>
                    <p class="text-[11px] text-gray-600 mt-1">Pengelolaan sarpras &amp; laboratorium siswa.</p>
                </div>
            </div>
        </section>
    @endif

</div>
@endsection
