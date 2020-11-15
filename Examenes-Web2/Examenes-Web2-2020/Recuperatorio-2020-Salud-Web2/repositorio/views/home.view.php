<?php
require_once('libs/smarty/Smarty.class.php');

class HomeView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    public function mostrarCentros($centros){
       $this->smarty->assign('centros',$centros);
        $this->smarty->display('centros.tpl');     
    
    }

    public function mostrarCentrosMayor50($centros){
        $this->smarty->assign('centros',$centros);
        $this->smarty->display('centrosMayor50.tpl');    
    }

    public function mostrarCapacidadSistema( $camasSistema,$camasOcupadas, $capacidadSistema){
        $this->smarty->assign('camasSistema',$camasSistema);
        $this->smarty->assign('camasOcupadas',$camasOcupadas);
        $this->smarty->assign('capacidadSistema',$capacidadSistema);
        $this->smarty->display('capacidad.tpl');   

    }

    public function mostrarCentrosCiudad($centros,$centroCiudad){
        $this->smarty->assign('centros',$centros);
        $this->smarty->assign('centroCiudad',$centroCiudad);
        $this->smarty->display('centrosCiudad.tpl');     

    }
    
    public function mostrarFormulario($Ciudades){       
        $this->smarty->assign('listaciudades',$Ciudades);
        $this->smarty->display('formulario.tpl');
    }


}
