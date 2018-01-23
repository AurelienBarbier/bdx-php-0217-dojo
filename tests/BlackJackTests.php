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
        self::assertTrue(true);
        self::assertEquals('player', BlackJack::compareHand([4,'K','K','Q'],[9, 'K', 2]));
        self::assertEquals('bank', BlackJack::compareHand(['A','K','Q'],['K', 2]));
        self::assertEquals('bank', BlackJack::compareHand([6,6,8],[9,6,2,2]));
        self::assertEquals('player', BlackJack::compareHand([9,6,2,2],[6,6,8]));
        self::assertEquals('player', BlackJack::compareHand([9,6,2,2],[6,6,8]));
        self::assertEquals(null, BlackJack::compareHand([10,6,5],[10,6,5]));
        self::assertEquals(null, BlackJack::compareHand([10,10,10],[10,10,9]));
        self::assertEquals('bank', BlackJack::compareHand(['A','A','A'],[3,3,3]));

    }
}

