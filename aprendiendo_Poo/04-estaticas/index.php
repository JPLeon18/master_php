<?php
require_once "configEstatic.php";

configEstatic::setColor("rojo");

configEstatic::setEntorno("localhost");

configEstatic::setNewsLetter(true);

echo configEstatic::$color."<br>";
echo configEstatic::$entorno;
echo configEstatic::$newsLetter;


$configuracion = new configEstatic();

    $configuracion::$color = "red";

    echo $configuracion::$color;
