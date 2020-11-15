<?php
require_once 'padre.view.php';
class CiudadView extends PadreView{

    public function mostrarCiudadesRiesgo($ciudades){
        $this->smarty->assign('ciudades',$ciudades);
        $this->smarty->display('ciudades.tpl');

    }

    public function mostrarContador($contador){
        $this->smarty->assign('cont',$contador);
        $this->smarty->display('contador.tpl');
    }

    public function mostrarFormularioCiudad(){
        $this->smarty->display('formciudad.tpl');
    }

    public function errorfaltancampos(){
        $this->smarty->assign("mensaje", "Complete todos los campos");   
        $this->smarty->display('error.tpl');
    }
  
     
  
    public function errorCiudadRepetida(){
        $this->smarty->assign('mensaje',"La ciudad está repetida");
        $this->smarty->display('error.tpl');
    }

    public function mostrarCiudades($ciudades){
        $this->smarty->assign('ciudades',$ciudades);
        $this->smarty->display('listaciudades.tpl');

    }

   


}