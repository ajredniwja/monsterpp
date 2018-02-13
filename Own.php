<?php

class Own extends Monster
{
    protected $color;

    function __construct($name = "My own monster", $color="black")
    {
        $this->color = $color;

        parent::setName($name);
    }

    function attack()
    {
        echo $this->name." of ".$this->color. " color is attacking!";
    }

    function checkColor()
    {
        echo "<h1 style='color: $this->color;'>The color is $this->color</h1>";
    }
}