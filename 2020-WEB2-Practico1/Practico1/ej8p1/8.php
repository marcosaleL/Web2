<?php

$valor1 = $_REQUEST["primerNumero"];
$valor2 = $_REQUEST["segundoNumero"];
$operacion = $_REQUEST["operacion"];

// print_r($operacion);

switch($operacion) {

  case 'suma':
      echo($valor1 + $valor2);
        break;
  case 'resta':
      echo($valor1 - $valor2);
      break;
  case 'multi':
      echo($valor1 * $valor2);
        break;
  case 'divi':
    if($valor2 > 0){echo($valor1 / $valor2);}else{
      echo("Division invalida");
    }
        break;
  
  default: echo "Error";
    break;
}

?>
