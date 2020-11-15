<?php
require_once 'models/casa.model.php';
require_once 'models/barrio.model.php';
require_once 'views/casa.view.php';
require_once 'views/barrio.view.php';

class BarrioController{

    private $model;
    private $view;
    

    public function __construct() {
        $this->model = new BarrioModel();
        $this->view = new BarrioView();
       
    }

    public function listarBarriosRes(){       
        $barrios=$this->model->traerBarriosRes();           
        $contador=count($barrios);      
        $this->view->mostrarBarrios($barrios);                        
        $this->view->mostrarContador($contador);       
        
    }


    public function formuBarrio(){
        $this->view->mostrarFormuBarrio();
    }


    public function agregarBarrio(){
        $nombre= $_POST['nombre']; 
        $residencial=$_POST ['residencial'];           
        if(empty($nombre)){
            $this->view->errorfaltancampos();die;
        }        
        $barrioRepetido= $this->model->traerBarrio($nombre);      
            if(!empty($barrioRepetido)){
                $this->view->errorBarrioRepetido();die;
            }             
        $this->model->insertarBarrio($nombre,$residencial);     
        $listabarrios=$this->model->traerlistaBarrios();        
        $this->view->mostrar($listabarrios);
    }

    
}