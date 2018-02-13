<?php

class Monster
{
    protected $name;

    function __construct($name = "drakula")
    {
        $this->name = $name;
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
       echo "<h1>".$this->name. " is attacking! >.<</h1>";
    }
}