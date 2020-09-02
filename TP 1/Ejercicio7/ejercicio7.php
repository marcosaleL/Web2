<?php
    
    $billetera = 0;
    $interes = 0;

    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto",
        "Septiembre", "Octubre", "Noviembre", "Diciembre");

    if (isset($_POST))
    {
        $billetera = $_POST['billetera'];
        $interes = $_POST['interes'];
        $subtotal = ($billetera * $interes)/100;
        $total = 0;
        echo "<table>";
        echo "<thead> <tr> <td>Monto</td>" . " <td>Interes</td> " . " <td>Plazo</td>" . "<td>Acumulado</td>" . 
        "<td>Total</td> </tr> </thead>";
        for ($i=0; $i<count($meses); $i++)
        {
            $total = $billetera + ($subtotal * $i);
            echo"<tr>";
            echo"<td>".$billetera."</td>";
            echo"<td>".$interes."</td>";
            echo"<td>".$i."</td>";
            echo"<td>".$subtotal*$i."</td>";
            echo"<td>".$total."</td>";
            echo"</tr>";
        }
        echo "</table>";
    }

?>