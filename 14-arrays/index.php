<?php

$peliculas = array("batman", "marvel", "capitan america", "iron man");

$personas = array(

    "nombre" => "juan",
    "apellido" => "leon"


 );

$contactos = array(
    array(
        "nombre" => "juan",
        "telefono" => 3226707866
    ),
    array(
        "nombre" => "lina",
        "telefono" => 3232948082
    )
);

echo "<ul>";
foreach ($contactos as $key => $contacto){
    echo "<li>".$contacto["nombre"]."</li>";
}
echo "</ul>";


echo "<hr>";

var_dump($contactos);


echo "<ul>";
for ($i = 0; $i < count($peliculas); $i++){
    echo "<li>$peliculas[$i]</li>";
}
echo "</ul>";

echo "<hr>";


echo "<ul>";
foreach ($peliculas as $pelicula){
    echo "<li>$pelicula</li>";
}
echo "</ul>";



echo "<hr>";

$carros = array("mustang", "camaro", "hummer", "dodge");



// Añadir elementos al array
$carros[] = "Cerato";
array_push($carros, "audi");

echo "<br>";

foreach ($carros as $carro){
    echo $carro."<br>";
}

// eliminar elementos del array
array_pop($carros);
unset($carros[1]);





echo "<br>";

foreach ($carros as $carro){
    echo $carro."<br>";
}

echo "<br>";
$numeroRand = array_rand($carros);

echo $carros[$numeroRand];

echo "<br>";

echo array_search("hummer",$carros);

echo "<br>";

echo count($carros);