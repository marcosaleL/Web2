<?php
    require_once 'controllers/ciudades.controllers.php';
    require_once 'controllers/mascotas.controllers.php';
    require_once 'controllers/ciudades.controllers.php';

    // base url
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // define una acción por defecto
    if (empty($_GET['action'])) {
        $_GET['action'] = 'formciudad';
    } 

    // toma la acción que viene del usuario y parsea los parámetros
    $accion = $_GET['action']; 
    $parametros = explode('/', $accion);

    // TABLA DE RUTEO
    switch ($parametros[0]) {
        case 'home': 
            $controller=new CiudController();
            $controller->listarCiudades();
        break;

        case 'formciudad': 
            $controller=new CiudController();
            $controller->formCiudades();
        break;

        case 'agregarciudad': 
            $controller=new CiudController();
            $controller->insertarCiudades();
        break;

        case 'formmascotas': 
            $controller=new MascotasController();
            $controller->formMascotas();
        break;

        case 'agregarmascota': 
            $controller=new MascotasController();
            $controller->agregarMascotas();
        break;

        case 'ultimas': 
            $controller=new MascotasController();
            $controller->listarMascotas();
        break;

        case 'estado_p': 
            $controller=new MascotasController();
            $controller->listarMascotasPorEstado('perdido');
        break;
        
        case 'estado_a': 
            $controller=new MascotasController();
            $controller->listarMascotasPorEstado('adopcion');
        break;

        case 'estado_e': 
            $controller=new MascotasController();
            $controller->listarMascotasPorEstado('encontrado');
        break;

        default:  
            echo "404";
        break;
        
    }