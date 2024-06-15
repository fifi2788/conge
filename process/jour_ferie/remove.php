<?php 
include "../../config/connexion.php";
include "../../repository/JourFerie.php";
$jour=new JourFerie($conn);
$id = $_GET["idx"];
$jour->delete($id);

header("Location: liste_jour.php");