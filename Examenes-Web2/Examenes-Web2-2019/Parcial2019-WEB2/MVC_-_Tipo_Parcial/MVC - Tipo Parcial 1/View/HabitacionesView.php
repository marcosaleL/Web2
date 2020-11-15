<?php
require_once './libs/smarty/Smarty.class.php';
class HabitacionesView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    }
    // Mostrar habitaciones que paso por parámetro + form para agregar una habitación
    function showHabitaciones($habitaciones){
        $this->smarty->assign('titulo', 'Habitaciones');
        $this->smarty->assign('habitaciones', $habitaciones);
        $this->smarty->display('templates/habitaciones.tpl');
    }
}
?>