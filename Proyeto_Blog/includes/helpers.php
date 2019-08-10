<?php

function deleteErrors(){
    $_SESSION['status'] = null;

    $borrado = session_unset($_SESSION['status']);

    return $borrado;
}