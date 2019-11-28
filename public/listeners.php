<?php

function listenForParametersInUrl()
{
    if (array_key_exists('name', $_GET)) {
        addTodo($_GET['name'], $_GET['content'], $_GET['isDone']);
    }
}

function listenForOccasionalDelete()
{
    if (array_key_exists('remove', $_GET)) {
        deleteTodo($_GET['remove']);
    }
}

function listenForSessionPurge()
{
    if (array_key_exists('purge', $_GET)) {
        purgeSession();
    }
}
