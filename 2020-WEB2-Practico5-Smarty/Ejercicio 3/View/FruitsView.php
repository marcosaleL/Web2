<link rel="stylesheet" href="./css/styles3.css">
<?php
require_once "./libs/smarty/Smarty.class.php";
class FruitsView{ 
    private $title; 

    function __construct(){
        $this->title = "Lista de Frutas";
    }
    function ShowHome(){
        $fruits = array("apples", "pears", "bananas", "strawberries");
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('frutas', $fruits);      
        $smarty->display('templates/fruits.tpl');//muestro el template 
    }    
}
?>