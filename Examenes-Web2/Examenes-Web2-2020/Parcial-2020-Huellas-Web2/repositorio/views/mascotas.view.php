<?php
 require_once 'libs/smarty/Smarty.class.php';
 require_once 'view.padre.php';
class MascotasView extends ViewPadre{   
   
       
     public function mostrarMascotas($mascotas){
        $this->smarty->assign('mascotas',$mascotas);
        $this->smarty->display('mascotas.tpl');

     }

     public function mostrarlistaMascotas($mascotas){
        $this->smarty->assign('mascotas',$mascotas);
        $this->smarty->display('listamascotas.tpl');

     }
     
     public function mostrarMascotasEstado($mascotas,$estado){
        $this->smarty->assign('mascotas',$mascotas);
        $this->smarty->assign('estado',$estado);
        $this->smarty->display('mascotasEstado.tpl');
     }

     public function errormascotarepetida(){
        $this->smarty->assign('mensaje',"La mascota está repetida");
        $this->smarty->display('error.tpl');
    }

    public function mostrarerrorEstado(){
        $this->smarty->assign('mensaje',"El estado no es el correcto, ingrese otro estado");
        $this->smarty->display('error.tpl');
    }

    public function mostrarForm($id){
        $this->smarty->assign("listaciudad", $id);   
        $this->smarty->display('formumascotas.tpl');
    }

    public function errorfaltancampos(){
        $this->smarty->assign("mensaje", "Complete todos los campos");   
        $this->smarty->display('errorcampos.tpl');
    }
       
  
}

?>