<!--
    Escribir un programa que mediante un formulario html un usuario pueda ingresar su nombre, apellido y edad 
    para que sean enviados al servidor. 
    El programa, debe recibir los datos y mostrar la información por pantalla. 
    
    Envíe el formulario usando los métodos POST y GET. 
        ¿Cuál es la diferencia? 
        GET:
         * Queda en la URL
         * Limitado a cantidad de caracteres <2048
        POST:
         * Queda oculto, no queda en historial
         * No tiene limite de tamaño
        ¿En qué situaciones considera mejor utilizar uno u el otro?
        GET: 
        * Cuando queremos que quede en la url 
        POST:
        * Cuando no se necesita que esté en la url y/o son muchos datos


    Investigue las diferencias entre los arreglos $_POST $_GET y $_REQUEST de PHP
    
    Genere validaciones de datos en el servidor. 
    Ningún campo puede estar vacío. 
    ¿Cuál es la diferencia entre realizar estas verificaciones del lado del cliente o del lado del servidor? 
    Cliente:
    Pros:
     * Mejora la interacción con el usuario
     * Ahorra ancho de banda y tiempo
     * Ahorras consultas al servidor
    Cons:
     * Cualquiera lo puede modificar
    Servidor:
    Pros:
     * No se puede modificar
    Cons:
     * El cliente tiene que esperar a que vuelva la peticion
     * Consume datos
     * Consume consultas al servidor
-->
<?php
    echo $_SERVER ['SERVER_PORT'];
    print_r($_POST); //muestra el arreglo
    if(isset($_POST)
        &&isset($_POST['nombre'])// isset sirve para setear
        &&isset($_POST['apellido'])
        &&isset($_POST['edad']) 
    )
    echo "<p> Su Nombre es: " . $_POST['nombre']. "</p>";
    echo "<p> Su Apellido es: " . $_POST['apellido']. "</p>";
    echo "<p> Su Edad es: " . $_POST['edad']. "</p>";
 ?>
