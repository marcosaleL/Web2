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
    require_once '5.php';

    function ver5($num){
        $num = 5;
        obtener_tabla($num);
    };

    function ver10($num){
        $num = 10;
        obtener_tabla($num);
    };

    function ver20($num){
        $num = 20;
        obtener_tabla($num);
    };
    
    echo '</body>
</html>';

?>