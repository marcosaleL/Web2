<?php

    require_once 'userList.php';

    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home';
    }

    $params = explode('/', $action);

    $users = setUsers();
    $user = '';

    switch($params[0]) {

        case 'home': 
            echo getHome(); break;
            
        case 'userList':
            echo getUsersList($users, $user); break;
            
        case 'addUser':
            $newList = addUser($users);
            echo getUsersList($newList, $user); break;

        case 'searchUser':
            $user = searchUser($users);
            echo getUsersList($users, $user); break;

        default: echo '404 ERROR.';
    }