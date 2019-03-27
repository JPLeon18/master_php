<?php

require_once 'tabla_juegos/accion.php';
require_once 'tabla_juegos/aventura.php';
require_once 'tabla_juegos/deportes.php';

$indices = array('ACCION', 'AVENTURA', 'DEPORTES');


function pintarArray($array){
    $content = "";
    foreach ($array as $a){
        $content.= $a."<br>";
    }
    return $content;
}

echo "<table border='1px'>";
echo "<tr>";

    foreach ($indices as $indice){
        echo "<td>".$indice."</td>";
    }

echo "</tr>";

echo "<tr>";

echo "<td>".pintarArray($accion)."</td>";
echo "<td>".pintarArray($aventura)."</td>";
echo "<td>".pintarArray($deportes)."</td>";

echo "</tr>";

echo "</table>";