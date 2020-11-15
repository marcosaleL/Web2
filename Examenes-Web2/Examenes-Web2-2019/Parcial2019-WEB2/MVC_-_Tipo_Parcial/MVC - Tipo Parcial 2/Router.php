<?php
// Incluyo RouterClass y conrollers.
require_once './RouterClass.php';
require_once './Controller/HomeController.php';
require_once './Controller/ApuestasController.php';
require_once './Controller/JuegosController.php';

// Constantes de ruteo
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define ("JUEGOS", BASE_URL . 'juegos');
define ("APUESTAS", BASE_URL . 'apuestas');
define ("HOME", BASE_URL . 'home');

// Creo Instancia de router
$r = new Router();
// Rutas

// Mi home es un menú con botones para cada opción.
$r->addRoute("home", "GET", "HomeController", "showHome"); // Mostrar home
$r->addRoute("juegos", "GET", "JuegosController", "juegos");  // Mostrar todos los juegos
$r->addRoute("addJuego", "GET", "JuegosController", "addJuego"); // Mostrar form para agregar un juego
$r->addRoute("deleteJuego/:ID", "GET", "JuegosController", "deleteJuego"); // Borrar un juego
$r->addRoute("apuestas", "GET", "ApuestasController", "apuestas");  // Mostrar todos las apuestas con sus respectivos juegos
$r->addRoute("addApuesta", "GET", "ApuestasController", "addApuesta"); // Mostrar form para agregar una apuesta

// Juegos
$r->addRoute("insertJuego", "POST", "JuegosController", "insertJuego"); // Agregar un juego

// Apuestas
$r->addRoute("insertApuesta", "POST", "ApuestasController", "insertApuesta"); // Agregar una apuesta

// Default
$r->setDefaultRoute("HomeController", "showHome");

// Run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>