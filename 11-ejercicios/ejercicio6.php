<?php


echo "<table border='1px'>";

    echo "<tr>";

        for ($tabla = 1; $tabla <= 10; $tabla++){
            echo "<td>Tabla del $tabla</td>";
        }

    echo "</tr>";

    echo "<tr>";

        for ($mult = 1; $mult <= 10; $mult++){ // Pinta las celdas

            echo "<td>";

            for ($multipli = 1; $multipli<= 10; $multipli++ ) {    // Pinta la operacion solo
                echo "$mult x $multipli = ".($mult*$multipli)."<br>";  // en el td creado por el for anterior
            }

            echo "</td>";
        }

    echo "</tr>";


echo "</table>";