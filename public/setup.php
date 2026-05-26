<?php

/**
 * Setup Laravel di Hostinger tanpa SSH
 * HAPUS FILE INI SETELAH SELESAI!
 */

if (($_GET['key'] ?? '') !== 'setup2026') {
    die('Akses ditolak.');
}

// Buat .env jika belum ada
$basePath = dirname(__DIR__);
$envFile = $basePath . '/.env';
$envExample = $basePath . '/.env.example';

if (!file_exists($envFile)) {
    $envContent = "APP_NAME=Laravel\n"
        . "APP_ENV=production\n"
        . "APP_KEY=\n"
        . "APP_DEBUG=false\n"
        . "APP_URL=https://bjmahkota.com\n\n"
        . "LOG_CHANNEL=stack\n"
        . "LOG_LEVEL=debug\n\n"
        . "DB_CONNECTION=mysql\n"
        . "DB_HOST=localhost\n"
        . "DB_PORT=3306\n"
        . "DB_DATABASE=u736513754_bjmahkota\n"
        . "DB_USERNAME=u736513754_bjmahkota_admi\n"
        . "DB_PASSWORD=\n\n"
        . "BROADCAST_CONNECTION=log\n"
        . "CACHE_STORE=database\n"
        . "FILESYSTEM_DISK=local\n"
        . "QUEUE_CONNECTION=database\n"
        . "SESSION_DRIVER=database\n"
        . "SESSION_LIFETIME=120\n";
    file_put_contents($envFile, $envContent);
    echo ">> File .env berhasil dibuat dari template hardcode.\n";
}

// Bootstrap Laravel
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\Artisan;

echo "<pre style='background:#1a1a2e;color:#e0e0e0;padding:20px;font-size:14px;'>";
echo "=== SETUP LARAVEL ===\n\n";

echo ">> .env status: " . (file_exists($envFile) ? "ADA ✅" : "TIDAK ADA ❌") . "\n\n";

// 1. Generate APP_KEY
echo ">> Generate APP_KEY...\n";
try {
    Artisan::call('key:generate', ['--force' => true]);
    echo Artisan::output();
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

// 2. Migrasi database
echo "\n>> Migrasi database...\n";
try {
    Artisan::call('migrate', ['--force' => true]);
    echo Artisan::output();
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

// 3. Storage link
echo "\n>> Storage link...\n";
try {
    Artisan::call('storage:link', ['--force' => true]);
    echo Artisan::output();
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

// 4. Cache config
echo "\n>> Config cache...\n";
try {
    Artisan::call('config:cache');
    echo Artisan::output();
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

// 5. Route cache
echo "\n>> Route cache...\n";
try {
    Artisan::call('route:cache');
    echo Artisan::output();
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

echo "\n=== SELESAI ===\n";
echo "\n⚠️  HAPUS FILE setup.php SETELAH INI!\n";
echo "</pre>";
