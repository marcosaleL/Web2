<?php
// INCLUYO ROUTER CLASS Y LOS CONTROLADORES
require_once './RouterClass.php';
require_once './Controller/FormController.php';


// CONSTANTES PARA RUTEO
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("FORM", BASE_URL . 'showForm');


// Creo instancia de router
$r = new Router();

$r->addRoute("home", "GET", "FormController", "showForm"); 
$r->addRoute("validarForm", "POST", "FormController", "validarForm"); 


// Default
$r->setDefaultRoute("FormController", "showForm");

// Run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
?>