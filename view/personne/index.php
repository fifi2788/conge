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
        <a href="process/jour_ferie/liste.php">Jours feries</a>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Date d'embauche</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($personnes as $pers){
            ?>
                <tr>
                    <td><?php echo $pers["nom"]; ?></td>
                    <td><?php echo $pers["prenom"]; ?></td>
                    <td><?php echo $pers["email"]; ?></td>
                    <td><?php echo $pers["date_embauche"]; ?></td>
                    <td><a href="../../conge/process/personne/remove.php?idx=<?php echo $pers["idp"]; ?>">&times;</a></td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
