@extends('layouts.admin')

@section('title', 'Pendaftar SPMB')
@section('header_title', 'Pendaftar SPMB')

@section('content')
<div class="space-y-6">

    {{-- TOP NAVIGATION TABS & ACTIONS (Rapi, Terstruktur & Responsif) --}}
    <div class="bg-white p-2 sm:p-2.5 rounded-2xl shadow-xs border border-slate-200/80 flex flex-col md:flex-row md:items-center justify-between gap-2.5">
        <div class="flex items-center gap-1.5 overflow-x-auto no-scrollbar py-0.5">
            <a href="{{ route('admin.ppdb.index') }}" class="px-3.5 py-2 rounded-xl font-bold text-xs bg-emerald-600 text-white shadow-xs transition whitespace-nowrap">
                <i class="fa-solid fa-users mr-1.5"></i> Data Pendaftar
            </a>
            <a href="{{ route('admin.ppdb.content', ['tab' => 'jalur']) }}" class="px-3.5 py-2 rounded-xl font-bold text-xs bg-slate-50 text-slate-700 hover:bg-slate-100 border border-slate-200/60 transition whitespace-nowrap flex items-center space-x-1.5">
                <i class="fa-solid fa-route"></i>
                <span>Jalur SPMB</span>
            </a>
            <a href="{{ route('admin.ppdb.content', ['tab' => 'banner']) }}" class="px-3.5 py-2 rounded-xl font-bold text-xs bg-slate-50 text-slate-700 hover:bg-slate-100 border border-slate-200/60 transition whitespace-nowrap flex items-center space-x-1.5">
                <i class="fa-solid fa-bullhorn"></i>
                <span>Banner SPMB</span>
            </a>
            <a href="{{ route('admin.ppdb.content', ['tab' => 'konten']) }}" class="px-3.5 py-2 rounded-xl font-bold text-xs bg-slate-50 text-slate-700 hover:bg-slate-100 border border-slate-200/60 transition whitespace-nowrap flex items-center space-x-1.5">
                <i class="fa-solid fa-sliders"></i>
                <span>Konten Halaman</span>
            </a>
            <a href="{{ route('admin.ppdb.content', ['tab' => 'formulir']) }}" class="px-3.5 py-2 rounded-xl font-bold text-xs bg-slate-50 text-slate-700 hover:bg-slate-100 border border-slate-200/60 transition whitespace-nowrap flex items-center space-x-1.5">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
                <span>Form Online</span>
            </a>
        </div>

        <div class="flex items-center gap-2 shrink-0 border-t md:border-t-0 pt-2 md:pt-0 border-slate-100">
            <a href="{{ route('admin.ppdb.export.excel') }}" class="px-3 py-2 rounded-xl font-bold text-xs bg-emerald-600 hover:bg-emerald-700 text-white shadow-xs transition flex items-center space-x-1.5">
                <i class="fa-solid fa-file-excel"></i>
                <span>Excel</span>
            </a>
            <a href="{{ route('admin.ppdb.export.pdf') }}" target="_blank" class="px-3 py-2 rounded-xl font-bold text-xs bg-red-600 hover:bg-red-700 text-white shadow-xs transition flex items-center space-x-1.5">
                <i class="fa-solid fa-file-pdf"></i>
                <span>PDF</span>
            </a>
            <a href="{{ route('ppdb.index') }}" target="_blank" class="px-3 py-2 rounded-xl font-bold text-xs bg-slate-900 hover:bg-black text-white shadow-xs transition flex items-center space-x-1.5">
                <i class="fa-solid fa-arrow-up-right-from-square text-slate-400"></i>
                <span>Lihat Web</span>
            </a>
        </div>
    </div>


    {{-- UNIT FILTER / SCOPE INDICATOR --}}
    @if(($userUnit ?? 'yayasan') === 'yayasan')
        <div class="bg-slate-900 text-white p-3 rounded-2xl flex flex-wrap items-center justify-between gap-3 shadow-md border border-slate-800">
            <div class="flex items-center space-x-2">
                <i class="fa-solid fa-filter text-amber-400 text-xs"></i>
                <span class="text-xs font-bold text-slate-200">Filter Unit Sekolah:</span>
            </div>
            <div class="flex flex-wrap items-center gap-1.5 text-xs">
                <a href="{{ route('admin.ppdb.index', ['unit' => 'all']) }}" class="px-3 py-1.5 rounded-xl font-bold transition {{ ($selectedUnit ?? 'all') === 'all' ? 'bg-indigo-600 text-white shadow ring-1 ring-indigo-400' : 'bg-slate-800 text-slate-300 hover:bg-slate-700' }}">
                    <i class="fa-solid fa-layer-group mr-1 text-[10px]"></i> Semua Unit
                </a>
                <a href="{{ route('admin.ppdb.index', ['unit' => 'tk']) }}" class="px-3 py-1.5 rounded-xl font-bold transition {{ ($selectedUnit ?? '') === 'tk' ? 'bg-amber-500 text-slate-950 font-black shadow ring-1 ring-amber-300' : 'bg-slate-800 text-slate-300 hover:bg-slate-700' }}">
                    <i class="fa-solid fa-shapes mr-1 text-[10px]"></i> TKS IT Madani
                </a>
                <a href="{{ route('admin.ppdb.index', ['unit' => 'sd']) }}" class="px-3 py-1.5 rounded-xl font-bold transition {{ ($selectedUnit ?? '') === 'sd' ? 'bg-emerald-600 text-white font-black shadow ring-1 ring-emerald-300' : 'bg-slate-800 text-slate-300 hover:bg-slate-700' }}">
                    <i class="fa-solid fa-book-open-reader mr-1 text-[10px]"></i> SDS IT Madani
                </a>
                <a href="{{ route('admin.ppdb.index', ['unit' => 'smp']) }}" class="px-3 py-1.5 rounded-xl font-bold transition {{ ($selectedUnit ?? '') === 'smp' ? 'bg-blue-600 text-white font-black shadow ring-1 ring-blue-300' : 'bg-slate-800 text-slate-300 hover:bg-slate-700' }}">
                    <i class="fa-solid fa-graduation-cap mr-1 text-[10px]"></i> SMPS IT Madani
                </a>
            </div>
        </div>
    @else
        @php
            $myUnit = \App\Services\SchoolUnitService::getUnit($userUnit);
        @endphp
        <div class="bg-gradient-to-r {{ $userUnit === 'tk' ? 'from-amber-900/60 to-slate-900 border-amber-500/40' : ($userUnit === 'sd' ? 'from-emerald-900/60 to-slate-900 border-emerald-500/40' : 'from-blue-900/60 to-slate-900 border-blue-500/40') }} text-white p-3.5 rounded-2xl flex flex-wrap items-center justify-between gap-3 shadow-md border">
            <div class="flex items-center space-x-2.5">
                <span class="w-8 h-8 rounded-xl {{ $userUnit === 'tk' ? 'bg-amber-500 text-slate-950' : ($userUnit === 'sd' ? 'bg-emerald-500 text-white' : 'bg-blue-500 text-white') }} flex items-center justify-center text-xs font-black">
                    <i class="{{ $myUnit['icon'] ?? 'fa-solid fa-school' }}"></i>
                </span>
                <div>
                    <h3 class="text-xs font-black uppercase tracking-wide text-white">Data SPMB Khusus: {{ $myUnit['name'] ?? strtoupper($userUnit) }}</h3>
                    <p class="text-[10px] text-slate-300">Pendaftar otomatis tersaring hanya untuk jenjang unit sekolah Anda.</p>
                </div>
            </div>
            <a href="{{ route('unit.ppdb', $userUnit) }}" target="_blank" class="px-3 py-1.5 rounded-xl text-xs font-bold bg-white/10 hover:bg-white/20 text-white border border-white/20 transition flex items-center space-x-1">
                <span>Lihat Formulir Unit</span>
                <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
            </a>
        </div>
    @endif

    {{-- STATS CARDS --}}
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
        <a href="{{ route('admin.ppdb.index') }}" class="p-4 rounded-2xl bg-white border border-slate-200 shadow-xs hover:border-indigo-600 transition">
            <span class="text-[11px] font-bold text-slate-500 uppercase tracking-wider block">Total Pendaftar</span>
            <span class="text-2xl font-black text-slate-900 mt-1 block">{{ number_format($stats['total']) }}</span>
        </a>
        <a href="{{ route('admin.ppdb.index', ['status' => 'pending']) }}" class="p-4 rounded-2xl bg-amber-50 border border-amber-200 shadow-xs hover:border-amber-400 transition">
            <span class="text-[11px] font-bold text-amber-700 uppercase tracking-wider block">Menunggu Verifikasi</span>
            <span class="text-2xl font-black text-amber-900 mt-1 block">{{ number_format($stats['pending']) }}</span>
        </a>
        <a href="{{ route('admin.ppdb.index', ['status' => 'verified']) }}" class="p-4 rounded-2xl bg-blue-50 border border-blue-200 shadow-xs hover:border-blue-400 transition">
            <span class="text-[11px] font-bold text-blue-700 uppercase tracking-wider block">Terverifikasi</span>
            <span class="text-2xl font-black text-blue-900 mt-1 block">{{ number_format($stats['verified']) }}</span>
        </a>
        <a href="{{ route('admin.ppdb.index', ['status' => 'accepted']) }}" class="p-4 rounded-2xl bg-indigo-50/60 border border-indigo-200 shadow-xs hover:border-emerald-400 transition">
            <span class="text-[11px] font-bold text-indigo-700 uppercase tracking-wider block">Diterima</span>
            <span class="text-2xl font-black text-emerald-900 mt-1 block">{{ number_format($stats['accepted']) }}</span>
        </a>
    </div>

    {{-- MAIN TABLE CARD --}}
    <div class="bg-white p-6 sm:p-8 rounded-3xl shadow-xs border border-slate-200/80 space-y-6">
        
        {{-- SEARCH & FILTER BAR --}}
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-6 border-b border-slate-100">
            <div>
                <h2 class="text-lg font-black text-slate-800">Daftar Calon Siswa Baru ({{ \App\Models\Setting::get('ppdb_year', '2026/2027') }})</h2>
                <p class="text-xs text-slate-500 mt-0.5">Kelola formulir masuk, verifikasi berkas akta & bukti transfer, dan status penerimaan.</p>
            </div>

            <form action="{{ route('admin.ppdb.index') }}" method="GET" class="flex items-center gap-2">
                <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari nama, No. Reg, asal sekolah..." class="bg-slate-50 text-xs text-slate-800 rounded-xl px-4 py-2 border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-600 w-48 sm:w-64">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-xl text-xs font-bold transition shadow-sm">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>

        {{-- TABLE --}}
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs text-slate-700">
                <thead class="bg-slate-50 text-[11px] font-bold text-slate-400 uppercase tracking-wider border-b border-slate-200/80">
                    <tr>
                        <th class="py-3 px-4">No. Registrasi</th>
                        <th class="py-3 px-4">Nama Lengkap</th>
                        <th class="py-3 px-4">Asal Sekolah</th>
                        <th class="py-3 px-4">No. HP / WA</th>
                        <th class="py-3 px-4">Status</th>
                        <th class="py-3 px-4">Tanggal Daftar</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($registrations as $reg)
                        <tr class="hover:bg-slate-50 transition">
                            <td class="py-3.5 px-4 font-mono font-bold text-emerald-600">{{ $reg->registration_number }}</td>
                            <td class="py-3.5 px-4">
                                <span class="font-bold text-slate-900 block">{{ $reg->full_name }}</span>
                                <span class="text-[11px] text-slate-400">{{ $reg->gender }} &bull; {{ $reg->birth_place }}</span>
                                <div class="mt-1 flex items-center gap-1.5 flex-wrap">
                                    <span class="text-[10px] bg-indigo-50/60 text-indigo-600 font-bold px-2 py-0.5 rounded-md border border-indigo-200">{{ $reg->track ?: 'Reguler' }}</span>
                                    <span class="text-[10px] bg-slate-100 text-slate-600 font-bold px-2 py-0.5 rounded-md border border-slate-200">{{ $reg->program_type ?: 'Boarding' }}</span>
                                </div>
                            </td>
                            <td class="py-3.5 px-4 text-slate-600 font-medium">{{ $reg->previous_school }}</td>
                            <td class="py-3.5 px-4">
                                <a href="https://wa.me/{{ preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', $reg->phone)) }}" target="_blank" class="text-indigo-600 hover:underline font-bold flex items-center space-x-1">
                                    <i class="fa-brands fa-whatsapp text-sm"></i>
                                    <span>{{ $reg->phone }}</span>
                                </a>
                            </td>
                            <td class="py-3.5 px-4">
                                <span class="px-2.5 py-1 rounded-full text-[10px] font-bold border {{ $reg->status_badge }}">
                                    {{ $reg->status_label }}
                                </span>
                            </td>
                            <td class="py-3.5 px-4 text-slate-500">{{ $reg->created_at->format('d/m/Y H:i') }}</td>
                            <td class="py-3.5 px-4 text-center">
                                <div class="flex items-center justify-center space-x-2">
                                    <a href="{{ route('admin.ppdb.show', $reg) }}" class="p-1.5 text-blue-600 hover:bg-blue-50 rounded-lg transition" title="Lihat Detail & Berkas">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.ppdb.print', $reg) }}" target="_blank" class="p-1.5 text-indigo-600 hover:bg-indigo-50/60 rounded-lg transition" title="Cetak Bukti Pendaftaran">
                                        <i class="fa-solid fa-print"></i>
                                    </a>
                                    <form action="{{ route('admin.ppdb.destroy', $reg) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data pendaftaran {{ addslashes($reg->full_name) }}? Tindakan ini tidak dapat dibatalkan.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-1.5 text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition" title="Hapus Data">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="py-8 text-center text-slate-400">
                                <i class="fa-solid fa-inbox text-3xl block mb-2 text-slate-300"></i>
                                Belum ada formulir pendaftaran PPDB yang masuk.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- PAGINATION --}}
        @if($registrations->hasPages())
            <div class="pt-4 border-t border-slate-100">
                {{ $registrations->links() }}
            </div>
        @endif

    </div>

</div>
@endsection
