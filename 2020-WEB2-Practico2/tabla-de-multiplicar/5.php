<?php
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="'.BASE_URL.'">
        <title>Tabla de multiplicar</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>';

    function obtener_num(){
        if (isset($_REQUEST["valor1"])&&
        $_REQUEST["valor1"]!=" "){
            $num = $_REQUEST["valor1"];
            obtener_tabla($num);
        }else{
            echo ("<p> Introduzca datos, por favor </p>");
        }
    }
    
    function obtener_tabla($num){
        echo ("<table>");
        for($i=1; $i<=$num; $i++){
            echo ("<tr>");
            for ($j=1; $j<=$num; $j++){
                if($i===$j){
                    echo ('<td class= "amarillo">'.($i*$j).'</td>');
                } else{
                    echo ('<td class= "normal">'.($i*$j).'</td>');
                }
            }
            echo ("</tr>");
        }
        echo ("<table>");
    }

    function consulta($num){
        obtener_num();
        obtener_tabla($num);
    }
echo '</body>
</html>';

?>