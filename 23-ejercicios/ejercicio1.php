<?php
session_start();

if(!isset($_SESSION['MiSession'])){
    $_SESSION['MiSession'] = 0;
}


if(isset($_GET['counter']) && $_GET['counter'] == 1){

    $_SESSION['MiSession']++;

}elseif(isset($_GET['counter']) && $_GET['counter'] == 0){

    $_SESSION['MiSession']--;

}else{
    echo "introduce el valor";
}
?>

<p>Valor de la session: <?=$_SESSION['MiSession']?></p>

<a href="ejercicio1.php?counter=1">aumenta</a>
<a href="ejercicio1.php?counter=0">resta</a>

