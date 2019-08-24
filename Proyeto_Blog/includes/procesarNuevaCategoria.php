<?php
require "conexion.php";

$_SESSION['statusCategoria'] = "Inserte una categoria";

if (!empty($_POST["nombreCategoria"])){

    $nombreCategoria = mysqli_real_escape_string($conexion, trim($_POST["nombreCategoria"]));

    $_SESSION['statusCategoria'] = "ok";

    if (!is_string($nombreCategoria) || preg_match("/[0-9]+/", $nombreCategoria) ){
        $_SESSION['statusCategoria'] = "Error al ingresar la categoria";
        header("location: ../crearCategoria.php");
    }


    $sqlVerificarCategoria = "SELECT * FROM categorias WHERE nombre = '$nombreCategoria'";

    $queryVerificarCategoria = mysqli_query($conexion, $sqlVerificarCategoria);

    if ($queryVerificarCategoria && mysqli_num_rows($queryVerificarCategoria) >= 1){
        $_SESSION['statusCategoria'] = "Error, la categoria a crear ya exixte";
        header("location: ../crearCategoria.php");
    }


}

header("location: ../crearCategoria.php");

if ($_SESSION["statusCategoria"] == "ok") {

    $insertCategoria = "INSERT INTO categorias VALUES (NULL, '$nombreCategoria')";

    $queryInsertarCategoria = mysqli_query($conexion, $insertCategoria);

    if ($queryInsertarCategoria) {
        $_SESSION['statusCategoria'] = "Categoria insertada correctamente";
        header("location: ../crearCategoria.php");
    }

}