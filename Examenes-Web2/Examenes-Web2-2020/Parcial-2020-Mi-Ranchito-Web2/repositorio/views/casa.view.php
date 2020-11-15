<?php
require_once 'padre.view.php';
class CasaView extends PadreView{

    public function mostrarCasas($casas){
        $this->smarty->assign('casas',$casas);
        $this->smarty->display('casas.tpl');

     }

     public function mostrarFormuCasas($id){
        $this->smarty->assign("listabarrio", $id); 
        $this->smarty->display('formcasas.tpl');
     }

     public function errorfaltancampos(){
        $this->smarty->assign("mensaje", "Complete todos los campos");   
        $this->smarty->display('error.tpl');
    }

     public function mostrarerrorEstado(){
        $this->smarty->assign('mensaje',"El estado no es el correcto, ingrese otro estado");
        $this->smarty->display('error.tpl');
    }

    public function errorcasarepetida(){
        $this->smarty->assign('mensaje',"La casa está repetida");
        $this->smarty->display('error.tpl');
    }

    public function mostrarTodas($casas){
        $this->smarty->assign('casas',$casas);
        $this->smarty->display('todascasas.tpl');

     }
     public function mostrar($casas){
        $this->smarty->assign('casas',$casas);
        $this->smarty->display('casashab.tpl');

    }

    public function mostrarmayor($casas){
        $this->smarty->assign('casas',$casas);
        $this->smarty->display('casahabmayor3.tpl');

}


}