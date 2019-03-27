<?php

require_once 'arrays.php';

echo "<table border='1px'>";

echo "<tr>";

    foreach ($juegos as $genero => $juego) {
        echo "<td>" . $genero . "</td>";
    }
echo "</tr>";

echo "<tr>";

    foreach ($juegos as $genero => $juego) {
        echo "<td>";
            foreach ($juego as $valor) {
                echo $valor."<br>";
            }
        echo "</td>";
    }

echo "</tr>";

echo "</table>";