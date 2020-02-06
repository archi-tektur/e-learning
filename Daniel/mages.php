<?php declare(strict_types=1);

function createMageArray($name, $surname, $game, $isMortal)
{
    return ['name' => $name, 'surname' => $surname, 'game' => $game, 'isMortal' => $isMortal];
}

function showCharacterDetails($character)
{
    $mortality = $character['isMortal'] ? 'postać może umrzeć w grze.' : 'postać nie może umrzeć w grze.';
    return $character['name'] . ' ' . $character['surname'] . ' ' . $character['game'] . ', ' . $mortality;
}

$c1 = createMageArray('Vernon', 'Roche', 'Wiedźmin', false);
$c2 = createMageArray('Garus', 'Vakarian', 'Mass Effect', false);
$c3 = createMageArray('Ashley', 'Williams', 'Mass Effect', true);

$characters = [$c1, $c2, $c3];

foreach ($characters as $character) {
    echo showCharacterDetails($character) . '<br>';
}

