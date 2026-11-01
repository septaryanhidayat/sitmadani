@php
    $activeUnit = $currentUnitKey ?? (request()->route()?->parameter('unit') ?? (request()->is('tk*') ? 'tk' : (request()->is('sd*') ? 'sd' : (request()->is('smp*') ? 'smp' : 'yayasan'))));
    if (!in_array($activeUnit, ['yayasan', 'tk', 'sd', 'smp'])) {
        $activeUnit = 'yayasan';
    }

    $unitBrands = [
        'yayasan' => [
            'title' => 'YAYASAN AGUNG MADANI',
            'subtitle' => 'SEKOLAH ISLAM TERPADU MADANI',
            'badge' => 'TK • SD • SMP ISLAM TERPADU KAYUAGUNG',
            'home' => route('home'),
            'spmb' => route('ppdb.index'),
            'phone' => $siteSettings['contact_phone'] ?? '0858-3817-3417',
            'email' => $siteSettings['contact_email'] ?? 'smpsislamterpadumadani@gmail.com',
        ],
        'tk' => [
            'title' => 'TKS IT MADANI',
            'subtitle' => 'YAYASAN AGUNG MADANI KAYUAGUNG',
            'badge' => 'NPSN 69915461 • TERAKREDITASI B',
            'home' => route('unit.tk'),
            'spmb' => route('unit.ppdb', 'tk'),
            'phone' => '0821-7936-9298',
            'email' => 'sitmadani@gmail.com',
        ],
        'sd' => [
            'title' => 'SDS IT MADANI',
            'subtitle' => 'YAYASAN AGUNG MADANI KAYUAGUNG',
            'badge' => 'NPSN 69881529 • TERAKREDITASI B',
            'home' => route('unit.sd'),
            'spmb' => route('unit.ppdb', 'sd'),
            'phone' => '0811-7871-1313',
            'email' => 'sitmadani@gmail.com',
        ],
        'smp' => [
            'title' => 'SMPS IT MADANI',
            'subtitle' => 'YAYASAN AGUNG MADANI KAYUAGUNG',
            'badge' => 'NPSN 70034917 • TERAKREDITASI B',
            'home' => route('unit.smp'),
            'spmb' => route('unit.ppdb', 'smp'),
            'phone' => '0858-3817-3417',
            'email' => 'smpsislamterpadumadani@gmail.com',
        ],
    ];
    $curBrand = $unitBrands[$activeUnit] ?? $unitBrands['yayasan'];
@endphp

{{-- 1. TOPBAR UNIT SWITCHER (Pilihan Akses Portal Yayasan & 3 Unit Sekolah SIT Madani) --}}
<div class="w-full max-w-full bg-[#080d1a] text-slate-200 text-xs py-1.5 border-b border-indigo-950/80 overflow-hidden box-border">
    <div class="w-full max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 flex flex-wrap items-center justify-between gap-2 text-center sm:text-left">
        
        {{-- Tombol Switcher Unit Pendidikan --}}
        <div class="flex items-center space-x-1 sm:space-x-1.5 overflow-x-auto no-scrollbar py-0.5 w-full sm:w-auto justify-center sm:justify-start">
            <span class="text-amber-400 font-extrabold uppercase text-[10px] tracking-wider mr-1 hidden lg:inline-flex items-center">
                <i class="fa-solid fa-layer-group mr-1"></i> Unit:
            </span>
            <a href="{{ route('home') }}" class="px-2.5 py-1 rounded-lg text-[11px] font-bold transition flex items-center space-x-1.5 {{ $activeUnit === 'yayasan' ? 'bg-indigo-600 text-white shadow ring-1 ring-indigo-400' : 'bg-slate-900/90 text-slate-300 hover:bg-indigo-950 hover:text-white' }}" title="Kembali ke Portal Yayasan Agung Madani">
                <i class="fa-solid fa-landmark text-amber-400 text-[10px]"></i>
                <span>Yayasan</span>
            </a>
            <a href="{{ route('unit.tk') }}" class="px-2.5 py-1 rounded-lg text-[11px] font-bold transition flex items-center space-x-1.5 {{ $activeUnit === 'tk' ? 'bg-amber-500 text-slate-950 font-black shadow ring-1 ring-amber-300' : 'bg-slate-900/90 text-slate-300 hover:bg-indigo-950 hover:text-white' }}" title="Kunjungi Website TKS IT Madani">
                <i class="fa-solid fa-shapes {{ $activeUnit === 'tk' ? 'text-slate-950' : 'text-amber-400' }} text-[10px]"></i>
                <span>TKS IT</span>
            </a>
            <a href="{{ route('unit.sd') }}" class="px-2.5 py-1 rounded-lg text-[11px] font-bold transition flex items-center space-x-1.5 {{ $activeUnit === 'sd' ? 'bg-emerald-600 text-white font-black shadow ring-1 ring-emerald-300' : 'bg-slate-900/90 text-slate-300 hover:bg-indigo-950 hover:text-white' }}" title="Kunjungi Website SDS IT Madani">
                <i class="fa-solid fa-book-open-reader {{ $activeUnit === 'sd' ? 'text-white' : 'text-emerald-400' }} text-[10px]"></i>
                <span>SDS IT</span>
            </a>
            <a href="{{ route('unit.smp') }}" class="px-2.5 py-1 rounded-lg text-[11px] font-bold transition flex items-center space-x-1.5 {{ $activeUnit === 'smp' ? 'bg-blue-600 text-white font-black shadow ring-1 ring-blue-300' : 'bg-slate-900/90 text-slate-300 hover:bg-indigo-950 hover:text-white' }}" title="Kunjungi Website SMPS IT Madani">
                <i class="fa-solid fa-graduation-cap {{ $activeUnit === 'smp' ? 'text-white' : 'text-blue-400' }} text-[10px]"></i>
                <span>SMPS IT</span>
            </a>
        </div>

        {{-- Kontak Hotline & Info SPMB --}}
        <div class="hidden md:flex items-center space-x-4 text-[11px] text-slate-300">
            <a href="tel:{{ $curBrand['phone'] }}" class="inline-flex items-center text-slate-200 hover:text-amber-300 transition py-0.5 font-semibold">
                <i class="fa-solid fa-phone mr-1.5 text-amber-400"></i>
                <span>{{ $curBrand['phone'] }}</span>
            </a>
            <span class="text-indigo-950">|</span>
            <span class="inline-flex items-center text-amber-300">
                <i class="fa-solid fa-certificate text-[10px] mr-1 text-amber-400"></i> Terakreditasi B &bull; JSIT Indonesia
            </span>
            <span class="text-indigo-950">|</span>
            <a href="{{ $curBrand['spmb'] }}" class="text-emerald-400 font-bold hover:underline flex items-center">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse mr-1"></span> SPMB Online
            </a>
        </div>
    </div>
</div>

{{-- 2. MAIN STICKY NAVBAR (Royal Indigo & Electric Blue + Radiant Gold) --}}
<header class="sticky top-0 z-50 w-full max-w-full overflow-x-clip bg-gradient-to-r from-indigo-950 via-indigo-900 to-blue-950 shadow-xl border-b border-indigo-500/20 transition-all duration-300 backdrop-blur-md box-border" style="position: -webkit-sticky; position: sticky; top: 0; z-index: 50;">

    <div class="w-full max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 box-border">
        <div class="flex justify-between items-center h-16 sm:h-20 w-full max-w-full">
            
            {{-- LOGO RESMI SEKOLAH ISLAM TERPADU MADANI --}}
            <a href="{{ $curBrand['home'] }}" class="flex items-center space-x-2.5 sm:space-x-3.5 group min-w-0 flex-1 sm:flex-initial mr-2 max-w-[76%] sm:max-w-none" aria-label="Beranda {{ $curBrand['title'] }}">
                <div class="w-10 h-10 sm:w-12 sm:h-12 md:w-13 md:h-13 shrink-0 flex items-center justify-center overflow-hidden" style="width: clamp(40px, 4.5vw, 54px); height: clamp(40px, 4.5vw, 54px); max-width: 54px; max-height: 54px; min-width: 40px; min-height: 40px;">
                    <img src="/uploads/logo-madani-square.webp" alt="Logo SIT Madani Kayuagung" width="54" height="54" fetchpriority="high" decoding="async" class="w-full h-full object-contain pointer-events-none select-none transition duration-300 group-hover:scale-105" style="max-width: 54px; max-height: 54px; width: 100%; height: 100%; object-fit: contain; display: block;" onerror="this.onerror=null; this.src='/uploads/logo-madani.png'">
                </div>
                <div class="flex flex-col min-w-0 justify-center leading-none space-y-0.5 select-none">
                    <span class="text-[8px] sm:text-[10px] md:text-[11.5px] font-extrabold uppercase tracking-wide text-amber-400 truncate leading-tight">{{ $curBrand['subtitle'] }}</span>
                    <span class="text-[13px] sm:text-[16px] md:text-[20px] font-black uppercase text-white tracking-tight leading-none truncate group-hover:text-amber-300 transition">{{ $curBrand['title'] }}</span>
                    <span class="text-[7.5px] sm:text-[9px] md:text-[10.5px] font-bold uppercase tracking-wider text-amber-400 truncate leading-tight">{{ $curBrand['badge'] }}</span>
                </div>
            </a>

            {{-- DESKTOP NAVIGATION --}}
            <nav class="hidden lg:flex items-center space-x-1 xl:space-x-1.5 font-bold text-xs xl:text-sm text-white" aria-label="Navigasi Utama">
                
                {{-- 1. Beranda --}}
                <a href="{{ $curBrand['home'] }}" class="px-3 py-2 rounded-xl whitespace-nowrap hover:bg-white/15 transition {{ request()->url() === $curBrand['home'] ? 'bg-white/20 text-white shadow-inner' : '' }}">
                    Beranda
                </a>

                {{-- 2. Profil Dropdown --}}
                <div class="relative group py-2" id="nav-dropdown-profil">
                    <button type="button" aria-haspopup="true" aria-expanded="false" aria-label="Buka Menu Profil" class="px-3 py-2 rounded-xl whitespace-nowrap inline-flex items-center hover:bg-white/15 transition {{ request()->is('*sambutan*', '*tentang*', '*visi*', '*sejarah*', '*struktur*', '*fasilitas*', '*dpc*', '*dewan*', '*guru*', '*ekskul*') ? 'bg-white/20 text-white shadow-inner' : '' }}">
                        <span>Profil</span>
                        <i class="fa-solid fa-chevron-down text-[10px] ml-1.5 transition-transform duration-200 group-hover:rotate-180" aria-hidden="true"></i>
                    </button>
                    {{-- Safe Hover Bridge Container --}}
                    <div class="absolute left-0 top-full pt-1 w-52 hidden group-hover:block transition-all duration-150 z-50">
                        <div class="bg-white rounded-2xl shadow-2xl border border-indigo-100 py-2 text-gray-800 animate-fadeIn">
                            <a href="{{ $activeUnit !== 'yayasan' ? route('unit.sambutan', $activeUnit) : route('page.sambutan') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-user-tie w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Sambutan Pimpinan
                            </a>
                            <a href="{{ $activeUnit !== 'yayasan' ? route('unit.tentang-kami', $activeUnit) : route('page.tentang-kami') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-school w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Profil Singkat
                            </a>
                            <a href="{{ $activeUnit !== 'yayasan' ? route('unit.visi-misi', $activeUnit) : route('page.visi-misi') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-compass w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Visi &amp; Misi
                            </a>
                            <a href="{{ route('page.sejarah') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-landmark w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Sejarah
                            </a>
                            <div class="border-t border-gray-100 my-1"></div>
                            <a href="{{ $activeUnit !== 'yayasan' ? route('unit.dewan', $activeUnit) : route('dewan.index') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-chalkboard-user w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Dewan Guru &amp; GTK
                            </a>
                            <a href="{{ $activeUnit !== 'yayasan' ? route('unit.struktur', $activeUnit) : route('page.struktur') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-sitemap w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Struktur Organisasi
                            </a>
                            <a href="{{ $activeUnit !== 'yayasan' ? route('unit.fasilitas', $activeUnit) : route('bidang.index') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-layer-group w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Fasilitas
                            </a>
                            <a href="{{ route('dpc.index') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-star-and-crescent w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Program Unggulan
                            </a>
                            <a href="{{ route('ekskul.index') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-people-group w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Ekstrakurikuler
                            </a>
                        </div>
                    </div>
                </div>

                {{-- 3. Kabar Dropdown --}}
                <div class="relative group py-2" id="nav-dropdown-kabar">
                    <button type="button" aria-haspopup="true" aria-expanded="false" aria-label="Buka Menu Kabar" class="px-3 py-2 rounded-xl whitespace-nowrap inline-flex items-center hover:bg-white/15 transition {{ request()->is('artikel*', 'prestasi*', 'agenda*', 'pengumuman*', 'galeri*', 'video*', 'testimonial*') ? 'bg-white/20 text-white shadow-inner' : '' }}">
                        <span>Kabar</span>
                        <i class="fa-solid fa-chevron-down text-[10px] ml-1.5 transition-transform duration-200 group-hover:rotate-180" aria-hidden="true"></i>
                    </button>
                    <div class="absolute left-0 top-full pt-1 w-52 hidden group-hover:block transition-all duration-150 z-50">
                        <div class="bg-white rounded-2xl shadow-2xl border border-indigo-100 py-2 text-gray-800 animate-fadeIn">
                            <a href="{{ route('artikel.index') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-newspaper w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Berita &amp; Artikel
                            </a>
                            <a href="{{ route('prestasi.index') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-trophy w-4 text-amber-500 mr-2 text-xs" aria-hidden="true"></i> Prestasi Siswa
                            </a>
                            <a href="{{ route('galeri.index') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-images w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Galeri Foto
                            </a>
                            <a href="{{ route('video.index') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-brands fa-youtube w-4 text-red-600 mr-2 text-xs" aria-hidden="true"></i> Video Kegiatan
                            </a>
                            <div class="border-t border-gray-100 my-1"></div>
                            <a href="{{ route('agenda.index') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-calendar-days w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Agenda
                            </a>
                            <a href="{{ route('pengumuman.index') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-bullhorn w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Pengumuman
                            </a>
                            <a href="{{ route('testimonial.index') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-comment-dots w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Testimoni
                            </a>
                        </div>
                    </div>
                </div>

                {{-- 4. Download Dropdown --}}
                <div class="relative group py-2" id="nav-dropdown-download">
                    <button type="button" aria-haspopup="true" aria-expanded="false" aria-label="Buka Menu Download" class="px-3 py-2 rounded-xl whitespace-nowrap inline-flex items-center hover:bg-white/15 transition {{ request()->is('download*', 'e-book*', 'hymne*', 'logo*') ? 'bg-white/20 text-white shadow-inner' : '' }}">
                        <span>Download</span>
                        <i class="fa-solid fa-chevron-down text-[10px] ml-1.5 transition-transform duration-200 group-hover:rotate-180" aria-hidden="true"></i>
                    </button>
                    <div class="absolute left-0 top-full pt-1 w-48 hidden group-hover:block transition-all duration-150 z-50">
                        <div class="bg-white rounded-2xl shadow-2xl border border-indigo-100 py-2 text-gray-800 animate-fadeIn">
                            <a href="{{ route('download.index') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-folder-open w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Semua Berkas
                            </a>
                            <a href="{{ route('download.ebook') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-book-open w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> E-Book &amp; Modul
                            </a>
                            <a href="{{ route('download.hymne-mars') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-music w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Mars JSIT
                            </a>
                            <a href="{{ route('download.logo') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-image w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Logo Sekolah
                            </a>
                        </div>
                    </div>
                </div>

                {{-- 5. Layanan Dropdown --}}
                <div class="relative group py-2" id="nav-dropdown-layanan">
                    <button type="button" aria-haspopup="true" aria-expanded="false" aria-label="Buka Menu Layanan" class="px-3 py-2 rounded-xl whitespace-nowrap inline-flex items-center hover:bg-white/15 transition {{ request()->is('layanan*', 'izin-sekolah*', 'permohonan-kerja-sama*', 'sewa-barang*') ? 'bg-white/20 text-white font-bold shadow-inner' : '' }}">
                        <span>Layanan</span>
                        <i class="fa-solid fa-chevron-down text-[10px] ml-1.5 transition-transform duration-200 group-hover:rotate-180" aria-hidden="true"></i>
                    </button>
                    <div class="absolute left-0 top-full pt-1 w-48 hidden group-hover:block transition-all duration-150 z-50">
                        <div class="bg-white rounded-2xl shadow-2xl border border-indigo-100 py-2 text-gray-800 animate-fadeIn">
                            <a href="{{ route('layanan.index') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-handshake-angle w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Portal Layanan
                            </a>
                            <div class="border-t border-gray-100 my-1"></div>
                            <a href="{{ route('layanan.izin') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-id-card-clip w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Izin Kunjungan
                            </a>
                            <a href="{{ route('layanan.kerjasama') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-handshake w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Kerja Sama
                            </a>
                            <a href="{{ route('layanan.sewa') }}" class="block px-3.5 py-2 text-xs font-semibold text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition flex items-center whitespace-nowrap">
                                <i class="fa-solid fa-building-user w-4 text-indigo-600 mr-2 text-xs" aria-hidden="true"></i> Sewa Barang
                            </a>
                        </div>
                    </div>
                </div>

                {{-- 6. Kontak --}}
                <a href="{{ route('hubungi') }}" class="px-3 py-2 rounded-xl whitespace-nowrap hover:bg-white/15 transition {{ request()->routeIs('hubungi') ? 'bg-white/20 text-white shadow-inner' : '' }}">
                    Kontak
                </a>
            </nav>

            {{-- TOMBOL AKSI: DAFTAR SPMB & LOGIN --}}
            <div class="hidden lg:flex items-center space-x-2 shrink-0">
                <a href="{{ $curBrand['spmb'] }}" class="bg-gradient-to-r from-amber-400 via-amber-500 to-amber-600 hover:from-amber-500 hover:to-amber-700 text-slate-950 px-4 py-2 rounded-full text-xs font-black shadow-lg shadow-amber-500/20 hover:shadow-amber-500/40 transition flex items-center space-x-1.5 transform hover:scale-105 whitespace-nowrap" aria-label="Pendaftaran SPMB Online {{ $curBrand['title'] }}">
                    <i class="fa-solid fa-graduation-cap text-xs text-slate-950" aria-hidden="true"></i>
                    <span>Daftar SPMB</span>
                </a>
                <a href="/login" class="text-white hover:text-amber-300 px-2.5 py-2 text-xs font-bold transition flex items-center space-x-1 rounded-xl hover:bg-white/10 whitespace-nowrap" aria-label="Login Admin">
                    <i class="fa-solid fa-lock text-[11px]" aria-hidden="true"></i>
                    <span>Login</span>
                </a>
            </div>

            {{-- MOBILE TOP RIGHT: Tombol SPMB & Hamburger --}}
            <div class="flex lg:hidden items-center space-x-1.5 shrink-0 ml-auto">
                <a href="{{ $curBrand['spmb'] }}" aria-label="Pendaftaran SPMB Online" class="bg-gradient-to-r from-amber-400 to-amber-500 hover:from-amber-500 hover:to-amber-600 text-slate-950 px-2.5 sm:px-3 py-1.5 rounded-full text-[10px] sm:text-xs font-black shadow transition flex items-center min-h-[34px] flex-shrink-0">
                    <span>SPMB</span>
                </a>
                <button id="mobile-menu-toggle" type="button" class="text-white hover:text-amber-200 p-1 rounded-lg focus:outline-none w-9 h-9 flex items-center justify-center flex-shrink-0 cursor-pointer" aria-label="Buka Menu Navigasi">
                    <i class="fa-solid fa-bars text-xl" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </div>

    {{-- MOBILE MENU DRAWER (Struktur Rapi & Terorganisir) --}}
    <div id="mobile-menu" class="hidden lg:hidden w-full max-w-full overflow-x-hidden box-border bg-white text-gray-800 border-t-4 border-indigo-600 px-4 sm:px-5 pt-4 pb-6 space-y-3 shadow-2xl max-h-[85vh] overflow-y-auto">
        
        {{-- Mobile Unit Quick Switcher --}}
        <div class="bg-slate-100 p-2.5 rounded-2xl mb-2">
            <span class="text-[10px] font-extrabold uppercase tracking-wider text-indigo-900 block mb-1.5 text-center">Pilih Portal &amp; Unit Sekolah:</span>
            <div class="grid grid-cols-2 gap-1.5">
                <a href="{{ route('home') }}" class="px-2 py-1.5 rounded-xl text-center text-xs font-bold transition {{ $activeUnit === 'yayasan' ? 'bg-indigo-600 text-white shadow' : 'bg-white text-gray-800 hover:bg-indigo-50' }}">
                    <i class="fa-solid fa-landmark text-amber-500 text-[10px] mr-1"></i> Yayasan
                </a>
                <a href="{{ route('unit.tk') }}" class="px-2 py-1.5 rounded-xl text-center text-xs font-bold transition {{ $activeUnit === 'tk' ? 'bg-amber-500 text-slate-950 font-black shadow' : 'bg-white text-gray-800 hover:bg-amber-50' }}">
                    <i class="fa-solid fa-shapes text-amber-500 text-[10px] mr-1"></i> TKS IT
                </a>
                <a href="{{ route('unit.sd') }}" class="px-2 py-1.5 rounded-xl text-center text-xs font-bold transition {{ $activeUnit === 'sd' ? 'bg-emerald-600 text-white font-black shadow' : 'bg-white text-gray-800 hover:bg-emerald-50' }}">
                    <i class="fa-solid fa-book-open-reader text-emerald-600 text-[10px] mr-1"></i> SDS IT
                </a>
                <a href="{{ route('unit.smp') }}" class="px-2 py-1.5 rounded-xl text-center text-xs font-bold transition {{ $activeUnit === 'smp' ? 'bg-blue-600 text-white font-black shadow' : 'bg-white text-gray-800 hover:bg-blue-50' }}">
                    <i class="fa-solid fa-graduation-cap text-blue-600 text-[10px] mr-1"></i> SMPS IT
                </a>
            </div>
        </div>

        <form action="{{ route('artikel.index') }}" method="GET" class="relative mb-3">
            <input type="text" name="q" placeholder="Cari info & artikel sekolah..." aria-label="Cari artikel sekolah" value="{{ request('q') }}" class="w-full bg-gray-100 text-xs text-gray-800 rounded-full pl-9 pr-3 py-2.5 focus:outline-none focus:ring-2 focus:ring-indigo-600">
            <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-3 text-gray-400 text-xs" aria-hidden="true"></i>
        </form>

        <a href="{{ $curBrand['home'] }}" class="block px-3 py-2 rounded-lg font-bold text-gray-900 hover:bg-indigo-50 hover:text-indigo-700 transition {{ request()->url() === $curBrand['home'] ? 'bg-indigo-50 text-indigo-700' : '' }}">
            <i class="fa-solid fa-house mr-2 text-indigo-600"></i> Beranda {{ $curBrand['title'] }}
        </a>
        
        {{-- Mobile Profil Submenu --}}
        <div class="border-t border-gray-100 pt-2">
            <div class="font-extrabold text-xs text-indigo-900 uppercase tracking-wider px-3 mb-1 flex items-center">
                <i class="fa-solid fa-school mr-2 text-amber-500"></i> Profil {{ $activeUnit !== 'yayasan' ? $curBrand['title'] : 'Yayasan' }}
            </div>
            <a href="{{ $activeUnit !== 'yayasan' ? route('unit.sambutan', $activeUnit) : route('page.sambutan') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Sambutan Pimpinan</a>
            <a href="{{ $activeUnit !== 'yayasan' ? route('unit.tentang-kami', $activeUnit) : route('page.tentang-kami') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Profil Singkat</a>
            <a href="{{ $activeUnit !== 'yayasan' ? route('unit.visi-misi', $activeUnit) : route('page.visi-misi') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Visi &amp; Misi</a>
            <a href="{{ route('page.sejarah') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Sejarah</a>
            <a href="{{ $activeUnit !== 'yayasan' ? route('unit.dewan', $activeUnit) : route('dewan.index') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Dewan Guru &amp; GTK</a>
            <a href="{{ $activeUnit !== 'yayasan' ? route('unit.struktur', $activeUnit) : route('page.struktur') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Struktur Organisasi</a>
            <a href="{{ $activeUnit !== 'yayasan' ? route('unit.fasilitas', $activeUnit) : route('bidang.index') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Fasilitas</a>
            <a href="{{ route('dpc.index') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Program Unggulan</a>
            <a href="{{ route('ekskul.index') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Ekstrakurikuler</a>
        </div>

        {{-- Mobile Kabar Submenu --}}
        <div class="border-t border-gray-100 pt-2">
            <div class="font-extrabold text-xs text-indigo-900 uppercase tracking-wider px-3 mb-1 flex items-center">
                <i class="fa-solid fa-newspaper mr-2 text-amber-500"></i> Kabar Sekolah
            </div>
            <a href="{{ route('artikel.index') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Berita &amp; Artikel</a>
            <a href="{{ route('prestasi.index') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Prestasi Siswa</a>
            <a href="{{ route('galeri.index') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Galeri Foto</a>
            <a href="{{ route('video.index') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Video Kegiatan</a>
            <a href="{{ route('agenda.index') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Agenda</a>
            <a href="{{ route('pengumuman.index') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Pengumuman</a>
            <a href="{{ route('testimonial.index') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Testimoni</a>
        </div>

        {{-- Mobile Download Submenu --}}
        <div class="border-t border-gray-100 pt-2">
            <div class="font-extrabold text-xs text-indigo-900 uppercase tracking-wider px-3 mb-1 flex items-center">
                <i class="fa-solid fa-download mr-2 text-amber-500"></i> Download Berkas
            </div>
            <a href="{{ route('download.index') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Semua Berkas</a>
            <a href="{{ route('download.ebook') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">E-Book &amp; Modul</a>
            <a href="{{ route('download.hymne-mars') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Mars JSIT</a>
            <a href="{{ route('download.logo') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Logo Sekolah</a>
        </div>

        {{-- Mobile Layanan Submenu --}}
        <div class="border-t border-gray-100 pt-2">
            <div class="font-extrabold text-xs text-indigo-900 uppercase tracking-wider px-3 mb-1 flex items-center">
                <i class="fa-solid fa-handshake-angle mr-2 text-amber-500"></i> Layanan
            </div>
            <a href="{{ route('layanan.index') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Portal Layanan</a>
            <a href="{{ route('layanan.izin') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Izin Kunjungan</a>
            <a href="{{ route('layanan.kerjasama') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Kerja Sama</a>
            <a href="{{ route('layanan.sewa') }}" class="block px-4 py-1.5 text-xs text-gray-700 hover:text-indigo-700">Sewa Barang</a>
        </div>

        <div class="border-t border-gray-100 pt-2 space-y-1">
            <a href="{{ route('hubungi') }}" class="block px-3 py-2 rounded-lg font-bold text-gray-900 hover:bg-indigo-50 hover:text-indigo-700 transition">
                <i class="fa-solid fa-phone mr-2 text-indigo-600"></i> Hubungi Kami
            </a>
            <a href="{{ route('donasi') }}" class="block px-3 py-2 rounded-lg font-extrabold text-indigo-700 hover:bg-indigo-50">
                <i class="fa-solid fa-hand-holding-heart mr-2 text-amber-500"></i> Infaq Madani
            </a>
        </div>

        <div class="pt-3 space-y-2">
            <a href="{{ $curBrand['spmb'] }}" class="block w-full text-center bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 py-3 rounded-xl text-xs font-black shadow-md transition">
                <i class="fa-solid fa-graduation-cap mr-1.5" aria-hidden="true"></i> Pendaftaran SPMB Online {{ $curBrand['title'] }}
            </a>
            <a href="/login" class="block w-full text-center bg-slate-900 hover:bg-slate-950 text-white py-2.5 rounded-xl text-xs font-bold transition shadow-sm">
                <i class="fa-solid fa-lock mr-1.5 text-amber-400" aria-hidden="true"></i> Login SIAKAD / Admin
            </a>
        </div>
    </div>
</header>
