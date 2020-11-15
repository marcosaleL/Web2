<?php

$encabezado = "Encabezado";
$contenido = "Contenido";

echo("<table>");
echo("<thead>");

echo("<tr>");
      for ($i=0; $i < 5; $i++) { 
        echo("<th>".$encabezado."</th>");
      }
echo("</tr>");


    echo("</thead>");
    echo("<tbody>");

echo("<tr>");
    for ($i=0; $i < 5; $i++) { 
      echo("<td>".$contenido."</td>");
    }
echo("</tr>");



echo("<tr>");
    for ($i=0; $i < 5; $i++) { 
      echo("<td>".$contenido."</td>");
    }
echo("</tr>");



echo("<tr>");
    for ($i=0; $i < 5; $i++) { 
      echo("<td>".$contenido."</td>");
    }
echo("</tr>");


echo("</tbody>");
echo("</table>");


?>