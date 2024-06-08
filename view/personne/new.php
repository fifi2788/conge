<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation fiche personnel</title>
    <link rel="stylesheet" href="../../assets/styles.css">
</head>
<body>
    <div class="container">
        <form action="../../process/personne/process.php" method="post">
            <h2>Creation fiche personnel</h2>
            <div class="form-group">
                <label for="firstname">Prenom :</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            <div class="form-group">
                <label for="lastname">Nom :</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="embauche">Date embauche</label>
                <input type="date" id="embauche" name="embauche" required>
            </div>
            <button type="submit">Creer</button>
            <button type="reset">Annuler</button>

        </form>
    </div>
</body>
</html>
