<?php

$texto = "";


if (empty($texto)){

    if (isset($_GET['nota'])) {
        echo "<h4>La variable estaba vacia ahora tiene</h4>";

        $texto = $_GET['nota'];

        echo "<strong>".strtoupper($texto)."</strong>";
    }else{
        echo "<h4>La variable esta vacia</h4>";
    }
}else{
    echo "El contenido de la variable es $texto";
}
