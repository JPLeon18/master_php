<?php

$error = "Por favor llene todos los campos";

if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = (int)$_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = "ok";

    // Validar Nombre
    if (!is_string($nombre) || preg_match("/[0-9]+/", $nombre)){
        $error = "Por favor verifique su nombre";
        header("location: index.php?error=$error");
    }


    // Validar el apellido
    if (!is_string($apellido) || preg_match("/[0-9]+/", $apellido)){
        $error = "Por favor verifique su apellido";
        header("location: index.php?error=$error");
    }

    // Validar edad
    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        $error = "Por favor verifique la edad";
        header("location: index.php?error=$error");
    }

    // Validar Email
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "Por favor verifique su Email";
        header("location: index.php?error=$error");
    }

    // Validar Password
    if (empty($password) || strlen($password)<5){
        $error = "La contraseña debe de tener al menos 5 caracteres";
        header("location: index.php?error=$error");
    }


}else{
    header("location: index.php?error=$error");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla</title>
</head>
<body>
    <?php if ($error == "ok"): ?>
    <table border="1px">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <tr>
            <td><?= $nombre ?></td>
            <td><?= $apellido ?></td>
            <td><?= $edad ?></td>
            <td><?= $email ?></td>
            <td><?= $password ?></td>
        </tr>
    </table>
    <?php endif; ?>
</body>
</html>