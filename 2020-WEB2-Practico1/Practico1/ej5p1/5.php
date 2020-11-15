<?php

DEFINE (BAJOPESO,18.50);
DEFINE (NORMAL,24.99);
DEFINE (SOBREPESO,25);
DEFINE (OBESIDAD,30);

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$altura = pow($altura,2);
$masa = ($peso/$altura);

if($masa < BAJOPESO){
  echo ("<p>Su IMC es".$masa."</p>");
  echo ("<p>Bajo Peso</p>");
}else if(($masa > BAJOPESO) && ($masa <= NORMAL)){
  echo ("<p>Su IMC es".$masa."</p>");
  echo ("<p>Normal</p>");
}else if($masa >= SOBREPESO){
  echo ("<p>Su IMC es".$masa."</p>");
  echo ("<p>Sobrepeso</p>");
}else if($masa >= OBESIDAD){
  echo ("<p>Su IMC es".$masa."</p>");
  echo ("<p>Obesidad</p>");
}

?>
