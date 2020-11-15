<?php
require_once './libs/smarty/Smarty.class.php';
class ApuestasView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }
    // Mostrar juegos disponibles
    function showApuestas($apuestas){
        $this->smarty->assign('titulo', 'Juegos');
        $this->smarty->assign('apuestas', $apuestas);
        $this->smarty->display('templates/Apuestas.tpl');
    }

    // Mostrar form para agregar un juego
    function showFormAddApuesta($juegos){
        $this->smarty->assign('titulo', 'Agregar apuesta');

        $this->smarty->assign('juegos', $juegos);

        $this->smarty->display('templates/formAddApuesta.tpl');
    }
}
?>