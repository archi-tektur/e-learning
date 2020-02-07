<?php declare(strict_types=1);

/**
 * @param float[] $numbers
 * @return float
 */
function average(array $numbers): float
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum / count($numbers);
}

$c1 = [
    'name' => 'Natsu',
    'age'  => 418,
];

$c2 = [
    'name' => 'Lucy',
    'age'  => 17,
];
$c3 = [
    'name' => 'Gray',
    'age'  => 18,
];
$c4 = [
    'name' => 'Erza',
    'age'  => 19,
];

$characters = [$c1, $c2, $c3, $c4];

$ages = [];
foreach ($characters as $each) {
    $ages[] = $each['age'];
}

foreach ($characters as $char) {
    echo $char['name'] . ', age ' . $char['age'] . ', average of age ' . average($ages) . '<br>';
}