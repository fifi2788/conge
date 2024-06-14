<?php 
include "../../config/connexion.php";
include "../../repository/jour_ferie.php";
$personne=new Jour_ferie($conn);
$id = $_GET["id"];
$personne->delete($id);

header("Location: ../../index.php");