<?php
// Incluyo RouterClass y conrollers.
require_once './RouterClass.php';
require_once './Controller/HabitacionesController.php';

// Constantes de ruteo
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define ("HABITACIONES", BASE_URL . 'habitaciones');

// Creo Instancia de router
$r = new Router();
// Rutas
// Mi home es habitaciones <- me limito al enunciado
$r->addRoute("habitaciones", "GET", "HabitacionesController", "habitaciones");  // Mostrar todas las habitaciones
$r->addRoute("insertHabitacion", "POST", "HabitacionesController", "addHabitacion"); // Agregar una habitación
$r->addRoute("habitacionesDisponibles", "GET", "HabitacionesController", "habitacionesDisponibles"); // Mostar habitaciones disponibles

// Default
$r->setDefaultRoute("HabitacionesController", "habitaciones");

// Run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>