<?php
    // Operator Aritmatika

    $a = 10;
    $b = 20;

    //Penjumlahan
    $c = $a + $b;
    
    //Pengurangan
    $c = $b - $a;
    
    //Perkalian
    $c = $a * $b;

    //Pembagian
    $c = $a / $b;

    //Modulus
    $c = $a % $b;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Operator Aritmatika</title>
</head>
<body>
    <h1>Operator Aritmatika PHP</h1>
    <p>Penjumlahan 
        <?php 
        $c = $a + $b;
        echo $a . " + " . $b . " = " . $c; 
        ?>
    </p>
    <p>Pengurangan 
        <?php 
        $c = $b - $a;
        echo $b . " - " . $a . " = " . $c; 
        ?>
    </p>
    <p>Perkalian 
        <?php 
        $c = $a * $b;
        echo $a . " * " . $b . " = " . $c; 
        ?>
    </p>
    <p>Pembagian 
        <?php 
        $c = $a / $b;
        echo $a . " / " . $b . " = " . $c; 
        ?>
    </p>
    <p>Modulus 
        <?php 
        $c = $a % $b;
        echo $a . " % " . $b . " = " . $c; 
        ?>
    </p>
</body>
</html>
