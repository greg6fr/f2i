<?php

require('database.php');
require('verification.php');

$db=new Database();
$db->connectDB();

$tarray=array();

$verification = new Verification();

$verif=$verification->validator($_GET['nom'],3,50,$tarray,'Respecter les conditions');
 
//$retour=$verif->getError();
 

?>