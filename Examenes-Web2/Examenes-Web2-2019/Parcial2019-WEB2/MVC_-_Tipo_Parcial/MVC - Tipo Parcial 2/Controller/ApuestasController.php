<?php
include_once './Model/ApuestasModel.php';
include_once './Model/JuegosModel.php';
include_once './View/ApuestasView.php';

class ApuestasController{
    private $apuestasModel;
    private $apuestasView;

    public function __construct(){
        $this->apuestasModel = new ApuestasModel();
        $this->juegosModel = new JuegosModel();
        $this->apuestasView = new ApuestasView();
    }

    // Mostrar todas las apuestas con su juego
    function apuestas(){
        $apuestas = $this->apuestasModel->getApuestas();
        $this->apuestasView->showApuestas($apuestas);
    }

    // Mostrar form para agregar una apuesta
    function addApuesta(){
        $juegos = $this->juegosModel->getJuegos();
        $this->apuestasView->showFormAddApuesta($juegos);
    }

    // Agregar una apuesta
    function insertApuesta(){
        $fecha = $_POST['fecha'];
        $monto = $_POST['monto'];
        $id_juego = $_POST['id_juego'];
        echo $fecha;
        echo $monto;    
        echo $id_juego;        
        $this->apuestasModel->insertApuesta($fecha, $monto, $id_juego);
        header("Location: " . APUESTAS);
    }
}