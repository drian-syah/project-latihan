<?php

$path = dirname(__DIR__, 2) . '/.env';

if(!file_exists($path))
{
    die('.env Tidak Ditemukan');
}

$lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach($lines as $line)
{
    if(str_starts_with(trim($line), '#')) continue;
    [$key, $value] = explode('=', $line, 2);

    $_ENV[$key] = trim($value);
}

if (!isset($_ENV['DB_HOST'])) {
    die('ENV database belum lengkap');
}

$required = ['DB_HOST', 'DB_PORT', 'DB_DATABASE', 'DB_USERNAME'];

foreach($required as $key)
{
    if (!isset($_ENV[$key]) || $_ENV[$key] === '')
    {
        die('ENV $key belum diisi');
    }
}

return $_ENV;