   <?php
    define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
    require_once 'galeria.php';
    require_once 'home.php';

    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home';
    }

    /*$objects = [
        "flower" => ["images" => ["flower_0.jpg", "flower_1.jpg", "flower_2.jpg", "flower_3.jpg", "flower_4.jpg"], "name" => "Flores"],
        "tree" => ["images" => ["tree_0.jpg", "tree_1.jpg", "tree_2.jpg", "tree_3.jpg", "tree_4.jpg"], "name" => "Arboles"],
        "duck" => ["images" => ["duck_0.jpg", "duck_1.jpg", "duck_2.jpg", "duck_3.jpg", "duck_4.jpg"], "name" => "Patos"]
    ];*/

    /*
    if (isset($_GET['object']) && isset($objects[$_GET['object']])) {
        $selected_object = $objects[$_GET['object']];
        echo "<h1>" . $selected_object["name"] . "</h1>";
        foreach ($selected_object["images"] as $image)
            echo "<img src='img/$image'/><br>";
    } else {
        echo "<p>Seleccione un objecto:</p><br>";
        foreach ($objects as $object => $data)
            echo "<a href='$object'>" . $data["name"] . "</a><br>";
    }
    */


    $params = explode('/', $action);

    switch ($params[0]) {
        case 'home':
            echo home();
        break;
        case 'flores':
            echo flores($params);
        break;
        case 'arboles':
            echo arboles($params);
        break;
        case 'patos':
            echo patos($params);
        break;
    }



    ?>
