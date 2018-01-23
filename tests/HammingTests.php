<?php

use \Dojo\Hamming\Hamming;
use \PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: root
 * Date: 03/07/17
 * Time: 17:44
 */
class HammingTests  extends \PHPUnit\Framework\TestCase
{
    public function testIsTrue()
    {
        $this->assertEquals(true, true);
        $this->assertEquals(false, Hamming::distance('AGA', 'CG'));
        $this->assertEquals(1, Hamming::distance('A', 'C'));
        $this->assertEquals(0, Hamming::distance('A', 'A'));
        //$this->assertEquals(7, Hamming::distance('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCT'));
        //$this->assertEquals(2, Hamming::distance('AGA', 'CGC'));
        //$this->assertEquals(false, Hamming::distance('AGA', 'CWG'));
    }
}