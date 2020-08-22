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
<html>
    <body>
        <div>
        <?php 
            if(isset($_GET) && count($_GET)>0){
                echo "<p>La variable GET está seteada y tiene elementos.</p>";
                print_r($_GET);
            }
            if(isset($_POST) && count($_POST)>0){
                echo "<p>La variable POST está seteada y tiene elementos.</p>";
                print_r($_POST);
            }
            if(isset($_REQUEST) && count($_REQUEST)>0){
                echo "<p>La variable REQUEST está seteada y tiene elementos.</p>";
                print_r($_REQUEST);
                
                echo "<br> El Nombre es " . $_REQUEST["nombre"] . "<br>";

                if(!isset($_REQUEST["nombre"]) || $_REQUEST["nombre"] == ""){
                    echo "<p>El nombre no está seteado.</p>";
                }
                if(!isset($_REQUEST["apellido"]) || $_REQUEST["apellido"] == ""){
                    echo "<p>El apellido no está seteado.</p>";
                }
                if(!isset($_REQUEST["edad"]) || $_REQUEST["edad"] == ""){
                    echo "<p>La edad no está seteada.</p>";
                }
            }

        ?>
        </div>
        <form method="POST" action="/web2/F/ejer3.php?hola=1">
            <input type="text" name="nombre" />
            <input type="text" name="apellido" />
            <input type="number" name="edad" />
            <input type="submit" name="envio" />
            <input type="submit" name="envio2" />
        </form>
    </body>
</html>
