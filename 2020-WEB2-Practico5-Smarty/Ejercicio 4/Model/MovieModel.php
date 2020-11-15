<?php

class MovieModel{
    private $db;
    //Defino el constructor para la BDD
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_movies;charset=utf8', 'root', '');
    }
    //Obtener todas las películas
    function getMovies() {
        $query = $this->db->prepare('SELECT * FROM movies ORDER BY title');
        $query->execute();
        $movies = $query->fetchAll(PDO::FETCH_OBJ);
        return $movies;
    }
    //Obtener todos los nombres de los géneros (sin repetirse)
    function getGeneros(){
        $sentencia = $this->db->prepare("SELECT genre as genero FROM `movies` group by genre");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    //Obtener las películas de cada género
    function getMoviesByGenero($genre) {
        $query = $this->db->prepare('SELECT * FROM movies WHERE genre = ?');
        $query->execute(array($genre));
        $movies = $query->fetchAll(PDO::FETCH_OBJ);
        return $movies;
    }
    //Obtener las películas de cada estudio
    function getMoviesByStudio($studio) {
        $query = $this->db->prepare("SELECT * FROM `movies` where studio = ?");
        $query->execute(array($studio));
        $movies = $query->fetchAll(PDO::FETCH_OBJ);
        return $movies;
    }    
    //Obtener la cantidad de películas por cada género
    function showCountByGenre() {
        $query = $this->db->prepare('SELECT genre, COUNT(*) as cantidad FROM movies group by genre');
        $query->execute();
        $movies = $query->fetchAll(PDO::FETCH_OBJ);
        return $movies;
    }
    //Obtener todos los géneros que coincidan con el género indicado por parámetro
    function searchGenreByName($genre) {
        $generoABuscar = $genre;
        $query = $this->db->prepare("SELECT * FROM movies WHERE genre like '%$generoABuscar%'");
        $query->execute();
        $movies = $query->fetchAll(PDO::FETCH_OBJ);
        return $movies;
    }
    //Insertar película dentro de la tabla
    function insertMovies($id, $titulo, $genero, $estudio, $audiencia, $rentabilidad, $año){
        $sentencia = $this->db->prepare("INSERT INTO movies(id, title, genre, studio, audience_score, profitability, year) VALUES (?,?,?,?,?,?,?)");
        //var_dump($sentencia);
        $sentencia->execute(array($id, $titulo, $genero, $estudio, $audiencia, $rentabilidad, $año));
    }     
}


?>