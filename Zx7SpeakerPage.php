<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Zx7SpeakerPage.css">
    <title>ZX7 SPEAKER</title>
</head>
<body>

<div id="all_container">
    <!-- NAVIGATION BAR -->
    <?php include "navbar.php" ?>

    <!-- GO BACK -->
    <div onclick="history.back()" id="go_back">
        <a href="">Go back</a>
    </div>

    <!-- PRODUCT DETAILS -->
    <section id="pdt_container">
        <div id="grey_box">
            <div id="pdt_picture"></div>
        </div>
        <div id="pdt_details">
            <div id="pdt_text">
                <h4 id="pdt_title">zx7 <br> speaker</h4>
                <p id="pdt_description">Stream high quality sound wirelessly with minimal to no loss. The ZX7 speaker uses high-end audiophile components that represents the top of the line powered speakers for home or studio use.</p>
                <p id="price">$ 3,500</p>
                    <div id="cart">
                        <div id="pdt_number">
                            <button id="less" class="count">-</button>
                            <p id="result">1</p>
                            <button id="more" class="count">+</button>
                        </div>
                        <div id="add_btn" class="see_pdt_btn">Add to cart</div>
                    </div>
            </div>
        </div>
    </section>

    <!-- FEATURE -->
    <section id="feature_box">
        <div id="feature">
            <h4>feature</h4>
            <p>Reap the advantages of a flat diaphragm tweeter cone. This provides a fast response rate and excellent high frequencies that lower tiered bookshelf speakers cannot provide. The woofers are made from aluminum that produces a unique and clear sound. XLR inputs allow you to connect to a mixer for more advanced usage.
                <br><br>
                The ZX7 speaker is the perfect blend of stylish design and high performance. It houses an encased MDF wooden enclosure which minimises acoustic resonance. Dual connectivity allows pairing through bluetooth or traditional optical and RCA input. Switch input sources and control volume at your finger tips with the included wireless remote. This versatile speaker is equipped to deliver an authentic listening experience.</p>
        </div>
        
        <!-- IN THE BOX -->
        <div id="inthebox">
            <div id="inthebox_title">
                <h4>in the box</h4>
            </div>
            <div id="inthebox_items">
                <p><span class="orange_span">2X</span> Speaker Unit</p>
                <p><span class="orange_span">2X</span> Speaker Cloth Panel</p>
                <p><span class="orange_span">1X</span> User Manuel</p>
                <p><span class="orange_span">1X</span> 3.5mm 7.5m Audio Cable</p>
                <p><span class="orange_span">1X</span> 7.5m Optical Cable</p>
            </div>
        </div>
    </section>
    <!-- PICTURES -->
    <section id="grid_pictures">
        <div id="guy_picture"></div>
        <div id="above_picture"></div>
        <div id="zoom_picture"></div>
    </section>

    <!-- YOU MAY ALSO LIKE -->
    <section id="like">
        <h4>you may also like</h4>
            <div id="like_grid">
                <div id="grey1" class="like_grey_box">
                    <div id="pic1" class="like_picture"></div>    
                </div>
                <div id="box1" class="like_box">
                    <h4>zx9 speaker</h4>
                    <button onclick="window.location.href='Zx9SpeakerPage.php'" class="see_pdt_btn">see product</button>
                </div>

                <div id="grey2" class="like_grey_box">
                    <div id="pic2" class="like_picture"></div>    
                </div>
                <div id="box2" class="like_box">
                    <h4>xx99 mark i</h4>
                    <button onclick="window.location.href='Mark1xx99Page.php'" class="see_pdt_btn">see product</button>
                </div>

                <div id="grey3" class="like_grey_box">
                    <div id="pic3" class="like_picture"></div>    
                </div>
                <div id="box3" class="like_box">
                    <h4>xx59</h4>
                    <button onclick="window.location.href='xx59Page.php'" class="see_pdt_btn">see product</button>
                </div>
            </div>
    </section>

    <!-- CATEGORY SECTION -->
    <section id="category_pdt">
        <div id="category_grid">
            <div class="categories">
                <div id="zx9_picture_mobile" class="category_pictures"></div>
                <div class="category_text">
                    <p class="category_title">speakers</p>
                    <a href="SpeakersPage.php" class="category_shop">shop <i class="fa-solid fa-angle-right right_arrow"></i></a>
                </div>
            </div>
            <div class="categories">
                <div id="zx7_picture_mobile" class="category_pictures"></div>
                <div class="category_text">
                    <p class="category_title">headphones</p>
                    <a href="HeadphonePage.php" class="category_shop">shop <i class="fa-solid fa-angle-right right_arrow"></i></span></a>
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
    <script src="JS/counter.js"></script>
    <script src="JS/dropMenu.js"></script>
</body>
</html>