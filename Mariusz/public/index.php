<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function makeSquare($a)
{
    return $a * $a;
}

$integer = 1;
$float = 1.4;
$string = 'Jakikolwiek napis';
$bool = true;
$bool2 = false;
$null = null;

$array = [1, 'echo', 3.3];

$assoc = [
    'key'  => 'value',
    'key2' => 'value2',
];

echo $assoc['key'];
?>


<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
</head>
<body>

<div class="card">
    <h1 class="card__number">1234 5678 9101 1213</h1>
    <span class="card__validity">
        <span class="card__text">Valid through</span>
        <span class="card__date">02/20</span>
    </span>
    <span class="card__owner-name">Jose Maria Fuentes</span>

    <img class="card__logo" src="mastercard-logo.png" alt="Logo mastercard">
    <span class="card__cvc">123</span>
</div>

</body>
</html>