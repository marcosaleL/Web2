<?php

    if ( isset($_POST) && isset($_POST['peso']) && isset($_POST['altura']) )
    {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $aux = ($altura/100)*($altura/100);
        $imc = ($peso/$aux);
        if ( $imc < 18.50){
            echo "<h3> Su IMC es " . round($imc, 2) . " por lo tanto tiene Bajo Peso </h3>"; 
        }
        else if ( ($imc > 18.50) && ($imc <= 24.99) )
            {
                echo "<h3> Su IMC es " . round($imc, 2) . " por lo tanto tiene un peso Normal </h3>";
            }
            else if ( ($imc >= 25) && ($imc < 30) )
                {
                    echo "<h3> Su IMC es " . round($imc, 2) . " por lo tanto tiene Sobrepeso </h3>";
                }
                else if ( ($imc >= 30))
                {
                    echo "<h3> Su IMC es " . round($imc, 2) . " por lo tanto tiene Obesidad </h3>";
                }
    }

?>