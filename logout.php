<?php
    require_once('./config/database.php');

    unset($_SESSION);
    session_destroy();
    header('Location: index.php');

?>