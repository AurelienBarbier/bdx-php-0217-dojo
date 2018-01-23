<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/10/17
 * Time: 11:01
 */
class Worm
{
    private $_life = 100;
    private $_strength;
    private $_name;

    public function __construct($name, $strength){
        $this->_strength = $strength;
        $this->_name = $name;
    }

    public function getLife(){
        return $this->_life;
    }

    public function setLife($life) {
        $this->_life = $life;
    }

    public function getStrength() {
        return $this->_strength;
    }

    public function setStrength($strength){
        $this->_strength = $strength;
    }

    public function attack(Worm $target) {
        $target->setLife($target->getLife() - $this->_strength);
    }

    public function isAlive(){
        return $this->getLife() > 0;
    }

    public function __toString()
    {
        return $this->_name . " (" .  $this->getLife() . ' PV)';
    }


}