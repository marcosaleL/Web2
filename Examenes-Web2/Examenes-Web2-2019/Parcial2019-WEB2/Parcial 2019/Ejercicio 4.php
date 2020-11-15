<?php

// A Los sistemas WEB son mono-usuarios
// FALSO. Tienen que funcioanr correctamente para que varios usuarios lo utilicen simultáneamente. Deben ser consistentes.

// B Filtrar los repuestos por categoría sólo se puede hacer en SQL.
// FALSO. La tabla se genera a través de una consulta con una categoría a filtrar (y se retorna) en el Model. Sin enmbargo, en el controlador es donde determinamos la categoría a filtrar. 
// La podemos hacer a mano u obtenerla a través de un formulario.

// C En MVC las clases de VIsta necesitan conocer el modelo para obtener los datos para procesar.
// FALSO. En el controlador yo obtengo datos provenientes de la BDD, los cuales son guardados en una variable y estos serán los parámetros de la función de la vista.

$DUDA
// D Usar PDO asegura conexiones seguras.
// ---------

$DUDA
// E Iniciar session en PHP nos asegura de que un usuario esté logueado correctamente.//

// VERDADERO. Porque podríamos acceder a todos los datos del usuario através de $usuario->atributo = $_SESSION['atributo'].
// Si estos datos no son correctos, podríamos verificar que se logueó mal.

// F Una sesión de usuario se crea y mantiene en el cliente.
// FALSO. La sesión vive siempre del lado del servidor y dura mientras el usuario esté conectado al servidor.

// G El cliente y el servidor en una arquitectura distribuida se comunican mediante una API REST.
// VERDADERO. Generalmente del lado del cliente está el ruteo, el template. La API REST es un intermediario entre cliente y servidor mediante el envío de JSONs.

// H Para que el usuario administrador no pueda borrar un dato, sólo se debe ocultar el botón en las vistas.
// FALSO. Visualmente debe ocultarse el botón en las vistas, pero lo fundamental es que no tenga los permisos, 
// o si este concoe la URL, al momento de escribirla se lo redireccione, por ejemplo, a home. (Supongo que hay un usuario con más permisos que administrador)


?>