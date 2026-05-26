<?php
header('Content-Type: text/plain');

$logPath = __DIR__ . '/../storage/logs/laravel.log';

if (!file_exists($logPath)) {
    die("File log laravel.log belum ada atau belum ada error tercatat.");
}

$lines = file($logPath);
$lastLines = array_slice($lines, -100); // Ambil 100 baris terakhir

echo "=== 100 BARIS TERAKHIR LARAVEL LOG ===\n\n";
echo implode("", $lastLines);
