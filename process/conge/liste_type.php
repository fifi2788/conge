<?php 
include "../../config/connexion.php";
include "../../repository/TypeConge.php";
$typeConge=new TypeConge($conn);
$types_conge=$typeConge->getAll();
include "../../view/conge/index.php";