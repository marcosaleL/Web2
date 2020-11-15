<?php
require_once 'models/casa.model.php';
require_once 'models/barrio.model.php';
require_once 'views/casa.view.php';

class CasaController{

    private $model;
    private $view;
    private $modelbarrio;

    public function __construct() {
        $this->model = new CasaModel();
        $this->view = new CasaView();
        $this->modelbarrio = new BarrioModel();
    }

    public function listarCasas(){       
        $casas=$this->model->traer5Casas();                    
        $this->view->mostrarCasas($casas);        
    }

    public function formuCasas(){
        $id = $this->modelbarrio->traerlistaBarrios();      
        $this->view->mostrarFormuCasas($id);
    }

    public function agregarCasa(){          
        $estado= $_POST['estado']; 
        $direccion=$_POST ['direccion'];
        $habitacion=$_POST ['habitacion'];
        $dimension=$_POST ['dimension'];
        $precio=$_POST ['precio'];
        $idbarrio=$_POST['idbarrio'];
           
               
        if(empty($estado) || empty($direccion) || empty($habitacion)|| empty($dimension) || empty($precio) || empty($precio)){
    
            $this->view->errorfaltancampos();die;
        }
        if($estado!="nueva" && $estado!="usada" && $estado!="remodelada" ){
            $this->view->mostrarerrorEstado();die;
        }
        $casaRepetida= $this->model->traerCasa($estado,$direccion,$habitacion,$dimension,$precio,$idbarrio);
        if(!empty($casaRepetida)){
             $this->view->errorcasarepetida();die;
        }               
        $this->model->insertarCasa($estado,$direccion,$habitacion,$dimension,$precio,$idbarrio);     
        $listacasas=$this->model->traerlistacasas();        
        $this->view->mostrarTodas($listacasas); 
    }

    public function mostrarTodasCasas(){
        $listacasas=$this->model->traerlistacasas();        
        $this->view->mostrarTodas($listacasas); 
    }


    public function listarCasasporHabmenor3(){
        $listacasas=$this->model->traerlistacasasmenor();
        //var_dump($listacasas);die; 
        $this->view->mostrar($listacasas);
    }
    
    
    public function listarCasasporHabmayor3(){
        $listacasas=$this->model->traerlistacasasmayor();
        //var_dump($listacasas);die; 
        $this->view->mostrarmayor($listacasas);
    }
   
}

?>