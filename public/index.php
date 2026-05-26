<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Auto-create .env jika terhapus oleh deployer Git Hostinger
$envPath = __DIR__ . '/../.env';
if (!file_exists($envPath)) {
    $envContent = "APP_NAME=Laravel\n"
        . "APP_ENV=production\n"
        . "APP_KEY=base64:YBhoVvXCFpUA300cZoIPmp1vOizpTs/rM8oNBlph34g=\n"
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
    
    // Hapus config cache jika ada agar langsung membaca .env baru
    $configCachePath = __DIR__ . '/../bootstrap/cache/config.php';
    if (file_exists($configCachePath)) {
        @unlink($configCachePath);
    }
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
