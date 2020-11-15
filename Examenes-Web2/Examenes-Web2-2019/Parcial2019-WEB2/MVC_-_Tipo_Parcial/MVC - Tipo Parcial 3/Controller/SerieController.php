<?php
include_once './Model/SerieModel.php';
include_once './View/SerieView.php';

class SerieController{
    private $serieModel;
    private $serieView;
    // estructura
    private $temporada = new TemporadaController(); //<- arreglo de temporadas (ver sintáxis)
    private $titulo;
    private $creador;
    private $genero;

    public function __construct(){
        $this->serieModel = new serieModel();
        $this->serieView = new serieView();
    }

    // Obtener y mostrar todas las series
    //function series(){
       // $series = $this->serieModel->getSeries();
       // $this->serieView->showSeries($series);
    //}

    // Mostrar form para agregar una serie
    //function addSerie(){
      //  $this->serieView->showFormAddSerie();
    //}
    
    


    // Agregar una serie
    //function insertSerie(){
      //  $nombre = $_POST['nombre'];
       // $descripcion = $_POST['descripcion'];
        //$episodio = $_POST['episodio'];
        
        //$this->juegosModel->insertSerie($nombre, $descripcion, $episodio);
        //header("Location: " . SERIES);
    //}

    // Eliminar un juego
    //function deleteSerie($params = null){
      //  $idSerie = $params[':ID'];
      //  $this->serieModel->deleteSerie($idSerie);      
      //  header("Location: " . SERIES);
    //} 
}
?>