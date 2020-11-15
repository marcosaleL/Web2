<?php
    require_once 'controllers/casa.controller.php';
    require_once 'controllers/barrio.controller.php';

    // base url
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // define una acción por defecto
    if (empty($_GET['action'])) {
        $_GET['action'] = 'home';
    } 

    // toma la acción que viene del usuario y parsea los parámetros
    $accion = $_GET['action']; 
    $parametros = explode('/', $accion);

    // TABLA DE RUTEO
    switch ($parametros[0]) {
        /*Muestra todas las casas*/
        case 'home': 
            $controller=new CasaController();
            $controller->mostrarTodasCasas();
        break;
        /*punto a de home  parcial web2 Tudai*/
        case 'home_a': 
            $controller=new CasaController();
            $controller->listarCasas();
        break;

         /*punto b de home  parcial web2 Tudai*/
        case 'home_b': 
            $controller=new BarrioController();
            $controller->listarBarriosRes();
        break;

         /*punto c (menor o igual de 3 habitaciones)de home  parcial web2 Tudai*/
        case 'home_cmenor3': 
            $controller=new CasaController();
            $controller->listarCasasporHabmenor3();
        break;

        /*punto c (mayor de 3 habitaciones)de home  parcial web2 Tudai*/
        case 'home_cmayor3': 
            $controller=new CasaController();
            $controller->listarCasasporHabmayor3();
        break;

        /*alta de una casa*/
        case 'admin_a': 
            $controller=new CasaController();
            $controller->formuCasas();
        break;

        case 'agregarcasa': 
            $controller=new CasaController();
            $controller->agregarCasa();
        break;
        
        /* alta de un barrio*/
        case 'admin_b': 
            $controller=new BarrioController();
            $controller->formuBarrio();
        break;

        case 'agregarbarrio': 
            $controller=new BarrioController();
            $controller->agregarBarrio();
        break;
        
        default:  
            echo "404";
        break;
        
    }