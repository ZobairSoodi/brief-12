<?php
    include 'connect.php';
    $matr = $_REQUEST["matricule"];

    $sql = "DELETE FROM employe WHERE matricule = $matr;";
    $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'bootstrap.php'?>
    <style>
        div{
            display:flex;
            flex-direction:column;
            align-items:center;
            margin-top:50px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div>
        <h1>The record with the id: <?php echo $matr?> Has been succesfully deleted</h1>
        <a class="btn btn-outline-primary" href="index.php">Go back to main page</a>
    </div>    
</body>
</html>
