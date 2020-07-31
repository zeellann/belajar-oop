<?php

require_once 'Animal.php';
require_once 'Ape.php';
require_once 'Frog.php';

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>" . $sheep->legs; // 2
echo "<br>" . $sheep->cold_blooded; // 

echo " <br> <br> ";


$sungokong = new Ape("kera sakti");
$sungokong->yell() ; // "Auooo"

echo "<br>";

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
        

?>