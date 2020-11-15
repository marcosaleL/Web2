<?php
require_once 'models/centro.model.php';
require_once 'views/home.view.php';

class HomeController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new CentroModel();
        $this->view = new HomeView();
    }

    public function example() {
        echo "home works!";
    }

}

