<?php
    include 'connect.php';
    $matr = $_POST["matricule"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date = $_POST["date"];
    $dep = $_POST["departement"];
    $salaire = $_POST["salaire"];
    $fonc = $_POST["fonction"];
    $img = $_FILES["image"];
    $filename = $img["name"];
    $tempfile = $img["tmp_name"];

    $sql = "INSERT INTO employe VALUES(
        '$matr','$nom','$prenom','$date',
        '$dep',$salaire,'$fonc','$filename'
    )";
    move_uploaded_file($tempfile, "images/$filename");
    $conn->query($sql);
?>