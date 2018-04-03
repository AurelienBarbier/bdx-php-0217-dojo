<?php

namespace Dojo\BlackJack;

/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 23/10/17
 * Time: 09:40
 */
class BlackJack
{
    public function getValue($hand) {

        $result = 0;
        $as = 0;

        foreach ($hand as $value) {

            if (is_numeric($value)) {
                $result += $value;
            } else {
                if ($value === 'A') {
                    $as++;
                } else {
                    $result += 10;
                }
            }
        }
        while ($result <= 10 && $as > 0) {
            $result += 11;
            $as--;
        }
        var_dump($result + $as);
        return $result + $as;
    }

    public static function getWinner($bank, $player){

        $resultBank = self::getValue($bank);
        $resultPlayer = self::getValue($player);

        if (($resultBank > $resultPlayer) && ($resultBank <= 21)) {
            return 'Bank';
        }
        if (($resultBank < $resultPlayer) && ($resultPlayer <= 21)) {
            return 'Player';
        }
        return null;

    }
}