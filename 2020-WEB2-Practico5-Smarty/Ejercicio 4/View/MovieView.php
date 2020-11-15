<?php
require_once "./libs/smarty/Smarty.class.php";
class MovieView{ 
    //private $title;
    private $smarty;   

    function __construct(){
        $this->title = "Lista de Frutas";
        $this->smarty = new Smarty();
        //$this->$smarty->assign('basehref', BASE_URL);
    }
    function showHomeView(){   
        $this->smarty->assign('titulo', $this->title);  
        $this->smarty->display('templates/moviesForm.tpl'); 
    }
    
    function showMoviesView($movies){
        $estrella = '*';
        $this->smarty->assign('estrella', $estrella); 
        $this->smarty->assign('movies', $movies);           
        $this->smarty->display('templates/moviesList.tpl'); 
    }

    function showMoviesByStudioView($studio, $movies){
        $estrella = '*';
        $this->smarty->assign('estrella', $estrella); 
        $this->smarty->assign('movies', $movies);           
        $this->smarty->display('templates/studioMovies.tpl'); 
    }

    function showMoviesByGenreView($genre, $movies){
        $this->smarty->assign('movies', $movies);           
        $this->smarty->display('templates/genreMovies.tpl'); 
    }

    function showSearchOfGenre($genre, $movies){
        $this->smarty->assign('genre', $genre);
        $this->smarty->assign('movies', $movies);             
        $this->smarty->display('templates/searchGenre.tpl'); 
    }

    function showMoviesByCount($movies){
        $this->smarty->assign('movies', $movies);             
        $this->smarty->display('templates/countByGenre.tpl');
    }
}
?>

