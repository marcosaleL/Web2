<?php
require_once 'libs/smarty/Smarty.class.php';
require_once 'view.padre.php';
class CiudView extends ViewPadre{
    

    public function mostrarCiudades($ciudad){
        $this->smarty->assign('ciudades',$ciudad);
        $this->smarty->display('ciudad.tpl');
    }


    public function mostrarContador($contador){
        $this->smarty->assign('cont',$contador);
        $this->smarty->display('contador.tpl');
    }


    public function mostrarForm(){       
        $this->smarty->display('formulario.tpl');
    }
    public function mostrarerror(){
        $this->smarty->assign('mensaje',"La ciudad está repetida");
        $this->smarty->display('error.tpl');
    }

    public function errorfaltancampos(){
        $this->smarty->assign('mensaje',"Complete todos los campos");
        $this->smarty->display('error.tpl');
    }
}

?>

