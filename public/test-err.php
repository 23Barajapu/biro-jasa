<?php
define('LARAVEL_START', microtime(true));

header('Content-Type: text/plain');

try {
    if (!file_exists(__DIR__.'/../vendor/autoload.php')) {
        die("vendor/autoload.php tidak ada!");
    }
    require __DIR__.'/../vendor/autoload.php';
    
    if (!file_exists(__DIR__.'/../bootstrap/app.php')) {
        die("bootstrap/app.php tidak ada!");
    }
    $app = require_once __DIR__.'/../bootstrap/app.php';
    
    echo "Bootstrap Laravel berhasil!\n";
    
    // Coba run kernel
    $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
    $kernel->bootstrap();
    echo "Kernel bootstrap berhasil!\n";
    
} catch (\Throwable $e) {
    echo "Bootstrap GAGAL: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . " baris " . $e->getLine() . "\n";
    echo "Trace:\n" . $e->getTraceAsString() . "\n";
}
