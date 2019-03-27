<?php

echo date("D, d M y:h:m")."<br>";

echo time();

echo "<br>";

echo "Rais cuadrada de 10 es ".sqrt(10);

echo "<br>";

echo rand(1,10);

echo "<br>";

echo "Round ".round(2.8884,2);

echo "<br>";

$nombre="juan";

if (is_string($nombre)){
    echo "es de tipo String";
}

echo "<br>";
$hola = "   Hola   ";
var_dump(trim($hola));

// Eliminar variables

$year = "";
unset($year);

echo "<br>";
// Comprobar si la variable esta vacia empty

$texto = "";

if (empty($texto)){
    echo "la variable no tiene nada";
}else{
    echo "la variable tiene contenido";
}

echo "<br>";
// contar caracteres

$contarCaracteres = "123456";

echo strlen($contarCaracteres);

echo "<br>";
// Encontrar caracteres

$frace = "La vida es bella";
echo strpos($frace, "bella");


echo "<br>";
$frace = str_replace("vida","moto", $frace);

echo $frace;

// MAYUSCULAS y minusculas
echo "<hr>";
echo strtoupper($frace);
echo "<br>";
echo strtolower($frace);



