<?php

    function getHome() {
        return '<a href="http://localhost/proyectos/TUDAI%202/WEB%202/Pr%C3%A1ctico%2002%20.%20Ruteo/ej.%204/userList">GET USER LIST</a>';
    }

    function setUsers() {
        $users[45684546] = 'Juan';
        $users += [37350947 => 'Nico'];
        $users += [65496841 => 'Julia'];
        $users += [34566545 => 'Marta'];
        return $users;
    }
    
    function addUser($users) {
        if (isset($_GET['dniUser'])&&isset($_GET['nameUser'])) {
            $nameUser = $_GET['nameUser'];
            $dniUser = $_GET['dniUser'];
        }
        $users += [$dniUser => $nameUser];

        return $users;
    }

    function searchUser($users) {
        if (isset($_GET['userSearcher'])) {
            $dniUser = $_GET['userSearcher'];
            $userName = 'NULL';
            foreach ($users as $dni => $name) {
                if ($dni == $dniUser) {
                    $userName = $name;
                }
            }
            return $userName;
        }
    }

    function getUsersList($users, $user) {
        $html = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>User List</title>
            </head>
            <body>
                <div>
                    <form action="addUser" method="GET">
                        <input type="number" name="dniUser" placeholder="DNI">
                        <input type="text" name="nameUser" placeholder="Name">
                        <button type="submit">Add User</button>
                    </form>
                </div>
                <div>
                    <form action="searchUser" method="GET">
                        <input type="number" name="userSearcher" placeholder="DNI">
                        <button type="submit">Search User</button>
                    </form>
                    User Found: '.$user.'
                </div>
                <div>
                    <ul>';

            foreach ($users as $dni => $name) {
                $html .= '<li>Name: '.$name.' => DNI: '.$dni.'</li>';
            }
                    '</ul>
                </div>
            </body>
            </html>';

        return $html;

    }