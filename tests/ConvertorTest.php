<?php

use \Dojo\Morse\Convertor;

/**
 * Class ConvertorTest
 *
 * Écrire une fonction qui prend en entrée du code Morse
 * et le convertit en caractères lisibles par l’homme.
 * Le morse est composé de succession de points et de tirets.
 * Chaque lettre est séparée par un espace, chaque mot par 3 espaces
 *
 *
 */

class ConvertorTest extends \PHPUnit\Framework\TestCase
{
    public function testIsTrue()
    {

        $this->assertEquals(true, true);
        $this->assertEquals('E', Convertor::controller('.'));
        $this->assertEquals('S', Convertor::controller('...'));
        // $this->assertEquals('SOS', Convertor::controller('... --- ...'));

    }
}
