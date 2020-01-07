<?php

include_once 'session_tools.php';
include_once 'listeners.php';
include_once 'render_tools.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

initSession();

// listeners
listenForParametersInUrl();
listenForOccasionalDelete();
listenForSessionPurge();

foreach (getAllTodos() as $key => $eachTodo) {
    echo renderTodo($key, $eachTodo);
}
