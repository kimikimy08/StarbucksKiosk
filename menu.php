<?php


ob_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Starbucks_Corporation_Logo_2011.svg/1200px-Starbucks_Corporation_Logo_2011.svg.png" type="image/png">
    <title> Starbucks - Menu </title>

    <!-- FONT AWESOME  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- EXTERNAL CSS  -->
    <link rel="stylesheet" href="css/menu.css">

    <?php
    // require functions.php file
    require('functions.php');
    ?>

</head>

<body>
    <section>
        <!-- Logo -->
        <?php
        include('include/logo/logo.php');
        ?>
        <!-- Cart -->
        <br>
        <?php
        include('include/cart/cart.php');
        ?>
        <br> <br> <br> 

        <?php

        $menu_shuffle = $menu->getData();

        $category = array_map(function ($pro) {
            return $pro['menu_category'];
        }, $menu_shuffle);
        $unique = array_unique($category);
        sort($unique);
        shuffle($menu_shuffle);

        // request method post
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['menu_submit'])) {
                // call method addToCart
                $Cart->addToCart($_POST['menu_id']);
            }
        }
        ?>

        <div class="menu-btns">

            <button type="button" class="menu-btn active-btn" id="all">All Menu</button>
            <?php

            array_map(function ($category) {
                $brand = strtolower(str_replace(' ', '-', $category));
                printf('<button type = "button" class="menu-btn" data-filter=".%s" id="%s">%s</button>', $brand, $brand, $category);
            }, $unique);

            ?>

        </div>

        <div class="food-items">
            <!-- WARM DRINKS -->

            <div class="food-item all">
                <div class="food-img">
                    <a href="inventory.php">
                        <img src="https://www.shareicon.net/data/2015/09/01/94161_add_512x512.png" alt="">
                    </a>
                </div>
                <div class="food-content">
                    <h2 class="food-name "> ITEM NAME (CATERGORY) </h2>
                    <div class="line"></div>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                    <p class="category"> PRODUCT DESCRIPTION.</p>
                    <!-- <a href="#" class="btn"> 
                        <p> Buy </p>
                    </a> -->
                </div>
            </div>




            <?php foreach ($menu_shuffle as $item) { ?>
                <div class="food-item all <?php echo strtolower(str_replace(' ', '-', $item['menu_category'])); ?>">
                    <div class="food-img">

                        <img src="<?php echo $item['menu_image'] ?? "./menu-img/not.png"; ?>" alt="product1" class="img-fluid">
                    </div>
                    <div class="food-content">
                        <h2 class="food-name"> <?php echo $item['menu_name'] ?? "Unknown"; ?></h2>
                        <div class="line"></div>
                        <h3 class="food-price">₱ <?php echo $item['menu_price'] ?? "0.00"; ?></h3>
                        <ul class="rating">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star-half-alt"></i></li>
                        </ul>
                        <p class="category"> <?php echo $item['menu_description'] ?? " "; ?></p>
                        <form method="post">
                            <input type="hidden" name="menu_id" value="<?php echo $item['menu_id'] ?? '1'; ?>">
                            <?php


                            if ($item['menu_category'] == "warm drinks" or $item['menu_category'] == "cold drinks") {

                                if (in_array($item['menu_id'], $Cart->getCartId($menu->getData('cart')) ?? [])) {
                                    echo '<button type="submit" class="btn1" disabled><p> In a Cart</p></button>';
                                } else {

                            ?>
                                    <a href="<?php printf('%s?menu_id=%s', 'Order.php',  $item['menu_id']); ?>" class='btn'>
                                        <p>Buy</p>
                                    </a>
                            <?php
                                }
                            } else {
                                if (in_array($item['menu_id'], $Cart->getCartId($menu->getData('cart')) ?? [])) {
                                    echo '<button type="submit" class="btn1" disabled><p> In a Cart</p></button>';
                                } else {

                                    echo '<button type="submit" name="menu_submit" class="btn"><p >Buy</p></button>';
                                }
                            }

                            ?>

                        </form>

                    </div>
                </div>

            <?php } // closing foreach function 
            ?>

            <!--END OF WARM DRINKS -->



        </div>
    </section>



    <!-- custom js file link  -->
    <script src="js/menu.js"></script>

</body>

</html>