<?php

if(isset($_POST['n1']) && isset($_POST['n2'])){

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$suma = $_POST['suma'];
$resta = $_POST['resta'];
$multiplicacion = $_POST['multiplicacion'];
$division = $_POST['division'];

    if($suma != NULL){
        echo "La suma de los numeros es ".($n1+$n2);
    }
    
    
    if($resta != NULL){
        echo "La resta de los numeros es ".($n1-$n2);
    }
    
    if($multiplicacion != NULL){
        echo "La multiplicacion de los numeros es ".($n1*$n2);
    }
    
    if($division != NULL){
        echo "La division de los numeros es ".($n1/$n2);
    }

}