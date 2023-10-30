<?php
require_once "database/conn.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $prod_type = $_POST['prod_type'];
    $description = $_POST['description'];
    $type = $_POST['type'];

    $sql = mysqli_query($link, "INSERT INTO menu(menu_category, menu_name, menu_price) VALUES ($type, $name, $price)");



    }
?>