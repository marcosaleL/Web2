<?php
include_once './View/HomeView.php';

class HomeController{
    private $homeView;

    public function __construct(){
        $this->homeView = new HomeView();
    }

    // Mostrar home
    function showHome(){
        $this->homeView->showHome();
    } 
}
?>