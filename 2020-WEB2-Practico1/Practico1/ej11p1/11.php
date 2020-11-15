<?php

$nombres = array("Ema", "Juan", "Romina", 
"Susana", "Juana", "Manuela", "Tomas", "Damian",
"Ramon","Alan","Dylan","Ruben","Cristian",
"Marta","Paula");

$cant = $_GET["cantidad"];
// print_r($_GET["cantidad"]);

echo "<ul>";

for ($i=0; $i < $cant ; $i++) { 
  echo "<li>" .$nombres[$i]. "</li>";
}

echo "</ul>";


?>
