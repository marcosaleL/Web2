<?php 
include_once './View/HomeView.php';
class HomeController{
    // DECLARACIÓN DE ATRIBUTOS
    private $homeView;
    // CONSTRUCTOR
    function __construct(){
         $this->homeView = new HomeView();
    }
    // SHOW HOME
    function showHome(){       
        $this->homeView->showHome();
    }
}
?>