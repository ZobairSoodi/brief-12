<?php
    include '../connect.php';
    $matr = $_REQUEST["matricule"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../bootstrap.php' ?>
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Are you sure you wanna delete the employee with the id: <?php echo $matr?> ?</h1>
        <div>
            <a class="btn btn-outline-danger" href='delete.php?matricule=<?php echo $matr?>'>Yes, Delete</a>
            <a class="btn btn-outline-secondary" href="../index.php">No, Keep</a>
        </div>
    </div>
</body>
</html>