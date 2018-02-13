<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);

include ('Monster.php');
include ('Vampire.php');
include ('Own.php');

$monster = new Monster("DRAGOON"); //making an object of pet class
$monster->attack();

echo "<h1>";
$vampire = new Vampire();
$vampire->attack();
$vampire->attack();
$vampire->attack();
$vampire->attack();
$vampire->attack();
echo "<br>";

$Own = new Own("fini", "red");
$Own->attack();
$Own->checkColor();
echo "</h1>";



