<?php

/**
 *
 *	Pour sa naissance, la grand-mère de Gabriel place une somme de 1000 euros
 *	sur son compte épargne rémunéré au taux de 2.25% (chaque année le compte est augmenté de 2.25%). 
 *	Développer un algorithme permettant d’afficher un tableau sur 20 ans associant à chaque 
 *	anniversaire de Gabriel la somme acquise sur son compte.
 *
 */

$compte = 1000;
$interetTaux = 2.25;

for($i=0;$i<=20;$i++){
    $interetReel = $compte * $interetTaux / 100;
    $compte = $compte + $interetReel;
    echo "Année " . $i .' : ' . $compte . "\n";
}