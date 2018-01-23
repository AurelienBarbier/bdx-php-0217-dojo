<?php

namespace Dojo\DNA2RNA;/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 23/10/17
 * Time: 09:32
 */
class DNA2RNA
{
    const translateDnaRna=["G"=>"C",
        "A"=>"U",
        "T"=>"A",
        "C"=>"G"
        ];


    public static function getRna($dna)
    {
       // return str_replace(array_keys(self::translateDnaRna), array_values(self::translateDnaRna), $dna);
        return strtr($dna, self::translateDnaRna);
    }
}