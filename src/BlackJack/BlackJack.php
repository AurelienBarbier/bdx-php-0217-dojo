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
    public static function compareHand($bank,$player)
    {
        $handPlayer = self::sumCard($player);
        $handBank = self::sumCard($bank);

        return self::findWinner($handBank, $handPlayer);

    }

    public static function sumCard($cards){
        $sum = 0;

        $nbAs = 0;

        foreach ($cards as $card){
            if(is_numeric($card)){
                $sum += $card;
            }else{
                if($card === 'A'){
                    $sum += 11;
                    $nbAs++;
                }else{
                    $sum += 10;
                }
            }
        }

        while($nbAs > 0 && $sum > 21){
            $sum -= 10;
            $nbAs--;
        }

        return $sum;
    }

    public static function findWinner($handBank, $handPlayer){

        $result = null;
        if($handBank > 21 && $handPlayer<=21){
            $result = 'player';
        }
        if ($handPlayer > 21 && $handBank<=21){
            $result = 'bank';
        }

        if(($handBank<= 21 && $handPlayer <= 21)){
            if( $handBank > $handPlayer ){
                $result = 'bank';
            }elseif($handBank < $handPlayer ){
                $result = 'player';
            }
        }
        return $result;
    }


}