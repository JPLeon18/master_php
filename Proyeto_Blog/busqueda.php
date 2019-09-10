<?php
require "header.php";
require "sidebar.php";

if (isset($_POST['busqueda']) && !empty($_POST['busqueda'])):
    $busqueda = $_POST['busqueda'];

    ?>

    <?php if (empty(conseguirEntradas(null, null, null, $busqueda))): ?>
    <div class="contenido">
        <div class="contenedor"><h1>No se encontraron entradas para mostrar</h1></div>
    </div>

<?php else: ?>


    <div class="contenido">
    <h1>Busqueda de: <?= $busqueda ?></h1>

        <?php $entradasBuscadas = conseguirEntradas(null, null, null, $busqueda);

        while ($entradasEncontradas = mysqli_fetch_assoc($entradasBuscadas)) : ?>

            <article class="articulo">
                <a href="entrada.php?idEntrada=<?=$entradasEncontradas['id']?>">
                    <h2><?= strtoupper($entradasEncontradas['titulo']) ?></h2>
                    <h3 class="categoriaEntrada"><?= $entradasEncontradas['nombre'] ?></h3>
                    <h3 class="categoriaEntrada"><?= $entradasEncontradas['fecha'] ?></h3>
                    <div class="clearfix"></div>
                    <p><?= substr($entradasEncontradas['descripcion'], 0, 300) ?>...</p>
                </a>
            </article>
        <?php endwhile; ?>
    </div>

<?php endif; ?>
<?php else:; ?>
<?php header("location: index.php") ?>
<?php endif; ?>
<?php require "footer.php"; ?>