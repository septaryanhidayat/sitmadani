<?php

use Database\Seeders\DatabaseSeeder;

test('halaman spmb dan formulir spmb dapat diakses secara publik', function () {
    $responseIndex = $this->get(route('spmb.index'));
    $responseIndex->assertStatus(200);
    $responseIndex->assertSee('SPMB Online');
    $responseIndex->assertSee('Tahun Pelajaran');

    $responseForm = $this->get(route('spmb.form'));
    $responseForm->assertStatus(200);
    $responseForm->assertSee('Formulir Pendaftaran SPMB');
});

test('halaman video menampilkan video resmi dari channel sit madani kayuagung', function () {
    $this->seed(DatabaseSeeder::class);

    $response = $this->get(route('video.index'));
    $response->assertStatus(200);
    $response->assertSee('HAFLAH AKHIRUSSANAH');
    $response->assertSee('SDIT Madani Kayuagung');
});

test('tidak ada lagi nama anita carlyna di halaman sambutan dan profil publik', function () {
    $responseSambutan = $this->get(route('page.sambutan'));
    $responseSambutan->assertStatus(200);
    $responseSambutan->assertDontSee('Anita Carlyna');
    $responseSambutan->assertSee('Ribang Imam Satria');

    $responseYayasan = $this->get(route('home'));
    $responseYayasan->assertStatus(200);
    $responseYayasan->assertDontSee('Anita Carlyna');
    $responseYayasan->assertSee('Legianto');
});
