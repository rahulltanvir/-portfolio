<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo '<pre>';
echo 'PHP VERSION: ' . PHP_VERSION . PHP_EOL;
echo 'PHP SAPI: ' . PHP_SAPI . PHP_EOL;
echo 'PHP OS: ' . PHP_OS . PHP_EOL;
echo '</pre>';

try {
    require __DIR__ . '/../vendor/autoload.php';

    $app = require_once __DIR__ . '/../bootstrap/app.php';

    $app->handleRequest(
        Illuminate\Http\Request::capture()
    );
} catch (\Throwable $e) {
    http_response_code(500);

    echo '<pre>';
    echo 'ERROR: ' . get_class($e) . PHP_EOL;
    echo 'MESSAGE: ' . $e->getMessage() . PHP_EOL;
    echo 'FILE: ' . $e->getFile() . PHP_EOL;
    echo 'LINE: ' . $e->getLine() . PHP_EOL;
    echo PHP_EOL;
    echo $e->getTraceAsString();
    echo '</pre>';
}