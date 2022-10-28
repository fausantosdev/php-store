<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} else {
    session_start();

    define('DEFAULT_CONTROLLER', 'home');
    define('DEFAULT_METHOD', 'index');

    require_once '../vendor/autoload.php';
    require_once '../App/Functions/functions_twig.php';
    require_once './bootstrapp/bootstrapp.php';
}