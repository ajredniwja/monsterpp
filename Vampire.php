<?php

class Vampire extends Monster
{
    private static $_counter = 0;
    protected $victims;


    function __construct($name = "Vampire")
    {
        parent::setName($name);
    }

    function attack()
    {
        $this->victims = self::$_counter;
        self::$_counter++;
        echo "Attack No. ".$this->victims." ".$this->name." the new monster is atacking<br>";
    }

    function getVictims()
    {
        return $this->victims;
    }

}