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

</head>

<body>
    <!-- Logo -->
    <section>
        <?php
        include('include/logo/logo.php');
        ?>
        <div class="menu-btns">
            <button type="button" class="menu-btn active-btn" id="warm-drinks"> Warm Drinks </button>
            <button type="button" class="menu-btn" id="cold-drinks"> Cold Drinks </button>
            <button type="button" class="menu-btn" id="sandwiches"> Sandwiches </button>
        </div>

        <div class="food-items">
            <!-- WARM DRINKS -->


            <div class="food-item warm-drinks">
                <div class="food-img">
                    <img src="./menu-img/Warm Drinks/Brewed Coffee/Blonde Roast.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Blonde Roast (Brewed Coffee)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category"> Lightly roasted coffee that's soft, mellow and flavorful.
                        Easy-drinking on its own and delicious with milk, sugar or flavored with vanilla, caramel or hazelnut.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item warm-drinks">
                <div class="food-img">
                    <img src="./menu-img/Warm Drinks/Brewed Coffee/Caffe ministo.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Caffè Ministo (Brewed Coffee) </h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category"> A one-to-one combination of fresh-brewed coffee and steamed milk add up
                        to one distinctly delicious coffee drink remarkably mixed.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item warm-drinks">
                <div class="food-img">
                    <img src="./menu-img/Warm Drinks/Brewed Coffee/Decaf Pike Place Roast.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Decaf Pike Place Roast (Brewed Coffee) </h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category"> A smooth, well-rounded blend of Latin American coffees with subtly rich
                        flavors of chocolate and toasted nuts, it’s served fresh every day.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item warm-drinks">
                <div class="food-img">
                    <img src="./menu-img/Warm Drinks/Espresso Shots/Espresso.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Espresso (Espresso Shots) </h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category"> Our smooth signature Espresso Roast with rich flavor and caramelly sweetness
                        is at the very heart of everything we do.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item warm-drinks">
                <div class="food-img">
                    <img src="./menu-img/Warm Drinks/Espresso Shots/Espresso Con Panna.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Espresso Con Panna (Espresso Shots) </h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category"> Espresso meets a dollop of whipped cream to enhance the rich and caramelly
                        flavors of a straight-up shot.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item warm-drinks">
                <div class="food-img">
                    <img src="./menu-img/Warm Drinks/Macchiato/Caramel Macchiato.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Caramel Macchiato (Macchiato) </h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category"> Freshly steamed milk with vanilla-flavored syrup marked with espresso and
                        topped with a caramel drizzle for an oh-so-sweet finish.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item warm-drinks">
                <div class="food-img">
                    <img src="./menu-img/Warm Drinks/Macchiato/Espresso Macchiato.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Espresso Macchiato (Macchiato) </h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category"> Our rich espresso marked with dollop of steamed milk and foam. A European-style classic.
                    </p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item warm-drinks">
                <div class="food-img">
                    <img src="./menu-img/Warm Drinks/Green Teas/Jade Citrus Mint® Brewed Tea.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Jade Citrus Mint® Brewed Tea (Green Tea) </h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category"> Green tea, lemon verbena, lemongrass and a hint of spearmint mingle for a bright,
                        refreshing, citrusy green tea experience.
                    </p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item warm-drinks">
                <div class="food-img">
                    <img src="./menu-img/Warm Drinks/Green Teas/Matcha Tea Latte.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Matcha Tea Latte (Green Tea) </h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category"> Smooth and creamy matcha sweetened just right and served with steamed milk. T
                        his favorite will transport your senses to pure green delight.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item warm-drinks">
                <div class="food-img">
                    <img src="./menu-img/Warm Drinks/Green Teas/Emperor’s Clouds Mist.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Emperor’s Clouds & Mist® (Green Tea) </h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category"> This gently smoky, softly sweet green tea—cultivated at 3,500 feet and
                        shrouded in ethereal clouds and mist—is tasty no matter what language you say it in.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item warm-drinks">
                <div class="food-img">
                    <img src="./menu-img/Warm Drinks/Steamers/Steamed Milk.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Steamed Milk (Steamers) </h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category"> Enjoy a warm cup of skim, 2%, soy, almond or coconut milk steamed for your sipping pleasure.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item warm-drinks">
                <div class="food-img">
                    <a href="">
                        <img src="https://www.shareicon.net/data/2015/09/01/94161_add_512x512.png" alt="">
                    </a>
                </div>
                <div class="food-content">
                    <h2 class="food-name"> ITEM NAME (CATERGORY) </h2>
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
            <!--END OF WARM DRINKS -->


            <!-- COLD DRINKS -->

            <div class="food-item cold-drinks">
                <div class="food-img">
                    <img src="./menu-img/Cold Drinks/Iced Coconut Milk Drinks/iced_guava.webp" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Iced Guava Passion Fruit Drink (Iced Coconut Milk Drink)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category"> Guava juice blend with notes of passionfruit hand-shaken with flavors of pineapple
                        and ginger along with coconut milk and ice for a deliciously smooth and creamy beverage to uplift your day.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item cold-drinks">
                <div class="food-img">
                    <img src="./menu-img/Cold Drinks/Iced Coconut Milk Drinks/iced_pineapple.jpg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Iced Pineapple Matcha Drink (Iced Coconut Milk Drink)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category"> Our premium matcha green tea shaken with flavors of pineapple and ginger along with coconut
                        milk and ice for a delicious beverage to uplift your day.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item cold-drinks">
                <div class="food-img">
                    <img src="./menu-img/Cold Drinks/Starbucks Refreshers/pink_drink.webp" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Pink Drink (Refresher)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category"> Our crisp, Strawberry Açaí Refreshers® Beverage, with its accents of passion fruit,
                        is combined with creamy coconut milk. A fruity and refreshing sip of spring, no matter what time of year.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item cold-drinks">
                <div class="food-img">
                    <img src="./menu-img/Cold Drinks/Starbucks Refreshers/very_berry.webp" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Very Berry Hibiscus Refreshers® Beverage (Refresher)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category"> Real fruit juice and whole blackberries shaken with Green Coffee Extract for a boost of natural energy, served over ice.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item cold-drinks">
                <div class="food-img">
                    <img src="./menu-img/Cold Drinks/Starbucks Refreshers/kiwi_starfruit.webp" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Kiwi Starfruit Lemonade Refreshers® Beverage (Refresher)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category"> Starfruit- and kiwi-flavored juice, lemonade and real kiwi fruit pieces shaken with ice. A super-summer pick-me-up</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item cold-drinks">
                <div class="food-img">
                    <img src="./menu-img/Cold Drinks/Bottled Teas/teavana_sparkling.webp" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Teavana® Sparkling Unsweetened Peach Nectarine Green Tea (Bottled Tea)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category"> This special unsweetened combination of peach and nectarine flavors plus green tea adds a
                        delicious sparkle of nourishment to your day. </p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item cold-drinks">
                <div class="food-img">
                    <img src="./menu-img/Cold Drinks/Bottled Teas/teavana_mango.webp" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Teavana® Mango Black Tea (Bottled Tea)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category"> We start with fine black tea then blend it with refreshing mango notes and hints of crisp lime,
                        giving your day a refreshing lift. </p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item cold-drinks">
                <div class="food-img">
                    <img src="./menu-img/Cold Drinks/Iced Black Teas/Iced Royal English Breakfast Tea Latte.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Iced Royal English Breakfast Tea Latte (Iced Black Tea)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category"> A select blend of rich, full-leaf black teas from India and Sri Lanka sweetened with liquid
                        cane sugar and combined with milk and ice. </p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item cold-drinks">
                <div class="food-img">
                    <img src="./menu-img/Cold Drinks/Iced Black Teas/Iced Guava Black Tea.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Iced Guava Black Tea (Iced Black Tea)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category"> Boldly flavored iced tea made with a combination of our guava-flavored fruit juice blend and
                        Teavana® iced black tea, and hand-shaken with ice. A refreshing lift to any day. </p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item cold-drinks">
                <div class="food-img">
                    <img src="./menu-img/Cold Drinks/Iced Black Teas/Iced Black Tea Lemonade.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Iced Black Tea Lemonade (Iced Black Tea)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category"> Premium black tea is shaken with refreshing lemonade and ice for this Arnold Palmer–inspired beverage.
                        A distinguished satisfying treat.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item cold-drinks">
                <div class="food-img">
                    <img src="./menu-img/Cold Drinks/Nitro Cold Brews/Honey Almondmilk Nitro Cold Brew.jpg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Honey Almond Milk Nitro Cold Brew® (Nitro Cold Brew)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category"> Nitro Cold Brew lightly sweetened with honey and topped off with almondmilk for a balanced taste of energy throughout.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item cold-drinks">
                <div class="food-img">
                    <img src="./menu-img/Cold Drinks/Nitro Cold Brews/Salted Caramel Cream Nitro Cold Brew.jpg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Salted Caramel Cream Nitro Cold Brew (Nitro Cold Brew)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category"> Velvety-smooth Nitro Cold Brew, sweetened with caramel, and topped with a salted, rich cold foam. Oh, so cool and sweet.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item cold-drinks">
                <div class="food-img">
                    <img src="./menu-img/Cold Drinks/Nitro Cold Brews/Vanilla Sweet Cream Nitro Cold Brew.jpg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Vanilla Sweet Cream Nitro Cold Brew (Nitro Cold Brew)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category"> Served cold, straight from the tap, our Nitro Cold Brew is topped with a float of house-made vanilla sweet cream.
                        The result: a cascade of velvety coffee that is more sippable than ever.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item cold-drinks">
                <div class="food-img">
                    <img src="./menu-img/Cold Drinks/iced Latte/Iced Starbucks® Blonde Vanilla Latte.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Iced Blonde Vanilla Latte (Iced Latte)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category"> Seriously smooth and subtly sweet Blonde Espresso, milk, ice and vanilla syrup come together
                        to create a delightful twist on a beloved espresso classic.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item cold-drinks">
                <div class="food-img">
                    <img src="./menu-img/Cold Drinks/iced Latte/Iced Cinnamon Dolce Latte.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Iced Cinnamon Dolce Latte (Iced Latte)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category"> We add freshly steamed milk and cinnamon dolce-flavored syrup to our classic espresso and ice,
                        topped with sweetened whipped cream and a cinnamon dolce topping to bring you specialness in a treat.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item cold-drinks">
                <div class="food-img">
                    <img src="./menu-img/Cold Drinks/iced Latte/Starbucks Reserve® Iced Hazelnut Bianco Latte.jpeg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name"> Reserve® Iced Hazelnut Bianco Latte (Iced Latte)</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category"> House-made hazelnut-praline-infused milk combined with our small-lot Reserve®
                        espresso and served over ice—a true character of sweetly chilled nut love.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>
            <div class="food-item cold-drinks">
                <div class="food-img">
                    <a href="">
                        <img src="https://www.shareicon.net/data/2015/09/01/94161_add_512x512.png" alt="">
                    </a>
                </div>
                <div class="food-content">
                    <h2 class="food-name"> ITEM NAME (CATERGORY) </h2>
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

            <!-- END OF COLD DRINKS -->


            <!-- SANDWICHES -->

            <div class="food-item sandwiches">
                <div class="food-img">
                    <img src="./menu-img/Sandwiches/Impossible™ Breakfast Sandwich.jpg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name">Impossible™ Breakfast Sandwich</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category">The savory Impossible™ Sausage Made from Plants combined with a cage-free
                        fried egg and aged cheddar cheese on an artisanal sesame ciabatta bread. </p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item sandwiches">
                <div class="food-img">
                    <img src="./menu-img/Sandwiches/Bacon, Gouda _ Egg Sandwich.jpg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name">Bacon, Gouda & Egg Sandwich</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category">Sizzling applewood-smoked bacon, melty aged Gouda and a Parmesan frittata
                        layered on an artisan roll for extra-smoky breakfast goodness.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item sandwiches">
                <div class="food-img">
                    <img src="./menu-img/Sandwiches/Double-Smoked Bacon, Cheddar _ Egg Sandwich.jpg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name">Double-Smoked Bacon, Cheddar & Egg Sandwich</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category">Bacon smoked for six hours over hickory wood chips, stacked with a fluffy
                        egg patty, topped with a creamy melted slice of sharp Cheddar, double-smoked deliciously to fill
                        you up—all on our signature croissant bun.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item sandwiches">
                <div class="food-img">
                    <img src="./menu-img/Sandwiches/Turkey Bacon, Cheddar _ Egg White Sandwich.jpg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name">Turkey Bacon, Cheddar & Egg White Sandwich</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category">Sizzling reduced-fat turkey bacon and wholesome cage-free egg whites are paired
                        with the rich creaminess of melted, reduced-fat white Cheddar cheese on a wheat English muffin.
                        So good and surprisingly only 230 calories.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item sandwiches">
                <div class="food-img">
                    <img src="./menu-img/Sandwiches/Sausage, Cheddar _ Egg Sandwich.jpg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name">Sausage, Cheddar & Egg Sandwich</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category">A savory sausage patty, fluffy eggs and aged Cheddar cheese served on a perfectly toasted
                        English muffin. An iconic sandwich that reminds you why you love breakfast.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item sandwiches">
                <div class="food-img">
                    <img src="./menu-img/Sandwiches/Crispy Grilled Cheese Sandwich.jpg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name">Crispy Grilled Cheese Sandwich</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category"> A delicious blend of white Cheddar and mozzarella cheeses on sourdough bread,
                        topped with a Parmesan butter spread.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item sandwiches">
                <div class="food-img">
                    <img src="./menu-img/Sandwiches/Roasted Ham, Swiss _ Egg Sandwich.jpg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name">Roasted Ham, Swiss & Egg Sandwich</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category">Take hickory-smoked ham and nutty, melty Swiss cheese layered on a flaky, buttery croissant,
                        and you’ve got the perfect wakeup call.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item sandwiches">
                <div class="food-img">
                    <img src="./menu-img/Sandwiches/Ham _ Swiss Panini.jpg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name">Ham & Swiss Panini</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category">Ham and Swiss cheese meld with Dijon butter in comforting warmth. An extraordinary feel-good taste.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item sandwiches">
                <div class="food-img">
                    <img src="./menu-img/Sandwiches/Turkey _ Pesto Panini.jpg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name">Turkey & Pesto Panini </h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                    <p class="category">Thick-sliced turkey and melted provolone cheese stacked on a ciabatta roll,
                        then topped with our signature basil pesto and dry-roasted red peppers. So tasty, you'll want seconds,
                        but so satisfying, you won't need them. Turkeys are raised without the use of antibiotics.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>

            <div class="food-item sandwiches">
                <div class="food-img">
                    <img src="./menu-img/Sandwiches/Chicken _ Bacon Panini.jpg" alt="">
                </div>
                <div class="food-content">
                    <h2 class="food-name">Chicken & Bacon Panini</h2>
                    <div class="line"></div>
                    <h3 class="food-price">$2.00</h3>
                    <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="category">Herbed chicken is slow-cooked and piled high on toasted apple brioche, topped
                        with our double-smoked bacon and maple mustard. . Chickens are raised without the use of antibiotics.</p>
                    <a href="#" class="btn">
                        <p> Buy </p>
                    </a>
                </div>
            </div>
            <div class="food-item sandwiches">
                <div class="food-img">
                    <a href="">
                        <img src="https://www.shareicon.net/data/2015/09/01/94161_add_512x512.png" alt="">
                    </a>
                </div>
                <div class="food-content">
                    <h2 class="food-name"> ITEM NAME (CATERGORY) </h2>
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
            <!-- END OF SANDWICHES -->
            
        </div>
    </section>

    <!-- Loader -->
    <?php
    include('include/loader/loader.php');
    ?>

    <!-- custom js file link  -->
    <script src="js/menu.js"></script>

</body>

</html>