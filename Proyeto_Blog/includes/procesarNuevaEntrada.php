<?php
require "conexion.php";

$_SESSION['statusNuevaEntrada'] = "Por favor llene todos los datos";

if (!empty($_POST['titulo']) && !empty($_POST['descripcion']) && !empty($_POST['categoria'])){

    $titulo = mysqli_real_escape_string($conexion, trim($_POST['titulo']));
    $descripcion = mysqli_real_escape_string($conexion, trim($_POST['descripcion']));
    $categoriaEntrada = mysqli_real_escape_string($conexion, $_POST['categoria']);
    $_SESSION['statusNuevaEntrada'] = "ok";

    if (empty($titulo) || strlen($titulo) > 50){
        $_SESSION['statusNuevaEntrada'] = "Error al ingresar el titulo";
        header("location: ../crearEntrada.php");
    }

    if (empty($descripcion)){
        $_SESSION['statusNuevaEntrada'] = "Error al ingresar la descripcion";
        header("location: ../crearEntrada.php");
    }

    if (empty($categoriaEntrada)){
        $_SESSION['statusNuevaEntrada'] = "Error al ingresar la categoria";
        header("location: ../crearEntrada.php");
    }

}

header("location: ../crearEntrada.php");

if ($_SESSION['statusNuevaEntrada'] == "ok"){

    $userId = $_SESSION['user_login']['id'];

    $sqlEntrada = "INSERT INTO entradas VALUES (NULL, $userId, $categoriaEntrada, '$titulo', '$descripcion', CURDATE())";

    $queryEntrada = mysqli_query($conexion, $sqlEntrada);

    if ($queryEntrada){
        $_SESSION['statusNuevaEntrada'] = "Entrada creada correctamente";
        header("location: ../crearEntrada.php");
    }
}