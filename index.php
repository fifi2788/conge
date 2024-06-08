<?php 
include "config/connexion.php";
include "repository/Personne.php";
$personne=new Personne($conn);
//$personne->newEmployee("rasoa","vola","v.rasoa@yupmail.com","2022-01-30");
$personnes=$personne->getPersonnes();
include "view/personne/index.php";

