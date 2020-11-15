<?php
 require_once 'views/mascotas.view.php';
 require_once 'models/example.model.php';
class MascotasController{

    private $model;
    private $view;


    public function __construct() {
        $this->model = new ExampleModel();
        $this->view = new MascotasView();
    }


    public function listarMascotas(){
        $mascotas=$this->model->getMascotas();         
        $this->view->mostrarMascotas($mascotas);  
    }

    public function listarMascotasPorEstado($estado){
        $mascotas=$this->model->getMascotasEstado($estado); 
        //var_dump($mascotas);die;          
        $this->view->mostrarMascotasEstado($mascotas,$estado); 
    }

    public function agregarMascotas(){
        $edad=$_POST['edad'];
        $estado= $_POST['estado'];  
        $id_ciudad=$_POST['id_ciudad'];
        //var_dump($id_ciudad);die;
        $nombre_mascota= $_POST['mascota'];        
        if(empty($edad) || empty($estado) || empty($id_ciudad)|| empty($nombre_mascota)){

            $this->view->errorfaltancampos();die;
        }
        if($estado!="perdido" && $estado!="encontrado" && $estado!="adopcion" ){
            $this->view->mostrarerrorEstado();
            die;
        }
        $mascRepetida= $this->model->getmascota($edad,$estado,$nombre_mascota,$id_ciudad);  
       
            if(!empty($mascRepetida)){
                $this->view->errormascotarepetida();die;
            } 
             
        $this->model->insertarMascota($edad,$estado,$nombre_mascota,$id_ciudad);     
        $listamascotas=$this->model->getlistamascotas(); 
        //var_dump($listamascotas);die;       
        $this->view->mostrarlistaMascotas($listamascotas); 
    }   
        

    public function formMascotas(){
        $id = $this->model->getCiudadparaformu();
       // var_dump($id);die;
        $this->view->mostrarForm($id);
    }
    
    

       
    
}


?>