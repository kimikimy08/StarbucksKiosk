<?php

require ('../database/DBController.php');

// require Product Class
require ('../database/Menu.php');

// DBController object
$db = new DBController();

// Product object
$menu = new Menu($db);

if (isset($_POST['itemid'])){
    $result = $menu->getMenu1($_POST['itemid']);
    echo json_encode($result);
}

if (isset($_POST['itemid1'])){
    $result = $menu->getMenu2($_POST['itemid1']);
    echo json_encode($result);
}

