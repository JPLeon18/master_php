
<aside class="sidebar">

    <div class="bloque">
        <p>Ingresar al sistema</p>

        <form action="login.php" method="post">
            <label for="correo">correo</label>
            <input type="email" name="correo">

            <label for="password">contraseña</label>
            <input type="password" name="password">

            <?php if (isset($_SESSION['usuario'])) : ?>
            <div class="usuario">
            <h3><?php $_SESSION['sesion']['nombre'].' '.$_SESSION['sesion']['apellido']; ?></h3>

            </div>
            <?php endif ;?>

            <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">

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
            if (!empty($_SESSION["status"]) && !empty($_SESSION['color'])){
                echo "<strong style='background: ".$_SESSION['color'].";color: #fff; font-size: 13px; font-family: sans-serif; display: block;
    width: auto; margin: 10px 0px 6px 0px; padding: 5px; border-radius: 5px'>".$_SESSION['status']."</strong>";
            }

            ?>

            <input type="submit" name="submit" value="Registrarse">
        </form>
    </div>
</aside>