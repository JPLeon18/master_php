<?php


// Ejemplo
/*
function Hola($text){
    if ($text == "juan") {

        return $text;
    }else{
        return "El nombre ingresado no es correcto";
    }
}


if (isset($_GET['name'])){

    $name = $_GET['name'];

    echo Hola($name);

}else{
    echo " Por favor ingrese en name en la url ";
}
*/

function tablas($num){

    echo "<h2>Tablas del numero $num</h2>";

    for ($conta = 1; $conta <= 10; $conta++){
        echo "$conta x $num = ".($conta*$num)."<br>";
    }

}

/*
if (isset($_GET['num'])){

    $num = $_GET['num'];

    echo tablas($num);

}else{
    echo " Por favor ingrese en name en la url ";
}
*/
/*
for ($i = 1; $i <= 10; $i++){
    tablas($i);
}
*/


function calculadora($n1, $n2, $negrita = false){

    $cadenaText = "";

    if ($negrita != false){
        $cadenaText .= "<h1>";
    }

    $cadenaText .= "Suma ".($n1+$n2)."<br>";
    $cadenaText .= "Resta ".($n1-$n2)."<br>";
    $cadenaText .= "Multiplicacion ".($n1*$n2)."<br>";
    $cadenaText .= "Divicion ".($n1/$n2)."<br>";

    if ($negrita != false){
        $cadenaText .= "</h1>";
    }
    return $cadenaText;

}
/*
if (isset($_GET['num1']) && isset($_GET['num2'])){

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    calculadora($num1, $num2);

}else{
    echo " Por favor ingrese en name en la url ";
}
*/




function mostrarNombre($nombre){
    $texto = "<p>El nombre es $nombre</p>";
    return $texto;
}

function mostrarApellido($apellido){
    $texto = "<p>El apellido es $apellido</p>";
    return $texto;
}

function mostrarNombreCompleto($nombre, $apellido){

    $texto = mostrarNombre($nombre);
    $texto .= mostrarApellido($apellido);

/* Otra forma de concatenar la funcion

    $texto = mostrarNombre($nombre)
    .mostrarApellido($apellido);
*/

    return $texto;
}











