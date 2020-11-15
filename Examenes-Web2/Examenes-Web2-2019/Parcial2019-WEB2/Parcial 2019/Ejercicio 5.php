<?php

function authenticate($user, $pass){
    $query = $this->db->prepare('SELECT * FROM usuario WHERE usuario = $user and pass = $pass');
    // usuario = ? and pass = ?. Aunque sería más apropiado que devuelva los datos sólo con el parámetro usuario y que la contraseña la chequee en el controlador.
    $query->execute(); // $query->execute((array($user)); 
    $user = $query->fecthAll(PDO::FETCH_ASSOC); // de plantearlo así, faltaría return $user; y además es featch (porque sólo es un elemento)
    $_SESSION['USER'] = $user; //  Sería mejor hacerlo una vez que chequea el usuario dentro del Controlador
    header("Location: admin.php"); // Es más apropiado hacer header("Location: " . ADMIN); siendo ADMIN una constante definida en el router.
}

?>