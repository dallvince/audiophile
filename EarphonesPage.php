<?php
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/EarphonesPage.css">
    <title>Earphones</title>
</head>
<body>
<div id="all_container">
    <!-- NAVIGATION BAR -->
    <?php include "navbar.php" ?>

    <!-- CATEGORY TITLE -->
    <section id="category_title">
        <h4>Earphones</h4>
    </section>

    <!-- EARPHONES MODELS SECTION -->
        <!-- YX1 EARPHONES -->
    <div class="grey_box">
        <div class="pdt_pic">
            <img src="images/EarphonesPage/Mobile/yx1_earphones.png" alt="yx1 earphones picture">
        </div>
        <div class="pdt_description">
            <p class="new_pdt">new product</p>
            <h3 class="mark2_title">yx1 wireless earphones</h3>
            <p>Tailor your listening experience with bespoke dynamic drivers from the new YX1 Wireless Earphones. Enjoy incredible high-fidelity sound even in noisy environments with its active noise cancellation feature.</p>
            <button onclick="window.location.href='Yx1EarphonesPage.php'" class="see_pdt_btn">see product</button>
        </div>
    </div>

    <!-- CATEGORY SECTION -->
    <section id="category_pdt">
        <div id="category_grid">
            <div class="categories">
                <div id="zx7_picture_mobile" class="category_pictures"></div>
                <div class="category_text">
                    <p class="category_title">headphones</p>
                    <a href="HeadphonePage.php" class="category_shop">shop <i class="fa-solid fa-angle-right right_arrow"></i></span></a>
                </div>
            </div>
            <div class="categories">
                <div id="zx9_picture_mobile" class="category_pictures"></div>
                <div class="category_text">
                    <p class="category_title">speakers</p>
                    <a href="SpeakersPage.php" class="category_shop">shop <i class="fa-solid fa-angle-right right_arrow"></i></a>
                </div>
            </div>
            <div class="categories">
                <div id="yx1_picture_mobile" class="category_pictures"></div>
                <div class="category_text">
                    <p class="category_title">earphones</p>
                    <a href="EarphonesPage.php" class="category_shop">shop <i class="fa-solid fa-angle-right right_arrow"></i></span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- LISTENER SECTION -->
    <section id="listener">
        <div id="listener_picture"></div>
        <div id="listener_text">
            <h3>bringing you the <span id="best">best</span> audio gear</h3>
            <p>Located at the heart of New York City, Audiophile is the premier store for high end headphones, earphones, speakers, and audio accessories. We have a large showroom and luxury demonstration rooms available for you to browse and experience a wide range of our products. Stop by our store to meet some of the fantastic people who make Audiophile the best place to buy your portable audio equipment.</p>
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <section id="footer">
        <div id="footer_line"></div>
        <div id="first_row">
            <img onclick="window.location = 'index.php'" id="footer_logo" src="images/Homepage/Mobile/audiophile_Logo.png" alt="Audiophile logo">
        </div>    
        <div id="nav_menu">
            <a href="index.php">Home</a>
            <a href="HeadphonePage.php">headphones</a>
            <a href="SpeakersPage.php">speakers</a>
            <a href="EarphonesPage.php">earphones</a>
        </div>
        <div id="footer_text">
            <p>Audiophile is an all in one stop to fulfill your audio needs. We're a small team of music lovers and sound specialists who are devoted to helping you get the most out of personal audio. Come and visit our demo facility - we???re open 7 days a week.</p>
        </div>
        <div id="copyright">
            <p>Copyright 2021. All Rights Reserved</p>
        </div>
        <div id="footer_icons">
            <i class="fa-brands fa-facebook-square"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
    </section>
</div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="JS/dropMenu.js"></script>
</body>   