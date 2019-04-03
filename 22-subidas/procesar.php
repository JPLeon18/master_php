<?php

$archivo = $_FILES['imagen'];

$nombre = $archivo["name"];
$tipo = $archivo["type"];
$size = $archivo["size"];
$rutaTemporal = $archivo["tmp_name"];



if ($tipo == "image/jpeg" || $tipo == "image/jpg" || $tipo == "image/png" || $tipo == "image/gif"){

    if(!is_dir("imagenes")){
        mkdir("imagenes", 0777);
    }

    $ruta = "imagenes/";

    move_uploaded_file($rutaTemporal, $ruta.$nombre);

    echo "<h2>Imagen Subida</h2>";
    $message = "imagen subida correctamente puedes buscarlo en la ruta $ruta";
    header("Refresh: 2; URL=index.php?message=$message");

}else{
    $message = "╳ Solo puedes subir imagenes!!";
    header("location: index.php?message=$message");
}