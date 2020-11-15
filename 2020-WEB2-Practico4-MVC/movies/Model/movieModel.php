<?php

require_once './Controller/movieController.php';
require_once './View/movieView.php';


class MovieModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_movies;charset=utf8', 'root', '');
    }

    function getMovies($genre){
        // obtiene la lista de peliculas de la DB según género
        $query = $this->db->prepare('SELECT * FROM movies WHERE genre = ?');
        $query->execute([$genre]);
        $movies = $query->fetchAll(PDO::FETCH_OBJ);

        //echo "<a href='index.html'> Volver </a>";
        return $movies;
        
    }

    function getDisney($studio){
        $query = $this->db->prepare("SELECT * FROM movies WHERE studio = 'Disney'");
        $query->execute([$studio]);
        $studio = $query->fetchAll(PDO::FETCH_OBJ);
        
        echo "<a href='index.html'> Volver </a>";
    
        return $studio;
    }
    
    function getAllMovies(){
        $query = $this->db->prepare('SELECT * FROM movies');
        $query->execute();
    
        $movies = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $movies;
    }

    function getSearch($search){
        $query = $this->db->prepare("SELECT * FROM movies WHERE title like '%$search%'");
        $query -> execute([$search]);
        $search = $query->fetchAll(PDO::FETCH_OBJ);

        return $search;
    }

    function verifyGenre($buscador){
        $query = $this->db->prepare("SELECT genre FROM movies WHERE genre like '%$buscador%'");
        $query->execute([$buscador]);
        $exist = false;


        $datos = $query->rowCount();

        // Cuenta las filas afectadas en la búsqueda, si los resultados coinciden filas va a ser mayor
        // que 0, entonces $exist devuelve true.
        if ($datos>0){
            $exist = true;
        } 

        return $exist;
    }

    function newMovie($title, $genero, $studio, $audience_score,
    $profitability, $year){
        $query = $this->db->prepare('INSERT into movies (title, genre, studio, audience_score, 
        profitability, year) VALUES (?,?,?,?,?,?)');

        $query->execute(array($title, $genero, $studio, $audience_score,
        $profitability, $year));


    }


}