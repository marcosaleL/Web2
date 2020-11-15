<?php

function home(){
    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="'.BASE_URL.'">
        <title>Tabla de multiplicar</title>
    </head>
    <body>
        <h1> Tabla de Multiplicar </h1>
        <form action="consulta" method="POST">
            <input type="number" name="valor1" id="valor1">
            <input type="submit" value="Consultar">
        </form>

        <a href="ver5">5</a>
        <a href="ver10">10</a>
        <a href="ver20">20</a>
        
    </body>
    </html>';

    return $html;
}


?>

