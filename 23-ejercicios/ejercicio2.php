<?php

function ValidarEmail($email){
    // validar email
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $EmailValido = false;
    }else{
        $EmailValido = true;
    }
    return $EmailValido;
}

if(isset($_GET['email'])){
    $email = $_GET['email'];


    if(ValidarEmail($email) == true){
        echo "<strong style='background: green; color:#ffffff; padding: 3px; border-radius: 5px;'>El Email valido es ".$email."</strong><br><br>";
    }else{
        echo "<strong style='background: red; color:#ffffff; padding: 3px; border-radius: 5px;'>el email no es valido</strong><br><br>";
    }
}

?>

<form action="ejercicio2.php" method="GET">
    <label for="email">Email</label><br>
    <input type="text" name="email"><br>
    <input type="submit" value="validar email">
</form>


