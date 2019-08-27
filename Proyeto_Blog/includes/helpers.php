<?php

function deleteErrors(){
    $_SESSION['status'] = null;

    $borrado = session_unset($_SESSION['status']);

    return $borrado;
}

function conseguirCategorias (){
    global  $conexion;
    $sql = "SELECT * FROM categorias ORDER BY id ASC";

    $status = array();

    $queryCategorias = mysqli_query($conexion, $sql);

    if ($queryCategorias && mysqli_num_rows($queryCategorias) >= 1){
        $status = $queryCategorias;
    }

    return $status;
}

function conseguirCategoriasMenu (){
    global  $conexion;
    $sql = "SELECT * FROM categorias ORDER BY id DESC LIMIT 10";

    $status = array();

    $queryCategorias = mysqli_query($conexion, $sql);

    if ($queryCategorias && mysqli_num_rows($queryCategorias) >= 1){
        $status = $queryCategorias;
    }

    return $status;
}

function conseguirUltimasEntradas (){
    global $conexion;
    $status = array();

    $sql =  "SELECT e.*, c.* FROM entradas e ".
            "INNER JOIN categorias c ON e.categoria_id = c.id ".
            "ORDER BY e.id DESC LIMIT 4";

    $queryEntradas = mysqli_query($conexion, $sql);

    if ($queryEntradas && mysqli_num_rows($queryEntradas) >= 1){
        $status = $queryEntradas;
    }

    return $status;
}

function conseguirEntradas(){
    global $conexion;
    $status = array();

    $sql =  "SELECT * FROM entradas ORDER BY id DESC";

    $queryEntradas = mysqli_query($conexion, $sql);

    if ($queryEntradas && mysqli_num_rows($queryEntradas) >= 1){
        $status = $queryEntradas;
    }

    return $status;
}