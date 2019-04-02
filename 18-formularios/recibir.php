<?php

if(isset($_POST['titulo']) && isset($_POST['descripcion'])){
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    echo $titulo;
    echo $descripcion;
}
