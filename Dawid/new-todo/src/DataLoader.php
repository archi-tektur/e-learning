<?php declare(strict_types=1);

class DataLoader
{
    public static function load(): array
    {
        $json = file_get_contents('https://jsonplaceholder.typicode.com/todos/');
        return json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    }
}