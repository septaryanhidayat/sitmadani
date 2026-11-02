-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2026
-- Server version: 10.11.8-MariaDB / 8.0-MySQL
-- PHP Version: 8.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET FOREIGN_KEY_CHECKS = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berandad_db_sitmadani`
--

-- --------------------------------------------------------

-- Table structure for table `activity_logs`
DROP TABLE IF EXISTS `activity_logs`;
CREATE TABLE `activity_logs` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `action` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'info',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `activity_logs`
INSERT INTO `activity_logs` (`id`, `user_id`, `user_name`, `action`, `description`, `ip_address`, `user_agent`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Tamu / Percobaan', 'login_failed', 'Percobaan login gagal untuk email: info@berandadigital.net', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', 'warning', '2026-09-19 21:31:50', '2026-09-19 21:31:50'),
(2, NULL, 'Tamu / Percobaan', 'login_failed', 'Percobaan login gagal untuk email: admin@sitmadanipbm.sch.id', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', 'warning', '2026-09-19 21:32:08', '2026-09-19 21:32:08'),
(3, 1, 'Admin Sekolah Islam Terpadu Madani Kayuagung', 'login_success', 'Login berhasil ke panel administrator', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', 'info', '2026-09-19 21:32:26', '2026-09-19 21:32:26'),
(4, 1, 'Administrator Yayasan Agung Madani', 'login_success', 'Login berhasil ke panel administrator', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'info', '2026-11-01 13:07:34', '2026-11-01 13:07:34'),
(5, 1, 'Administrator Yayasan Agung Madani', 'quick_menu_update', 'Memperbarui Quick Menu Beranda: SPMB', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'info', '2026-11-01 13:07:56', '2026-11-01 13:07:56'),
(6, 1, 'Administrator Yayasan Agung Madani', 'popup_settings_update', 'Memperbarui pengaturan Popup Banner Beranda (Status: Aktif)', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'info', '2026-11-01 22:55:18', '2026-11-01 22:55:18'),
(7, 1, 'Administrator Yayasan Agung Madani', 'popup_settings_update', 'Memperbarui pengaturan Popup Banner Beranda (Status: Aktif)', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'info', '2026-11-01 22:58:05', '2026-11-01 22:58:05'),
(8, 1, 'Administrator Yayasan Agung Madani', 'ppdb_content_update', 'Memperbarui konten informasi PPDB, banner SPMB beranda, dan konfigurasi formulir online', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'info', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(9, 1, 'Administrator Yayasan Agung Madani', 'ppdb_content_update', 'Memperbarui konten informasi PPDB, banner SPMB beranda, dan konfigurasi formulir online', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'info', '2026-11-01 22:59:04', '2026-11-01 22:59:04'),
(10, 1, 'Administrator Yayasan Agung Madani', 'ppdb_content_update', 'Memperbarui konten informasi PPDB, banner SPMB beranda, dan konfigurasi formulir online', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'info', '2026-11-01 23:00:02', '2026-11-01 23:00:02'),
(11, 1, 'Administrator Yayasan Agung Madani', 'ppdb_content_update', 'Memperbarui konten informasi PPDB, banner SPMB beranda, dan konfigurasi formulir online', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'info', '2026-11-01 23:01:19', '2026-11-01 23:01:19'),
(12, 1, 'Administrator Yayasan Agung Madani', 'settings_update', 'Memperbarui konfigurasi website dan pengaturan SEO & OpenGraph', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'info', '2026-11-02 01:15:52', '2026-11-02 01:15:52');

-- --------------------------------------------------------

-- Table structure for table `agendas`
DROP TABLE IF EXISTS `agendas`;
CREATE TABLE `agendas` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `event_date` datetime DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'publish',
  `featured_image` varchar(255) DEFAULT NULL,
  `file_attachment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `agendas`
INSERT INTO `agendas` (`id`, `title`, `slug`, `content`, `location`, `event_date`, `status`, `featured_image`, `created_at`, `updated_at`, `file_attachment`) VALUES
(1, 'FOMG dan Pembagian RAPOR', 'fomg-dan-pembagian-rapor-1790918926', 'Diharapkan ayah bunda, dapat hadir untuk memberikan semangat kepada ananda atas pencapaiannya belajar selama tiga bulan terakhir...', 'Aula SIT Madani', '2026-10-09 00:00:00', 'upcoming', '/uploads/madani/kegiatan-madani-23.webp', '2026-10-03 01:29:50', '2026-10-03 01:29:50', NULL),
(2, 'Ujian Jilid IWR', 'ujian-jilid-iwr-1790919284', 'Ujian Jilid 1 IWR pada kelas 7, Jilid 2 dan TilawahTerbimbing pada kelas 8 dan 9', 'SIT Madani', '2026-09-28 00:00:00', 'completed', '/uploads/madani/kegiatan-madani-24.webp', '2026-10-03 01:29:50', '2026-10-03 01:29:50', NULL),
(3, 'Ujian NGOPI MidSemester Ganjil', 'ujian-ngopi-midsemester-ganjil-1790919404', 'Ujian NGOPI -BPI MIDSemester Ganjil Tp. 2026-2027', 'SIT Madani', '2026-10-02 00:00:00', 'completed', '/uploads/madani/kegiatan-madani-25.webp', '2026-10-03 01:29:50', '2026-10-03 01:29:50', NULL),
(4, 'KARNAVAL HUT KOTA', 'karnaval-hut-kota-1790919767', 'Bismillah, InsyaAllah SIT Madani akan ikut serta dalam kegiatan ini.. Semoga berkah...', 'Jln. Jendral Sudirman', '2026-10-21 00:00:00', 'upcoming', '/uploads/madani/kegiatan-madani-26.webp', '2026-10-03 01:29:50', '2026-10-03 01:29:50', NULL);

-- --------------------------------------------------------

-- Table structure for table `anggota_dewans`
DROP TABLE IF EXISTS `anggota_dewans`;
CREATE TABLE `anggota_dewans` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `fraction` varchar(255) DEFAULT 'Guru & Tenaga Kependidikan',
  `profile_summary` text DEFAULT NULL,
  `education` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `anggota_dewans`
INSERT INTO `anggota_dewans` (`id`, `name`, `slug`, `position`, `fraction`, `profile_summary`, `education`, `photo`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Ribang Imam Satria, S.Pi., Gr.', 'ribang-imam-satria-spi-gr', 'Kepala SMPS IT Madani', 'Pimpinan Sekolah', 'Kepala SMPS IT Madani Kayuagung yang berdedikasi membina generasi Qurani, berakhlak mulia, dan berprestasi sains modern.', 'Sarjana Perikanan (S.Pi.), Pendidikan Profesi Guru (Gr.)', '/uploads/dewan/kepala-sekolah.webp', 1, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(2, 'Ustadz Fulan, S.Pd.', 'ustadz-fulan-spd', 'Waka Kurikulum & Guru IPA', 'Guru IPA & Kurikulum', 'Tenaga pendidik profesional SMPS IT Madani Kayuagung dalam bidang Ilmu Pengetahuan Alam dan koordinator integrasi Kurikulum Merdeka dengan kurikulum JSIT.', 'S1 Pendidikan IPA / Sains', '/uploads/dewan/avatar-default.svg', 2, '2026-09-19 21:27:08', '2026-09-19 22:21:36'),
(3, 'Ustadzah Fulanah, S.Pd.I', 'ustadzah-fulanah-spdi', 'Guru Tahsin & Tahfidz Al-Qur\'an (TTQ)', 'Guru TTQ & Keislaman', 'Pengampu program Tahsin dan Tahfidz Al-Qur\'an siswa, membimbing hafalan mutqin minimal 2 juz serta tartil bacaan bersanad.', 'S1 Pendidikan Agama Islam', '/uploads/dewan/avatar-default.svg', 3, '2026-09-19 21:27:08', '2026-09-19 22:21:36'),
(4, 'Ustadz Fulan, S.Kom.', 'ustadz-fulan-skom', 'Guru Informatika & Pembina OSIS', 'Guru Informatika & Kesiswaan', 'Membina kompetensi literasi digital, teknologi informasi, dan memfasilitasi kegiatan kesiswaan serta kepemimpinan siswa OSIS SMP IT.', 'S1 Ilmu Komputer / Teknik Informatika', '/uploads/dewan/avatar-default.svg', 4, '2026-09-19 21:27:08', '2026-09-19 22:21:36'),
(5, 'Ustadzah Fulanah, S.Pd.', 'ustadzah-fulanah-spd', 'Guru Bahasa Inggris & Literasi', 'Guru Bahasa Inggris', 'Pengampu mata pelajaran Bahasa Inggris aktif dan pembina kegiatan English Club, storytelling, dan literasi bahasa siswa.', 'S1 Pendidikan Bahasa Inggris', '/uploads/dewan/avatar-default.svg', 5, '2026-09-19 21:27:08', '2026-09-19 22:21:36'),
(6, 'Ustadz Fulan, S.Or.', 'ustadz-fulan-sor', 'Guru PJOK & Pembina Kepanduan SIT', 'Guru PJOK & Olahraga', 'Guru Pendidikan Jasmani, Olahraga, dan Kesehatan, aktif membina kedisiplinan, kepanduan Pramuka SIT, dan kebugaran jasmani siswa.', 'S1 Pendidikan Kepelatihan Olahraga', '/uploads/dewan/avatar-default.svg', 6, '2026-09-19 21:27:08', '2026-09-19 22:21:36'),
(7, 'Ustadzah Fulanah, S.Si.', 'ustadzah-fulanah-ssi', 'Guru Matematika & Pembimbing MIPA', 'Guru Matematika', 'Tenaga pendidik matematika dan pembimbing klub olimpiade sains siswa SMPS IT Madani Kayuagung.', 'S1 Matematika / Sains Terpadu', '/uploads/dewan/avatar-default.svg', 7, '2026-09-19 21:27:08', '2026-09-19 22:21:36');

-- --------------------------------------------------------

-- Table structure for table `bidangs`
DROP TABLE IF EXISTS `bidangs`;
CREATE TABLE `bidangs` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `bidangs`
INSERT INTO `bidangs` (`id`, `name`, `slug`, `description`, `address`, `phone`, `email`, `website`, `icon`, `thumbnail`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Ruang Kelas Nyaman & Multimedia', 'ruang-kelas-nyaman-dan-multimedia', 'Ruang kelas representatif yang bersih, sejuk dengan pendingin udara (AC), dilengkapi proyektor LCD dan tata letak ergonomis untuk memaksimalkan fokus belajar.', 'Kampus Sekolah Islam Terpadu Madani Kayuagung', '0852-6990-8696', 'smpitsitmadani.2015@yahoo.com', NULL, 'fa-solid fa-chalkboard-user', '/uploads/madani/kegiatan-madani-13.webp', 1, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(2, 'Perpustakaan & Pojok Literasi Digital', 'perpustakaan-dan-pojok-literasi-digital', 'Koleksi lengkap buku teks pelajaran, referensi ensiklopedia Islam, sastra ilmiah, komputer literasi digital, dan sudut baca nyaman untuk menumbuhkan gemar membaca.', 'Kampus Sekolah Islam Terpadu Madani Kayuagung', '0852-6990-8696', 'smpitsitmadani.2015@yahoo.com', NULL, 'fa-solid fa-book-open', '/uploads/madani/kegiatan-madani-14.webp', 2, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(3, 'Laboratorium IPA & Sains Terpadu', 'laboratorium-ipa-sains-terpadu', 'Fasilitas laboratorium lengkap untuk eksperimen biologi, fisika, dan kimia dasar, mendukung pembelajaran praktikum dan kelas olimpiade sains.', 'Kampus Sekolah Islam Terpadu Madani Kayuagung', '0852-6990-8696', 'smpitsitmadani.2015@yahoo.com', NULL, 'fa-solid fa-flask-vial', '/uploads/madani/kegiatan-madani-15.webp', 3, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(4, 'Masjid & Pusat Ibadah Kampus Madani', 'masjid-dan-pusat-ibadah', 'Masjid kampus yang asri sebagai pusat ibadah sholat berjamaah, sholat dhuha, tadarus Al-Qur\'an, dan halaqah tahfidz siswa.', 'Kampus Sekolah Islam Terpadu Madani Kayuagung', '0852-6990-8696', 'smpitsitmadani.2015@yahoo.com', NULL, 'fa-solid fa-mosque', '/uploads/madani/kegiatan-madani-16.webp', 4, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(5, 'Lapangan Olahraga & Area Outbound', 'lapangan-olahraga-dan-outbound', 'Lapangan olahraga serbaguna untuk futsal, basket, voli, bulutangkis, serta arena latihan panahan (archery) dan kepanduan Pramuka SIT.', 'Kampus Sekolah Islam Terpadu Madani Kayuagung', '0852-6990-8696', 'smpitsitmadani.2015@yahoo.com', NULL, 'fa-solid fa-volleyball', '/uploads/madani/kegiatan-madani-17.webp', 5, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(6, 'Gedung Kampus Terpadu', 'gedung-kampus-terpadu', 'Kompleks gedung sekolah yang asri, aman, dan berpagar penuh dengan pos satpam 24 jam serta taman hijau yang mendukung kenyamanan belajar.', 'Kampus Sekolah Islam Terpadu Madani Kayuagung', '0852-6990-8696', 'smpitsitmadani.2015@yahoo.com', NULL, 'fa-solid fa-school', '/uploads/madani/kegiatan-madani-18.webp', 6, '2026-09-19 21:27:08', '2026-09-19 21:27:08');

-- --------------------------------------------------------

-- Table structure for table `cache`
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (

  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` bigint(20) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `cache`
-- (No records for `cache`)

-- --------------------------------------------------------

-- Table structure for table `cache_locks`
DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks` (

  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` bigint(20) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `cache_locks`
-- (No records for `cache_locks`)

-- --------------------------------------------------------

-- Table structure for table `categories`
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `categories`
INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Berita', 'berita', 'Kategori Berita', NULL, '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(2, 'Prestasi Siswa', 'prestasi-siswa', 'Kategori Prestasi Siswa', NULL, '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(3, 'Akademik & Riset', 'akademik-riset', 'Kategori Akademik & Riset', NULL, '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(4, 'Tahfidz & Keislaman', 'tahfidz-keislaman', 'Kategori Tahfidz & Keislaman', NULL, '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(5, 'Kesiswaan & Ekskul', 'kesiswaan-ekskul', 'Kategori Kesiswaan & Ekskul', NULL, '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(6, 'Kabar Kampus', 'kabar-kampus', 'Kategori Kabar Kampus', NULL, '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(7, 'Opini & Artikel', 'opini', 'Kategori Opini & Artikel', NULL, '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(8, 'Berita TKS IT Madani', 'berita-tk', 'Kabar kegiatan, pembelajaran sentra, dan aktivitas anak TKS IT Madani.', NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(9, 'Berita SDS IT Madani', 'berita-sd', 'Kabar kegiatan, kurikulum terpadu, dan aktivitas siswa SDS IT Madani.', NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(10, 'Berita SMPS IT Madani', 'berita-smp', 'Kabar kegiatan, tahfidz, sains, dan aktivitas santri SMPS IT Madani.', NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(11, 'Kabar Yayasan Agung Madani', 'kabar-yayasan', 'Warta resmi perkembangan kampus terpadu dan kebijakan Yayasan Agung Madani.', NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(12, 'Prestasi TKS IT', 'prestasi-tk', 'Capaian dan prestasi anak didik TKS IT Madani Kayuagung.', NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(13, 'Prestasi SDS IT', 'prestasi-sd', 'Capaian dan prestasi siswa SDS IT Madani Kayuagung.', NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(14, 'Prestasi SMPS IT', 'prestasi-smp', 'Capaian dan kejuaraan santri SMPS IT Madani Kayuagung.', NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16');

-- --------------------------------------------------------

-- Table structure for table `downloads`
DROP TABLE IF EXISTS `downloads`;
CREATE TABLE `downloads` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `category_type` varchar(255) NOT NULL DEFAULT 'Dokumen',
  `file_path` varchar(255) NOT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `file_type` varchar(255) DEFAULT NULL,
  `file_size` varchar(255) DEFAULT NULL,
  `download_count` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `downloads`
INSERT INTO `downloads` (`id`, `title`, `category_type`, `file_path`, `file_type`, `file_size`, `download_count`, `created_at`, `updated_at`, `description`, `cover_image`) VALUES
(1, 'Panduan Kurikulum Tahfidz Al-Qur\'an 2 Juz SMPS IT SIT Madani', 'E-Book', '/uploads/downloads/panduan-mutqin-tahfidz-madani.pdf', 'PDF', '9.0 KB', 342, '2026-09-19 21:27:08', '2026-11-01 12:42:35', 'Modul resmi kurikulum tahfidz mutqin Sekolah Islam Terpadu Madani Kayuagung berbasis standar JSIT Indonesia.', '/uploads/covers/cover-tahfidz-mutqin.webp'),
(2, 'Buku Saku Adab & 10 Karakter (Muwashofat) Siswa JSIT', 'E-Book', '/uploads/downloads/buku-saku-adab-karakter-siswa.pdf', 'PDF', '6.9 KB', 284, '2026-09-19 21:27:08', '2026-09-19 22:46:04', 'Pedoman pembiasaan akhlak islami, adab kepada guru dan orang tua, tata tertib siswa asrama dan sekolah.', '/uploads/covers/cover-karakter-santri.webp'),
(3, 'Petunjuk Praktikum Laboratorium IPA Terpadu SMPS IT Madani', 'E-Book', '/uploads/downloads/petunjuk-praktikum-sains-terpadu.pdf', 'PDF', '6.6 KB', 195, '2026-09-19 21:27:08', '2026-11-01 12:42:35', 'Pedoman eksperimen laboratorium biologi dan fisika untuk siswa kelas VII-IX SIT Madani Kayuagung.', '/uploads/covers/cover-praktikum-sains.webp'),
(4, 'Kurikulum Pembinaan Da\'i Muda, Khitabah & Public Speaking', 'E-Book', '/uploads/downloads/kurikulum-pembinaan-dai-muda.pdf', 'PDF', '6.5 KB', 210, '2026-09-19 21:27:08', '2026-09-19 21:27:08', 'Kumpulan materi public speaking, retorika dakwah 3 bahasa (Indonesia, Arab, Inggris), dan sistematika kultum.', '/uploads/covers/cover-dai-muda.webp'),
(5, 'Buku Saku Kosakata Harian Bilingual Bahasa Arab & Inggris Siswa', 'E-Book', '/uploads/downloads/buku-saku-kosakata-bilingual.pdf', 'PDF', '6.6 KB', 312, '2026-09-19 21:27:08', '2026-09-19 21:27:08', 'Modul percakapan bilingual harian asrama dan lingkungan sekolah untuk mempercepat penguasaan active speaking.', '/uploads/covers/cover-bilingual-arab-inggris.webp'),
(6, 'Panduan Sukses Asesmen Nasional & Masuk Sekolah Lanjutan Unggulan Favorit', 'E-Book', '/uploads/downloads/panduan-sukses-snbt-ptn.pdf', 'PDF', '6.6 KB', 450, '2026-09-19 21:27:08', '2026-09-19 21:27:08', 'Strategi sukses menembus sekolah lanjutan favorit impian, pembedahan materi literasi dan numerasi Asesmen Nasional.', '/uploads/covers/cover-sukses-snbt.webp'),
(7, 'Logo Resmi SMPS IT SIT Madani Kayuagung (High Resolution)', 'Logo', '/uploads/logo-madani.png', 'PNG', '120 KB', 780, '2026-09-19 21:27:08', '2026-11-01 12:42:35', 'File logo resmi Sekolah Islam Terpadu Madani Kayuagung format PNG transparan.', NULL),
(8, 'Logo Lambang SIT Madani Square HD', 'Logo', '/uploads/logo-madani-square.png', 'PNG', '85 KB', 315, '2026-09-19 21:27:08', '2026-11-01 12:42:35', 'Logo lambang persegi Sekolah Islam Terpadu Madani Kayuagung format PNG.', NULL);

-- --------------------------------------------------------

-- Table structure for table `dpcs`
DROP TABLE IF EXISTS `dpcs`;
CREATE TABLE `dpcs` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `head_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `dpcs`
INSERT INTO `dpcs` (`id`, `name`, `slug`, `description`, `head_name`, `address`, `order`, `created_at`, `updated_at`, `thumbnail`) VALUES
(1, 'Program Tahfidz 2 Juz Mutqin & Hadits', 'program-tahfidz-2-juz-mutqin', 'Bimbingan intensif membaca Al-Qur\'an dengan tartil, tahsin bersanad, dan hafalan mutqin minimal 2 juz serta 12 hadits pilihan.', NULL, 'Kurikulum Khusus Keislaman', 1, '2026-09-19 21:27:08', '2026-09-19 21:27:08', NULL),
(2, 'Bina Pribadi Islam (BPI) & Karakter Islami', 'bina-pribadi-islam-bpi', 'Halaqah pekanan pembinaan adab, pembiasaan ibadah yaumiyah, dzikir ma\'tsurat, serta penanaman akhlaqul karimah.', NULL, 'Pembinaan Karakter Siswa', 2, '2026-09-19 21:27:08', '2026-09-19 21:27:08', NULL),
(3, 'Kurikulum Terpadu JSIT & Kurikulum Merdeka', 'kurikulum-terpadu-jsit-merdeka', 'Memadukan standar capaian Kurikulum Merdeka Nasional dengan nilai-nilai Islam Terpadu berstandar JSIT Indonesia.', NULL, 'Integrasi Nilai Islam & Sains', 3, '2026-09-19 21:27:08', '2026-09-19 21:27:08', NULL),
(4, 'Program Belajar Bersama Maestro & Riset Sains', 'belajar-bersama-maestro-riset', 'Eksplorasi bakat seni, budaya, sains dan teknologi langsung bersama tokoh dan pakar di bidangnya.', NULL, 'Pengembangan Akademik & Potensi', 4, '2026-09-19 21:27:08', '2026-09-19 21:27:08', NULL),
(5, 'Madani Safar & Outing Class Edukatif', 'madani-safar-outing-class', 'Pembelajaran luar kelas berbasis observasi alam, rihlah edukatif, studi lingkungan, dan pengembangan wawasan santri SIT Madani di Kabupaten Ogan Komering Ilir.', NULL, 'Outdoor Learning & Wawasan', 5, '2026-09-19 21:27:08', '2026-09-19 21:27:08', NULL),
(6, 'Madani Peduli & Bakti Sosial Masyarakat', 'madani-peduli-bakti-sosial', 'Kiprah nyata santri SIT Madani dalam melayani, menebar kebaikan, dan memberikan kontribusi positif bagi masyarakat di Kabupaten Ogan Komering Ilir (Kayuagung).', NULL, 'Kepedulian Sosial & Dakwah', 6, '2026-09-19 21:27:08', '2026-09-19 21:27:08', NULL);

-- --------------------------------------------------------

-- Table structure for table `failed_jobs`
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` varchar(255) NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `failed_jobs`
-- (No records for `failed_jobs`)

-- --------------------------------------------------------

-- Table structure for table `feedbacks`
DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE `feedbacks` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `feedbacks`
-- (No records for `feedbacks`)

-- --------------------------------------------------------

-- Table structure for table `job_batches`
DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches` (

  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `job_batches`
-- (No records for `job_batches`)

-- --------------------------------------------------------

-- Table structure for table `jobs`
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` smallint(5) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `jobs`
-- (No records for `jobs`)

-- --------------------------------------------------------

-- Table structure for table `migrations`
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (

  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `migrations`
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_09_05_000001_create_posts_and_taxonomies_tables', 1),
(5, '2026_09_05_000002_create_cpt_tables', 1),
(6, '2026_09_05_000003_add_role_and_avatar_to_users_table', 1),
(7, '2026_09_05_000004_create_activity_logs_table', 1),
(8, '2026_09_05_000004_create_quick_menus_table', 1),
(9, '2026_09_05_000005_create_pages_table', 1),
(10, '2026_09_07_000001_create_visitor_logs_table', 1),
(11, '2026_09_12_071313_create_ppdb_registrations_table', 1),
(12, '2026_09_12_074211_add_cover_and_description_to_downloads_table', 1),
(13, '2026_09_12_090300_add_thumbnail_to_dpcs_table', 1),
(14, '2026_09_12_091700_add_track_and_program_to_ppdb_registrations_table', 1),
(15, '2026_09_12_093259_add_extra_fields_to_ppdb_registrations_table', 1),
(16, '2026_09_12_113129_create_service_submissions_table', 1),
(17, '2026_09_20_000001_create_ppdb_tracks_table', 2),
(18, '2026_09_20_050000_update_anggota_dewan_default_avatar', 3),
(19, '2026_09_20_054000_fix_download_cover_and_gallery_records', 4),
(20, '2026_09_20_061500_set_default_popup_banner_and_site_domain', 5),
(21, '2026_09_20_062000_initialize_hero_slides_settings', 6),
(22, '2026_10_01_070429_add_file_attachment_to_agendas_table', 7),
(23, '2026_11_01_124349_add_unit_to_users_table', 8);

-- --------------------------------------------------------

-- Table structure for table `pages`
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `pages`
-- (No records for `pages`)

-- --------------------------------------------------------

-- Table structure for table `password_reset_tokens`
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (

  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `password_reset_tokens`
-- (No records for `password_reset_tokens`)

-- --------------------------------------------------------

-- Table structure for table `pengumumen`
DROP TABLE IF EXISTS `pengumumen`;
CREATE TABLE `pengumumen` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext DEFAULT NULL,
  `file_attachment` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'publish',
  `featured_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `pengumumen`
INSERT INTO `pengumumen` (`id`, `title`, `slug`, `content`, `file_attachment`, `status`, `featured_image`, `created_at`, `updated_at`) VALUES
(1, 'Informasi Resmi SPMB Gelombang Exclusive Tahun Ajaran Baru', 'informasi-resmi-spmb-gelombang-exclusive', 'Pendaftaran SPMB Gelombang Exclusive Sekolah Islam Terpadu Madani Kayuagung telah dibuka. Kuota hanya 24 kursi per kelas. Segera daftarkan putra-putri Anda melalui portal PPDB online kami atau hubungi WA: 0852-6990-8696.', '/uploads/pengumuman/spmb-1790840449-clvCP.png', 'publish', '/uploads/madani/kegiatan-madani-19.webp', '2026-10-03 01:29:50', '2026-10-03 01:29:50'),
(2, 'JADWAL SUPERVISI AKADEMIK SEKOLAH ISLAM TERPADU MADANI KAYUAGUNG SEMESTER GANJIL TP. 2026/2027', 'jadwal-supervisi-akademik-sekolah-islam-terpadu-madani-kayuagung-semester-ganjil', 'Mohon Kepada setiap guru yang masuk pada daftar supervisi akademik pada semester ini untuk mempersiapkan diri dengan sebaik-baiknya. Terima Kasih', NULL, 'publish', '/uploads/madani/kegiatan-madani-20.webp', '2026-10-03 01:29:50', '2026-10-03 01:29:50'),
(3, 'Ujian Praktik PAI Semester Ganjil', 'ujian-praktik-pai-semester-ganjil-1790916482', 'Berlaku untuk semua siswa, silahkan dipersiapkan dengan sebaik-baiknya.. Barakallahufiik', NULL, 'publish', '/uploads/madani/kegiatan-madani-21.webp', '2026-10-03 01:29:50', '2026-10-03 01:29:50'),
(4, 'Ujian Almatsurat Sugra dan Kubra', 'ujian-almatsurat-sugra-dan-kubra-1790917813', 'Assalamualaikum Mengingatkan kepada semua kelas 7, untuk kelas 8 dan 9 hanya Nama yang ada di bawah ini untuk Mengikuti Ujian Al Matsurat Sugra Kelas 7 dan Al Matsurat Kubra Kelas 8 & 9', NULL, 'publish', '/uploads/madani/kegiatan-madani-22.webp', '2026-10-03 01:29:50', '2026-10-03 01:29:50'),
(5, 'Pengumuman Hasil Munaqosah TTQ Mid Semester Ganjil TP. 26/27', 'pengumuman-hasil-munaqosah-ttq-mid-semester-ganjil-tp-2627-1790943964', 'Bismillah, Barakallahufiik ayah bunda dan ananda yang telah lulus ujian Quran, semoga Istiqomah dalam belajar Al-Quran serta meningkatkan kualitasnya. Adapun yang belum lulus, tetap semangat InsyaAllah pahalanya 2x lipat dibanding yang sudah lancar.', '/uploads/pengumuman/data-kelulusan-ujian-triwulan-ttq-smp-jul-sept-1790943964-B0oaj.xlsx', 'publish', '/uploads/madani/kegiatan-madani-23.webp', '2026-10-03 01:29:50', '2026-10-03 01:29:50');

-- --------------------------------------------------------

-- Table structure for table `post_category`
DROP TABLE IF EXISTS `post_category`;
CREATE TABLE `post_category` (

  `post_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `post_category`
INSERT INTO `post_category` (`post_id`, `category_id`) VALUES
(73, 6),
(74, 6),
(75, 2),
(76, 6),
(77, 6),
(78, 2),
(73, 10),
(74, 10),
(75, 10),
(76, 10),
(77, 10),
(78, 10),
(144, 8),
(145, 8),
(146, 8),
(147, 9),
(148, 9),
(149, 9),
(150, 12),
(151, 12),
(152, 12),
(153, 13),
(154, 13),
(155, 13),
(156, 14),
(157, 14),
(158, 14);

-- --------------------------------------------------------

-- Table structure for table `post_tag`
DROP TABLE IF EXISTS `post_tag`;
CREATE TABLE `post_tag` (

  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `post_tag`
INSERT INTO `post_tag` (`post_id`, `tag_id`) VALUES
(73, 1),
(73, 5),
(73, 9),
(74, 1),
(74, 5),
(74, 7),
(75, 3),
(75, 6),
(75, 7),
(76, 2),
(76, 5),
(76, 7),
(77, 4),
(77, 6),
(77, 10),
(78, 1),
(78, 2),
(78, 10);

-- --------------------------------------------------------

-- Table structure for table `posts`
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext DEFAULT NULL,
  `excerpt` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'publish',
  `type` varchar(255) NOT NULL DEFAULT 'post',
  `featured_image` varchar(255) DEFAULT NULL,
  `views_count` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `posts`
INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `excerpt`, `status`, `type`, `featured_image`, `views_count`, `author_id`, `published_at`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(73, 'Class Meeting Semester Genap SMPS IT Madani Kayuagung: Semangat Sportivitas & Ukhuwah', 'class-meeting-semester-genap-smp-it-sit-madani-kayuagung', '<p>SMPS IT Madani Kayuagung kembali menggelar agenda akbar tahunan yaitu <strong>Class Meeting Semester Genap</strong> dengan tema mengobarkan semangat sportivitas, kekompakan, dan ukhuwah Islamiyah antarsiswa.</p><p>Kegiatan yang dibuka secara resmi pada Rabu, 17 Juni 2026 ini mempertandingkan berbagai cabang perlombaan, mulai dari keolahragaan (futsal, bola voli, bulutangkis), seni Islam (lomba adzan, tilawatil Qur\'an, hadroh), hingga adu kecerdasan dalam cerdas cermat sains dan debat bahasa.</p><p>Kepala SMPS IT Madani Kayuagung, <strong>Ustadz Ribang Imam Satria, S.Pi., Gr.</strong>, menyampaikan bahwa Class Meeting ini bukan hanya sekadar ajang kompetisi, namun wahana pembentukan karakter pantang menyerah, kerja sama tim, dan kepemimpinan siswa.</p>', 'Semarak Class Meeting Semester Genap SMPS IT Madani Kayuagung dengan berbagai cabang lomba olahraga, keislaman, dan unjuk kreativitas siswa.', 'publish', 'post', '/uploads/madani/kegiatan-madani-01.webp', 1420, NULL, NULL, NULL, NULL, NULL, '2026-09-19 21:27:08', '2026-11-02 00:47:16'),
(74, 'SPMB Gelombang Exclusive SMPS IT Madani Kayuagung Resmi Dibuka: Cash Back 1 Juta', 'spmb-gelombang-exclusive-smp-it-sit-madani-kayuagung', '<p>Kabar gembira bagi para orang tua dan calon siswa di Kota Kayuagung dan sekitarnya! <strong>SMPS IT Madani Kayuagung</strong> secara resmi membuka pendaftaran <strong>SPMB Gelombang Exclusive</strong> untuk tahun ajaran baru.</p><p>Pada gelombang exclusive ini, kuota yang disediakan sangat terbatas, yakni hanya <strong>24 orang per kelas</strong>, demi menjaga kualitas pembelajaran interaktif dan pendampingan tahfidz yang optimal. Selain itu, tersedia promo istimewa berupa <strong>Cash Back Rp 1.000.000,-</strong> khusus bagi alumni SDIT Madani dan SDIT Madani 2.</p><p>Pendaftaran dapat dilakukan secara online melalui website resmi atau langsung mengunjungi kampus SMPS IT Madani di Jalan SMA Negeri 4, RT 02 LK III, Kelurahan Tanjung Rancing, Kecamatan Kayuagung, Kabupaten Ogan Komering Ilir, Sumatera Selatan 30618 Tanjung Rancing Kayuagung Timur. Info narahubung: +62 852-6990-8696 / +62 853-7897-4396.</p>', 'Penerimaan Peserta Didik Baru (SPMB) Gelombang Exclusive SMPS IT Madani dibuka dengan kuota terbatas 24 orang dan cashback 1 juta.', 'publish', 'post', '/uploads/madani/kegiatan-madani-02.webp', 2180, NULL, NULL, NULL, NULL, NULL, '2026-09-19 21:27:08', '2026-11-01 12:43:13'),
(75, 'SMPS IT Madani Kayuagung Raih Prestasi Gemilang dalam Olimpiade Sains & Kejuaraan Pelajar', 'smp-it-sit-madani-raih-prestasi-olimpiade-sains-pelajar', '<p>Siswa SMPS IT Madani Kayuagung kembali menorehkan prestasi membanggakan pada ajang Olimpiade Sains dan Kejuaraan Pelajar tingkat Kota Kayuagung dan Provinsi Sumatera Selatan.</p><p>Prestasi ini merupakan buah dari pembinaan intensif di laboratorium sains dan kelas bimbingan MIPA oleh ustadz dan ustadzah pembina. Kepala SMPS IT Madani, Ustadz Ribang Imam Satria, S.Pi., Gr., mengapresiasi dedikasi siswa yang terus mengukir prestasi gemilang berlandaskan adab dan ilmu pengetahuan.</p>', 'Siswa SMPS IT Madani Kayuagung torehkan prestasi membanggakan dalam ajang olimpiade sains dan kejuaraan tingkat pelajar.', 'publish', 'post', '/uploads/madani/kegiatan-madani-03.webp', 1120, NULL, NULL, NULL, NULL, NULL, '2026-09-19 21:27:08', '2026-11-02 00:47:16'),
(76, 'Semarak Dakwah Ramadhan (SADARILAH) & Khatmil Qur\'an Siswa SMPS IT Madani', 'semarak-dakwah-ramadhan-sadarilah-dan-khatmil-quran-smpit-madani', '<p>Mengisi bulan suci Ramadhan dengan amalan terbaik, SMPS IT Madani Kayuagung menggelar kegiatan tahunan <strong>SADARILAH (Semarak Dakwah Ramadhan SIT Madani)</strong> yang dipadukan dengan Khatmil Qur\'an dan bakti sosial Jum\'at Berbagi.</p><p>Seluruh siswa berkumpul di masjid kampus untuk mengkhatamkan Al-Qur\'an bersama para ustaz dan ustazah, dilanjutkan dengan pendistribusian paket sembako dan takjil kepada warga di sekitar Kelurahan Tanjung Rancing, Kayuagung Timur. Kegiatan ini melatih kepekaan sosial dan kepedulian siswa sejak dini.</p>', 'Rangkaian kegiatan Semarak Dakwah Ramadhan (SADARILAH) dan Khatmil Qur\'an melatih kepedulian sosial siswa SMPS IT Madani.', 'publish', 'post', '/uploads/madani/kegiatan-madani-04.webp', 980, NULL, NULL, NULL, NULL, NULL, '2026-09-19 21:27:08', '2026-11-01 12:42:35'),
(77, 'English & Arabic Week: Membangun Lingkungan Berbahasa Asing Aktif di SMPS IT Madani', 'english-and-arabic-week-lingkungan-berbahasa-asing-aktif', '<p>Untuk membekali siswa menghadapi era global, SMPS IT Madani Kayuagung menerapkan program unggulan <strong>English & Arabic Week</strong>. Selama pekan bahasa, siswa dan guru dibiasakan berkomunikasi dalam Bahasa Arab dan Bahasa Inggris pada aktivitas harian.</p><p>Program ini juga diisi dengan kompetisi pidato (khitabah), lomba bercerita (storytelling), debat, dan spelling bee yang diikuti dengan sangat antusias oleh seluruh siswa kelas VII hingga IX.</p>', 'Pekan Bahasa Arab dan Inggris di SMPS IT Madani Kayuagung tingkatkan rasa percaya diri siswa berkomunikasi dalam bahasa internasional.', 'publish', 'post', '/uploads/madani/kegiatan-madani-05.webp', 840, NULL, NULL, NULL, NULL, NULL, '2026-09-19 21:27:08', '2026-11-01 12:42:35'),
(78, 'Wisuda Tahfidz & Khotmil Qur\'an: Lahirkan Generasi Penghafal Al-Qur\'an Berprestasi', 'wisuda-tahfidz-dan-khotmil-quran-smp-it-sit-madani', '<p>Suasana haru dan khidmat menyelimuti wisuda tahfidz Al-Qur\'an SMPS IT Madani Kayuagung. Puluhan siswa berhasil menyelesaikan target hafalan minimal 2 juz mutqin lengkap dengan munaqosah tajwid dan makharijul huruf.</p><p>Kepala Sekolah, <strong>Ustadz Ribang Imam Satria, S.Pi., Gr.</strong>, menyematkan selempang dan sertifikat tahfidz kepada para wisudawan dan wisudawati, didampingi oleh orang tua yang menitikkan air mata bahagia menyaksikan putra-putrinya memahkotai mereka dengan hafalan kalamullah.</p>', 'Prosesi wisuda tahfidz Al-Qur\'an SMPS IT Madani Kayuagung meluluskan puluhan siswa penghafal Qur\'an 2 juz mutqin.', 'publish', 'post', '/uploads/madani/kegiatan-madani-06.webp', 1750, NULL, NULL, NULL, NULL, NULL, '2026-09-19 21:27:08', '2026-11-02 00:47:16'),
(79, 'Sambutan Kepala Sekolah SMPS IT Madani Kayuagung', 'sambutan-kepala-sekolah', '<p><strong>Bismillahirrohmanirrohim. Assalamu\'alaikum Warahmatullahi Wabarakatuh.</strong></p>\n<p>Segala puji dan syukur kita panjatkan kehadirat Allah SWT yang senantiasa melimpahkan rahmat, taufik, dan inayah-Nya kepada kita semua. Sholawat beriring salam senantiasa tercurah kepada junjungan alam Nabi Besar Muhammad SAW, para keluarga, sahabat, dan pengikutnya hingga akhir zaman.</p>\n<p>Selamat datang di website resmi <strong>SMPS IT Madani Kayuagung</strong>. Di era transformasi digital dan revolusi industri saat ini, kehadiran media informasi digital menjadi sarana vital untuk mempererat ukhuwah, menyajikan transparansi kegiatan sekolah, serta memberikan kemudahan akses informasi bagi para orang tua, siswa, dan masyarakat luas.</p>\n<p>Sebagai Sekolah Menengah Pertama Islam Terpadu di bawah naungan <strong>Yayasan SIT Madani Kayuagung</strong>, kami berkomitmen menghadirkan pendidikan holistik yang memadukan keunggulan kurikulum nasional, penguatan adab Islami, target hafalan Al-Qur\'an 2 juz mutqin, kompetensi sains-teknologi, dan pembiasaan bahasa asing (Arab dan Inggris).</p>\n<p>Kami mengucapkan terima kasih yang sebesar-besarnya kepada Pembina dan Pengurus Yayasan SIT Madani, seluruh asatidz dan asatidzah, staf kependidikan, serta para wali murid yang senantiasa membersamai langkah kami dalam mendidik generasi terbaik umat. Mari bersama-sama kita wujudkan anak-anak yang sholih-sholihah, cerdas, berprestasi, dan berakhlakul karimah.</p>\n<p><em>Wassalamu\'alaikum Warahmatullahi Wabarakatuh.</em></p>\n<p><strong>Kepala SMPS IT Madani Kayuagung</strong><br>\n<strong>Ribang Imam Satria, S.Pi., Gr.</strong></p>', 'Sambutan resmi Kepala Sekolah SMPS IT Madani Kayuagung, Ribang Imam Satria, S.Pi., Gr.', 'publish', 'page', '/uploads/dewan/kepala-sekolah.webp', 0, NULL, NULL, 'Sambutan Kepala Sekolah Sekolah Islam Terpadu Madani Kayuagung', 'Sambutan resmi Kepala Sekolah Sekolah Islam Terpadu Madani Kayuagung, Ribang Imam Satria, S.Pi., Gr.', NULL, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(80, 'Visi dan Misi SMPS IT Madani Kayuagung', 'visi-dan-misi', '<h3>VISI SEKOLAH</h3>\n<blockquote class="text-xl font-bold text-school-primary my-4 p-4 border-l-4 border-school-primary bg-indigo-50/70 rounded-r-lg">\n“MENJADI LEMBAGA ISLAM TERPADU YANG MENCETAK GENERASI TERBAIK, BERKEPRIBADIAN ISLAMI, BERAKHLAK MULIA, CERDAS, BERPRESTASI, DAN BERWAWASAN GLOBAL”\n</blockquote>\n\n<h3>MISI SEKOLAH</h3>\n<ol class="list-decimal pl-6 space-y-2.5 text-gray-700">\n    <li><strong>Unggul dalam Akhlakul Karimah:</strong> Menanamkan aqidah yang lurus, ibadah yang benar, dan akhlak mulia berlandaskan Al-Qur\'an dan As-Sunnah.</li>\n    <li><strong>Unggul Prestasi Akademik & Non-Akademik:</strong> Menyelenggarakan pembelajaran aktif, kreatif, dan menantang untuk meraih prestasi di tingkat kota, provinsi, dan nasional.</li>\n    <li><strong>Berprestasi dalam Bahasa & MIPA:</strong> Membekali siswa dengan kecakapan berbahasa asing (Arab & Inggris) serta kemampuan sains dan nalar matematika.</li>\n    <li><strong>Target Tahfidzul Qur\'an:</strong> Membina kemampuan tahsin dan tahfidz Al-Qur\'an dengan target minimal 2 juz mutqin serta hafalan 12 hadits pilihan.</li>\n    <li><strong>Lingkungan Pendidikan Islami Profesional:</strong> Mewujudkan iklim sekolah yang kondusif, amanah, ramah anak, dan berbudaya Islami.</li>\n</ol>\n\n<h3 class="mt-8">TUJUAN PENDIDIKAN</h3>\n<ul class="list-disc pl-6 space-y-2 text-gray-700">\n    <li>Mencetak lulusan yang tertib dalam mendirikan sholat fardhu berjamaah dan gemar mengamalkan sunnah.</li>\n    <li>Mencapai target hafalan minimal 2 juz Al-Qur\'an (Juz 29 dan Juz 30) dengan tajwid tartil.</li>\n    <li>Menghasilkan peserta didik yang berkarakter mandiri, santun, berpikir kritis, dan adaptif terhadap teknologi.</li>\n    <li>Meraih prestasi gemilang dalam kompetisi sains, keolahragaan, seni Islam, dan baris-berbaris.</li>\n    <li>Mempersiapkan siswa melanjutkan ke jenjang lanjutan/MA/Pesantren unggulan dengan bekal ilmu dan iman yang kokoh.</li>\n</ul>', 'Visi, Misi, dan Tujuan penyelenggaraan pendidikan SMPS IT Madani Kayuagung.', 'publish', 'page', '/uploads/logo-madani.png', 0, NULL, NULL, 'Visi dan Misi Sekolah Islam Terpadu Madani Kayuagung', 'Visi, Misi, dan Tujuan penyelenggaraan pendidikan Sekolah Islam Terpadu Madani Kayuagung.', NULL, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(81, 'Profil SMPS IT Madani Kayuagung', 'tentang-kami', '<h3>Profil Singkat Sekolah</h3>\n<p><strong>SMPS IT Madani Kayuagung</strong> adalah lembaga pendidikan formal tingkat menengah pertama berbasis Islam Terpadu di Kota Kayuagung, Sumatera Selatan, di bawah naungan <strong>Yayasan SIT Madani Kayuagung</strong>.</p>\n<p>Berlokasi strategis di Jalan SMA Negeri 4, RT 02 LK III, Kelurahan Tanjung Rancing, Kecamatan Kayuagung, Kabupaten Ogan Komering Ilir, Sumatera Selatan 30618, sekolah ini memadukan kurikulum nasional Kementerian Pendidikan Dasar dan Menengah dengan kurikulum khas Sekolah Islam Terpadu (SIT). Dengan pendekatan holistik, siswa dibina kecerdasan spiritual (SQ), emosional (EQ), dan intelektualnya (IQ) secara seimbang.</p>\n\n<h4 class="mt-6 font-bold text-gray-900">Identitas Sekolah</h4>\n<table class="w-full text-left border-collapse my-4 text-sm">\n    <tr class="border-b"><td class="py-2.5 font-semibold w-1/3 text-gray-800">Nama Resmi Sekolah</td><td class="py-2.5 text-gray-700">SMPS IT SIT Madani Kayuagung</td></tr>\n    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">NPSN</td><td class="py-2.5 text-gray-700">69787455</td></tr>\n    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Bentuk Pendidikan</td><td class="py-2.5 text-gray-700">SMP (Sekolah Menengah Pertama)</td></tr>\n    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Status Sekolah</td><td class="py-2.5 text-gray-700">Swasta (Yayasan SIT Madani)</td></tr>\n    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Akreditasi</td><td class="py-2.5 text-gray-700"><span class="inline-block px-2.5 py-0.5 rounded-full bg-indigo-100 text-school-primary font-bold text-xs">TERAKREDITASI B</span></td></tr>\n    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Kepala Sekolah</td><td class="py-2.5 text-gray-700">Ribang Imam Satria, S.Pi., Gr.</td></tr>\n    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Alamat Kampus</td><td class="py-2.5 text-gray-700">Jalan SMA Negeri 4, RT 02 LK III, Kelurahan Tanjung Rancing, Kecamatan Kayuagung, Kabupaten Ogan Komering Ilir, Sumatera Selatan 30618, Kel. Tanjung Rancing, Kec. Kayuagung Timur, Kota Kayuagung, Sumatera Selatan 30618</td></tr>\n    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Telepon / WhatsApp</td><td class="py-2.5 text-gray-700">0852-6990-8696 / 0853-7897-4396</td></tr>\n    <tr class="border-b"><td class="py-2.5 font-semibold text-gray-800">Email Resmi</td><td class="py-2.5 text-gray-700">smpitSIT Madani.2015@yahoo.com</td></tr>\n</table>', 'Profil resmi lembaga pendidikan SMPS IT Madani Kota Kayuagung.', 'publish', 'page', '/uploads/campus-sit-madani.webp', 0, NULL, NULL, 'Profil Sekolah Islam Terpadu Madani Kayuagung', 'Profil resmi lembaga pendidikan SIT Madani Kayuagung Kayuagung, OKI.', NULL, '2026-09-19 21:27:08', '2026-11-01 12:43:13'),
(82, 'Sejarah SMPS IT Madani Kayuagung', 'sejarah', '<h3>Sejarah dan Latar Belakang Pendirian</h3>\n<p><strong>SMPS IT Madani Kayuagung</strong> didirikan di bawah naungan <strong>Yayasan SIT Madani Kayuagung</strong> sebagai wujud kepedulian terhadap pentingnya pendidikan generasi muda Islam yang seimbang antara ilmu pengetahuan umum dan pemahaman agama yang mendalam.</p>\n<p>Berawal dari kesuksesan pembinaan di tingkat sekolah dasar (SDIT SIT Madani), masyarakat dan para wali murid mendambakan kelanjutan pendidikan tingkat pertama yang tetap mengusung nilai-nilai Qur\'ani dan pembiasaan adab Islami. Maka berdirilah SMPS IT Madani Kayuagung untuk melayani kebutuhan masyarakat Kayuagung dan sekitarnya.</p>\n<p>Di bawah kepemimpinan <strong>Ibu Ribang Imam Satria, S.Pi., Gr.</strong> beserta jajaran dewan guru yang amanah dan kompeten, SMPS IT Madani terus berinovasi dalam metode pembelajaran, sarana prasarana modern, pembinaan tahfidz 2 juz mutqin, serta prestasi siswa di berbagai ajang kejuaraan daerah dan nasional.</p>', 'Napak tilas perjalanan dan sejarah berdirinya SMPS IT Madani di Kota Kayuagung.', 'publish', 'page', '/uploads/campus-sit-madani.webp', 0, NULL, NULL, 'Sejarah Sekolah Islam Terpadu Madani Kayuagung', 'Napak tilas perjalanan dan sejarah berdirinya SIT Madani Kayuagung di Kayuagung, OKI.', NULL, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(83, 'Struktur Organisasi SMPS IT Madani Kayuagung', 'struktur-organisasi', '<h3>Struktur Manajemen Sekolah & Yayasan</h3>\n<ul class="space-y-3 text-gray-800">\n    <li><strong>Yayasan Penyelenggara:</strong> Yayasan SIT Madani Kayuagung</li>\n    <li><strong>Kepala Sekolah:</strong> Ribang Imam Satria, S.Pi., Gr.</li>\n    <li><strong>Wakil Kepala Sekolah Bidang Kurikulum:</strong> Ustadz Fulan, S.Pd.</li>\n    <li><strong>Koordinator Bidang Kesiswaan &amp; Ekskul:</strong> Ustadz Fulan, S.Kom.</li>\n    <li><strong>Koordinator Tahsin &amp; Tahfidz Al-Qur\'an (TTQ):</strong> Ustadzah Fulanah, S.Pd.I</li>\n    <li><strong>Koordinator BPI &amp; Bina Karakter:</strong> Ustadzah Fulanah, S.Si.</li>\n    <li><strong>Dewan Guru &amp; Tenaga Kependidikan:</strong> Asatidz dan asatidzah profesional berdedikasi tinggi.</li>\n</ul>', 'Bagan kepemimpinan, yayasan, dan dewan guru SMPS IT Madani Kayuagung.', 'publish', 'page', '/uploads/logo-madani.png', 0, NULL, NULL, 'Struktur Organisasi Sekolah Islam Terpadu Madani Kayuagung', 'Bagan kepemimpinan, yayasan, dan dewan guru Sekolah Islam Terpadu Madani Kayuagung.', NULL, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(84, 'Infaq & Wakaf Pembangunan SMPS IT Madani Kayuagung', 'donasi', '<h3>Investasi Akhirat Melalui Pendidikan Islam</h3>\n<p>Yayasan SIT Madani Kayuagung membuka kesempatan seluas-luasnya bagi kaum muslimin dan para dermawan untuk menyalurkan infaq dan sedekah jariyah. Dana yang terhimpun disalurkan untuk pengembangan fasilitas laboratorium, masjid kampus, ruang kelas digital, serta beasiswa pendidikan bagi siswa penghafal Al-Qur\'an.</p>', 'Salurkan infaq dan wakaf terbaik Anda untuk sarana pendidikan Islam dan beasiswa tahfidz di Kota Kayuagung.', 'publish', 'page', '/uploads/campus-sit-madani.webp', 0, NULL, NULL, 'Infaq & Wakaf Pembangunan Sekolah Islam Terpadu Madani Kayuagung', 'Salurkan infaq dan wakaf terbaik Anda untuk sarana pendidikan Islam dan beasiswa tahfidz di Kayuagung, OKI.', NULL, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(85, 'E-Library & Modul Pembelajaran SMPS IT Madani', 'e-book', '<h3>Pusat E-Library & Buku Digital</h3>\n<p>Daftar koleksi buku pelajaran Kurikulum Merdeka, modul tahfidz 2 juz, dan bacaan islami yang dapat diakses dan diunduh oleh civitas akademika SMPS IT Madani Kayuagung.</p>', 'Kumpulan buku pelajaran, panduan kurikulum, dan modul e-library siswa SMPS IT Madani.', 'publish', 'page', '/uploads/activities-sit-madani.webp', 0, NULL, NULL, 'E-Library & Modul Pembelajaran SMPS IT Madani', 'Kumpulan buku pelajaran, panduan kurikulum, dan modul e-library siswa SIT Madani Kayuagung.', NULL, '2026-09-19 21:27:08', '2026-11-01 12:43:13'),
(86, 'Mars & Hymne Jaringan Sekolah Islam Terpadu', 'hymne-mars', '<h3>Mars JSIT Indonesia</h3>\n<p class="italic text-gray-600">Membina tunas bangsa, beriman dan bertaqwa, cerdas berakhlak mulia...</p>', 'Lagu mars dan hymne Sekolah Islam Terpadu kebanggaan SMPS IT Madani Kayuagung.', 'publish', 'page', '/uploads/logo-madani.png', 0, NULL, NULL, 'Mars & Hymne Jaringan Sekolah Islam Terpadu', 'Lagu mars dan hymne Sekolah Islam Terpadu kebanggaan Sekolah Islam Terpadu Madani Kayuagung.', NULL, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(87, 'Logo Resmi SMPS IT Madani Kayuagung', 'logo', '<h3>Filosofi Logo SMPS IT Madani Kayuagung</h3>\n<p>Logo SMPS IT Madani Kayuagung memadukan lambang perisai keimanan, kubah masjid, Al-Qur\'an terbuka, dan obor semangat menuju terwujudnya generasi Qur\'ani yang cerdas dan berakhlakul karimah.</p>', 'Makna filosofis lambang dan logo resmi SMPS IT Madani Kayuagung.', 'publish', 'page', '/uploads/logo-madani.png', 0, NULL, NULL, 'Logo Resmi Sekolah Islam Terpadu Madani Kayuagung', 'Makna filosofis lambang dan logo resmi Sekolah Islam Terpadu Madani Kayuagung.', NULL, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(88, 'Kontak & Sekretariat SPMB SMPS IT Madani', 'hubungi', '<h3>Sekretariat Sekolah & Panitia SPMB</h3>\n<p>Silakan kunjungi kampus kami atau hubungi panitia SPMB untuk informasi pendaftaran peserta didik baru gelombang exclusive, jadwal seleksi, dan cashback 1 juta.</p>\n<p><strong>Alamat Kampus:</strong> Jalan Sadewa No. 45 RT 01 RW 04 Kel. Tanjung Rancing, Kec. Kayuagung Timur, Kota Kayuagung, Sumatera Selatan 30618.<br>\n<strong>WhatsApp / Telp:</strong> 0852-6990-8696 / 0853-7897-4396<br>\n<strong>Email:</strong> smpitSIT Madani.2015@yahoo.com</p>', 'Alamat dan kontak resmi sekretariat SMPS IT Madani Kayuagung.', 'publish', 'page', '/uploads/campus-sit-madani.webp', 0, NULL, NULL, 'Kontak & Sekretariat SPMB SMPS IT Madani', 'Alamat dan kontak resmi sekretariat Sekolah Islam Terpadu Madani Kayuagung.', NULL, '2026-09-19 21:27:08', '2026-11-01 12:43:13'),
(97, 'Sambutan Ketua Yayasan Agung Madani Kayuagung', 'sambutan-ketua-yayasan', '<h2>Mewujudkan Ekosistem Pendidikan Islam Terpadu Satu Atap di Kabupaten OKI</h2><p><em>Bismillahirrohmanirrohim. Alhamdulillahi Rabbil \'Alamin.</em></p><p>Yayasan Agung Madani Kayuagung didirikan atas dasar komitmen tulus memajukan kualitas generasi masa depan bangsa di Kabupaten Ogan Komering Ilir. Kami meyakini bahwa pendidikan anak usia dini hingga remaja merupakan masa emas untuk meletakkan fondasi iman, takwa, adab Qur\'ani, serta ketajaman nalar intelektual.</p><p>Melalui 3 unit pendidikan di bawah naungan yayasan: <strong>TKS IT Madani, SDS IT Madani, dan SMPS IT Madani</strong>, kami membangun kesinambungan kurikulum terpadu khas JSIT Indonesia. Anak-anak dibimbing secara berjenjang dari pembiasaan ibadah dan tahfidz cilik, penguasaan hafalan 2 juz dan hadits di sekolah dasar, hingga pematangan tahfidz bersanad dan kepemimpinan di tingkat menengah pertama.</p><p>Semoga Allah Subhanahu Wa Ta\'ala senantiasa memberkahi ikhtiar kita bersama. Amin ya Rabbal \'Alamin.</p>', NULL, 'publish', 'page', NULL, 0, 1, NULL, NULL, NULL, NULL, '2026-11-01 12:45:09', '2026-11-01 12:45:09'),
(98, 'Visi dan Misi Yayasan Agung Madani Kayuagung', 'visi-misi-yayasan', '<h2>Visi Yayasan</h2><p><strong>"Menjadi Yayasan Pendidikan Islam Terkemuka yang Melahirkan Generasi Rabbani Berkualitas Tinggi, Berakhlak Mulia, dan Unggul Menghadapi Era Global."</strong></p><h2>Misi Yayasan</h2><ol><li>Menyelenggarakan pendidikan Islam terpadu yang berkualitas dari jenjang PAUD/TK, SD, hingga SMP.</li><li>Menyediakan sarana dan prasarana pendidikan yang modern, representatif, islami, dan asri.</li><li>Meningkatkan kompetensi, profesionalitas, dan kesejahteraan seluruh tenaga pendidik dan kependidikan.</li><li>Membangun sinergi kokoh dengan orang tua, masyarakat, pemerintah, dan Jaringan Sekolah Islam Terpadu (JSIT) Indonesia.</li></ol><h2>Tujuan Kelembagaan</h2><p>Mewujudkan ekosistem pendidikan Islam terintegrasi satu atap di Kabupaten Ogan Komering Ilir yang melahirkan lulusan berakhlak mulia, hafal Al-Qur\'an, cerdas sains teknologi, dan berwawasan luas.</p>', NULL, 'publish', 'page', NULL, 0, 1, NULL, NULL, NULL, NULL, '2026-11-01 12:45:09', '2026-11-01 12:45:09'),
(99, 'Profil dan Sejarah Yayasan Agung Madani Kayuagung', 'tentang-yayasan', '<h2>Tentang Yayasan Agung Madani</h2><p>Yayasan Agung Madani Kayuagung adalah lembaga nirlaba penyelenggara pendidikan Islam terpadu yang berpusat di Kota Kayuagung, Kabupaten Ogan Komering Ilir, Sumatera Selatan. Berdiri sejak tahun 2012, yayasan ini menaungi tiga jenjang pendidikan berakreditasi: <strong>TKS Islam Terpadu Madani (NPSN 69915461)</strong>, <strong>SDS Islam Terpadu Madani (NPSN 69881529)</strong>, dan <strong>SMPS Islam Terpadu Madani (NPSN 70034917)</strong>.</p><p>Dengan kampus terpadu milik sendiri di Jalan SMA Negeri 4, RT 02 LK III, Kelurahan Tanjung Rancing, Yayasan Agung Madani berkomitmen membina seluruh santri dengan fasilitas lengkap, asrama tahfidz, laboratorium komputer, dan tenaga pendidik profesional bersertifikasi.</p>', NULL, 'publish', 'page', NULL, 0, 1, NULL, NULL, NULL, NULL, '2026-11-01 12:45:09', '2026-11-01 12:45:09'),
(100, 'Struktur Organisasi Yayasan Agung Madani Kayuagung', 'struktur-yayasan', '<h2>Bagan Kelembagaan Yayasan Agung Madani Kayuagung</h2><h3>A. Dewan Pembina</h3><ul><li>Ustad H. Husnul Anam, S.H.I.</li><li>Dr. H. Abdul Gofar, S.Pd., M.Pd.I.</li><li>Ustad Rinto Andrian Usman, S.Pd.I.</li></ul><h3>B. Dewan Pengawas</h3><ul><li>Ustad Assoc. Prof. Dr. H. Husnul Amin, Lc., M.M., M.H.I.</li><li>Hendri Suriyanto, S.Pd., M.Pd.</li></ul><h3>C. Pengurus Harian Yayasan</h3><ul><li><strong>Ketua:</strong> Drs. H. Legianto, M.E.E.</li><li><strong>Sekretaris:</strong> Yessi, S.H., M.H.</li><li><strong>Bendahara:</strong> Nurul Ramadhani, S.H.</li></ul><h3>D. Direktorat Yayasan</h3><ul><li><strong>Direktur Pendidikan:</strong> Wahyudi, S.Sos.I.</li><li><strong>Direktur Sarana & Prasarana:</strong> Kosim Abduh, S.Pd.I.</li></ul>', NULL, 'publish', 'page', NULL, 0, 1, NULL, NULL, NULL, NULL, '2026-11-01 12:45:09', '2026-11-01 12:45:09'),
(101, 'Sambutan Kepala TKS IT Madani Kayuagung', 'sambutan-kepala-tks-it', '<h2>Membimbing Tumbuh Kembang Golden Age Berkarakter Qur\'ani</h2><p><em>Assalamu\'alaikum Warahmatullahi Wabarakatuh.</em></p><p>Selamat datang di TKS Islam Terpadu Madani Kayuagung. Pendidikan anak usia dini adalah fondasi terpenting dalam pembentukan kepribadian anak. Di TKS IT Madani, kami menerapkan pendekatan <strong>Deep Learning</strong> (berkesadaran, bermakna, dan menggembirakan) yang dipadukan dengan pembiasaan sentra ibadah, tahfidz cilik, serta pengembangan motorik dan kreativitas anak.</p><p><strong>Ayu Rahmayani, S.Pd.Gr. (Bunda Ayu)</strong><br>Kepala TKS IT Madani Kayuagung</p>', NULL, 'publish', 'page', NULL, 0, 1, NULL, NULL, NULL, NULL, '2026-11-01 12:45:09', '2026-11-01 12:45:09'),
(102, 'Visi dan Misi TKS IT Madani Kayuagung', 'visi-misi-tks-it', '<h2>Visi TKS IT Madani</h2><p><strong>"Membentuk Generasi Rabbani yang Kreatif, Cerdas, dan Mandiri"</strong></p><h2>Misi TKS IT Madani</h2><ol><li>Membiasakan ibadah harian: Sholat Dhuha, doa sebelum dan sesudah kegiatan, muroja\'ah hafalan surat pendek Juz 30 dan hadits.</li><li>Membentuk karakter yang berakhlak mulia melalui pembiasaan perilaku terpuji.</li><li>Mengembangkan daya imajinasi anak melalui bermain peran, bercerita, dan sentra seni.</li><li>Mendukung bakat dan kreativitas anak melalui beragam kegiatan variatif dan menyenangkan.</li><li>Menyelenggarakan proses belajar yang inovatif dengan pendekatan Deep Learning.</li><li>Melatih keterampilan motorik, bahasa, kognitif, dan sosial emosional.</li><li>Menumbuhkan rasa percaya diri anak di depan umum.</li></ol>', NULL, 'publish', 'page', NULL, 0, 1, NULL, NULL, NULL, NULL, '2026-11-01 12:45:09', '2026-11-01 12:45:09'),
(103, 'Profil Singkat TKS IT Madani Kayuagung', 'tentang-tks-it', '<h2>Profil TKS Islam Terpadu Madani Kayuagung</h2><p>TKS IT Madani Kayuagung (NPSN: 69915461) berdiri sejak tahun 2014 di bawah naungan Yayasan Agung Madani. Berlokasi di Jalan SMA Negeri 4 RT 04 RW 02 Tanjung Rancing, TKS IT Madani berstatus Swasta dengan Akreditasi B dan siap menuju Akreditasi A. Sekolah ini memfasilitasi kelompok belajar TK A dan TK B dengan ruang sentra ber-AC, arena bermain edukatif indoor & outdoor, serta pojok literasi cerita bergambar.</p>', NULL, 'publish', 'page', NULL, 0, 1, NULL, NULL, NULL, NULL, '2026-11-01 12:45:09', '2026-11-01 12:45:09'),
(104, 'Struktur Organisasi TKS IT Madani Kayuagung', 'struktur-tks-it', '<h2>Struktur Organisasi TKS IT Madani</h2><p>Kepala Sekolah: Ayu Rahmayani, S.Pd.Gr.</p><p>Ketua FOMG / Komite: Tesi Yurike, SH.</p><p>Bendahara: Dwi Putrianti, S.Pd.Gr.</p><p>Tata Usaha: Emi Yati Lindasari, S.Pd.Gr.</p><p>Dewan Guru Sentra: Iwi Setyawati, Asmawati, Sapriah, Rizka Diah Putri, Dina Wahyu Utami, Lidya, Meiliana, Ghina Rahma Srikandi.</p>', NULL, 'publish', 'page', NULL, 0, 1, NULL, NULL, NULL, NULL, '2026-11-01 12:45:09', '2026-11-01 12:45:09'),
(105, 'Sambutan Kepala SDS IT Madani Kayuagung', 'sambutan-kepala-sds-it', '<h2>Mendidik Generasi Robbani Berprestasi, Sholeh & Inovatif</h2><p><em>Assalamu\'alaikum Warahmatullahi Wabarakatuh.</em></p><p>Puji syukur kita panjatkan ke hadirat Allah SWT. SDS Islam Terpadu Madani Kayuagung mendidik lebih dari 293 siswa dalam 13 rombongan belajar. Kami mengintegrasikan Kurikulum Merdeka nasional dengan Kurikulum Khas JSIT Indonesia: target hafalan 2 Juz Mutqin (Juz 30 & 29), hafalan 30 hadits adab, pembiasaan sholat berjamaah, serta penguasaan teknologi informasi dan sains sejak dini.</p><p><strong>Yudhi Arsyandi, S.Pd., Gr.</strong><br>Kepala SDS IT Madani Kayuagung</p>', NULL, 'publish', 'page', NULL, 0, 1, NULL, NULL, NULL, NULL, '2026-11-01 12:45:09', '2026-11-01 12:45:09'),
(106, 'Visi dan Misi SDS IT Madani Kayuagung', 'visi-misi-sds-it', '<h2>Visi SDS IT Madani</h2><p><strong>"Membentuk Generasi Robbani yang Berprestasi, Sholeh, Inovatif dan Mandiri"</strong></p><h2>Misi SDS IT Madani</h2><ol><li>Membangun atmosfer belajar yang Islami.</li><li>Membangun kepercayaan diri siswa dan civitas akademika SIT Madani.</li><li>Membangun kreatifitas dan inovasi siswa dan civitas akademika SIT Madani.</li><li>Mengembangkan budaya belajar untuk belajar.</li></ol><h2>Target Kelulusan (Tujuan)</h2><ol><li>Mampu membaca Al-Qur\'an secara tartil, sholat 5 waktu berjamaah, dan hafal doa harian.</li><li>Hafal 2 Juz Al-Qur\'an (Juz 30 & 29) secara mutqin bersanad.</li><li>Hafal 30 Hadits pilihan tentang adab dan akhlak.</li><li>Menguasai dasar-dasar numerasi, sains, bahasa (Arab & Inggris), serta komputer.</li><li>Sehat jasmani, cekatan, dan memiliki kemandirian melalui Pramuka SIT dan outbound.</li></ol>', NULL, 'publish', 'page', NULL, 0, 1, NULL, NULL, NULL, NULL, '2026-11-01 12:45:09', '2026-11-01 12:45:09'),
(107, 'Profil Singkat SDS IT Madani Kayuagung', 'tentang-sds-it', '<h2>Profil SDS Islam Terpadu Madani Kayuagung</h2><p>SDS IT Madani Kayuagung (NPSN: 69881529, NSS: 102110241529) berstatus Swasta dengan Akreditasi Baik (B). Didirikan pada tahun 2013 di atas tanah milik sendiri di Jalan SMA Negeri 4 RT 02 LK III, Tanjung Rancing, Kayuagung, Kabupaten OKI. Dengan 37 guru dan karyawan berdedikasi serta 13 ruang kelas ber-AC, laboratorium komputer, dan perpustakaan, SDS IT Madani menjadi sekolah dasar Islam percontohan di OKI.</p>', NULL, 'publish', 'page', NULL, 0, 1, NULL, NULL, NULL, NULL, '2026-11-01 12:45:09', '2026-11-01 12:45:09'),
(108, 'Struktur Organisasi SDS IT Madani Kayuagung', 'struktur-sds-it', '<h2>Struktur Organisasi SDS IT Madani TP 2026/2027</h2><p>Kepala Sekolah: Yudhi Arsyandi, S.Pd., Gr.</p><p>Ketua Komite Sekolah: Andi Kumaini, M.Pd.</p><p>Waka Kurikulum: Hayusnia Muslimah, S.Pd., Gr.</p><p>Waka Kesiswaan: Rizki Jamali, S.Pd.</p><p>Waka Sarpras: Mulya Budi Wijaya, S.Pd., Gr.</p><p>Waka Humas & Sosmed: Melna Andani, S.Sos., M.Si., Gr.</p><p>Bendahara: Siva Septiani, S.E.</p><p>Tata Usaha & TIK: Jeni Marselina, S.Kom.</p>', NULL, 'publish', 'page', NULL, 0, 1, NULL, NULL, NULL, NULL, '2026-11-01 12:45:09', '2026-11-01 12:45:09'),
(109, 'Upacara Peringatan Hari Pendidikan & Pelantikan Pengurus Siswa SIT Madani', 'galeri-kegiatan-madani-1', '<p>Upacara Peringatan Hari Pendidikan & Pelantikan Pengurus Siswa SIT Madani di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Upacara Peringatan Hari Pendidikan & Pelantikan Pengurus Siswa SIT Madani', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-01.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(110, 'Kegiatan Tahfidz Al-Qur\'an dan Muroja\'ah Bersama Ustadz di Masjid Kampus Madani', 'galeri-kegiatan-madani-2', '<p>Kegiatan Tahfidz Al-Qur\'an dan Muroja\'ah Bersama Ustadz di Masjid Kampus Madani di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Kegiatan Tahfidz Al-Qur\'an dan Muroja\'ah Bersama Ustadz di Masjid Kampus Madani', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-02.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(111, 'Pembelajaran Berbasis Sentra dan Kreativitas Anak Usia Dini TKS IT Madani', 'galeri-kegiatan-madani-3', '<p>Pembelajaran Berbasis Sentra dan Kreativitas Anak Usia Dini TKS IT Madani di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Pembelajaran Berbasis Sentra dan Kreativitas Anak Usia Dini TKS IT Madani', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-03.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(112, 'Praktikum Sains & Eksperimen Ilmiah Siswa di Laboratorium IPA Terpadu', 'galeri-kegiatan-madani-4', '<p>Praktikum Sains & Eksperimen Ilmiah Siswa di Laboratorium IPA Terpadu di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Praktikum Sains & Eksperimen Ilmiah Siswa di Laboratorium IPA Terpadu', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-04.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(113, 'Latihan Gabungan Kepramukaan & Outbound Pembinaan Karakter Kemandirian', 'galeri-kegiatan-madani-5', '<p>Latihan Gabungan Kepramukaan & Outbound Pembinaan Karakter Kemandirian di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Latihan Gabungan Kepramukaan & Outbound Pembinaan Karakter Kemandirian', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-05.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(114, 'Kunjungan Edukatif & Field Trip Siswa SIT Madani Kayuagung', 'galeri-kegiatan-madani-6', '<p>Kunjungan Edukatif & Field Trip Siswa SIT Madani Kayuagung di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Kunjungan Edukatif & Field Trip Siswa SIT Madani Kayuagung', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-06.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(115, 'Bimbingan Minat Bakat Seni Kaligrafi dan Bahasa Arab Siswa Berprestasi', 'galeri-kegiatan-madani-7', '<p>Bimbingan Minat Bakat Seni Kaligrafi dan Bahasa Arab Siswa Berprestasi di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Bimbingan Minat Bakat Seni Kaligrafi dan Bahasa Arab Siswa Berprestasi', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-07.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(116, 'Ajang Perlombaan Seni dan Prestasi Keolahragaan Antar Rombel SIT Madani', 'galeri-kegiatan-madani-8', '<p>Ajang Perlombaan Seni dan Prestasi Keolahragaan Antar Rombel SIT Madani di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Ajang Perlombaan Seni dan Prestasi Keolahragaan Antar Rombel SIT Madani', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-08.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(117, 'Kegiatan Muhadharah 3 Bahasa (Indonesia, Arab, Inggris) Melatih Percaya Diri', 'galeri-kegiatan-madani-9', '<p>Kegiatan Muhadharah 3 Bahasa (Indonesia, Arab, Inggris) Melatih Percaya Diri di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Kegiatan Muhadharah 3 Bahasa (Indonesia, Arab, Inggris) Melatih Percaya Diri', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-09.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(118, 'Pembinaan Akhlak dan Sholat Berjamaah Terbimbing di Lingkungan Kampus', 'galeri-kegiatan-madani-10', '<p>Pembinaan Akhlak dan Sholat Berjamaah Terbimbing di Lingkungan Kampus di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Pembinaan Akhlak dan Sholat Berjamaah Terbimbing di Lingkungan Kampus', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-10.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(119, 'Kompilasi Prestasi Juara Olimpiade Sains & Tahfidz Tingkat Kabupaten OKI', 'galeri-kegiatan-madani-11', '<p>Kompilasi Prestasi Juara Olimpiade Sains & Tahfidz Tingkat Kabupaten OKI di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Kompilasi Prestasi Juara Olimpiade Sains & Tahfidz Tingkat Kabupaten OKI', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-11.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(120, 'Sesi Belajar Interaktif Deep Learning dengan Media Digital dan Smart Board', 'galeri-kegiatan-madani-12', '<p>Sesi Belajar Interaktif Deep Learning dengan Media Digital dan Smart Board di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Sesi Belajar Interaktif Deep Learning dengan Media Digital dan Smart Board', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-12.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(121, 'Wisuda Tahfidz dan Uji Publik Hafalan Al-Qur\'an Santri SIT Madani', 'galeri-kegiatan-madani-13', '<p>Wisuda Tahfidz dan Uji Publik Hafalan Al-Qur\'an Santri SIT Madani di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Wisuda Tahfidz dan Uji Publik Hafalan Al-Qur\'an Santri SIT Madani', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-13.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(122, 'Kegiatan Apel Pagi dan Pembacaan Ikrar Santri SIT Madani Kayuagung', 'galeri-kegiatan-madani-14', '<p>Kegiatan Apel Pagi dan Pembacaan Ikrar Santri SIT Madani Kayuagung di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Kegiatan Apel Pagi dan Pembacaan Ikrar Santri SIT Madani Kayuagung', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-14.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(123, 'Aktivitas Gemar Membaca di Perpustakaan dan Pojok Literasi Sekolah', 'galeri-kegiatan-madani-15', '<p>Aktivitas Gemar Membaca di Perpustakaan dan Pojok Literasi Sekolah di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Aktivitas Gemar Membaca di Perpustakaan dan Pojok Literasi Sekolah', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-15.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(124, 'Pelatihan Pendidik & Tenaga Kependidikan Standarisasi JSIT Indonesia', 'galeri-kegiatan-madani-16', '<p>Pelatihan Pendidik & Tenaga Kependidikan Standarisasi JSIT Indonesia di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Pelatihan Pendidik & Tenaga Kependidikan Standarisasi JSIT Indonesia', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-16.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(125, 'Pemberian Penghargaan Bintang Kebaikan Siswa Teladan Bulanan', 'galeri-kegiatan-madani-17', '<p>Pemberian Penghargaan Bintang Kebaikan Siswa Teladan Bulanan di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Pemberian Penghargaan Bintang Kebaikan Siswa Teladan Bulanan', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-17.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(126, 'Peringatan Hari Guru Nasional dan Persembahan Mahakarya Siswa', 'galeri-kegiatan-madani-18', '<p>Peringatan Hari Guru Nasional dan Persembahan Mahakarya Siswa di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Peringatan Hari Guru Nasional dan Persembahan Mahakarya Siswa', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-18.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(127, 'Kegiatan Market Day & Pembelajaran Wirausaha Islami Siswa SDIT Madani', 'galeri-kegiatan-madani-19', '<p>Kegiatan Market Day & Pembelajaran Wirausaha Islami Siswa SDIT Madani di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Kegiatan Market Day & Pembelajaran Wirausaha Islami Siswa SDIT Madani', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-19.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(128, 'Senam Kesegaran Jasmani & Olahraga Memanah Sunnah Siswa SIT Madani', 'galeri-kegiatan-madani-20', '<p>Senam Kesegaran Jasmani & Olahraga Memanah Sunnah Siswa SIT Madani di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Senam Kesegaran Jasmani & Olahraga Memanah Sunnah Siswa SIT Madani', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-20.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(129, 'Kegiatan Dhuha Bersama dan Ceramah Karakter Islami Pagi Hari', 'galeri-kegiatan-madani-21', '<p>Kegiatan Dhuha Bersama dan Ceramah Karakter Islami Pagi Hari di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Kegiatan Dhuha Bersama dan Ceramah Karakter Islami Pagi Hari', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-21.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(130, 'Pembagian Laporan Hasil Belajar dan Silaturahmi Komite Orang Tua Siswa', 'galeri-kegiatan-madani-22', '<p>Pembagian Laporan Hasil Belajar dan Silaturahmi Komite Orang Tua Siswa di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Pembagian Laporan Hasil Belajar dan Silaturahmi Komite Orang Tua Siswa', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-22.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40');
INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `excerpt`, `status`, `type`, `featured_image`, `views_count`, `author_id`, `published_at`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(131, 'Simulasi ANBK dan Ujian Berbasis Komputer di Lab Komputer SIT Madani', 'galeri-kegiatan-madani-23', '<p>Simulasi ANBK dan Ujian Berbasis Komputer di Lab Komputer SIT Madani di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Simulasi ANBK dan Ujian Berbasis Komputer di Lab Komputer SIT Madani', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-23.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(132, 'Latihan Baris Berbaris dan Disiplin Siswa Bersama Pembina Madani', 'galeri-kegiatan-madani-24', '<p>Latihan Baris Berbaris dan Disiplin Siswa Bersama Pembina Madani di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Latihan Baris Berbaris dan Disiplin Siswa Bersama Pembina Madani', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-24.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(133, 'Pentas Seni Islami & Penampilan Perkusi Rebana Hadrah Siswa', 'galeri-kegiatan-madani-25', '<p>Pentas Seni Islami & Penampilan Perkusi Rebana Hadrah Siswa di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Pentas Seni Islami & Penampilan Perkusi Rebana Hadrah Siswa', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-25.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(134, 'Kegiatan Bakti Sosial & Infaq Peduli Sesama Santri Madani', 'galeri-kegiatan-madani-26', '<p>Kegiatan Bakti Sosial & Infaq Peduli Sesama Santri Madani di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Kegiatan Bakti Sosial & Infaq Peduli Sesama Santri Madani', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-26.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(135, 'Pemeriksaan Kesehatan Berkala & Penyuluhan PHBS bersama Puskesmas', 'galeri-kegiatan-madani-27', '<p>Pemeriksaan Kesehatan Berkala & Penyuluhan PHBS bersama Puskesmas di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Pemeriksaan Kesehatan Berkala & Penyuluhan PHBS bersama Puskesmas', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-27.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(136, 'Pemberian Piagam Bintang Tahfidz Mutqin Juz 30 dan Juz 29', 'galeri-kegiatan-madani-28', '<p>Pemberian Piagam Bintang Tahfidz Mutqin Juz 30 dan Juz 29 di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Pemberian Piagam Bintang Tahfidz Mutqin Juz 30 dan Juz 29', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-28.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(137, 'Kajian Parenting Islami Bersama Dewan Pembina Yayasan Agung Madani', 'galeri-kegiatan-madani-29', '<p>Kajian Parenting Islami Bersama Dewan Pembina Yayasan Agung Madani di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Kajian Parenting Islami Bersama Dewan Pembina Yayasan Agung Madani', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-29.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(138, 'Penyambutan Siswa Baru dan Pengenalan Lingkungan Sekolah (MPLS) Madani', 'galeri-kegiatan-madani-30', '<p>Penyambutan Siswa Baru dan Pengenalan Lingkungan Sekolah (MPLS) Madani di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Penyambutan Siswa Baru dan Pengenalan Lingkungan Sekolah (MPLS) Madani', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-30.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(139, 'Kegiatan Pramuka Siaga & Penggalang Gugus Depan SIT Madani', 'galeri-kegiatan-madani-31', '<p>Kegiatan Pramuka Siaga & Penggalang Gugus Depan SIT Madani di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Kegiatan Pramuka Siaga & Penggalang Gugus Depan SIT Madani', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-31.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(140, 'Suasana Rapat Kerja Tahunan Pimpinan Yayasan dan Dewan Guru SIT Madani', 'galeri-kegiatan-madani-32', '<p>Suasana Rapat Kerja Tahunan Pimpinan Yayasan dan Dewan Guru SIT Madani di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Suasana Rapat Kerja Tahunan Pimpinan Yayasan dan Dewan Guru SIT Madani', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-32.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(141, 'Class Meeting Olahraga Futsal dan Bola Voli Santri SIT Madani', 'galeri-kegiatan-madani-33', '<p>Class Meeting Olahraga Futsal dan Bola Voli Santri SIT Madani di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Class Meeting Olahraga Futsal dan Bola Voli Santri SIT Madani', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-33.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(142, 'Peringatan Tahun Baru Islam 1 Muharram dan Pawai Ta\'aruf Santri', 'galeri-kegiatan-madani-34', '<p>Peringatan Tahun Baru Islam 1 Muharram dan Pawai Ta\'aruf Santri di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Peringatan Tahun Baru Islam 1 Muharram dan Pawai Ta\'aruf Santri', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-34.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(143, 'Foto Bersama Keluarga Besar Yayasan Agung Madani Kayuagung', 'galeri-kegiatan-madani-35', '<p>Foto Bersama Keluarga Besar Yayasan Agung Madani Kayuagung di Sekolah Islam Terpadu Madani Kayuagung.</p>', 'Foto Bersama Keluarga Besar Yayasan Agung Madani Kayuagung', 'publish', 'gallery', '/uploads/madani/kegiatan-madani-35.webp', 10, NULL, '2026-11-01 13:25:40', NULL, NULL, NULL, '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(144, 'Keseruan Sentra Seni & Jurnal Gambar Anak TKS IT Madani Kayuagung', 'keseruan-sentra-seni-dan-jurnal-gambar-tks-it-madani', '<p>Suasana riang gembira mewarnai aktivitas belajar di TKS Islam Terpadu Madani Kayuagung pada Sentra Seni dan Kreativitas. Didampingi para bunda pendidik, anak-anak diajak menuangkan ide cerita melalui media gambar dan aneka teknik kreasi.</p><p>Kepala TKS IT Madani, <strong>Ayu Rahmayani, S.Pd.Gr. (Bunda Ayu)</strong>, menuturkan bahwa pendekatan sentra dan Deep Learning ini memberikan ruang seluas-luasnya bagi anak usia dini untuk bereksplorasi secara merdeka, mengasah motorik halus, sekaligus menumbuhkan rasa percaya diri.</p><p>Melalui jurnal gambar harian, anak-anak tidak hanya berlatih koordinasi visual dan motorik, tetapi juga belajar mengomunikasikan gagasan mereka dengan santun dan berani di depan teman-temannya.</p>', 'Anak-anak kelompok bermain TKS IT Madani antusias mengekspresikan imajinasi melalui jurnal gambar dan eksplorasi warna di sentra kreativitas.', 'publish', 'post', '/uploads/activities-sit-madani.webp', 184, NULL, '2026-10-18 00:47:16', NULL, NULL, NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(145, 'Pentas Ekspresi & Manasik Haji Cilik TKS IT Madani: Mengenal Rukun Islam Sejak Dini', 'pentas-ekspresi-dan-manasik-haji-cilik-tks-it-madani', '<p>Ratusan ananda sholeh dan sholehah TKS IT Madani Kayuagung dengan mengenakan pakaian ihram putih mengikuti peragaan <strong>Manasik Haji Cilik</strong> di halaman kampus terpadu SIT Madani.</p><p>Kegiatan edukatif ini bertujuan mengenalkan tata cara ibadah haji, melatih kesabaran, serta menanamkan rasa cinta kepada baitullah dan syiar Islam sejak masa usia keemasan (golden age).</p><p>Acara berlangsung dengan penuh keceriaan dan haru, didukung penuh oleh para orang tua yang tergabung dalam Forum Orang Tua Murid dan Guru (FOMG) TKS IT Madani.</p>', 'Mengenalkan rukun Islam kelima dan adab tawaf sejak usia dini dalam peragaan Manasik Haji Cilik TKS IT Madani Kayuagung.', 'publish', 'post', '/uploads/campus-sit-madani.webp', 316, NULL, '2026-10-27 00:47:16', NULL, NULL, NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(146, 'Market Day Cilik TKS IT Madani: Belajar Mandiri, Jujur & Berbagi Berkah', 'market-day-cilik-tks-it-madani-belajar-mandiri-dan-jujur', '<p>Kegiatan <strong>Market Day Cilik</strong> kembali diselenggarakan di TKS IT Madani Kayuagung. Anak-anak berperan aktif sebagai penjual dan pembeli makanan sehat serta suvenir hasil karya mereka sendiri.</p><p>Kegiatan ini dirancang untuk menumbuhkan jiwa wirausaha islami, melatih kejujuran, sikap saling menghargai, serta menanamkan kebiasaan bersedekah dari sebagian rezeki yang diperoleh.</p>', 'Melatih kecakapan sosial, komunikasi positif, dan dasar berhitung melalui simulasi jual-beli halal yang menyenangkan di TKS IT Madani.', 'publish', 'post', '/uploads/activities-sit-madani.webp', 281, NULL, '2026-10-25 00:47:16', NULL, NULL, NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(147, 'Pelaksanaan ANBK SDS IT Madani di Laboratorium Komputer Berlangsung Tertib & Lancar', 'pelaksanaan-anbk-sds-it-madani-kayuagung-berlangsung-sukses', '<p>Pelaksanaan Asesmen Nasional Berbasis Komputer (ANBK) di SDS Islam Terpadu Madani Kayuagung berjalan tertib, aman, dan tanpa kendala teknis. Sebanyak siswa kelas 5 mengikuti seluruh sesi literasi membaca dan numerasi di ruang laboratorium komputer sekolah.</p><p>Kepala SDS IT Madani, <strong>Yudhi Arsyandi, S.Pd., Gr.</strong>, memberikan apresiasi kepada tim proktor, teknisi, dan dewan guru yang telah mempersiapkan pembekalan literasi komputer bagi siswa sejak dini.</p><p>"Alhamdulillah, dengan fasilitas PC modern dan jaringan internet yang memadai, anak-anak kami dapat mengerjakan instrumen asesmen dengan tenang dan penuh rasa percaya diri," ungkap beliau.</p>', 'Siswa kelas 5 SDS IT Madani Kayuagung sukses menyelesaikan Asesmen Nasional Berbasis Komputer (ANBK) dengan fasilitas laboratorium komputer modern.', 'publish', 'post', '/uploads/campus-sit-madani.webp', 631, NULL, '2026-10-17 00:47:16', NULL, NULL, NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(148, 'Semarak Market Day & Gebyar Karya Siswa SDS IT Madani Kayuagung', 'semarak-market-day-dan-gebyar-karya-siswa-sds-it-madani', '<p>Halaman kampus terpadu SIT Madani dipadati pengunjung pada acara tahunan <strong>Gebyar Karya & Market Day SDS IT Madani</strong>. Kegiatan ini melibatkan seluruh jenjang kelas 1 hingga kelas 6.</p><p>Siswa tidak hanya mempraktikkan keterampilan berhitung dan transaksi keuangan, namun juga menerapkan 10 Muwashofat karakter JSIT seperti mandiri, jujur, dan berakhlak mulia.</p>', 'Sebanyak 293 siswa SDS IT Madani dalam 13 rombongan belajar memamerkan inovasi produk kuliner sehat dan kreasi kriya bernilai jual.', 'publish', 'post', '/uploads/activities-sit-madani.webp', 268, NULL, '2026-10-26 00:47:16', NULL, NULL, NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(149, 'Program Munaqosah Tahfidz 2 Juz Mutqin SDS IT Madani Cetak Generasi Penjaga Kalamullah', 'program-munaqosah-tahfidz-2-juz-mutqin-sds-it-madani', '<p>SDS IT Madani menyelenggarakan agenda tahunan <strong>Munaqosah dan Uji Publik Tahfidz Al-Qur\'an</strong>. Di hadapan dewan penguji dan orang tua wali, puluhan santri cilik membuktikan kelancaran hafalan juz 30 dan 29 dengan bacaan tartil sesuai kaidah tajwid.</p><p>Program unggulan ini menjadi bukti komitmen SDS IT Madani dalam melahirkan anak-anak yang cerdas akal dan bercahaya hatinya dengan kalam ilahi.</p>', 'Uji publik hafalan Al-Qur\'an Juz 30 dan 29 mutqin bersanad bagi siswa sekolah dasar di SDS IT Madani Kayuagung.', 'publish', 'post', '/uploads/tahfidz-sit-madani.webp', 412, NULL, '2026-10-19 00:47:16', NULL, NULL, NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(150, 'Juara 1 Lomba Mewarnai Tingkat PAUD/TK se-Kabupaten Ogan Komering Ilir', 'juara-1-lomba-mewarnai-paud-tk-kabupaten-oki', '<p>Prestasi membanggakan ditorehkan oleh ananda <strong>Aisyah Humaira</strong>, siswi kelompok TK B Madinah TKS Islam Terpadu Madani Kayuagung yang sukses meraih <strong>Juara 1 Lomba Mewarnai</strong> pada Gebyar PAUD tingkat Kabupaten Ogan Komering Ilir.</p><p>Karya gambar yang rapi, pemilihan perpaduan warna yang harmonis, serta kreativitas visual yang ditunjukkan berhasil memikat dewan juri.</p>', 'Ananda Aisyah Humaira dari TKS IT Madani berhasil meraih Juara 1 dalam Lomba Mewarnai Tingkat Kabupaten OKI.', 'publish', 'prestasi', '/uploads/activities-sit-madani.webp', 889, NULL, '2026-10-28 00:47:16', NULL, NULL, NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(151, 'Juara 1 Lomba Tahfidz Cilik Surat Pendek Juz 30 Festival Anak Sholeh', 'juara-1-lomba-tahfidz-cilik-festival-anak-sholeh', '<p>Ananda <strong>M. Fatih Al-Farabi</strong> dari TKS IT Madani Kayuagung berhasil meraih <strong>Juara 1 Lomba Tahfidz Cilik</strong> dalam ajang Festival Anak Sholeh. Dengan kelancaran hafalan surat-surat pendek, ketepatan makharijul huruf, serta adab tilawah yang baik, ananda tampil memukau di hadapan dewan asatidz.</p>', 'M. Fatih Al-Farabi mengharumkan nama TKS IT Madani dengan meraih Juara 1 Tahfidz Cilik Juz 30.', 'publish', 'prestasi', '/uploads/tahfidz-sit-madani.webp', 1059, NULL, '2026-09-21 00:47:16', NULL, NULL, NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(152, 'Juara 2 Lomba Gerak & Lagu Anak Sholeh Se-Kecamatan Kota Kayuagung', 'juara-2-lomba-gerak-dan-lagu-anak-sholeh-kayuagung', '<p>Kekompakan regu ananda TKS IT Madani membuahkan hasil manis dengan diraihnya <strong>Juara 2 Lomba Gerak & Lagu Anak Sholeh</strong>. Menampilkan gerak ceria bertema adab islami, ananda tampil penuh senyum dan percaya diri.</p>', 'Tim Cilik TKS IT Madani meraih Juara 2 Lomba Gerak dan Lagu Islami se-Kecamatan Kota Kayuagung.', 'publish', 'prestasi', '/uploads/activities-sit-madani.webp', 1114, NULL, '2026-10-31 00:47:16', NULL, NULL, NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(153, 'Juara 1 Olimpiade Sains Nasional (OSN) Bidang IPA SD se-Kabupaten OKI', 'juara-1-olimpiade-sains-nasional-ipa-sd-kabupaten-oki', '<p>Prestasi gemilang kembali diraih oleh keluarga besar SDS Islam Terpadu Madani Kayuagung. Siswa berprestasi atas nama <strong>Muhammad Rayhan Al-Ghifari</strong> sukses menyabet gelar <strong>Juara 1 Olimpiade Sains Nasional (OSN)</strong> bidang Ilmu Pengetahuan Alam (IPA) tingkat Kabupaten Ogan Komering Ilir.</p><p>Rayhan berhasil mengungguli puluhan peserta dari berbagai sekolah negeri dan swasta se-Kabupaten OKI dan berhak melaju mewakili kabupaten ke tingkat Provinsi Sumatera Selatan.</p>', 'Siswa SDS IT Madani Kayuagung sukses menorehkan prestasi puncak sebagai Juara 1 OSN IPA Tingkat Kabupaten.', 'publish', 'prestasi', '/uploads/campus-sit-madani.webp', 1048, NULL, '2026-10-25 00:47:16', NULL, NULL, NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(154, 'Juara 1 Musabaqah Hifdzil Qur\'an (MHQ) 2 Juz Tingkat Provinsi Sumatera Selatan', 'juara-1-mhq-2-juz-tingkat-provinsi-sumsel', '<p>Santriwati SDS IT Madani Kayuagung, <strong>Khadijah Azzahra</strong> (kelas 4), sukses meraih predikat <strong>Juara 1 Musabaqah Hifdzil Qur\'an (MHQ) Cabang 2 Juz</strong> pada kejuaraan pelajar tingkat Provinsi Sumatera Selatan. Keberhasilan ini menjadi bukti keunggulan program TTQ dan bimbingan talaqqi bersanad di SDS IT Madani.</p>', 'Khadijah Azzahra membuktikan kualitas hafalan Qur\'an SDS IT Madani dengan meraih Juara 1 MHQ 2 Juz se-Sumsel.', 'publish', 'prestasi', '/uploads/tahfidz-sit-madani.webp', 969, NULL, '2026-10-12 00:47:16', NULL, NULL, NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(155, 'Juara Umum Lomba Senam & Kepanduan Pramuka SIT Tingkat SD se-Kabupaten OKI', 'juara-umum-lomba-senam-dan-kepanduan-pramuka-sit-sd', '<p>Regu Pandu SIT SDS IT Madani Kayuagung berhasil mengukir sejarah dengan dinobatkan sebagai <strong>Juara Umum</strong> dalam Jambore Kepanduan Sekolah Islam Terpadu se-Kabupaten Ogan Komering Ilir. Menguasai lomba sandi, pioneering, ketangkasan halang rintang, serta senam kreasi anak sholeh, siswa tampil tangguh dan penuh sportivitas.</p>', 'Regu Pramuka SIT SDS IT Madani memborong piala dan meraih trofi Juara Umum Kepanduan Sekolah Dasar.', 'publish', 'prestasi', '/uploads/activities-sit-madani.webp', 514, NULL, '2026-10-04 00:47:16', NULL, NULL, NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(156, 'Juara 1 English Story Telling Competition Tingkat SMP se-Sumatera Selatan', 'juara-1-english-story-telling-competition-tingkat-smp-sumsel', '<p>Kemampuan berbahasa asing santri SMPS IT Madani kembali diakui di level regional. <strong>Nayla Safira</strong>, siswi kelas IX SMPS IT Madani, berhasil meraih <strong>Juara 1 English Story Telling Competition</strong> pada Festival Bahasa Pelajar se-Sumatera Selatan.</p><p>Membawakan narasi bertema keteladanan tokoh Islam dunia dengan kefasihan tata bahasa, intonasi memukau, dan ekspresi teatrikal, Nayla sukses memikat seluruh dewan juri.</p>', 'Siswi SMPS IT Madani Kayuagung meraih Juara 1 Lomba Story Telling Bahasa Inggris bergengsi tingkat provinsi.', 'publish', 'prestasi', '/uploads/campus-sit-madani.webp', 883, NULL, '2026-10-02 00:47:16', NULL, NULL, NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(157, 'Juara 2 Kompetisi Sains Nasional (KSN) Bidang IPA SMP se-Kabupaten OKI', 'juara-2-kompetisi-sains-nasional-ksn-ipa-smp-oki', '<p>Siswa SMPS IT Madani, <strong>Ahmad Zaidan</strong>, meraih <strong>Juara 2 KSN Bidang IPA</strong> tingkat Kabupaten OKI. Pembekalan intensif di laboratorium sains terpadu SMPS IT Madani terbukti mengantarkan siswa bersaing unggul di bidang akademis tingkat kabupaten.</p>', 'Ahmad Zaidan siswa SMPS IT Madani sukses meraih Juara 2 KSN Bidang IPA SMP tingkat Kabupaten Ogan Komering Ilir.', 'publish', 'prestasi', '/uploads/activities-sit-madani.webp', 760, NULL, '2026-09-25 00:47:16', NULL, NULL, NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(158, 'Juara 1 Musabaqah Hifdzil Qur\'an (MHQ) 5 Juz Antar Pelajar se-Kabupaten OKI', 'juara-1-mhq-5-juz-antar-pelajar-kabupaten-oki', '<p>Santri SMPS IT Madani Kayuagung, <strong>Bilal Al-Anshari</strong>, sukses meraih <strong>Juara 1 MHQ 5 Juz</strong> dalam kompetisi Musabaqah Tilawatil & Hifdzil Qur\'an tingkat Kabupaten OKI. Bimbingan tahfidz intensif dan halaqah Al-Qur\'an di SMPS IT Madani terus melahirkan generasi huffadz yang berkualitas.</p>', 'Bilal Al-Anshari santri SMPS IT Madani berhasil meraih Juara 1 MHQ 5 Juz Mutqin.', 'publish', 'prestasi', '/uploads/tahfidz-sit-madani.webp', 262, NULL, '2026-10-12 00:47:16', NULL, NULL, NULL, '2026-11-02 00:47:16', '2026-11-02 00:47:16');

-- --------------------------------------------------------

-- Table structure for table `ppdb_registrations`
DROP TABLE IF EXISTS `ppdb_registrations`;
CREATE TABLE `ppdb_registrations` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `registration_number` varchar(50) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `birth_place` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `living_with` varchar(100) NOT NULL DEFAULT 'Orang Tua',
  `child_order` int(11) DEFAULT NULL,
  `siblings_count` int(11) DEFAULT NULL,
  `previous_school` varchar(255) NOT NULL,
  `nisn` varchar(50) DEFAULT NULL,
  `hobby` varchar(255) DEFAULT NULL,
  `favorite_subject` varchar(255) DEFAULT NULL,
  `ambition` varchar(255) DEFAULT NULL,
  `achievements` text DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `track` varchar(100) DEFAULT NULL,
  `program_type` varchar(100) DEFAULT NULL,
  `wave` varchar(100) DEFAULT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_birth_place` varchar(100) DEFAULT NULL,
  `father_birth_date` date DEFAULT NULL,
  `father_address` text DEFAULT NULL,
  `father_education` varchar(100) DEFAULT NULL,
  `father_job` varchar(100) DEFAULT NULL,
  `father_income` varchar(100) DEFAULT NULL,
  `father_phone` varchar(50) DEFAULT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_birth_place` varchar(100) DEFAULT NULL,
  `mother_birth_date` date DEFAULT NULL,
  `mother_address` text DEFAULT NULL,
  `mother_education` varchar(100) DEFAULT NULL,
  `mother_job` varchar(100) DEFAULT NULL,
  `mother_income` varchar(100) DEFAULT NULL,
  `mother_phone` varchar(50) DEFAULT NULL,
  `birth_certificate_path` varchar(255) DEFAULT NULL,
  `payment_proof_path` varchar(255) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `academic_year` varchar(20) NOT NULL DEFAULT '2026/2027',
  `notes` text DEFAULT NULL,
  `extra_fields` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`extra_fields`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `ppdb_registrations`
-- (No records for `ppdb_registrations`)

-- --------------------------------------------------------

-- Table structure for table `ppdb_tracks`
DROP TABLE IF EXISTS `ppdb_tracks`;
CREATE TABLE `ppdb_tracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `percentage` varchar(30) NOT NULL DEFAULT '0%',
  `quota` varchar(100) DEFAULT NULL,
  `cashback_info` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `ppdb_tracks`
INSERT INTO `ppdb_tracks` (`id`, `name`, `slug`, `percentage`, `quota`, `cashback_info`, `description`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Jalur First Brive', 'jalur-first-brive', '10%', 'Kuota Terbatas', 'Cashback Khusus Pendaftar Gelombang Pertama', 'Keringanan biaya dan prioritas pendaftaran bagi calon siswa yang mendaftar pada periode awal (First Brive). Mendapatkan potongan biaya masuk serta souvenir eksklusif sekolah.', 1, 1, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(2, 'Jalur Mutasi Kerja', 'jalur-mutasi-kerja', '5%', 'Kuota Khusus Mutasi', 'Keringanan Khusus Pindahan Kedinasan / Perusahaan', 'Jalur khusus bagi putra-putri dari orang tua yang mengalami mutasi kerja atau pindah tugas kedinasan (TNI, Polri, ASN, BUMN, Perusahaan Swasta) ke wilayah Kayuagung, OKI dan sekitarnya.', 2, 1, '2026-09-19 21:27:09', '2026-09-19 21:27:09'),
(3, 'Jalur Tahfidz', 'jalur-tahfidz', '5%', 'Hanya 10 Siswa', 'Cashback Rp 750.000,- s/d Rp 1.000.000,-', 'Tahfidz minimal 4-5 Juz Cashback Rp. 750.000,-\nTahfidz >5 Juz Cashback Rp. 1.000.000,-\nMengikuti tes sima\'an tahfidz bersama dewan musyrif Al-Qur\'an Madani.\nKuota Jalur Tahfidz Hanya 10 Siswa.', 3, 1, '2026-09-19 21:27:09', '2026-09-19 21:27:09'),
(4, 'Jalur Alumni', 'jalur-alumni', '25%', 'Hanya 50 Siswa', 'Potongan Uang Pangkal Rp 1.000.000,-', 'Keringanan istimewa bagi lulusan SD IT SIT Madani dan SD IT SIT Madani Kayuagung 2 yang melanjutkan ke Sekolah Islam Terpadu Madani Kayuagung berupa potongan biaya uang pangkal sebesar Rp. 1.000.000,- dengan kuota (hanya 50 siswa).', 4, 1, '2026-09-19 21:27:09', '2026-09-19 21:27:09'),
(5, 'Jalur Prestasi', 'jalur-prestasi', '30%', 'Prioritas Penerimaan', 'Bebas Tes Akademik & Potongan Biaya', 'Bebas tes tulis akademik bagi peraih Juara 1, 2, atau 3 tingkat Kota/Kabupaten, Provinsi, maupun Nasional pada bidang akademik, sains, seni, dan olahraga. Diskon khusus biaya masuk dan prioritas penerimaan.', 5, 1, '2026-09-19 21:27:09', '2026-09-19 21:27:09'),
(6, 'Jalur Reguler', 'jalur-reguler', '25%', 'Sesuai Kuota Kelas', 'Tes Mandiri Sekolah', 'Jalur seleksi reguler melalui tahapan:\nTes Potensi Akademik (Matematika, Bahasa Indonesia, PAI).\nTes Kemampuan Membaca Al-Qur\'an (Tahsin & Tajwid).\nWawancara Komitmen Orang Tua & Siswa.', 6, 1, '2026-09-19 21:27:09', '2026-09-19 21:27:09');

-- --------------------------------------------------------

-- Table structure for table `quick_menus`
DROP TABLE IF EXISTS `quick_menus`;
CREATE TABLE `quick_menus` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `quick_menus`
INSERT INTO `quick_menus` (`id`, `name`, `icon`, `url`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'SPMB', 'fa-solid fa-graduation-cap', '/spmb', 1, 1, '2026-09-19 21:27:08', '2026-11-01 13:07:56'),
(2, 'Profil', 'fa-solid fa-school', '/tentang-kami', 2, 1, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(3, 'Guru', 'fa-solid fa-chalkboard-user', '/dewan-guru', 3, 1, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(4, 'Fasilitas', 'fa-solid fa-layer-group', '/fasilitas', 4, 1, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(5, 'Unggulan', 'fa-solid fa-award', '/unggulan', 5, 1, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(6, 'Prestasi', 'fa-solid fa-trophy', '/prestasi', 6, 1, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(7, 'Ekskul', 'fa-solid fa-people-group', '/ekstrakurikuler', 7, 1, '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(8, 'Berita', 'fa-solid fa-newspaper', '/artikel', 8, 1, '2026-09-19 21:27:08', '2026-09-19 21:27:08');

-- --------------------------------------------------------

-- Table structure for table `service_submissions`
DROP TABLE IF EXISTS `service_submissions`;
CREATE TABLE `service_submissions` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `service_type` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `agency` varchar(255) NOT NULL,
  `whatsapp` varchar(30) NOT NULL,
  `purpose` text NOT NULL,
  `letter_path` varchar(255) DEFAULT NULL,
  `ktp_path` varchar(255) DEFAULT NULL,
  `npwp_path` varchar(255) DEFAULT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pending',
  `admin_notes` text DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `service_submissions`
-- (No records for `service_submissions`)

-- --------------------------------------------------------

-- Table structure for table `sessions`
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (

  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `sessions`
-- (No records for `sessions`)

-- --------------------------------------------------------

-- Table structure for table `settings`
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` longtext DEFAULT NULL,
  `group` varchar(255) NOT NULL DEFAULT 'general',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `settings`
INSERT INTO `settings` (`id`, `key`, `value`, `group`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'Yayasan Agung Madani Kayuagung', 'general', '2026-09-18 15:40:23', '2026-11-01 12:42:35'),
(2, 'site_tagline', 'Membina Generasi Qur\'ani, Cerdas, Berakhlak Mulia & Berprestasi Global', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(3, 'site_description', 'Official Website Yayasan Agung Madani Kayuagung (SIT Madani). Menaungi TKS IT Madani, SDS IT Madani, dan SMPS IT Madani di Kabupaten Ogan Komering Ilir, Sumatera Selatan.', 'general', '2026-09-18 15:40:23', '2026-11-01 12:42:35'),
(4, 'contact_email', 'admin@sitmadani.sch.id', 'general', '2026-09-18 15:40:23', '2026-11-01 12:42:35'),
(5, 'contact_phone', '0852-6990-8696', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(6, 'contact_whatsapp', '0852-6990-8696', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(7, 'contact_phone_alt', '0853-7897-4396', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(8, 'contact_address', 'Jalan SMA Negeri 4, RT 02 LK III, Kelurahan Tanjung Rancing, Kecamatan Kayuagung, Kabupaten Ogan Komering Ilir, Sumatera Selatan 30618', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(9, 'social_facebook', 'https://www.facebook.com/sitmadani', 'general', '2026-09-18 15:40:23', '2026-11-01 12:42:35'),
(10, 'social_instagram', 'https://www.instagram.com/sitmadani', 'general', '2026-09-18 15:40:23', '2026-11-01 12:42:35'),
(11, 'social_youtube', 'https://www.youtube.com/@sitmadani', 'general', '2026-09-18 15:40:23', '2026-11-01 12:42:35'),
(12, 'social_tiktok', 'https://www.tiktok.com/@sitmadani', 'general', '2026-09-18 15:40:23', '2026-11-01 12:42:35'),
(13, 'google_maps_url', 'https://maps.app.goo.gl/oN2gtn7TuTGELXJ86', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(14, 'banner_daftar_url', '/spmb', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(15, 'banner_donasi_url', '/donasi', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(16, 'site_logo', '/uploads/logo-madani.png', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(17, 'site_logo_square', '/uploads/logo-madani-square.png', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(18, 'og_title', 'Yayasan Agung Madani - SIT Madani Kayuagung', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(19, 'og_description', 'Portal Resmi Yayasan Agung Madani & Sekolah Islam Terpadu Madani Kayuagung (TK, SD, SMP): SPMB, Profil, Prestasi, Berita, dan Program Tahfidz.', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(20, 'og_image', '/uploads/logo-madani-square.png', 'general', '2026-09-18 15:40:23', '2026-09-18 19:28:59'),
(21, 'meta_keywords', 'yayasan agung madani kayuagung, sit madani, tks it madani, sds it madani, smps it madani, spmb madani, tahfidz kayuagung, oki', 'general', '2026-09-18 15:40:23', '2026-11-01 12:42:35'),
(22, 'npsn', '69787455', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(23, 'akreditasi', 'B (Terakreditasi BAN-SM)', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(24, 'no_sk_akreditasi', '1036/BAN-SM/SK/2021', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(25, 'sk_pendirian', '2.16.72.04.001', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(26, 'sk_izin', '0876/DPMPTSP.V/IX/2023', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(27, 'kepala_sekolah', 'Ribang Imam Satria, S.Pi., Gr.', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(28, 'spmb_promo_title', 'SPMB Gelombang Exclusive', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(29, 'spmb_promo_cashback', 'Cash Back 1 Juta', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(30, 'spmb_promo_quota', '24 Siswa per Kelas', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(31, 'spmb_promo_note', '*Khusus Alumni SDS IT Madani', 'general', '2026-09-18 15:40:23', '2026-11-01 12:42:35'),
(32, 'donation_bank_1_name', 'Bank Syariah Indonesia (BSI)', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(33, 'donation_bank_1_code', '451', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(34, 'donation_bank_1_rekening', '718-293-8401', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(35, 'donation_bank_1_holder', 'YAYASAN AGUNG MADANI', 'general', '2026-09-18 15:40:23', '2026-11-01 12:42:35'),
(36, 'donation_bank_2_name', 'Bank Sumsel Babel Syariah', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(37, 'donation_bank_2_code', '120', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(38, 'donation_bank_2_rekening', '801-09-00123', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(39, 'donation_bank_2_holder', 'SEKOLAH ISLAM TERPADU MADANI', 'general', '2026-09-18 15:40:23', '2026-11-01 12:42:35'),
(40, 'donation_confirm_phone', '0852-6990-8696', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(41, 'donation_confirm_text', 'Assalamu\'alaikum Bendahara SIT Madani, saya telah menyalurkan infaq pembangunan.', 'general', '2026-09-18 15:40:23', '2026-11-02 01:15:52'),
(42, 'donation_intro_text', 'Salurkan infaq pembangunan sarana pendidikan, beasiswa tahfidz Qur\'an, dan pengembangan kampus SIT Madani Kayuagung.', 'general', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(43, 'analytics_base_hits', '0', 'general', '2026-09-18 19:24:07', '2026-09-18 19:24:07'),
(44, 'spmb_banner_badge', 'PENERIMAAN SISWA BARU GELOMBANG EXCLUSIVE', 'spmb', '2026-09-19 21:27:08', '2026-11-01 22:58:54'),
(45, 'spmb_banner_title', 'SPMB Gelombang Exclusive & Class Meeting Semester Genap', 'spmb', '2026-09-19 21:27:08', '2026-11-01 22:58:54'),
(46, 'spmb_banner_year', '2027-2028', 'spmb', '2026-09-19 21:27:08', '2026-11-01 22:58:54'),
(47, 'spmb_banner_description', 'Bergabunglah bersama keluarga besar SIT Madani Kayuagung. Memadukan kurikulum terpadu nasional dengan pembiasaan adab Qur\'ani, target hafalan 2 juz mutqin, serta penguasaan bahasa asing & teknologi.', 'spmb', '2026-09-19 21:27:08', '2026-11-01 22:58:54'),
(48, 'spmb_banner_card1_title', 'KUOTA TERBATAS', 'spmb', '2026-09-19 21:27:08', '2026-11-01 22:58:54'),
(49, 'spmb_banner_card1_desc', 'Hanya 24 Siswa', 'spmb', '2026-09-19 21:27:08', '2026-11-01 22:58:54'),
(50, 'spmb_banner_card2_title', 'CASH BACK 1 JUTA', 'spmb', '2026-09-19 21:27:08', '2026-11-01 22:58:54');
INSERT INTO `settings` (`id`, `key`, `value`, `group`, `created_at`, `updated_at`) VALUES
(51, 'spmb_banner_card2_desc', 'Alumni SDS IT Madani', 'spmb', '2026-09-19 21:27:08', '2026-11-01 22:58:54'),
(52, 'spmb_banner_card3_title', 'CLASS MEETING', 'spmb', '2026-09-19 21:27:08', '2026-11-01 22:58:54'),
(53, 'spmb_banner_card3_desc', 'Mulai Rabu, 17 Juni', 'spmb', '2026-09-19 21:27:08', '2026-11-01 22:58:54'),
(54, 'spmb_banner_flyer_image', '/uploads/flyer-spmb-1793573934.png', 'spmb', '2026-09-19 21:27:08', '2026-11-01 22:58:54'),
(55, 'spmb_banner_flyer_label', 'Pengumuman Resmi Sekolah', 'spmb', '2026-09-19 21:27:08', '2026-11-01 22:58:54'),
(56, 'spmb_banner_btn_text', 'Daftar SPMB Online', 'spmb', '2026-09-19 21:27:08', '2026-11-01 22:58:54'),
(57, 'spmb_banner_btn_url', '/spmb', 'spmb', '2026-09-19 21:27:08', '2026-11-01 22:59:04'),
(58, 'spmb_banner_contact_text', 'Narahubung: 0852-6990-8696', 'spmb', '2026-09-19 21:27:08', '2026-11-01 22:58:54'),
(59, 'spmb_banner_contact_phone', '0852-6990-8696', 'spmb', '2026-09-19 21:27:08', '2026-11-01 22:58:54'),
(60, 'ppdb_image_1', '/uploads/madani/fasilitas_ppdb_1_1793574079.png', 'ppdb', '2026-09-19 21:27:08', '2026-11-01 23:01:19'),
(61, 'ppdb_image_2', '/uploads/madani/fasilitas_ppdb_2_1793574079.jpg', 'ppdb', '2026-09-19 21:27:08', '2026-11-01 23:01:19'),
(62, 'ppdb_image_3', '/uploads/madani/fasilitas_ppdb_3_1793574079.jpg', 'ppdb', '2026-09-19 21:27:08', '2026-11-01 23:01:19'),
(63, 'ppdb_form_tracks', 'Jalur First Brive (10%)\r\nJalur Mutasi Kerja (5%)\r\nJalur Tahfidz (5%)\r\nJalur Alumni (25%)\r\nJalur Prestasi (30%)\r\nJalur Reguler (25%)', 'ppdb', '2026-09-19 21:27:09', '2026-11-01 22:58:54'),
(64, 'site_domain', 'smpitmadanipbm.sch.id', 'general', NULL, '2026-09-19 23:06:50'),
(65, 'popup_active', '1', 'popup', NULL, '2026-09-19 23:06:50'),
(66, 'popup_image', '/uploads/popup/spmb2-1793573718-eWs6y.webp', 'popup', NULL, '2026-11-01 22:55:18'),
(67, 'popup_title', 'Telah Dibuka SPMB 3T (TP 2027/2028)', 'popup', NULL, '2026-09-19 23:06:50'),
(68, 'popup_subtitle', 'Sistem Penerimaan Murid Baru SIT Madani Kayuagung (TK • SD • SMP)', 'popup', NULL, '2026-11-01 22:58:05'),
(69, 'popup_link', '/spmb', 'popup', NULL, '2026-11-01 22:58:05'),
(70, 'popup_button_text', 'Info & Syarat SPMB', 'popup', NULL, '2026-09-19 23:06:50'),
(71, 'popup_target', '_self', 'popup', NULL, '2026-09-19 23:06:50'),
(72, 'hero_slides', '[{"active": true, "badge": "SMPS IT Unggulan Kayuagung, Kab. OKI • Terakreditasi B", "title": "Selamat Datang di Website Resmi", "subtitle": "SMPS IT Madani Kayuagung", "image": "/uploads/campus-smpit-madani.webp", "btn_text": "Sambutan Kepala Sekolah", "btn_link": "/sambutan-kepala-sekolah", "btn_target": "_self", "btn2_active": true, "btn2_text": "Info SPMB", "btn2_link": "/ppdb", "btn2_target": "_self"}, {"active": true, "badge": "SMPS IT Unggulan Kayuagung, Kab. OKI • Terakreditasi B", "title": "Membina Generasi Qur\'ani, Cerdas & Berakhlak Mulia", "subtitle": "Sekolah Menengah Pertama Islam Terpadu berakreditasi di Kayuagung, Kab. OKI dengan Kurikulum Terpadu & Tahfidz Al-Qur\'an.", "image": "/uploads/activities-sit-madani.webp", "btn_text": "Profil Singkat Sekolah", "btn_link": "/tentang-kami", "btn_target": "_self", "btn2_active": true, "btn2_text": "Info SPMB", "btn2_link": "/ppdb", "btn2_target": "_self"}, {"active": true, "badge": "SMPS IT Unggulan Kayuagung, Kab. OKI • Terakreditasi B", "title": "SPMB Gelombang Exclusive TP Baru", "subtitle": "Kuota Terbatas Hanya 24 Orang & Promo Cash Back 1 Juta Alumni SDS IT Madani.", "image": "/uploads/tahfidz-sit-madani.webp", "btn_text": "Daftar SPMB Online", "btn_link": "/ppdb", "btn_target": "_self", "btn2_active": true, "btn2_text": "Info SPMB", "btn2_link": "/ppdb", "btn2_target": "_self"}]', 'general', '2026-09-19 23:12:24', '2026-11-01 12:42:35'),
(73, 'hero_slides_yayasan', '[{"active": true, "badge": "YAYASAN AGUNG MADANI KAYUAGUNG • KAB. OKI", "title": "Mewujudkan Generasi Robbani yang Cerdas, Mandiri & Berakhlak Mulia", "subtitle": "Pendidikan Islam Terpadu Satu Atap Berbasis Al-Qur\'an, As-Sunnah, Sains dan Teknologi Modern.", "image": "/uploads/hero-slide-yayasan-1.webp", "btn_text": "Pilih Unit Sekolah", "btn_link": "#unit-sekolah", "btn_target": "_self", "btn2_active": true, "btn2_text": "Daftar SPMB Terpadu", "btn2_link": "/ppdb", "btn2_target": "_self"}, {"active": true, "badge": "TAHFIDZ QUR\'AN MUTQIN & ADAB NABAWI", "title": "Pembinaan Karakter & Hafalan Al-Qur\'an Berkesinambungan", "subtitle": "Mulai dari tahfidz cilik PAUD/TKS IT, target 2 juz mutqin di SDS IT, hingga penguatan karakter & tahfidz bersanad di SMPS IT Madani.", "image": "/uploads/hero-slide-yayasan-2.webp", "btn_text": "Profil Singkat Yayasan", "btn_link": "/yayasan/tentang-kami", "btn_target": "_self", "btn2_active": true, "btn2_text": "Struktur Yayasan", "btn2_link": "/yayasan/struktur", "btn2_target": "_self"}, {"active": true, "badge": "SAINS, TEKNOLOGI & BAHASA INTERNASIONAL", "title": "Integrasi Keunggulan Imtak dan Iptek Masa Depan", "subtitle": "Laboratorium komputer modern, pembekalan literasi digital, bimbingan olimpiade sains, serta pembiasaan Bahasa Arab dan Inggris.", "image": "/uploads/hero-slide-yayasan-3.webp", "btn_text": "Kunjungi SMPS IT Madani", "btn_link": "/smp", "btn_target": "_self", "btn2_active": true, "btn2_text": "Kunjungi SDS IT Madani", "btn2_link": "/sd", "btn2_target": "_self"}]', 'general', '2026-11-01 12:45:09', '2026-11-02 01:06:47'),
(74, 'hero_slides_tk', '[{"active": true, "badge": "TKS IT MADANI KAYUAGUNG • TERAKREDITASI B", "title": "Membentuk Generasi Rabbani yang Kreatif, Cerdas, dan Mandiri", "subtitle": "Pendidikan Anak Usia Dini berbasis fitrah, adab islami, tahfidz juz 30 cilik, dan pembelajaran sentra bermakna.", "image": "/uploads/madani/kegiatan-madani-03.webp", "btn_text": "Profil TKS IT", "btn_link": "/tk/tentang-kami", "btn_target": "_self", "btn2_active": true, "btn2_text": "SPMB TKS IT", "btn2_link": "/tk/ppdb", "btn2_target": "_self"}]', 'hero', '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(75, 'hero_slides_sd', '[{"active": true, "badge": "SDS IT MADANI KAYUAGUNG • TERAKREDITASI B", "title": "Membentuk Generasi Berprestasi, Sholeh, Inovatif & Mandiri", "subtitle": "Sekolah Dasar Islam Terpadu unggulan dengan target tahfidz 2 juz mutqin, kurikulum terpadu JSIT, dan pembinaan akhlak mulia.", "image": "/uploads/madani/kegiatan-madani-06.webp", "btn_text": "Profil SDS IT", "btn_link": "/sd/tentang-kami", "btn_target": "_self", "btn2_active": true, "btn2_text": "SPMB SDS IT", "btn2_link": "/sd/ppdb", "btn2_target": "_self"}]', 'hero', '2026-11-01 13:25:40', '2026-11-01 13:25:40'),
(76, 'ppdb_year', '2027/2028', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(77, 'ppdb_wave', 'Gelombang 1 (Aktif)', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(78, 'ppdb_promo', 'Potongan Biaya Masuk Up to 50% OFF (*S&K berlaku)', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(79, 'ppdb_tagline', 'Mendidik Sepenuh Cinta. Mewujudkan generasi Qur\'ani berkarakter tangguh, cerdas sains, mandiri, dan berwawasan global di bawah naungan JSIT Indonesia.', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(80, 'ppdb_youtube_id', 'ULMekhqxvqU', 'general', '2026-11-01 22:58:54', '2026-11-02 00:47:16'),
(81, 'ppdb_video_title', 'Video Profil & Dokumentasi SIT Madani', 'general', '2026-11-01 22:58:54', '2026-11-02 00:47:16'),
(82, 'ppdb_operational_weekday', 'Senin – Jum\'at: Pukul 08.00 – 15.00 WIB', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(83, 'ppdb_operational_weekend', 'Sabtu: Pukul 08.00 – 12.00 WIB', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(84, 'ppdb_secretariat', 'Kompleks SIT Madani, Jl. SMA Negeri 4, RT 02 LK III, Tanjung Rancing, Kayuagung', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 23:01:19'),
(85, 'ppdb_registration_fee', 'Rp 250.000,-', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(86, 'ppdb_bank_name', 'Bank Syariah Indonesia (BSI)', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(87, 'ppdb_bank_code', '451', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(88, 'ppdb_bank_account', '7011304251', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(89, 'ppdb_bank_holder', 'YL. Fatmawati', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(90, 'ppdb_hotline_phone', '0858-3817-3417', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(91, 'ppdb_hotline_name', 'Admin Hotline SPMB', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 23:01:19'),
(92, 'ppdb_hotline_2_phone', '0858-3817-3417', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(93, 'ppdb_hotline_2_name', 'Kepala Sekolah', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(94, 'ppdb_alur', 'Siapkan berkas foto/scan bukti transfer biaya pendaftaran melalui Bank Syariah Indonesia (BSI) nomor rekening 7011304251 a.n. YL. Fatmawati.\r\nSiapkan berkas foto/scan akta kelahiran dan kartu keluarga.\r\nMengisi formulir PPDB secara online pada website resmi.\r\nKonfirmasi pengisian formulir kepada panitia melalui WhatsApp (0858-3817-3417).\r\nPendaftaran selesai dan berkas diverifikasi tim panitia untuk tahapan tes wawancara dan tahfidz.', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(95, 'ppdb_syarat', 'Mengisi Formulir Pendaftaran online dengan data yang benar dan lengkap.\r\nMelampirkan bukti transfer biaya pendaftaran.\r\nMelampirkan scan/fotokopi Akta Kelahiran dan Kartu Keluarga (KK).\r\nMelampirkan fotokopi rapor SMP/MTs semester 1-5.\r\nPas foto terbaru calon siswa ukuran 3x4 berwarna.', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(96, 'ppdb_jadwal_gelombang', 'Gelombang 1: Oktober s/d Desember (Diskon Biaya Masuk s/d 50%)\r\nGelombang 2: Januari s/d April\r\nGelombang 3: Mei s/d Juli (Khusus sisa kuota)\r\n* Pendaftaran akan ditutup otomatis apabila kuota per kelas telah terpenuhi.', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(97, 'ppdb_biaya', 'Biaya Formulir Pendaftaran: Ditransfer ke rekening BSI sekolah 7011304251.\r\nPaket Seragam Sekolah (4 stel seragam lengkap + atribut dan jilbab/peci).\r\nBiaya Orientasi Siswa (MPLS) & Baitul Maqdis Leadership Camp.\r\nUntuk rincian lengkap uang pangkal dan SPP bulanan, hubungi langsung panitia PPDB.', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(98, 'ppdb_boarding', 'Program Full Day School: Pembelajaran terpadu komprehensif dari pagi hingga sore hari dengan integrasi kurikulum nasional, kurikulum kekhasan JSIT, sholat berjamaah, pembinaan adab Qur\'ani, tahfidz bersanad, makan siang sehat, dan ekstrakurikuler minat & bakat.', 'general', '2026-11-01 22:58:54', '2026-11-02 00:47:16'),
(99, 'ppdb_kelulusan', 'Hasil seleksi diumumkan melalui website resmi dan notifikasi WhatsApp kepada orang tua calon siswa. Calon Siswa yang dinyatakan lulus wajib melakukan daftar ulang sesuai jadwal yang ditentukan panitia.', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(100, 'ppdb_closing_title', 'Terima Kasih Sudah Mendaftar di SIT Madani Kayuagung', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 23:01:19');
INSERT INTO `settings` (`id`, `key`, `value`, `group`, `created_at`, `updated_at`) VALUES
(101, 'ppdb_closing_desc', 'Semoga Ananda kelak bisa menjadi anak yang cerdas, sholeh/ah, berbakti kepada orang tua dan menjadi kebanggaan bagi agama, bangsa dan negara. Aamiin', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(102, 'spmb_banner_card1_color', '#f59e0b', 'spmb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(103, 'spmb_banner_card2_color', '#f59e0b', 'spmb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(104, 'spmb_banner_card3_color', '#f59e0b', 'spmb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(105, 'ppdb_form_status', '1', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(106, 'ppdb_form_closed_message', 'Pendaftaran PPDB online saat ini sedang ditutup sementara atau kuota telah terpenuhi. Silakan hubungi panitia melalui WhatsApp untuk informasi gelombang berikutnya.', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(107, 'ppdb_form_announcement', 'Pastikan nomor WhatsApp yang diisi aktif untuk pengiriman kartu peserta ujian dan informasi jadwal seleksi.', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(108, 'ppdb_form_wa_confirm', '1', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(109, 'ppdb_form_waves', 'Gelombang 1 (Early Bird)\r\nGelombang 2 (Reguler)\r\nGelombang 3 (Prestasi)', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(110, 'ppdb_form_programs', 'Full Day School (Sekolah Terpadu)\nReguler', 'general', '2026-11-01 22:58:54', '2026-11-02 00:47:16'),
(111, 'ppdb_form_require_payment', '1', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(112, 'ppdb_form_require_birth_cert', '1', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(113, 'ppdb_form_nisn_rule', 'optional', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(114, 'ppdb_form_show_achievements', '1', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(115, 'ppdb_form_show_hobbies', '1', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(116, 'ppdb_form_require_parent_income', '1', 'ppdb', '2026-11-01 22:58:54', '2026-11-01 22:58:54'),
(117, 'ppdb_form_schema', '[\n    {\n        "key": "wave",\n        "label": "Gelombang Pendaftaran",\n        "section": "pilihan",\n        "type": "select",\n        "required": false,\n        "enabled": true,\n        "options": [\n            "Gelombang 1 (Early Bird)",\n            "Gelombang 2 (Reguler)",\n            "Gelombang 3 (Prestasi)"\n        ],\n        "placeholder": "Pilih Gelombang...",\n        "is_system": true\n    },\n    {\n        "key": "track",\n        "label": "Jalur Pendaftaran",\n        "section": "pilihan",\n        "type": "select",\n        "required": false,\n        "enabled": true,\n        "options": [\n            "Jalur Reguler / Tes Mandiri",\n            "Jalur Prestasi Akademik & Non-Akademik",\n            "Jalur Hafizh Al-Qur\'an (Tahfidz)",\n            "Jalur Alumni SIT Madani",\n            "Jalur Beasiswa / Afirmasi"\n        ],\n        "placeholder": "Pilih Jalur Masuk...",\n        "is_system": true\n    },\n    {\n        "key": "program_type",\n        "label": "Program Pilihan",\n        "section": "pilihan",\n        "type": "select",\n        "required": false,\n        "enabled": true,\n        "options": [\n            "Full Day School (Sekolah Terpadu)",\n            "Reguler"\n        ],\n        "placeholder": "Pilih Program Belajar...",\n        "is_system": true\n    },\n    {\n        "key": "full_name",\n        "label": "Nama Lengkap Siswa",\n        "section": "siswa",\n        "type": "text",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Masukkan nama lengkap sesuai akta...",\n        "is_system": true\n    },\n    {\n        "key": "birth_place",\n        "label": "Tempat Lahir Siswa",\n        "section": "siswa",\n        "type": "text",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Kota kelahiran...",\n        "is_system": true\n    },\n    {\n        "key": "birth_date",\n        "label": "Tanggal Lahir Siswa",\n        "section": "siswa",\n        "type": "date",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "",\n        "is_system": true\n    },\n    {\n        "key": "gender",\n        "label": "Jenis Kelamin",\n        "section": "siswa",\n        "type": "select",\n        "required": true,\n        "enabled": true,\n        "options": [\n            "Laki-laki",\n            "Perempuan"\n        ],\n        "placeholder": "Pilih Jenis Kelamin...",\n        "is_system": true\n    },\n    {\n        "key": "address",\n        "label": "Alamat Tempat Tinggal",\n        "section": "siswa",\n        "type": "textarea",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Jalan, RT/RW, Kelurahan, Kecamatan, Kota/Kabupaten...",\n        "is_system": true\n    },\n    {\n        "key": "living_with",\n        "label": "Tinggal Bersama",\n        "section": "siswa",\n        "type": "select",\n        "required": true,\n        "enabled": true,\n        "options": [\n            "Orang Tua",\n            "Wali",\n            "Keluarga / Kerabat",\n            "Lainnya"\n        ],\n        "placeholder": "Pilih Tempat Tinggal...",\n        "is_system": true\n    },\n    {\n        "key": "child_order",\n        "label": "Anak ke -",\n        "section": "siswa",\n        "type": "number",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "1",\n        "is_system": true\n    },\n    {\n        "key": "siblings_count",\n        "label": "Dari Jumlah Saudara",\n        "section": "siswa",\n        "type": "number",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "1",\n        "is_system": true\n    },\n    {\n        "key": "previous_school",\n        "label": "Asal Sekolah / Lembaga Sebelumnya (PAUD/TK/SD/MI/dll)",\n        "section": "siswa",\n        "type": "text",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Nama sekolah asal...",\n        "is_system": true\n    },\n    {\n        "key": "nisn",\n        "label": "Nomor Induk Siswa Nasional (NISN)",\n        "section": "siswa",\n        "type": "text",\n        "required": false,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Nomor NISN 10 digit (jika ada)...",\n        "is_system": true\n    },\n    {\n        "key": "hobby",\n        "label": "Hobi Calon Siswa",\n        "section": "siswa",\n        "type": "text",\n        "required": false,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Membaca, Futsal, Robotika, dll...",\n        "is_system": true\n    },\n    {\n        "key": "favorite_subject",\n        "label": "Bidang Studi Paling Disukai",\n        "section": "siswa",\n        "type": "text",\n        "required": false,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Matematika, IPA, PAI, Bahasa Arab, dll...",\n        "is_system": true\n    },\n    {\n        "key": "ambition",\n        "label": "Cita-cita",\n        "section": "siswa",\n        "type": "text",\n        "required": false,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Dokter, Ulama, Dosen, Pengusaha, dll...",\n        "is_system": true\n    },\n    {\n        "key": "achievements",\n        "label": "Prestasi yang Pernah Diraih",\n        "section": "siswa",\n        "type": "textarea",\n        "required": false,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Sebutkan prestasi akademik, tahfidz, olahraga atau lomba yang pernah diraih...",\n        "is_system": true\n    },\n    {\n        "key": "phone",\n        "label": "Nomor HP / WhatsApp Siswa",\n        "section": "siswa",\n        "type": "tel",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "08xxxxxxxxxx",\n        "is_system": true\n    },\n    {\n        "key": "father_name",\n        "label": "Nama Lengkap Ayah / Wali",\n        "section": "ayah",\n        "type": "text",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Nama lengkap ayah/wali...",\n        "is_system": true\n    },\n    {\n        "key": "father_birth_place",\n        "label": "Tempat Lahir Ayah",\n        "section": "ayah",\n        "type": "text",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Kota kelahiran ayah...",\n        "is_system": true\n    },\n    {\n        "key": "father_birth_date",\n        "label": "Tanggal Lahir Ayah",\n        "section": "ayah",\n        "type": "date",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "",\n        "is_system": true\n    },\n    {\n        "key": "father_address",\n        "label": "Alamat Ayah / Wali",\n        "section": "ayah",\n        "type": "textarea",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Alamat domisili ayah/wali...",\n        "is_system": true\n    },\n    {\n        "key": "father_education",\n        "label": "Pendidikan Terakhir Ayah",\n        "section": "ayah",\n        "type": "select",\n        "required": true,\n        "enabled": true,\n        "options": [\n            "Tidak Sekolah",\n            "SD / Sederajat",\n            "SMP / Sederajat",\n            "SMA / SMK / MA",\n            "Diploma (D1/D2/D3)",\n            "Sarjana (S1)",\n            "Magister (S2)",\n            "Doktor (S3)"\n        ],\n        "placeholder": "Pilih Pendidikan...",\n        "is_system": true\n    },\n    {\n        "key": "father_job",\n        "label": "Pekerjaan Ayah",\n        "section": "ayah",\n        "type": "select",\n        "required": true,\n        "enabled": true,\n        "options": [\n            "PNS / Polisi / TNI",\n            "Wiraswasta / Pengusaha",\n            "Karyawan Swasta / BUMN",\n            "Guru / Dosen",\n            "Petani / Pekebun",\n            "Buruh / Tenaga Harian",\n            "Pensiunan",\n            "Lainnya"\n        ],\n        "placeholder": "Pilih Pekerjaan...",\n        "is_system": true\n    },\n    {\n        "key": "father_income",\n        "label": "Penghasilan Ayah per Bulan",\n        "section": "ayah",\n        "type": "select",\n        "required": true,\n        "enabled": true,\n        "options": [\n            "Tidak Berpenghasilan",\n            "< Rp 1.000.000",\n            "Rp 1.000.000 - Rp 3.000.000",\n            "Rp 3.000.000 - Rp 5.000.000",\n            "Rp 5.000.000 - Rp 10.000.000",\n            "> Rp 10.000.000"\n        ],\n        "placeholder": "Pilih Kisaran Penghasilan...",\n        "is_system": true\n    },\n    {\n        "key": "father_phone",\n        "label": "Nomor HP / WhatsApp Ayah",\n        "section": "ayah",\n        "type": "tel",\n        "required": false,\n        "enabled": true,\n        "options": [],\n        "placeholder": "08xxxxxxxxxx",\n        "is_system": true\n    },\n    {\n        "key": "mother_name",\n        "label": "Nama Lengkap Ibu / Wali",\n        "section": "ibu",\n        "type": "text",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Nama lengkap ibu/wali...",\n        "is_system": true\n    },\n    {\n        "key": "mother_birth_place",\n        "label": "Tempat Lahir Ibu",\n        "section": "ibu",\n        "type": "text",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Kota kelahiran ibu...",\n        "is_system": true\n    },\n    {\n        "key": "mother_birth_date",\n        "label": "Tanggal Lahir Ibu",\n        "section": "ibu",\n        "type": "date",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "",\n        "is_system": true\n    },\n    {\n        "key": "mother_address",\n        "label": "Alamat Ibu / Wali",\n        "section": "ibu",\n        "type": "textarea",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Alamat domisili ibu/wali...",\n        "is_system": true\n    },\n    {\n        "key": "mother_education",\n        "label": "Pendidikan Terakhir Ibu",\n        "section": "ibu",\n        "type": "select",\n        "required": true,\n        "enabled": true,\n        "options": [\n            "Tidak Sekolah",\n            "SD / Sederajat",\n            "SMP / Sederajat",\n            "SMA / SMK / MA",\n            "Diploma (D1/D2/D3)",\n            "Sarjana (S1)",\n            "Magister (S2)",\n            "Doktor (S3)"\n        ],\n        "placeholder": "Pilih Pendidikan...",\n        "is_system": true\n    },\n    {\n        "key": "mother_job",\n        "label": "Pekerjaan Ibu",\n        "section": "ibu",\n        "type": "select",\n        "required": true,\n        "enabled": true,\n        "options": [\n            "Ibu Rumah Tangga",\n            "PNS / Polisi / TNI",\n            "Wiraswasta / Pengusaha",\n            "Karyawan Swasta / BUMN",\n            "Guru / Dosen",\n            "Petani / Pekebun",\n            "Lainnya"\n        ],\n        "placeholder": "Pilih Pekerjaan...",\n        "is_system": true\n    },\n    {\n        "key": "mother_income",\n        "label": "Penghasilan Ibu per Bulan",\n        "section": "ibu",\n        "type": "select",\n        "required": true,\n        "enabled": true,\n        "options": [\n            "Tidak Berpenghasilan",\n            "< Rp 1.000.000",\n            "Rp 1.000.000 - Rp 3.000.000",\n            "Rp 3.000.000 - Rp 5.000.000",\n            "Rp 5.000.000 - Rp 10.000.000",\n            "> Rp 10.000.000"\n        ],\n        "placeholder": "Pilih Kisaran Penghasilan...",\n        "is_system": true\n    },\n    {\n        "key": "mother_phone",\n        "label": "Nomor HP / WhatsApp Ibu",\n        "section": "ibu",\n        "type": "tel",\n        "required": false,\n        "enabled": true,\n        "options": [],\n        "placeholder": "08xxxxxxxxxx",\n        "is_system": true\n    },\n    {\n        "key": "birth_certificate",\n        "label": "Scan Akta Kelahiran / Kartu Keluarga",\n        "section": "berkas",\n        "type": "file",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Pilih file PDF / Foto (Maks 5 MB)",\n        "is_system": true\n    },\n    {\n        "key": "payment_proof",\n        "label": "Scan / Foto Bukti Pembayaran Pendaftaran",\n        "section": "berkas",\n        "type": "file",\n        "required": true,\n        "enabled": true,\n        "options": [],\n        "placeholder": "Pilih file bukti transfer (Maks 5 MB)",\n        "is_system": true\n    }\n]', 'general', '2026-11-01 22:58:54', '2026-11-02 00:47:16'),
(118, 'ppdb_video_desc', 'Saksikan profil resmi, haflah akbar, dan aktivitas belajar siswa SIT Madani Kayuagung.', 'general', '2026-11-02 00:47:16', '2026-11-02 00:47:16'),
(119, 'twitter_card', 'summary_large_image', 'general', '2026-11-02 01:15:52', '2026-11-02 01:15:52'),
(120, 'google_site_verification', '', 'general', '2026-11-02 01:15:52', '2026-11-02 01:15:52'),
(121, 'social_twitter', 'https://x.com/sitmadani', 'general', '2026-11-02 01:15:52', '2026-11-02 01:15:52'),
(122, 'analytics_enabled', '1', 'general', '2026-11-02 01:15:52', '2026-11-02 01:15:52'),
(123, 'analytics_ignore_admin', '1', 'general', '2026-11-02 01:15:52', '2026-11-02 01:15:52'),
(124, 'analytics_ip_lookup', '1', 'general', '2026-11-02 01:15:52', '2026-11-02 01:15:52');

-- --------------------------------------------------------

-- Table structure for table `tags`
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `tags`
INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'PPDB', 'ppdb', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(2, 'Tahfidz', 'tahfidz', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(3, 'Prestasi', 'prestasi', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(4, 'Juara', 'juara', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(5, 'JSIT', 'jsit', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(6, 'Outing Class', 'outing-class', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(7, 'IU Safar', 'safar', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(8, 'IU Berkhidmat', 'berkhidmat', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(9, 'Ekskul', 'ekskul', '2026-09-18 15:40:23', '2026-09-18 15:40:23'),
(10, 'Kayuagung', 'kayuagung', '2026-09-18 15:40:23', '2026-09-18 15:40:23');

-- --------------------------------------------------------

-- Table structure for table `testimonials`
DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE `testimonials` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `testimonials`
INSERT INTO `testimonials` (`id`, `name`, `profession`, `content`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'H. Bambang Irawan, S.E', 'Wali Murid Kelas VIII', 'Alhamdulillah, semenjak bersekolah di SIT Madani Kayuagung, perkembangan ibadah dan akhlak anak saya meningkat drastis. Sholat 5 waktu tertib dan hafalannya terus bertambah mutqin.', '/uploads/testimoni/wali-siswa-1.webp', 'publish', '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(2, 'Dra. Hj. Nuraini', 'Wali Murid Kelas IX', 'Sekolah Islam Terpadu terbaik di Kayuagung. Para ustaz dan ustazah membimbing anak-anak dengan penuh kasih sayang. Program bilingual dan pembiasaan adabnya sangat terasa manfaatnya.', '/uploads/testimoni/wali-siswa-2.webp', 'publish', '2026-09-19 21:27:08', '2026-09-19 21:27:08'),
(3, 'Fathir Rahman', 'Alumni SMP IT Madani', 'Tiga tahun belajar di SIT Madani memberikan fondasi yang sangat kokoh bagi saya, baik dalam hafalan Qur\'an, kemampuan sains, maupun kepemimpinan di jenjang pendidikan berikutnya.', '/uploads/testimoni/alumni-1.webp', 'publish', '2026-09-19 21:27:08', '2026-09-19 21:27:08');

-- --------------------------------------------------------

-- Table structure for table `users`
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'admin',
  `avatar` varchar(255) DEFAULT NULL,
  `unit` varchar(30) DEFAULT 'yayasan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `users`
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `avatar`, `unit`) VALUES
(1, 'Administrator Yayasan Agung Madani', 'admin@sitmadani.sch.id', NULL, '$2y$12$uzYsfTuC47jtlK09/7m7Z.ncwl1ePDJddax5EqfqDp2gAWpeWgDCe', 'Bo6X9N2SjDnGyEYl5zi1VMGxZEUXFHFds91Waaf8RQANj5x6NfbV7qcnqaXd', '2026-09-18 15:40:23', '2026-11-01 12:45:09', 'super_admin', NULL, 'yayasan'),
(2, 'Admin TKS IT Madani', 'admin_tk@sitmadani.sch.id', NULL, '$2y$12$TIO43w0k2gTmpf1QUQ9PweU/hrxR9mMBWvDnTCds.ZW9ws4lP0MAq', NULL, '2026-11-01 12:45:09', '2026-11-01 12:45:09', 'admin', NULL, 'tk'),
(3, 'Admin SDS IT Madani', 'admin_sd@sitmadani.sch.id', NULL, '$2y$12$17EfPSH5Ec8IU0ZyVQLbnOzZai.SYS/LE4xq7ifhR81tHKYEPmB4S', NULL, '2026-11-01 12:45:09', '2026-11-01 12:45:09', 'admin', NULL, 'sd'),
(4, 'Admin SMPS IT Madani', 'admin_smp@sitmadani.sch.id', NULL, '$2y$12$KftqbAKJemypjVaY4ejnIOXVsj/pNOR9PtD2ZWt38SNFEAYWCHDOy', NULL, '2026-11-01 12:45:09', '2026-11-01 12:45:09', 'admin', NULL, 'smp');

-- --------------------------------------------------------

-- Table structure for table `videos`
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `youtube_url` varchar(255) NOT NULL,
  `youtube_id` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `videos`
INSERT INTO `videos` (`id`, `title`, `slug`, `youtube_url`, `youtube_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Investasi Akhirat: Tabung Rumahmu di Surga Mulai Hari Ini!', 'investasi-akhirat-tabung-rumahmu-di-surga-mulai-hari-ini', 'https://www.youtube.com/watch?v=eE1lOwFuaZs', 'eE1lOwFuaZs', 'Dokumentasi resmi kegiatan santri Sekolah Islam Terpadu Madani Kayuagung (Investasi Akhirat: Tabung Rumahmu di Surga Mulai Hari Ini!). Sumber: Channel YouTube Resmi SIT Madani Kayuagung.', '2026-11-02 06:34:10', '2026-11-02 06:34:10'),
(2, 'PENTAS SENI & BAGI RAPOR | TKS IT MADANI KAYUAGUNG', 'pentas-seni-bagi-rapor-tks-it-madani-kayuagung', 'https://www.youtube.com/watch?v=eKSlUBbtl-g', 'eKSlUBbtl-g', 'Dokumentasi resmi kegiatan santri Sekolah Islam Terpadu Madani Kayuagung (PENTAS SENI & BAGI RAPOR | TKS IT MADANI KAYUAGUNG). Sumber: Channel YouTube Resmi SIT Madani Kayuagung.', '2026-11-02 06:34:10', '2026-11-02 06:34:10'),
(3, 'HAFLAH AKHIRUSSANAH WA KHOTMIL QUR\'AN | 2025/2026 | SD & SMP IT MADANI KAYUAGUNG', 'haflah-akhirussanah-wa-khotmil-qur-an-2025-2026-sd-smp-it-madani-kayuagung', 'https://www.youtube.com/watch?v=ULMekhqxvqU', 'ULMekhqxvqU', 'Dokumentasi resmi kegiatan santri Sekolah Islam Terpadu Madani Kayuagung (HAFLAH AKHIRUSSANAH WA KHOTMIL QUR\'AN | 2025/2026 | SD & SMP IT MADANI KAYUAGUNG). Sumber: Channel YouTube Resmi SIT Madani Kayuagung.', '2026-11-02 06:34:10', '2026-11-02 06:34:10'),
(4, 'PERKENALAN USTADZ/BUNDA SDIT MADANI KAYUAGUNG TH AJARAN 2024/2025', 'perkenalan-ustadz-bunda-sdit-madani-kayuagung-th-ajaran-2024-2025', 'https://www.youtube.com/watch?v=vgzCDo8K6y0', 'vgzCDo8K6y0', 'Dokumentasi resmi kegiatan santri Sekolah Islam Terpadu Madani Kayuagung (PERKENALAN USTADZ/BUNDA SDIT MADANI KAYUAGUNG TH AJARAN 2024/2025). Sumber: Channel YouTube Resmi SIT Madani Kayuagung.', '2026-11-02 06:34:10', '2026-11-02 06:34:10'),
(5, 'KUNJUNGAN EDUKATIF SDIT MADANI KAYUAGUNG 2023', 'kunjungan-edukatif-sdit-madani-kayuagung-2023', 'https://www.youtube.com/watch?v=cl7UWKcY-C0', 'cl7UWKcY-C0', 'Dokumentasi resmi kegiatan santri Sekolah Islam Terpadu Madani Kayuagung (KUNJUNGAN EDUKATIF SDIT MADANI KAYUAGUNG 2023). Sumber: Channel YouTube Resmi SIT Madani Kayuagung.', '2026-11-02 06:34:10', '2026-11-02 06:34:10'),
(6, 'Market Day SDIT Madani Kayuagung', 'market-day-sdit-madani-kayuagung', 'https://www.youtube.com/watch?v=2nOBI1tzLRY', '2nOBI1tzLRY', 'Dokumentasi resmi kegiatan santri Sekolah Islam Terpadu Madani Kayuagung (Market Day SDIT Madani Kayuagung). Sumber: Channel YouTube Resmi SIT Madani Kayuagung.', '2026-11-02 06:34:10', '2026-11-02 06:34:10'),
(7, 'Highlight HAFLAH AKHIRUSSANAH SIT MADANI KAYUAGUNG Tahun 2023', 'highlight-haflah-akhirussanah-sit-madani-kayuagung-tahun-2023', 'https://www.youtube.com/watch?v=mWwRqfLnnxc', 'mWwRqfLnnxc', 'Dokumentasi resmi kegiatan santri Sekolah Islam Terpadu Madani Kayuagung (Highlight HAFLAH AKHIRUSSANAH SIT MADANI KAYUAGUNG Tahun 2023). Sumber: Channel YouTube Resmi SIT Madani Kayuagung.', '2026-11-02 06:34:10', '2026-11-02 06:34:10'),
(8, 'Melestarikan Permainan Tradisional', 'melestarikan-permainan-tradisional', 'https://www.youtube.com/watch?v=NoV84g1kGpM', 'NoV84g1kGpM', 'Dokumentasi resmi kegiatan santri Sekolah Islam Terpadu Madani Kayuagung (Melestarikan Permainan Tradisional). Sumber: Channel YouTube Resmi SIT Madani Kayuagung.', '2026-11-02 06:34:10', '2026-11-02 06:34:10'),
(9, 'VIDEO PERKENALAN USTADZ/BUNDA SDIT MADANI KAYUAGUNG TH 2023/2024', 'video-perkenalan-ustadz-bunda-sdit-madani-kayuagung-th-2023-2024', 'https://www.youtube.com/watch?v=_LH6ESCpSjM', '_LH6ESCpSjM', 'Dokumentasi resmi kegiatan santri Sekolah Islam Terpadu Madani Kayuagung (VIDEO PERKENALAN USTADZ/BUNDA SDIT MADANI KAYUAGUNG TH 2023/2024). Sumber: Channel YouTube Resmi SIT Madani Kayuagung.', '2026-11-02 06:34:10', '2026-11-02 06:34:10'),
(10, 'Yuk Baca Surah Al-\'Alaq Bersama Ayuk Azwa', 'yuk-baca-surah-al-alaq-bersama-ayuk-azwa', 'https://www.youtube.com/watch?v=rnTrcuWHaSM', 'rnTrcuWHaSM', 'Dokumentasi resmi kegiatan santri Sekolah Islam Terpadu Madani Kayuagung (Yuk Baca Surah Al-\'Alaq Bersama Ayuk Azwa). Sumber: Channel YouTube Resmi SIT Madani Kayuagung.', '2026-11-02 06:34:10', '2026-11-02 06:34:10'),
(11, 'P5 SDS IT Madani Kayuagung', 'p5-sds-it-madani-kayuagung', 'https://www.youtube.com/watch?v=lK8mPQD6Te4', 'lK8mPQD6Te4', 'Dokumentasi resmi kegiatan santri Sekolah Islam Terpadu Madani Kayuagung (P5 SDS IT Madani Kayuagung). Sumber: Channel YouTube Resmi SIT Madani Kayuagung.', '2026-11-02 06:34:10', '2026-11-02 06:34:10'),
(12, 'SELAMAT HARI RAYA IDUL FITRI 1444 H', 'selamat-hari-raya-idul-fitri-1444-h', 'https://www.youtube.com/watch?v=jusQW6MDoj4', 'jusQW6MDoj4', 'Dokumentasi resmi kegiatan santri Sekolah Islam Terpadu Madani Kayuagung (SELAMAT HARI RAYA IDUL FITRI 1444 H). Sumber: Channel YouTube Resmi SIT Madani Kayuagung.', '2026-11-02 06:34:10', '2026-11-02 06:34:10');

-- --------------------------------------------------------

-- Table structure for table `visitor_logs`
DROP TABLE IF EXISTS `visitor_logs`;
CREATE TABLE `visitor_logs` (

  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `session_id` varchar(80) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `device_type` varchar(30) NOT NULL DEFAULT 'Desktop',
  `browser` varchar(50) DEFAULT NULL,
  `platform` varchar(50) DEFAULT NULL,
  `referer` text DEFAULT NULL,
  `referer_source` varchar(50) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `country_code` varchar(10) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `is_bot` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table `visitor_logs`
INSERT INTO `visitor_logs` (`id`, `ip_address`, `session_id`, `user_agent`, `device_type`, `browser`, `platform`, `referer`, `referer_source`, `url`, `path`, `page_title`, `country`, `country_code`, `city`, `region`, `is_bot`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', 'zDwn6McNH0JPRiOJbNHbuTsaJKusq2ji6cGzhnfv', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test', '/', 'Beranda', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-01 23:31:11', '2026-11-01 23:31:11'),
(2, '127.0.0.1', 'zDwn6McNH0JPRiOJbNHbuTsaJKusq2ji6cGzhnfv', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', 'http://sitmadani.test/', 'Direct / Langsung', 'http://sitmadani.test/tk', '/tk', 'Tk', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-01 23:31:13', '2026-11-01 23:31:13'),
(3, '127.0.0.1', 'zDwn6McNH0JPRiOJbNHbuTsaJKusq2ji6cGzhnfv', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', 'http://sitmadani.test/tk', 'Direct / Langsung', 'http://sitmadani.test/sd', '/sd', 'Sd', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-01 23:31:14', '2026-11-01 23:31:14'),
(4, '127.0.0.1', 'zDwn6McNH0JPRiOJbNHbuTsaJKusq2ji6cGzhnfv', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', 'http://sitmadani.test/sd', 'Direct / Langsung', 'http://sitmadani.test/smp', '/smp', 'Smp', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-01 23:31:14', '2026-11-01 23:31:14'),
(5, '127.0.0.1', 'zDwn6McNH0JPRiOJbNHbuTsaJKusq2ji6cGzhnfv', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', 'http://sitmadani.test/smp', 'Direct / Langsung', 'http://sitmadani.test', '/', 'Beranda', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-01 23:31:15', '2026-11-01 23:31:15'),
(6, '127.0.0.1', 'zDwn6McNH0JPRiOJbNHbuTsaJKusq2ji6cGzhnfv', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', 'http://sitmadani.test/', 'Direct / Langsung', 'http://sitmadani.test/ppdb', '/ppdb', 'Ppdb', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-01 23:31:18', '2026-11-01 23:31:18'),
(7, '127.0.0.1', 'qyj9iCujBJ6pCrGDKW6wg5ciPETRegpVkkwbx3QJ', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/tk/ppdb', '/tk/ppdb', 'Tk/Ppdb', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 00:02:26', '2026-11-02 00:02:26'),
(8, '127.0.0.1', 'uPf1ODUumz0gaf2w6aqwFHzkUfajqlON8Au2MwwJ', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/unit/sd', '/unit/sd', 'Unit/Sd', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 00:03:27', '2026-11-02 00:03:27'),
(9, '127.0.0.1', 'VnPHUBmOUzBUPrChnCWSMo2Nx5OVMEFWSTjKZ5c7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/unit/tk', '/unit/tk', 'Unit/Tk', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 00:04:27', '2026-11-02 00:04:27'),
(10, '127.0.0.1', '84lMV9z4vTN4cxYKwoQAjReSAqQMjNIlVbJ8kGp6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/smp/ppdb', '/smp/ppdb', 'Smp/Ppdb', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 00:07:29', '2026-11-02 00:07:29'),
(11, '127.0.0.1', '5iBNYUKABrfUYdOJHBeCoUQhjkS6Mx7E10JRHSpc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/sd/ppdb', '/sd/ppdb', 'Sd/Ppdb', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 00:17:36', '2026-11-02 00:17:36'),
(12, '127.0.0.1', 'IXbWxdqbATIlr5GQ3W20V3CDUSHkKSyBCR0MVDDh', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/izin-sekolah', '/izin-sekolah', 'Izin Sekolah', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 00:29:43', '2026-11-02 00:29:43'),
(13, '127.0.0.1', 'aMWIjHxebV9zqXwr1K1KcrkhaNHkRCA5KHucHv8S', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/layanan-terpadu', '/layanan-terpadu', 'Layanan Terpadu', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 00:29:43', '2026-11-02 00:29:43'),
(14, '127.0.0.1', 'WzT1Jg36tDGbafJHkze4oMWoDHSEVODP1g6Ut1ud', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/hymne-mars', '/hymne-mars', 'Hymne & Mars JSIT', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 00:39:48', '2026-11-02 00:39:48'),
(15, '127.0.0.1', 'YIrkLP1sluBiBtn93KtSXReVOVhvNydEZNOfsh6X', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/e-book', '/e-book', 'Download Modul & E-Book', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 00:39:48', '2026-11-02 00:39:48'),
(16, '127.0.0.1', 'w4Km8xJcCVpGAINSKJWsV3cXx2uruMAsPX5LoICn', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/logo', '/logo', 'Logo', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 00:40:48', '2026-11-02 00:40:48'),
(17, '127.0.0.1', '2TyMrAPEfgahrugerBKhyepVyMReJ75g3eAsxEIk', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/ppdb', '/ppdb', 'Ppdb', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 00:41:48', '2026-11-02 00:41:48'),
(18, '127.0.0.1', 'wGAsSffBfGGJNfnEFUcJFCthjk8wAP6vHls2Ch6C', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/sambutan-kepala-sekolah?unit=yayasan', '/sambutan-kepala-sekolah', 'Sambutan Kepala Sekolah', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 01:36:13', '2026-11-02 01:36:13'),
(19, '127.0.0.1', 'ZRdkrRHKKoPPe8KaByK2NYK96HE3I1JblwJ9Mz8F', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/smp/sambutan-kepala-sekolah', '/smp/sambutan-kepala-sekolah', 'Smp/Sambutan Kepala Sekolah', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 01:36:13', '2026-11-02 01:36:13'),
(20, '127.0.0.1', 'Avug2E64nTo33WmzWrOVlaIgqxDM9Mk4Q68SxA3t', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/hubungi', '/hubungi', 'Konsultasi & Informasi SPMB', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 01:40:15', '2026-11-02 01:40:15'),
(21, '127.0.0.1', 'XB1tlrjixlC9nzMdwZlFX48kNBBS1g3sud70evIE', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/layanan-terpadu', '/layanan-terpadu', 'Layanan Terpadu', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 01:41:16', '2026-11-02 01:41:16'),
(22, '127.0.0.1', 'FHkjwv80amgduhwRXBVakZVBrN8s1qQ1K4IWissG', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/testimonial', '/testimonial', 'Testimonial', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 01:41:16', '2026-11-02 01:41:16'),
(23, '127.0.0.1', 'wI6X7FB1Ka1WoLhJhCI63dEwHJd9WZBoxvtiWmx0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/tk/fasilitas', '/tk/fasilitas', 'Tk/Fasilitas', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 01:43:17', '2026-11-02 01:43:17'),
(24, '127.0.0.1', 'FgMdM2XIJKXWWbmyxpAdRrbYxTerBJFRDnef36MS', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/tk/spmb', '/tk/spmb', 'Tk/Spmb', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 01:44:17', '2026-11-02 01:44:17'),
(25, '127.0.0.1', '7BtdKfw5ZgohH69cPRodmHOXLGGHOIy53Fg0rrY9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows 10/11', '', 'Direct / Langsung', 'http://sitmadani.test/tk', '/tk', 'Tk', 'Indonesia', 'ID', 'Lokal / Server', 'Sumatera Selatan', 0, '2026-11-02 01:44:17', '2026-11-02 01:44:17');

-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_logs_user_id_foreign` (`user_id`),
  ADD KEY `activity_logs_action_index` (`action`),
  ADD KEY `activity_logs_status_index` (`status`),
  ADD KEY `activity_logs_created_at_index` (`created_at`);

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agendas_slug_unique` (`slug`);

--
-- Indexes for table `anggota_dewans`
--
ALTER TABLE `anggota_dewans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `anggota_dewans_slug_unique` (`slug`);

--
-- Indexes for table `bidangs`
--
ALTER TABLE `bidangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bidangs_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dpcs`
--
ALTER TABLE `dpcs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dpcs_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  ADD KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`),
  ADD KEY `pages_slug_index` (`slug`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pengumumen`
--
ALTER TABLE `pengumumen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pengumumen_slug_unique` (`slug`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_author_id_foreign` (`author_id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`post_id`,`category_id`),
  ADD KEY `post_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`post_id`,`tag_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `ppdb_registrations`
--
ALTER TABLE `ppdb_registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ppdb_registrations_registration_number_unique` (`registration_number`);

--
-- Indexes for table `ppdb_tracks`
--
ALTER TABLE `ppdb_tracks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ppdb_tracks_slug_unique` (`slug`);

--
-- Indexes for table `quick_menus`
--
ALTER TABLE `quick_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_submissions`
--
ALTER TABLE `service_submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_submissions_service_type_index` (`service_type`),
  ADD KEY `service_submissions_status_index` (`status`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `videos_slug_unique` (`slug`);

--
-- Indexes for table `visitor_logs`
--
ALTER TABLE `visitor_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visitor_logs_created_at_is_bot_index` (`created_at`,`is_bot`),
  ADD KEY `visitor_logs_ip_address_index` (`ip_address`),
  ADD KEY `visitor_logs_session_id_index` (`session_id`),
  ADD KEY `visitor_logs_device_type_index` (`device_type`),
  ADD KEY `visitor_logs_referer_source_index` (`referer_source`),
  ADD KEY `visitor_logs_path_index` (`path`),
  ADD KEY `visitor_logs_country_index` (`country`),
  ADD KEY `visitor_logs_city_index` (`city`),
  ADD KEY `visitor_logs_is_bot_index` (`is_bot`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `anggota_dewans`
--
ALTER TABLE `anggota_dewans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bidangs`
--
ALTER TABLE `bidangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dpcs`
--
ALTER TABLE `dpcs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengumumen`
--
ALTER TABLE `pengumumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppdb_registrations`
--
ALTER TABLE `ppdb_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppdb_tracks`
--
ALTER TABLE `ppdb_tracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quick_menus`
--
ALTER TABLE `quick_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_submissions`
--
ALTER TABLE `service_submissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor_logs`
--
ALTER TABLE `visitor_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `post_category`
--
ALTER TABLE `post_category`
  ADD CONSTRAINT `post_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_category_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

SET FOREIGN_KEY_CHECKS = 1;
COMMIT;