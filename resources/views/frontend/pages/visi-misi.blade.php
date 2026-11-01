@extends('layouts.frontend')

@section('title', 'Visi dan Misi - Yayasan Agung Madani & Sekolah Islam Terpadu Madani')
@section('meta_description', 'Visi, misi, dan tujuan luhur Yayasan Agung Madani, TKS IT Madani, SDS IT Madani, dan SMPS IT Madani Kayuagung.')

@section('content')
{{-- HERO HEADER --}}
<div class="bg-gradient-to-r from-indigo-950 via-indigo-900 to-blue-950 border-b border-indigo-500/20 text-white py-10 sm:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left">
        <nav class="text-xs text-indigo-200 mb-3 flex items-center justify-center sm:justify-start space-x-2 flex-wrap">
            <a href="{{ route('home') }}" class="hover:text-white transition">Beranda</a>
            <span>/</span>
            <span>Profil</span>
            <span>/</span>
            <span class="text-amber-300 font-semibold">Visi &amp; Misi</span>
        </nav>
        <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">Visi &amp; Misi Lembaga &amp; Sekolah</h1>
        <p class="text-xs sm:text-sm text-indigo-100 mt-2 font-light max-w-2xl mx-auto sm:mx-0">
            Arah dan komitmen luhur Yayasan Agung Madani serta seluruh unit pendidikan (TKS, SDS, SMPS IT Madani) dalam membina generasi robbani berkarakter Qur'ani dan visioner.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-8 sm:py-14">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-10">
        
        {{-- KOLOM UTAMA (2/3) --}}
        <div class="lg:col-span-8 space-y-8">
            @if($page && !empty($page->content))
            <article class="bg-white rounded-3xl p-6 sm:p-10 shadow-xl border border-gray-100 prose-content">
                @if(!empty($page->title))
                    <h2 class="text-xl sm:text-2xl font-black text-gray-900 mb-4">{{ $page->title }}</h2>
                @endif
                {!! $page->content !!}
            </article>
            @endif

            {{-- 1. VISI & MISI YAYASAN AGUNG MADANI --}}
            <article class="bg-white rounded-3xl p-6 sm:p-10 shadow-xl border border-gray-100 space-y-6">
                <div class="border-b border-gray-100 pb-4">
                    <span class="text-xs font-bold text-amber-500 uppercase tracking-wider block">Badan Penyelenggara</span>
                    <h2 class="text-xl sm:text-2xl font-black text-gray-900 tracking-tight mt-1 flex items-center">
                        <i class="fa-solid fa-landmark text-indigo-600 mr-2"></i> Yayasan Agung Madani Kayuagung
                    </h2>
                </div>

                <div class="bg-gradient-to-r from-indigo-50 to-amber-50/60 p-6 rounded-2xl border-l-4 border-indigo-600 shadow-sm">
                    <h3 class="text-xs font-black uppercase text-indigo-900 tracking-wider mb-1">Visi Yayasan</h3>
                    <p class="text-base sm:text-lg font-bold text-gray-900 italic font-serif leading-relaxed">
                        “Menjadi Yayasan Pendidikan Islam Terkemuka yang Melahirkan Generasi Rabbani Berkualitas Tinggi, Berakhlak Mulia, dan Unggul Menghadapi Era Global.”
                    </p>
                </div>

                <div class="space-y-3">
                    <h3 class="text-sm font-bold text-gray-900 uppercase tracking-wider">Misi Yayasan</h3>
                    <ul class="space-y-2 text-xs sm:text-sm text-gray-700">
                        <li class="flex items-start space-x-2.5">
                            <i class="fa-solid fa-circle-check text-indigo-600 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Menyelenggarakan pendidikan Islam terpadu yang berkualitas dari jenjang PAUD/TK, SD, hingga SMP.</span>
                        </li>
                        <li class="flex items-start space-x-2.5">
                            <i class="fa-solid fa-circle-check text-indigo-600 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Menyediakan sarana dan prasarana pendidikan yang modern, representatif, islami, dan asri.</span>
                        </li>
                        <li class="flex items-start space-x-2.5">
                            <i class="fa-solid fa-circle-check text-indigo-600 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Meningkatkan kompetensi, profesionalitas, dan kesejahteraan seluruh tenaga pendidik dan kependidikan.</span>
                        </li>
                        <li class="flex items-start space-x-2.5">
                            <i class="fa-solid fa-circle-check text-indigo-600 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Membangun sinergi kokoh dengan orang tua, masyarakat, pemerintah, dan Jaringan Sekolah Islam Terpadu (JSIT) Indonesia.</span>
                        </li>
                    </ul>
                </div>
            </article>

            {{-- 2. VISI & MISI TKS IT MADANI --}}
            <article class="bg-white rounded-3xl p-6 sm:p-10 shadow-xl border border-gray-100 space-y-6">
                <div class="border-b border-amber-100 pb-4 flex items-center justify-between">
                    <div>
                        <span class="text-xs font-bold text-amber-500 uppercase tracking-wider block">PAUD / TK Islam Terpadu</span>
                        <h2 class="text-xl sm:text-2xl font-black text-gray-900 tracking-tight mt-1 flex items-center">
                            <i class="fa-solid fa-shapes text-amber-500 mr-2"></i> TKS IT Madani Kayuagung
                        </h2>
                    </div>
                    <a href="{{ route('unit.tk') }}" class="text-xs font-bold text-amber-600 hover:underline">Web TK &rarr;</a>
                </div>

                <div class="bg-amber-50/70 p-6 rounded-2xl border-l-4 border-amber-500 shadow-sm">
                    <h3 class="text-xs font-black uppercase text-amber-900 tracking-wider mb-1">Visi TKS IT Madani</h3>
                    <p class="text-base sm:text-lg font-bold text-gray-900 italic font-serif leading-relaxed">
                        “Membentuk Generasi Rabbani yang Kreatif, Cerdas, dan Mandiri.”
                    </p>
                </div>

                <div class="space-y-3">
                    <h3 class="text-sm font-bold text-gray-900 uppercase tracking-wider">Misi Pembelajaran Sentra &amp; Karakter TK</h3>
                    <ul class="space-y-2 text-xs sm:text-sm text-gray-700">
                        <li class="flex items-start space-x-2.5">
                            <i class="fa-solid fa-star text-amber-500 mt-1 flex-shrink-0 text-xs"></i>
                            <span><strong>Membiasakan Ibadah Harian:</strong> Sholat dhuha, doa harian, hafalan surat pendek, hadits anak, dan infaq Jumat.</span>
                        </li>
                        <li class="flex items-start space-x-2.5">
                            <i class="fa-solid fa-star text-amber-500 mt-1 flex-shrink-0 text-xs"></i>
                            <span><strong>Membentuk Akhlak Karimah:</strong> Jumat Sejahtera, berbagi berkah, latihan kurban, dan adab santun.</span>
                        </li>
                        <li class="flex items-start space-x-2.5">
                            <i class="fa-solid fa-star text-amber-500 mt-1 flex-shrink-0 text-xs"></i>
                            <span><strong>Mengembangkan Daya Imajinasi &amp; Seni:</strong> Melalui sentra bermain peran, bercerita, jurnal lukis, dan berkebun.</span>
                        </li>
                        <li class="flex items-start space-x-2.5">
                            <i class="fa-solid fa-star text-amber-500 mt-1 flex-shrink-0 text-xs"></i>
                            <span><strong>Pendekatan Deep Learning:</strong> Pembelajaran bermakna, berkesadaran, dan menggembirakan sesuai fase tumbuh kembang anak usia dini.</span>
                        </li>
                    </ul>
                </div>
            </article>

            {{-- 3. VISI & MISI SDS IT MADANI --}}
            <article class="bg-white rounded-3xl p-6 sm:p-10 shadow-xl border border-gray-100 space-y-6">
                <div class="border-b border-emerald-100 pb-4 flex items-center justify-between">
                    <div>
                        <span class="text-xs font-bold text-emerald-600 uppercase tracking-wider block">Sekolah Dasar Islam Terpadu</span>
                        <h2 class="text-xl sm:text-2xl font-black text-gray-900 tracking-tight mt-1 flex items-center">
                            <i class="fa-solid fa-book-open-reader text-emerald-600 mr-2"></i> SDS IT Madani Kayuagung
                        </h2>
                    </div>
                    <a href="{{ route('unit.sd') }}" class="text-xs font-bold text-emerald-600 hover:underline">Web SD &rarr;</a>
                </div>

                <div class="bg-emerald-50/70 p-6 rounded-2xl border-l-4 border-emerald-600 shadow-sm">
                    <h3 class="text-xs font-black uppercase text-emerald-900 tracking-wider mb-1">Visi SDS IT Madani</h3>
                    <p class="text-base sm:text-lg font-bold text-gray-900 italic font-serif leading-relaxed">
                        “Membentuk Generasi Rabbani yang Berprestasi, Sholeh, Inovatif dan Mandiri.”
                    </p>
                </div>

                <div class="space-y-3">
                    <h3 class="text-sm font-bold text-gray-900 uppercase tracking-wider">Misi Pembelajaran Terpadu SD</h3>
                    <ul class="space-y-2 text-xs sm:text-sm text-gray-700">
                        <li class="flex items-start space-x-2.5">
                            <i class="fa-solid fa-check text-emerald-600 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Membangun Atmosfer Belajar yang Islami dan Kondusif.</span>
                        </li>
                        <li class="flex items-start space-x-2.5">
                            <i class="fa-solid fa-check text-emerald-600 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Membangun Kepercayaan Diri Siswa dan Civitas Akademika SIT Madani.</span>
                        </li>
                        <li class="flex items-start space-x-2.5">
                            <i class="fa-solid fa-check text-emerald-600 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Membangun Kreatifitas dan Inovasi Siswa dalam Sains, Bahasa, dan Al-Qur'an.</span>
                        </li>
                        <li class="flex items-start space-x-2.5">
                            <i class="fa-solid fa-check text-emerald-600 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Mengembangkan Budaya Belajar untuk Belajar dengan Target Hafal 2 Juz Al-Qur'an dan 30 Hadits Adab.</span>
                        </li>
                    </ul>
                </div>
            </article>

            {{-- 4. VISI & MISI SMPS IT MADANI --}}
            <article class="bg-white rounded-3xl p-6 sm:p-10 shadow-xl border border-gray-100 space-y-6">
                <div class="border-b border-blue-100 pb-4 flex items-center justify-between">
                    <div>
                        <span class="text-xs font-bold text-blue-600 uppercase tracking-wider block">Sekolah Menengah Pertama Islam Terpadu &amp; Boarding</span>
                        <h2 class="text-xl sm:text-2xl font-black text-gray-900 tracking-tight mt-1 flex items-center">
                            <i class="fa-solid fa-graduation-cap text-blue-600 mr-2"></i> SMPS IT Madani Kayuagung
                        </h2>
                    </div>
                    <a href="{{ route('unit.smp') }}" class="text-xs font-bold text-blue-600 hover:underline">Web SMP &rarr;</a>
                </div>

                <div class="bg-blue-50/70 p-6 rounded-2xl border-l-4 border-blue-600 shadow-sm">
                    <h3 class="text-xs font-black uppercase text-blue-900 tracking-wider mb-1">Visi SMPS IT Madani</h3>
                    <p class="text-base sm:text-lg font-bold text-gray-900 italic font-serif leading-relaxed">
                        “Terbentuknya Generasi Qur'ani, Mandiri, Inovatif, Visioner, dan Moderat Berbekal Ilmu Pengetahuan dan Teknologi.”
                    </p>
                </div>

                <div class="space-y-3">
                    <h3 class="text-sm font-bold text-gray-900 uppercase tracking-wider">Misi Pembelajaran &amp; Tahfidz SMP</h3>
                    <ul class="space-y-2 text-xs sm:text-sm text-gray-700">
                        <li class="flex items-start space-x-2.5">
                            <i class="fa-solid fa-award text-blue-600 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Membangun Atmosfer Belajar Yang Islami, Dinamis, dan Menyenangkan.</span>
                        </li>
                        <li class="flex items-start space-x-2.5">
                            <i class="fa-solid fa-award text-blue-600 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Melahirkan Generasi Unggulan yang Memiliki Semangat Pembaharuan, Berjiwa Pemimpin dan Berwawasan Luas.</span>
                        </li>
                        <li class="flex items-start space-x-2.5">
                            <i class="fa-solid fa-award text-blue-600 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Menjadi Lembaga Modern, Terdepan dalam Penguasaan Bahasa Arab, Bahasa Inggris, Matematika, Sains, dan Al-Qur'an.</span>
                        </li>
                        <li class="flex items-start space-x-2.5">
                            <i class="fa-solid fa-award text-blue-600 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Berpartisipasi Aktif dan Bertanggung Jawab dalam Proses Rekonstruksi Perbaikan Masyarakat, Bangsa dan Negara.</span>
                        </li>
                    </ul>
                </div>
            </article>

        </div>

        {{-- SIDEBAR KANAN (1/3) --}}
        <div class="lg:col-span-4 space-y-8">
            
            {{-- WIDGET UNIT SEKOLAH --}}
            <div class="bg-gradient-to-br from-indigo-950 via-indigo-900 to-blue-950 rounded-3xl p-6 text-white shadow-xl">
                <span class="text-xs uppercase tracking-wider text-amber-300 font-bold block mb-1">Akses Langsung</span>
                <h3 class="text-lg font-black mb-4">Website Unit Pendidikan</h3>
                <div class="space-y-2.5">
                    <a href="{{ route('unit.tk') }}" class="block p-3 rounded-xl bg-white/10 hover:bg-white/20 transition flex items-center justify-between">
                        <span class="font-bold text-xs"><i class="fa-solid fa-shapes text-amber-400 mr-2"></i> TKS IT Madani</span>
                        <i class="fa-solid fa-arrow-right text-xs text-amber-300"></i>
                    </a>
                    <a href="{{ route('unit.sd') }}" class="block p-3 rounded-xl bg-white/10 hover:bg-white/20 transition flex items-center justify-between">
                        <span class="font-bold text-xs"><i class="fa-solid fa-book-open-reader text-emerald-400 mr-2"></i> SDS IT Madani</span>
                        <i class="fa-solid fa-arrow-right text-xs text-emerald-300"></i>
                    </a>
                    <a href="{{ route('unit.smp') }}" class="block p-3 rounded-xl bg-white/10 hover:bg-white/20 transition flex items-center justify-between">
                        <span class="font-bold text-xs"><i class="fa-solid fa-graduation-cap text-blue-400 mr-2"></i> SMPS IT Madani</span>
                        <i class="fa-solid fa-arrow-right text-xs text-blue-300"></i>
                    </a>
                </div>
            </div>

            {{-- WIDGET ARTIKEL TERBARU --}}
            <div class="bg-white rounded-3xl p-6 shadow-xl border border-gray-100">
                <div class="flex items-center justify-between pb-4 border-b border-gray-100 mb-5">
                    <h3 class="font-extrabold text-gray-900 text-sm">Kabar Sekolah</h3>
                    <a href="{{ route('artikel.index') }}" class="text-xs font-bold text-indigo-600 hover:text-amber-500">
                        Semua &rarr;
                    </a>
                </div>

                <div class="space-y-4">
                    @forelse($latestPosts ?? [] as $lp)
                        <a href="{{ route('artikel.show', $lp->slug) }}" class="flex items-center space-x-3 group">
                            <div class="w-14 h-14 rounded-xl overflow-hidden bg-gray-100 flex-shrink-0">
                                <img src="{{ $lp->featured_image }}" alt="{{ $lp->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-300" onerror="this.onerror=null; this.src='/uploads/campus-sit-madani.webp'">
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-gray-800 group-hover:text-indigo-600 transition line-clamp-2 leading-snug">
                                    {{ $lp->title }}
                                </h4>
                                <span class="text-[10px] text-gray-400 block mt-1">
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
            <div class="bg-white rounded-3xl p-6 shadow-xl border border-gray-100">
                <div class="flex items-center justify-between pb-4 border-b border-gray-100 mb-5">
                    <h3 class="font-extrabold text-gray-900 text-sm">Agenda Sekolah</h3>
                    <a href="{{ route('agenda.index') }}" class="text-xs font-bold text-indigo-600 hover:text-amber-500">
                        Lihat Semua &rarr;
                    </a>
                </div>

                <div class="space-y-4">
                    @forelse($latestAgendas ?? [] as $la)
                        <a href="{{ route('agenda.show', $la->slug) }}" class="flex items-start space-x-3 group p-3 rounded-xl hover:bg-indigo-50/50 transition">
                            <div class="w-12 h-12 rounded-xl bg-emerald-100 text-indigo-600 flex flex-col items-center justify-center flex-shrink-0 font-bold text-xs">
                                <span class="text-sm font-extrabold leading-none">{{ $la->event_date ? $la->event_date->format('d') : '01' }}</span>
                                <span class="text-[9px] uppercase">{{ $la->event_date ? $la->event_date->translatedFormat('M') : 'SMP' }}</span>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-gray-800 group-hover:text-indigo-600 transition line-clamp-2 leading-snug">
                                    {{ $la->title }}
                                </h4>
                                <span class="text-[11px] text-gray-400 block mt-1">
                                    <i class="fa-solid fa-location-dot mr-1 text-orange-400"></i> {{ $la->location ?: 'Sekolah SMPS IT Madani Kayuagung' }}
                                </span>
                            </div>
                        </a>
                    @empty
                        <p class="text-xs text-gray-400 text-center py-4">Belum ada agenda terdekat.</p>
                    @endforelse
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
