<?php
require_once './Model/MovieModel.php';
require_once './View/MovieView.php';

class MovieController{
    private $model;
    private $view;
    //Defino el constructor para el Controller 
    public function __construct() {
        $this->model = new MovieModel();
        $this->view = new MovieView();
    }
    //Mostrar home
    function showHome(){
        $this->view->showHomeView();
     }
    //Mostrar todas las películas
    function showAllMovies() {
        $movies = $this->model->getMovies();
        $this->view->showMoviesView($movies);
    }    
    //Mostrar películas por género
    function showMoviesByGenre() {
        if(isset($_GET["genre"])){  
            $genre=$_GET["genre"];}
        $movies = $this->model->getMoviesByGenero($genre);
        $this->view->showMoviesByGenreView($genre, $movies);
    }
    //Mostrar películas por estudio
    function showMoviesByStudio(){
        if(isset($_GET["studio"])){  
            $studio=$_GET["studio"];} 
        $movies = $this->model->getMoviesByStudio($studio);
        $this->view->showMoviesByStudioView($studio, $movies);
    }
    //Mostrar la cantidad de películas por género
    function countMoviesByGenre(){  
        $movies = $this->model->showCountByGenre();
        $this->view->showMoviesByCount($movies);
    }
    //Buscar género
    function searchGenre(){ 
        if(isset($_GET["searchGenre"])){  
            $genre=$_GET["searchGenre"];} 
        $movies = $this->model->searchGenreByName($genre);
        $this->view->showSearchOfGenre($genre, $movies);
    }
    //Insertar película dentro de la tabla y mostrar la lista de la tabla actualizada
    function insertMovie(){
        $id = $_POST['id'];
        $titulo = $_POST['title'];
        $genero = $_POST['genre'];
        $estudio = $_POST['studio'];
        $audiencia = $_POST['audience_score'];
        $rentabilidad = $_POST['profitability'];
        $año = $_POST['year'];
        $this->model->insertMovies($id, $titulo, $genero, $estudio, $audiencia, $rentabilidad, $año);
        $movies = $this->model->getMovies();
        $this->view->showMoviesView($movies);
     }     
}

?>