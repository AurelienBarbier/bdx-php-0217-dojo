<?php

namespace Dojo\OrderWords;

/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/05/17
 * Time: 16:02
 */
class OrderWords
{
    public static function Order($input)
    {
        $words = explode (" ", $input );
        $countWords = count($words);
        $cleanChainTab = [];
        for($i=0; $i<$countWords; $i++){
            $word = $words[$i];
            $countLetters = strlen($word);
            $value = "";
            $index = 0;
            for($j=0; $j<$countLetters ; $j++){
                if (is_numeric($word[$j])) {
                    $index = $word[$j];

                } else {
                    $value .= $word[$j];
                    echo $value;
                }
            }
            $index = (int) $index;
            $cleanChainTab[$index] = $value;

        }
        var_dump ($cleanChainTab);
        ksort($cleanChainTab);
        var_dump ($cleanChainTab);
        $finalWords = implode( " ", $cleanChainTab);
        return $finalWords;
    }
}