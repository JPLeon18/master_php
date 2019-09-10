<?php require "header.php" ?>
<?php require "sidebar.php" ?>
<?php require "includes/redireccionar.php" ?>

<div class="contenido">
    <div class="contenedor">
    <h1>Crear Entradas</h1>
        <form action="includes/procesarNuevaEntrada.php" method="post">
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo">

            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion" id="" cols="92" rows="10"></textarea>

            <label for="categoria">Categoria:</label>
            <select name="categoria" id="">
                <?php $consultaCategorias = conseguirCategorias(); 
                while ($consultaCategoria = mysqli_fetch_assoc($consultaCategorias)) : ?>
                    <option value="<?=$consultaCategoria['id']?>"><?=$consultaCategoria['nombre']?></option>
                <?php endwhile; ?>
            </select>

            <?php if (isset($_SESSION['statusNuevaEntrada'])) : ?>
                <p class="alertasForm"> <?= $_SESSION['statusNuevaEntrada']; ?> </p>
            <?php endif; ?>

            <input type="submit" value="Enviar">
        </form>
    </div>

    <div class="contenedor">
        <h1>Entradas</h1>
    <table>
        <tr>
            <th>item</th>
            <th>Entrada</th>
            <th>Eliminar</th>
            <th>Editar</th>
        </tr>

        <?php $entradasAll = conseguirEntradasTabla($_SESSION['user_login']['id']);
        while ($entradaone = mysqli_fetch_assoc($entradasAll)) :    ?>
        <tr>
            <td><?=$entradaone['id']?></td>
            <td><?=$entradaone['titulo']?></td>
            <td><a href="deleteEntrada.php?deleteid=<?=$entradaone['id']?>" class="botonAzul boton-rojo">Eliminar</a></td>
            <td><a href="crearEntrada.php?entrada=<?=$entradaone['titulo']?>&id=<?=$entradaone['id']?>&descripcion=<?=$entradaone['descripcion']?>&categoria_id=<?=$entradaone['categoria_id']?>" class="botonAzul">Editar</a></td>
        </tr>
        <?php endwhile; ?>
    </table>

        <?php if (isset($_SESSION['statusDeleteEntrada'])): ?>
            <p class="alertasForm"><?=$_SESSION['statusDeleteEntrada']?></p>
        <?php endif; ?>

    <?php if (isset($_GET['entrada']) && isset($_GET['id']) && isset($_GET['descripcion'])): ?>
        <h1>Editar Entradas</h1>
        <form action="editarEntrada.php" method="post">
            <label for="titulo">Nuevo Titulo:</label>
            <input type="text" name="titulo" value="<?= $_GET['entrada'] ?>">

            <label for="descripcion">Nueva Descripcion:</label>
            <textarea name="descripcion" id="" cols="92" rows="10"><?=$_GET['descripcion']?></textarea>

            <label for="categoria">Nueva Categoria:</label>
            <select name="categoria" id="">
                <?php $consultaCategorias = conseguirCategorias();
                while ($consultaCategoria = mysqli_fetch_assoc($consultaCategorias)) : ?>
                    <option value="<?=$consultaCategoria['id']?>"<?= ($consultaCategoria['id'] == $_GET['categoria_id']) ? 'selected="selected"' : '' ?>><?=$consultaCategoria['nombre']?></option>
                <?php endwhile; ?>
            </select>

            <label for="">La entrada a editar es: <?= $_GET['entrada'] ?></label>
            <input type="hidden" name="entradavieja" value="<?=$_GET['id']?>">


            <input type="submit" value="Enviar">

        </form>
    <?php endif; ?>
        <br>
        <?php if (isset($_SESSION['statusEditarEntrada'])) : ?>
            <p class="alertasForm"><?=$_SESSION['statusEditarEntrada']?></p>
        <?php endif; ?>

    </div>

    <?php deleteErrors(); ?>
</div>

<?php require "footer.php" ?>