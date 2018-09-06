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
    private const ALLOWED_HEADS = [ 'K', 'Q', 'J' ];
    private const AS = 'A';

    public static function game( array  $playerHand, array $bankHand):?string
    {
        $playerResult = self::countValue($playerHand);
        $bankResult = self::countValue($bankHand);
        $result = null;

        if(($bankResult > $playerResult || $playerResult > 21) && $bankResult <= 21){
            $result = 'bank';

        }elseif (($playerResult > $bankResult || $bankResult > 21) && $playerResult <= 21 ){

            $result = 'player';
        }




        return $result;


    }

    public static function countValue(array $hand)
    {
        $result = 0;
        $asCounter = 0;


        foreach($hand as $card){
            if (is_numeric($card)) {
                $result += $card;
            } elseif (in_array(strtoupper($card), self::ALLOWED_HEADS)) {
                $result += 10;
            } elseif (strtoupper($card) == self::AS){
                ++$asCounter;
            }
            else {
                throw new \Exception('The value ' . $card . ' is not an allowed card');
            }
        }

         while($asCounter > 0){
            --$asCounter;

             if ((21 - $result) >= 11){
                 $result += 11;
             }else{
                 ++$result;
             }
         }

        return $result;
    }
}