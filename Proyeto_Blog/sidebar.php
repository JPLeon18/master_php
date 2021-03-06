
<aside class="sidebar">

    <div class="bloque">
        <p>Ingresar el titulo de una entrada para buscarla</p>

        <form action="busqueda.php" method="post">
            <input type="text" name="busqueda" placeholder="Buscar entrada..." required="required">

            <input type="submit" value="Buscar 🔍">
        </form>
    </div>


    <?php if (isset($_SESSION['user_login'])) : ?>
        <div class="bloque">
            <h3>Bienvenido, <?= $_SESSION['user_login']['nombre'].' '.$_SESSION['user_login']['apellido']; ?></h3>
            <a class="botonAzul" href="editarPerfil.php">Editar mi perfil</a>
            <a class="botonAzul" href="crearEntrada.php">Entradas</a>
            <a class="botonAzul" href="crearCategoria.php">Categorias</a>
            <a class="botonAzul boton-rojo" href="cerrarSesion.php">Cerrar sesion</a>
        </div>
    <?php endif ;?>

    <?php if (!isset($_SESSION['user_login'])): ?>
    <div class="bloque">


        <p>Ingresar al sistema</p>

        <form action="login.php" method="post">
            <label for="correo">correo</label>
            <input type="email" name="correo">

            <label for="password">contraseña</label>
            <input type="password" name="password">

            <?php if (isset($_SESSION['error_login']) && $_SESSION['error_login'] != "ok") : ?>
                <div class="alerta alerta-error">
                    <?= $_SESSION['error_login']; ?>
                </div>
            <?php endif ;?>

            <input type="submit" value="Entrar">
        </form>
    </div>

    <div class="bloque">

        <p>Registrarse</p>
        <form action="registro.php" method="post">
            <label for="nombre">nombres</label>
            <input type="text" name="nombre">

            <label for="apellido">apellidos</label>
            <input type="text" name="apellido">

            <label for="correo">correo</label>
            <input type="email" name="correo">

            <label for="password">contraseña</label>
            <input type="password" name="password">

            <?php
            if (isset($_SESSION["status"]) && isset($_SESSION['color'])){
                echo "<strong style='background: ".$_SESSION['color'].";color: #fff; font-size: 13px; font-family: sans-serif; display: block;
    width: auto; margin: 10px 0px 6px 0px; padding: 5px; border-radius: 5px'>".$_SESSION['status']."</strong>";
            }

            ?>

            <input type="submit" name="submit" value="Registrarse">
        </form>
    </div>
<?php endif; ?>
</aside>

