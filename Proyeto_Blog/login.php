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
            $_SESSION['sesion'] = $usuario;





            if (isset($_SESSION['error'])){
                session_unset($_SESSION['error']);
            }
        }

    }else{
        $_SESSION['error'] = "Login incorecto";
    }
}else{
    $_SESSION['error'] = "Login incorecto";
}

