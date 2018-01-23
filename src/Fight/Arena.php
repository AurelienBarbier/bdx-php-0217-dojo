<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/10/17
 * Time: 12:34
 */
class Arena
{
    public static function fight($fighter1, $fighter2){

        while($fighter1->isAlive() && $fighter2->isAlive()) {

            $fighter1->attack($fighter2);
            $fighter2->attack($fighter1);
        }

        return ($fighter1->isAlive()) ? $fighter1 :  $fighter2 ;


    }
}