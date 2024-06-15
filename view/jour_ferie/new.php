<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation jour ferie</title>
    <link rel="stylesheet" href="../../assets/styles.css">
</head>
<body>
    <div class="container">
        <form action="../../process/jour_ferie/process.php" method="post">
            <h2>Insertion de jour ferie</h2>
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="date">Date :</label>
                <input type="date" id="date" name="date" >
            </div>
            <button type="submit">Creer</button>
            <button type="reset">Annuler</button>

        </form>
    </div>
</body>
</html>
