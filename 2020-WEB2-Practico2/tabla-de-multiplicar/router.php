<?php
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once "home.php";
require_once "5.php";
require_once "limites.php";

if (!empty($_GET['action'])){
    $action = $_GET['action'];
} else{
    $action = 'home';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home': 
        echo home();
    break;
    case 'consulta':
        echo consulta($params[0]);
    break;
    case 'ver5':
        echo ver5($params[0]);
    break;
    case 'ver10':
        echo ver10($params[0]);
    break;
    case 'ver20':
        echo ver20($params[0]);
    break;
    default: 
        echo('404 Page not found'); 
        break;

    }
