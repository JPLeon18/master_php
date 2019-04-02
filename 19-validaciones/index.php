<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validaciones</title>
</head>
<body>
    <form action="procesar.php" method="POST">
        <h2>Formulario de ingreso</h2>
    <?php
        if (!empty($_GET['error'])){
            echo "<strong style='background: #c70000; color: white; width: 50%; padding: 5px; border-radius: 10px; font-size: small'>Error: " .$_GET['error']."</strong><br><br>";
        }
    ?>

    <label for="nombre">*Nombre: </label><br>
    <input type="text" name="nombre" required pattern="[A-Za-z ]+"><br>

    <label for="apellido">*Apellido: </label><br>
    <input type="text" name="apellido" required pattern="[A-Za-z ]+"><br>

    <label for="edad">*Edad: </label><br>
    <input type="number" name="edad" pattern="[0-9]+" maxlength="2" required ><br>

    <label for="email">*Correo Electronico: </label><br>
    <input type="email" name="email" required><br>

    <label for="password">*Contraseña: </label><br>    
    <input type="password" name="password" required minlength="5"><br>
    <br>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>