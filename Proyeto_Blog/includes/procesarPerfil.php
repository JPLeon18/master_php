<?php
require "conexion.php";

$_SESSION['statusActualizarDatos'] = "Por favor ingrese los datos";

if (!empty($_POST['nombre']) && !empty($_POST['apellido'])){

    $_SESSION['statusActualizarDatos'] = "ok";
    $nombreA = mysqli_real_escape_string($conexion, trim($_POST['nombre']));
    $apellidoA = mysqli_real_escape_string($conexion, trim($_POST['apellido']));

    if (!is_string($nombreA) || preg_match("/[0-9]+/", $nombreA)){
        $_SESSION['statusActualizarDatos'] = "Error, por favor verifique su nombre";
        header("location: ../editarPerfil.php");
    }

    if (!is_string($apellidoA) || preg_match("/[0-9]+/", $apellidoA)){
        $_SESSION['statusActualizarDatos'] = "Error, por favor verifique el apellido";
        header("location: ../editarPerfil.php");
    }

}

header("location: ../editarPerfil.php");

if ($_SESSION['statusActualizarDatos'] == "ok"){

    $idUpdate = $_SESSION['user_login']['id'];

    $sqlActualizarDatos = "UPDATE usuarios SET nombre = '$nombreA', apellido = '$apellidoA' WHERE id = $idUpdate";

    $queryActualizarDatos = mysqli_query($conexion, $sqlActualizarDatos);

    if ($queryActualizarDatos){
        $_SESSION['statusActualizarDatos'] = "Datos Actualizados correctamente";
        $_SESSION['user_login']['nombre'] = $nombreA;
        $_SESSION['user_login']['apellido'] = $apellidoA;
        header("location: ../editarPerfil.php");
    }else{
        $_SESSION['statusActualizarDatos'] = "Error de conexion, ".mysqli_error($conexion);
    }

}