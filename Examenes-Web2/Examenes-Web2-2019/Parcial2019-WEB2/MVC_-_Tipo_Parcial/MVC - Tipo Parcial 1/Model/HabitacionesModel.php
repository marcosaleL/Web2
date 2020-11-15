<?php 
class HabitacionesModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tipoparcial1;charset=utf8', 'root', '');
    }

    // Devuelve una tabla con todos los datos de todas las habitaciones
    function getHabitaciones(){
        $query = $this->db->prepare('SELECT * from habitacion ORDER BY nro_habitacion asc');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    // Inserta una habitación en la BDD
    function insertHabitacion($nro, $cant_camas, $descripcion, $ocupada){
        $query = $this->db->prepare('INSERT INTO habitacion(nro_habitacion, cant_camas, descripcion, ocupada) VALUES (?, ?, ?, ?)');
        $query->execute(array($nro, $cant_camas, $descripcion, $ocupada));
    }

    // Devuelve una tabla con todos los datos de todas las habitaciones disponibles
    function getHabitacionesDisponibles(){
        $query = $this->db->prepare('SELECT * from habitacion WHERE ocupada=false ORDER BY nro_habitacion asc');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    } 
}
?>