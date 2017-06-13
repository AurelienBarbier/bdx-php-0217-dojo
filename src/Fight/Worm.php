<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/05/17
 * Time: 15:22
 */



class Worm
{
    private $_pointVie;
    private $_pointAttaque;

    public function __construct($pointVie, $pointAttaque)
    {
        $this->_pointVie = $pointVie;
        $this->_pointAttaque = $pointAttaque;
    }

    public function setPointVie($point)
    {
        $this->_pointVie = $point;
    }

    public function setPointAttaque($point)
    {
        $this->_pointAttaque = $point;
    }

    public function getPointVie()
    {
        return $this->_pointVie;
    }

    public function getPointAttaque()
    {
        return $this->_pointAttaque;
    }

    public function subPointVie($point)
    {
        $this->_pointVie -= $point;
    }
    public function isDead(){
        return $this->_pointVie <= 0;
    }

}