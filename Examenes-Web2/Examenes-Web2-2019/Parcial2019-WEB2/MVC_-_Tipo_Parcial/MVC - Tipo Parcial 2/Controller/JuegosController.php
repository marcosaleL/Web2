<?php
include_once './Model/JuegosModel.php';
include_once './View/JuegosView.php';

class JuegosController{
    private $juegosModel;
    private $juegosView;

    public function __construct(){
        $this->juegosModel = new JuegosModel();
        $this->juegosView = new JuegosView();
    }

    // Obtener y mostrar todos los juegos disponibles
    function juegos(){
        $juegos = $this->juegosModel->getJuegos();
        $this->juegosView->showJuegos($juegos);
    }

    // Mostrar form para agregar un juego
    function addJuego(){
        $error = '';
        $this->juegosView->showFormAddJuego($error);
    }
    
    // Agregar un juego
    function insertJuego(){
        $nombre = $_POST['nombreJuego'];
        $cantJugadores = $_POST['cantJugadores'];
        $juegoDeCartas = $_POST['juegoDeCartas'];
        if (!empty($nombre) && !empty($cantJugadores) && !empty($juegoDeCartas)){
            if ($juegoDeCartas = 'No'){
                $tipoDeJuego = 0;
            }else{
                $tipoDeJuego = 1;
            }
            $this->juegosModel->insertJuego($nombre, $cantJugadores, $tipoDeJuego);
            header("Location: " . JUEGOS);
        }else{
            $error = 'Faltan ingresar campos. Por favor vuelve a completar el formulario.';
            $this->juegosView->showFormAddJuego($error);
        }        
    }

    // Eliminar un juego
    function deleteJuego($params = null){
        //$existeJuego = $this->juegosModel->getJuego($idJuego);
        //if ($existeJuego){
          //  $juegos = $this->juegosModel->deleteJuego($juego);
        //} -> esto lo iba a hacer si ingresaba el juego desde un formulario, pero lo puse en un link en cada juego dentro de la tabla. 
        $idJuego = $params[':ID'];
        $this->juegosModel->deleteJuego($idJuego);      
        header("Location: " . JUEGOS);
    } 
}
?>