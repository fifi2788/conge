<?php 
include "../../config/connexion.php";
include "../../repository/TypeConge.php";
$typeConge=new TypeConge($conn);
$typeConges=$typeConge->getAll();
var_dump($typeConges);
include "../../view/demande/new.php";