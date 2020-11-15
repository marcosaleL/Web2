<?php
class JuegosModel {
    // DECLARACIÓN DE ATRIBUTOS
    private $db;
    // CONSTRUCTOR
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tipoparcial2;charset=utf8', 'root', '');
    }

    // Devuelve una tabla con todos los juegos disponibles
    function getJuegos(){
        $query = $this->db->prepare('SELECT * FROM juego ORDER BY nombre ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    // Agrega un juego
    function insertJuego($nombre, $cantJugadores, $tipoDeJuego){
        $sentencia = $this->db->prepare('INSERT INTO juego(nombre, cantidad_jugadores, juego_de_cartas) VALUES(?,?,?)');
        $sentencia->execute(array($nombre, $cantJugadores, $tipoDeJuego));
    }
    
    // Elimina un juego
    function deleteJuego($idJuego){
        $sentencia = $this->db->prepare('DELETE FROM juego WHERE id= ?' );
        $sentencia->execute(array($idJuego));
    }      
}
?>