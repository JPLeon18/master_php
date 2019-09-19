<?php

try{
    throw new Exception('Error de logica');
}catch (Exception $e){
    echo "El error capturado es ".$e->getMessage(). " en el archivo ".$e->getFile(). " linea ".$e->getLine();
}

echo "<hr>";

try{
    if (isset($_GET['id'])){
        echo "El parametro es {$_GET['id']}";
    }else{
        throw new Exception("no hay parametros");
    }

}catch (Exception $ee){
    echo "Error: ".$ee->getMessage();
}