<?php

$engine = require dirname(__DIR__) . '/config/koneksi.php';

mysqli_query($engine, "SET FOREIGN_KEY_CHECKS = 0");

$tables = mysqli_query($engine, "SHOW TABLES");

while ($row = mysqli_fetch_row($tables)) {
    mysqli_query($engine, "DROP TABLE IF EXISTS `$row[0]`");
}

mysqli_query($engine, "SET FOREIGN_KEY_CHECKS = 1");

echo "Database Dibersihkan.\n";

require __DIR__ . '/migrate.php';
