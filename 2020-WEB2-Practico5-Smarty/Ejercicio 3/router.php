<?php
    require_once 'Controller/FruitsController.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "FruitsController", "Home");
    //Ruta por defecto.
    $r->setDefaultRoute("FruitsController", "Home");
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>