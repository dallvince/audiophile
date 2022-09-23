<?php
require_once('./config/database.php');

        // SI $_SESSION EST VIDE
    if(!empty($_SESSION['email'])) {
        header('Location: index.php');
        exit;
    }    
        
        // REGISTER
    if(!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['password']) && preg_match('/^[^"\'<>]+$/', $_POST['confirm_password'])){

        // if(preg_match('/^[^"\'<>]+$/', $_POST['lastname']) && preg_match('/^[^"\'<>]+$/', $_POST['firstname']) && preg_match('/^[^"\'<>]+$/', $_POST['email']) && preg_match('/^[^"\'<>]+$/', $_POST['password'])) {

            if($_POST['password'] === $_POST['confirm_password']){

    $register = $pdo->prepare('INSERT INTO user(lastname,  firstname, email, password, phone, status)VALUES(:lastname, :firstname, :email, :password, :phone, :status)');

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $status = 'user';
    // admin pwd = admin

    $register->bindParam(':lastname', $_POST['lastname']);
    $register->bindParam(':firstname', $_POST['firstname']);
    $register->bindParam(':email', $_POST['email']);
    $register->bindParam(':password', $password);
    $register->bindParam(':phone', $_POST['phone']);
    $register->bindParam(':status', $status);

    $register->execute();

    header('Location: account.php'); 

            } else {
                echo "passwords do not match";
            }
        } 
    // }

              
    

        // LOGIN
        
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        
        if(preg_match('/^[^"\'<>]+$/', $_POST['email']) && preg_match('/^[^"\'<>]+$/', $_POST['password'])){
            
    $login = $pdo->prepare('SELECT * FROM user WHERE email=:email');

    $login->bindParam(':email', $_POST['email']);
    $login->execute();

    $result = $login->fetchAll(PDO::FETCH_ASSOC);
   
            if(count($result) >= 1) {

                if(password_verify($_POST['password'], $result[0]['password'])){
        
            $_SESSION['firstname'] = $result[0]['firstname'];
            $_SESSION['lastname'] = $result[0]['lastname'];
            $_SESSION['email'] = $result[0]['email'];
            $_SESSION['status'] = $result[0]['status'];
        
            header('Location: index.php'); 
                    // print_r($result);
                }
            }            
        }
    }
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/account.css">
    <title>Log In Page</title>
</head>
<body>
    <!-- NAV BAR -->
    <?php include "navbar.php" ?>

<div id="all_container">
    <!-- REGISTER FORM -->
        <div id="register_title">
            <h5>Register</h5>
        </div>
   
        
        <div class="form_container" id="register_container" aria-expanded="false">
            <form class="register_form" action="account.php" method="POST">
                <label for="firstname">Firstname*</label>
                    <input type="text" id="firstname" name="firstname">
                <label for="lastname">Lastname*</label>
                    <input type="text" id="lastname" name="lastname">
                <label for="email">email*</label>
                    <input type="password" id="email" name="email">
                <label for="password">Password*</label>
                    <input type="password" id="password" name="password">
                <label for="confirm_password">Confirm Password*</label>
                    <input type="confirm_password" id="confirm_password" name="confirm_password">
                <div class="button_container">
                    <button>Register</button>
                </div>
            </form>
        </div>
    

    <!-- LOG IN FORM -->
   
        <div id="login_title">
            <h5>Login</h5>
        </div>
        <div class="form_container" id="login_container" aria-expanded="true">
            <form class="register_form" action="account.php" method="POST">
                <div id="welcome">
                    <p>We are pleased to see you back!</p>
                </div>
                    <label for="email">email</label>
                    <input type="text" name="email" id="email">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                <div class="button_container">
                    <button>Log in</button>
                </div>
                <a href="">forgot password?</a>
            </form>
        </div>
   
</div>

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

    <script src="./JS/login.js"></script>
</body>
</html>