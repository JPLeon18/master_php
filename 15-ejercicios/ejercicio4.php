<?php

$soyArray = array(
    'nombre' => 'juan',
    'apellido' => 'leon'
);

$soyString = "hola string";

$soyInt = 55;

$soyBoolean = true;

if (is_array($soyArray)){

    echo "soy un array"."<br>";
    var_dump($soyArray);
}

if (is_string($soyString)){
    echo "<hr>";
    echo "soy un string"."<br>";
    var_dump($soyString);
}

if (is_int($soyInt)){
    echo "<hr>";
    echo "soy un numero"."<br>";
    var_dump($soyInt);
}

if (is_bool($soyBoolean)){
    echo "<hr>";
    echo "soy un Boolean"."<br>";
    var_dump($soyBoolean);
}
