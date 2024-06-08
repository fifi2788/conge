<?php 
include "../../config/connexion.php";
include "../../repository/Personne.php";
$personne=new Personne($conn);
$nom = $_POST["lastname"];
$prenom = $_POST["firstname"];
$email = $_POST["email"];
$embauche = $_POST["embauche"];
$personne->newEmployee($nom,$prenom,$email,$embauche);

header("Location: ../../index.php");