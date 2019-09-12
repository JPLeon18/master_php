<?php
require_once "clases.php";

$persona = new persona();

$juan = new Informatico("php, js", 9, "juan", "leon", 25);

$gil = new Informatico("Angular, css", 8, "gilberto", "guerrero", 29);

$david = new Informatico("vue, css", 6, "David", "valencia", 24);

$cesar = new Diseñador("ilustrator", "cesar", "calde", 30);


var_dump($persona);

var_dump($juan);

var_dump($gil);

var_dump($david);

var_dump($cesar);