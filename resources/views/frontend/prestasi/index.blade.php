@extends('layouts.frontend')

@php
    $unitTitle = $currentUnit ? $currentUnit['short_name'] : 'SIT Madani Kayuagung';
    $unitFullName = $currentUnit ? $currentUnit['name'] : 'Sekolah Islam Terpadu Madani Kayuagung';
@endphp

@section('title', 'Prestasi Santri & Siswa - ' . $unitTitle)
@section('meta_description', 'Raihan prestasi membanggakan santri dan siswa ' . $unitFullName . ' di tingkat Kota, Kabupaten, Provinsi hingga Nasional.')

@section('content')
{{-- HERO HEADER --}}
<div class="bg-gradient-to-r from-indigo-950 via-indigo-900 to-blue-950 border-b border-indigo-500/20 text-white py-10 sm:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left reveal-fade-up">
        <nav class="text-xs text-indigo-200 mb-3 flex items-center justify-center sm:justify-start space-x-2 flex-wrap">
            <a href="{{ route('home') }}" class="hover:text-white transition">Beranda</a>
            <span>/</span>
            <span class="text-amber-300 font-semibold">Prestasi Santri</span>
            @if($currentUnit)
                <span>/</span>
                <span class="text-amber-200 font-medium">{{ $currentUnit['short_name'] }}</span>
            @endif
        </nav>
        <div class="flex flex-col sm:flex-row items-center sm:items-start gap-4">
            <div class="w-12 h-12 rounded-2xl bg-amber-400 text-slate-950 flex items-center justify-center font-bold text-2xl shadow-md shrink-0">
                <i class="fa-solid fa-trophy"></i>
            </div>
            <div>
                <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">Prestasi Santri {{ $unitTitle }}</h1>
                <p class="text-xs sm:text-sm text-indigo-100 mt-1 font-light max-w-2xl">
                    Bukti nyata kesungguhan pembinaan Al-Qur'an, sains, teknologi, bahasa, dan adab islami di lingkungan {{ $unitFullName }}.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 space-y-8">

    {{-- UNIT SWITCHER TABS --}}
    <div class="flex flex-wrap items-center justify-center gap-2 bg-white p-2 sm:p-3 rounded-2xl shadow-sm border border-gray-100">
        <a href="{{ route('prestasi.index') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ empty($currentUnitKey) || $currentUnitKey === 'yayasan' ? 'bg-indigo-600 text-white shadow' : 'bg-gray-50 text-gray-700 hover:bg-gray-100' }}">
            <i class="fa-solid fa-landmark text-amber-500 mr-1.5"></i> Semua Prestasi SIT Madani
        </a>
        <a href="{{ route('unit.prestasi', 'tk') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $currentUnitKey === 'tk' ? 'bg-amber-500 text-slate-950 font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-amber-50' }}">
            <i class="fa-solid fa-shapes text-amber-500 mr-1.5"></i> Prestasi TKS IT
        </a>
        <a href="{{ route('unit.prestasi', 'sd') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $currentUnitKey === 'sd' ? 'bg-emerald-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-emerald-50' }}">
            <i class="fa-solid fa-book-open-reader text-emerald-500 mr-1.5"></i> Prestasi SDS IT
        </a>
        <a href="{{ route('unit.prestasi', 'smp') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $currentUnitKey === 'smp' ? 'bg-blue-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-blue-50' }}">
            <i class="fa-solid fa-graduation-cap text-blue-500 mr-1.5"></i> Prestasi SMPS IT
        </a>
    </div>

    {{-- PRESTASI GRID --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        @forelse($prestasi as $idx => $item)
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group reveal-fade-up delay-{{ $idx % 3 }}">
                <a href="{{ route('prestasi.show', $item->slug) }}" class="block relative h-60 sm:h-64 overflow-hidden bg-slate-900/5 flex items-center justify-center p-2 group-hover:bg-slate-900/10 transition">
                    {{-- Ambient background --}}
                    <img src="{{ $item->featured_image_url }}" alt="" class="absolute inset-0 w-full h-full object-cover blur-md opacity-30 scale-110 pointer-events-none" aria-hidden="true">
                    {{-- Full uncropped image --}}
                    <img src="{{ $item->featured_image_url }}" alt="{{ $item->title }}" class="relative max-h-full max-w-full w-auto h-auto object-contain rounded-xl shadow-xs group-hover:scale-102 transition duration-300" onerror="this.onerror=null; this.src='/uploads/campus-sit-madani.webp'">
                    <span class="absolute top-3 left-3 z-10 bg-gradient-to-r from-amber-500 to-amber-600 text-white text-[10px] font-bold px-3 py-1 rounded-full shadow-md flex items-center space-x-1.5">
                        <i class="fa-solid fa-award text-xs"></i>
                        <span>Juara &amp; Prestasi</span>
                    </span>
                </a>

                <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                    <div>
                        <div class="text-[11px] text-gray-400 mb-2 flex items-center space-x-1.5">
                            <i class="fa-regular fa-calendar text-indigo-600"></i>
                            <span>{{ $item->published_at ? $item->published_at->format('d M Y') : $item->created_at->format('d M Y') }}</span>
                        </div>
                        <h2 class="font-extrabold text-gray-900 text-base group-hover:text-indigo-600 transition line-clamp-2 leading-snug">
                            <a href="{{ route('prestasi.show', $item->slug) }}">
                                {{ $item->title }}
                            </a>
                        </h2>
                        <p class="text-xs text-gray-600 line-clamp-3 mt-2 font-normal leading-relaxed">
                            {{ $item->excerpt ?: Str::limit(strip_tags($item->content), 120) }}
                        </p>
                    </div>

                    <div class="pt-3 border-t border-gray-100 flex items-center justify-between text-xs">
                        <span class="font-bold text-indigo-600 flex items-center space-x-1 group-hover:translate-x-1 transition text-[11px]">
                            <span>Baca Selengkapnya</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                        <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-indigo-50 text-indigo-700">
                            {{ $unitTitle }}
                        </span>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full bg-white rounded-3xl p-12 text-center border border-gray-100 shadow-sm">
                <i class="fa-solid fa-trophy text-4xl text-amber-300 mb-3 block"></i>
                <h3 class="text-base font-bold text-gray-700">Belum Ada Data Prestasi</h3>
                <p class="text-xs text-gray-400 mt-1">Data prestasi santri untuk unit ini sedang dalam proses pembaruan.</p>
            </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="pt-4">
        {{ $prestasi->links() }}
    </div>

</div>
@endsection
