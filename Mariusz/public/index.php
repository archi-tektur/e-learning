<?php

$a = -10;
$b = 20;
$c = 30;

$delta = ($b * $b) - (4 * $a * $c);

echo "Delta: {$delta} <br/>";

if ($delta > 0) {
    $x1 = (-$b - sqrt($delta)) / (2 * $a);
    echo "x1: {$x1}";

    $x2 = (-$b + sqrt($delta)) / (2 * $a);
    echo "x1: {$x1}";
}

