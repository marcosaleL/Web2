<?php
require_once 'model.padre.php';

class ExampleModel extends ModelPadre {
    /** 
    private $db;

    public function __construct() {
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'db_huellas'; //db_covid o db_ranchito 

        // 1. abro la conexión con MySQL 
        try {
            $this->db = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);            
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (Exception $e) {
            var_dump($e);
        }
    }
    */
    /* Trae las ciudade que tengan sede*/
    public function getCiudad(){
        $sentencia = $this->db->prepare("SELECT *FROM ciudad WHERE SEDE=1" );     

        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;
    }

    public function getCiudadparaformu(){
        $sentencia = $this->db->prepare("SELECT *FROM ciudad " );     

        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;
    }

    public function getCiudades($ciudad,$sede){
        $sentencia = $this->db->prepare("SELECT * FROM ciudad WHERE nombre_ciudad='$ciudad' and sede=$sede" );     

        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;

    }

    /* Inserta una ciudad*/
    public function insertaciudad($ciudad, $sede){
        $sql = "INSERT INTO ciudad(nombre_ciudad,sede) VALUES (?, ?)";
        $query = $this->db->prepare($sql);  
        $query->execute([$ciudad, $sede]); 
    }


    /* Trae las últimas 3 mascotas con su ciudad*/
    public function getMascotas(){
        $sentencia = $this->db->prepare("SELECT mascota.edad, mascota.estado, mascota.nombre , ciudad.nombre_ciudad 
        FROM mascota INNER JOIN ciudad ON ciudad.id_ciudad=mascota.id_ciudad_fk ORDER BY mascota.id_mascota DESC LIMIT 3" );
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta   
        return $query;
       
    }

    /* Trae las mascotas segun suestado */
    public function getMascotasEstado($estado){
        $sentencia = $this->db->prepare("SELECT mascota.edad,  mascota.nombre ,ciudad.nombre_ciudad
        FROM mascota INNER JOIN ciudad ON ciudad.id_ciudad=mascota.id_ciudad_fk WHERE mascota.estado=? ORDER BY mascota.id_mascota DESC " );
        $sentencia->execute([$estado]); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta   
        return $query;
       
    }

    public function insertarMascota($edad,$estado,$nombre_mascota,$id_ciudad){
        $sql = "INSERT INTO mascota(edad,estado,nombre,id_ciudad_fk) VALUES (?, ?, ?, ?)"; 
        $query = $this->db->prepare($sql); 
        $query->execute([$edad,$estado,$nombre_mascota,$id_ciudad]); 

    }

    public function getlistamascotas(){
        $sentencia = $this->db->prepare("SELECT mascota.edad, mascota.estado, mascota.nombre , ciudad.nombre_ciudad 
        FROM mascota INNER JOIN ciudad ON ciudad.id_ciudad=mascota.id_ciudad_fk ORDER BY mascota.id_mascota DESC " );
        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta   
        return $query;

    }
    public function getmascota($edad,$estado,$nombre,$idciudad){
        $sentencia = $this->db->prepare("SELECT * FROM mascota WHERE edad=$edad and estado='$estado' and nombre='$nombre' and id_ciudad_fk=$idciudad" );     

        $sentencia->execute(); // ejecuta -
        $query= $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $query;

    }

}