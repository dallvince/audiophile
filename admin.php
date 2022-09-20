<?php
    require_once('./config/database.php');

        // ADD GEAR

    if(!empty($_POST['reference']) && !empty($_POST['price'])) {
        
        if(isset($_FILES['picture'])) {

            $media = basename($_FILES['picture']['name']);
            move_uploaded_file($_FILES['picture']['tmp_name'], './images/AddedProducts/' . $media);
        }
    
        $addGear = $pdo->prepare('INSERT INTO gear(reference, description, price, picture)VALUES(:reference, :description, :price, :picture)');
    
        $addGear->bindParam(':reference', $_POST['reference']);
        $addGear->bindParam(':description', $_POST['description']);
        $addGear->bindParam(':price', $_POST['price']);
        $addGear->bindParam(':picture', $media);
    
        $addGear->execute();
        
    }
        
        // SELECT

    $select = $pdo->prepare('SELECT * FROM gear');
    $select->execute();
    $result = $select->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/admin.css">
    <title>Document</title>
</head>
<body>
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

        <!-- PRODUCTS DISPLAY -->
<p class="title">products in stock</p>
<section id="grid_display">
    <?php foreach($result as $gear): ?>
        <article>
            <div id="pictext">
               <div id="pic_cont">
                <img src="./images/AddedProducts/<?= $gear['picture']; ?>" alt="Gear picture">
            </div>
            <div id="text_cont">
                <p><?= $gear['reference']; ?></p>
                <p><?= $gear['description']; ?></p>
                <p><?= '$' . ' ' . $gear['price']; ?></p>
            </div> 
            </div>
            <div id="btn_cont">
                <a class="btn" id="btn_update" href="update.php?id_gear=<?= $gear['id_gear'] ?>">Update</a >
                <a class="btn" id="btn_delete" href="delete.php?id_gear=<?= $gear['id_gear'] ?>">Delete</a >
            </div>
        </article>
    <?php endforeach; ?>
</section>

        <!-- ADD NEW PRODUCT -->
    <p class="title">Add Product</p>
<section id="add_form">
    <form action="admin.php" method="POST" enctype="multipart/form-data">
        <div class="input_cont">
            <label for="reference">Product reference</label>
            <input type="text" id="reference" name="reference">
        </div>
        <div class="input_cont">
            <label for="description">Product description</label>
            <input  id="description" name="description ">
        </div>
       <div class="input_cont">
            <label for="price">Price</label>
            <input type="text" id="price" name="price">
       </div>
        <div class="input_cont">
            <label for="picture">Picture</label>
            <input type="file" id="picture" name="picture">
        </div>
        <div class="input_cont">
            <button>Add product</button>
        </div>
    </form>
</section>

</body>
</html>