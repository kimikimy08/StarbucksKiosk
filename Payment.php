<?php
require_once "database/conn.php";

$Display = mysqli_query($link, "SELECT DISTINCT * FROM cart_drinks ");
$PaymentMeth = $PaymentMeth_err = $PromCode = $delete = "";

if (empty($_POST["PaymentMeth"])) {
    $PaymentMeth_err  = "Please Select Payment Method";
} else {
    $PaymentMeth = $_POST["PaymentMeth"];
}
if (isset($_POST["Code"])) {
    $PromCode = $_POST["Code"];
}
if (empty($PaymentMeth_err)) {
    header("location: Done.php");
}

if (isset($_POST['Delete'])) {
    $delete = $_POST['Delete'];
    $delete = substr($delete, 1);
    echo "<meta http-equiv='refresh' content='0'>";
}

$sql = "DELETE FROM cart_drinks WHERE drinks_id ='$delete'";
if (mysqli_query($link, $sql)) {

    $sql = "DELETE FROM cart WHERE drinks_id ='$delete'";
    if (mysqli_query($link, $sql)) {
    }
}

$sql = "DELETE FROM cart WHERE menu_id ='$delete'";
if (mysqli_query($link, $sql)) {
}





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Starbucks_Corporation_Logo_2011.svg/1200px-Starbucks_Corporation_Logo_2011.svg.png" type="image/png">
    <title> Starbucks - Payment</title>
    <meta charset="utf-8">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Starbucks_Corporation_Logo_2011.svg/1200px-Starbucks_Corporation_Logo_2011.svg.png" type="image/png">
    <title> Starbucks - Menu </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" href="Main.css"> -->
    <link rel="stylesheet" href="css/Payment.css">


</head>
<?php
// require functions.php file
require('functions.php');

?>

<body>
    <!-- Logo -->
    <?php
    include('include/logo/logo.php');
    ?>
    <br>
    <!-- Cart -->
    <br> <br>
    <?php
    include('include/cart/cart.php');
    ?>
    <br> <br> <br>
    <div class="container-2">
        <?php
        include('cart.php');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['delete-cart-submit'])) {
                $deletedrecord = $Cart->deleteCart($_POST['item_id']);
                $deletedrecord1 = $Cart->deleteCart1($_POST['drinks_id']);
            }
        }
        ?>

        <!-- <div class="row"> -->

            <!-- <div class="col h2 ">
                <a href="menu.php"><img src="https://logos-world.net/wp-content/uploads/2020/09/Starbucks-Emblem.png" class="Logo" alt="Logo" /></a>
            </div> -->

        <!-- </div> -->
        <h3 style="text-align: left;">Order here</h3>
        <?php
        foreach ($menu->getData('cart') as $item) :

            $cart = $menu->getProduct($item['menu_id']);
            $cart1 = $menu->getProduct_drinks($item['drinks_id']);
            if (is_null($item['menu_id'])) {
                $subTotal[] = array_map(function ($item) {
        ?>


                    <div class="row" style="min-height: 20vh; border-top: 1px solid #dee2e6;">

                        <div class="col" style="text-align: left;">

                            <!-- Display Item From Database -->


                            <div class="row" style="padding: 1rem; margin: 1%; background-color: #FFFFFF; border-radius: 10px; border: 1px solid #dfdfdf;">
                                <div class="col">
                                    <div>
                                        <img src="<?php echo $item['MenuImage'] ?? "./menu-img/Warm Drinks/Brewed Coffee/Caffe ministo.jpeg"; ?>" style="width: 80%; border-radius: 25px;">
                                    </div>
                                    <div style="padding: 0.5rem;">
                                        <h3>₱<span class="product_price" data-id="<?php echo $item['drinks_id'] ?? '0'; ?>"><?php echo $item['Price'] ?? "0.00"; ?></span></h3>
                                    </div>

                                </div>
                                <div class="col" style="margin: auto;">
                                    <h5><?php echo $item["OrderName"] ?? "Unknown"; ?></h6><br>
                                        <h6><?php echo $item["CupSize"] ?><br>
                                            <?php echo $item["AddMilk"] ?><br>
                                            <?php echo $item["AddFlavor"] ?><br>
                                            <?php echo $item["AddSauces"] ?><br>
                                            <?php $item["AddToppings"] ?><br>
                                        </h6>

                                </div>
                                <div class="col text-center h3" style="padding-top: 8%;">
                                    <?php
                                    $OrDel = $item["OrderName"];
                                    $OrPri = $item["Price"];
                                    ?>



                                    <div class="qty d-flex pt-2">
                                        <div class="d-flex font-rale w-25">
                                            <button data-id="<?php echo $item['drinks_id'] ?? '0'; ?>" class="qty-down btn-default btn-lg "><i class="fas fa-angle-down"></i></button>
                                            <input style="text-align: center;" type="text" size="3" data-id="<?php echo $item['drinks_id'] ?? '0'; ?>" class="qty_input border bg-light" disabled value="1" placeholder="1">
                                            <button class="qty-up btn-default btn-lg" data-id="<?php echo $item['drinks_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                        </div>


                                    </div>


                                </div>
                                <div class="col text-center" style="padding-top: 8%;">
                                    <?php $OrDel = $item["drinks_id"] ?>
                                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                                        <button type="Submit" name="Delete" class="btn-default btn-lg" value=" <?= $OrDel ?>">Delete</button>
                                    </form>
                                </div>
                            </div>



                        </div>

                    </div>

                <?php
                    return $item['Price'];
                }, $cart1);





                ?>

                <!-- !cart item -->
                <?php



            } else {
                $subTotal[] = array_map(function ($item) {

                ?>




                    <div class="row" style="min-height: 20vh; border-top: 1px solid #dee2e6;">

                        <div class="col" style="text-align: left;">

                            <!-- Display Item From Database -->


                            <div class="row" style="padding: 1rem; margin: 1%; background-color: #FFFFFF; border-radius: 10px; border: 1px solid #dfdfdf;">
                                <div class="col">
                                    <div>
                                        <img src="<?php echo $item['menu_image'] ?? "./menu-img/not.png"; ?>" style="width: 80%; border-radius: 25px;">
                                    </div>
                                    <div style="padding: 0.5rem;">
                                        <h3>₱<span class="product_price1" data-id="<?php echo $item['menu_id'] ?? '0'; ?>"><?php echo $item['menu_price'] ?? "0.00"; ?></span></h3>
                                    </div>

                                </div>

                                <div class="col" style="margin: auto;">
                                    <h5><?php echo $item["menu_name"] ?? "Unknown"; ?></h6><br>

                                </div>

                                <div class="col text-center h3" style="padding-top: 8%;">
                                    <?php
                                    $OrDel = $item["menu_name"];
                                    $OrPri = $item["menu_price"];
                                    ?>



                                    <div class="qty1 d-flex pt-2">
                                        <div class="d-flex font-rale w-25">
                                            <button data-id="<?php echo $item['menu_id'] ?? '0'; ?>" class="qty-down1 btn-default btn-lg "><i class="fas fa-angle-down"></i></button>
                                            <input style="text-align: center;" type="text" size="3" data-id="<?php echo $item['menu_id'] ?? '0'; ?>" class="qty_input1 border bg-light" disabled value="1" placeholder="1">
                                            <button class="qty-up1 btn-default btn-lg" data-id="<?php echo $item['menu_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                        </div>


                                    </div>


                                </div>
                                <div class="col text-center" style="padding-top: 8%;">
                                    <?php $OrDel = $item["menu_id"] ?>
                                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                                        <button type="Submit" name="Delete" class="btn-default btn-lg" value=" <?= $OrDel ?>">Delete</button>
                                    </form>
                                </div>
                            </div>



                        </div>

                    </div>

        <?php

                    return $item['menu_price'];
                }, $cart);
            }

        endforeach;

        ?>



        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col"></div>
            <div class="col h3" style="padding: 1rem;">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">₱<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span></div>

        </div>
        <form action="Done.php" method="POST">

            <div class="row" style="padding: 0.5rem;">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col" style="text-align: right;">
                    <input type="hidden" name="price_price" id="price_price" value="<?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?>" />
                    <input type="hidden" name="item_name" id="item_name" value="Starbucks" />
                    <button class="btn-default btn-lg" name="submit" id="button" value="<?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?>">Check Out</button>
                   


        </form>
        <button class="btn-default btn-lg" name="" id="" value=""> <a href="index.php" style="text-decoration: none; color:white">Cancel</a></button>
    </div>
    </div>


    </div>
    <!-- !start #footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

    <!-- Custom Javascript -->
    <script src="index.js"></script>

</body>

</html>