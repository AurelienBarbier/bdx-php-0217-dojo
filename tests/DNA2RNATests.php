<?php

use Dojo\DNA2RNA\DNA2RNA;

/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 23/10/17
 * Time: 09:28
 */
class DNA2RNATests extends \PHPUnit\Framework\TestCase
{
    public function testIsTrue()
    {
        $this->assertEquals(true, true);
        $this->assertEquals('C', DNA2RNA::getRna('G'));
        $this->assertEquals('G', DNA2RNA::getRna('C'));
        $this->assertEquals('CGU', DNA2RNA::getRna('GCA'));

    }
}