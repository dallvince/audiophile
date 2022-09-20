<?php
    require_once('./config/database.php');

    $delete = $pdo->prepare('DELETE FROM gear WHERE id_gear=:id_gear');

    $delete->bindParam(':id_gear', $_GET['id_gear']);

    $delete->execute();

    header('Location: admin.php');
    exit;
?>