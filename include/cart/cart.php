<!-- FONT AWESOME  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
    :root {
    /* Main Palette */
    --mainGreen: #0b421a;
    --mainWhite: #fffcfc;
    --mainLightOrange: #eac784;
    --mainLightBrown: #604c4c;
    --mainDarkBrown: #362415;

    --hoverColor: #06270f;
    --backgroundColor: #f1f8fc;

    /* Text */
    --darkOne: #312f3a;
    --darkTwo: #45424b;
    --lightOne: #919191;
    --lightTwo: #aaa;

    --bright_orange: #e6873c;
    /* Shadow */
    --box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
    }

    .cart-right {
        position: absolute;
        right: 80px;
    }

    .fa-stack[data-count]:after {
        position: absolute;
        right: 0%;
        top: 0%;
        content: attr(data-count);
        font-size: 10px;
        padding: .08em;
        border-radius: 50%;
        line-height: 1.5em;
        min-width: 1.5em;
        color: white;
        color: var(--mainLightOrange);
        text-align: center;
        font-weight: 600;
        background: white;
        border: 2px solid var(--mainLightOrange);
    }

    .fa-circle {
        size: 15px;
    }

    .fa-shopping-cart {
        background-color: var(--mainGreen);
        border-radius: 50px;
    }

    .fa-shopping-cart:hover {
        background-color: var(--hoverColor);
        cursor: pointer;
    }
</style>

<div class="cart-right">
    <a href="Payment.php">
        <span class="fa-stack fa-2x has-badge" data-count="<?php echo count($menu->getData('cart')) ?? 0.00; ?>">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
        </span>
    </a>
</div>

  <!-- Loader -->
  <?php
    include('include/loader/loader.php');
    ?>