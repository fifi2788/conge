<?php 
include "../../config/connexion.php";
include "../../repository/TypeConge.php";
$typeConge=new TypeConge($conn);
$id = $_GET["idx"];
$typeConge->delete($id);

header("Location: liste_type.php");