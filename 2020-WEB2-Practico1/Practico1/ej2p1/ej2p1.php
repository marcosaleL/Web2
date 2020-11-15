<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello PHP!</title>
</head>
<body>
<?php

// Escribir un programa que muestre una lista html generada desde el servidor a través de un arreglo. Identifique las diferencias entre arreglos asociativos e indexados (ver docu oficial)

$edades = array(
    'Ema' => 25,
    'Juan' => 21,
    'Romina' => 37,
    'Susana' => 44,
    'Ramon' => 59
);

echo "<ul>";
  foreach ($edades as $edad) {
    echo "<li> $edad </li>";
};
echo "<ul>";

?>

</body>
</html>


