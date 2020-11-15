<?php 
class CategoriasModel {
    // DECLARACIÓN DE ATRIBUTOS
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_parcial2019;charset=utf8', 'root', '');
    }

    // E - Devuelve una tabla con todos los datos de todas las categorías ordenadas por nombre ascendente
    function getCategorias(){
        $sentencia = $this->db->prepare('SELECT * FROM categoria order by nombre asc');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
}
?>

    