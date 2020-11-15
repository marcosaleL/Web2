<?php
    require_once 'controllers/centro.controller.php';
    require_once 'controllers/ciudad.controller.php';

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

        /*punto a de home  parcial web2 Tudai*/
        case 'home_a': 
            $controller=new CentroController();
            $controller->listarCentros();
        break;


        /*punto b de home  parcial web2 Tudai*/
        case 'home_b': 
            $controller=new CiudadController();
            $controller->listarCiudadRiesgo();
        break;


          /*punto c (tipo hospital)de home  parcial web2 Tudai*/
         case 'home_hospital': 
            $controller=new CentroController();
            $controller->listarCentroHospital();
        break;


        /*punto c (tipo clinica)de home  parcial web2 Tudai*/
        case 'home_clinica': 
            $controller=new CentroController();
            $controller->listarCentroClinica();
        break;


        /*punto c (tipo sanatorio)de home  parcial web2 Tudai*/
        case 'home_sanatorio': 
            $controller=new CentroController();
            $controller->listarCentroSanatorio();
        break;


        /*alta de un centro*/
        case 'admin_a': 
            $controller=new CentroController();
            $controller->formuCentro();
        break;

        case 'agregarcentro': 
            $controller=new CentroController();
            $controller->agregarCentro();
        break;

        
        /* alta de una ciudad*/
        case 'admin_b': 
            $controller=new CiudadController();
            $controller->formuCiudad();
        break;

        case 'agregarciudad': 
            $controller=new CiudadController();
            $controller->agregarCiudad();
        break;

        case 'centros': 
            $controller=new CentroController();
            $controller->mostrartodos();
        break;
        
        default:  
            echo "404";
        break;



    

        
    }