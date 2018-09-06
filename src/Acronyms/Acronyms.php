<?php

namespace Dojo\Acronyms;

/**
 * Created by PhpStorm.
 * User: root
 * Date: 03/07/17
 * Time: 17:43
 */
class Acronyms
{
    public function testAcronym($string)
    {
        $result = "";
        $words = explode(' ', $string);
        $previousLetter = "";
        $currentLetter = "";

        foreach($words as $key => $word){
            if ((count($words ) <= 3) || (count($words ) > 3 && strlen($word) >2)) {

                $previousLetter = $words[$key-1][0];
                $currentLetter = $words[$key][0];

                $result .= $word[0] . '.';
            }

        }
        return strtoupper($result);
    }
}