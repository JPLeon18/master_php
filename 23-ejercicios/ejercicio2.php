<?php

function validarEmail($email){
        if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailValido = false;
        }else{
            $emailValido = true;
        }

        return $emailValido;
}

if (isset($_GET['email'])) {

    if (validarEmail($_GET['email'])) {
        echo "<h2 style='color: white; background: green; width: 40%;'>El email " . $_GET['email'] . " es valido</h2>";
    } else {
        echo "<h2 style='color: white; background: red; width: 20%;'>El email No es valido</h2>";
    }

}else{
    echo "<h2>ingrese un correo</h2>";
}



?>

<form action="ejercicio2.php"method="get">

    <input type="text" name="email">
    <input type="submit" value="Validar el email">

</form>



