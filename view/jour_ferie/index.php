<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste du personnel</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <a href="view/personne/new.php">Creer un nouvel employe</a>
        <a href="process/conge/liste_type.php">Type de conge</a>
        <a href="../../index.php">Liste des Personne</a> 
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($jours_ferie as $jour_ferie){
            ?>
                <tr>
                    <td><?php echo $pers["date"]; ?></td>
                    <td><?php echo $jour_ferie["description"]; ?></td>
                    <td><a href="../../conge/process/jour_ferie/remove.php?idx=<?php echo $pers["idp"]; ?>">&times;</a></td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
