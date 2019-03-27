<?php

for ($conta = 1; $conta <= 100; $conta++){

    $residuo = $conta%2;

    if ($residuo == 0){
        echo "<p>$conta</p>";
    }
}