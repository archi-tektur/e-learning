<?php declare(strict_types=1);

use App\Master;

ini_set('display_errors', '1');
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require_once dirname(__DIR__) . '/vendor/autoload.php';

$a = new Master();
echo $a->index();
