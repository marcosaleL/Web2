<?php

function flores(){
    echo '<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PhotoAlbum</title>
    </head>
    
    <body>';

    $flores = array(["<img src='img/flower_0.jpg'>", "<img src='img/flower_1.jpg'>", "<img src='img/flower_2.jpg'>", 
    "<img src='img/flower_3.jpg'>", "<img src='img/flower_4.jpg'>"]);
    $count = count($flores);

    for($i=0; $i<$count; $i++){
        $imagenes = implode(',', $flores[$i]);
        echo "$imagenes";
    }
    
    
    
    echo '</body>
    </html>';
}

function arboles(){
    echo '<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PhotoAlbum</title>
    </head>
    
    <body>';

    $arboles = array(["<img src ='img/tree_0.jpg'>", "<img src ='img/tree_1.jpg'>", "<img src ='img/tree_2.jpg'>", 
    "<img src ='img/tree_3.jpg'>", "<img src ='img/tree_4.jpg'>"]);


    $count = count($arboles);

    for($i=0; $i<$count; $i++){
        $imagenes = implode(',', $arboles[$i]);
        echo "$imagenes";
    } 
    echo '</body>
    </html>';
}

function patos(){
    echo '<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PhotoAlbum</title>
    </head>
    
    <body>';

    $patos = array(["<img src='img/duck_0.jpg'>", "<img src='img/duck_1.jpg'>", 
    "<img src='img/duck_2.jpg'>", "<img src='img/duck_3.jpg'>", "<img src='img/duck_4.jpg'>"]);


    $count = count($patos);

    for($i=0; $i<$count; $i++){
        $imagenes = implode(',', $patos[$i]);
        echo "$imagenes";
    } 
    echo '</body>
    </html>';
}

?>