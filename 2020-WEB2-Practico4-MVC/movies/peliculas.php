<?php

require_once "Controller/movieController.php";

$controller = new movieController();

if (isset($_GET['genre'])) {
    $controller->getController();
} elseif(isset($_GET['studio'])){
    $controller->controllerStudio();
} elseif(isset($_REQUEST['movie'])){
    $controller -> controllerSearch();
} elseif (isset($_REQUEST['buscador'])){
    $controller->getVerify();
} elseif(isset($_REQUEST['agregar'])){
    $controller -> controllerInsert();
}
else {
    $controller->getControllerAll();
}
