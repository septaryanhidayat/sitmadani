@extends('layouts.admin')

@section('title', 'Kelola 3 Kartu Unit Sekolah (Showcase Beranda)')
@section('header_title', 'Showcase Unit Sekolah')

@section('content')
<div class="space-y-6" x-data="{ activeUnit: 'tk' }">

    {{-- HEADER & PRATINJAU --}}
    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div class="flex items-start space-x-3.5">
            <div class="w-11 h-11 rounded-xl bg-emerald-50 text-emerald-600 border border-emerald-200 flex items-center justify-center text-xl shrink-0">
                <i class="fa-solid fa-shapes"></i>
            </div>
            <div>
                <h2 class="text-base sm:text-lg font-extrabold text-slate-900 tracking-tight">
                    Pengaturan 3 Kartu Unit Sekolah (Showcase Beranda Yayasan)
                </h2>
                <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">
                    Kelola identitas, foto pimpinan/kepala sekolah, visi slogan, 5 poin keunggulan, akreditasi, dan tautan SPMB untuk ketiga unit: TKS IT, SDS IT, dan SMPS IT Madani.
                </p>
            </div>
        </div>
        <div class="flex items-center gap-2 shrink-0">
            <a href="{{ route('home') }}#unit-sekolah" target="_blank" class="text-xs font-bold text-slate-700 hover:text-emerald-600 bg-slate-50 hover:bg-slate-100 border border-slate-200 px-4 py-2.5 rounded-xl transition flex items-center space-x-2 shadow-xs">
                <i class="fa-solid fa-arrow-up-right-from-square text-xs text-emerald-600"></i>
                <span>Lihat Kartu di Beranda</span>
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold flex items-center space-x-3 shadow-xs">
            <i class="fa-solid fa-circle-check text-emerald-600 text-base shrink-0"></i>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    {{-- NAVIGASI TAB UNIT --}}
    <div class="flex items-center border-b border-slate-200 gap-2 overflow-x-auto pb-1">
        <button type="button" @click="activeUnit = 'tk'" 
                :class="activeUnit === 'tk' ? 'border-amber-500 text-amber-600 font-black bg-amber-50/50' : 'border-transparent text-slate-500 hover:text-slate-700 hover:bg-slate-50'"
                class="px-5 py-3 rounded-t-xl border-b-2 text-xs sm:text-sm transition flex items-center gap-2 shrink-0">
            <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span>
            <span>1. TKS IT Madani (TK / PAUD)</span>
        </button>

        <button type="button" @click="activeUnit = 'sd'" 
                :class="activeUnit === 'sd' ? 'border-emerald-600 text-emerald-700 font-black bg-emerald-50/50' : 'border-transparent text-slate-500 hover:text-slate-700 hover:bg-slate-50'"
                class="px-5 py-3 rounded-t-xl border-b-2 text-xs sm:text-sm transition flex items-center gap-2 shrink-0">
            <span class="w-2.5 h-2.5 rounded-full bg-emerald-600"></span>
            <span>2. SDS IT Madani (Sekolah Dasar)</span>
        </button>

        <button type="button" @click="activeUnit = 'smp'" 
                :class="activeUnit === 'smp' ? 'border-indigo-600 text-indigo-700 font-black bg-indigo-50/50' : 'border-transparent text-slate-500 hover:text-slate-700 hover:bg-slate-50'"
                class="px-5 py-3 rounded-t-xl border-b-2 text-xs sm:text-sm transition flex items-center gap-2 shrink-0">
            <span class="w-2.5 h-2.5 rounded-full bg-indigo-600"></span>
            <span>3. SMPS IT Madani (SMP IT & Boarding)</span>
        </button>
    </div>

    {{-- FORM SUBMIT ALL --}}
    <form action="{{ route('admin.showcase.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        @foreach(['tk' => 'TKS IT Madani', 'sd' => 'SDS IT Madani', 'smp' => 'SMPS IT Madani'] as $unitKey => $unitTitle)
        @php
            $card = $cards[$unitKey] ?? [];
        @endphp
        <div x-show="activeUnit === '{{ $unitKey }}'" class="space-y-6">

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-6">
                <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                    <h3 class="text-sm font-extrabold uppercase tracking-wider text-slate-800 flex items-center gap-2">
                        <i class="fa-solid fa-school text-emerald-600"></i>
                        <span>Header & Identitas: {{ $unitTitle }}</span>
                    </h3>
                    <span class="text-xs px-3 py-1 rounded-full bg-slate-100 text-slate-600 font-bold uppercase">
                        Unit: {{ strtoupper($unitKey) }}
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Nama Judul Kartu</label>
                        <input type="text" name="cards[{{ $unitKey }}][title]" value="{{ old("cards.$unitKey.title", $card['title'] ?? '') }}" class="w-full px-3.5 py-2.5 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:outline-hidden" required>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Badge Jenjang (Kiri Atas)</label>
                        <input type="text" name="cards[{{ $unitKey }}][level_badge]" value="{{ old("cards.$unitKey.level_badge", $card['level_badge'] ?? '') }}" class="w-full px-3.5 py-2.5 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:outline-hidden" placeholder="Contoh: PAUD / TK ISLAM TERPADU" required>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Badge Akreditasi</label>
                        <input type="text" name="cards[{{ $unitKey }}][accreditation]" value="{{ old("cards.$unitKey.accreditation", $card['accreditation'] ?? '') }}" class="w-full px-3.5 py-2.5 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:outline-hidden" placeholder="Contoh: AKREDITASI B">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Badge Info Tambahan (Kanan Atas)</label>
                        <input type="text" name="cards[{{ $unitKey }}][info_badge]" value="{{ old("cards.$unitKey.info_badge", $card['info_badge'] ?? '') }}" class="w-full px-3.5 py-2.5 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:outline-hidden" placeholder="Contoh: 13 Rombel • 293 Siswa / Boarding & Full Day">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Subjudul / Lokasi</label>
                        <input type="text" name="cards[{{ $unitKey }}][subtitle]" value="{{ old("cards.$unitKey.subtitle", $card['subtitle'] ?? '') }}" class="w-full px-3.5 py-2.5 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:outline-hidden" required>
                    </div>
                </div>
            </div>

            {{-- PIMPINAN / KEPALA SEKOLAH --}}
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-6">
                <h3 class="text-sm font-extrabold uppercase tracking-wider text-slate-800 border-b border-slate-100 pb-4 flex items-center gap-2">
                    <i class="fa-solid fa-user-tie text-emerald-600"></i>
                    <span>Pimpinan & Kepala Sekolah</span>
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-start">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Label Jabatan</label>
                        <input type="text" name="cards[{{ $unitKey }}][leader_title]" value="{{ old("cards.$unitKey.leader_title", $card['leader_title'] ?? 'Kepala Sekolah') }}" class="w-full px-3.5 py-2.5 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:outline-hidden" required>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Nama Lengkap & Gelar</label>
                        <input type="text" name="cards[{{ $unitKey }}][leader_name]" value="{{ old("cards.$unitKey.leader_name", $card['leader_name'] ?? '') }}" class="w-full px-3.5 py-2.5 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:outline-hidden" required>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Keterangan / NIY / Komite</label>
                        <input type="text" name="cards[{{ $unitKey }}][leader_sub]" value="{{ old("cards.$unitKey.leader_sub", $card['leader_sub'] ?? '') }}" class="w-full px-3.5 py-2.5 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:outline-hidden">
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-5 p-4 rounded-xl bg-slate-50 border border-slate-200">
                    <div class="shrink-0 text-center">
                        <img src="{{ $card['leader_photo'] ?? '/uploads/dewan/avatar-default.svg' }}" alt="Pratinjau Foto" class="w-20 h-20 rounded-2xl object-cover border-2 border-emerald-500 shadow-sm mx-auto" onerror="this.onerror=null; this.src='/uploads/dewan/avatar-default.svg';">
                        <span class="text-[10px] text-slate-400 block mt-1">Foto Saat Ini</span>
                    </div>
                    <div class="flex-1 space-y-2">
                        <label class="block text-xs font-bold text-slate-700">Ganti Foto Pimpinan (Upload WebP / JPG / PNG)</label>
                        <input type="file" name="cards[{{ $unitKey }}][leader_photo_file]" accept="image/*" class="text-xs text-slate-600 file:mr-3 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-emerald-600 file:text-white hover:file:bg-emerald-700 cursor-pointer">
                        <input type="hidden" name="cards[{{ $unitKey }}][leader_photo]" value="{{ $card['leader_photo'] ?? '' }}">
                        <p class="text-[11px] text-slate-500">Foto otomatis dikonversi ke WebP responsif. Ukuran persegi pas foto (misal 400x400 px) direkomendasikan.</p>
                    </div>
                </div>
            </div>

            {{-- VISI SLOGAN & 5 POIN KEUNGGULAN --}}
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-6">
                <h3 class="text-sm font-extrabold uppercase tracking-wider text-slate-800 border-b border-slate-100 pb-4 flex items-center gap-2">
                    <i class="fa-solid fa-star text-amber-500"></i>
                    <span>Visi Slogan & 5 Poin Keunggulan Utama</span>
                </h3>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Visi & Slogan Unit</label>
                    <textarea name="cards[{{ $unitKey }}][slogan]" rows="2" class="w-full px-3.5 py-2.5 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:outline-hidden" required>{{ old("cards.$unitKey.slogan", $card['slogan'] ?? '') }}</textarea>
                </div>

                <div class="space-y-3">
                    <label class="block text-xs font-bold text-slate-700">5 Poin Keunggulan Unit (Tampil dengan centang hijau/oranye/indigo):</label>
                    @for($i = 0; $i < 5; $i++)
                    <div class="flex items-center gap-3">
                        <span class="w-7 h-7 rounded-lg bg-slate-100 text-slate-600 font-bold text-xs flex items-center justify-center shrink-0">
                            {{ $i + 1 }}
                        </span>
                        <input type="text" name="cards[{{ $unitKey }}][features][{{ $i }}]" value="{{ old("cards.$unitKey.features.$i", $card['features'][$i] ?? '') }}" class="flex-1 px-3.5 py-2 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:outline-hidden" placeholder="Poin keunggulan {{ $i + 1 }}">
                    </div>
                    @endfor
                </div>
            </div>

            {{-- METADATA FOOTER & ACTION BUTTONS --}}
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs space-y-6">
                <h3 class="text-sm font-extrabold uppercase tracking-wider text-slate-800 border-b border-slate-100 pb-4 flex items-center gap-2">
                    <i class="fa-solid fa-link text-indigo-600"></i>
                    <span>Metadata Bawah & Tautan Tombol Aksi</span>
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Metadata Kiri (NPSN)</label>
                        <input type="text" name="cards[{{ $unitKey }}][meta_left]" value="{{ old("cards.$unitKey.meta_left", $card['meta_left'] ?? '') }}" class="w-full px-3.5 py-2.5 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:outline-hidden" placeholder="Contoh: NPSN: 69881529">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1.5">Metadata Kanan (Tahun / Siswa)</label>
                        <input type="text" name="cards[{{ $unitKey }}][meta_right]" value="{{ old("cards.$unitKey.meta_right", $card['meta_right'] ?? '') }}" class="w-full px-3.5 py-2.5 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:outline-hidden" placeholder="Contoh: 293 Murid Aktif / Berdiri 2014">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 pt-2 border-t border-slate-100">
                    <div class="space-y-3">
                        <label class="block text-xs font-bold text-slate-700">Tombol Utama (Kunjungi Website)</label>
                        <div>
                            <span class="text-[11px] text-slate-500 block mb-1">Teks Tombol:</span>
                            <input type="text" name="cards[{{ $unitKey }}][btn_site_text]" value="{{ old("cards.$unitKey.btn_site_text", $card['btn_site_text'] ?? '') }}" class="w-full px-3 py-2 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:outline-hidden">
                        </div>
                        <div>
                            <span class="text-[11px] text-slate-500 block mb-1">URL Tujuan:</span>
                            <input type="text" name="cards[{{ $unitKey }}][btn_site_url]" value="{{ old("cards.$unitKey.btn_site_url", $card['btn_site_url'] ?? '') }}" class="w-full px-3 py-2 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:outline-hidden">
                        </div>
                    </div>

                    <div class="space-y-3">
                        <label class="block text-xs font-bold text-slate-700">Tombol Kedua (SPMB Online)</label>
                        <div>
                            <span class="text-[11px] text-slate-500 block mb-1">Teks Tombol:</span>
                            <input type="text" name="cards[{{ $unitKey }}][btn_spmb_text]" value="{{ old("cards.$unitKey.btn_spmb_text", $card['btn_spmb_text'] ?? '') }}" class="w-full px-3 py-2 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:outline-hidden">
                        </div>
                        <div>
                            <span class="text-[11px] text-slate-500 block mb-1">URL Tujuan:</span>
                            <input type="text" name="cards[{{ $unitKey }}][btn_spmb_url]" value="{{ old("cards.$unitKey.btn_spmb_url", $card['btn_spmb_url'] ?? '') }}" class="w-full px-3 py-2 text-xs rounded-xl border border-slate-300 focus:ring-2 focus:ring-emerald-500 focus:outline-hidden">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @endforeach

        {{-- SUBMIT BAR --}}
        <div class="sticky bottom-4 z-20 bg-white/95 backdrop-blur-md p-4 rounded-2xl border border-slate-200 shadow-xl flex items-center justify-between">
            <span class="text-xs text-slate-500 font-medium">Pastikan semua data kartu sudah benar sebelum menyimpan.</span>
            <button type="submit" class="px-6 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold text-xs uppercase tracking-wider shadow-md transition flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-floppy-disk"></i>
                <span>Simpan Perubahan Semua Kartu Unit</span>
            </button>
        </div>
    </form>

</div>
@endsection

