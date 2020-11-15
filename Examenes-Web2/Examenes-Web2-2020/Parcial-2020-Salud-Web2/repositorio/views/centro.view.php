<?php
require_once 'padre.view.php';
class CentroView extends PadreView{

   public function mostrarCentros($centros){
        $this->smarty->assign('centros',$centros);
        $this->smarty->display('centros.tpl');

   }

   public function mostrarTiposCentros($centros,$tipo){
        $this->smarty->assign('centros',$centros);
        $this->smarty->assign('tipo',$tipo);
        $this->smarty->display('tiposcentro.tpl');

   }

   public function mostrarFormularioCentro($id){
      $this->smarty->assign('listaciudades',$id);
      $this->smarty->display('formcentro.tpl');

   }

   public function errorfaltancampos(){
      $this->smarty->assign("mensaje", "Complete todos los campos");   
      $this->smarty->display('error.tpl');
  }

   public function mostrarerrortipoCentro(){
      $this->smarty->assign('mensaje',"El tipo de centro no es el correcto, ingrese otro tipo");
      $this->smarty->display('error.tpl');
  }

  public function errorCentroRepetido(){
      $this->smarty->assign('mensaje',"El centro está repetido");
      $this->smarty->display('error.tpl');
  }

  public function mostrarTodosCentros($centros){
      $this->smarty->assign('centros',$centros);
      $this->smarty->display('todosCentros.tpl');

   }
   
   
   


}