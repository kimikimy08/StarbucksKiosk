-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2022 at 05:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starbucks`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `drinks_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `menu_id`, `drinks_id`) VALUES
(1, 33, NULL),
(2, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_drinks`
--

CREATE TABLE `cart_drinks` (
  `drinks_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `MenuImage` varchar(255) NOT NULL,
  `OrderName` varchar(255) NOT NULL,
  `Price` double(10,2) NOT NULL,
  `CupSize` varchar(255) NOT NULL,
  `AddMilk` varchar(255) DEFAULT NULL,
  `AddFlavor` varchar(255) DEFAULT NULL,
  `AddSauces` varchar(255) DEFAULT NULL,
  `AddToppings` varchar(255) DEFAULT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_drinks`
--

INSERT INTO `cart_drinks` (`drinks_id`, `menu_id`, `MenuImage`, `OrderName`, `Price`, `CupSize`, `AddMilk`, `AddFlavor`, `AddSauces`, `AddToppings`, `Time`) VALUES
(1, 27, './menu-img/Cold Drinks/iced Latte/Starbucks Reserve® Iced Hazelnut Bianco Latte.jpeg', 'Reserve® Iced Hazelnut Bianco Latte (Iced Latte)', 205.00, 'Short 8 fl oz', 'Heavy Cream', 'Caramel Syrup', 'Mocha Sauce', 'Caramel Drizzle', '2022-04-04 15:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub_cat` varchar(255) NOT NULL,
  `cat_amount` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`, `sub_cat`, `cat_amount`) VALUES
(1, 'cup size', 'Short 8 fl oz', 0.00),
(2, 'cup size', 'Tall 12 fl oz', 40.00),
(5, 'cup size', 'Grande 16 fl oz', 70.00),
(6, 'cup size', 'Venti 20 fl oz', 150.00),
(8, 'milk', 'Milk', 0.00),
(9, 'milk', 'Nonfat Milk', 0.00),
(10, 'milk', '2% Milk', 0.00),
(11, 'milk', 'Breve (Half & Half)', 0.00),
(12, 'milk', 'Heavy Cream', 0.00),
(13, 'milk', 'Almond', 0.00),
(14, 'milk', 'Coconut', 0.00),
(15, 'milk', 'Oatmilk', 0.00),
(16, 'milk', 'Soy', 0.00),
(17, 'syrup', 'Brown Sugar Syrup', 20.00),
(18, 'syrup', 'Caramel Syrup', 20.00),
(19, 'syrup', 'Cinnamon Dolce Syrup', 20.00),
(20, 'sauce', 'Mocha Sauce', 20.00),
(21, 'sauce', 'Dark Caramel Sauce', 20.00),
(22, 'sauce', 'Pistachio Sauce', 20.00),
(23, 'toppings', 'Cinnamon Dolce Sprinkles', 20.00),
(24, 'toppings', 'Caramel Drizzle', 20.00),
(25, 'toppings', 'Cinnamon Powder', 20.00),
(26, 'toppings', 'Whipped Cream', 20.00),
(27, 'toppings', 'Cold Foam', 20.00);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_category` varchar(200) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_price` double(10,2) NOT NULL,
  `menu_image` varchar(255) DEFAULT NULL,
  `menu_description` text DEFAULT NULL,
  `menu_register` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_category`, `menu_name`, `menu_price`, `menu_image`, `menu_description`, `menu_register`) VALUES
(1, 'warm drinks', 'Blonde Roast (Brewed Coffee)', 140.00, './menu-img/Warm Drinks/Brewed Coffee/Blonde Roast.jpeg', 'Lightly roasted coffee that\'s soft, mellow and flavorful. Easy-drinking on its own and delicious with milk, sugar or flavored with vanilla, caramel or hazelnut.', '2022-03-30 05:43:20'),
(2, 'warm drinks', 'Caffè Ministo (Brewed Coffee)', 140.00, './menu-img/Warm Drinks/Brewed Coffee/Caffe ministo.jpeg', 'A one-to-one combination of fresh-brewed coffee and steamed milk add up to one distinctly delicious coffee drink remarkably mixed.', '2022-03-30 05:43:20'),
(5, 'warm drinks', 'Espresso Con Panna (Espresso Shots)', 300.00, './menu-img/Warm Drinks/Espresso Shots/Espresso Con Panna.jpeg', 'Espresso meets a dollop of whipped cream to enhance the rich and caramelly flavors of a straight-up shot.', '2022-03-30 08:38:48'),
(6, 'warm drinks', 'Espresso (Espresso Shots)', 145.00, './menu-img/Warm Drinks/Espresso Shots/Espresso.jpeg', 'Our smooth signature Espresso Roast with rich flavor and caramelly sweetness is at the very heart of everything we do.', '2022-03-30 08:40:30'),
(7, 'warm drinks', 'Caramel Macchiato (Macchiato)', 145.00, './menu-img/Warm Drinks/Macchiato/Caramel Macchiato.jpeg', 'Freshly steamed milk with vanilla-flavored syrup marked with espresso and topped with a caramel drizzle for an oh-so-sweet finish.', '2022-03-30 08:40:30'),
(8, 'warm drinks', 'Espresso Macchiato (Macchiato)', 145.00, './menu-img/Warm Drinks/Macchiato/Espresso Macchiato.jpeg', 'Our rich espresso marked with dollop of steamed milk and foam. A European-style classic.', '2022-03-30 08:44:56'),
(9, 'warm drinks', 'Jade Citrus Mint® Brewed Tea (Green Tea)', 140.00, './menu-img/Warm Drinks/Green Teas/Jade Citrus Mint® Brewed Tea.jpeg', 'Green tea, lemon verbena, lemongrass and a hint of spearmint mingle for a bright, refreshing, citrusy green tea experience.', '2022-03-30 08:44:56'),
(10, 'warm drinks', 'Matcha Tea Latte (Green Tea)', 140.00, './menu-img/Warm Drinks/Green Teas/Matcha Tea Latte.jpeg', 'Smooth and creamy matcha sweetened just right and served with steamed milk. This favorite will transport your senses to pure green delight.', '2022-03-30 08:44:56'),
(11, 'warm drinks', 'Emperor’s Clouds & Mist® (Green Tea)', 140.00, './menu-img/Warm Drinks/Green Teas/Emperor’s Clouds Mist.jpeg', 'This gently smoky, softly sweet green tea—cultivated at 3,500 feet and shrouded in ethereal clouds and mist—is tasty no matter what language you say it in.', '2022-03-30 08:44:56'),
(12, 'warm drinks', 'Steamed Milk (Steamers)', 120.00, './menu-img/Warm Drinks/Steamers/Steamed Milk.jpeg', 'Enjoy a warm cup of skim, 2%, soy, almond or coconut milk steamed for your sipping pleasure.', '2022-03-30 08:44:56'),
(13, 'cold drinks', 'Iced Pineapple Matcha Drink (Iced Coconut Milk Drink)', 140.00, './menu-img/Cold Drinks/Iced Coconut Milk Drinks/iced_pineapple.jpg', 'Our premium matcha green tea shaken with flavors of pineapple and ginger along with coconut milk and ice for a delicious beverage to uplift your day.', '2022-03-30 08:53:55'),
(14, 'cold drinks', 'Pink Drink (Refresher)', 135.00, './menu-img/Cold Drinks/Starbucks Refreshers/pink_drink.webp', 'Our crisp, Strawberry Açaí Refreshers® Beverage, with its accents of passion fruit, is combined with creamy coconut milk. A fruity and refreshing sip of spring, no matter what time of year.', '2022-03-30 08:53:55'),
(15, 'cold drinks', 'Very Berry Hibiscus Refreshers® Beverage (Refresher)', 135.00, './menu-img/Cold Drinks/Starbucks Refreshers/very_berry.webp', 'Real fruit juice and whole blackberries shaken with Green Coffee Extract for a boost of natural energy, served over ice.', '2022-03-30 08:53:55'),
(16, 'cold drinks', 'Kiwi Starfruit Lemonade Refreshers® Beverage (Refresher)', 135.00, './menu-img/Cold Drinks/Starbucks Refreshers/kiwi_starfruit.webp', 'Starfruit- and kiwi-flavored juice, lemonade and real kiwi fruit pieces shaken with ice. A super-summer pick-me-up.', '2022-03-30 08:53:55'),
(17, 'cold drinks', 'Teavana® Sparkling Unsweetened Peach Nectarine Green Tea (Bottled Tea)', 125.00, './menu-img/Cold Drinks/Bottled Teas/teavana_sparkling.webp', 'This special unsweetened combination of peach and nectarine flavors plus green tea adds a delicious sparkle of nourishment to your day. ', '2022-03-30 08:53:55'),
(18, 'cold drinks', 'Teavana® Mango Black Tea (Bottled Tea)', 135.00, './menu-img/Cold Drinks/Bottled Teas/teavana_mango.webp', 'We start with fine black tea then blend it with refreshing mango notes and hints of crisp lime, giving your day a refreshing lift.', '2022-03-30 08:53:55'),
(19, 'cold drinks', 'Iced Royal English Breakfast Tea Latte (Iced Black Tea)', 135.00, './menu-img/Cold Drinks/Iced Black Teas/Iced Royal English Breakfast Tea Latte.jpeg', 'A select blend of rich, full-leaf black teas from India and Sri Lanka sweetened with liquid cane sugar and combined with milk and ice.', '2022-03-30 08:53:55'),
(20, 'cold drinks', 'Iced Guava Black Tea (Iced Black Tea)', 120.00, './menu-img/Cold Drinks/Iced Black Teas/Iced Guava Black Tea.jpeg', 'Boldly flavored iced tea made with a combination of our guava-flavored fruit juice blend and Teavana® iced black tea, and hand-shaken with ice. A refreshing lift to any day.', '2022-03-30 08:53:55'),
(21, 'cold drinks', 'Iced Black Tea Lemonade (Iced Black Tea)', 145.00, './menu-img/Cold Drinks/Iced Black Teas/Iced Black Tea Lemonade.jpeg', 'Premium black tea is shaken with refreshing lemonade and ice for this Arnold Palmer–inspired beverage. A distinguished satisfying treat.', '2022-03-30 08:59:36'),
(22, 'cold drinks', 'Honey Almond Milk Nitro Cold Brew® (Nitro Cold Brew)', 145.00, './menu-img/Cold Drinks/Nitro Cold Brews/Honey Almondmilk Nitro Cold Brew.jpg', 'Nitro Cold Brew lightly sweetened with honey and topped off with almondmilk for a balanced taste of energy throughout.', '2022-03-30 08:59:36'),
(23, 'cold drinks', 'Salted Caramel Cream Nitro Cold Brew (Nitro Cold Brew)', 135.00, './menu-img/Cold Drinks/Nitro Cold Brews/Salted Caramel Cream Nitro Cold Brew.jpg', 'Velvety-smooth Nitro Cold Brew, sweetened with caramel, and topped with a salted, rich cold foam. Oh, so cool and sweet.', '2022-03-30 08:59:36'),
(24, 'cold drinks', 'Vanilla Sweet Cream Nitro Cold Brew (Nitro Cold Brew)', 135.00, './menu-img/Cold Drinks/Nitro Cold Brews/Vanilla Sweet Cream Nitro Cold Brew.jpg', 'Served cold, straight from the tap, our Nitro Cold Brew is topped with a float of house-made vanilla sweet cream. The result: a cascade of velvety coffee that is more sippable than ever.', '2022-03-30 08:59:36'),
(25, 'cold drinks', 'Iced Blonde Vanilla Latte (Iced Latte)', 120.00, './menu-img/Cold Drinks/iced Latte/Iced Starbucks® Blonde Vanilla Latte.jpeg', 'Seriously smooth and subtly sweet Blonde Espresso, milk, ice and vanilla syrup come together to create a delightful twist on a beloved espresso classic.', '2022-03-30 08:59:36'),
(26, 'cold drinks', 'Iced Cinnamon Dolce Latte (Iced Latte)', 140.00, './menu-img/Cold Drinks/iced Latte/Iced Cinnamon Dolce Latte.jpeg', 'We add freshly steamed milk and cinnamon dolce-flavored syrup to our classic espresso and ice, topped with sweetened whipped cream and a cinnamon dolce topping to bring you specialness in a treat.', '2022-03-30 08:59:36'),
(27, 'cold drinks', 'Reserve® Iced Hazelnut Bianco Latte (Iced Latte)', 145.00, './menu-img/Cold Drinks/iced Latte/Starbucks Reserve® Iced Hazelnut Bianco Latte.jpeg', 'House-made hazelnut-praline-infused milk combined with our small-lot Reserve® espresso and served over ice—a true character of sweetly chilled nut love.', '2022-03-30 08:59:36'),
(28, 'sandwiches', 'Impossible™ Breakfast Sandwich', 180.00, './menu-img/Sandwiches/Impossible™ Breakfast Sandwich.jpg', 'The savory Impossible™ Sausage Made from Plants combined with a cage-free fried egg and aged cheddar cheese on an artisanal sesame ciabatta bread. ', '2022-03-30 09:08:46'),
(29, 'sandwiches', 'Bacon, Gouda & Egg Sandwich', 190.00, './menu-img/Sandwiches/Bacon, Gouda _ Egg Sandwich.jpg', 'Sizzling applewood-smoked bacon, melty aged Gouda and a Parmesan frittata layered on an artisan roll for extra-smoky breakfast goodness.', '2022-03-30 09:08:46'),
(30, 'sandwiches', 'Double-Smoked Bacon, Cheddar & Egg Sandwich', 210.00, './menu-img/Sandwiches/Double-Smoked Bacon, Cheddar _ Egg Sandwich.jpg', 'Bacon smoked for six hours over hickory wood chips, stacked with a fluffy egg patty, topped with a creamy melted slice of sharp Cheddar, double-smoked deliciously to fill you up—all on our signature croissant bun.', '2022-03-30 09:08:46'),
(31, 'sandwiches', 'Turkey Bacon, Cheddar & Egg White Sandwich', 225.00, './menu-img/Sandwiches/Turkey Bacon, Cheddar _ Egg White Sandwich.jpg', 'Sizzling reduced-fat turkey bacon and wholesome cage-free egg whites are paired with the rich creaminess of melted, reduced-fat white Cheddar cheese on a wheat English muffin. So good and surprisingly only 230 calories.', '2022-03-30 09:08:46'),
(32, 'sandwiches', 'Sausage, Cheddar & Egg Sandwich', 205.00, './menu-img/Sandwiches/Sausage, Cheddar _ Egg Sandwich.jpg', 'A savory sausage patty, fluffy eggs and aged Cheddar cheese served on a perfectly toasted English muffin. An iconic sandwich that reminds you why you love breakfast.', '2022-03-30 09:08:46'),
(33, 'sandwiches', 'Crispy Grilled Cheese Sandwich', 195.00, './menu-img/Sandwiches/Crispy Grilled Cheese Sandwich.jpg', 'A delicious blend of white Cheddar and mozzarella cheeses on sourdough bread, topped with a Parmesan butter spread.', '2022-03-30 09:08:46'),
(35, 'sandwiches', 'Ham & Swiss Panini', 235.00, './menu-img/Sandwiches/Ham _ Swiss Panini.jpg', 'Ham and Swiss cheese meld with Dijon butter in comforting warmth. An extraordinary feel-good taste.', '2022-03-30 09:08:46'),
(36, 'sandwiches', 'Turkey & Pesto Panini', 215.00, './menu-img/Sandwiches/Turkey _ Pesto Panini.jpg', 'Thick-sliced turkey and melted provolone cheese stacked on a ciabatta roll, then topped with our signature basil pesto and dry-roasted red peppers. So tasty, you\'ll want seconds, but so satisfying, you won\'t need them. Turkeys are raised without the use of antibiotics.', '2022-03-30 09:08:46'),
(55, 'cold drinks', 'Coffee', 140.00, NULL, 'This refreshing beverage combines our hibiscus Starbucks® Teavana™ tea and bursting pearls of real pomegranate juice for a kick of tart flavor.', '2022-04-04 14:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_order` int(11) NOT NULL,
  `payment_amount` double(10,2) DEFAULT NULL,
  `payment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_order`, `payment_amount`, `payment_time`) VALUES
(17, 760158, 820.00, '2022-04-04 21:45:56'),
(18, 318720, 1195.00, '2022-04-04 22:26:06'),
(19, 429038, 1485.00, '2022-04-04 22:31:32'),
(20, 352853, 1610.00, '2022-04-04 23:08:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cart_drinks`
--
ALTER TABLE `cart_drinks`
  ADD PRIMARY KEY (`drinks_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `sub_cat` (`sub_cat`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart_drinks`
--
ALTER TABLE `cart_drinks`
  MODIFY `drinks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
