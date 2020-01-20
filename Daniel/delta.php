<?php declare(strict_types=1);

// Error handling mechanism
ini_set('display_errors', '1');
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

$a = 1;
$b = 0;
$c = 0;
$delta = ($b * $b) - (4 * $a * $c);
if ($delta > 0) {
    $x1 = (-$b - sqrt($delta)) / (4 * $a);
    $x2 = (-$b + sqrt($delta)) / (4 * $a);

    echo $x1 . '<br />';
    echo $x2 . '<br />';
} elseif ($delta == 0) {
    $x0 = -$b - 4 * $a;
    echo $x0;
} else {
    echo 'brak rozwiązań rzeczywistych';
}
