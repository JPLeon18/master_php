<?php

require "includes/conexion.php";

$status = "Error: Por favor llene todos los campos";
$colorStatus = "crimson";

if (!empty($_POST['nombre']) && !empty($_POST['apellido']) &&  !empty($_POST['correo']) && !empty($_POST['password'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $status = "ok";

    if (!is_string($nombre) || preg_match("/[0-9]+/", $nombre)){
        $status = "Error: Por favor verifique su nombre";
        $colorStatus = "crimson";
        header("location: index.php?status=$status&color=$colorStatus");
        }

    if (!is_string($apellido) || preg_match("/[0-9]+/", $apellido)){
        $status = "Error: Por favor verifique su apellido";
        $colorStatus = "crimson";
        header("location: index.php?status=$status&color=$colorStatus");
    }

    if (!is_string($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)){
        $status = "Error: Por favor verifique su correo";
        $colorStatus = "crimson";
        header("location: index.php?status=$status&color=$colorStatus");
    }

    if (empty($password) || strlen($password) < 5){
        $status = "Error: La contraseña debe tener minimo 5 caracteres";
        $colorStatus = "crimson";
        header("location: index.php?status=$status&color=$colorStatus");
    }

}else{
    header("location: index.php?status=$status&color=$colorStatus");
}


if ($status == "ok"){
    $consultaInsert = "INSERT INTO usuarios VALUES (NULL, '$nombre', '$apellido', '$correo', '$password', CURDATE())";
    $consulta = mysqli_query($conexion, $consultaInsert);

    if ($consulta){
        $status = "Usuario registrado correctamente";
        $colorStatus = "limegreen";
        header("location: index.php?status=$status&color=$colorStatus");
    }else{
        $status = "Error de conexion: ".mysqli_error($conexion);
        $colorStatus = "crimson";
        header("location: index.php?status=$status&color=$colorStatus");
    }
}