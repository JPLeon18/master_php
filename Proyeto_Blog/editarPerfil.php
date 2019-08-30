<?php
require "header.php";
require "sidebar.php";
require "includes/redireccionar.php";
?>

<div class="contenido">

    <div class="contenedor">
        <h1>Editar mis datos</h1>

        <form action="includes/procesarPerfil.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?=$_SESSION['user_login']['nombre']?>">

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" value="<?=$_SESSION['user_login']['apellido']?>">

            <?php if (isset($_SESSION['statusActualizarDatos'])): ?>
            <p class="alertasForm"><?=$_SESSION['statusActualizarDatos']?></p>
            <?php endif; ?>
            <input type="submit" value="Actualizar mis datos">

        </form>
    </div>

    <div class="contenedor">
        <h1>Cambiar contraseña</h1>

        <form action="includes/editarClave.php" method="post">
            <label for="claveActual">Contraseña actual: </label>
            <input type="password" name="claveActual" placeholder="Digite su contraseña actual para verificar su identidad.">

            <label for="claveNueva">Contraseña nueva: </label>
            <input type="password" name="claveNueva" placeholder="Digite su nueva contraseña.">

            <?php if (isset($_SESSION['statusEditarClave'])): ?>
            <p class="alertasForm"><?=$_SESSION['statusEditarClave']?></p>
            <?php endif;?>

            <input type="submit" value="Cambiar contraseña">
        </form>
    </div>
    <?php deleteErrors(); ?>
</div>

<?php require "footer.php"; ?>