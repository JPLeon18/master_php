<?php

if (isset($_COOKIE['MyCookie'])){
    echo $_COOKIE['MyCookie'];
?>
    <a href="borrar_cookie.php">Borrar cookie</a>
<?php
}else{
    echo "la cookie no existe";

    ?>
<a href="crear_cookie.php">crear cookie</a>
<?php
}

?>


