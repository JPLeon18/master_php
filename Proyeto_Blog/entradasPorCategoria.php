<?php
require "header.php";
require "sidebar.php";

if (isset($_GET['id'])):
    $idCategoria = $_GET['id'];

    if (empty(conseguirEntradas($idCategoria, null, null))){
        header("location: index.php");
    }
?>

    <div class="contenido">

        <h1>Entradas de <?=mysqli_fetch_assoc(conseguirEntradas($idCategoria, null, null))['nombre']?></h1>

        <?php $entradasCompletas = conseguirEntradas($idCategoria, null, null);

            while ($entradaC = mysqli_fetch_assoc($entradasCompletas)) : ?>

                <article class="articulo">
                    <a href="entrada.php?idEntrada=<?=$entradaC['id']?>">
                        <h2><?= strtoupper($entradaC['titulo']) ?></h2>
                        <h3 class="categoriaEntrada"><?= $entradaC['nombre'] ?></h3>
                        <h3 class="categoriaEntrada"><?= $entradaC['fecha'] ?></h3>
                        <div class="clearfix"></div>
                        <p><?= substr($entradaC['descripcion'], 0, 300) ?>...</p>
                    </a>
                </article>
            <?php endwhile; ?>
    </div>
<?php endif; ?>
<?php require "footer.php"; ?>