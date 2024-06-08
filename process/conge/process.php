<?php 
include "../../config/connexion.php";
include "../../repository/TypeConge.php";
$typeConge=new TypeConge($conn);
$nom = $_POST["name"];
$deductible = $_POST["deductible"];
$typeConge->create($nom,$deductible);

header("Location: liste_type.php");