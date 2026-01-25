<?php
$config = require __DIR__ . '/database.php';

$engine = mysqli_connect(
    $config['host'],
    $config['username'],
    $config['password'],
    '',
    $config['port']
);

if (!$engine) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_query(
    $engine,
    "CREATE DATABASE IF NOT EXISTS `{$config['database']}`"
);

mysqli_select_db($engine, $config['database']);

return $engine;
