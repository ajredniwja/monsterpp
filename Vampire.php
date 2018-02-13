<?php

class Vampire extends Monster
{
    private static $_counter = 0;
    protected $victims;


    function __construct($name = "new monster")
    {
        parent::__construct($name);
        self::$_counter++;
        $this->victims = self::$_counter;

    }

    function attack()
    {
        echo "The new monster is atacking";
    }

    function getVictims()
    {
        return $this->victims;
    }

}