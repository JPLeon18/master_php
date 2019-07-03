<?php

if(isset($_POST['n1']) && isset($_POST['n2'])){

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];


if (isset($_POST['suma'])){
    echo "la suma es".($n1+$n2);
}elseif(isset($_POST['resta'])){
    echo "la resta es".($n1-$n2);
}elseif (isset($_POST['multiplicacion'])){
    echo "la multiplicacion es".($n1*$n2);
}elseif (isset($_POST['division'])){
    echo "la division es".($n1/$n2);
}

}

?>