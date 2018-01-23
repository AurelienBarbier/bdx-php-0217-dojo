<?php
namespace Dojo\Matrice;
/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 09/11/17
 * Time: 10:03
 */

class Matrice
{
    public static function calcul($enterMatrice, $operator, $paramNumber)
    {
        $countEnterMatrice = count($enterMatrice);

        foreach ($enterMatrice as &$row){
            foreach ($row as &$value){
                switch ($operator){
                    case "+":
                        $value += $paramNumber;
                        break;
                    case "*":
                        $value *= $paramNumber;
                        break;
                    case "/":
                        $value /= $paramNumber;
                        break;
                    case "-":
                        $value -= $paramNumber;
                        break;
                }
            }
        }
        return $enterMatrice;

    }


}