<?php

/*
$num = 0;

while ($num <= 100 ){
    echo "$num";
    if ($num != 100){
        echo ", ";
    }
    $num++;
}
*/

if (isset($_GET['num'])){
    $num = (int)$_GET['num'];
    $contador = 1;

    echo "<h3>Tabla del $num</h3>";

    while ($contador <= 10 ){
        echo "$contador x $num = ".($contador*$num)."<br>";
        $contador++;
    }
}else{
    echo "Ingrese el numero a multiplicar por la url";
}

echo '<hr>';

$edad = 18;
$local = 1;

do{
    echo "tienes acceso al local $local <br>";
    $local++;
}while( $edad >= 18 && $local <= 3 );