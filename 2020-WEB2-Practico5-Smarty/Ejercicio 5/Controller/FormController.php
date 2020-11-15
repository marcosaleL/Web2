<?php 
include_once './View/FormView.php';

class FormController{
    // DECLARACIÓN DE ATRIBUTOS
    private $view;
    // CONSTRUCTOR
    function __construct(){
        $this->view = new FormView();
    }
    // SHOW FORM
    function showForm(){
        $this->view->showFormView();
    }
    // Validar Form
    function validarForm(){
        $nombre = $_POST['nombre'];
        $mail = $_POST['mail'];
        $contraseña = $_POST['contraseña'];
        $contraseñaRepetida = $_POST['repeticionContraseña'];
        if ($contraseña == $contraseñaRepetida){
            $this->view->showFormWithPipes($nombre, $mail);
        }else{
            $this->view->showFormView($nombre, $mail);
        } 
    }
}
?>