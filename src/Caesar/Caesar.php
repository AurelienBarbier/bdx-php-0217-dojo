<?php

namespace Dojo\Caesar;
/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 28/11/17
 * Time: 10:05
 */
class Caesar
{
    public static function crypt($clear){

        $crypted = '';
        $nbChars = strlen($clear);

        for ($i=0; $i< $nbChars; $i++){
            $num = ord($clear[$i]);

            $startNumber = 64;
            if($num > 96){
                $startNumber = 96;
            }

            $num -= $startNumber;
            $codeDecale = $num + 3;
            $crypted.= chr(($codeDecale % 26) + $startNumber);
        }

        return $crypted;
    }
}