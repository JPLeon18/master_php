<?php

$archivo = $_FILES['imagen'];

$nombre = $archivo["name"];
$tipo = $archivo["type"];
$size = $archivo["size"];
$rutaTemporal = $archivo["tmp_name"];

var_dump($archivo);

echo $nombre."<br>";
echo $tipo."<br>";
echo $size."<br>";

if ($tipo == "image/jpeg" || $tipo == "image/jpg" || $tipo == "image/png" || $tipo == "image/gif"){

    if(!is_dir("imagenes")){
        mkdir("imagenes", 0777);
    }

    $ruta = "imagenes/";

    move_uploaded_file($rutaTemporal, $ruta.$nombre);

    echo "<h2>♡ Imagen Subida</h2>";

    $message = "imagen subida correctamente puedes buscarlo en la ruta $ruta";
    header("Refresh: 5; URL=index.php?message=$message");

}else{
    $message = "╳ Solo puedes subir imagenes!!";
    $color = "#cccccc";
    header("location: index.php?message=$message&color=$color");
}