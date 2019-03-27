<?php

$numbers = array(12,10,8,60,25,120,4,76);

function mostrarNumbers($array){
    $arreglo = "";
    $arreglo = "<ul>";
    foreach ($array as $number){
        $arreglo.= "<li>$number</li>";
    }
    $arreglo .= "</ul>";

    return $arreglo;
}
// Mostrar
echo mostrarNumbers($numbers);


// Ordenar y mostrar
echo "<hr>";
asort($numbers);

echo mostrarNumbers($numbers);


// Longitud
echo "<hr>";

echo count($numbers);

// Buscar
echo "<hr>";
$search = array_search(25, $numbers);


if ($search){
    echo "el numero si existe y esta en la posicion $search";
}else{
    echo "el numero no existe ";
}