<?php
require_once "./libs/smarty/Smarty.class.php";
class RepuestosView{
    // DECLARACIÓN DE ATRIBUTOS
    private $smarty;
    // CONSTRUCTOR
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }

    // Muestra un template con todos los repuestos
    function showRepuestos($repuestos){
        $this->smarty->assign('titulo', 'Repuestos');
        $this->smarty->assign('repuestos', $repuestos);
        $this->smarty->display('templates/Repuestos.tpl');
    }

    // Muestra un template con datos de un repuesto
    function showDatosRepuesto($repuesto){
        $this->smarty->assign('titulo', 'Repuesto');
        $this->smarty->assign('repuesto', $repuesto);
        $this->smarty->display('templates/Repuesto.tpl');
    }

    function showFormAddRepuesto($error){
        $this->smarty->assign('titulo', 'Agregar repuesto');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/formAddJuego.tpl');
    }
}
?>