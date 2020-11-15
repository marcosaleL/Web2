<?php
class ApuestasModel {
    // DECLARACIÓN DE ATRIBUTOS
    private $db;
    // CONSTRUCTOR
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tipoparcial2;charset=utf8', 'root', '');
    }

    // Devuelve una tabla con todos los juegos disponibles
    function getApuestas(){
        $query = $this->db->prepare('SELECT *,juego.nombre FROM apuesta JOIN juego ON apuesta.id_juego = juego.id');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    // Agrega una apuesta <- a fecha lo tomé con string para hacerlo más rápido
    function insertApuesta($fecha, $monto, $id_juego){
        $sentencia = $this->db->prepare('INSERT INTO apuesta(fecha, monto, id_juego) VALUES(?,?,?)');
        $sentencia->execute(array($fecha, $monto, $id_juego));
    }
        
}
?>