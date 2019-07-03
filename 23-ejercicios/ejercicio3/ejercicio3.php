<?php

if(isset($_POST['n1']) && isset($_POST['n2'])){

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];


    if (isset($_POST['suma'])){
        echo "la suma es ".($n1+$n2);
    }elseif(isset($_POST['resta'])){
        echo "la resta es ".($n1-$n2);
    }elseif (isset($_POST['multiplicacion'])){
        echo "la multiplicacion es ".($n1*$n2);
    }elseif (isset($_POST['division'])){
        echo "la division es ".($n1/$n2);
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <form action="" method="POST">
            <br>
            <input type="number" name="n1"><br><br>
            <input type="number" name="n2"><br><br>

            <input type="submit" name="suma" value="suma">
            <input type="submit" name="resta" value="resta">
            <input type="submit" name="multiplicacion" value="multiplicacion">
            <input type="submit" name="division" value="division">

        </form>
    
</body>
</html>