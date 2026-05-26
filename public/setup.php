<?php

/**
 * Setup Laravel di Hostinger tanpa SSH
 * HAPUS FILE INI SETELAH SELESAI!
 */

if (($_GET['key'] ?? '') !== 'setup2026') {
    die('Akses ditolak.');
}

// Bootstrap Laravel
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "<pre style='background:#1a1a2e;color:#e0e0e0;padding:20px;font-size:14px;'>";
echo "=== SETUP LARAVEL ===\n\n";

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
