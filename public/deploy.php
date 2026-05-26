<?php
/**
 * Script deploy untuk Hostinger (tanpa SSH)
 * HAPUS FILE INI SETELAH SELESAI DEPLOY!
 */

// Keamanan sederhana
if (($_GET['key'] ?? '') !== 'deploy2026secret') {
    die('Akses ditolak.');
}

echo "<pre>";
echo "=== DEPLOY SCRIPT ===\n\n";

// 1. Cek apakah composer tersedia
echo ">> Cek composer...\n";
echo shell_exec('composer --version 2>&1');
echo "\n";

// 2. Install dependencies
echo ">> composer install...\n";
echo shell_exec('cd ' . base_path() . ' && composer install --no-dev --optimize-autoloader 2>&1');
echo "\n";

// 3. Copy .env jika belum ada
$envPath = base_path() . '/.env';
$envExamplePath = base_path() . '/.env.example';
if (!file_exists($envPath)) {
    if (file_exists($envExamplePath)) {
        copy($envExamplePath, $envPath);
        echo ">> .env di-copy dari .env.example\n";
    } else {
        echo ">> WARNING: .env.example tidak ditemukan!\n";
    }
} else {
    echo ">> .env sudah ada\n";
}

// 4. Generate key
echo "\n>> php artisan key:generate...\n";
echo shell_exec('cd ' . base_path() . ' && php artisan key:generate --force 2>&1');

// 5. Migrasi database
echo "\n>> php artisan migrate...\n";
echo shell_exec('cd ' . base_path() . ' && php artisan migrate --force 2>&1');

// 6. Storage link
echo "\n>> php artisan storage:link...\n";
echo shell_exec('cd ' . base_path() . ' && php artisan storage:link 2>&1');

// 7. Cache config
echo "\n>> php artisan config:cache...\n";
echo shell_exec('cd ' . base_path() . ' && php artisan config:cache 2>&1');

echo "\n>> php artisan route:cache...\n";
echo shell_exec('cd ' . base_path() . ' && php artisan route:cache 2>&1');

echo "\n>> php artisan view:cache...\n";
echo shell_exec('cd ' . base_path() . ' && php artisan view:cache 2>&1');

echo "\n=== SELESAI ===\n";
echo "\n⚠️  HAPUS FILE deploy.php SETELAH SELESAI!\n";
echo "</pre>";

function base_path() {
    return dirname(__DIR__);
}
