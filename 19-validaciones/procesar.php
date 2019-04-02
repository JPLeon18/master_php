<?php

if (empty($_POST['nombre']) && empty($_POST['apellido']) && empty($_POST['edad']) && empty($_POST['email']) && empty($_POST['password'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['password'];

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
    <table border="1px">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <tr>
            <td><?php echo $nombre ?></td>
            <td><?php echo $apellido?></td>
            <td><?php echo $edad ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $password ?></td>
        </tr>

    </table>
</body>
</html>