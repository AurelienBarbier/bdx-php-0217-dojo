<?php
use \Dojo\Slugify\Slugify;

/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 17/10/17
 * Time: 10:32
 */
class SlugifyTests extends \PHPUnit\Framework\TestCase
{
    public function testIsTrue(){
        $this->assertEquals(true, true);
        $this->assertEquals('e', Slugify::slug('E'));
        $this->assertEquals('argh-encore', Slugify::slug('ARGH Encore'));
        $this->assertEquals('argh-encore', Slugify::slug('argh, encore !'));
    }

}