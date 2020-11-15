<?php

$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio",
"Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");


$dinero = $_REQUEST["dinero"];
$interes = $_REQUEST["interes"];
$subtotal = ($dinero * $interes)/100;
$total;


echo("<table>");
echo("<thead> <tr> <td>Monto</td>"."<td>Interes</td>"."<td>Plazo</td>".
"<td>Acumulado</td>"."<td>Total</td></tr></thead>");

for ($i=1; $i <= count($meses) ; $i++) { 
  $total = $dinero + ($subtotal * $i);
  echo("<tr>");
  echo("<td>".$dinero."</td>");
  echo("<td>".$interes."</td>");
  echo("<td>".$i."</td>");
  echo("<td>".$subtotal*$i."</td>");
  echo("<td>".$total."</td>");
  echo("<tr>");
}
echo("</table>");

?>
