<?php
require_once "coche.php";


$coche0 = new Coche("red", 2019, "mazda", 1500, 300);
$coche1 = new Coche("green", 2020, "MClaren", 1400, 300);
$coche2 = new Coche("yellow", 2030, "chevrolet", 2500, 700);


echo $coche1->mostrarInfo($coche2);

