<?php

// Debug
function dd(...$param)
{
    echo "<pre>";
    die(var_dump($param));
}

// Errores en if ternario
function old($field)
{
    if(isset($_POST[$field])){
        return $_POST[$field];
    }
}

function redirect($url)
{
    header('Location: ' . $url);
    exit;
}

function check()
{
    return isset($_SESSION['username']);
}

function guest()
{
    return !check();
}

function checkRole()
{
    // ...
}


































