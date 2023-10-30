<?php
ob_start();
?>

<?php
// require functions.php file
require('functions.php');


require_once "database/conn.php";

$sql = mysqli_query($link, "SELECT * FROM cart_drinks");

$num = mysqli_num_rows($sql);
if ($num >= 1) {
  $truncatetable= mysqli_query($link, "TRUNCATE TABLE cart_drinks");
}

$sql = mysqli_query($link, "SELECT * FROM cart");

$num = mysqli_num_rows($sql);
if ($num >= 1) {
  $truncatetable= mysqli_query($link, "TRUNCATE TABLE cart");
}








?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Home </title>

  <!-- FAVICON -->
  <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Starbucks_Corporation_Logo_2011.svg/1200px-Starbucks_Corporation_Logo_2011.svg.png" type="image/png">
  <title> Starbucks - Home </title>

  <!-- FONT AWESOME  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- EXTERNAL CSS  -->
  <link rel="stylesheet" href="css/home.css">
</head>

<body>
  <div class="big-wrapper">
    <header>
      <div class="container">

        <!-- Logo -->
        <?php
        include('include/logo/logo.php');
        ?>
        <!-- <div class="logo">
          <a href="index.php"> <img src="https://logos-world.net/wp-content/uploads/2020/09/Starbucks-Emblem.png" alt="Logo"> </a>
          </div> -->
      </div>
    </header>

    <div class="showcase-area">
      <div class="container">

        <div class="left">
          <div class="big-title">
            <h1>Brewed for those <br> who love <span> coffee. </span> </h1>
          </div>

          <p class="text">
            We've got delicious food to go with our hand-crafted coffee drinks.
            Check out the Starbucks menu, our quick breakfast ideas and nutritional information.
          </p>

          <div class="cta">
            <a href="menu.php" class="btn"> >> Get started </a>
          </div>
        </div>

        <div class="right">
          <img class="drink" src="https://freepngimg.com/thumb/coffee/62115-tea-coffee-drink-starbucks-latte-free-download-image.png" alt="drink" />
        </div>

      </div>
    </div>
  </div>

  <!-- Loader -->
  <?php
  include('include/loader/loader.php');
  ?>
</body>

</html>