<?php 
class RepuestosModel {
    // DECLARACIÓN DE ATRIBUTOS
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_parcial2019;charset=utf8', 'root', '');
    }

    // 3 - Devuelve una tabla con datos de un repuesto (el id de la categoría no, no me parece necesario) y el nombre de la categoría de todos los repuestos -> no es necesario, el enunciado sólo pide hacer el view
    function getRepuestos(){
        // Agrego la columna tipo porque la preciso para comprobar en el view
        $sentencia = $this->db->prepare('SELECT repuesto.id_repuesto, repuesto.proovedor, repuesto.descripcion, repuesto.precio, categoria.nombre, categoria.tipo FROM repuesto JOIN categoria ON repuesto.id_categoria = categoria.id_categoria order by repuesto.id_repuesto asc');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    // A - Devuelve una tabla con datos de un repuesto (el id de la categoría no, no me parece necesario)) y el nombre de la categoría del repuesto
    function getDatosRepuesto($id_repuesto){
        $sentencia = $this->db->prepare('SELECT repuesto.id_repuesto, repuesto.proovedor, repuesto.descripcion, repuesto.precio, categoria.nombre FROM repuesto JOIN categoria ON repuesto.id_categoria = categoria.id_categoria WHERE repuesto.id_repuesto = ? order by repuesto.id_repuesto asc');
        $sentencia->execute(array($id_repuesto));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }    

    // B - Devuelve la cantidad de repuestos de una categoría -> podría ser sin tantas columnas.
    function getCountRepuestosByCategoria($id_categoria){
        $sentencia = $this->db->prepare('SELECT repuesto.id_categoria, categoria.nombre, COUNT(*) as cantidad_repuestos FROM repuesto JOIN categoria ON  repuesto.id_categoria = categoria.id_categoria WHERE repuesto.id_categoria = ? group by id_categoria');
        $sentencia->execute(array($id_categoria));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    
    // C - Devuelve una tabla con los productos cuyo precio sea mayor a 10000 -> podría ser sin tantas columnas.
    function getRepuestosConPrecioMayorAParametro($precio){
        $sentencia = $this->db->prepare('SELECT repuesto.id_repuesto, repuesto.proovedor, repuesto.descripcion, repuesto.precio, categoria.nombre FROM repuesto JOIN categoria ON repuesto.id_categoria = categoria.id_categoria WHERE repuesto.precio > 10000 order by repuesto.precio asc');
        $sentencia->execute(array($precio));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    // D - Devuelve una tabla con todos los productos de un cierto proveedor
    function getRepuestosByProovedor($proovedor){
        $sentencia = $this->db->prepare('SELECT repuesto.id_repuesto, repuesto.proovedor, repuesto.descripcion, repuesto.precio, categoria.nombre FROM repuesto JOIN categoria ON repuesto.id_categoria = categoria.id_categoria WHERE repuesto.proovedor = ? order by id_repuesto asc');
        $sentencia->execute(array($proovedor));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
}
?>