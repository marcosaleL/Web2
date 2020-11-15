<?php
include_once './Model/CategoriasModel.php';
include_once './Model/RepuestosModel.php';
include_once './View/RepuestosView.php';
//include_once './View/CategoriasView.php';
class RepuestosController {
    // DECLARACIÓN DE ATRIBUTOS
    private $categoriasModel;
    private $repuestosModel;
    private $repuestosView;
    private $categoriasView;

    // CONSTRUCTOR
    function __construct(){
        //$this->categoriasModel = new CategoriasModel();
        $this->repuestosModel = new RepuestosModel();
        $this->repuestosView = new RepuestosView();
        //$this->categoriasView = new CategoriasView();
    } 

    // 3 - Todos los repuestos -> no es necesario, en el enunciado sólo pide hacer el view.

    function repuestos(){
        $repuestos = $this->repuestosModel->getRepuestos();
        $this->repuestosView->showRepuestos($repuestos);
    }

    // 2 - Datos de un repuesto
    function repuesto($params = null){
        $id_repuesto = $params[':ID'];
        // ----------------- POSIBLE ERROR ----------------
        // Traigo el repuesto desde un form.
        // Si tuviese una variable dentro de esta función, y la usara para pasarla como parámetro en la función del Model, tendría que verificar que el id existe
        // $datosRepuesto = $this->repuestosModel->getDatosRepuesto($id_repuesto);
        // if ($datosRepuesto){            
            //$this->repuestoView->showDatosRepuesto($datosRepuesto);  
        //}else{
            //$this->repuestoView->showError('El repuesto no existe, ingresá otro id.') -> también habría que crear la función en el View.
        //} 
        // ----------------- POSIBLE ERROR ----------------
        $datosRepuesto = $this->repuestosModel->getDatosRepuesto($id_repuesto);
        $this->repuestosView->showDatosRepuesto($datosRepuesto);         
    }  
    
    // ----- COMPLEMENTARIOS PARA PROBAR QUE FUNCIONAN A TRAVÉS DE UN FORMLUARIO LOS INCISOS DEL EJERCICIO 1 -----
    // ----------------- Con probar en PHPMyAdmin ya bastaría para el enunciado del parcial-----------------------
    // Cantidad de repuestos de una categoría
    // Productos mayores a un precio determinado (1000 en el caso del parcial)   
    // Repuestos de un cierto proovedor  
}
?>