<?php

function renderTodo($key, $todo)
{
    return "<a style='border: 1px gray solid; display: block; width: 200px; font-family: sans-serif; font-weight: 400; font-size: 16px;' href='?remove={$key}'><h2>{$todo['name']}</h2>{$todo['content']} <br> {$todo['createdAt']->format('H:i:s')}</a>";
}