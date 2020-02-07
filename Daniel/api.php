<?php declare(strict_types=1);

$json = file_get_contents('https://jsonplaceholder.typicode.com/todos/');
$tasks = json_decode($json, true, 512, JSON_THROW_ON_ERROR);

foreach ($tasks as $task) {
    echo 'Task nr ' . $task['id'] . ':<br>';
    foreach ($task as $key => $value) {
        if ($key === 'id' || $key === 'userId') {
            continue;
        }
        echo "[{$key}]: {$value} <br>";
    }
    echo '<br>';
}