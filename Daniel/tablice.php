<?php declare(strict_types=1);

$user = [
    'name'    => 'Jan',
    'surname' => 'Kowalski',
    'age'     => 17,
    'canSwim' => false,
];

$userFullName = $user['name'] . ' ' . $user['surname'];


echo $userFullName;
