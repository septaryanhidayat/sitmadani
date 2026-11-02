<?php

use App\Models\Post;
use App\Models\User;

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

test('unit quick menus on frontend link strictly to unit specific pages without cross contamination', function () {
    // TK Homepage quick menus
    $tkRes = $this->get('/tk');
    $tkRes->assertStatus(200);
    $tkRes->assertSee('/tk/spmb', false);
    $tkRes->assertSee('/tk/tentang-kami', false);
    $tkRes->assertSee('/tk/dewan-guru', false);
    $tkRes->assertSee('/tk/fasilitas', false);
    $tkRes->assertSee('/tk/visi-dan-misi', false);
    $tkRes->assertSee('/tk/prestasi', false);
    $tkRes->assertSee('/tk/galeri', false);
    $tkRes->assertSee('/tk/artikel', false);

    // SD Homepage quick menus
    $sdRes = $this->get('/sd');
    $sdRes->assertStatus(200);
    $sdRes->assertSee('/sd/spmb', false);
    $sdRes->assertSee('/sd/dewan-guru', false);
    $sdRes->assertSee('/sd/fasilitas', false);

    // SMP Homepage quick menus
    $smpRes = $this->get('/smp');
    $smpRes->assertStatus(200);
    $smpRes->assertSee('/smp/spmb', false);
    $smpRes->assertSee('/smp/dewan-guru', false);
    $smpRes->assertSee('/smp/fasilitas', false);
});

test('dedicated unit subroutes load cleanly with unit branding', function () {
    $units = ['tk', 'sd', 'smp'];
    foreach ($units as $u) {
        $this->get("/{$u}/artikel")->assertStatus(200);
        $this->get("/{$u}/prestasi")->assertStatus(200);
        $this->get("/{$u}/galeri")->assertStatus(200);
        $this->get("/{$u}/video")->assertStatus(200);
        $this->get("/{$u}/hubungi")->assertStatus(200);
        $this->get("/{$u}/dewan-guru")->assertStatus(200);
        $this->get("/{$u}/fasilitas")->assertStatus(200);
        $this->get("/{$u}/spmb")->assertStatus(200);
    }
});

test('admin dashboard and ppdb are scoped and isolated per unit', function () {
    $adminTk = User::firstOrCreate(
        ['email' => 'admin_tk@sitmadani.sch.id'],
        ['name' => 'Admin TKS IT Madani', 'password' => bcrypt('password'), 'role' => 'admin', 'unit' => 'tk']
    );
    $adminSd = User::firstOrCreate(
        ['email' => 'admin_sd@sitmadani.sch.id'],
        ['name' => 'Admin SDS IT Madani', 'password' => bcrypt('password'), 'role' => 'admin', 'unit' => 'sd']
    );
    $adminSmp = User::firstOrCreate(
        ['email' => 'admin_smp@sitmadani.sch.id'],
        ['name' => 'Admin SMPS IT Madani', 'password' => bcrypt('password'), 'role' => 'admin', 'unit' => 'smp']
    );
    $superAdmin = User::firstOrCreate(
        ['email' => 'admin@sitmadani.sch.id'],
        ['name' => 'Administrator Yayasan', 'password' => bcrypt('password'), 'role' => 'super_admin', 'unit' => 'yayasan']
    );

    // 1. Admin TK sees TK scope
    $tkDashboard = $this->actingAs($adminTk)->get('/admin');
    $tkDashboard->assertStatus(200);
    $tkDashboard->assertSee('ADMIN TKS IT MADANI', false);
    $tkDashboard->assertSee('TKS IT Madani', false);

    $tkPpdb = $this->actingAs($adminTk)->get('/admin/ppdb');
    $tkPpdb->assertStatus(200);
    $tkPpdb->assertSee('Data SPMB Khusus: TKS Islam Terpadu Madani', false);

    // 2. Admin SD sees SD scope
    $sdDashboard = $this->actingAs($adminSd)->get('/admin');
    $sdDashboard->assertStatus(200);
    $sdDashboard->assertSee('ADMIN SDS IT MADANI', false);

    $sdPpdb = $this->actingAs($adminSd)->get('/admin/ppdb');
    $sdPpdb->assertStatus(200);
    $sdPpdb->assertSee('Data SPMB Khusus: SDS Islam Terpadu Madani', false);

    // 3. Admin SMP sees SMP scope
    $smpDashboard = $this->actingAs($adminSmp)->get('/admin');
    $smpDashboard->assertStatus(200);
    $smpDashboard->assertSee('ADMIN SMPS IT MADANI', false);

    // 4. Super Admin Yayasan sees Yayasan and switcher
    $yayasanDashboard = $this->actingAs($superAdmin)->get('/admin');
    $yayasanDashboard->assertStatus(200);
    $yayasanDashboard->assertSee('YAYASAN AGUNG MADANI', false);

    $yayasanPpdb = $this->actingAs($superAdmin)->get('/admin/ppdb');
    $yayasanPpdb->assertStatus(200);
    $yayasanPpdb->assertSee('Filter Unit Sekolah:', false);
});
