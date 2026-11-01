@extends('layouts.frontend')

@section('title', 'Dewan Guru & Tenaga Kependidikan - Sekolah Islam Terpadu Madani')
@section('meta_description', 'Profil pendidik, ustadz/ustadzah, pimpinan, dan pengurus Yayasan Agung Madani, TKS IT, SDS IT, dan SMPS IT Madani Kayuagung.')

@section('content')
{{-- HERO HEADER --}}
<div class="bg-gradient-to-r from-indigo-950 via-indigo-900 to-blue-950 border-b border-indigo-500/20 text-white py-10 sm:py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-xs text-indigo-200 mb-3 flex items-center space-x-2">
            <a href="{{ route('home') }}" class="hover:text-white transition">Beranda</a>
            <span>/</span>
            <span>Profil</span>
            <span>/</span>
            <span class="text-amber-300 font-semibold">Dewan Guru &amp; Pengurus</span>
        </nav>
        <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">Dewan Guru &amp; Tenaga Kependidikan</h1>
        <p class="text-xs sm:text-sm text-indigo-100 mt-2 font-light max-w-2xl">
            Pendidik profesional, pembina Qur'ani, sarjana kependidikan, serta jajaran pengurus Yayasan Agung Madani yang berdedikasi membimbing generasi robbani.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14 space-y-10">
    
    {{-- FILTER TABS UNIT SEKOLAH --}}
    @php
        $selectedTab = $currentUnitKey ?? request()->query('unit', 'all');
        if (!in_array($selectedTab, ['all', 'yayasan', 'tk', 'sd', 'smp'])) {
            $selectedTab = 'all';
        }
    @endphp

    <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 bg-white p-2 sm:p-3 rounded-2xl shadow-sm border border-gray-100 max-w-3xl mx-auto">
        <button type="button" onclick="filterDewan('all')" id="tab-all" class="dewan-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $selectedTab === 'all' ? 'bg-indigo-600 text-white shadow' : 'bg-gray-50 text-gray-700 hover:bg-gray-100' }}">
            <i class="fa-solid fa-users mr-1.5"></i> Semua ({{ count($unitGurus['yayasan']) + count($unitGurus['tk']) + count($unitGurus['sd']) + count($unitGurus['smp']) }})
        </button>
        <button type="button" onclick="filterDewan('yayasan')" id="tab-yayasan" class="dewan-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $selectedTab === 'yayasan' ? 'bg-indigo-600 text-white shadow' : 'bg-gray-50 text-gray-700 hover:bg-gray-100' }}">
            <i class="fa-solid fa-landmark text-amber-500 mr-1.5"></i> Yayasan
        </button>
        <button type="button" onclick="filterDewan('tk')" id="tab-tk" class="dewan-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $selectedTab === 'tk' ? 'bg-amber-500 text-slate-950 font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-amber-50' }}">
            <i class="fa-solid fa-shapes text-amber-500 mr-1.5"></i> TKS IT Madani
        </button>
        <button type="button" onclick="filterDewan('sd')" id="tab-sd" class="dewan-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $selectedTab === 'sd' ? 'bg-emerald-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-emerald-50' }}">
            <i class="fa-solid fa-book-open-reader text-emerald-500 mr-1.5"></i> SDS IT Madani
        </button>
        <button type="button" onclick="filterDewan('smp')" id="tab-smp" class="dewan-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $selectedTab === 'smp' ? 'bg-blue-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-blue-50' }}">
            <i class="fa-solid fa-graduation-cap text-blue-500 mr-1.5"></i> SMPS IT Madani
        </button>
    </div>

    {{-- SEKSI 1: PENGURUS YAYASAN AGUNG MADANI --}}
    <div id="section-yayasan" class="dewan-section space-y-6">
        <div class="border-b border-indigo-100 pb-3 flex items-center justify-between">
            <div>
                <span class="text-xs font-bold text-amber-500 uppercase tracking-wider block">Badan Penyelenggara</span>
                <h2 class="text-xl sm:text-2xl font-black text-gray-900 tracking-tight flex items-center">
                    <i class="fa-solid fa-landmark text-indigo-600 mr-2"></i> Pengurus Yayasan Agung Madani
                </h2>
            </div>
            <span class="text-xs bg-indigo-50 text-indigo-700 font-bold px-3 py-1 rounded-full border border-indigo-200">
                Pimpinan &amp; Pengawas
            </span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($unitGurus['yayasan'] as $p)
                <div class="bg-white rounded-3xl p-6 shadow-md hover:shadow-xl border border-gray-100 transition transform hover:-translate-y-1 flex space-x-4 items-center">
                    <div class="w-20 h-24 rounded-2xl overflow-hidden bg-slate-100 flex-shrink-0 relative border-2 border-indigo-100 shadow-sm">
                        <img src="{{ $p['photo'] }}" alt="{{ $p['name'] }}" class="w-full h-full object-cover object-top" onerror="this.onerror=null; this.src='/uploads/dewan/avatar-default.svg'">
                    </div>
                    <div class="space-y-1 min-w-0">
                        <span class="inline-block bg-amber-100 text-amber-900 text-[10px] font-extrabold px-2.5 py-0.5 rounded-full uppercase tracking-wider">
                            {{ $p['position'] }}
                        </span>
                        <h3 class="font-extrabold text-gray-900 text-sm sm:text-base leading-snug truncate">
                            {{ $p['name'] }}
                        </h3>
                        <p class="text-[11px] text-gray-500 line-clamp-2 leading-relaxed">
                            {{ $p['desc'] ?? 'Pengurus Harian Yayasan Agung Madani Kayuagung.' }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- SEKSI 2: DEWAN GURU TKS IT MADANI --}}
    <div id="section-tk" class="dewan-section space-y-6">
        <div class="border-b border-amber-200 pb-3 flex items-center justify-between">
            <div>
                <span class="text-xs font-bold text-amber-500 uppercase tracking-wider block">PAUD / TK Islam Terpadu</span>
                <h2 class="text-xl sm:text-2xl font-black text-gray-900 tracking-tight flex items-center">
                    <i class="fa-solid fa-shapes text-amber-500 mr-2"></i> Pendidik &amp; GTK TKS IT Madani
                </h2>
            </div>
            <a href="{{ route('unit.tk') }}" class="text-xs text-amber-600 font-bold hover:underline flex items-center">
                <span>Web Unit TK</span>
                <i class="fa-solid fa-arrow-right ml-1 text-[10px]"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($unitGurus['tk'] as $g)
                <div class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl border border-gray-100 transition transform hover:-translate-y-1 flex flex-col justify-between">
                    <div class="aspect-[4/5] w-full overflow-hidden bg-slate-100 relative group">
                        <img src="{{ $g['photo'] }}" alt="{{ $g['name'] }}" class="absolute inset-0 w-full h-full object-cover object-top group-hover:scale-105 transition duration-500" onerror="this.onerror=null; this.src='/uploads/dewan/avatar-default.svg'">
                        <div class="absolute bottom-0 inset-x-0 h-20 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-[10px] font-extrabold text-slate-900 bg-amber-400 px-2.5 py-0.5 rounded-full shadow">
                            {{ $g['position'] }}
                        </span>
                    </div>
                    <div class="p-5 flex-grow flex flex-col justify-between space-y-3">
                        <div>
                            <h3 class="font-extrabold text-gray-900 text-sm sm:text-base leading-snug">
                                {{ $g['name'] }}
                            </h3>
                            <span class="text-xs text-gray-500 block mt-1">{{ $g['fraction'] ?? 'Pendidik Sentra' }}</span>
                        </div>
                        <div class="pt-3 border-t border-gray-100 flex items-center justify-between text-[11px] text-gray-400">
                            <span>TKS IT Madani</span>
                            <span class="text-amber-500 font-bold"><i class="fa-solid fa-heart mr-0.5"></i> Sentra</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- SEKSI 3: DEWAN GURU SDS IT MADANI --}}
    <div id="section-sd" class="dewan-section space-y-6">
        <div class="border-b border-emerald-200 pb-3 flex items-center justify-between">
            <div>
                <span class="text-xs font-bold text-emerald-600 uppercase tracking-wider block">Sekolah Dasar Islam Terpadu</span>
                <h2 class="text-xl sm:text-2xl font-black text-gray-900 tracking-tight flex items-center">
                    <i class="fa-solid fa-book-open-reader text-emerald-600 mr-2"></i> Pendidik &amp; GTK SDS IT Madani
                </h2>
            </div>
            <a href="{{ route('unit.sd') }}" class="text-xs text-emerald-600 font-bold hover:underline flex items-center">
                <span>Web Unit SD</span>
                <i class="fa-solid fa-arrow-right ml-1 text-[10px]"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($unitGurus['sd'] as $g)
                <div class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl border border-gray-100 transition transform hover:-translate-y-1 flex flex-col justify-between">
                    <div class="aspect-[4/5] w-full overflow-hidden bg-slate-100 relative group">
                        <img src="{{ $g['photo'] }}" alt="{{ $g['name'] }}" class="absolute inset-0 w-full h-full object-cover object-top group-hover:scale-105 transition duration-500" onerror="this.onerror=null; this.src='/uploads/dewan/avatar-default.svg'">
                        <div class="absolute bottom-0 inset-x-0 h-20 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-[10px] font-extrabold text-white bg-emerald-600 px-2.5 py-0.5 rounded-full shadow">
                            {{ $g['position'] }}
                        </span>
                    </div>
                    <div class="p-5 flex-grow flex flex-col justify-between space-y-3">
                        <div>
                            <h3 class="font-extrabold text-gray-900 text-sm sm:text-base leading-snug">
                                {{ $g['name'] }}
                            </h3>
                            <span class="text-xs text-gray-500 block mt-1">{{ $g['fraction'] ?? 'Guru Kelas / Mapel' }}</span>
                        </div>
                        <div class="pt-3 border-t border-gray-100 flex items-center justify-between text-[11px] text-gray-400">
                            <span>SDS IT Madani</span>
                            <span class="text-emerald-600 font-bold"><i class="fa-solid fa-check mr-0.5"></i> Terakreditasi B</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- SEKSI 4: DEWAN GURU SMPS IT MADANI --}}
    <div id="section-smp" class="dewan-section space-y-6">
        <div class="border-b border-blue-200 pb-3 flex items-center justify-between">
            <div>
                <span class="text-xs font-bold text-blue-600 uppercase tracking-wider block">Sekolah Menengah Pertama Islam Terpadu &amp; Boarding</span>
                <h2 class="text-xl sm:text-2xl font-black text-gray-900 tracking-tight flex items-center">
                    <i class="fa-solid fa-graduation-cap text-blue-600 mr-2"></i> Pendidik &amp; GTK SMPS IT Madani
                </h2>
            </div>
            <a href="{{ route('unit.smp') }}" class="text-xs text-blue-600 font-bold hover:underline flex items-center">
                <span>Web Unit SMP</span>
                <i class="fa-solid fa-arrow-right ml-1 text-[10px]"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($unitGurus['smp'] as $g)
                <div class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl border border-gray-100 transition transform hover:-translate-y-1 flex flex-col justify-between">
                    <div class="aspect-[4/5] w-full overflow-hidden bg-slate-100 relative group">
                        <img src="{{ $g['photo'] }}" alt="{{ $g['name'] }}" class="absolute inset-0 w-full h-full object-cover object-top group-hover:scale-105 transition duration-500" onerror="this.onerror=null; this.src='/uploads/dewan/avatar-default.svg'">
                        <div class="absolute bottom-0 inset-x-0 h-20 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-[10px] font-extrabold text-white bg-blue-600 px-2.5 py-0.5 rounded-full shadow">
                            {{ $g['position'] }}
                        </span>
                    </div>
                    <div class="p-5 flex-grow flex flex-col justify-between space-y-3">
                        <div>
                            <h3 class="font-extrabold text-gray-900 text-sm sm:text-base leading-snug">
                                {{ $g['name'] }}
                            </h3>
                            <span class="text-xs text-gray-500 block mt-1">{{ $g['fraction'] ?? 'Guru Bidang Studi' }}</span>
                        </div>
                        <div class="pt-3 border-t border-gray-100 flex items-center justify-between text-[11px] text-gray-400">
                            <span>SMPS IT Madani</span>
                            <span class="text-blue-600 font-bold"><i class="fa-solid fa-quran mr-0.5"></i> Tahfidz &amp; Sains</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>

{{-- Script Tab Filtering --}}
<script>
    function filterDewan(unit) {
        const sections = {
            'yayasan': document.getElementById('section-yayasan'),
            'tk': document.getElementById('section-tk'),
            'sd': document.getElementById('section-sd'),
            'smp': document.getElementById('section-smp'),
        };

        const buttons = {
            'all': document.getElementById('tab-all'),
            'yayasan': document.getElementById('tab-yayasan'),
            'tk': document.getElementById('tab-tk'),
            'sd': document.getElementById('tab-sd'),
            'smp': document.getElementById('tab-smp'),
        };

        // Reset button styles
        for (const [key, btn] of Object.entries(buttons)) {
            if (!btn) continue;
            btn.className = 'dewan-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition bg-gray-50 text-gray-700 hover:bg-gray-100';
        }

        if (unit === 'all') {
            for (const sec of Object.values(sections)) {
                if (sec) sec.style.display = 'block';
            }
            if (buttons['all']) {
                buttons['all'].className = 'dewan-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition bg-indigo-600 text-white shadow';
            }
        } else {
            for (const [k, sec] of Object.entries(sections)) {
                if (!sec) continue;
                sec.style.display = (k === unit) ? 'block' : 'none';
            }
            if (buttons[unit]) {
                if (unit === 'tk') {
                    buttons[unit].className = 'dewan-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-black transition bg-amber-500 text-slate-950 shadow';
                } else if (unit === 'sd') {
                    buttons[unit].className = 'dewan-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-black transition bg-emerald-600 text-white shadow';
                } else if (unit === 'smp') {
                    buttons[unit].className = 'dewan-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-black transition bg-blue-600 text-white shadow';
                } else {
                    buttons[unit].className = 'dewan-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition bg-indigo-600 text-white shadow';
                }
            }
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        const initialUnit = "{{ $selectedTab }}";
        if (initialUnit && initialUnit !== 'all') {
            filterDewan(initialUnit);
        }
    });
</script>
@endsection
