<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "blog";

$conexion = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()){
    echo "error al conectar con la base de datos: ".mysqli_error();
}

mysqli_query($conexion, "SET NAMES 'utf8'");
