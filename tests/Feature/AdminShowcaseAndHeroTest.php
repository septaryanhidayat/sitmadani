<?php

use App\Models\Setting;
use App\Models\User;

test('admin dapat mengakses halaman kelola showcase unit', function () {
    $admin = User::first() ?? User::factory()->create(['role' => 'super_admin']);

    $response = $this->actingAs($admin)->get(route('admin.showcase.index'));
    $response->assertStatus(200);
    $response->assertSee('Showcase Beranda Yayasan');
    $response->assertSee('TKS IT Madani');
    $response->assertSee('SDS IT Madani');
    $response->assertSee('SMPS IT Madani');
});

test('admin dapat memperbarui 3 kartu showcase unit', function () {
    $admin = User::first() ?? User::factory()->create(['role' => 'super_admin']);

    $payload = [
        'cards' => [
            'tk' => [
                'title' => 'TKS Islam Terpadu Madani Kayuagung',
                'level_badge' => 'PAUD / TK ISLAM TERPADU',
                'accreditation' => 'AKREDITASI B',
                'info_badge' => 'Karakter Rabbani',
                'subtitle' => 'Kayuagung, Kab. OKI',
                'leader_title' => 'Kepala Sekolah',
                'leader_name' => 'Bunda Ayu Rahmayani',
                'leader_sub' => 'NIY 01012021',
                'slogan' => 'Membentuk Generasi Ceria & Mandiri',
                'features' => ['Tahfidz Juz 30', 'Sentra Ibadah'],
                'meta_left' => 'NPSN: 69915461',
                'meta_right' => 'Berdiri 2014',
                'btn_site_text' => 'Kunjungi Website TKS IT',
                'btn_site_url' => '/tk',
                'btn_spmb_text' => 'SPMB Online',
                'btn_spmb_url' => '/tk/ppdb',
            ],
            'sd' => [
                'title' => 'SDS Islam Terpadu Madani Kayuagung',
                'level_badge' => 'SEKOLAH DASAR ISLAM TERPADU',
                'accreditation' => 'AKREDITASI B',
                'info_badge' => '13 Rombel',
                'subtitle' => 'Kayuagung, Kab. OKI',
                'leader_title' => 'Pimpinan & Komite',
                'leader_name' => 'Yudhi Arsyandi, S.Pd., Gr.',
                'leader_sub' => 'Komite: Ust Andi',
                'slogan' => 'Generasi Rabbani Berprestasi',
                'features' => ['Target 2 Juz Al-Qur\'an', '30 Hadits Harian'],
                'meta_left' => 'NPSN: 69881529',
                'meta_right' => '293 Siswa',
                'btn_site_text' => 'Kunjungi Website SDS IT',
                'btn_site_url' => '/sd',
                'btn_spmb_text' => 'SPMB Online',
                'btn_spmb_url' => '/sd/ppdb',
            ],
            'smp' => [
                'title' => 'SMPS Islam Terpadu Madani Kayuagung',
                'level_badge' => 'SMP IT & ASRAMA TAHFIDZ',
                'accreditation' => 'AKREDITASI B',
                'info_badge' => 'Boarding & Full Day',
                'subtitle' => 'Kayuagung, Kab. OKI',
                'leader_title' => 'Kepala Sekolah',
                'leader_name' => 'Ribang Imam Satria, S.Pi., Gr.',
                'leader_sub' => 'Ust. Ribang',
                'slogan' => 'Generasi Qur\'ani & Moderat',
                'features' => ['Asrama Tahfidz', 'Tasmi\' Bersanad'],
                'meta_left' => 'NPSN: 70034917',
                'meta_right' => 'NSS: 202110234917',
                'btn_site_text' => 'Kunjungi Website SMPS IT',
                'btn_site_url' => '/smp',
                'btn_spmb_text' => 'SPMB Online',
                'btn_spmb_url' => '/smp/ppdb',
            ],
        ],
    ];

    $response = $this->actingAs($admin)->post(route('admin.showcase.update'), $payload);
    $response->assertRedirect(route('admin.showcase.index'));
    $response->assertSessionHas('success');

    // Cek di beranda yayasan tampil
    $homeResponse = $this->get(route('home'));
    $homeResponse->assertStatus(200);
    $homeResponse->assertSee('TKS Islam Terpadu Madani Kayuagung');
    $homeResponse->assertSee('Membentuk Generasi Ceria &amp; Mandiri', false);
});

test('beranda yayasan menampilkan hero stats chips secara simetris dan dinamis', function () {
    Setting::set('hero_stats_chips_yayasan', json_encode([
        ['title' => '3 Kampus', 'value' => '3 Kampus', 'subtitle' => 'TK, SD & SMP', 'label' => 'TK, SD & SMP', 'color' => 'text-amber-400'],
        ['title' => 'Terakreditasi B', 'value' => 'Terakreditasi B', 'subtitle' => 'BAN-SM & PAUD', 'label' => 'BAN-SM & PAUD', 'color' => 'text-emerald-400'],
        ['title' => 'JSIT Wilayah', 'value' => 'JSIT Wilayah', 'subtitle' => 'Sumatera Selatan', 'label' => 'Sumatera Selatan', 'color' => 'text-cyan-400'],
        ['title' => 'Tahfidz 30 Juz', 'value' => 'Tahfidz 30 Juz', 'subtitle' => 'Bersanad Mutqin', 'label' => 'Bersanad Mutqin', 'color' => 'text-amber-300'],
    ]));

    $response = $this->get(route('home'));
    $response->assertStatus(200);
    $response->assertSee('3 Kampus');
    $response->assertSee('Terakreditasi B');
    $response->assertSee('JSIT Wilayah');
    $response->assertSee('Tahfidz 30 Juz');
});
