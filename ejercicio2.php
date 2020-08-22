<!--
    Escribir un programa que muestre una lista html generada desde el servidor a través de un arreglo. 
-->
<?php
    function elementoListaHTML($elemento){
        return "<li>" . "-->" . $elemento . "</li>";
    }

    function listaHTML($arreglo){
        $elementos_html = "";

        for($i = 0; $i < count($arreglo); $i++){
            $elemento = $arreglo[$i];
            $elementos_html = $elementos_html . elementoListaHTML($elemento);
        }
        
        return "<ol>" . $elementos_html . "</ol>";
    }

    //una forma de crear un arreglo
    //$arreglo = array(1,2,3,4,5);
    $arreglo = [1,2,3,4,5,6,8,9,0];
    
    echo listaHTML($arreglo);
?>
