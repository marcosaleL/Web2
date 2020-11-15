<?php

$numeroUsuario = $_POST['numero'];

$primerValor = 1; //1
$segundoValor = 1; //1

echo("<table>");
echo("<thead>");


for ($i=1; $i <= $numeroUsuario ; $i++) { 

  echo("<tr>");
  echo ("<th>".$i."</th>");
  echo("</tr>");

  echo("</thead>");

  echo("<tbody>");
   
  echo("<tr>");
      for ($j=0; $j<$numeroUsuario ; $j++) { 
        
            $resultado = $primerValor*$segundoValor;
            echo("<td>".$resultado."</td>");
            $primerValor++;
        }
        echo("</tr>");

    $primerValor = 1;
    $segundoValor++;
}



echo("</tbody>");
echo("</table>");


?>
