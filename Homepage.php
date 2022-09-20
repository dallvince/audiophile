    <?php
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Homepage.css">
    <title>Audiophile</title>
</head>
<body>

<div id="all_container">
    <!-- NAVIGATION BAR -->
<section id="mainPage">
    <nav id="navbar">
        <i id="menu_bars" class="fa-solid fa-bars" aria-expanded= "false">
            <div id="myDropdown" class="dropdown-content">
                <div class="link_container">
                    <a href="Homepage.php">Home</a>
                </div>
                <div class="link_container">
                    <a href="HeadphonePage.php">Headphones</a>
                </div>
                <div class="link_container">
                    <a href="SpeakersPage.php">Speakers</a>
                </div>
                <div class="link_container">
                    <a href="EarphonesPage.php">Earphones</a>
                </div>
                <div class="link_container">
                    <a href="account.php">Account</a>
                </div>
            </div>
        </i>
        <img onclick="window.location = 'Homepage.php'" id="logo" src="images/Homepage/Mobile/audiophile_Logo.png" alt="Audiophile logo">
        <div id="nav_menu_up">
            <?php if(!empty($_SESSION) && $_SESSION['status'] == 'admin'): ?>
            <a href="admin.php">admin</a>
            <?php endif; ?>
            <a href="HeadphonePage.php">headphones</a>
            <a href="SpeakersPage.php">speakers</a>
            <a href="EarphonesPage.php">earphones</a>
            <?php if(empty($_SESSION)): ?>
            <a href="account.php">login</a>
            <?php else: ?>
            <a href="#">profile</a>
            <a href="logout.php">logout</a>
            <?php endif; ?>
        </div>
        <a href="checkoutPage.php"><i id="cart_icon" class="fa-solid fa-cart-shopping"></i></a>
    </nav>
    <div id="separation_line"></div>

    <!-- NEW PRODUCT PAGE -->
    <div id="pic_text">
        <div id="new_pdt_page">
            <div id="new_pdt_text">
                <p id="new_product">new product</p>
                <h1>xx99 mark II HEADPHONES</h1>
                <p>Experience natural, lifelike audio and exceptional build quality made for the passionate music enthusiast.</p>
                <button onclick="window.location.href='Mark2xx99Page.php'" class="see_pdt_btn">see product</button>
            </div>
        </div>
    </div>
</section>

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

    <!-- MODELS SECTION -->
    <section id="models_pdt">
        <div id="models_grid">
            <div id="zx9_model">
                <div id="zx9_model_picture"></div>
                <div id="inner_circle"></div>
                <div id="middle_circle"></div>
                <div id="outer_circle"></div>
                <div id="zx9_text">
                    <h3>zx9 <br> speaker</h3>
                    <p>Upgrade to premium speakers that are phenomenally built to deliver truly remarkable sound.</p>
                    <button onclick="window.location.href='Zx9SpeakerPage.php'" id="see_pdt_black">see product</button>
                </div>
            </div>
            <div id="zx7_model">
                <div id="zx7_text">
                    <h4>zx7 speaker</h4>
                    <button onclick="window.location.href='Zx7SpeakerPage.php'" class="see_pdt_white">see product</button>
                </div>
            </div>
            <div id="yx1_picture"></div>
            <div id="yx1_model">
                <div id="yx1_text">
                    <h4>yx1 earphones</h4>
                    <button onclick="window.location.href='Yx1EarphonesPage.php'" class="see_pdt_white">see product</button>
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
            <img onclick="window.location = 'Homepage.php'" id="footer_logo" src="images/Homepage/Mobile/audiophile_Logo.png" alt="Audiophile logo">
        </div>    
        <div id="nav_menu">
            <a href="Homepage.php">Home</a>
            <a href="HeadphonePage.php">headphones</a>
            <a href="SpeakersPage.php">speakers</a>
            <a href="EarphonesPage.php">earphones</a>
        </div>
        <div id="footer_text">
            <p>Audiophile is an all in one stop to fulfill your audio needs. We're a small team of music lovers and sound specialists who are devoted to helping you get the most out of personal audio. Come and visit our demo facility - we’re open 7 days a week.</p>
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

    <!-- COOKIES -->
    <?php if(empty($_SESSION)): ?>
    <div id="cookies_container">
        <div id="cookies">
            <div id="cookies_text">
                <h4>Cookie Consent</h4>
                <p>By continuing to browse or by clicking 'Accept', you agree to the storing of cookies on your device to enhance your site experience ans for analytical purposes. To learn more about how we use the cookies, please see our cookies policy.</p>
            </div>
            <div id="cookies_btn">
                <button id="accept">Accept</button>
                <button id="manage">Manage preferences</button>
            </div>
        </div>
    </div>
    <?php endif; ?>

</div>

    <script src="JS/Homepage.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>

