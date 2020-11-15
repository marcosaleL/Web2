
<?php
echo ("</h1>FORMULARIO</h1>");
echo ('<br>');

// $_REQUEST sirve tanto para $_POST como para $_GET
// Sabra discernir cual estamos usando gracias al method que definamos en el <form> de el html

if (!empty($_REQUEST)){

            $nombre = $_REQUEST["nombre"];
            $apellido = $_REQUEST["apellido"];
            $edad = $_REQUEST["edad"]; 
            $genero = $_REQUEST["genero"];
            $pais = $_REQUEST["pais"];

            echo ('Nombre: '.$nombre);
            echo ('<br>');
            echo ('Apellido: '.$apellido);
            echo ('<br>');
            echo ('Edad: '.$edad);
            echo ('<br>');
            echo ('Genero: '.$genero);
            echo ('<br>');
            echo ('Pais: '.$pais);
            echo ('<br>');
            echo "<ul>";
            // Imprime el array de intereses en base a la checklist del html
            foreach ( $_REQUEST["interes"] as $intereses) { 
                    echo "<li>".$intereses."</li>";
             }
             echo "</ul>";
}
?>
