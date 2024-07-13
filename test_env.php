<?php

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

echo "DB_HOST: " . getenv('DB_HOST') . PHP_EOL;
echo "DB_DATABASE: " . getenv('DB_DATABASE') . PHP_EOL;
echo "DB_USERNAME: " . getenv('DB_USERNAME') . PHP_EOL;
echo "DB_PASSWORD: " . getenv('DB_PASSWORD') . PHP_EOL;
echo "DB_PORT: " . getenv('DB_PORT') . PHP_EOL;
