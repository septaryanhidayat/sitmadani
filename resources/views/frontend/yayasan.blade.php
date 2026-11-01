@extends('layouts.frontend')

@section('title', 'Yayasan Agung Madani Kayuagung - Sekolah Islam Terpadu Madani (TK • SD • SMP)')
@section('meta_description', 'Portal Resmi Yayasan Agung Madani Kayuagung. Menaungi TKS IT Madani, SDS IT Madani, dan SMPS IT Madani di Kabupaten Ogan Komering Ilir, Sumatera Selatan.')

@section('content')
<main id="main-content" class="w-full overflow-hidden bg-slate-50">

    {{-- ========================================================
         HERO SECTION: PORTAL UTAMA YAYASAN AGUNG MADANI
         ======================================================== --}}
    <section class="relative bg-gradient-to-br from-[#0c1427] via-[#1e1b4b] to-[#172554] text-white py-16 sm:py-24 overflow-hidden border-b border-indigo-900/60 shadow-2xl">
        {{-- Background Ornament & Islamic Geometric Pattern --}}
        <div class="absolute inset-0 opacity-10 pointer-events-none bg-[radial-gradient(#e0e7ff_1px,transparent_1px)] [background-size:24px_24px]"></div>
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-blue-500/15 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto space-y-4 sm:space-y-6">
                
                {{-- Badge Yayasan --}}
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/20 backdrop-blur-md shadow-inner text-amber-300 text-xs sm:text-sm font-bold uppercase tracking-wider animate-fadeIn">
                    <i class="fa-solid fa-landmark text-amber-400"></i>
                    <span>Yayasan Agung Madani Kayuagung • Kab. OKI</span>
                </div>

                {{-- Headline --}}
                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight uppercase drop-shadow-md">
                    Sekolah Islam Terpadu <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-200">Madani</span>
                </h1>

                <p class="text-sm sm:text-lg text-indigo-100 font-medium leading-relaxed">
                    Mewujudkan ekosistem pendidikan Islam terpadu satu atap yang membina generasi robbani berakhlak mulia, cerdas, berprestasi, dan mandiri berbekal Al-Qur'an, sains, dan teknologi.
                </p>

                {{-- Action Buttons --}}
                <div class="pt-2 flex flex-wrap items-center justify-center gap-3 sm:gap-4">
                    <a href="#unit-sekolah" class="px-6 py-3.5 rounded-xl bg-gradient-to-r from-amber-400 to-yellow-500 hover:from-amber-300 hover:to-yellow-400 text-slate-950 font-black text-sm uppercase tracking-wider shadow-lg hover:shadow-amber-500/30 transition transform hover:-translate-y-0.5 flex items-center gap-2">
                        <i class="fa-solid fa-layer-group"></i>
                        <span>Pilih Unit Sekolah</span>
                        <i class="fa-solid fa-arrow-down text-xs"></i>
                    </a>
                    <a href="#struktur-yayasan" class="px-6 py-3.5 rounded-xl bg-white/10 hover:bg-white/20 border border-white/20 text-white font-bold text-sm tracking-wide transition flex items-center gap-2">
                        <i class="fa-solid fa-sitemap text-amber-300"></i>
                        <span>Struktur Yayasan</span>
                    </a>
                </div>

                {{-- Statistics Chips --}}
                <div class="pt-6 grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 max-w-2xl mx-auto text-center">
                    <div class="bg-white/5 border border-white/10 rounded-xl p-3 backdrop-blur-sm">
                        <span class="block text-xl sm:text-2xl font-black text-amber-400">3 Unit</span>
                        <span class="text-[11px] text-slate-300 uppercase tracking-wider font-semibold">TK, SD & SMP</span>
                    </div>
                    <div class="bg-white/5 border border-white/10 rounded-xl p-3 backdrop-blur-sm">
                        <span class="block text-xl sm:text-2xl font-black text-emerald-400">Terakreditasi</span>
                        <span class="text-[11px] text-slate-300 uppercase tracking-wider font-semibold">BAN-SM / PAUD</span>
                    </div>
                    <div class="bg-white/5 border border-white/10 rounded-xl p-3 backdrop-blur-sm">
                        <span class="block text-xl sm:text-2xl font-black text-cyan-400">JSIT</span>
                        <span class="text-[11px] text-slate-300 uppercase tracking-wider font-semibold">Jaringan Nasional</span>
                    </div>
                    <div class="bg-white/5 border border-white/10 rounded-xl p-3 backdrop-blur-sm">
                        <span class="block text-xl sm:text-2xl font-black text-amber-400">Tahfidz</span>
                        <span class="text-[11px] text-slate-300 uppercase tracking-wider font-semibold">Mutqin Bersanad</span>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ========================================================
         SECTION UTAMA: 3 AKSES SHOWCASE CARDS UNIT SEKOLAH
         ======================================================== --}}
    <section id="unit-sekolah" class="py-14 sm:py-20 bg-slate-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
                <span class="inline-block text-xs uppercase tracking-widest text-indigo-600 font-extrabold bg-indigo-50 border border-indigo-200 px-3.5 py-1 rounded-full mb-3 shadow-sm">
                    <i class="fa-solid fa-shapes mr-1.5 text-indigo-500"></i> Jenjang Pendidikan Terpadu
                </span>
                <h2 class="text-2xl sm:text-4xl font-black text-slate-900 tracking-tight uppercase">
                    Pilih Unit Pendidikan SIT Madani
                </h2>
                <p class="text-sm sm:text-base text-slate-600 mt-2 font-medium">
                    Silakan klik tombol kunjungi pada masing-masing unit sekolah di bawah ini untuk mengakses website resmi lengkap unit bersangkutan:
                </p>
            </div>

            {{-- 3 CARDS GRID --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 items-stretch">
                
                {{-- 1. CARD TKS IT MADANI --}}
                <div class="bg-white rounded-3xl border-2 border-amber-200 shadow-xl hover:shadow-2xl transition duration-300 flex flex-col justify-between overflow-hidden group hover:-translate-y-1">
                    {{-- Card Header --}}
                    <div class="p-6 bg-gradient-to-br from-amber-500 via-amber-600 to-yellow-600 text-white relative">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-md text-[11px] font-black uppercase tracking-wider">
                                PAUD / TK ISLAM TERPADU
                            </span>
                            <span class="px-2.5 py-1 rounded-full bg-amber-400 text-slate-950 text-[10px] font-black uppercase">
                                AKREDITASI B
                            </span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-black tracking-tight leading-snug">
                            TKS Islam Terpadu Madani
                        </h3>
                        <p class="text-xs text-amber-100 font-medium mt-1">
                            Kayuagung, Kabupaten Ogan Komering Ilir
                        </p>
                    </div>

                    {{-- Card Body --}}
                    <div class="p-6 space-y-5 flex-1 flex flex-col justify-between">
                        <div>
                            {{-- Kepala Sekolah --}}
                            <div class="flex items-center space-x-3.5 p-3 rounded-2xl bg-amber-50/70 border border-amber-100">
                                <img src="/uploads/dewan/bunda-ayu.webp" alt="Kepala TKS IT Madani" class="w-14 h-14 rounded-xl object-cover border-2 border-amber-400 shadow-sm shrink-0">
                                <div>
                                    <span class="text-[10px] uppercase font-bold text-amber-800 tracking-wider block">Kepala Sekolah</span>
                                    <h4 class="text-xs sm:text-sm font-black text-slate-900 leading-tight">Ayu Rahmayani, S.Pd.Gr.</h4>
                                    <span class="text-[11px] text-slate-500 block">Bunda Ayu • NIY: 01012021 02063</span>
                                </div>
                            </div>

                            {{-- Slogan & Visi --}}
                            <div class="mt-4">
                                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400 block mb-1">Visi & Slogan</span>
                                <p class="text-xs sm:text-sm font-bold text-slate-800 italic bg-slate-50 p-3 rounded-xl border border-slate-100">
                                    "Membentuk Generasi Rabbani yang Kreatif, Cerdas, dan Mandiri."
                                </p>
                            </div>

                            {{-- Highlight Keunggulan --}}
                            <ul class="mt-4 space-y-2 text-xs font-semibold text-slate-700">
                                <li class="flex items-center gap-2">
                                    <i class="fa-solid fa-check-circle text-amber-500"></i>
                                    <span>Sentra Ibadah, Sholat Dhuha & Tahfidz Cilik Juz 30</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fa-solid fa-check-circle text-amber-500"></i>
                                    <span>Sentra Seni, Kreativitas & Jurnal Gambar</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fa-solid fa-check-circle text-amber-500"></i>
                                    <span>Market Day & Entrepreneurship Cilik</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fa-solid fa-check-circle text-amber-500"></i>
                                    <span>Manasik Haji Cilik, Outbound & Fun Swimming</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fa-solid fa-check-circle text-amber-500"></i>
                                    <span>Deep Learning (Berkesadaran & Menggembirakan)</span>
                                </li>
                            </ul>
                        </div>

                        {{-- Metadata Chips --}}
                        <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500 font-semibold">
                            <span><i class="fa-solid fa-id-card text-amber-500 mr-1"></i> NPSN: 69915461</span>
                            <span><i class="fa-solid fa-calendar text-amber-500 mr-1"></i> Berdiri 2014</span>
                        </div>
                    </div>

                    {{-- Card Footer / Action Buttons --}}
                    <div class="p-6 bg-slate-50 border-t border-slate-100 space-y-2.5">
                        <a href="{{ route('unit.home', 'tk') }}" class="w-full py-3 px-4 rounded-xl bg-amber-500 hover:bg-amber-600 text-white font-black text-xs uppercase tracking-wider text-center shadow-md hover:shadow-lg transition flex items-center justify-center gap-2 group-hover:scale-[1.02]">
                            <i class="fa-solid fa-globe"></i>
                            <span>Kunjungi Website TKS IT Madani</span>
                            <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
                        </a>
                        <a href="{{ route('unit.ppdb', 'tk') }}" class="w-full py-2.5 px-4 rounded-xl bg-white hover:bg-amber-50 border border-amber-300 text-amber-700 font-bold text-xs uppercase tracking-wider text-center transition flex items-center justify-center gap-2">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>SPMB TKS IT Online</span>
                        </a>
                    </div>
                </div>


                {{-- 2. CARD SDS IT MADANI --}}
                <div class="bg-white rounded-3xl border-2 border-emerald-300 shadow-xl hover:shadow-2xl transition duration-300 flex flex-col justify-between overflow-hidden group hover:-translate-y-1 relative">
                    {{-- Badge Unggulan --}}
                    <div class="absolute top-0 right-0 z-10">
                        <span class="bg-emerald-600 text-white text-[10px] font-black uppercase px-4 py-1 rounded-bl-xl shadow-md">
                            13 Rombel • 293 Siswa
                        </span>
                    </div>

                    {{-- Card Header --}}
                    <div class="p-6 bg-gradient-to-br from-emerald-600 via-teal-700 to-emerald-800 text-white relative">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-md text-[11px] font-black uppercase tracking-wider">
                                SEKOLAH DASAR ISLAM TERPADU
                            </span>
                            <span class="px-2.5 py-1 rounded-full bg-yellow-400 text-slate-950 text-[10px] font-black uppercase mr-16">
                                AKREDITASI B
                            </span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-black tracking-tight leading-snug">
                            SDS Islam Terpadu Madani
                        </h3>
                        <p class="text-xs text-emerald-100 font-medium mt-1">
                            Kayuagung, Kabupaten Ogan Komering Ilir
                        </p>
                    </div>

                    {{-- Card Body --}}
                    <div class="p-6 space-y-5 flex-1 flex flex-col justify-between">
                        <div>
                            {{-- Kepala Sekolah & Komite --}}
                            <div class="flex items-center space-x-3.5 p-3 rounded-2xl bg-emerald-50/70 border border-emerald-100">
                                <img src="/uploads/dewan/ust-andi.webp" alt="Pimpinan SDS IT Madani" class="w-14 h-14 rounded-xl object-cover border-2 border-emerald-500 shadow-sm shrink-0">
                                <div>
                                    <span class="text-[10px] uppercase font-bold text-emerald-800 tracking-wider block">Pimpinan & Komite</span>
                                    <h4 class="text-xs sm:text-sm font-black text-slate-900 leading-tight">Yudhi Arsyandi, S.Pd., Gr.</h4>
                                    <span class="text-[11px] text-slate-500 block">Ketua Komite: Andi Kumaini, M.Pd.</span>
                                </div>
                            </div>

                            {{-- Slogan & Visi --}}
                            <div class="mt-4">
                                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400 block mb-1">Visi & Slogan</span>
                                <p class="text-xs sm:text-sm font-bold text-slate-800 italic bg-slate-50 p-3 rounded-xl border border-slate-100">
                                    "Membentuk Generasi Rabbani yang Berprestasi, Sholeh, Inovatif dan Mandiri."
                                </p>
                            </div>

                            {{-- Highlight Keunggulan --}}
                            <ul class="mt-4 space-y-2 text-xs font-semibold text-slate-700">
                                <li class="flex items-center gap-2">
                                    <i class="fa-solid fa-check-circle text-emerald-500"></i>
                                    <span>Target Hafalan 2 Juz Al-Qur'an (Juz 30 & 29 Mutqin)</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fa-solid fa-check-circle text-emerald-500"></i>
                                    <span>Hafalan 30 Hadits Harian & Pembiasaan Adab</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fa-solid fa-check-circle text-emerald-500"></i>
                                    <span>Laboratorium Komputer Modern & Pembekalan ANBK</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fa-solid fa-check-circle text-emerald-500"></i>
                                    <span>Bilingual Dasar: Bahasa Arab & Bahasa Inggris</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fa-solid fa-check-circle text-emerald-500"></i>
                                    <span>37 Tenaga Pendidik & Karyawan Berdedikasi</span>
                                </li>
                            </ul>
                        </div>

                        {{-- Metadata Chips --}}
                        <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500 font-semibold">
                            <span><i class="fa-solid fa-id-card text-emerald-600 mr-1"></i> NPSN: 69881529</span>
                            <span><i class="fa-solid fa-users text-emerald-600 mr-1"></i> 293 Murid Aktif</span>
                        </div>
                    </div>

                    {{-- Card Footer / Action Buttons --}}
                    <div class="p-6 bg-slate-50 border-t border-slate-100 space-y-2.5">
                        <a href="{{ route('unit.home', 'sd') }}" class="w-full py-3 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-black text-xs uppercase tracking-wider text-center shadow-md hover:shadow-lg transition flex items-center justify-center gap-2 group-hover:scale-[1.02]">
                            <i class="fa-solid fa-globe"></i>
                            <span>Kunjungi Website SDS IT Madani</span>
                            <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
                        </a>
                        <a href="{{ route('unit.ppdb', 'sd') }}" class="w-full py-2.5 px-4 rounded-xl bg-white hover:bg-emerald-50 border border-emerald-300 text-emerald-700 font-bold text-xs uppercase tracking-wider text-center transition flex items-center justify-center gap-2">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>SPMB SDS IT Online</span>
                        </a>
                    </div>
                </div>


                {{-- 3. CARD SMPS IT MADANI --}}
                <div class="bg-white rounded-3xl border-2 border-indigo-300 shadow-xl hover:shadow-2xl transition duration-300 flex flex-col justify-between overflow-hidden group hover:-translate-y-1">
                    {{-- Card Header --}}
                    <div class="p-6 bg-gradient-to-br from-indigo-900 via-indigo-950 to-blue-950 text-white relative">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-md text-[11px] font-black uppercase tracking-wider">
                                SMP IT & ASRAMA TAHFIDZ
                            </span>
                            <span class="px-2.5 py-1 rounded-full bg-amber-400 text-slate-950 text-[10px] font-black uppercase">
                                AKREDITASI B
                            </span>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-black tracking-tight leading-snug">
                            SMPS Islam Terpadu Madani
                        </h3>
                        <p class="text-xs text-indigo-200 font-medium mt-1">
                            Kayuagung, Kabupaten Ogan Komering Ilir
                        </p>
                    </div>

                    {{-- Card Body --}}
                    <div class="p-6 space-y-5 flex-1 flex flex-col justify-between">
                        <div>
                            {{-- Kepala Sekolah --}}
                            <div class="flex items-center space-x-3.5 p-3 rounded-2xl bg-indigo-50/70 border border-indigo-100">
                                <img src="/uploads/dewan/kepala-sekolah.webp" alt="Kepala SMPS IT Madani" class="w-14 h-14 rounded-xl object-cover border-2 border-indigo-600 shadow-sm shrink-0">
                                <div>
                                    <span class="text-[10px] uppercase font-bold text-indigo-800 tracking-wider block">Kepala Sekolah</span>
                                    <h4 class="text-xs sm:text-sm font-black text-slate-900 leading-tight">Ribang Imam Satria, S.Pi., Gr.</h4>
                                    <span class="text-[11px] text-slate-500 block">Ust. Ribang • Gr (Profesi Guru)</span>
                                </div>
                            </div>

                            {{-- Slogan & Visi --}}
                            <div class="mt-4">
                                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400 block mb-1">Visi & Slogan</span>
                                <p class="text-xs sm:text-sm font-bold text-slate-800 italic bg-slate-50 p-3 rounded-xl border border-slate-100">
                                    "Terbentuknya Generasi Qur'ani, Mandiri, Inovatif, Visioner, dan Moderat."
                                </p>
                            </div>

                            {{-- Highlight Keunggulan --}}
                            <ul class="mt-4 space-y-2 text-xs font-semibold text-slate-700">
                                <li class="flex items-center gap-2">
                                    <i class="fa-solid fa-check-circle text-indigo-600"></i>
                                    <span>Program Asrama Tahfidz (Boarding School) & Full Day</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fa-solid fa-check-circle text-indigo-600"></i>
                                    <span>Talaqqi & Tasmi' Al-Qur'an 30 Juz Bersanad</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fa-solid fa-check-circle text-indigo-600"></i>
                                    <span>Integrasi Kurikulum Merdeka & Kurikulum Khas JSIT</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fa-solid fa-check-circle text-indigo-600"></i>
                                    <span>Bina Pribadi Islami (BPI) & Islamic Student Camp</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <i class="fa-solid fa-check-circle text-indigo-600"></i>
                                    <span>Laboratorium Komputer, Riset Sains & Bahasa Asing</span>
                                </li>
                            </ul>
                        </div>

                        {{-- Metadata Chips --}}
                        <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500 font-semibold">
                            <span><i class="fa-solid fa-id-card text-indigo-600 mr-1"></i> NPSN: 70034917</span>
                            <span><i class="fa-solid fa-certificate text-indigo-600 mr-1"></i> NSS: 202110234917</span>
                        </div>
                    </div>

                    {{-- Card Footer / Action Buttons --}}
                    <div class="p-6 bg-slate-50 border-t border-slate-100 space-y-2.5">
                        <a href="{{ route('unit.home', 'smp') }}" class="w-full py-3 px-4 rounded-xl bg-indigo-900 hover:bg-indigo-950 text-white font-black text-xs uppercase tracking-wider text-center shadow-md hover:shadow-lg transition flex items-center justify-center gap-2 group-hover:scale-[1.02]">
                            <i class="fa-solid fa-globe"></i>
                            <span>Kunjungi Website SMPS IT Madani</span>
                            <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
                        </a>
                        <a href="{{ route('unit.ppdb', 'smp') }}" class="w-full py-2.5 px-4 rounded-xl bg-white hover:bg-indigo-50 border border-indigo-300 text-indigo-800 font-bold text-xs uppercase tracking-wider text-center transition flex items-center justify-center gap-2">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>SPMB SMPS IT Online</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ========================================================
         SECTION: SAMBUTAN KETUA YAYASAN AGUNG MADANI
         ======================================================== --}}
    <section class="py-14 sm:py-20 bg-white border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-indigo-950 to-slate-900 text-white rounded-3xl p-6 sm:p-12 shadow-2xl relative overflow-hidden">
                <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    {{-- Foto Ketua Yayasan --}}
                    <div class="lg:col-span-4 flex flex-col items-center text-center">
                        <div class="relative w-44 h-44 sm:w-56 sm:h-56 rounded-3xl overflow-hidden border-4 border-amber-400 shadow-2xl bg-slate-800">
                            <img src="/uploads/dewan/ust-legianto.webp" alt="Drs. H. Legianto, M.E.E. - Ketua Yayasan Agung Madani" class="w-full h-full object-cover">
                        </div>
                        <div class="mt-4">
                            <h3 class="text-base sm:text-lg font-black text-amber-300">Drs. H. Legianto, M.E.E.</h3>
                            <span class="text-xs text-slate-300 font-semibold uppercase tracking-wider block">Ketua Yayasan Agung Madani Kayuagung</span>
                        </div>
                    </div>

                    {{-- Isi Sambutan --}}
                    <div class="lg:col-span-8 space-y-4">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-white/10 text-amber-300 text-xs font-bold uppercase tracking-wider">
                            <i class="fa-solid fa-quote-left"></i>
                            <span>Sambutan Pimpinan Lembaga</span>
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-black text-white tracking-tight">
                            Mewujudkan Ekosistem Pendidikan Islam Terpadu Satu Atap di Kabupaten OKI
                        </h2>
                        <div class="text-sm sm:text-base text-slate-300 leading-relaxed space-y-3 font-normal">
                            <p>
                                <em>Bismillahirrohmanirrohim. Alhamdulillahi Rabbil 'Alamin.</em>
                            </p>
                            <p>
                                Yayasan Agung Madani Kayuagung didirikan atas dasar komitmen tulus memajukan kualitas generasi masa depan bangsa di Kabupaten Ogan Komering Ilir. Kami meyakini bahwa pendidikan anak usia dini hingga remaja merupakan masa emas untuk meletakkan fondasi iman, takwa, adab Qur'ani, serta ketajaman nalar intelektual.
                            </p>
                            <p>
                                Melalui 3 unit pendidikan di bawah naungan yayasan: <strong>TKS IT Madani, SDS IT Madani, dan SMPS IT Madani</strong>, kami membangun kesinambungan kurikulum terpadu khas JSIT Indonesia. Anak-anak dibimbing secara berjenjang dari pembiasaan ibadah dan tahfidz cilik, penguasaan hafalan 2 juz dan hadits di sekolah dasar, hingga pematangan tahfidz bersanad dan kepemimpinan di tingkat menengah pertama.
                            </p>
                        </div>
                        <div class="pt-2">
                            <span class="text-xs text-amber-400 font-bold block">Wassalamu'alaikum Warahmatullahi Wabarakatuh</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ========================================================
         SECTION: STRUKTUR ORGANISASI YAYASAN AGUNG MADANI
         ======================================================== --}}
    <section id="struktur-yayasan" class="py-14 sm:py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-xs uppercase tracking-widest text-indigo-600 font-extrabold bg-indigo-50 border border-indigo-200 px-3.5 py-1 rounded-full mb-3 inline-block">
                    <i class="fa-solid fa-sitemap mr-1"></i> Bagan Kelembagaan
                </span>
                <h2 class="text-2xl sm:text-4xl font-black text-slate-900 tracking-tight uppercase">
                    Struktur Organisasi Yayasan Agung Madani
                </h2>
                <p class="text-sm text-slate-600 mt-2 font-medium">
                    Berdasarkan Akta Pendirian dan Keputusan Organ Yayasan Agung Madani Kayuagung
                </p>
            </div>

            {{-- Organ Yayasan Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                {{-- Pembina --}}
                <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-md">
                    <div class="flex items-center gap-3 mb-4 pb-3 border-b border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-700 flex items-center justify-center font-black">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div>
                            <h3 class="text-base font-black text-slate-900 uppercase">Dewan Pembina</h3>
                            <span class="text-xs text-slate-500 font-medium">Pengarah Kebijakan Yayasan</span>
                        </div>
                    </div>
                    <ul class="space-y-2 text-xs font-bold text-slate-700">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-user-check text-indigo-600 text-[10px]"></i> Ustad H. Husnul Anam, S.H.I.</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-user-check text-indigo-600 text-[10px]"></i> Dr. H. Abdul Gofar, S.Pd., M.Pd.I.</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-user-check text-indigo-600 text-[10px]"></i> Ustad Rinto Andrian Usman, S.Pd.I.</li>
                    </ul>
                </div>

                {{-- Pengurus Harian --}}
                <div class="bg-white rounded-2xl p-6 border-2 border-indigo-200 shadow-lg">
                    <div class="flex items-center gap-3 mb-4 pb-3 border-b border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center font-black">
                            <i class="fa-solid fa-users-gear"></i>
                        </div>
                        <div>
                            <h3 class="text-base font-black text-slate-900 uppercase">Pengurus Yayasan</h3>
                            <span class="text-xs text-amber-600 font-bold">Pelaksana Harian</span>
                        </div>
                    </div>
                    <ul class="space-y-2.5 text-xs text-slate-800">
                        <li class="flex items-start justify-between">
                            <span class="text-slate-500 font-medium">Ketua:</span>
                            <span class="font-bold text-slate-900">Drs. H. Legianto, M.E.E.</span>
                        </li>
                        <li class="flex items-start justify-between">
                            <span class="text-slate-500 font-medium">Sekretaris:</span>
                            <span class="font-bold text-slate-900">Yessi, S.H., M.H.</span>
                        </li>
                        <li class="flex items-start justify-between">
                            <span class="text-slate-500 font-medium">Bendahara:</span>
                            <span class="font-bold text-slate-900">Nurul Ramadhani, S.H.</span>
                        </li>
                    </ul>
                </div>

                {{-- Pengawas --}}
                <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-md">
                    <div class="flex items-center gap-3 mb-4 pb-3 border-b border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-black">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <div>
                            <h3 class="text-base font-black text-slate-900 uppercase">Dewan Pengawas</h3>
                            <span class="text-xs text-slate-500 font-medium">Audit & Pengawasan Mutu</span>
                        </div>
                    </div>
                    <ul class="space-y-2 text-xs font-bold text-slate-700">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-user-check text-emerald-600 text-[10px]"></i> Assoc. Prof. Dr. H. Husnul Amin, Lc., M.M., M.H.I.</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-user-check text-emerald-600 text-[10px]"></i> Hendri Suriyanto, S.Pd., M.Pd.</li>
                    </ul>
                </div>
            </div>

            {{-- Direktorat Yayasan --}}
            <div class="bg-gradient-to-r from-indigo-900 to-blue-900 text-white rounded-2xl p-6 sm:p-8 shadow-xl">
                <div class="text-center mb-6">
                    <span class="text-xs uppercase font-extrabold tracking-widest text-amber-300 block mb-1">Manajemen Operasional</span>
                    <h3 class="text-xl sm:text-2xl font-black uppercase tracking-tight">Direktorat Yayasan Agung Madani</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white/10 rounded-2xl p-5 border border-white/15">
                        <div class="flex items-center gap-3 mb-2">
                            <i class="fa-solid fa-graduation-cap text-amber-400 text-xl"></i>
                            <div>
                                <h4 class="text-base font-black text-white">Direktur Pendidikan</h4>
                                <span class="text-xs text-amber-300 font-bold">Wahyudi, S.Sos.I.</span>
                            </div>
                        </div>
                        <p class="text-xs text-slate-200 leading-relaxed">
                            Membawahi dan mengoordinasikan mutu akademik, kurikulum JSIT, pembinaan guru, serta kegiatan kesiswaan seluruh unit TKS IT Madani, SDS IT Madani, dan SMPS IT Madani.
                        </p>
                    </div>

                    <div class="bg-white/10 rounded-2xl p-5 border border-white/15">
                        <div class="flex items-center gap-3 mb-2">
                            <i class="fa-solid fa-building-columns text-amber-400 text-xl"></i>
                            <div>
                                <h4 class="text-base font-black text-white">Direktur Sarana & Prasarana</h4>
                                <span class="text-xs text-amber-300 font-bold">Kosim Abduh, S.Pd.I.</span>
                            </div>
                        </div>
                        <p class="text-xs text-slate-200 leading-relaxed">
                            Mengelola gedung kampus terpadu, laboratorium, perlengkapan belajar, pemeliharaan prasarana, serta rencana pembangunan fasilitas pendidikan yayasan.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    {{-- ========================================================
         SECTION: SINERGI KURIKULUM 3 JENJANG
         ======================================================== --}}
    <section class="py-14 sm:py-20 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-xs uppercase tracking-widest text-amber-600 font-extrabold bg-amber-50 border border-amber-200 px-3.5 py-1 rounded-full mb-3 inline-block">
                    <i class="fa-solid fa-award mr-1"></i> Standar Mutu Pendidikan
                </span>
                <h2 class="text-2xl sm:text-4xl font-black text-slate-900 tracking-tight uppercase">
                    Keunggulan Pendidikan Terpadu SIT Madani
                </h2>
                <p class="text-sm text-slate-600 mt-2 font-medium">
                    Kurikulum terintegrasi dari TK, SD, hingga SMP menjamin pembentukan karakter yang kokoh dan berkesinambungan.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center text-xl font-bold mb-4">
                        <i class="fa-solid fa-quran"></i>
                    </div>
                    <h3 class="text-base font-black text-slate-900 mb-2">Tahfidz Al-Qur'an Bertahap</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Mulai dari hafalan surat pendek di TK, target 2 juz mutqin di SD, hingga program asrama tahfidz bersanad di jenjang SMP.
                    </p>
                </div>

                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center text-xl font-bold mb-4">
                        <i class="fa-solid fa-hands-praying"></i>
                    </div>
                    <h3 class="text-base font-black text-slate-900 mb-2">Pembiasaan Ibadah Yaumiyah</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Sholat berjamaah, dhuha, tadarus Al-Qur'an, adab islami, serta kepanduan Pramuka SIT untuk membentuk adab mulia.
                    </p>
                </div>

                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-xl font-bold mb-4">
                        <i class="fa-solid fa-flask"></i>
                    </div>
                    <h3 class="text-base font-black text-slate-900 mb-2">Sains, Riset & Numerasi</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Mengasah logika dan nalar kritis siswa melalui praktikum sains, bimbingan olimpiade OSN, dan riset ilmiah remaja.
                    </p>
                </div>

                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center text-xl font-bold mb-4">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <h3 class="text-base font-black text-slate-900 mb-2">Digital & Bahasa Asing</h3>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Laboratorium komputer modern untuk literasi digital, pengenalan TIK, dan pembiasaan percakapan Bahasa Arab & Inggris.
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{-- ========================================================
         SECTION: KABAR & ARTIKEL TERBARU YAYASAN
         ======================================================== --}}
    @if(isset($latestPosts) && $latestPosts->isNotEmpty())
    <section class="py-14 sm:py-20 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8 gap-4">
                <div>
                    <span class="text-xs uppercase tracking-widest text-indigo-600 font-extrabold bg-indigo-50 border border-indigo-200 px-3 py-1 rounded-full mb-2 inline-block">
                        <i class="fa-solid fa-newspaper mr-1"></i> Warta Kampus
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 uppercase">
                        Berita & Kegiatan SIT Madani
                    </h2>
                </div>
                <a href="{{ route('artikel.index') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-indigo-700 hover:text-indigo-900">
                    <span>Lihat Semua Berita</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($latestPosts->take(3) as $post)
                <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-md hover:shadow-xl transition flex flex-col justify-between">
                    <div>
                        <div class="h-44 overflow-hidden bg-slate-100">
                            <img src="{{ $post->featured_image ?? '/uploads/campus-sit-madani.webp' }}" alt="{{ $post->title }}" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                        </div>
                        <div class="p-5">
                            <span class="text-[10px] uppercase font-bold text-amber-600 block mb-1">
                                {{ $post->created_at ? $post->created_at->translatedFormat('d F Y') : 'Terbaru' }}
                            </span>
                            <h3 class="text-sm font-black text-slate-900 line-clamp-2 leading-snug hover:text-indigo-600 transition">
                                <a href="{{ route('artikel.show', $post->slug) }}">{{ $post->title }}</a>
                            </h3>
                            <p class="text-xs text-slate-600 line-clamp-2 mt-2">
                                {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 90) }}
                            </p>
                        </div>
                    </div>
                    <div class="px-5 pb-5 pt-0">
                        <a href="{{ route('artikel.show', $post->slug) }}" class="text-xs font-bold text-indigo-600 hover:text-indigo-800 inline-flex items-center gap-1">
                            <span>Baca Selengkapnya</span>
                            <i class="fa-solid fa-chevron-right text-[9px]"></i>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif


    {{-- ========================================================
         SECTION: CTA PENERIMAAN MURID BARU (SPMB TERPADU)
         ======================================================== --}}
    <section class="py-14 sm:py-20 bg-gradient-to-br from-indigo-950 via-indigo-900 to-blue-950 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 space-y-6">
            <span class="inline-block px-4 py-1.5 rounded-full bg-white/10 text-amber-300 text-xs font-bold uppercase tracking-wider border border-white/20">
                Penerimaan Santri Baru TP 2026/2027
            </span>
            <h2 class="text-2xl sm:text-4xl font-black text-white tracking-tight uppercase max-w-2xl mx-auto">
                Daftarkan Putra-Putri Anda di Sekolah Islam Terpadu Madani
            </h2>
            <p class="text-sm sm:text-base text-indigo-100 max-w-xl mx-auto font-medium">
                Pilih jenjang yang Anda tuju dan isi formulir pendaftaran secara online dengan cepat, mudah, dan transparan.
            </p>

            <div class="pt-4 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('unit.ppdb', 'tk') }}" class="px-5 py-3 rounded-xl bg-amber-500 hover:bg-amber-400 text-slate-950 font-black text-xs uppercase tracking-wider shadow-lg transition flex items-center gap-2">
                    <i class="fa-solid fa-shapes"></i>
                    <span>Daftar SPMB TKS IT</span>
                </a>
                <a href="{{ route('unit.ppdb', 'sd') }}" class="px-5 py-3 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-black text-xs uppercase tracking-wider shadow-lg transition flex items-center gap-2">
                    <i class="fa-solid fa-book-open"></i>
                    <span>Daftar SPMB SDS IT</span>
                </a>
                <a href="{{ route('unit.ppdb', 'smp') }}" class="px-5 py-3 rounded-xl bg-amber-400 hover:bg-amber-300 text-slate-950 font-black text-xs uppercase tracking-wider shadow-lg transition flex items-center gap-2">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span>Daftar SPMB SMPS IT</span>
                </a>
            </div>
        </div>
    </section>

</main>
@endsection
