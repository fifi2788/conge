<?php 
include "../../config/connexion.php";
include "../../repository/TypeConge.php";
$jourFerie=new Jour_ferie($conn);
$jourFerie=$jourFerie->getAll();
include "../../view/conge/index.php";