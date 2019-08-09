<aside class="sidebar">

    <div class="bloque">
        <p>Ingresar al sistema</p>

        <form action="">
            <label for="correo">Usuario</label>
            <input type="email" name="correo">

            <label for="password">contraseña</label>
            <input type="password" name="password">

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
            if (!empty($_GET["status"]) && !empty($_GET['color'])){
                echo "<strong style='background: ".$_GET['color'].";color: #fff; font-size: 13px; font-family: sans-serif; display: block;
    width: auto; margin: 10px 0px 6px 0px; padding: 5px; border-radius: 5px'>".$_GET['status']."</strong>";
            }

            ?>

            <input type="submit" name="submit" value="Registrarse">
        </form>
    </div>
</aside>