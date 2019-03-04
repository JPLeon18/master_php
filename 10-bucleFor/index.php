<?php

if (isset($_GET['num'])){
    $num = $_GET['num'];
}else{
    $num = 1;
}

echo "<h2>Tabla del $num</h2>";

for ($contador = 1; $contador <= 10; $contador++){

    if($num == 5 || $num == 8){
        echo "NO se puede mostrar esta operacion prohibida";
        break;
    }

    echo "$contador x $num = ".($contador*$num)."<br>";
}
