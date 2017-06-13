<?php
use \Dojo\OrderWords\OrderWords;
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/05/17
 * Time: 16:02
 */
class OrderWordsTest extends \PHPUnit\Framework\TestCase
{
    public function testIsTrue(){
        $this->assertEquals(true, true);
        $this->assertEquals( "Ceci est un test", OrderWords::Order("e2st 4test Ce1ci un3") );
    }
}