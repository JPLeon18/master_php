<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'keep';

$conexion = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()){
    echo 'Conexion fallida 😨 : '.mysqli_connect_error();
}else{
    echo 'Conexion correcta 👍';
}

echo '<hr>';

// Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");


$selectNotas = mysqli_query($conexion, "SELECT * FROM notas");



while ($nota = mysqli_fetch_assoc($selectNotas)){
    echo '<div style="background: '.$nota['color'].'">';
    echo '<h2>'.$nota['titulo'].'</h2>';
    echo $nota['descripcion'].'<br>';
    echo '</div>';
}

//////////////------------/////////////////////

$insertPhp = "INSERT INTO notas VALUES(NULL, 'PELUQUEAR AL PERRO', 'MAÑANA EN LA MAÑANA SE DEBE DE PELUQUEAR AL PERRITO', 'purple')";

$consultaInsert = mysqli_query($conexion, $insertPhp);

if ($consultaInsert){
    echo "Consulta realizada con exito";
}else{
    echo "error: ".mysqli_error($conexion);
}