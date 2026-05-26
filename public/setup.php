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
    if (file_exists($envExample)) {
        copy($envExample, $envFile);
        
        // Update .env dengan config production
        $env = file_get_contents($envFile);
        $env = preg_replace('/DB_CONNECTION=.*/', 'DB_CONNECTION=mysql', $env);
        $env = preg_replace('/# DB_HOST=.*/', 'DB_HOST=localhost', $env);
        $env = preg_replace('/# DB_PORT=.*/', 'DB_PORT=3306', $env);
        $env = preg_replace('/# DB_DATABASE=.*/', 'DB_DATABASE=u736513754_bjmahkota', $env);
        $env = preg_replace('/# DB_USERNAME=.*/', 'DB_USERNAME=u736513754_bjmahkota_admi', $env);
        $env = preg_replace('/# DB_PASSWORD=.*/', 'DB_PASSWORD=', $env);
        $env = preg_replace('/APP_ENV=.*/', 'APP_ENV=production', $env);
        $env = preg_replace('/APP_DEBUG=.*/', 'APP_DEBUG=true', $env);
        $env = preg_replace('/APP_URL=.*/', 'APP_URL=https://bjmahkota.com', $env);
        file_put_contents($envFile, $env);
    }
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
