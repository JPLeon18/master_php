<?php

require "includes/conexion.php";


if (!empty($_POST['correo']) && !empty($_POST['password'])){

    $correoUser = mysqli_real_escape_string($conexion, trim($_POST['correo']));
    $passwordUser = mysqli_real_escape_string($conexion, $_POST['password']);


    $sqlSelect = "SELECT * FROM usuarios WHERE email = '$correoUser'";

    $login = mysqli_query($conexion, $sqlSelect);

    if ($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);

        $verify = password_verify($passwordUser, $usuario['password']);

        if ($verify){
            $_SESSION['user_login'] = $usuario;

            if (isset($_SESSION['error_login'])){
                $_SESSION['error_login'] = "ok";
            }

        }else{
            $_SESSION['error_login'] = "Login incorecto";
        }

    }else{
        $_SESSION['error_login'] = "Login incorecto";
    }
}else{
    $_SESSION['error_login'] = "Login incorecto";
}

header("Location: index.php");

