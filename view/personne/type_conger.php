<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de conge </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <a href="view/type_conger/new.php">Creer un conger</a>
        <table>
            <thead>
                <tr>
                    <th>label</th>
                    <th>deductible</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($personnes as $pers){
            ?>
                <tr>
                    <td><?php echo $pers["label"]; ?></td>
                    <td><?php echo $pers["deductible"]; ?></td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
