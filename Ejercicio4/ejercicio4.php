<?php

    $animales = array("Perro", "Gato", "Caballo", "Vaca", "Serpiente", "Búho", "Elefante", "Canguro",
        "Pantera", "Guanaco", "Pingüino", "Ballena", "Calamar", "Pulpo", "León", "Tigre");

    $cant = $_GET["cantidad"];

    
    echo "<ul>";
    for ($i=0;$i<$cant;$i++)
    {
        echo "<li>" . $animales[$i] . "</li>";
    }
    echo "</ul>";

?>