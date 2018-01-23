<?php

/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 07/11/17
 * Time: 09:23
 */

use Dojo\Caesar\Caesar;

class DemineurTests extends \PHPUnit\Framework\TestCase
{

    public function testEncription(){
        $this->assertEquals(true, true);
        $this->assertEquals('d', Caesar::crypt('a'));
        $this->assertEquals('de', Caesar::crypt('ab'));
        $this->assertEquals('D', Caesar::crypt('A'));
        $this->assertEquals('A', Caesar::crypt('X'));
        $this->assertEquals('abc', Caesar::crypt('xyz'));
    }
}