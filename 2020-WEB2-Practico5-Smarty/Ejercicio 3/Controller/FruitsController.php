<?php
require_once "./View/FruitsView.php";
//require_once "./Model/FruitsModel.php";
class FruitsController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new FruitsView();
        //$this->model = new FruitsModel();
    }

    function Home(){
        $this->view->ShowHome();
    }
}
?>