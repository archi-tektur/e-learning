<?php declare(strict_types=1);

$u = [
    'name'    => 'Jan',
    'surname' => 'Kowalski',
    'age'     => 17,
    'canSwim' => false,
];

$u1 = [
    'name'    => 'Daniel',
    'surname' => 'Kowalski',
    'age'     => 22,
    'canSwim' => true,
];

$users = [$u, $u1];

/*
$numbers = [3, 5, 67, 3, 5, 32, 6, 23, 5, 32];

// simple array iteration
foreach ($numbers as $i => $number) {
    $delimeter = '<br>';
    echo 'Liczba #' . $i . ': ' . $number . $delimeter;
}*/

/*
$names = ['Ashe', 'Zyra', 'Shaco', 'Yasuo', 'Teemo'];

// simple array iteration
foreach ($names as $name) {
    $delimeter = '<br>';
    echo $name . $delimeter;
}*/

foreach ($users as $index => $user) {
    foreach ($user as $key => $value) {
        echo $key . ': ' . $value . '<br>';
    }
    echo '<br>';
}

