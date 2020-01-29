<?php declare(strict_types=1);

require_once 'Mage.php';

// Error handling mechanism
ini_set('display_errors', '1');
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);


$mages = ['Natsu', 'Lucy', 'Minerva', 'Gray',];

function names($mages)
{
    foreach ($mages as $mage) {
        echo $mage . ', ';
    }
}

names($mages);