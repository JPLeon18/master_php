<?php
require_once "coche.php";


$coche = new Coche("red", 2019, "mazda", 1500, 300);


var_dump($coche);

echo  $coche->getColor();

