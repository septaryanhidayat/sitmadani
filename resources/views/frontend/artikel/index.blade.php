@extends('layouts.frontend')

@php
    $unitTitle = $currentUnit ? $currentUnit['short_name'] : 'SIT Madani Kayuagung';
    $unitFullName = $currentUnit ? $currentUnit['name'] : 'Sekolah Islam Terpadu Madani Kayuagung';
    $unitRoute = $currentUnitKey ? route('unit.artikel', $currentUnitKey) : route('artikel.index');
@endphp

@section('title', 'Berita & Artikel - ' . $unitTitle)
@section('meta_description', 'Kumpulan berita resmi, liputan kegiatan, prestasi siswa, dan artikel edukasi ' . $unitFullName . '.')

@section('content')
{{-- HERO HEADER --}}
<div class="bg-gradient-to-r from-indigo-950 via-indigo-900 to-blue-950 border-b border-indigo-500/20 text-white py-10 sm:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left reveal-fade-up">
        <nav class="text-xs text-indigo-200 mb-3 flex items-center justify-center sm:justify-start space-x-2 flex-wrap">
            <a href="{{ route('home') }}" class="hover:text-white transition">Beranda</a>
            <span>/</span>
            <span class="text-amber-300 font-semibold">Berita &amp; Artikel</span>
            @if($currentUnit)
                <span>/</span>
                <span class="text-amber-200 font-medium">{{ $currentUnit['short_name'] }}</span>
            @endif
            @if($activeCategory)
                <span>/</span>
                <span class="text-white font-medium">{{ $activeCategory->name }}</span>
            @endif
        </nav>
        <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">
            @if($activeCategory)
                Kategori: <span class="text-amber-300">{{ $activeCategory->name }}</span>
            @elseif($activeTag)
                Tag: <span class="text-amber-300">#{{ $activeTag->name }}</span>
            @elseif(request('q'))
                Pencarian: <span class="text-amber-300">"{{ request('q') }}"</span>
            @else
                Berita &amp; Kabar {{ $unitTitle }}
            @endif
        </h1>
        <p class="text-xs sm:text-sm text-indigo-100 mt-2 font-light max-w-2xl">
            Informasi kegiatan, kabar terkini, dan publikasi resmi {{ $unitFullName }}.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 space-y-8">

    {{-- UNIT SWITCHER TABS --}}
    <div class="flex flex-wrap items-center justify-center gap-2 bg-white p-2 sm:p-3 rounded-2xl shadow-sm border border-gray-100">
        <a href="{{ route('artikel.index') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ empty($currentUnitKey) || $currentUnitKey === 'yayasan' ? 'bg-indigo-600 text-white shadow' : 'bg-gray-50 text-gray-700 hover:bg-gray-100' }}">
            <i class="fa-solid fa-landmark text-amber-500 mr-1.5"></i> Semua Berita Yayasan
        </a>
        <a href="{{ route('unit.artikel', 'tk') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $currentUnitKey === 'tk' ? 'bg-amber-500 text-slate-950 font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-amber-50' }}">
            <i class="fa-solid fa-shapes text-amber-500 mr-1.5"></i> Berita TKS IT
        </a>
        <a href="{{ route('unit.artikel', 'sd') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $currentUnitKey === 'sd' ? 'bg-emerald-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-emerald-50' }}">
            <i class="fa-solid fa-book-open-reader text-emerald-500 mr-1.5"></i> Berita SDS IT
        </a>
        <a href="{{ route('unit.artikel', 'smp') }}" class="px-3.5 py-2 rounded-xl text-xs sm:text-sm font-bold transition {{ $currentUnitKey === 'smp' ? 'bg-blue-600 text-white font-black shadow' : 'bg-gray-50 text-gray-700 hover:bg-blue-50' }}">
            <i class="fa-solid fa-graduation-cap text-blue-500 mr-1.5"></i> Berita SMPS IT
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-10">
        
        {{-- MAIN CONTENT (2/3) --}}
        <div class="lg:col-span-2 space-y-6 sm:space-y-8">
            
            {{-- Category Filter Pills --}}
            <div class="flex items-center space-x-2 overflow-x-auto pb-2 scrollbar-none text-xs">
                <a href="{{ $unitRoute }}" class="px-3.5 py-1.5 rounded-full font-bold whitespace-nowrap transition {{ !request('kategori') && !request('tag') ? 'bg-indigo-600 text-white shadow-sm' : 'bg-gray-100 text-gray-600 hover:bg-indigo-50/60 hover:text-indigo-600' }}">
                    Semua
                </a>
                @foreach($categories as $cat)
                    <a href="{{ $unitRoute }}?kategori={{ $cat->slug }}" class="px-3.5 py-1.5 rounded-full font-medium whitespace-nowrap transition {{ request('kategori') == $cat->slug ? 'bg-indigo-600 text-white shadow-sm font-bold' : 'bg-gray-100 text-gray-600 hover:bg-indigo-50/60 hover:text-indigo-600' }}">
                        {{ $cat->name }}
                    </a>
                @endforeach
            </div>

            {{-- Articles Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                @forelse($posts as $idx => $post)
                    <article class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col group reveal-fade-up delay-{{ $idx % 4 }}">
                        <a href="{{ route('artikel.show', $post->slug) }}" class="block relative h-48 overflow-hidden bg-gray-100">
                            @if($post->featured_image)
                                <img src="{{ $post->featured_image }}" alt="{{ $post->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500" onerror="this.onerror=null; this.src='/uploads/campus-sit-madani.webp'">
                            @else
                                <img src="/uploads/campus-sit-madani.webp" alt="{{ $post->title }}" class="absolute inset-0 w-full h-full object-cover">
                            @endif
                            @if($post->categories->isNotEmpty())
                                <span class="absolute top-3 left-3 bg-indigo-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded-full shadow-sm">
                                    {{ $post->categories->first()->name }}
                                </span>
                            @endif
                        </a>

                        <div class="p-5 flex-1 flex flex-col justify-between space-y-3">
                            <div class="space-y-2">
                                <div class="text-[11px] text-gray-400 flex items-center space-x-2">
                                    <span><i class="fa-regular fa-clock mr-1 text-indigo-500"></i>{{ $post->published_at ? $post->published_at->format('d M Y') : $post->created_at->format('d M Y') }}</span>
                                    <span>&bull;</span>
                                    <span><i class="fa-regular fa-eye mr-1 text-amber-500"></i>{{ $post->views_count }} views</span>
                                </div>
                                <h2 class="font-bold text-gray-900 text-sm sm:text-base group-hover:text-indigo-600 transition line-clamp-2 leading-snug">
                                    <a href="{{ route('artikel.show', $post->slug) }}">
                                        {{ $post->title }}
                                    </a>
                                </h2>
                                <p class="text-xs text-gray-500 line-clamp-2 font-light leading-relaxed">
                                    {{ $post->excerpt ?: Str::limit(strip_tags($post->content), 100) }}
                                </p>
                            </div>

                            <div class="pt-3 border-t border-gray-50 flex items-center justify-between text-xs">
                                <span class="font-bold text-indigo-600 text-[11px]">{{ $unitTitle }}</span>
                                <a href="{{ route('artikel.show', $post->slug) }}" class="font-bold text-indigo-600 hover:text-indigo-800 flex items-center">
                                    Baca Selengkapnya <i class="fa-solid fa-arrow-right ml-1 text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full bg-white rounded-2xl p-12 text-center border border-gray-100">
                        <i class="fa-regular fa-folder-open text-4xl text-gray-300 mb-3 block"></i>
                        <p class="text-sm font-medium text-gray-500">Tidak ada berita atau artikel ditemukan.</p>
                        @if(request('q') || request('kategori') || request('tag'))
                            <a href="{{ $unitRoute }}" class="mt-3 inline-block text-xs font-semibold text-indigo-600 hover:underline">
                                Reset Filter & Pencarian
                            </a>
                        @endif
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            <div class="pt-4">
                {{ $posts->links() }}
            </div>

        </div>

        {{-- SIDEBAR (1/3) --}}
        <div class="space-y-6 sm:space-y-8">
            
            {{-- Search Box --}}
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h3 class="text-sm font-bold text-gray-900 mb-3 flex items-center">
                    <i class="fa-solid fa-magnifying-glass text-indigo-600 mr-2 text-xs"></i> Cari Berita
                </h3>
                <form action="{{ $unitRoute }}" method="GET" class="relative">
                    <input type="text" name="q" value="{{ request('q') }}" placeholder="Ketik kata kunci..." class="w-full pl-4 pr-10 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-xs focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition">
                    <button type="submit" aria-label="Cari Berita" class="absolute right-2.5 top-1/2 -translate-y-1/2 text-gray-400 hover:text-indigo-600 transition">
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </button>
                </form>
            </div>

            {{-- Kategori Unit --}}
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h3 class="text-sm font-bold text-gray-900 mb-3 flex items-center">
                    <i class="fa-solid fa-folder-tree text-indigo-600 mr-2 text-xs"></i> Kategori Berita
                </h3>
                <ul class="space-y-2 text-xs">
                    @foreach($categories as $cat)
                        <li>
                            <a href="{{ $unitRoute }}?kategori={{ $cat->slug }}" class="flex items-center justify-between text-gray-600 hover:text-indigo-600 transition py-1">
                                <span class="flex items-center">
                                    <i class="fa-solid fa-chevron-right text-[9px] mr-2 text-gray-300"></i>
                                    {{ $cat->name }}
                                </span>
                                <span class="text-[10px] text-gray-400 font-bold bg-gray-100 px-2 py-0.5 rounded-full">
                                    {{ $cat->posts_count }}
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Berita Terbaru --}}
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h3 class="text-sm font-bold text-gray-900 mb-4 flex items-center">
                    <i class="fa-solid fa-fire text-amber-500 mr-2 text-xs"></i> Berita Terkini
                </h3>
                <div class="space-y-4">
                    @forelse($recentPosts as $rp)
                        <a href="{{ route('artikel.show', $rp->slug) }}" class="flex items-center space-x-3 group">
                            <div class="w-14 h-14 rounded-xl overflow-hidden bg-gray-100 flex-shrink-0 relative">
                                <img src="{{ $rp->featured_image_url }}" alt="{{ $rp->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition" onerror="this.onerror=null; this.src='/uploads/campus-sit-madani.webp'">
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="text-xs font-semibold text-gray-800 group-hover:text-indigo-600 transition line-clamp-2 leading-snug">
                                    {{ $rp->title }}
                                </h4>
                                <span class="text-[10px] text-gray-400 mt-1 block">
                                    {{ $rp->published_at ? $rp->published_at->format('d M Y') : '' }}
                                </span>
                            </div>
                        </a>
                    @empty
                        <p class="text-xs text-gray-400">Tidak ada berita terbaru.</p>
                    @endforelse
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
