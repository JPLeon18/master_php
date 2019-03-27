<?php


$frace = "Aja pues como es";

echo $frace;

function mostrarFrace(){
    global $frace;

    return "<h3>$frace</h3>";
}

echo mostrarFrace();

