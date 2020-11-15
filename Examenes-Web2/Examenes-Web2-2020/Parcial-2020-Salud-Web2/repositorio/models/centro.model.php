<?php
require_once 'padre.model.php';
class CentroModel extends PadreModel{


    /* Trae los centros con riesgo mayor a 70% */

    public function  traerCentrosMayor70(){
        $sentencia = $this->db->prepare(
            "SELECT centro.tipo, centro.nombre_centro, centro.cant_camas,centro.ocupacion, ciudad.nombre 
            FROM centro INNER JOIN ciudad ON ciudad.id=centro.id_ciudad_fk WHERE centro.ocupacion>=70  " );
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta   
        return $query;       
    }

    public function traerCentrosHospitales(){
        $sentencia = $this->db->prepare("SELECT *FROM centro WHERE tipo='hospital' " ); 
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;
    }

    public function traerCentrosClinicas(){
        $sentencia = $this->db->prepare("SELECT *FROM centro WHERE tipo='clinica' " ); 
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;
    }

    public function traerCentrosSanatorios(){
        $sentencia = $this->db->prepare("SELECT *FROM centro WHERE tipo='sanatorio' " ); 
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;
    }
    /* Trae un centro con su tipo y nombre*/
    public function traerCentro($tipo,$nombre){
        $sentencia = $this->db->prepare("SELECT *FROM centro WHERE tipo='$tipo' and nombre_centro='$nombre' " ); 
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;
    }
    /*Ingresa un centro*/
    public function insertarCentro($tipo,$nombre,$cant_camas,$ocupacion,$idciudad){
        $sql = "INSERT INTO centro(tipo, nombre_centro,cant_camas, ocupacion,id_ciudad_fk) VALUES (?, ?, ?, ?,?)"; 
        $query = $this->db->prepare($sql); 
        $query->execute([$tipo,$nombre,$cant_camas,$ocupacion,$idciudad]);
    }
    /* Trae todos los centros*/
    public function traerlistacentros(){
        $sentencia = $this->db->prepare("SELECT *FROM centro" ); 
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;
    }
}

?>