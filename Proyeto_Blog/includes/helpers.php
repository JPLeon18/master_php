<?php

function deleteErrors(){

    if (isset($_SESSION['statusNuevaEntrada'])){
        $_SESSION['statusNuevaEntrada'] = null;
    }

    if (isset($_SESSION['statusDeleteEntrada'])){
        $_SESSION['statusDeleteEntrada'] = null;
    }

    if (isset($_SESSION['statusEditarEntrada'])){
        $_SESSION['statusEditarEntrada'] = null;
    }

    if (isset($_SESSION['statusCategoria'])){
        $_SESSION['statusCategoria'] = null;
    }

    if (isset($_SESSION['statusEditarCategoria'])){
        $_SESSION['statusEditarCategoria'] = null;
    }

    if (isset($_SESSION['statusActualizarDatos'])){
        $_SESSION['statusActualizarDatos'] = null;
    }

    if (isset($_SESSION['statusEditarClave'])){
        $_SESSION['statusEditarClave'] = null;
    }

}

function conseguirCategorias(){
    global  $conexion;
    $sql = "SELECT * FROM categorias ORDER BY id ASC";

    $status = array();

    $queryCategorias = mysqli_query($conexion, $sql);

    if ($queryCategorias && mysqli_num_rows($queryCategorias) >= 1){
        $status = $queryCategorias;
    }

    return $status;
}

function conseguirCategoriasMenu(){
    global  $conexion;
    $sql = "SELECT * FROM categorias ORDER BY id DESC LIMIT 10";

    $status = array();

    $queryCategorias = mysqli_query($conexion, $sql);

    if ($queryCategorias && mysqli_num_rows($queryCategorias) >= 1){
        $status = $queryCategorias;
    }

    return $status;
}

function conseguirEntradas($categoria = null, $entrada = null, $limit = null){
    global $conexion;
    $status = array();

    $sql =  "SELECT e.*, c.id AS idCategoria, c.nombre FROM entradas e ".
            "INNER JOIN categorias c ON e.categoria_id = c.id ";

    if (!empty($categoria)){
        $sql .= "WHERE c.id =  $categoria ";
    }

    if (!empty($entrada)){
        $sql .= "WHERE e.id =  $entrada ";
    }

    $sql .= "ORDER BY id DESC ";

    if ($limit){
        $sql .= "LIMIT 4 ";
    }

    $queryEntradas = mysqli_query($conexion, $sql);

    if ($queryEntradas && mysqli_num_rows($queryEntradas) >= 1){
        $status = $queryEntradas;
    }

    return $status;
}
