<?php
require "includes/conexion.php";

$_SESSION['status'] = "Error: Por favor llene todos los campos";
$_SESSION['color'] = "crimson";


if (!empty($_POST['nombre']) && !empty($_POST['apellido']) &&  !empty($_POST['correo']) && !empty($_POST['password'])){

    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
    $correo = mysqli_real_escape_string($conexion, trim($_POST['correo']));
    $password = mysqli_real_escape_string($conexion, $_POST['password']);
    $_SESSION['status'] = "ok";

    if (!is_string($nombre) || preg_match("/[0-9]+/", $nombre)){
        $_SESSION['status'] = "Error: Por favor verifique su nombre";
        $_SESSION['color'] = "crimson";
        header("location: index.php");
        }

    if (!is_string($apellido) || preg_match("/[0-9]+/", $apellido)){
        $_SESSION['status'] = "Error: Por favor verifique su apellido";
        $_SESSION['color'] = "crimson";
        header("location: index.php");
    }

    if (!is_string($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)){
        $_SESSION['status'] = "Error: Por favor verifique su correo";
        $_SESSION['color'] = "crimson";
        header("location: index.php");
    }

    if (empty($password) || strlen($password) < 5){
        $_SESSION['status'] = "Error: La contraseña debe tener minimo 5 caracteres";
        $_SESSION['color'] = "crimson";
        header("location: index.php");
    }

}else{
    header("location: index.php");
}


if ($_SESSION['status'] == "ok"){

    $passwordCifrada = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

    $consultaInsert = "INSERT INTO usuarios VALUES (NULL, '$nombre', '$apellido', '$correo', '$passwordCifrada', CURDATE())";
    $consulta = mysqli_query($conexion, $consultaInsert);

    if ($consulta){
        $_SESSION['status'] = "Usuario registrado correctamente";
        $_SESSION['color'] = "limegreen";
        header("location: index.php");
    }else{
        $_SESSION['status'] = "Error de conexion: ".mysqli_error($conexion);
        $_SESSION['color'] = "crimson";
        header("location: index.php");
    }
}