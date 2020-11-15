<?php
require_once 'models/centro.model.php';
require_once 'models/ciudad.model.php';
require_once 'views/centro.view.php';
require_once 'views/ciudad.view.php';

class CentroController{

    private $model;
    private $view;
    private $modelciudad;
    

    public function __construct() {
        $this->model = new CentroModel();
        $this->view = new CentroView();
        $this->modelciudad = new CiudadModel();
       
    }

    public function listarCentros(){
        $centros=$this->model->traerCentrosMayor70();                    
        $this->view->mostrarCentros($centros);        
        
    }

    public function listarCentroHospital(){
        $centros=$this->model->traerCentrosHospitales();
        $tipo='hospital';                    
        $this->view->mostrarTiposCentros($centros,$tipo);        
        
    }

    public function listarCentroClinica(){
        $centros=$this->model->traerCentrosClinicas();
        $tipo='clinica';               
        $this->view->mostrarTiposCentros($centros,$tipo);        
        
    }

    public function listarCentroSanatorio(){
        $centros=$this->model->traerCentrosSanatorios(); 
        $tipo='sanatorio';                    
        $this->view->mostrarTiposCentros($centros,$tipo);        
        
    }

    public function formuCentro(){
        $id = $this->modelciudad->traerlistaCiudades();
        var_dump($id);die;
        $this->view->mostrarFormularioCentro($id); 
    }

    public function agregarCentro(){

        $tipo= $_POST['tipo']; 
        $nombre=$_POST ['nombre'];
        $cant_camas=$_POST ['cantidad'];
        $ocupacion=$_POST ['ocupacion'];
        $idciudad=$_POST ['idciudad'];                       
        if(empty($tipo) || empty($nombre) || empty($cant_camas)|| empty($ocupacion) || empty($idciudad)){
    
            $this->view->errorfaltancampos();die;
        }
        if($tipo!="hospital" && $tipo!="clinica" && $tipo!="sanatorio" ){
            $this->view->mostrarerrortipoCentro();die;
        }
        $centroRepetido= $this->model->traerCentro($tipo,$nombre);
       
        if(!empty($centroRepetido)){
             $this->view->errorCentroRepetido();die;
        }               
        $this->model->insertarCentro($tipo,$nombre,$cant_camas,$ocupacion,$idciudad);     
        $listacentros=$this->model->traerlistacentros();          
        $this->view->mostrarTodosCentros($listacentros); 
    }
    
}

?>
