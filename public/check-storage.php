<?php
header('Content-Type: text/plain');

$storagePath = __DIR__ . '/../storage/app/public';

echo "=== SERVER STORAGE CHECK ===\n\n";

if (!file_exists($storagePath)) {
    die("Folder storage/app/public tidak ada!");
}

function listFolderFiles($dir) {
    $files = scandir($dir);
    echo "Folder: $dir\n";
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        $path = $dir . '/' . $file;
        if (is_dir($path)) {
            listFolderFiles($path);
        } else {
            echo " - $file (" . filesize($path) . " bytes)\n";
        }
    }
}

listFolderFiles($storagePath);
