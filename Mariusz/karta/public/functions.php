<?php declare(strict_types=1);

function formatCardNumber(string $cardNumber): string
{
    $splitted = str_split($cardNumber);
    $formatted = '';

    foreach ($splitted as $index => $each) {
        if ($index % 4 === 0 && $index !== 0) {
            $formatted .= ' ';
        }
        $formatted .= $each;
    }

    return $formatted;
}

function formatValidity(string $input): string
{
    return str_replace('-', '/', $input);
}

function isCardNumberValid(string $cardNumber): bool
{
    return strlen($cardNumber) === 16;
}