<?php
require "includes/conexion.php";

$_SESSION['statusEditarEntrada'] = "Por favor llene todos los datos";

if (!empty($_POST['titulo']) && !empty($_POST['descripcion']) && !empty($_POST['categoria']) && !empty($_POST['entradavieja'])){

    $titulo = mysqli_real_escape_string($conexion, trim($_POST['titulo']));
    $descripcion = mysqli_real_escape_string($conexion, trim($_POST['descripcion']));
    $categoriaEntrada = mysqli_real_escape_string($conexion, $_POST['categoria']);
    $entradavieja = mysqli_real_escape_string($conexion, $_POST['entradavieja']);
    $_SESSION['statusEditarEntrada'] = "ok";


    if (empty($titulo) || strlen($titulo) > 50){
        $_SESSION['statusEditarEntrada'] = "Error al ingresar el titulo";
        header("location: crearEntrada.php");
    }

    if (empty($descripcion)){
        $_SESSION['statusEditarEntrada'] = "Error al ingresar la descripcion";
        header("location: crearEntrada.php");
    }

    if (empty($categoriaEntrada)){
        $_SESSION['statusEditarEntrada'] = "Error al ingresar la categoria";
        header("location: crearEntrada.php");
    }

    if (empty($entradavieja) || !isset($entradavieja)){
        $_SESSION['statusEditarEntrada'] = "Error al editar la entrada";
        header("location: crearEntrada.php");
    }

}

header("location: crearEntrada.php");

if ($_SESSION['statusEditarEntrada'] == "ok"){
    $sqlUpdateEntrada = "UPDATE entradas SET titulo = '$titulo', descripcion = '$descripcion', categoria_id = $categoriaEntrada WHERE id = $entradavieja";

    $queryUpdateEntrada = mysqli_query($conexion, $sqlUpdateEntrada);

    if ($queryUpdateEntrada){
        $_SESSION['statusEditarEntrada'] = "Entrada modificada correctamente";
        header("location: crearEntrada.php");
    }
}