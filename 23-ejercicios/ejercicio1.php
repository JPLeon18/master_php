<?php
session_start();


if (!isset($_SESSION['SESION'])){
    $_SESSION['SESION'] = 0;
}

if (isset($_GET['counter']) && $_GET['counter'] == 1){
    $_SESSION['SESION']++;

}elseif(isset($_GET['counter']) && $_GET['counter']== 0){
    $_SESSION['SESION']--;

}else{
    echo "<h1>aumente o decremente</h1>";
}

?>

<p>el valor es : <?=  $_SESSION['SESION'] ?></p>
<a href="ejercicio1.php?counter=1">aumentar</a><br>
<a href="ejercicio1.php?counter=0">decrementar</a>
