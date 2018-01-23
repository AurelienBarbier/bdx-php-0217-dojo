<?php

/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 09/11/17
 * Time: 10:03
 */
use Dojo\Matrice\Matrice;

class MatriceTests extends \PHPUnit\Framework\TestCase
{
    public function testCalc(){
        $this->assertEquals(true, true);
        $this->assertEquals([[5, 5, 5], [5, 5, 5], [5, 5, 5]], Matrice::calcul([[0, 0, 0], [0, 0, 0], [0, 0, 0]], "+", 5) );
        $this->assertEquals([[5, 10, 5], [5, 10, 5], [5, 5, 10]], Matrice::calcul([[1, 2, 1], [1, 2, 1], [1, 1, 2]], "*", 5) );
   }
}