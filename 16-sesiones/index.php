<?php

session_start();

$varLocal = "variable string local";

$_SESSION['varSession'] = "Esto es una variable de session ";

echo $varLocal."<br>";

echo $_SESSION['varSession'];

