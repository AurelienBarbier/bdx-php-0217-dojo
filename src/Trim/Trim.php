<?php

namespace Dojo\Trim;
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19/06/17
 * Time: 17:52
 */
class Trim
{



    /**
     * Enleve les espaces au début et à la fin de la chaine $chaine.
     *
     * @param string $chaine
     * @return string
     */
    public static function myTrimA($chaine){

        $trimedString = "";
        $realStrStart = 0;
        $realStrEnd   = strlen($chaine)-1;
        //Je parcours ma chaine du debut a la fin pour trouver le vrai debut
        while($chaine[$realStrStart] == " " ){
        $realStrStart++;
        }
        //Je parcours ma chaine de la fin vers le debut pour trouver la vrai fin
        while($chaine[$realStrEnd] == " " ){
            $realStrEnd--;
        }
        // Une fois aue j'ai identifie les vraies limites de ma chaine,
        // Je reecris ma phrase de la premiere a la derniere lettre.
        for($letter = $realStrStart; $letter <= $realStrEnd; $letter ++){
            $trimedString .= $chaine[$letter];
        }

        return $trimedString;
    }

    /**
     * Enleve les espaces au début et à la fin de la chaine $chaine.
     *
     * @param string $chaine
     * @return string
     */
    public static function myTrimB( $chaine)
    {
        $trimedString = "";
        $stringStarted = false;
        $spaces = "";
        // On parcours notre chaine jusqu'a la fin.
        for($i = 0; $i < strlen($chaine); $i++){
            // si je rencontre une lettre
            if($chaine[$i] != " "){
                // J'ajoute les espaces s'il y en a.
                $trimedString.=$espace;
                $espaces="";
                //Je precise que ma chaine a deja commencee
                $stringStarted = true;
                // J'ecris ma nouvelle lettre
                $trimedString.=$chaine[$i];
            // Sinon, si ma chaine a deja reellement commence, je comptabilise mes espaces "intermots"
            // mes espaces de debuts de phrase ne sont pas compatiblises
            // mes espaces de fin de chaine sont comptabilises mais JAMAIS reinjecte dans ma chaine de retour.
            }elseif ($stringStarted==true){
                $espaces.=" ";
            }
        }
        return $trimedString;

    }
}