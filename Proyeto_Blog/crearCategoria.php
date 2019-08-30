<?php require "header.php" ?>
<?php require "sidebar.php" ?>
<?php require "includes/redireccionar.php" ?>


<div class="contenido">
    <div class="contenedor">
    <h1>Crear categorias.</h1>

    <form action="includes/procesarNuevaCategoria.php" method="post">
        <label for="nombreCategoria">Nombre categoria nueva:</label>
        <input type="text" name="nombreCategoria" required = required>

        <?php if (isset($_SESSION['statusCategoria'])) : ?>

        <p class="alertasForm"> <?= $_SESSION['statusCategoria']; ?> </p>

        <?php endif; ?>

        <input type="submit" value="Crear Categoria">
    </form>
    </div>

    <div class="contenedor">
    <h1>Categorias existentes.</h1>
        <table class="tablas">
            <tr>
                <th>Item</th>
                <th>Categorias</th>
                <th>Editar Categoria</th>
            </tr>
            <?php $listarCategorias = conseguirCategorias();

            while ($listarCategoria = mysqli_fetch_assoc($listarCategorias)) : ?>
            <tr>
                <td> <?= $listarCategoria['id'] ?> </td>
                <td> <?= $listarCategoria['nombre'] ?> </td>
                <td><a href="crearCategoria.php?categoria=<?=$listarCategoria['nombre']?>" class="botonAzul"> Editar </a></td>
            </tr>
            <?php endwhile; ?>

        </table>
        <br>


        <?php
        if (isset($_SESSION['statusEditarCategoria'])) : ?>
            <p class="alertasForm"><?=$_SESSION['statusEditarCategoria'];?></p>
        <?php endif; ?>


    <?php if (isset($_GET['categoria'])) : ?>
        <h1>Editar Categoria</h1>
        <form action="editarCategoria.php" method="post">

                <label for="nombreCategoriaEditar">Nombre nuevo de la categoria: </label>
                <input type="text" name="nombreCategoriaNueva">

                <label for="nombreCategoriaEditar">La categoria que se editara es: <?= $_GET['categoria'] ?></label>
                <input type="hidden" name="nombreCategoriaEditar" value="<?= $_GET['categoria'] ?>">

                <input type="submit" value="Editar categoria">

        </form>
    <?php endif; ?>
    </div>
    <?php deleteErrors();?>
</div>

<?php require "footer.php" ?>

