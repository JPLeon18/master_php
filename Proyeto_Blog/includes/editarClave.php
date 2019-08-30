<?php
require "conexion.php";

$_SESSION['statusEditarClave'] = "Por favor llene todos los datos:";

if (isset($_POST['claveActual']) && isset($_POST['claveNueva'])){

    $_SESSION['statusEditarClave'] = "ok";
    $claveActual = mysqli_real_escape_string($conexion, trim($_POST['claveActual']));
    $claveNueva = mysqli_real_escape_string($conexion, trim($_POST['claveNueva']));
    $idClave = $_SESSION['user_login']['id'];

    if (empty($claveActual) || strlen($claveActual) < 5 ){
        $_SESSION['statusEditarClave'] = "Error al verificar la clave actual";
        header("location: ../editarPerfil.php");
    }

    if (empty($claveNueva) || strlen($claveNueva) < 5 ){
        $_SESSION['statusEditarClave'] = "Error con la nueva clave";
        header("location: ../editarPerfil");
    }


}
header("location: ../editarPerfil");

if ($_SESSION['statusEditarClave'] == "ok" ){

    $sqlVerificarClave = "SELECT * FROM usuarios WHERE id = $idClave";

    $queryVerificarClave = mysqli_query($conexion, $sqlVerificarClave);

    if ($queryVerificarClave && mysqli_num_rows($queryVerificarClave) >= 1) {

        $userPass = mysqli_fetch_assoc($queryVerificarClave);

        $verificarClave = password_verify($claveActual, $userPass['password']);

        if ($verificarClave){

            $claveNuevaEncrip = password_hash($claveNueva, PASSWORD_BCRYPT, ["cost"=>4]);

            $sqlActualizarClave = "UPDATE usuarios SET password = '$claveNuevaEncrip' WHERE id = $idClave";

            $queryActualizarClave = mysqli_query($conexion, $sqlActualizarClave);

            if ($queryActualizarClave){
                $_SESSION['statusEditarClave'] = "Contraseña Actualizada correctamente";
                header("location: ../editarPerfil.php");
            }else{
                $_SESSION['statusEditarClave'] = "Error, ".mysqli_error($conexion);
                header("location: ../editarPerfil.php");
            }
        }else{
            $_SESSION['statusEditarClave'] = "Por favor verifique las dos Contraseñas";
            header("location: ../editarPerfil.php");
        }


    }

}