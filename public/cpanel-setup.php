<?php

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\DB;

/**
 * ==============================================================================
 * CPANEL POST-DEPLOYMENT HELPER - SIT MADANI
 * ==============================================================================
 * File ini digunakan untuk membantu setup cPanel tanpa perlu akses terminal SSH.
 * Akses URL: https://sitmadani.sch.id/cpanel-setup.php?key=sitmadani2026
 * Hapus file ini setelah setup selesai untuk keamanan!
 * ==============================================================================
 */
define('SECRET_KEY', 'sitmadani2026');

$key = $_GET['key'] ?? ($_POST['key'] ?? '');
if ($key !== SECRET_KEY) {
    http_response_code(403);
    exit('<!DOCTYPE html><html><head><title>403 Akses Ditolak</title><style>body{font-family:sans-serif;padding:40px;background:#f8fafc;color:#1e293b}div{max-width:500px;margin:auto;background:white;padding:30px;border-radius:12px;box-shadow:0 4px 6px -1px rgb(0 0 0/0.1)}input{width:100%;padding:10px;margin:10px 0;box-sizing:border-box}button{background:#4f46e5;color:white;border:none;padding:10px 20px;border-radius:6px;cursor:pointer}</style></head><body><div><h2>Masukkan Kunci Keamanan</h2><form method="GET"><input type="password" name="key" placeholder="Kunci Keamanan..." autofocus required><button type="submit">Buka Helper</button></form></div></body></html>');
}

$action = $_GET['action'] ?? '';
$output = [];

$baseDir = dirname(__DIR__);

// Helper execute artisan
function runArtisan($command, $baseDir)
{
    ob_start();
    try {
        require_once $baseDir.'/vendor/autoload.php';
        $app = require_once $baseDir.'/bootstrap/app.php';
        $kernel = $app->make(Kernel::class);
        $status = $kernel->call($command);
        $res = $kernel->output();
        ob_end_clean();

        return $res ?: "Command '$command' executed successfully (exit code $status).";
    } catch (Throwable $e) {
        ob_end_clean();

        return 'ERROR: '.$e->getMessage();
    }
}

if ($action === 'storage_link') {
    $target = $baseDir.'/storage/app/public';
    $shortcut = $baseDir.'/public/storage';
    if (! file_exists($shortcut)) {
        if (@symlink($target, $shortcut)) {
            $output[] = "✓ Symlink storage berhasil dibuat: $shortcut -> $target";
        } else {
            $res = runArtisan('storage:link', $baseDir);
            $output[] = 'Artisan storage:link output: '.$res;
        }
    } else {
        $output[] = 'ℹ Folder/symlink public/storage sudah ada.';
    }
} elseif ($action === 'optimize') {
    $output[] = runArtisan('optimize:clear', $baseDir);
    $output[] = runArtisan('optimize', $baseDir);
} elseif ($action === 'check_db') {
    try {
        require_once $baseDir.'/vendor/autoload.php';
        $app = require_once $baseDir.'/bootstrap/app.php';
        $kernel = $app->make(Kernel::class);
        $kernel->bootstrap();
        DB::connection()->getPdo();
        $dbName = DB::connection()->getDatabaseName();
        $tables = DB::select('SHOW TABLES');
        $output[] = "✓ Berhasil terhubung ke database MySQL: <strong>$dbName</strong>";
        $output[] = '✓ Jumlah tabel terdeteksi: <strong>'.count($tables).' tabel</strong>';
    } catch (Throwable $e) {
        $output[] = '✗ Gagal koneksi database: '.$e->getMessage();
    }
} elseif ($action === 'self_delete') {
    if (@unlink(__FILE__)) {
        exit('<!DOCTYPE html><html><body style="font-family:sans-serif;padding:40px;text-align:center;"><h2>✓ File cpanel-setup.php berhasil dihapus secara permanen demi keamanan server Anda.</h2><p><a href="/">Kembali ke Beranda Website</a></p></body></html>');
    } else {
        $output[] = '✗ Gagal menghapus file ini otomatis. Silakan hapus file public/cpanel-setup.php manual melalui File Manager cPanel.';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>cPanel Deployment Helper - SIT Madani</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; background: #0f172a; color: #f8fafc; padding: 30px; }
        .container { max-width: 800px; margin: auto; background: #1e293b; padding: 32px; border-radius: 16px; box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.5); border: 1px solid #334155; }
        h1 { margin-top: 0; color: #f59e0b; font-size: 24px; }
        .badge { background: #059669; color: white; padding: 4px 10px; border-radius: 9999px; font-size: 11px; font-weight: bold; }
        .btn { display: inline-block; padding: 10px 18px; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 13px; margin: 6px 4px; transition: 0.2s; }
        .btn-primary { background: #4f46e5; color: white; }
        .btn-success { background: #10b981; color: white; }
        .btn-warning { background: #f59e0b; color: #0f172a; }
        .btn-danger { background: #ef4444; color: white; }
        .btn:hover { opacity: 0.9; transform: translateY(-1px); }
        .output { background: #020617; padding: 18px; border-radius: 10px; border: 1px solid #1e293b; font-family: monospace; font-size: 13px; margin: 20px 0; white-space: pre-wrap; color: #38bdf8; }
        .info { background: #1e1b4b; border-left: 4px solid #6366f1; padding: 14px; border-radius: 6px; font-size: 13px; margin: 15px 0; color: #c7d2fe; }
    </style>
</head>
<body>
<div class="container">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom: 20px;">
        <h1>cPanel Deployment Helper <span class="badge">SIT MADANI</span></h1>
        <a href="/" target="_blank" style="color:#38bdf8; font-size:12px; font-weight:bold;">Lihat Website &rarr;</a>
    </div>

    <div class="info">
        <strong>Status Lokasi Server:</strong><br>
        Base Directory: <code><?= htmlspecialchars($baseDir) ?></code><br>
        PHP Version: <code><?= phpversion() ?></code>
    </div>

    <?php if (! empty($output)) { ?>
        <h3>Hasil Eksekusi:</h3>
        <div class="output"><?= implode("\n\n", $output) ?></div>
    <?php } ?>

    <h3>Tindakan Setup cPanel:</h3>
    <div>
        <a class="btn btn-primary" href="?key=<?= urlencode($key) ?>&action=check_db">1. Tes Koneksi Database MySQL</a>
        <a class="btn btn-success" href="?key=<?= urlencode($key) ?>&action=storage_link">2. Buat Symlink Storage (storage:link)</a>
        <a class="btn btn-warning" href="?key=<?= urlencode($key) ?>&action=optimize">3. Cache &amp; Optimize Aplikasi (optimize)</a>
        <a class="btn btn-danger" href="?key=<?= urlencode($key) ?>&action=self_delete" onclick="return confirm('Yakin ingin menghapus file cpanel-setup.php ini sekarang?')">4. Hapus File Ini (Keamanan)</a>
    </div>

    <p style="margin-top: 30px; font-size: 12px; color: #94a3b8;">
        &bull; Jangan lupa untuk menghapus file ini setelah website berhasil berjalan di cPanel.
    </p>
</div>
</body>
</html>
