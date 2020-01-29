<?php declare(strict_types=1);

// Error handling mechanism
ini_set('display_errors', '1');
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);


$people = [
    [
        'name'    => 'Daniel',
        'surname' => 'Kłoda',
        'age'     => '20',
    ],
    [
        'name'    => 'Filip',
        'surname' => 'Wójtowicz',
        'age'     => '18',
    ],
    [
        'name'    => 'Ania',
        'surname' => 'Maciejewska',
        'age'     => '7',
    ],
];

foreach ($people as $person) {
    $text = $person['age'] >= 18 ? 'może kupić alkohol w Polsce.' : 'nie może kupić alkoholu w Polsce.';
    $text2 = $person ['age'] >= 21 ? 'Może kupić alkohol w Staach.' : 'Nie może kupić alkoholu w Stanach.';

    $name = strtoupper($person['surname']);

    echo "{$person['name']} {$name}, {$person['age']} lat, {$text} {$text2} <br />";
}

function showData(string $name, string $surname, string $age)
{
    return "{$name} {$surname} {$age} <br/>";
}

foreach ($people as $each) {
    echo showData($each ['name'], $each ['surname'], $each['age']);
}

