<?php

    require_once 'tabla.php';

    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'table/10';
    }

    $params = explode('/', $action);

    switch($params[0]) {

        case 'table': 
            if( isset($_GET['limit'])&&!empty($_GET['limit'])) {
                $params[1] = $_GET['limit'];
            }
            $table = getTable($params[1]);
            echo drawHtml($table, $params[1]); break;

        default: echo '404 ERROR.';
    }