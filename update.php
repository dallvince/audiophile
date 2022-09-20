<?php
    require_once('./config/database.php');

    $update = $pdo->prepare('UPDATE gear SET reference=:reference, description=:description, price=:price, picture=:picture WHERE id_gear=:id_gear');

    if(isset($_FILES['picture'])) {

        $media = basename($_FILES['picture']['name']);
        move_uploaded_file($_FILES['picture']['tmp_name'], './images/AddedProducts/' . $media);
    }

    $update->bindParam(':reference', $_POST['reference']);
    $update->bindParam(':description', $_POST['description']);
    $update->bindParam(':price', $_POST['price']);
    $update->bindParam(':picture', $media);
    $update->bindParam(':id_gear', $_POST['id_gear']);

    $update->execute();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="admin.php" method="POST" enctype="multipart/form-data">

    <?php if(isset($_GET['id_gear'])): ?>
    <input type="text" hidden name="id_gear" value="<?= $_GET['id_gear']; ?>">
    <?php endif; ?>

    <label for="reference">Product reference</label>
    <input type="text" id="reference" name="reference">

    <label for="description">Product description</label>
    <input  id="description" name="description">

    <label for="price">Price</label>
    <input type="text" id="price" name="price">

    <label for="picture">Picture</label>
    <input type="file" id="picture" name="picture">

    <button>Update product</button>
</form>
</body>
</html>