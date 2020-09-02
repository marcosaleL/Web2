<?php

    $tam = 0;
    if (isset($_POST['cantidad']))
    {
        $tam = $_POST['cantidad'];
        $aux = array_fill(0, $tam, 0);

        $valores = array_fill(0, $tam, $aux);
        echo '<link href="style.css" rel="stylesheet">';
        echo "<table>";
        echo "<caption> <h4> Tabla de multiplicar </h4> </caption";
        echo "<tr>";
        for ($i=0;$i<count($valores)+1;$i++)
        {
            echo "<th>" . $i . "</th>";
        }
        echo "</tr>";
        for($i=0; $i<count($valores); $i++)
        {
            echo "<tr>";
            $fila = $i;
            $fila += 1;
            echo "<th>" . $fila . "</th>";
            for($j=0; $j<count($valores[$i]); $j++)
            {
                $valores[$i][$j] = ($i+1)*($j+1);
                echo "<td>" . $valores[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    
    //print_r($valores);
?>