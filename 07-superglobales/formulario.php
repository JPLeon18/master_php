<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="recibir.php" method="post">
        <p>
        <label for="">Nombre:</label>
        <input type="text" name="nombre">
        </p>

        <p>
        <label for="">edad</label>
        <input type="number" name="edad">
        </p>

        <p>
        <label for="">email</label>
        <input type="email" name="email">
        </p>

        <p>
        <label for="">sexo</label>
        <select name="sexo" id="">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select>
        </p>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
