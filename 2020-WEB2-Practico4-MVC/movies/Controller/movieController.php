<?php

require_once ('./Model/movieModel.php');
require_once ('./View/movieView.php');

class movieController{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new movieModel();
        $this->view = new MovieView();
    }

    function getController(){
        if (!isset($_GET['genre']) || empty($_GET['genre'])) {
            $this->view->showError();
            die();
        }
    
        $genre = $_GET['genre'];
        // solicito las peliculas segun el genero al model
        
        $movies = $this->model->getMovies($genre);
        $cantidad = count($movies);
        // Envio la info al view
        $this->view->showMoviesByGenre($genre, $movies, $cantidad);
    }
    
    function getControllerAll(){
        $movies = $this->model->getAllMovies();
        $this->view->showMovies($movies);
    }

    function controllerStudio(){
        $genre = $_GET['studio'];
        $movies = $this->model->getDisney($genre);
        $this->view->showDisneyMovies($movies, $genre);
    }

    function controllerSearch(){
        $search = $_REQUEST['movie'];
        $movies = $this ->model->getSearch($search);
        $this ->view-> showMoviesBySearch($movies, $search);
    }

    function getVerify(){
        $buscador = $_REQUEST['buscador'];
        $exist = $this->model->verifyGenre($buscador);

        $this->view->showSearch($buscador, $exist);
    }

    function controllerInsert(){
        $title = $_POST['title'];
        $genero = $_POST['genero'];
        $studio = $_POST['studio'];
        $audience_score = $_POST['audience_score'];
        $profitability = $_POST['profitability'];
        $year = $_POST['year'];

        $this->model->newMovie($title, $genero, $studio, $audience_score,
        $profitability, $year);

        $this->view->insertMovie();
    }


}