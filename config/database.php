<?php
session_start();

  $host_name = 'db5010210653.hosting-data.io';
  $database = 'dbs8653922';
  $user_name = 'dbu1217419';
  $password = 'Atlantis83!04';

  try {
    $pdo = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
  } catch (PDOException $e) {
    echo "Erreur!:" . $e->getMessage() . "<br/>";
    die();
  }
?>