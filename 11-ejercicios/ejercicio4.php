<?php

if (isset($_GET['n1']) && isset($_GET['n2'])){

    $n1 = (int)$_GET['n1'];
    $n2 = (int)$_GET['n2'];

    echo "Suma de $n1 y $n2 es ".($n1+$n2)."<br>";

    echo "Resta de $n1 y $n2 es ".($n1-$n2)."<br>";

    echo "Multiplicacion de $n1 y $n2 es ".($n1*$n2)."<br>";

    echo "Division de $n1 y $n2 es ".($n1/$n2)."<br>";

}else{
    echo "Ingrese los numeros por la url";
}

