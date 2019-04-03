<?php

// Abrir el arhivo
$archivo = fopen("archivo_texto.txt","a+");


// Leer el contenido
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido."<br>";
}
// Ecribir en el archivo
fwrite($archivo, " pues vete ");

// Cerrar el contenido
fclose($archivo);

// copiar
copy("archivo_texto.txt", "fichero_copia.txt") ||  die("Error al copiar");


// Renombrar
// rename("fichero_copia.txt", "documento.doc");


// Eliminar
// unlink("portlocal.doc") || die("error al borrar");


if(file_exists("archivo_texto.txt")){
    echo "El archivo existe";
}else{
    echo "El archivo no existe";
}