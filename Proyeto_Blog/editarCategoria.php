<?php
require "includes/conexion.php";

$_SESSION['statusEditarCategoria'] = "Por favor ingrese el nuevo nombre de la categoria";

if (!empty($_POST['nombreCategoriaNueva']) && !empty($_POST['nombreCategoriaEditar'])){
    $nombreNuevo = mysqli_real_escape_string($conexion, $_POST['nombreCategoriaNueva']);
    $nombreviejo = mysqli_real_escape_string($conexion, $_POST['nombreCategoriaEditar']);

    $_SESSION['statusEditarCategoria'] = "ok";

    if (!is_string($nombreNuevo) || preg_match("/[0-9]+/", $nombreNuevo)){
        $_SESSION['statusEditarCategoria'] = "Error, nombre de la nueva categoria no es valida";
        header("location: crearCategoria.php");
    }

    $sqlVerificarCategoriavieja = "SELECT * FROM categorias WHERE nombre = '$nombreviejo'";

    $queryVerificarCategoriaVieja = mysqli_query($conexion, $sqlVerificarCategoriavieja);

    if (!$queryVerificarCategoriaVieja){
        $_SESSION['statusEditarCategoria'] = "Categoria a editar no existe";
        header("location: crearCategoria.php");
    }

}
header("location: crearCategoria.php");

if ($_SESSION['statusEditarCategoria'] == "ok"){

    $updateCategoria = "UPDATE categorias SET nombre = '$nombreNuevo' WHERE nombre = '$nombreviejo'";
    $queryUpdateCategoria = mysqli_query($conexion, $updateCategoria);

    if ($queryUpdateCategoria){
        $_SESSION['statusEditarCategoria'] = "Categoria editada correctamente";
        header("location: crearCategoria.php");
    }
}

