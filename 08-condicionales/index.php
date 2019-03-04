<?php
/*
==  igual
=== identico
!=  Diferente
<>  Diferente
<   Menor que
>   Mayor que
<=  Menor o igual que
>=  Mayor o igual que

$color = "red";

if ($color != "red"){
    echo 'El color es diferente rojo';
}else{
    echo 'El color es rojo';
}
*/

$edad = $_GET['edad'];
$edadMayoria = 18;

if ($edad >= $edadMayoria){
    echo 'Es mayor de edad';
}else{
    echo 'NO eres mayor de edad';
}

echo '<hr>';
$dia = 2;

echo '<h2>If</h2>';

if ($dia == 1){
    echo 'lunes';
}elseif ($dia == 2){
    echo 'martes';
}elseif ($dia == 3){
    echo 'miercoles';
}elseif ($dia == 4){
    echo 'juaves';
}elseif ($dia == 5){
    echo 'viernes';
}else{
    echo 'fin de semana';
}

echo '<hr>';

echo '<h1>Switch</h1>';

switch ($dia){
    case 1:
        echo 'lunes';
        break;
    case 2:
        echo 'martes';
        break;
    case 3:
        echo 'miercoles';
        break;
    case 4:
        echo 'jueves';
        break;
    case 5:
        echo 'viernes';
        break;
    default:
        echo 'Fin de semana';
}

echo '<hr>';
// GOTO

goto marca;
echo "hola"."<br>";
echo "hola"."<br>";
echo "hola"."<br>";
echo "hola"."<br>";

marca:

echo "salto despues de la marca del goto";
