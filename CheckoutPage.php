<?php
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/CheckoutPage.css">
    <title>Checkout</title>
</head>
<body>
    <div id="all_container">
    <!-- NAVIGATION BAR -->
    <?php include "navbar.php" ?>

    <!-- GO BACK -->
    <section id="go_back_container">
        <div onclick="history.back()" id="go_back">
            <a href="">Go back</a>
        </div>
    </section>
   
<!-- FORM -->
<section id="main_container">
    <div id="checkout_form">
        <!-- CHECKOUT TITLE -->
        <div id="checkout_title">
            <h4>checkout</h4>
        </div>
        <!-- BILLING DETAILS HEADER -->
        <div class="form_headers">
            <p>billing details</p>
        </div>
        <!-- CUSTOMER FORM -->
        <div id="customer_info">
            <form class="customer_form" action="" method="post">
                <div class="customer_box">
                    <label class="form_titles" for="name">Name*</label>
                    <div class="box_size" id="name_box">
                        <input placeholder="Fullname" class="placeholders" type="text" id="name" name="name">
                    </div>
                    <p id="p_name"></p>
                </div>
                <div class="customer_box">
                    <label class="form_titles" for="email">Email adress*</label>
                    <div class="box_size" id="email_box">
                        <input placeholder="email" class="placeholders" type="text" id="email" name="email">
                    </div>
                    <p id="p_email"></p>    
                </div>
                <div class="customer_box">
                    <label class="form_titles" for="phone">Phone number*</label>
                    <div class="box_size" id="phone_box">
                        <input placeholder="Phone number" class="placeholders" type="text" id="phone" name="phone"> 
                    </div>
                    <p id="p_phone"></p>    
                </div>  
            </form>
        </div>

        <!-- SHIPPING INFO HEADER -->
        <div class="form_headers">
            <p>Shipping Info</p>
        </div>
            <!-- SHIPPING INFO FORM -->
        <div id="shipping_info">
            <form class="customer_form" action="" method="post">
                <div id="adress_box">
                    <label class="form_titles" for="adress">Adress*</label>
                    <div id="adress_box_size" class="box_size">
                        <input placeholder="Number & street name" class="placeholders" type="text" id="adress" name="adress">
                    </div>
                </div>
                <div class="customer_box">
                    <label class="form_titles" for="zip">ZIP Code*</label>
                    <div class="box_size" id="zip_box">
                        <input placeholder="City ZIP code" class="placeholders" type="text" id="zip" name="zip">
                    </div>
                </div>
               <div class="customer_box">
                    <label class="form_titles" for="city">City*</label>
                    <div class="box_size" id="city_box">
                        <input placeholder="City" class="placeholders" type="text" id="city" name="city">  
                    </div>
               </div>
                <div class="customer_box">
                    <label class="form_titles" for="country">Country*</label>
                    <div class="box_size" id="country_box">
                        <input placeholder="Country" class="placeholders" type="text" id="country" name="country">   
                    </div>
                </div>
            </form>
        </div>
        <!-- PAYMENT DETAILS HEADER -->
        <div class="form_headers">
            <p>Payment details</p>
        </div>
        <div id="e_money">
            <div id="payment_method">
                <p>Payment Method</p>
            </div>   
            <!-- PAYMENT DETAILS FORM -->
        <div id="payment_details">
            <form class="payment_form" action="" method="post">
                <!-- RADIO BUTTONS -->
            <div id="options_container">
                <div class="options">
                    <div class="label">
                        <label class="form_titles" for="">e-Money</label>
                    </div>
                    <div class="radio_btn">
                        <input type="radio" checked>
                    </div>
                </div>
                <div class="options">
                    <div class="label">
                        <label class="form_titles" for="">Cash on Delivery</label>
                    </div>
                    <div class="radio_btn">
                        <input type="radio">
                    </div>
                </div>
            </div>
            </div>
            </div>

                <!-- E-MONEY SECTION -->
    <div id="e_money_form">
        <form class="customer_form" action="" method="post">
            <div class="customer_box">
                <label class="form_titles" for="emoney">e-Money Number</label>
                <div class="box_size">
                    <input placeholder="238521993" class="placeholders" type="text" id="emoney" name="emoney">
                </div>
            </div>
            <div class="customer_box">
                <label class="form_titles" for="zip">e-Money Pin</label>
                <div class="box_size">
                    <input placeholder="xxxx" class="placeholders" type="text" id="zip" name="zip">
                </div>
            </div>
        </form>
    </div>
    <div id="validate_form">
        <button id="validate_btn">Place order</button> 
    </div>
   
</div>

<!-- SUMMARY -->
    <section id="summary">

    </section>
</section>
<!-- FOOTER SECTION -->
<section id="footer">
    <div id="footer_line"></div>
    <div id="first_row">
        <img onclick="window.location = 'index.php'" id="footer_logo" src="images/Homepage/Mobile/audiophile_Logo.png" alt="Audiophile logo">
    </div>    
    <div id="nav_menu">
        <a href="/index.php">Home</a>
        <a href="/HeadphonePage.php">headphones</a>
        <a href="/SpeakersPage.php">speakers</a>
        <a href="/EarphonesPage.php">earphones</a>
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
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="JS/forms.js"></script>
<script src="/JS/dropMenu.js"></script>
</body>
</html>