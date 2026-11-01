@extends('layouts.frontend')

@section('title', 'Yayasan Agung Madani Kayuagung - Sekolah Islam Terpadu Madani (TK • SD • SMP)')
@section('meta_description', 'Portal Resmi Yayasan Agung Madani Kayuagung. Menaungi TKS IT Madani, SDS IT Madani, dan SMPS IT Madani di Kabupaten Ogan Komering Ilir, Sumatera Selatan.')

@section('content')
<main id="main-content" class="w-full overflow-hidden bg-slate-50">

    {{-- ========================================================
         HERO SECTION: RESPONSIVE IMAGE SLIDER YAYASAN AGUNG MADANI
         ======================================================== --}}
    <section class="relative w-full overflow-hidden bg-slate-950 text-white border-b border-indigo-900/60 shadow-2xl" 
             x-data="{
                 activeSlide: 0,
                 slidesCount: {{ count($heroSlides ?? []) }},
                 autoplayInterval: null,
                 isPaused: false,
                 init() {
                     if (this.slidesCount > 1) {
                         this.startAutoplay();
                     }
                 },
                 startAutoplay() {
                     this.stopAutoplay();
                     this.autoplayInterval = setInterval(() => {
                         if (!this.isPaused) {
                             this.next();
                         }
                     }, 6000);
                 },
                 stopAutoplay() {
                     if (this.autoplayInterval) {
                         clearInterval(this.autoplayInterval);
                         this.autoplayInterval = null;
                     }
                 },
                 next() {
                     this.activeSlide = (this.activeSlide + 1) % this.slidesCount;
                 },
                 prev() {
                     this.activeSlide = (this.activeSlide - 1 + this.slidesCount) % this.slidesCount;
                 },
                 goTo(idx) {
                     this.activeSlide = idx;
                 }
             }"
             @mouseenter="isPaused = true" 
             @mouseleave="isPaused = false"
             style="min-height: 580px;">

        {{-- Slides Container --}}
        <div class="relative w-full h-full min-h-[580px] sm:min-h-[620px] md:min-h-[660px] flex items-center">
            @foreach($heroSlides ?? [] as $idx => $slide)
            <div x-show="activeSlide === {{ $idx }}" 
                 x-transition:enter="transition ease-out duration-700"
                 x-transition:enter-start="opacity-0 scale-102"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-98"
                 class="absolute inset-0 w-full h-full flex items-center justify-center"
                 style="{{ $idx === 0 ? '' : 'display: none;' }}">
                
                {{-- Background Image with Fallback --}}
                <img src="{{ $slide['image'] ?? '/uploads/hero-slide-yayasan-1.webp' }}" 
                     alt="{{ $slide['title'] ?? 'Yayasan Agung Madani' }}" 
                     class="absolute inset-0 w-full h-full object-cover select-none pointer-events-none transform scale-105"
                     onerror="this.onerror=null; this.src='/uploads/campus-sit-madani.webp';">

                {{-- Triple-Layer Gradient Overlays ensuring crisp contrast & zero white text collision --}}
                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-indigo-950/85 to-blue-950/80" 
                     style="background: linear-gradient(135deg, rgba(8, 13, 26, 0.94) 0%, rgba(24, 20, 60, 0.88) 50%, rgba(15, 23, 42, 0.84) 100%) !important;"></div>
                <div class="absolute inset-0 opacity-15 pointer-events-none bg-[radial-gradient(#e0e7ff_1px,transparent_1px)] [background-size:24px_24px]"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-slate-950/40"></div>

                {{-- Slide Foreground Content --}}
                <div class="relative z-10 w-full max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 text-center space-y-4 sm:space-y-6">
                    
                    {{-- Badge --}}
                    @if(!empty($slide['badge']))
                    <div class="inline-flex items-center gap-2 px-3.5 sm:px-4 py-1.5 rounded-full bg-white/10 border border-white/20 backdrop-blur-md shadow-inner text-amber-300 text-xs sm:text-sm font-bold uppercase tracking-wider" 
                         style="background-color: rgba(255, 255, 255, 0.12); border-color: rgba(255, 255, 255, 0.25); color: #fcd34d;">
                        <i class="fa-solid fa-landmark text-amber-400"></i>
                        <span>{{ $slide['badge'] }}</span>
                    </div>
                    @endif

                    {{-- Title (Anti Cut-Off & Responsive Break-Words) --}}
                    <h1 class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight uppercase drop-shadow-md break-words max-w-4xl mx-auto" 
                        style="color: #ffffff !important;">
                        {{ $slide['title'] ?? 'Yayasan Agung Madani' }}
                    </h1>

                    {{-- Subtitle --}}
                    @if(!empty($slide['subtitle']))
                    <p class="text-xs sm:text-base md:text-lg text-indigo-100 font-medium leading-relaxed max-w-3xl mx-auto break-words" 
                       style="color: #e0e7ff !important;">
                        {{ $slide['subtitle'] }}
                    </p>
                    @endif

                    {{-- Action Buttons --}}
                    <div class="pt-2 sm:pt-4 flex flex-wrap items-center justify-center gap-3 sm:gap-4">
                        @if(!empty($slide['btn_text']))
                        <a href="{{ $slide['btn_link'] ?? '#unit-sekolah' }}" 
                           target="{{ $slide['btn_target'] ?? '_self' }}"
                           class="px-5 sm:px-6 py-3 sm:py-3.5 rounded-xl bg-gradient-to-r from-amber-400 to-yellow-500 hover:from-amber-300 hover:to-yellow-400 text-slate-950 font-black text-xs sm:text-sm uppercase tracking-wider shadow-lg hover:shadow-amber-500/30 transition transform hover:-translate-y-0.5 flex items-center gap-2" 
                           style="background: linear-gradient(to right, #fbbf24, #eab308); color: #020617;">
                            <i class="fa-solid fa-layer-group"></i>
                            <span>{{ $slide['btn_text'] }}</span>
                            <i class="fa-solid fa-arrow-down text-xs"></i>
                        </a>
                        @endif

                        @if(!empty($slide['btn2_active']) && !empty($slide['btn2_text']))
                        <a href="{{ $slide['btn2_link'] ?? route('ppdb.index') }}" 
                           target="{{ $slide['btn2_target'] ?? '_self' }}"
                           class="px-5 sm:px-6 py-3 sm:py-3.5 rounded-xl bg-white/10 hover:bg-white/20 border border-white/25 text-white font-bold text-xs sm:text-sm tracking-wide transition flex items-center gap-2 backdrop-blur-md" 
                           style="background-color: rgba(255, 255, 255, 0.12); border-color: rgba(255, 255, 255, 0.25); color: #ffffff;">
                            <i class="fa-solid fa-graduation-cap text-amber-300"></i>
                            <span>{{ $slide['btn2_text'] }}</span>
                        </a>
                        @endif
                    </div>

                    {{-- Statistics Chips (Satu Atap SIT Madani - Dinamis & Responsif) --}}
                    @if(!empty($heroChips) && is_array($heroChips))
                    <div class="pt-4 sm:pt-6 grid grid-cols-2 sm:grid-cols-4 gap-2 sm:gap-3.5 max-w-3xl mx-auto text-center">
                        @foreach($heroChips as $chip)
                        <div class="bg-white/10 border border-white/15 rounded-xl p-2.5 sm:p-3 backdrop-blur-md flex flex-col justify-center min-h-[72px] sm:min-h-[82px] shadow-sm">
                            <span class="block text-base sm:text-lg md:text-xl font-black tracking-tight leading-snug {{ $chip['color'] ?? 'text-emerald-400' }} break-normal whitespace-normal">
                                {{ $chip['title'] ?? $chip['value'] ?? '' }}
                            </span>
                            <span class="text-[10px] sm:text-[11px] text-slate-200 uppercase tracking-wider font-semibold mt-0.5 leading-tight">
                                {{ $chip['subtitle'] ?? $chip['label'] ?? '' }}
                            </span>
                        </div>
                        @endforeach
                    </div>
                    @endif

                </div>

            </div>
            @endforeach
        </div>

        {{-- Next / Prev Navigation Arrows (Desktop & Tablet) --}}
        @if(count($heroSlides ?? []) > 1)
        <button type="button" 
                @click="prev()" 
                aria-label="Slide Sebelumnya"
                class="absolute left-3 sm:left-6 top-1/2 -translate-y-1/2 z-20 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-white/10 hover:bg-white/25 border border-white/20 text-white backdrop-blur-md flex items-center justify-center transition shadow-lg cursor-pointer hover:scale-110">
            <i class="fa-solid fa-chevron-left text-sm sm:text-base"></i>
        </button>
        <button type="button" 
                @click="next()" 
                aria-label="Slide Selanjutnya"
                class="absolute right-3 sm:right-6 top-1/2 -translate-y-1/2 z-20 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-white/10 hover:bg-white/25 border border-white/20 text-white backdrop-blur-md flex items-center justify-center transition shadow-lg cursor-pointer hover:scale-110">
            <i class="fa-solid fa-chevron-right text-sm sm:text-base"></i>
        </button>

        {{-- Dot Indicators --}}
        <div class="absolute bottom-4 sm:bottom-6 left-0 right-0 z-20 flex items-center justify-center gap-2">
            @foreach($heroSlides ?? [] as $idx => $slide)
            <button type="button" 
                    @click="goTo({{ $idx }})" 
                    aria-label="Pergi ke slide {{ $idx + 1 }}"
                    class="h-2.5 rounded-full transition-all duration-300 cursor-pointer"
                    :class="activeSlide === {{ $idx }} ? 'w-8 bg-amber-400 shadow-md ring-2 ring-amber-400/40' : 'w-2.5 bg-white/40 hover:bg-white/70'"></button>
            @endforeach
        </div>
        @endif

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

            {{-- 3 CARDS GRID (100% Simetris & Dinamis dari Admin) --}}
            @php
            $unitThemes = [
                'tk' => [
                    'border' => 'border-amber-200 hover:border-amber-400',
                    'header_bg' => 'linear-gradient(135deg, #d97706 0%, #b45309 100%)',
                    'badge_bg' => 'bg-amber-400 text-slate-950',
                    'sub_color' => 'text-amber-100',
                    'leader_box' => 'bg-amber-50/80 border-amber-200',
                    'leader_label' => 'text-amber-800',
                    'photo_border' => 'border-amber-400',
                    'icon_color' => 'text-amber-500',
                    'btn_primary' => 'bg-amber-500 hover:bg-amber-600 text-white',
                    'btn_sec' => 'bg-white hover:bg-amber-50 border-amber-300 text-amber-700',
                ],
                'sd' => [
                    'border' => 'border-emerald-200 hover:border-emerald-400',
                    'header_bg' => 'linear-gradient(135deg, #059669 0%, #047857 100%)',
                    'badge_bg' => 'bg-yellow-400 text-slate-950',
                    'sub_color' => 'text-emerald-100',
                    'leader_box' => 'bg-emerald-50/80 border-emerald-200',
                    'leader_label' => 'text-emerald-800',
                    'photo_border' => 'border-emerald-500',
                    'icon_color' => 'text-emerald-600',
                    'btn_primary' => 'bg-emerald-600 hover:bg-emerald-700 text-white',
                    'btn_sec' => 'bg-white hover:bg-emerald-50 border-emerald-300 text-emerald-700',
                ],
                'smp' => [
                    'border' => 'border-indigo-200 hover:border-indigo-400',
                    'header_bg' => 'linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%)',
                    'badge_bg' => 'bg-amber-400 text-slate-950',
                    'sub_color' => 'text-indigo-200',
                    'leader_box' => 'bg-indigo-50/80 border-indigo-200',
                    'leader_label' => 'text-indigo-800',
                    'photo_border' => 'border-indigo-600',
                    'icon_color' => 'text-indigo-600',
                    'btn_primary' => 'bg-indigo-900 hover:bg-indigo-950 text-white',
                    'btn_sec' => 'bg-white hover:bg-indigo-50 border-indigo-300 text-indigo-800',
                ],
            ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 items-stretch">
                @foreach(['tk', 'sd', 'smp'] as $unitKey)
                @php
                    $card = $unitShowcaseCards[$unitKey] ?? [];
                    $t = $unitThemes[$unitKey] ?? $unitThemes['smp'];
                @endphp
                <div class="bg-white rounded-3xl border-2 {{ $t['border'] }} shadow-xl hover:shadow-2xl transition duration-300 flex flex-col justify-between overflow-hidden group hover:-translate-y-1">
                    {{-- Card Header --}}
                    <div class="p-6 text-white relative" style="background: {{ $t['header_bg'] }}; color: #ffffff;">
                        <div class="flex items-center justify-between mb-4 gap-2 flex-wrap">
                            <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-md text-[10px] sm:text-[11px] font-black uppercase tracking-wider text-white">
                                {{ $card['level_badge'] ?? strtoupper($unitKey) }}
                            </span>
                            <div class="flex items-center gap-1.5 shrink-0">
                                @if(!empty($card['info_badge']))
                                <span class="px-2.5 py-1 rounded-full bg-black/25 text-white/90 text-[10px] font-bold backdrop-blur-sm">
                                    {{ $card['info_badge'] }}
                                </span>
                                @endif
                                @if(!empty($card['accreditation']))
                                <span class="px-2.5 py-1 rounded-full {{ $t['badge_bg'] }} text-[10px] font-black uppercase">
                                    {{ $card['accreditation'] }}
                                </span>
                                @endif
                            </div>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-black tracking-tight leading-snug">
                            {{ $card['title'] ?? '' }}
                        </h3>
                        <p class="text-xs {{ $t['sub_color'] }} font-medium mt-1">
                            {{ $card['subtitle'] ?? '' }}
                        </p>
                    </div>

                    {{-- Card Body --}}
                    <div class="p-6 space-y-5 flex-1 flex flex-col justify-between">
                        <div>
                            {{-- Kepala Sekolah / Pimpinan --}}
                            <div class="flex items-center space-x-3.5 p-3 rounded-2xl {{ $t['leader_box'] }} border">
                                <img src="{{ $card['leader_photo'] ?? '/uploads/dewan/avatar-default.svg' }}" 
                                     alt="{{ $card['leader_name'] ?? 'Pimpinan' }}" 
                                     class="w-14 h-14 rounded-xl object-cover border-2 {{ $t['photo_border'] }} shadow-sm shrink-0" 
                                     onerror="this.onerror=null; this.src='/uploads/dewan/avatar-default.svg';">
                                <div class="min-w-0">
                                    <span class="text-[10px] uppercase font-bold {{ $t['leader_label'] }} tracking-wider block">
                                        {{ $card['leader_title'] ?? 'Kepala Sekolah' }}
                                    </span>
                                    <h4 class="text-xs sm:text-sm font-black text-slate-900 leading-tight truncate">
                                        {{ $card['leader_name'] ?? '' }}
                                    </h4>
                                    <span class="text-[11px] text-slate-500 block truncate">
                                        {{ $card['leader_sub'] ?? '' }}
                                    </span>
                                </div>
                            </div>

                            {{-- Slogan & Visi --}}
                            <div class="mt-4">
                                <span class="text-[10px] font-extrabold uppercase tracking-wider text-slate-400 block mb-1">Visi & Slogan</span>
                                <p class="text-xs sm:text-sm font-bold text-slate-800 italic bg-slate-50 p-3 rounded-xl border border-slate-100 min-h-[58px] flex items-center">
                                    "{{ $card['slogan'] ?? '' }}"
                                </p>
                            </div>

                            {{-- Highlight Keunggulan (5 Poin) --}}
                            <ul class="mt-4 space-y-2 text-xs font-semibold text-slate-700 min-h-[160px]">
                                @foreach($card['features'] ?? [] as $feat)
                                <li class="flex items-start gap-2">
                                    <i class="fa-solid fa-check-circle {{ $t['icon_color'] }} mt-0.5 shrink-0"></i>
                                    <span>{{ $feat }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- Metadata Chips --}}
                        <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500 font-semibold">
                            <span><i class="fa-solid fa-id-card {{ $t['icon_color'] }} mr-1"></i> {{ $card['meta_left'] ?? '' }}</span>
                            <span><i class="fa-solid fa-award {{ $t['icon_color'] }} mr-1"></i> {{ $card['meta_right'] ?? '' }}</span>
                        </div>
                    </div>

                    {{-- Card Footer / Action Buttons --}}
                    <div class="p-6 bg-slate-50 border-t border-slate-100 space-y-2.5">
                        <a href="{{ $card['btn_site_url'] ?? route('unit.home', $unitKey) }}" class="w-full py-3 px-4 rounded-xl {{ $t['btn_primary'] }} font-black text-xs uppercase tracking-wider text-center shadow-md hover:shadow-lg transition flex items-center justify-center gap-2 group-hover:scale-[1.02]">
                            <i class="fa-solid fa-globe"></i>
                            <span>{{ $card['btn_site_text'] ?? ('Kunjungi Website ' . ($card['title'] ?? '')) }}</span>
                            <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
                        </a>
                        <a href="{{ $card['btn_spmb_url'] ?? route('unit.ppdb', $unitKey) }}" class="w-full py-2.5 px-4 rounded-xl {{ $t['btn_sec'] }} border font-bold text-xs uppercase tracking-wider text-center transition flex items-center justify-center gap-2">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>{{ $card['btn_spmb_text'] ?? 'SPMB Online' }}</span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            </div>
        </div>
    </section>


    {{-- ========================================================
         SECTION: SAMBUTAN KETUA YAYASAN AGUNG MADANI
         ======================================================== --}}
    <section class="py-14 sm:py-20 bg-white border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-indigo-950 to-slate-900 text-white rounded-3xl p-6 sm:p-12 shadow-2xl relative overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 60%, #0c1427 100%) !important; color: #ffffff !important;">
                <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    {{-- Foto Ketua Yayasan (Format Pas Foto Formal) --}}
                    <div class="lg:col-span-4 flex flex-col items-center text-center">
                        <div class="relative w-48 h-60 sm:w-56 sm:h-72 rounded-3xl overflow-hidden border-4 border-amber-400 shadow-2xl bg-slate-800">
                            <img src="/uploads/dewan/ust-legianto.webp" alt="Drs. H. Legianto, M.E.E. - Ketua Yayasan Agung Madani" class="w-full h-full object-cover object-top" onerror="this.onerror=null; this.src='/uploads/dewan/avatar-default.svg';">
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
            <div class="bg-gradient-to-r from-indigo-900 to-blue-900 text-white rounded-2xl p-6 sm:p-8 shadow-xl" style="background: linear-gradient(135deg, #1e1b4b 0%, #1e40af 100%) !important; color: #ffffff !important;">
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
                            <img src="{{ $post->featured_image ?? '/uploads/campus-sit-madani.webp' }}" alt="{{ $post->title }}" class="w-full h-full object-cover hover:scale-105 transition duration-300" onerror="this.onerror=null; this.src='/uploads/campus-sit-madani.webp';">
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
    <section class="py-14 sm:py-20 bg-gradient-to-br from-indigo-950 via-indigo-900 to-blue-950 text-white relative overflow-hidden" style="background: linear-gradient(135deg, #0c1427 0%, #1e1b4b 50%, #172554 100%) !important; color: #ffffff !important;">
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

{{-- Reusable Popup Promo SPMB SIT Madani --}}
@include('partials.popup-spmb')

@endsection

