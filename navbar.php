<section id="mainPage">
        <nav id="navbar">
            <i id="menu_bars" class="fa-solid fa-bars" aria-expanded= "false">
                <div id="myDropdown" class="dropdown-content">
                    <div class="link_container">
                        <a href="index.php">Home</a>
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
                        <a href="#">My account</a>
                    </div>
                </div>
            </i>
            <img onclick="window.location = 'index.php'" id="logo" src="images/Homepage/Mobile/audiophile_Logo.png" alt="Audiophile logo">
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
    </section>  