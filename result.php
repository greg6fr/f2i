<?php
$tarray=array();

 function validator($nom,$min,$max,$tarray) {
    if (strlen($nom)<$min || strlen($nom)>$max) {
        # code...
        $tarray=array_push($tarray,$nom);
        echo "Votre nom ne respecte pas le caractere autorisé ";
        return $tarray;
    } else {
       
        echo "Bravo votre nom est bien enregistré";
        return $tarray;
    }
 }

 validator($_GET['nom'],3,50,$tarray);

?>