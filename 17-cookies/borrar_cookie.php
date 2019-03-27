<?php

if (isset($_COOKIE['MyCookie'])){
    unset($_COOKIE['MyCookie']);
    setcookie("MyCookie", "", time()-(10));

}else{
    echo "La cookie no existe";
}

header("location: ver_cookie.php");