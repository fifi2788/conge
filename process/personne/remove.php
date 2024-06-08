<?php 
include "../../config/connexion.php";
include "../../repository/Personne.php";
$personne=new Personne($conn);
$id = $_GET["idx"];
$personne->deleteEmployee($id);

header("Location: ../../index.php");