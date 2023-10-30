<?php
session_start();

$Cupsize = $AddMilk = $AddFlavor = $AddFlavoP = $AddSauces = $AddSaucesP = $AddToppings =  "";

$Cupsize_err = $AddFlavorP_err = $AddSaucesP_err =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["CupSize"])) {
        $Cupsize_err = "Please Select Cup Size";
    } else {
        $Cupsize = $_POST["CupSize"];
    }
    if (isset($_POST["Milk"])) {
        $AddMilk = $_POST["Milk"];
    }
    if (isset($_POST["Flavor"])) {
        if ($_POST["Flavor-P"] == 0) {
            $AddFlavorP_err = "Select how many Pumps";
        } else {
            $AddFlavor = $_POST["Flavor"];
            $AddFlavorP = $_POST["Flavor-P"];
        }
    }
    if (isset($_POST["Sauces"])) {
        if ($_POST["Sauces-P"] == 0) {
            $AddSaucesP_err = "Select how many Pumps";
        } else {
            $AddSauces = $_POST["Sauces"];
            $AddSaucesP = $_POST["Sauces-P"];
        }
    }
    if (isset($_POST["Toppings"])) {
        $AddToppings = $_POST["Toppings"];
        foreach ($AddToppings as $Top) {
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Order</title>
</head>
<?php include 'Source.php' ?>
<?php
// require functions.php file
require('functions.php');
?>

<body>

    <?php
    $menu_id = $_GET['menu_id'] ?? 1;
    foreach ($menu->getData() as $item) :
        if ($item['menu_id'] == $menu_id) :
    ?>

            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 g-4" ß>


                    <div class="col">

                        <div>
                            <!-- Get Image Order -->
                            <img src="<?php echo $item['menu_image'] ?? "./menu-img/Warm Drinks/Brewed Coffee/Caffe ministo.jpeg"; ?>" style="width: 90%;  border-radius: 25px;" alt="">

                        </div>
                        <div style="padding: 1rem;">
                            <h3><?php echo $item['menu_name'] ?? "Unknown"; ?></h3>
                            <h3>₱ <?php echo $item['menu_price'] ?? "0.00"; ?> </h3>
                        </div>

                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

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
                                        foreach ($menu->getData('category') as $item) :
                                            $result = $menu->getMenu($item['category']);
                                            

                                            if ($item['category'] == 'cup size') {
                                        ?>

                                                <div class="form-check" style="border-top: 1px solid #dee2e6;">
                                                    <input class="form-check-input" type="radio" name="Cup-Size" id="flexRadioDefault1" value="Short">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        <?php echo $item['sub_cat'] ?? " "; ?>
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
                                        <div class="Add" style="padding-bottom: 1rem;">

                                            <select class="form-select" name="Milk" aria-label="Default select example">
                                                <?php

                                                foreach ($menu->getData('category') as $item) :
                                                    $result = $menu->getMenu();
                                                    

                                                    if ($item['category'] == 'milk') {
                                                ?>
                                                        <option selected><?php echo $item['sub_cat'] ?? " "; ?></option>
                                                <?php

                                                    }
                                                endforeach;
                                                ?>
                                            </select>

                                        </div>
                                        <div class="row" style="padding-bottom: 1rem;">
                                            <div class="col text-center d-grid gap-2">
                                                <select class="form-select" name="Flavor" aria-label="Default select example">
                                                    <option selected>Flavor</option>
                                                    <?php
                                                    foreach ($menu->getData('category') as $item) :
                                                        $result = $menu->getMenu($item['category']);

                                                        if ($item['category'] == 'syrup') {
                                                    ?>
                                                            <option value="Brown-Sugar-Syrup"><?php echo $item['sub_cat'] ?? " "; ?></option>


                                                    <?php

                                                        }
                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col text-center d-grid gap-2">
                                                <select class="form-select" name="Flavor-P" aria-label="Default select example">
                                                    <option selected>Pumps</option>
                                                    <option value="1">1 pump</option>
                                                    <option value="2">2 pumps</option>
                                                    <option value="3">3 pumps</option>
                                                    <option value="4">4 pumps</option>
                                                    <option value="5">5 pumps</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row" style="padding-bottom: 1rem;">
                                            <div class="col text-center d-grid gap-2">
                                                <select class="form-select" name="Sauces" aria-label="Default select example">
                                                    <option selected>Sauces</option>
                                                    <?php
                                                    foreach ($menu->getData('category') as $item) :
                                                        $result = $menu->getMenu($item['category']);

                                                        if ($item['category'] == 'sauce') {
                                                    ?>
                                                            <option value="Mocha-Sauce"><?php echo $item['sub_cat'] ?? " "; ?></option>
                                                    <?php

                                                        }
                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col text-center d-grid gap-2">
                                                <select class="form-select" name="Sauces-P" aria-label="Default select example">
                                                    <option selected>Pumps</option>
                                                    <option value="1">1 pump</option>
                                                    <option value="2">2 pumps</option>
                                                    <option value="3">3 pumps</option>
                                                    <option value="4">4 pumps</option>
                                                    <option value="5">5 pumps</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="add" style="padding-bottom: 1rem;">

                                            <div class="row">
                                                <div class="col d-grid gap-2">
                                                    Toppings
                                                </div>
                                            </div>

                                            <?php
                                            foreach ($menu->getData('category') as $item) :
                                                $result = $menu->getMenu($item['category']);

                                                if ($item['category'] == 'toppings') {
                                            ?>

                                                    <div class="row" style="border-top: 1px solid #dee2e6;">

                                                        <div class="col d-grid gap-2">

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="Toppings[]" value="CinnamonDolceSprinkles" id="CDS">
                                                                <label class="form-check-label" for="CDS">
                                                                <?php echo $item['sub_cat'] ?? " "; ?>
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