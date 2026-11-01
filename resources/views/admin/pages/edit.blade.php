@extends('layouts.admin')

@section('title', 'Edit Halaman: ' . $page->title)
@section('header_title', 'Edit Halaman: ' . $page->title)

@section('content')
<div class="max-w-5xl mx-auto space-y-6">
    <div class="flex items-center justify-between">
        <a href="{{ route('admin.pages.index') }}" class="text-xs font-semibold text-slate-500 hover:text-slate-800 flex items-center space-x-2">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Kembali ke Daftar Halaman</span>
        </a>
        <div class="flex items-center space-x-3">
            <a href="{{ url($page->slug) }}" target="_blank" rel="noopener" class="inline-flex items-center space-x-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold px-3 py-1.5 rounded-xl transition">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>Lihat di Website</span>
            </a>
            <span class="text-xs text-slate-400">Slug URL: <code class="bg-slate-100 px-2 py-1 rounded font-mono">/{{ $page->slug }}</code></span>
        </div>
    </div>

    <form action="{{ route('admin.pages.update', $page) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="bg-white p-6 sm:p-8 rounded-3xl shadow-xs border border-slate-200/80 space-y-6">
            
            {{-- Judul Halaman --}}
            <div>
                <label for="title" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Judul Halaman *</label>
                <input type="text" name="title" id="title" required value="{{ old('title', $page->title) }}" class="w-full bg-slate-50 text-sm font-semibold text-slate-800 rounded-xl px-4 py-3 border border-slate-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 transition">
                @error('title') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            {{-- Slug URL --}}
            <div>
                <label for="slug" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Slug URL Halaman</label>
                <div class="flex items-center bg-slate-50 rounded-xl border border-slate-200 px-3 focus-within:ring-2 focus-within:ring-[#059669]">
                    <span class="text-xs text-slate-400 font-mono">{{ url('/') }}/</span>
                    <input type="text" name="slug" id="slug" value="{{ old('slug', $page->slug) }}" class="w-full bg-transparent text-xs font-mono text-slate-800 py-3 px-1 border-0 focus:outline-none">
                </div>
                @error('slug') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            {{-- Gambar Utama (Featured Image) --}}
            <div>
                <label for="featured_image" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Gambar Sampul / Banner Halaman (Opsional)</label>
                @if($page->featured_image)
                    <div class="mb-3 flex items-center space-x-4 p-3 bg-slate-50 rounded-2xl border border-slate-200">
                        <img src="{{ $page->featured_image }}" alt="{{ $page->title }}" class="w-20 h-14 object-cover rounded-xl border border-slate-200">
                        <div>
                            <span class="text-xs font-bold text-slate-700 block">Gambar Sampul Saat Ini</span>
                            <span class="text-[11px] text-slate-400 font-mono">{{ $page->featured_image }}</span>
                        </div>
                    </div>
                @endif
                <div class="bg-red-50/70 border border-dashed border-red-200 rounded-2xl p-5 text-center">
                    <input type="file" name="featured_image" id="featured_image" accept="image/*" class="w-full text-xs text-slate-600 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-emerald-600 file:text-white hover:file:bg-[#d85c14]">
                    <p class="text-[11px] text-emerald-600 font-medium mt-2 flex items-center justify-center">
                        <i class="fa-solid fa-wand-magic-sparkles mr-1.5"></i>
                        Pilih gambar baru jika ingin mengganti gambar saat ini. Otomatis dikonversi ke format <strong>WebP</strong> tajam & ringan.
                    </p>
                </div>
                @error('featured_image') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            {{-- Ringkasan Pendek / Excerpt --}}
            <div>
                <label for="excerpt" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Ringkasan Pendek (Opsional)</label>
                <textarea name="excerpt" id="excerpt" rows="2" class="w-full bg-slate-50 text-xs text-slate-800 rounded-xl p-4 border border-slate-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 transition">{{ old('excerpt', $page->excerpt) }}</textarea>
                @error('excerpt') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            {{-- RICH TEXT WYSIWYG EDITOR (WordPress Style Toolbox) --}}
            <div>
                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                    Isi Konten Halaman (Toolbox Lengkap: Bold, Italic, Rata Kiri/Tengah/Kanan/Penuh, Heading, List)
                </label>
                
                {{-- Hidden input that holds HTML value --}}
                <input type="hidden" name="content" id="page_content_input" value="{{ old('content', $page->content) }}">

                {{-- Quill Container --}}
                <div id="page_editor" data-quill="page_content_input" class="bg-white"></div>
                @error('content') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            {{-- SEO Settings for this page --}}
            <div class="pt-6 border-t border-slate-100 space-y-4">
                <h3 class="font-bold text-sm text-slate-800">Optimasi SEO Halaman</h3>
                
                <div>
                    <label for="meta_title" class="block text-xs font-semibold text-slate-600 mb-1">Meta Title</label>
                    <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title', $page->meta_title) }}" placeholder="Judul pada mesin pencari Google..." class="w-full bg-slate-50 text-xs text-slate-800 rounded-xl px-4 py-2.5 border border-slate-200 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>

                <div>
                    <label for="meta_description" class="block text-xs font-semibold text-slate-600 mb-1">Meta Description</label>
                    <textarea name="meta_description" id="meta_description" rows="2" placeholder="Deskripsi singkat yang muncul di pencarian Google dan share medsos..." class="w-full bg-slate-50 text-xs text-slate-800 rounded-xl p-3 border border-slate-200 focus:outline-none focus:ring-2 focus:ring-emerald-500">{{ old('meta_description', $page->meta_description) }}</textarea>
                </div>
            </div>

            {{-- Action Buttons --}}
            <div class="pt-6 border-t border-slate-100 flex items-center justify-end space-x-3">
                <a href="{{ route('admin.pages.index') }}" class="px-5 py-2.5 rounded-xl border border-slate-200 text-slate-600 hover:bg-slate-50 text-xs font-bold transition">Batal</a>
                <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs px-6 py-2.5 rounded-xl shadow-md transition flex items-center space-x-2 cursor-pointer">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Simpan Perubahan Halaman</span>
                </button>
            </div>

        </div>
    </form>
</div>
@endsection
