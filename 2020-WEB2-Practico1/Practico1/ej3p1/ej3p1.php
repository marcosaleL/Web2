
<?php
echo ("<h1>METODO POST</h1>");

// $_REQUEST sirve tanto para $_POST como para $_GET
// Sabra discernir cual estamos usando gracias al method que definamos en el <form> de el html

if (!empty($_REQUEST)){

            $nombre = $_REQUEST["nombre"];
            $apellido = $_REQUEST["apellido"];
            $edad = $_REQUEST["edad"]; 

            echo ('Nombre: '.$nombre);
            echo ('<br>');
            echo ('Apellido: '.$apellido);
            echo ('<br>');
            echo ('Edad: '.$edad);
};
?>
