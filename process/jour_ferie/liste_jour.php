<?php 
include "../../config/connexion.php";
include "../../repository/JourFerie.php";
$jourFerie=new JourFerie($conn);
$jours_ferie=$jourFerie->getAll();
include "../../view/jour_ferie/index.php";