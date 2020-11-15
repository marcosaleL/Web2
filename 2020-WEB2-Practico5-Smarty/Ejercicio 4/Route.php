<?php
    require_once './Controller/MovieController.php';
    require_once './RouteClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    //Creo instancia de router
    $r = new Router();
    
    // rutas

    //Muestra home
    $r->addRoute("home", "GET", "MovieController", "showHome");//--

    //Muestra todas las películas 
    $r->addRoute("showMovies", "GET", "MovieController", "showAllMovies");

    //A) Mostrar películas según género
     $r->addRoute("showByGenero", "GET", "MovieController", "showMoviesByGenre");
    
    //B) Mostrar películas por según estudio de filmación
    $r->addRoute("showByStudio", "GET", "MovieController", "showMoviesByStudio");

    //C) Mostrar cantidad de películas por cada género
    $r->addRoute("count", "GET", "MovieController", "countMoviesByGenre");
    
    //D) Verificar si existe un género determinado 
    $r->addRoute("searchGenre", "GET", "MovieController", "searchGenre");

    //E)Insertar película.
    $r->addRoute("insertMovie", "POST", "MovieController", "insertMovie");

    //default
    $r->setDefaultRoute("MovieController", "showHome");
     //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>
