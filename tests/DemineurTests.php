<?php

/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 07/11/17
 * Time: 09:23
 */
use Dojo\Demineur\Demineur;

class DemineurTests extends \PHPUnit\Framework\TestCase
{
    public function testMine(){
        $play = new Demineur([
            [1,0,1,0,0],
            [0,0,1,1,0],
            [1,1,0,0,1],
            [0,0,1,0,0]
        ]);
        $this->assertEquals(true, true);
        $this->assertEquals('boom', $play->tryCase(0,0)  );
        $this->assertEquals(2, $play->tryCase(4,1)  );
        $this->assertEquals(2, $play->tryCase(3,3)  );
        $this->assertEquals(3, $play->tryCase(0,1)  );
        $this->assertEquals('boom', $play->tryCase(3,1)  );
        $this->assertEquals(false, $play->tryCase(1,6)  );

    }
}