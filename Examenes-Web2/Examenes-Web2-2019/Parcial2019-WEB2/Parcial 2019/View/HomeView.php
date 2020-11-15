<?php
require_once './libs/smarty/Smarty.class.php';
class HomeView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }
    // Mostrar juegos disponibles
    function showHome(){
        $this->smarty->assign('titulo', 'Menú');
        $this->smarty->display('templates/home.tpl');
    }
}
?>