<?php


// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/Menu.php');

// require Cart Class
require ('database/Cart.php');


// DBController object
$db = new DBController();

// Product object
$menu = new Menu($db);
$menu_shuffle = $menu->getData();

// Cart object
$Cart = new Cart($db);


//foreach ($menu->getOrderId($menu->getData('additional')) as $item3) {

 //   print_r($item3['add_amount']);
//}
//print_r($menu->getOrderId($menu->getData('additional')));
//print_r($menu->join());

//$menu_shuffle = $menu->getMenu();
