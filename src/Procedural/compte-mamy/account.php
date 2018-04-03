<?php

/**
*
*	Pour sa naissance, la grand-mère de Gabriel place une somme de 1000 euros
*	sur son compte épargne. Celui-ci est rémunéré au taux de 2.25% (chaque année
*  le compte est augmenté de 2.25%).
*	Développer un algorithme permettant d’afficher sur 20 ans la somme acquise à chaque
*	anniversaire de Gabriel .
*
*/
$sommeMami = 1000;
$taux = 2.25/100;


for ($i=1; $i<=20 ; $i++) {
    $interet = round($sommeMami*$taux,2);
    $sommeMami += $interet;
    echo "Somme totale : " . $sommeMami;
    echo " Interets : " . $interet;
    echo "\n";
}
