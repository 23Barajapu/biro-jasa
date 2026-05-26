<?php
define('LARAVEL_START', microtime(true));

header('Content-Type: text/plain');

try {
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
