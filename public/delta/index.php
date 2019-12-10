<?php

require_once 'Properties.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$properties = new Properties();
$properties->setA($_GET['a'])
           ->setB($_GET['b'])
           ->setC($_GET['c']);


if (!$properties->isValid()) {
    echo 'conajmniej jedna z wartości nie jest liczbą';
    exit;
}

if ($properties->getA() === 0) {
    echo 'a nie może być 0';
    exit;
}

$delta = ($properties->getB() ** 2) - (4 * $properties->getA() * $properties->getC());
if ($delta < 0) {
    echo 'Brak rozwiązań!';
} else {
    $x1 = (-($properties->getB()) - sqrt($delta)) / (2 * $properties->getA());
    $x2 = (-($properties->getB()) + sqrt($delta)) / (2 * $properties->getA());
    echo round($x1, 3) . '<br>';
    echo round($x2, 3);
}