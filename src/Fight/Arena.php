<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/10/17
 * Time: 12:34
 */


class Arena
{
    private $warrior1;
    private $warrior2;

    /**
     * @return mixed
     */
    public function getWarrior1()
    {
        return $this->warrior1;
    }

    /**
     * @param mixed $warrior1
     */
    public function setWarrior1($warrior1)
    {
        $this->warrior1 = $warrior1;
    }

    /**
     * @return mixed
     */
    public function getWarrior2()
    {
        return $this->warrior2;
    }

    /**
     * @param mixed $warrior2
     */
    public function setWarrior2($warrior2)
    {
        $this->warrior2 = $warrior2;
    }

    public function __construct($warrior1,$warrior2)
    {
        $this->warrior1 = $warrior1;
        $this->warrior2 = $warrior2;
    }
    public function fightMaggots()
    {
        while($this->warrior1->isAlive() && $this->warrior2->isAlive()) {
            $this->warrior1->setLife($this->warrior1->getLife() - $this->warrior2->getAttack());
            $this->warrior2->setLife($this->warrior2->getLife() - $this->warrior1->getAttack());
        }

        if ($this->warrior1->getLife() > 0 ){

            return $this->warrior1->getName();
        }

        else {

            return $this->warrior2->getName();
        }

    }
}