<?php require "includes/conexion.php"?>
<?php require "includes/helpers.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="cabecera">
    <div class="logo">
        <a href="index.php">Video - Blog</a>
    </div>

    <nav class="menu">
        <ul>
            <li><a href="index.php">INICIO</a></li>

<?php
            $categorias = conseguirCategoriasMenu();

            if (!empty($categorias)) :

                while ($categoria = mysqli_fetch_assoc($categorias)) :
?>

                <li><a href="categoria.php?id=<?=$categoria["id"]?>"><?=strtoupper(trim($categoria["nombre"]))?></a></li>

<?php
                endwhile;
            endif;
?>

            <li><a href="quienesSomos.php">SOBRE NOSOTROS</a></li>
            <li><a href="contacto.php">CONTACTO</a></li>
        </ul>
    </nav>
    <div class="clearfix"></div>
</header>

<div class="contenedor">




