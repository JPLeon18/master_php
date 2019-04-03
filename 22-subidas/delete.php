<?php
if(isset($_GET['imagen'])){
    $imagen = $_GET['imagen'];
    unlink("./imagenes/$imagen");
    $message = "Imagen de $imagen eliminado"; 
    header("location: index.php?message=$message");
}