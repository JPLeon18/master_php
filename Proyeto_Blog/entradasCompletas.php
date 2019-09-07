<?php
require "header.php";
require "sidebar.php";
?>


<div class="contenido">
    <h1>Ultimas entradas</h1>
    <?php $entradasCompletas = conseguirEntradas();
    if (!empty($entradasCompletas)) :

    while ($entradaC = mysqli_fetch_assoc($entradasCompletas)) : ?>

    <article class="articulo">
        <a href="entrada.php?idEntrada=<?=$entradaC['id']?>">
            <h2><?= strtoupper($entradaC['titulo']) ?></h2>
            <h3 class="categoriaEntrada"><?= $entradaC['nombre'] ?></h3>
            <h3 class="categoriaEntrada"><?= $entradaC['fecha'] ?></h3>
            <h3 class="categoriaEntrada"> subido por: <?= $entradaC["usuario"] ?> </h3>
            <div class="clearfix"></div>
            <p><?= substr($entradaC['descripcion'], 0, 300) ?>...</p>
        </a>
    </article>

    <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php require "footer.php"; ?>
