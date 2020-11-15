<?php
include_once './Model/HabitacionesModel.php';
include_once './View/HabitacionesView.php';

class HabitacionesController{
    private $habitacionesModel;
    private $habitacionesView;

    public function __construct(){
        $this->habitacionesModel = new HabitacionesModel();
        $this->habitacionesView = new HabitacionesView();
    }

    // Mostrar habitaciones
    function habitaciones(){
        $habitaciones = $this->habitacionesModel->getHabitaciones();
        $this->habitacionesView->showHabitaciones($habitaciones);
    }

    // Agregar habitación
    function addHabitacion(){
        // Asumo que el id es autoincremental/automático y que el número de habitación es indiferente. 
        // Por ejemplo, las habitaciones van de 100 a 150 en el primer piso -> la habitación 200 tendría el id 151.
        $nro = $_POST['nro_habitacion'];
        $cant_camas = $_POST['cant_camas'];
        $descripcion = $_POST['descripcion'];
        $ocupada = false; // Defino por default que la habitación arranque vacía porque la agrego al sistema.
        $this->habitacionesModel->insertHabitacion($nro, $cant_camas, $descripcion, $ocupada);
        header("Location: " . HABITACIONES);
    }

    // Mostrar habitaciones disponibles
    function habitacionesDisponibles(){
        $habitacionesDisponibles = $this->habitacionesModel->getHabitacionesDisponibles();
        $this->habitacionesView->showHabitaciones($habitacionesDisponibles);
    }
}
?>