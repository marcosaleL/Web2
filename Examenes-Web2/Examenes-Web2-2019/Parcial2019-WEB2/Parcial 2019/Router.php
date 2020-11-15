<?php
// Incluyo RouterClass y conrollers.
require_once './RouterClass.php';
require_once './Controller/HomeController.php';
require_once './Controller/RepuestosController.php';
//require_once './Controller/CategoriasController.php';

// Constantes de ruteo
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

define ("HOME", BASE_URL . 'home');

// Creo Instancia de router
$r = new Router();
// Rutas

// Mi home es un menú con botones para cada opción.
$r->addRoute("home", "GET", "HomeController", "showHome"); // Mostrar home
$r->addRoute("repuestos", "GET", "RepuestosController", "repuestos");  // Mostrar todos los repuestos
$r->addRoute("categorias", "GET", "CategoriasController", "categorias");  // Mostrar todas las categorias

// ----- COMPLEMENTARIOS PARA PROBAR QUE FUNCIONAN A TRAVÉS DE UN FORMLUARIO LOS INCISOS DEL EJERCICIO 1 -----
// ----------------- Con probar en PHPMyAdmin ya bastaría para el enunciado del parcial-----------------------

//$r->addRoute("addRepuesto", "GET", "RepuestosController", "addRepuesto"); // Mostrar form para agregar un repuesto
//$r->addRoute("addCategoria", "GET", "CategoriasController", "addCategoria"); // Mostrar form para agregar una categoria

// Repuestos
//$r->addRoute("insertRepuesto", "POST", "RepuestosController", "insertRepuesto"); // Agregar un repuesto
//$r->addRoute("showRepuesto/:ID", "GET", "RepuestosController", "showRepuesto"); // Ver datos de un repuesto
//$r->addRoute("showRepuestoByCategoria/:ID", "GET", "RepuestosController", "showRepuestoByCategoria"); // Ver datos de un repuesto
//$r->addRoute("showRepuestoByPrice/:ID", "GET", "RepuestosController", "showRepuestoByPrice"); // Ver datos de un repuesto según el precio
//$r->addRoute("showRepuestoByProovedor/:ID", "GET", "RepuestosController", "showRepuestoByProovedor"); // Ver datos de un repuesto según el precio

// Categorias
//$r->addRoute("insertCategoria", "POST", "CategoriasController", "insertCategoria"); // Agregar una categoria

// Default
$r->setDefaultRoute("HomeController", "showHome");

// Run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>