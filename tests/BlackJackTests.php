<?php

use Dojo\BlackJack\BlackJack;

/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 23/10/17
 * Time: 09:40
 */
class BlackJackTests  extends \PHPUnit\Framework\TestCase
{
    public function testIsTrue(){
        self::assertEquals('bank', BlackJack::game([2,4,6], [9,7,5]) );
        self::assertEquals('player', BlackJack::game([9,7,5], [2,4,6]) );
        self::assertEquals('bank', BlackJack::game([9,7,3], ['q',4,6]) );
        self::assertEquals('player', BlackJack::game([9,7,3], ['q','j',6]) );
        self::assertEquals('player', BlackJack::game([9,7,'A'], [2,8,6]) );
        self::assertEquals('player', BlackJack::game(['A','A',7], [2,8,6]) );
    }
}