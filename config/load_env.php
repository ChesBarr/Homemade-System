<?php

function loadEnv($path = __DIR__ . '/../.env') {
    if (!file_exists($path)) return;

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (str_starts_with(trim($line), '#')) continue; // skip comments

        [$key, $value] = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value);

        // Remove surrounding quotes if any
        $value = trim($value, "\"'");

        $_ENV[$key] = $value;
    }
}

// HOW TO USE

// require_once __DIR__ . '/../../config/load_env.php';
// loadEnv();
// $dbhost = $_ENV['DB_HOST'];