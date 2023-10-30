<?php
session_start();
require_once "database/conn.php";

$Cupsize = $AddMilk = $AddFlavor = $AddSauces = $AddToppings =  "";

$Cupsize_err =  "";




if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["Cup-Size"])) {
        $Cupsize_err = "Please Select Cup Size";
    } else {
        $Cupsize = $_POST["Cup-Size"];
    }
    if (isset($_POST["Milk"])) {
        $AddMilk = $_POST["Milk"];
    }
    if (isset($_POST["Flavor"])) {
        $AddFlavor = $_POST["Flavor"];
    }
    if (isset($_POST["Sauces"])) {
        $AddSauces = $_POST["Sauces"];
    }
    if (isset($_POST["Toppings"])) {
        $AddToppings = $_POST["Toppings"];
    }

    $original = $_SESSION['menu_price'];

    $cup_ex = explode("|", $_POST["cup_cat"]);
    $cup = $cup_ex[0];
    $cup_cat = $cup_ex[1];

    $toppings_ex = explode("|", $_POST["toppings_cat"]);
    $toppings = $toppings_ex[0];
    $toppings_cat = $toppings_ex[1];

    $milk_ex = explode("|", $_POST["milk_cat"]);
    $milk = $milk_ex[0];
    $milk_cat = $milk_ex[1];

    $syrup_ex = explode("|", $_POST["syrup_cat"]);
    $syrup = $syrup_ex[0];
    $syrup_cat = $syrup_ex[1];

    $sauce_ex = explode("|", $_POST["sauce_cat"]);
    $sauce = $sauce_ex[0];
    $sauce_cat = $sauce_ex[1];




    $MenuID = $_SESSION["menu_id"];
    $MenuImage = $_SESSION["menu_image"];
    $OrderName = $_SESSION["menu_name"];

    //$ItemPrice = $_SESSION['menu_price'];
    // Quantity
    $NameComp = "SELECT * FROM cart_drinks WHERE OrderName = ? ";

    // Handle form values


    // Calculate total
    $total = $original + floatval($cup)  + floatval($toppings) + floatval($milk) + floatval($syrup )+ floatval($sauce);


    $sql = "INSERT INTO cart_drinks (menu_id, MenuImage, OrderName, Price, CupSize, AddMilk, AddFlavor, AddSauces, AddToppings) VALUES(?,?,?,?,?,?,?,?,?)";
    $sql1 = "INSERT INTO cart (drinks_id) VALUES(?)";



    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "sssssssss", $param_MenuID, $param_MenuImage, $param_OrderName, $param_ItemPrice, $param_CupSize, $param_AddMilk, $param_AddFlavor, $param_AddSauces, $param_AddToppings);
        $param_MenuID = $MenuID;
        $param_ItemPrice = $total;
        $param_MenuImage = $MenuImage;
        $param_OrderName = $OrderName;
        $param_CupSize = $cup_cat;
        $param_AddMilk = $milk_cat;
        $param_AddFlavor = $syrup_cat;
        $param_AddSauces = $sauce_cat;
        $param_AddToppings = $toppings_cat;
        if (mysqli_stmt_execute($stmt)) {
            $lastid = mysqli_insert_id($link);
            $sql = "INSERT INTO cart (drinks_id) VALUES ($lastid)";
            mysqli_query($link, $sql);
            header("location: menu.php");
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
        mysqli_stmt_close($stmt);
    }
}
?>
<?php
ob_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Starbucks_Corporation_Logo_2011.svg/1200px-Starbucks_Corporation_Logo_2011.svg.png" type="image/png">
    <title>Order</title>
</head>

<?php include 'Source.php' ?>
<?php
// require functions.php file
require('functions.php');
?>

<body>
     <!-- Cart -->
    <?php
    include('include/cart/cart.php');
    ?>
    <br> <br> <br> <br>
    <?php

    $menu_id = $_GET['menu_id'] ?? 1;
    foreach ($menu->getData() as $item) :
        if ($item['menu_id'] == $menu_id) :

    ?>

            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 g-4">


                    <div class="col">

                        <div>
                            <!-- Get Image Order -->
                            <img src="<?php echo $item['menu_image'] ?? "./menu-img/not.png";  ?>" style="width: 90%;  border-radius: 25px;" alt="">

                        </div>
                        <div style="padding: 1rem;">
                            <h3><?php echo $item['menu_name'] ?? "Unknown";  ?></h3>
                            <h4>from ₱ <?php echo $item['menu_price']  ?? "0.00"; ?> </h4>

                        </div>

                    </div>
                    <form id="step1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <?php
                        $_SESSION["menu_id"] = $item["menu_id"];
                        $_SESSION["menu_name"] = $item["menu_name"];
                        $_SESSION["menu_image"] = $item["menu_image"];
                        $_SESSION['menu_price'] = $item['menu_price'];

                        ?>

                        <div class="col">


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Cup Size
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        Size Here
                                        <?php
                                        foreach ($menu->getData('category') as $item2) :
                                            $cart = $menu->getProduct_add($item2['cat_id']);

                                            $result = $menu->getMenu($item2['category']);


                                            if ($item2['category'] == 'cup size') {

                                        ?>

                                                <div class="form-check" style="border-top: 1px solid #dee2e6;">


                                                    <input class="form-check-input" type="radio" name="cup_cat" id="flexRadioDefault1" value="<?php echo $item2['cat_amount'] . '|' . $item2['sub_cat']; ?>">

                                                    <label class="form-check-label" style="width: 100%;" for="" name="" value="">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h6 style='float: left; width:100%; '><?php echo $item2['sub_cat'] ?></h6>
                                                            </div>
                                                            <div class="col">
                                                                <h6 style='float: right; '><?php echo "+ " . $item2['cat_amount'] ?> </h6>
                                                            </div>
                                                        </div>
                                                    </label>


                                                </div>
                                        <?php
                                            }

                                        endforeach;
                                        ?>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                        Additional
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        <div class="add" style="padding-bottom: 1rem;">

                                            <div class="row">
                                                <div class="col d-grid gap-2">
                                                    Milk
                                                </div>
                                            </div>


                                            <?php

                                            foreach ($menu->join() as $item2) :

                                                $result = $menu->getMenu($item2['category']);


                                                if ($item2['category'] == 'milk') {
                                            ?>

                                                    <div class="row" style="border-top: 1px solid #dee2e6;">

                                                        <div class="col d-grid gap-2">

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="milk_cat" id="flexRadioDefault1" value="<?php echo $item2['cat_amount'] . '|' . $item2['sub_cat'] ; ?>">
                                                                <label class="form-check-label" style="width: 100%;" for="" name="" value="">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <h6 style='float: left; width:100%; '><?php echo $item2['sub_cat'] ?></h6>
                                                                        </div>
                                                                        <div class="col">
                                                                            <h6 style='float: right; '><?php echo "+ " . $item2['cat_amount'] ?> </h6>
                                                                        </div>
                                                                    </div>
                                                                </label>


                                                            </div>

                                                        </div>

                                                    </div>
                                            <?php

                                                }
                                            endforeach;
                                            ?>


                                        </div>
                                        <div class="row" style="padding-bottom: 1rem;">
                                            <div class="add" style="padding-bottom: 1rem;">

                                                <div class="row">
                                                    <div class="col d-grid gap-2">
                                                        Flavor
                                                    </div>
                                                </div>


                                                <?php

                                                foreach ($menu->join() as $item2) :

                                                    $result = $menu->getMenu($item2['category']);


                                                    if ($item2['category'] == 'syrup') {
                                                ?>

                                                        <div class="row" style="border-top: 1px solid #dee2e6;">

                                                            <div class="col d-grid gap-2">

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="syrup_cat" id="flexRadioDefault1" value="<?php echo $item2['cat_amount'] . '|' . $item2['sub_cat'] ; ?>">
                                                                    <label class="form-check-label" style="width: 100%;" for="" name="" value="">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <h6 style='float: left; width:100%; '><?php echo $item2['sub_cat'] ?></h6>
                                                                            </div>
                                                                            <div class="col">
                                                                                <h6 style='float: right; '><?php echo "+ " . $item2['cat_amount'] ?> </h6>
                                                                            </div>
                                                                        </div>
                                                                    </label>


                                                                </div>

                                                            </div>

                                                        </div>
                                                <?php

                                                    }
                                                endforeach;
                                                ?>


                                            </div>

                                        </div>

                                        <div class="row" style="padding-bottom: 1rem;">
                                            <div class="add" style="padding-bottom: 1rem;">

                                                <div class="row">
                                                    <div class="col d-grid gap-2">
                                                        Sauces
                                                    </div>
                                                </div>


                                                <?php

                                                foreach ($menu->join() as $item2) :

                                                    $result = $menu->getMenu($item2['category']);


                                                    if ($item2['category'] == 'sauce') {
                                                ?>

                                                        <div class="row" style="border-top: 1px solid #dee2e6;">

                                                            <div class="col d-grid gap-2">

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="sauce_cat" id="flexRadioDefault1" value="<?php echo $item2['cat_amount'] . '|' . $item2['sub_cat'] ; ?>">
                                                                    <label class="form-check-label" style="width: 100%;" for="" name="" value="">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <h6 style='float: left; width:100%; '><?php echo  $item2['sub_cat'] ?></h6>
                                                                            </div>
                                                                            <div class="col">
                                                                                <h6 style='float: right; '><?php echo "+ " . $item2['cat_amount'] ?> </h6>
                                                                            </div>
                                                                        </div>
                                                                    </label>


                                                                </div>

                                                            </div>

                                                        </div>
                                                <?php

                                                    }
                                                endforeach;
                                                ?>


                                            </div>

                                            <?php


                                            foreach ($menu->getData('category') as $item2) {







                                            ?>

                                            <?php


                                            }
                                            ?>
                                        </div>
                                        <div class="add" style="padding-bottom: 1rem;">

                                            <div class="row">
                                                <div class="col d-grid gap-2">
                                                    Toppings
                                                </div>
                                            </div>


                                            <?php

                                            foreach ($menu->join() as $item2) :

                                                $result = $menu->getMenu($item2['category']);


                                                if ($item2['category'] == 'toppings') {
                                            ?>

                                                    <div class="row" style="border-top: 1px solid #dee2e6;">

                                                        <div class="col d-grid gap-2">

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="toppings_cat" id="flexRadioDefault1" value="<?php echo $item2['cat_amount'] . '|' . $item2['sub_cat'] ; ?>">
                                                                <label class="form-check-label" style="width: 100%;" for="" name="" value="">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <h6 style='float: left; width:100%; '><?php echo  $item2['sub_cat'] ?></h6>
                                                                        </div>
                                                                        <div class="col">
                                                                            <h6 style='float: right; '><?php echo "+ " . $item2['cat_amount'] ?> </h6>
                                                                        </div>
                                                                    </div>
                                                                </label>


                                                            </div>

                                                        </div>

                                                    </div>
                                            <?php

                                                }
                                            endforeach;
                                            ?>


                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col text-center d-grid gap-2 col-6 mx-auto">
                                        <button onclick="history.back()" type="button" class="btn-default btn-lg" value="">Cancel</button>
                                    </div>
                                    <div class="col text-center d-grid gap-2 col-6 mx-auto">
                                        <button type="Submit" class="btn-default btn-lg" value="Add-To-Cart">Add to cart</button>
                                    </div>
                                </div>

                            </div>

                    </form>

                </div>

            </div>

    <?php
        endif;
    endforeach;
    ?>



</body>

</html>