<?php
/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 07/11/17
 * Time: 09:24
 */

namespace Dojo\Demineur;


class Demineur
{

   private $areaPlayInside;


    public function __construct($areaPlayFromOutside)
    {
        $this->areaPlayInside = $areaPlayFromOutside;
    }

    public function testNeighbour($x, $y, $result){
        if (isset($this->areaPlayInside[$y][$x]) && $this->areaPlayInside[$y][$x] === 1)  {
            $result++;
        }
        return $result;
    }

    public function tryCase($x, $y){
        if (!isset($this->areaPlayInside[$y][$x])) {
            $result = false;
        } elseif ($this->areaPlayInside[$y][$x] === 1) {
            $result = "boom";
        }
        else
        {
            $result = 0;
            for($i = $x-1; $i <= $x+1 ; $i++){
                for($j = $y-1; $j <= $y+1; $j++){

                    $result = $this->testNeighbour($i, $j, $result);
                }
            }

        }

        return $result ;
    }

}