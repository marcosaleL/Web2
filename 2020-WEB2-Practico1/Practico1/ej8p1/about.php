<?php

$dev = $_REQUEST["developer"];

if(empty($_REQUEST["developer"])){
    echo("Desarrollado por: Emanuel");
}else{
    echo("Desarrollado por: ".$dev);
}

?>