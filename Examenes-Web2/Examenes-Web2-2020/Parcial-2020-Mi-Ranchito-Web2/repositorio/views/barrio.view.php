<?php
require_once 'padre.view.php';
class BarrioView extends PadreView{

    public function mostrarBarrios($barrios){
        $this->smarty->assign('barrios',$barrios);
        $this->smarty->display('barrios.tpl');
    }


    public function mostrarContador($contador){
        $this->smarty->assign('cont',$contador);
        $this->smarty->display('contador.tpl');
    }


    public function mostrarFormuBarrio(){
        $this->smarty->display('formbarrios.tpl');
    }


    public function errorfaltancampos(){
        $this->smarty->assign("mensaje", "Complete todos los campos");   
        $this->smarty->display('error.tpl');
    } 


    public function errorBarrioRepetido(){
        $this->smarty->assign('mensaje',"El barrio está repetido");
        $this->smarty->display('error.tpl');
    }


    public function mostrar($barrios){
        $this->smarty->assign('barrios',$barrios);
        $this->smarty->display('todosbarrios.tpl');
    }    

}