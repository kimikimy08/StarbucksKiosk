<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- FAVICON -->
  <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Starbucks_Corporation_Logo_2011.svg/1200px-Starbucks_Corporation_Logo_2011.svg.png" type="image/png">
  <title> Starbucks - Inventory </title>

  <!-- FONT AWESOME  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- EXTERNAL CSS  -->
  <link rel="stylesheet" href="css/inventory.css">

</head>

<body>
  <!-- logo -->

  <?php
  session_start();
  require_once "database/conn.php";

  $destination = 'uploadedFile';



  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["prod_name"])) {
      $name = $_POST["prod_name"];
    }
    if (isset($_POST["type"])) {
      $type = $_POST["type"];
    }
    if (isset($_POST["prod_type"])) {
      $prod_type = $_POST["prod_type"];
    }
    if (isset($_POST["price"])) {
      $price = $_POST["price"];
    }

    if (isset($_POST["description"])) {
      $description = $_POST["description"];
    }



    if (isset($_POST['upload'])) {
      $file = $_FILES['uploadfile'];
      $filename = $_FILES["uploadfile"]['name'];
      $tempname = $_FILES["uploadfile"]['tmp_name'];
      $folder = "./menu-img/" . $filename;
      move_uploaded_file($tempname, $folder);
    }

    $sql = "INSERT INTO menu (menu_category, menu_name, menu_price, menu_image, menu_description) VALUES(?,?,?,?,?)";


    if ($stmt = mysqli_prepare($link, $sql)) {
      mysqli_stmt_bind_param($stmt, "ssdss", $param_type, $param_name, $param_price, $param_file, $param_desc);
      $param_name = $name;
      $param_type = $type;
      $param_prodtype = $prod_type;
      $param_price = $price;
      $param_desc = $description;
      $param_file = $folder;

      if (mysqli_stmt_execute($stmt)) {
        header("location: menu.php");
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }
      mysqli_stmt_close($stmt);
    }
  }
  ?>


  <div class="container">
    <div class="title"> Product Inventory</div> <br>
    <div class="content">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">

        <div class="type-details">
          <input type="radio" name="type" id="dot-1" value="warm drinks">
          <input type="radio" name="type" id="dot-2" value="cold drinks">
          <input type="radio" name="type" id="dot-3" value="sandwiches">
          <span class="type-title">Category:</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="type">Warm Drink</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="type">Cold Drink</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="type">Sandwich</span>
            </label>
          </div>
        </div>
        <div class="product-details">
          <div class="input-box">
            <span class="details">Product Name:</span>
            <input name="prod_name" type="text" placeholder="Enter product name" required>
          </div>
          <div class="input-box">
            <span class="details">Product Type:</span>
            <input type="text" name="prod_type" placeholder="Brewed Coffee, Refresher,..." required>
          </div>
          <div class="input-box">
            <span class="details">Price (Php): </span>
            <input type="text" name="price" placeholder="Php" required>
          </div>
          <div class="input-box">
            <span class="details">Description: </span>
            <input type="text" name="description" placeholder="Brewed Coffee, Refresher,..." required>

          </div>
        </div>
        <div class="button">
          <input type="submit" name="add" value="Add">

        </div>


      </form>
      <form action="post">
        <div class="button">
        <button class="btn-default btn-lg" name="" id="" value=""> <a href="table.php" style="text-decoration: none; color:white">Update</a></button> <br>
        <button class="btn-default btn-lg" name="" id="" value=""> <a href="index.php" style="text-decoration: none; color:white">Back</a></button>
        </div>
      </form>
    </div>
  </div>
  <!-- Loader -->
  <?php
  include('include/loader/loader.php');
  ?>

  <!-- custom js file link  -->
  <script src="js/inventory.js"></script>

</body>

</html>