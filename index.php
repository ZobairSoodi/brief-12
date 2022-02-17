<?php include 'connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'bootstrap.php'?>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php include 'nav.php'?>
    <table class="table table-striped table-dark">
        <thead>
            <td>Matricule</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Date</td>
            <td>Departement</td>
            <td>Salaire</td>
            <td>Fonction</td>
            <td>Photo</td>
            <td>Action</td>
        </thead>
        <tbody>
            <?php 
                $result = $conn->query("Select * from employe");
                foreach ($result as $key => $value) {
                    echo "<tr>
                    <td>" . $value["matricule"] . "</td>
                    <td>" . $value["nom"] . "</td>
                    <td>" . $value["prenom"] . "</td>
                    <td>" . $value["date"] . "</td>
                    <td>" . $value["departemnt"] . "</td>
                    <td>" . $value["salaire"] . "</td>
                    <td>" . $value["fonction"] . "</td>
                    <td><img src=images/" . $value["photo"] . "></td>
                    <td>
                        <a class='btn btn-danger' href='deleteConfirm.php?matricule=".$value["matricule"]."'>Delete</a>
                        <a class='btn btn-primary' href='edit.php?matricule=".$value["matricule"]."&photo=".$value["photo"]."'>Edit</a>
                    </td>
                    ";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>