Payment.php
Today
2:28 PM

SHON TYRONE GONZALES uploaded an item
PHP
Payment.php
<?php 
require_once "database/conn.php";
$Display = mysqli_query($link, "SELECT * FROM cart_drinks ");
$PaymentMeth = $PaymentMeth_err = $PromCode = $delete ="";

if(empty($_POST["PaymentMeth"])){
  $PaymentMeth_err  = "Please Select Payment Method";
}else{
  $PaymentMeth = $_POST["PaymentMeth"];
}
if(isset($_POST["Code"])){
  $PromCode = $_POST["Code"];
}
if(empty($PaymentMeth_err)){
  header("location: Done.php");
}

if(isset($_POST['Delete'])){
  $delete = $_POST['Delete'];
  $delete = substr($delete, 1);
  echo "<meta http-equiv='refresh' content='0'>";
  
}

$sql = "DELETE FROM cart_drinks WHERE OrderName ='$delete'";
if(mysqli_query($link,$sql)){
  
}

if(isset($_POST['Add'])){
  $Add = $_POST['Add'];
  $QCUP = "UPDATE cart_drinks SET Quantity = Quantity + 1 WHERE OrderName = '$Add'";
  $PCUP = "UPDATE cart_drinks SET Price = Price + BasePrice WHERE OrderName = '$Add'";
  mysqli_query($link,$QCUP);
  mysqli_query($link,$PCUP);
  echo "<meta http-equiv='refresh' content='0'>";
  

}
if(isset($_POST['Minus'])){
  $Minus = $_POST['Minus'];
  $QCUP = "UPDATE cart_drinks SET Quantity = Quantity - 1 WHERE OrderName = '$Minus'";
  $PCUP = "UPDATE cart_drinks SET Price = Price - BasePrice WHERE OrderName = '$Minus'";
  mysqli_query($link,$QCUP);
  mysqli_query($link,$PCUP);
  
  $ChkPrice = "SELECT Price FROM cart_drinks WHERE OrderName = '$Minus'";
  $Result = mysqli_query($link,$ChkPrice);
  $ChkPrice = mysqli_fetch_array($Result);
  
  if($ChkPrice['Price'] == 0){
    $delCart = "DELETE FROM cart_drinks WHERE OrderName = '$Minus'";
    mysqli_query($link,$delCart);
    echo "<meta http-equiv='refresh' content='0'>";
    
  }else{
  
    echo "<meta http-equiv='refresh' content='0'>";
  }
}





?>
 


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Starbucks_Corporation_Logo_2011.svg/1200px-Starbucks_Corporation_Logo_2011.svg.png" type="image/png">
  <title>Payment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="Main.css">
    
</head>
<?php
// require functions.php file
require('functions.php');

?>

<body>

  <div class="container-2">
    
    <div class="row">
      
      <div class="col h2 ">
        <img src="https://logos-world.net/wp-content/uploads/2020/09/Starbucks-Emblem.png" class="Logo" alt="Logo" />
      </div>
     
    </div>
    <h3 style="text-align: left;">Order here</h3>
    <?php 
        $Total = 0;
        if(mysqli_num_rows($Display)){
          $i=0;
          while($Order = mysqli_fetch_array($Display)){
        ?>
        
    <div class="row" style="min-height: 20vh; border-top: 1px solid #dee2e6;">

        <div class="col" style="text-align: left;">
        
        <!-- Display Item From Database -->
        
        
            <div class="row" style="padding: 1rem; margin: 1%; background-color: #FFFFFF; border-radius: 10px; border: 1px solid #dfdfdf;">
              <div class="col">
                <div>
                <img src="<?php echo $Order['MenuImage'] ?? "./menu-img/Warm Drinks/Brewed Coffee/Caffe ministo.jpeg"; ?>" style="width: 80%; border-radius: 25px;" >
                </div>
                <div style="padding: 0.5rem;">
                <h3>₱<?php echo $Order['Price'] ?? "0.00"; ?></h3>
                </div>
                
              </div>
              <div class="col" style="margin: auto;">
              <h5><?php echo $Order["OrderName"] ?? "Unknown"; ?></h6><br>
              <h6><?php echo $Order["CupSize"]?><br>
              <?php echo $Order["AddMilk"]?><br>
              <?php echo $Order["AddFlavor"]?><br>
              <?php echo $Order["AddSauces"]?><br>
              <?php $Order["AddToppings"]?><br>
              </h6>
              <?php $Total += $Order['Price']?>
              </div>
              <div class="col text-center h3" style="padding-top: 8%;">
              <?php 
              $OrDel =$Order["OrderName"];
              $OrPri =$Order["Price"];
              ?>
              <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
              <button type="Submit"  name="Minus" class="btn-default btn-lg" value="<?= $OrDel ?>">-</button>
                <?php echo $Order["Quantity"]."x" ?>
              <button type="Submit"  name="Add" class="btn-default btn-lg" value="<?= $OrDel ?>">+</button>
              </form>
              </div>
              <div class="col text-center" style="padding-top: 8%;">
              <?php $OrDel =$Order["OrderName"]?>
              <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
              <button type="Submit"  name="Delete" class="btn-default btn-lg" value=" <?= $OrDel ?>">Delete</button>
              </form>
              </div>
            </div>
            
        
        
        </div>

    </div>
    
    <?php
      }//while end
    }
    ?>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col" style="padding: 1rem;">
        
        <input type="text" class="form-control" name="Code" placeholder="Code" >
      </div>
      <div class="col"></div>
      <div class="col h3" style="padding: 1rem;">₱ <?= $Total?>.00</div>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <div class="row">

      <div class="Pay-Meth" >
        <h5>Payment Method</h5>
      
            <div class="form-check"style="border-top: 1px solid #dee2e6;">
                <input class="form-check-input" type="radio" name="PaymentMeth" id="flexRadioDefault1" value="Over The Counter">
                <label class="form-check-label" for="flexRadioDefault1">
                Over The Counter
                </label>
            </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="PaymentMeth" id="flexRadioDefault2" value="Paymaya">
                <label class="form-check-label" for="flexRadioDefault2">
                Paymaya
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="PaymentMeth" id="flexRadioDefault3" value="GCash">
                <label class="form-check-label" for="flexRadioDefault3">
                  GCash
                </label>
            </div>
            <span class="invalid-feedback"><?php echo $PaymentMeth_err; ?></span>
        </div>
        
        
    </div>
    
    <div class="row" style="padding: 0.5rem;">
      <div class="col"></div>
      <div class="col"></div>
      <div class="col" style="text-align: right;">
      <button type="Submit" name="ChkOut" class="btn-default btn-lg" value="">Check Out</button>
      </form>
    </div>
    </div>
  

  </div>
  

</body>

</html>
