<?php

// starts a session
session_start();

function initSession()
{
    if (!array_key_exists('todos', $_SESSION)) {
        // if does not key exists
        $_SESSION['todos'] = [];
    }
}

function purgeSession()
{
    $_SESSION['todos'] = [];
}

function addTodo($name, $content, $isDone)
{
    $unique = mt_rand(1, 10000);
    $todo = [
        'name'    => $name,
        'content' => $content,
        'isDone'  => $isDone,
    ];

    $_SESSION['todos'][$unique] = $todo;

    return $unique;
}

function deleteTodo($key)
{
    unset($_SESSION['todos'][$key]);

}

function getAllTodos()
{
    return $_SESSION['todos'];
}