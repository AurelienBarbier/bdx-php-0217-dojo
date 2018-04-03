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
        self::assertEquals(true, true);
        self::assertEquals('Player', BlackJack::getWinner([3, 9, 4], [9, 9, 3]));
        self::assertEquals('Bank', BlackJack::getWinner([5, 9, 6], [9, 4, 2]));
        self::assertEquals(null, BlackJack::getWinner([5, 9, 6], [5, 9, 6]));
        self::assertEquals('Bank', BlackJack::getWinner(['A', 'V', 1], [5, 9, 6]));
        self::assertEquals('Bank', BlackJack::getWinner(['A', 4, 'A'], ['A', 5]));
    }

}

