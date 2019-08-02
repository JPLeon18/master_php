<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'keep';

$conexion = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()){
    echo 'Conexion ha fallida 😨 : '.mysqli_connect_error();
}else{
    echo 'Conexion correcta 👍';
}

echo '<hr>';

// Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");


$selectNotas = mysqli_query($conexion, "SELECT * FROM notas");



while ($nota = mysqli_fetch_assoc($selectNotas)){
    echo '<h2 style="background:'.$nota['color'].'">'.$nota['titulo'].'</h2>';
    echo $nota['descripcion'].'<br>';
    echo '<hr>';
}