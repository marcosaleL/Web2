<?php
require_once 'padre.model.php';
class CiudadModel extends PadreModel{


    /* Trae todos las ciudades*/

    public function traerCiudades(){
        $sentencia = $this->db->prepare("SELECT *FROM ciudad " );
        $sentencia->execute(); // ejecuta -
        $respuesta= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta   
        return $respuesta;       
    }
}