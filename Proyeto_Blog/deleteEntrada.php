<?php
require "includes/conexion.php";
require "includes/redireccionar.php";


if (isset($_GET['deleteid'])){

    $idEntrada = mysqli_real_escape_string($conexion, $_GET['deleteid']);
    $_SESSION['statusDeleteEntrada'] = "ok";

    $usuarioId = $_SESSION['user_login']['id'];

    if (!is_numeric($idEntrada)){
        $_SESSION['statusDeleteEntrada'] = "Error al eliminar la entrada";
        header("location:crearEntrada.php");
    }


    $sqlEntrada = "SELECT * FROM entradas WHERE id = $idEntrada";

    $queryEntrada = mysqli_query($conexion, $sqlEntrada);

    if (mysqli_num_rows($queryEntrada) < 1){
        $_SESSION['statusDeleteEntrada'] = "Error al eliminar, la entrada no existe";
        header("location:crearEntrada.php");
    }

}


if ($_SESSION['statusDeleteEntrada'] == "ok") {

    $sqlDeleteEntrada = "DELETE FROM entradas WHERE id = $idEntrada AND usuario_id = $usuarioId ";

    $queryDeleteEntrada = mysqli_query($conexion, $sqlDeleteEntrada);

    if ($queryDeleteEntrada) {
        $_SESSION['statusDeleteEntrada'] = "Entrada Eliminada correctamente";
        header("location:crearEntrada.php");
    } else {
        $_SESSION['statusDeleteEntrada'] = "Error de conexion " . mysqli_error($conexion);
        header("location:crearEntrada.php");
    }
}
