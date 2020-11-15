<?php
require_once 'models/centro.model.php';
require_once 'models/ciudad.model.php';
require_once 'views/home.view.php';


class CentroController{

    private $model;
    private $view;
    private $ciudadmodel;
   
    

    public function __construct() {
        $this->model = new CentroModel();
        $this->view = new HomeView();
        $this->ciudadmodel = new CiudadModel();
        
       
    }

    public function listarCentros(){
        $centros=$this->model->traerCentros(); 
        //var_dump($centros);die;                   
        $this->view->mostrarCentros($centros);        
        
    }

    public function listarCentrosMayor50(){
        $centros=$this->model->traerCentrosMayor50(); 
        //var_dump($centros);die;                   
        $this->view->mostrarCentrosMayor50($centros);      
    }

    public function Capacidad_Sistema(){
        $camasTotales=$this->model->traerTodasCamas();
        //var_dump($camasTotales);die;
        $camasSistema=0;
        $camasOcupadas=0;
        foreach($camasTotales as $camas){
            $camasSistema=$camasSistema+$camas->cant_camas;
            $camasOcupadas=$camasOcupadas+$camas->cant_camas_ocupadas;
        }
        $capacidadSistema= $camasSistema-$camasOcupadas;
        $this->view->mostrarCapacidadSistema( $camasSistema,$camasOcupadas, $capacidadSistema);
    }

    public function CentrosdelaCiudad(){
        $Ciudad=$_POST['idciudad'];
        //var_dump($Ciudad);die; 
        $centros=$this->model->traerCentrosCiudad($Ciudad);
        //var_dump($centros);die;   
        $this->view->mostrarCentrosCiudad($centros,$Ciudad);
    }

    public function formulario(){
        $ciudades=$this->ciudadmodel->traerCiudades(); 
        //var_dump($ciudades);die;
        $this->view->mostrarFormulario($ciudades);
    }
}