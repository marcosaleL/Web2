<?php

require_once "./Controller/movieController.php";

class MovieView{

    function showMoviesByGenre($genre, $movies, $cantidad){
        echo "<h1>Lista por género: $genre</h1>";
        echo "<h2>Cantidad: $cantidad </h2>";
        $this->showMovies($movies);
    }

    function showDisneyMovies($movies, $studio){
        echo "<h1>Lista por género: $studio</h2>";
        $this->showMovies($movies);
    }

    function showMoviesBySearch($movies, $search){
        echo "<h1>Busqueda: $search</h1>";
        $this->showMovies($movies);
    }

    function showMovies($movies){
        echo '<table>
            <thead>
                <tr>
                <th>Título</th>
                    <th>Año</th>
                    <th>Estudio</th>
                    <th>Puntaje</th>
                </tr>
            <thead>
            <tbody>';
        foreach($movies as $movie) {
            echo "
                    <tr>
                        <td>$movie->title</td>
                        <td>$movie->year</td>
                        <td>$movie->studio</td>";
                        if($movie->audience_score > '85'){
                           echo "<td>$movie->audience_score . *</td>";
                        } else{
                            echo "<td>$movie->audience_score</td>";
                        }
                    "</tr>";
        }
        echo " </tbody>    
            </table>";
    }

    function showError(){
        echo "<h2>Error! Género no especificado.</h2>";
    }

    function showSearch($buscador, $exist){
        echo "<h2> Resultados para $buscador </h2>";
        if ($exist == true){
            echo "<p> El género $buscador existe </p>";
        } elseif ($exist == false){
            echo "<p> ERROR! El género $buscador no existe </p>";
        }

        return $exist;
    }

    function insertMovie(){
        echo "<h1> La película fue agregada a la base de datos </h1>";

        echo "<a href=peliculas.php>Ver listado de peliculas</a>";
    }
}
