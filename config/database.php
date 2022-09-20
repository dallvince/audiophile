<?php
session_start();

$host = 'localhost';
$dbname = 'Audiophile';
$username = 'root';
$password = '';

try{
    $pdo = new PDO('mysql:host=' . $host .';dbname=' . $dbname, $username, $password);
} catch(PDOException $e){
    die($e->getMessage());
}
?>