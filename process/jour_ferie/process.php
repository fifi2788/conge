<?php 
include "../../config/connexion.php";
include "../../repository/JourFerie.php";
$jourferie=new JourFerie($conn);
$nom = $_POST["name"];
$date = $_POST["date"];
$jourferie->create($nom,$date);

header("Location: liste_jour.php");