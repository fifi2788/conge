<?php 
include "../../config/connexion.php";
include "../../repository/Jour_ferie.php";
$jourferie=new Jour_ferie($conn);
$nom = $_POST["name"];
$deductible = $_POST["deductible"];
$typeConge->create($nom,$deductible);

header("Location: liste.jour.php");