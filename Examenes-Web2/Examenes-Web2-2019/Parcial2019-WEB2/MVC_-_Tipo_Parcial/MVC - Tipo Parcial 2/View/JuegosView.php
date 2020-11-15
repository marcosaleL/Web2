<?php
require_once './libs/smarty/Smarty.class.php';
class JuegosView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }
    // Mostrar juegos disponibles
    function showJuegos($juegos){
        $this->smarty->assign('titulo', 'Juegos');
        $this->smarty->assign('juegos', $juegos);
        $this->smarty->display('templates/Juegos.tpl');
    }

    // Mostrar form para agregar un juego
    function showFormAddJuego($error){
        $this->smarty->assign('titulo', 'Agregar juego');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/formAddJuego.tpl');
    }
}
?>