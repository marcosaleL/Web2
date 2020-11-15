<?php
require_once "./libs/smarty/Smarty.class.php";
class FormView {
    // DECLARACIÓN DE ATRIBUTOS
        private $smarty;

    // CONSTRUCTOR
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }
    // MOSTRAR HOME
    function showFormView($nombre = "", $mail =" "){
        $this->smarty->assign('titulo',"Form");
        $this->smarty->assign('nombre', $nombre);
        $this->smarty->assign('mail', $mail);
        $this->smarty->display('templates/Form.tpl');
    }
    function showFormWithPipes($nombre, $mail){
        $this->smarty->assign('titulo',"Form");
        $this->smarty->assign('nombre', $nombre);
        $this->smarty->assign('mail', $mail);
        $this->smarty->display('templates/FormWithPipes.tpl');
    }
}
?>