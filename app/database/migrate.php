<?php

$engine = require dirname(__DIR__) . '/config/koneksi.php';


$migrationFiles = scandir(__DIR__ . "/migration");

mysqli_query($engine, "
    CREATE TABLE IF NOT EXISTS migrations (
        id INT AUTO_INCREMENT PRIMARY KEY,
        migration VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )
");


foreach ($migrationFiles as $file) {
    if ($file == "." || $file == "..") continue;

    $migration = require __DIR__ . "/migration/" . $file;

    echo "Menjalankan migration: $file <br>";

    mysqli_query($engine, $migration["up"]);
}
