<?php

use Dojo\Likes\Likes;

/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/05/17
 * Time: 15:58
 */
class LikesTests extends \PHPUnit\Framework\TestCase
{

    public function testIsTrue(){

        $this->assertEquals(true, true);
        $this->assertEquals('Arthur likes', Likes::display('Arthur'));
        $this->assertEquals('Arthur and Sophie like', Likes::display(['Arthur', 'Sophie']));
        $this->assertEquals('Arthur, Sophie and Bob like', Likes::display(['Arthur', 'Sophie', 'Bob']));
        $this->assertEquals('Arthur and 3 others users like', Likes::display(['Arthur', 'Sophie', 'Bob', 'Serge']));
        $this->assertEquals('Be the first to like', Likes::display());
    }
}