<?php declare(strict_types=1);


use App\Application;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once dirname(__DIR__) . '/vendor/autoload.php';

try {
    $app = new Application();
    $app->run();
} catch (Throwable $e) {
    echo '[ERROR] ' . $e->getMessage();
}
