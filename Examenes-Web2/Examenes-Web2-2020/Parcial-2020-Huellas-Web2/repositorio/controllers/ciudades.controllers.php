<?php
require_once 'models/example.model.php';
require_once 'views/ciudad.view.php';

class CiudController{

    private $model;
    private $view;

    public function __construct() {
        $this->model = new ExampleModel();
        $this->view = new CiudView();
    }
    public function listarCiudades(){
        $ciudad=$this->model->getCiudad();  
       // var_dump($ciudad);die;    
        $contador=count($ciudad) ; 
        $this->view->mostrarCiudades($ciudad);
        $this->view->mostrarContador($contador);
        
    }

    public function insertarCiudades(){
        $ciudad=$_POST['ciudad'];
        $sede= $_POST['sede'];
        //var_dump($ciudad,$sede);die;
        if(empty($ciudad)){

            $this->view->errorfaltancampos();die;
        }
        $ciudadrepetida = $this->model->getciudades($ciudad,$sede);
        //var_dump($ciudadrepetida);die;  
            if(!empty($ciudadrepetida)){
               $this->view->mostrarerror();
                die;
            }           
        
        $this->model->insertaciudad($ciudad,$sede);
        $ciudades= $this->model->getciudad();
        $this->view->mostrarCiudades($ciudades);
       
    }     
   
    
    public function formCiudades(){       
            
            $this->view->mostrarForm();
            
        
    }
}


?>