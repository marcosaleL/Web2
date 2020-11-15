<?php
require_once 'padre.model.php';
class CiudadModel extends PadreModel{


    /* Trae las ciudades en zona de riesgo */   
    public function TraerCiudadRiesgo(){
        $sentencia = $this->db->prepare("SELECT *FROM ciudad WHERE zona_riesgo=1 " ); 
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;
    }

    public function traerlistaCiudades(){

        $sentencia = $this->db->prepare("SELECT *FROM ciudad" ); 
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;
    }

    public function agregarCiudad($nombre,$riesgo){
        $sql = "INSERT INTO ciudad(nombre,zona_riesgo) VALUES (?, ?)";
        $query = $this->db->prepare($sql);  
        $query->execute([$nombre, $riesgo]); 
    }

    public function traerCiudad($nombre){
        $sentencia = $this->db->prepare("SELECT *FROM ciudad WHERE nombre='$nombre' " ); 
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;
    }
}

?>