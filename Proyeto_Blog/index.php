<?php require "header.php" ?>
<?php require "sidebar.php" ?>

<div class="contenido">

        <h1>Ultimas entradas</h1>

        <?php

        $entradas = conseguirEntradas(null, null, true);
    if (!empty($entradas)) :
        while ($entrada = mysqli_fetch_assoc($entradas)) :
        ?>

            <article class="articulo">
                <a href="entrada.php?idEntrada=<?=$entrada['id']?>">
                    <h2><?= strtoupper($entrada["titulo"]) ?></h2>
                    <h3 class="categoriaEntrada"> Categoria: <?= $entrada["nombre"] ?> </h3>
                    <h3 class="categoriaEntrada"> Fecha: <?= $entrada["fecha"] ?> </h3>
                    <h3 class="categoriaEntrada"> subido por: <?= $entrada["usuario"] ?> </h3>
                    <div class="clearfix"></div>
                    <p><?= substr($entrada["descripcion"], 0, 300) ?>...</p>
                </a>
            </article>

        <?php
        endwhile;
    endif;
        ?>

        <div class="verTodo">
            <a href="entradasCompletas.php">Ver todo...</a>
        </div>


</div>


<?php require "footer.php" ?>
