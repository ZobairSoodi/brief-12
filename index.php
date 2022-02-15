<?php include 'connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
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
                    <td><img src=images/" . $value["photo"] . "></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>