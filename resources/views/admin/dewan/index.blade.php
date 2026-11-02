@extends('layouts.admin')

@section('title', 'Guru & GTK')
@section('header_title', 'Guru & GTK')

@section('content')
<div class="space-y-6">
    <div class="bg-white p-6 sm:p-8 rounded-3xl shadow-xs border border-slate-200/80">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-6 border-b border-slate-100">
            <div>
                <h2 class="text-lg font-black text-slate-800">Daftar Dewan Guru & Tenaga Pendidik</h2>
                <p class="text-xs text-slate-500 mt-0.5">Kelola profil guru, foto resmi, mata pelajaran / amanah, dan urutan tampil.</p>
            </div>
            <a href="{{ route('admin.dewan.create') }}" class="inline-flex items-center space-x-2 bg-indigo-600 hover:bg-[#094d28] text-white font-bold text-xs px-5 py-2.5 rounded-xl shadow-md transition self-start sm:self-auto">
                <i class="fa-solid fa-user-plus"></i>
                <span>Tambah Tenaga Pendidik</span>
            </a>
        </div>

        {{-- UNIT TABS / INDICATOR --}}
        @if(($userUnit ?? 'yayasan') === 'yayasan')
            <div class="flex flex-wrap items-center gap-1.5 mt-5 p-2 bg-slate-100 rounded-2xl text-xs font-bold">
                <span class="text-[10px] uppercase tracking-wider text-slate-500 px-2 font-black">Filter Unit:</span>
                <a href="{{ route('admin.dewan.index', ['unit' => 'all']) }}" class="px-3 py-1.5 rounded-xl transition {{ ($selectedUnit ?? 'all') === 'all' ? 'bg-indigo-600 text-white shadow-xs' : 'bg-white text-slate-700 hover:bg-slate-200' }}">
                    Semua Tenaga Pendidik
                </a>
                <a href="{{ route('admin.dewan.index', ['unit' => 'tk']) }}" class="px-3 py-1.5 rounded-xl transition {{ ($selectedUnit ?? '') === 'tk' ? 'bg-amber-500 text-slate-950 shadow-xs' : 'bg-white text-slate-700 hover:bg-amber-50' }}">
                    TKS IT Madani
                </a>
                <a href="{{ route('admin.dewan.index', ['unit' => 'sd']) }}" class="px-3 py-1.5 rounded-xl transition {{ ($selectedUnit ?? '') === 'sd' ? 'bg-emerald-600 text-white shadow-xs' : 'bg-white text-slate-700 hover:bg-emerald-50' }}">
                    SDS IT Madani
                </a>
                <a href="{{ route('admin.dewan.index', ['unit' => 'smp']) }}" class="px-3 py-1.5 rounded-xl transition {{ ($selectedUnit ?? '') === 'smp' ? 'bg-blue-600 text-white shadow-xs' : 'bg-white text-slate-700 hover:bg-blue-50' }}">
                    SMPS IT Madani
                </a>
            </div>
        @else
            @php
                $myUnit = \App\Services\SchoolUnitService::getUnit($userUnit);
            @endphp
            <div class="mt-4 p-3 bg-gradient-to-r {{ $userUnit === 'tk' ? 'from-amber-900/60 to-slate-900 border-amber-500/40 text-amber-200' : ($userUnit === 'sd' ? 'from-emerald-900/60 to-slate-900 border-emerald-500/40 text-emerald-200' : 'from-blue-900/60 to-slate-900 border-blue-500/40 text-blue-200') }} rounded-2xl border text-xs font-bold flex items-center justify-between">
                <span>Dewan Guru Khusus Unit: {{ $myUnit['name'] ?? strtoupper($userUnit) }}</span>
                <a href="{{ route('unit.dewan', $userUnit) }}" target="_blank" class="px-2.5 py-1 rounded-xl bg-white/20 hover:bg-white/30 text-white text-[11px] transition">
                    Lihat di Web &rarr;
                </a>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
            @forelse($dewan as $d)
                <div class="bg-slate-50 rounded-2xl p-5 border border-slate-200/80 flex flex-col justify-between space-y-4 hover:shadow-md transition">
                    <div class="text-center space-y-3">
                        <div class="w-24 h-24 mx-auto rounded-2xl bg-white p-1 shadow-xs border border-slate-200 overflow-hidden">
                            <img src="{{ $d->photo }}" alt="{{ $d->name }}" class="w-full h-full object-cover object-top rounded-xl" onerror="this.onerror=null; this.src='/uploads/logo-madani-square.webp'">
                        </div>
                        <div>
                            <h3 class="font-extrabold text-sm text-slate-900">{{ $d->name }}</h3>
                            <span class="inline-block bg-emerald-100 text-indigo-600 text-[10px] font-bold px-2 py-0.5 rounded-full mt-1">
                                {{ $d->position }}
                            </span>
                            <p class="text-[11px] text-slate-500 mt-2 line-clamp-2">{{ $d->fraction ?? 'Dewan Guru & GTK Madani' }}</p>
                        </div>
                    </div>

                    <div class="pt-3 border-t border-slate-200 flex items-center justify-between text-xs">
                        <span class="text-slate-400 text-[10px]">Urutan: #{{ $d->order }}</span>
                        <div class="flex items-center space-x-2">
                            <a href="{{ route('admin.dewan.edit', $d) }}" class="p-2 text-slate-600 hover:text-emerald-600 hover:bg-red-100 rounded-lg transition" title="Edit Profil">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('admin.dewan.destroy', $d) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data anggota dewan ini?');" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition" title="Hapus">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-8 text-center text-xs text-slate-400">Belum ada data anggota dewan.</div>
            @endforelse
        </div>
    </div>
</div>
@endsection
