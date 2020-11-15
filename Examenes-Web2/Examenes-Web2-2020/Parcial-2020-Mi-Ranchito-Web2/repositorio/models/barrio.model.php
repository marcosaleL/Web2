<?php
require_once 'padre.model.php';
class BarrioModel extends PadreModel{

    /* Trae todas los barrios */
    public function traerlistaBarrios(){
        $sentencia = $this->db->prepare("SELECT * FROM barrio" );
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;
    }

    /* Trae los barrios residenciales*/
    public function traerBarriosRes(){
        $sentencia = $this->db->prepare("SELECT *FROM barrio WHERE residencial=1" );     
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;
    }

    /*trae el barrio con un nombre determinado*/
    public function traerBarrio($nombre){
        $sentencia = $this->db->prepare("SELECT * FROM barrio WHERE nombre='$nombre'" );
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;

    }

    /*Inserta un barrio en la tabla barrio de la base de datos*/
    public function insertarBarrio($nombre,$residencial){
        $sql = "INSERT INTO barrio(nombre,residencial) VALUES (?, ?)";
        $query = $this->db->prepare($sql);  
        $query->execute([$nombre, $residencial]); 
    }

    
   
}

?>