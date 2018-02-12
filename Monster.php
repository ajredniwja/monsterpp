<?php

class Monster
{
    protected $name;

    function __construct($name = "drakula")
    {
        $this->$name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function attack()
    {
       echo $this->name."is attacking";
    }
}