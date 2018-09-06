<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/10/17
 * Time: 11:01
 */
class Worm
{
    private $attack;
    private $life;
    private $name;

    /**
     * @return mixed
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * @param mixed $attack
     */
    public function setAttack($attack)
    {
        $this->attack = $attack;
    }

    /**
     * @return mixed
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * @param mixed $life
     */
    public function setLife($life)
    {
        $this->life = $life;
    }

    public function __construct(int $attack, int $life, string $name)
    {
        $this->life = $life;
        $this->attack = $attack;
        $this->name = $name;
    }

    public function isAlive()
    {
        return ($this->life > 0);
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}