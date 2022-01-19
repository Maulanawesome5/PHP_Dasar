<?php
    /*
        Operator Komparasi pada pemrograman PHP
        <, >, <=, >=, ==, !=
    */
    
    echo "Operasi Komparasi" . "<br><br>";
    $a = 20;
    $b = 19;
    echo "a = " . $a . "<br>";
    echo "b = " . $b . "<br>";
    
    // Kurang dari (<)
    echo "<br><br>" . "Kurang dari (<)" . "<br>";
    echo $a . " < " . $b . " = ";
    var_dump($a < $b);
    echo "<br>";
    echo $b . " < " . $a . " = ";
    var_dump($b < $a);
    
    // Lebih dari (>)
    echo "<br><br>" . "Lebih dari (>)" . "<br>";
    echo $a . " > " . $b . " = ";
    var_dump($a > $b);
    echo "<br>";
    echo $b . " > " . $a . " = ";
    var_dump($b > $a);
    
    // Kurang dari sama dengan (<=)
    echo "<br><br>" . "Kurang dari sama dengan (<=)" . "<br>";
    echo $a . " <= " . $b . " = ";
    var_dump($a <= $b);
    echo "<br>";
    echo $b . " <= " . $a . " = ";
    var_dump($b <= $a);
    
    // Lebih dari sama dengan (>=)
    echo "<br><br>" . "Lebih dari sama dengan (>=)" . "<br>";
    echo $a . " >= " . $b . " = ";
    var_dump($a >= $b);
    echo "<br>";
    echo $b . " >= " . $a . " = ";
    var_dump($b >= $a);
    
    // Sama dengan (==)
    echo "<br><br>" . "Sama dengan (==)" . "<br>";
    echo $a . " == " . $a . " = ";
    var_dump($a == $a);
    echo "<br>";
    echo $a . " == " . $b . " = ";
    var_dump($a == $b);
    
    // Tidak sama dengan (!=)
    echo "<br><br>" . "Tidak sama dengan (!=)" . "<br>";
    echo $a . " != " . $a . " = ";
    var_dump($a != $a);
    echo "<br>";
    echo $a . " != " . $b . " = ";
    var_dump($a != $b);
    
?>
