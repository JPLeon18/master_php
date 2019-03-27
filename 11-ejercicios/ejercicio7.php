<?php

if (isset($_GET['n1']) && isset($_GET['n2'])) {

    $n1 = (int)$_GET['n1'];
    $n2 = (int)$_GET['n2'];

    if ($n1 < $n2){

        for ($conta = $n1; $conta <= $n2; $conta++) {

            $residuo = $conta % 2;

            if ($residuo != 0) {
                echo "Este numero es impar "."<strong>$conta</strong>". "<br>";
            }else{
                echo "Este numero es par "."<strong>$conta</strong>". "<br>";
            }
        }
    }elseif ($n1 > $n2){

        for ($containv = $n2; $containv <= $n1; $containv++){

            $resi = $containv % 2;

            if ($resi != 0){
                echo "Este numro es impar "."<strong>$containv</strong>"."<br>";
            }else{
                echo "Este numero es par "."<strong>$containv</strong>"."<br>";
            }
        }
    }else{
        echo "los numero son iguales ingrese 2 numeros distintos";
    }
}else{
    echo "ingrese los numero por la url";
}