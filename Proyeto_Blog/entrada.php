<?php
require "header.php";
require "sidebar.php";

if (isset($_GET['idEntrada'])) :

    $idEntradaActual = $_GET['idEntrada'];
?>

    <div class="contenido">
        <div class="contenedor">
        <?php $entradaActual = conseguirEntradas(null, $idEntradaActual, null);

        if (!empty($entradaActual)):

            while ($entradaA = mysqli_fetch_assoc($entradaActual)): ?>

                <h1><?= strtoupper($entradaA['titulo']) ?></h1>
                <h2 class="categoriaEntrada"><?= $entradaA['nombre'] ?></h2>
                <h2 class="categoriaEntrada"><?= $entradaA['fecha'] ?></h2>
                <h2 class="categoriaEntrada"> subido por: <?= $entradaA["usuario"] ?> </h2>
                <div class="clearfix"></div>
                <p><?= $entradaA['descripcion'] ?></p>

            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>

<?php endif; ?>
<?php require "footer.php" ?>
