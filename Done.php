<?php

require_once "database/conn.php";

require('functions.php');



if (isset($_POST['submit'])) {
    $price = $_POST['price_price'];

    $unique_ref_found = false;
    while (!$unique_ref_found) {
        $digital = mt_rand(100000, 999999);
        $sql = mysqli_query($link, "SELECT * FROM payment WHERE  payment_order ='$digital'");
        $num = mysqli_num_rows($sql);
        if ($num == 0) {
            $unique_ref_found = true;
        }
    }

    $sql = mysqli_query($link, "INSERT INTO payment(payment_order, payment_amount) VALUES ($digital, $price)");

    
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thank You!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="Main.css">

</head>

<body>


    <div class="container-4">




        <div class="row text-center h2 ">
            <a href="#">
                <!-- Home Page -->
                <img src="https://logos-world.net/wp-content/uploads/2020/09/Starbucks-Emblem.png" class="Logo" alt="Logo" />
            </a>
        </div>
        <div class="row h1  " style="text-align: center; padding: 2rem; margin: 2rem;">
            <div class="col">
                Thank you !
            </div>
        </div>
        <div class="row" style="padding: 1rem;">
            <div class="col">
                <h1> Here's your Order Number</h1><br>
                <h1 style="font-weight: bold;"><?php echo $digital; ?></h1>
            </div>
        </div>
        <div class="row" style="padding: 1rem;">
            <div class="col text-center d-grid gap-2 col-6 mx-auto">
                <form action="post">
                    <a href="index.php"><button name="menu_button" type="button" class="btn-default btn-lg" value="">Back</button></a>
                </form>
            </div>
        </div>

    </div>

      <!-- Loader -->
      <?php
    include('include/loader/loader.php');
    ?>

</body>

</html>