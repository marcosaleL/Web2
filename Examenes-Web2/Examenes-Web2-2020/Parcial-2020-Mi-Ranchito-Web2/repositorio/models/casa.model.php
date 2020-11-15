<?php
require_once 'padre.model.php';
class CasaModel extends PadreModel{


    /* Trae las últimas 5 casas con su barrio*/
    public function traer5Casas(){
        $sentencia = $this->db->prepare("SELECT casa.estado, casa.direccion, casa.cantidad_habitaciones ,
                                                casa.dimension_terreno, casa.precio ,barrio.nombre
        FROM casa INNER JOIN barrio ON barrio.id=casa.id_barrio_fk ORDER BY casa.id DESC LIMIT 5" );
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta   
        return $query;       
    }


    /* Trae todas las casas */
    public function traerlistacasas(){
        $sentencia = $this->db->prepare("SELECT *FROM casa " ); 
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;
    }

    /*ingresa una casa la tabla casa*/
    public function insertarCasa($estado,$direccion,$habitacion,$dimension,$precio,$idcasa){
        $sql = "INSERT INTO casa(estado,direccion,cantidad_habitaciones,dimension_terreno,precio,id_barrio_fk) VALUES (?, ?, ?, ?,?,?)"; 
        $query = $this->db->prepare($sql); 
        $query->execute([$estado,$direccion,$habitacion,$dimension,$precio,$idcasa]);
    }

    public function traerCasa($estado,$direccion,$habitacion,$dimension,$precio,$idbarrio){
        $sentencia = $this->db->prepare("SELECT * FROM casa WHERE estado='$estado'and direccion='$direccion'and
        cantidad_habitaciones=$habitacion and dimension_terreno='$dimension' and precio=$precio and id_barrio_fk=$idbarrio" );
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;
    }

    /*Trae las casas con igual o menos de 3 habitaciones*/
    public function traerlistacasasmenor(){
        $sentencia = $this->db->prepare("SELECT *FROM casa WHERE cantidad_habitaciones<=3 " ); 
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;
    }


    /*Trae las casas con más de 3 habitaciones*/
    public function traerlistacasasmayor(){
        $sentencia = $this->db->prepare("SELECT *FROM casa WHERE cantidad_habitaciones>3 " ); 
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;
    }


}

?>