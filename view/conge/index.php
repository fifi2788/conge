<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des types de conge</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <a href="../../view/conge/new.php">Creer un nouveau type de conge</a>
        <a href="../../index.php">Liste des Personne</a> 
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Deductible</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($types_conge as $type_conge){
            ?>
                <tr>
                    <td><?php echo $type_conge["label"]; ?></td>
                    <td>
                        <?php if( $type_conge["deductible"] ==1){ ?>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" width="25px">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <?php } else { ?>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"width="25px">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                            <?php } ?>

                    </td>
                    <td><a href="../../process/conge/remove.php?idx=<?php echo $type_conge["id"]; ?>">&times;</a></td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
