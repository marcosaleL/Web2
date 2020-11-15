<?php
    require_once 'controllers/centro.controller.php';

    // base url
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // define una acción por defecto
    if (empty($_GET['action'])) {
        $_GET['action'] = 'home_a';
    } 

    // toma la acción que viene del usuario y parsea los parámetros
    $accion = $_GET['action']; 
    $parametros = explode('/', $accion);

    // TABLA DE RUTEO
    switch ($parametros[0]) {
        case 'home_a': 
            $controller = new CentroController();
            $controller->ListarCentros();
        break;

        case 'home_b': 
            $controller = new CentroController();
            $controller->ListarCentrosMayor50();
        break;

        case 'verCentrosCiudades': 
            $controller = new CentroController();
            $controller->CentrosdelaCiudad();
        break;

        case 'home_c': 
            $controller = new CentroController();
            $controller->formulario();
        break;


        case 'home_d': 
            $controller = new CentroController();
            $controller->Capacidad_Sistema();
        break;
        
        default:  
            echo "404";
        break;
        
    }