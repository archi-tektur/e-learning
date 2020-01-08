<?php declare(strict_types=1);

require_once '../../../php_error_handling.php';
require_once 'functions.php';

$number = $_GET['number'];
$validity = $_GET['validity'];
$currentTime = new DateTime('now');

$displayedCardNumber = '';

if (isCardNumberValid($number)) {
    $displayedCardNumber = formatCardNumber($number);
} else {
    $displayedCardNumber = 'Niepoprawna długość.';
}

$creditCard = [
    'uid'       => '5489898908943089430',
    'number'    => $displayedCardNumber,
    'validity'  => formatValidity($validity),
    'ownerName' => 'Jose Maria Fuentes',
    'cvc'       => 'CVC',
];

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
    <h1 class="card__number"><?php echo $creditCard['number']; ?></h1>
    <span class="card__validity">
        <span class="card__text">Valid through</span>
        <span class="card__date"><?php echo $creditCard['validity']; ?></span>
    </span>
    <span class="card__owner-name"><?php echo $creditCard['ownerName']; ?></span>

    <img class="card__logo" src="mastercard-logo.png" alt="Logo mastercard">
    <span class="card__cvc"><?php echo $creditCard['cvc']; ?></span>
</div>
<span class="currentDate">Dziś jest <?php echo $currentTime->format('d.m.Y, H:i:s') ?></span>
</body>
</html>