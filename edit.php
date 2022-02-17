<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'bootstrap.php'; ?>
    <title>Document</title>
</head>
<body>
<?php
    include 'nav.php'; ?>
<?php
    include 'connect.php';
    if(isset($_REQUEST["matricule"])){
        $matr = $_REQUEST["matricule"];
        $data = "SELECT nom,prenom,date,departemnt,salaire,fonction,photo
            FROM employe WHERE matricule = $matr;
        ";
        $get_data = $conn->query($data);
        $row = $get_data->fetch_array(MYSQLI_ASSOC);
    }
    if(isset($_POST["edit_btn"])){
        $photo_backup = $_REQUEST["photo"];
        $photo = "";
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $date = $_POST["date"];
        $dep = $_POST["departement"];
        $salaire = $_POST["salaire"];
        $fonc = $_POST["fonction"];
        $img = $_FILES["image"];
        $filename = $img["name"];
        $tempfile = $img["tmp_name"];
        if($filename==""){
            $photo = $photo_backup;
        }
        else{
            $photo = $filename;
        }
        $sql = "UPDATE employe SET nom = '$nom', prenom = '$prenom', date = '$date',
            departemnt = '$dep', salaire = $salaire, fonction = '$fonc', photo = '$photo'
            WHERE matricule = '".$_REQUEST["matricule"]."';
        ";
        move_uploaded_file($tempfile, "images/$filename");
        $conn->query($sql);
        header("location: index.php");
    }
?>
    <form action="edit.php?matricule=<?php echo $_REQUEST["matricule"]."&photo=".$_REQUEST["photo"]; ?>" method="POST" enctype="multipart/form-data">
        <input value="<?php echo $row["nom"]?>" type="text" name="nom" placeholder="nom">
        <input value="<?php echo $row["prenom"]?>" type="text" name="prenom" placeholder="prenom">
        <input value="<?php echo $row["date"]?>" type="date" name="date">
        <input value="<?php echo $row["departemnt"]?>" type="text" name="departement" placeholder="departement">
        <input value="<?php echo $row["salaire"]?>" type="text" name="salaire" placeholder="salaire">
        <input value="<?php echo $row["fonction"]?>" type="text" name="fonction" placeholder="fonction">
        <input value="<?php echo $row["photo"]?>" type="file" name="image">
        <input type="submit" name="edit_btn">
    </form>
</body>
</html>