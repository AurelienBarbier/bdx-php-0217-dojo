<?php

use \Dojo\Acronyms\Acronyms;

/**
 * Created by PhpStorm.
 * User: root
 * Date: 03/07/17
 * Time: 17:44
 */
class AcronymsTests  extends \PHPUnit\Framework\TestCase
{
    public function testIsTrue(){
        $this->assertEquals('W.C.S.', Acronyms::testAcronym('Wild Code School'));
        $this->assertEquals('E.D.F.',Acronyms::testAcronym('Electricite de France'));
        $this->assertEquals('S.N.C.F.',Acronyms::testAcronym('Société Nationale du Chemin de Fer Français'));
        $this->assertEquals('W.3.C.',Acronyms::testAcronym('World Wide Web Consortium'));
    }
}