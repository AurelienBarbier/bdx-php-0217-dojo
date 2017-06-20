<?php

use \PHPUnit\Framework\TestCase;
use \Dojo\Trim\Trim;
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19/06/17
 * Time: 17:44
 */
class TrimTests  extends TestCase
{
    /**
     * @dataProvider dataToBeTrimed
     */
    public function testYourTrim(string $chaine) {

        $this->assertEquals (trim($chaine), Trim::myTrimA($chaine));
        $this->assertEquals (trim($chaine), Trim::myTrimB($chaine));
    }

    public function dataToBeTrimed()
    {
        return [
            ['La premiere chaine'],
            [' La chaine 1'],
            ['La chaine 2 '],
            ['  La chaine 3'],
            ['La chaine 4  '],
            ['  La chaine 5  '],
            ['                        La derniere chaine.                      '],
        ];
    }
}