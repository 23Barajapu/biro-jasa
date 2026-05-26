<?php
header('Content-Type: text/plain');
ini_set('max_execution_time', 300); // 5 menit

echo "=== RUN COMPOSER INSTALL ===\n\n";

// Coba cari path composer
$composerPath = 'composer';

// Jalankan composer install
$cmd = "$composerPath install --no-dev --optimize-autoloader 2>&1";
echo "Executing: $cmd\n\n";

$output = [];
$retval = null;
exec($cmd, $output, $retval);

echo implode("\n", $output);
echo "\n\nExit Code: $retval\n";
