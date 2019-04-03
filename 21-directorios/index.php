<?php

if(!is_dir("Capeta")){
//    mkdir("Carpeta", 0777) || die("Error al crear la carpeta");
}else{
    echo "La carpeta ya existe ";
}

// rmdir("Carpeta");


echo "<h1>contenido de la carpeta</h1>";
if($gestor = opendir("./Carpeta")){
    while(false != ($archivo = readdir($gestor))){
        echo $archivo."<br>";
    }
}