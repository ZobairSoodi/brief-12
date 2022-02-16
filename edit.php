<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include 'connect.php';
    $matr = $_REQUEST["matricule"];

    $data = "SELECT nom,prenom,date,departemnt,salaire,fonction,photo
        FROM employe
    ";
    $get_data = $conn->query("$data");
?>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input value="<?php echo $get_data["nom"]?>" type="text" name="nom" placeholder="nom">
        <input value="<?php echo $get_data["prenom"]?>" type="text" name="prenom" placeholder="prenom">
        <input value="<?php echo $get_data["date"]?>" type="date" name="date">
        <input value="<?php echo $get_data["departemnt"]?>" type="text" name="departement" placeholder="departement">
        <input value="<?php echo $get_data["salaire"]?>" type="text" name="salaire" placeholder="salaire">
        <input value="<?php echo $get_data["fonction"]?>" type="text" name="fonction" placeholder="fonction">
        <input value="<?php echo $get_data["photo"]?>" type="file" name="image">
        <input type="submit">
    </form>
</body>
</html>