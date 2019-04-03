<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de subida de archivos</h1>
    <form action="procesar.php" method="POST" enctype="multipart/form-data">

        <?php 
            

            if(!empty($_GET['message'])){
                $color = $_GET['color'];
                echo "<strong style='background: $color; color: white; width: 50%; padding: 5px; border-radius: 10px; font-size: small'> Mensage: ".$_GET['message']."</strong><br><br>";
            }
        ?>

        <label for="imagen">Imagen: </label><br>
        <input type="file" name="imagen"><br><br>

        <input type="submit" value="enviar">
    </form>

</body>
</html>