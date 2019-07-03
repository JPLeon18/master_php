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
    echo "<h2>Imagen subida correctamente</h2>";
    echo "<p>Redireccionando...</p>";
    $message = "imagen subida correctamente puedes buscarlo en la ruta $ruta";
    header("Refresh: 3; URL=index.php?message=$message"); // Se pone Refresh: 3; para refrescar la pagina en los 3 segundos e ir a la url

}else{
    $message = "╳ Solo puedes subir imagenes!!";
    header("location: index.php?message=$message");
}