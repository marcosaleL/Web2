<?php
require_once 'padre.model.php';
class CentroModel extends PadreModel{


    /* Trae todos los centros de salud junto a su ciudad */

    public function  traerCentros(){
        $sentencia = $this->db->prepare("SELECT centro.tipo, centro.nombre_centro, centro.cant_camas, centro.cant_camas_ocupadas, ciudad.nombre  
                                        FROM centro INNER JOIN ciudad ON ciudad.id_ciudad=centro.id_ciudad_fk   " );
        $sentencia->execute(); // ejecuta -
        $respuesta= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta   
        return $respuesta;       
    }

    public function  traerCentrosMayor50(){
        $sentencia = $this->db->prepare(
            "SELECT centro.tipo, centro.nombre_centro, centro.cant_camas,centro.cant_camas_ocupadas, ciudad.nombre ,ciudad.zona_riesgo
            FROM centro INNER JOIN ciudad ON ciudad.id_ciudad=centro.id_ciudad_fk WHERE centro.cant_camas_ocupadas>50 and ciudad.zona_riesgo=1" );
        $sentencia->execute(); // ejecuta -
        $respuesta= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta   
        return $respuesta;       
    }

    public function traerTodasCamas(){
        $sentencia = $this->db->prepare(
            "SELECT centro.cant_camas,centro.cant_camas_ocupadas
            FROM centro " );
        $sentencia->execute(); // ejecuta -
        $respuesta= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta   
        return $respuesta;    
    }

    public function traerCentrosCiudad($centrosCiudad){
        $sentencia = $this->db->prepare(
            "SELECT centro.tipo, centro.nombre_centro, centro.cant_camas,centro.cant_camas_ocupadas 
            FROM centro INNER JOIN ciudad ON ciudad.id_ciudad=centro.id_ciudad_fk WHERE  ciudad.nombre='$centrosCiudad' " );
        $sentencia->execute(); // ejecuta -
        $respuesta= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta   
        return $respuesta;    
    }
}

?>