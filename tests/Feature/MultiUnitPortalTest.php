<?php

use App\Models\Post;

test('yayasan parent portal loads successfully with unit showcase cards and leadership', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
    $response->assertSee('Yayasan Agung Madani', false);
    $response->assertSee('TKS Islam Terpadu Madani', false);
    $response->assertSee('SDS Islam Terpadu Madani', false);
    $response->assertSee('SMPS Islam Terpadu Madani', false);
    $response->assertSee('Drs. H. Legianto', false);

    $yayasanRouteResponse = $this->get('/yayasan');
    $yayasanRouteResponse->assertStatus(200);
    $yayasanRouteResponse->assertSee('Yayasan Agung Madani', false);
});

test('tks it madani unit homepage loads with identical smpitishum layout and unit identity', function () {
    $response = $this->get('/tk');
    $response->assertStatus(200);
    $response->assertSee('TKS IT MADANI', false);
    $response->assertSee('Ayu Rahmayani', false);
    $response->assertSee('69915461', false); // NPSN
});

test('sds it madani unit homepage loads with identical smpitishum layout and unit identity', function () {
    $response = $this->get('/sd');
    $response->assertStatus(200);
    $response->assertSee('SDS IT MADANI', false);
    $response->assertSee('Yudhi Arsyandi', false);
    $response->assertSee('69881529', false); // NPSN
});

test('smps it madani unit homepage loads with identical smpitishum layout and unit identity', function () {
    $response = $this->get('/smp');
    $response->assertStatus(200);
    $response->assertSee('SMPS IT MADANI', false);
    $response->assertSee('Ribang Imam Satria', false);
    $response->assertSee('70034917', false); // NPSN
});

test('unit specific subroutes load cleanly', function () {
    // Dewan guru with tabs
    $dewanResponse = $this->get('/dewan-guru');
    $dewanResponse->assertStatus(200);
    $dewanResponse->assertSee('Dewan Guru', false);
    $dewanResponse->assertSee('TKS IT Madani', false);
    $dewanResponse->assertSee('SDS IT Madani', false);
    $dewanResponse->assertSee('SMPS IT Madani', false);

    // Unit dewan guru
    $this->get('/tk/dewan-guru')->assertStatus(200);
    $this->get('/sd/dewan-guru')->assertStatus(200);
    $this->get('/smp/dewan-guru')->assertStatus(200);

    // Visi Misi
    $visiResponse = $this->get('/visi-dan-misi');
    $visiResponse->assertStatus(200);
    $visiResponse->assertSee('Yayasan Agung Madani', false);

    // Struktur Organisasi
    $strukturResponse = $this->get('/struktur-organisasi');
    $strukturResponse->assertStatus(200);
    $strukturResponse->assertSee('Yayasan Agung Madani', false);

    // SPMB Info & Form
    $ppdbResponse = $this->get('/ppdb');
    $ppdbResponse->assertStatus(200);

    $formResponse = $this->get('/form_ppdb');
    $formResponse->assertStatus(200);
    $formResponse->assertSee('Formulir Pendaftaran', false);

    // Form alias redirect
    $this->get('/form-ppdb')->assertRedirect(route('spmb.form'));
    $formResponse->assertSee('Pilihan Jenjang / Unit Sekolah', false);
});

test('yayasan portal displays formal pas foto ketua yayasan and authentic madani documentation', function () {
    Post::create([
        'title' => 'Kegiatan Santri SIT Madani',
        'slug' => 'kegiatan-santri-sit-madani-test',
        'type' => 'gallery',
        'status' => 'publish',
        'featured_image' => '/uploads/madani/kegiatan-madani-01.webp',
        'content' => 'Dokumentasi kegiatan santri',
    ]);

    $response = $this->get('/');
    $response->assertStatus(200);
    $response->assertSee('/uploads/dewan/ust-legianto.webp', false);
    $response->assertSee('Drs. H. Legianto, M.E.E.', false);

    // Sambutan yayasan route
    $sambutanResponse = $this->get('/yayasan/sambutan');
    $sambutanResponse->assertStatus(200);
    $sambutanResponse->assertSee('/uploads/dewan/ust-legianto.webp', false);

    // Galeri displays authentic photos
    $galeriResponse = $this->get('/galeri');
    $galeriResponse->assertStatus(200);
    $galeriResponse->assertSee('kegiatan-madani-01.webp', false);
});
