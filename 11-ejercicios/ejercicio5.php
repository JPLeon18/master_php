<?php

if (isset($_GET['n1']) && isset($_GET['n2'])) {

    $n1 = (int)$_GET['n1'];
    $n2 = (int)$_GET['n2'];

    if ($n1 < $n2){

        for ($conta = $n1; $conta <= $n2; $conta++) {
            echo $conta . "<br>";
        }

    }elseif($n1 > $n2){

        for ($i = $n2; $i <= $n1; $i++){
            echo $i."<br>";
        }

    }else{
        echo "los numeros son iguales por favor ingrese numreos distintos";
    }

}else{
    echo "No hay numeros en la url";
}