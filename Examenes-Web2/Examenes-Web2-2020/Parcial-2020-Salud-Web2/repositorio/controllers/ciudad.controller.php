<?php
require_once 'models/centro.model.php';
require_once 'models/ciudad.model.php';
require_once 'views/centro.view.php';
require_once 'views/ciudad.view.php';

class CiudadController{

    private $model;
    private $view;
    

    public function __construct() {
        $this->model = new CiudadModel();
        $this->view = new CiudadView();
    } 
    
    public function listarCiudadRiesgo(){

       $ciudades=$this->model->TraerCiudadRiesgo();
       $this->view->mostrarCiudadesRiesgo($ciudades);
       $contador=count($ciudades);
       $this->view->mostrarContador($contador);
    }

    public function formuCiudad(){        
        $this->view->mostrarFormularioCiudad(); 
    }

    public function agregarCiudad(){
        $ciudad= $_POST['ciudad']; 
        $riesgo=$_POST ['riesgo'];                
        if(empty($ciudad)){
            $this->view->errorfaltancampos();die;
        }        
        $ciudadRepetida= $this->model->traerCiudad($ciudad);      
            if(!empty($ciudadRepetida)){
                $this->view->errorCiudadRepetida();die;
            }             
        $this->model->agregarCiudad($ciudad,$riesgo);     
        $listaciudad=$this->model->traerlistaCiudades();        
        $this->view->mostrarCiudades($listaciudad);
    }

}