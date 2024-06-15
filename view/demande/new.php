<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation de demande de conge</title>
    <link rel="stylesheet" href="../../assets/styles.css">
</head>
<body>
    <div class="container">
        <form action="../../process/demande/process.php" method="post">
            <h2>Insertion de demande de conge</h2>
            <div class="form-group">
                <label for="type_conge">Type conge :</label>
                <select id="type_conge" name="type_conge">
                    <option value="0">Selectionner un type de conge</option>
                </select>
            </div>
            <div class="form-group">
                <label for="personne">Employe :</label>
                <select id="personne" name="personne">
                    <option value="0">Selectionner un employe</option>
                    <?php  
                        foreach($typeConges as $typeConge){
                            var_dump($typeConge);
                    ?>
                    <option value="<?php echo $typeConge['id'] ?>"><?php echo $typeConge['label'] ?></option>
                    <?php 
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="debut">Date debut :</label>
                <input type="date" id="debut" name="debut" >
            </div>

            <div class="form-group">
                <label for="fin">Date fin :</label>
                <input type="date" id="fin" name="fin" >
            </div>

            <div class="form-group">
                <label for="commentaire">Commentaire :</label>
                <textarea id="commentaire" name="commentaire" ></textarea>
            </div>

            <button type="submit">Creer</button>
            <button type="reset">Annuler</button>

        </form>
    </div>
</body>
</html>
