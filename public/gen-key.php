<?php
define('LARAVEL_START', microtime(true));

header('Content-Type: text/plain');

try {
    $envPath = __DIR__ . '/../.env';
    if (!file_exists($envPath)) {
        $envContent = "APP_NAME=Laravel\n"
            . "APP_ENV=production\n"
            . "APP_KEY=\n"
            . "APP_DEBUG=false\n"
            . "APP_TIMEZONE=UTC\n"
            . "APP_URL=https://bjmahkota.com\n\n"
            . "DB_CONNECTION=mysql\n"
            . "DB_HOST=127.0.0.1\n"
            . "DB_PORT=3306\n"
            . "DB_DATABASE=u736513754_bjmahkota\n"
            . "DB_USERNAME=u736513754_bjmahkota_admi\n"
            . "DB_PASSWORD=y9X+mDKgp\n\n"
            . "SESSION_DRIVER=database\n"
            . "SESSION_LIFETIME=120\n"
            . "CACHE_STORE=database\n"
            . "FILESYSTEM_DISK=local\n"
            . "QUEUE_CONNECTION=database\n";
        file_put_contents($envPath, $envContent);
        echo "File .env baru berhasil dibuat otomatis!\n";
    }

    require __DIR__.'/../vendor/autoload.php';
    $app = require_once __DIR__.'/../bootstrap/app.php';
    $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
    $kernel->bootstrap();

    echo "=== LARAVEL SETUP RUNNER ===\n\n";

    echo "1. Clearing Config Cache...\n";
    Illuminate\Support\Facades\Artisan::call('config:clear');
    echo Illuminate\Support\Facades\Artisan::output() . "\n";

    echo "2. Generating Application Key...\n";
    Illuminate\Support\Facades\Artisan::call('key:generate');
    echo Illuminate\Support\Facades\Artisan::output() . "\n";

    echo "3. Re-caching Config...\n";
    Illuminate\Support\Facades\Artisan::call('config:cache');
    echo Illuminate\Support\Facades\Artisan::output() . "\n";
    
    echo "=== SELESAI ===\n";

} catch (\Throwable $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . " baris " . $e->getLine() . "\n";
}
