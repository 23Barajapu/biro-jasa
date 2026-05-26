<?php
header('Content-Type: text/plain');

$vendorPath = __DIR__ . '/../vendor';

if (!file_exists($vendorPath)) {
    echo "Folder vendor tidak ditemukan sama sekali!\n";
} else {
    echo "Folder vendor ADA.\n";
    if (is_dir($vendorPath)) {
        echo "Tipe: Direktori\n";
        $files = scandir($vendorPath);
        echo "Isi folder vendor:\n";
        print_r($files);
    } else {
        echo "Tipe: File (Bukan Direktori!)\n";
    }
}
