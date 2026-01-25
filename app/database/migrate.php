<?php

$engine = require dirname(__DIR__) . '/config/koneksi.php';

$migrationPath = __DIR__ . '/migration';
$files = scandir($migrationPath);

// tabel penanda migrasi
mysqli_query($engine, "
    CREATE TABLE IF NOT EXISTS migrations (
        id INT AUTO_INCREMENT PRIMARY KEY,
        migration VARCHAR(255) UNIQUE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )
");

foreach ($files as $file) {
    if ($file === '.' || $file === '..') continue;

    // cek apakah sudah pernah dijalankan
    $check = mysqli_query(
        $engine,
        "SELECT id FROM migrations WHERE migration = '$file' LIMIT 1"
    );

    if (mysqli_num_rows($check) > 0) {
        continue;
    }

    $migration = require $migrationPath . '/' . $file;

    echo "Menjalankan migration: $file\n";

    mysqli_query($engine, $migration['up']);

    mysqli_query(
        $engine,
        "INSERT INTO migrations (migration) VALUES ('$file')"
    );
}
