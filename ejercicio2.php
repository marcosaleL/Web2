<!--
    Escribir un programa que muestre una lista html generada desde el servidor a través de un arreglo. 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <!--Escribir un programa que muestre una lista html generada desde el servidor 
    a través de un arreglo.-->
    <?php
        $nombres = array("Perro", "Gato", "Caballo");  
       
        // count — Cuenta todos los elementos de un array o algo de un objeto
       for ($i = 0; $i < count($nombres); $i++) {
       echo  "<li>" . $nombres[$i] . "</li>";
       }
  
    ?>
    
</body>
</html>