<?php

$envPath = dirname(__DIR__, 2) . '/.env';

if (!file_exists($envPath)) {
    die('.env file not found at ' . $envPath);
}

$lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($lines as $line) {
    $line = trim($line);

    if ($line === '' || str_starts_with($line, '#')) {
        continue;
    }

    [$key, $value] = explode('=', $line, 2);

    $_ENV[trim($key)] = trim($value);
}
