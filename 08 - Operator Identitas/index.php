<?php
    /*
        Operator Komparasi pada pemrograman PHP
        <, >, <=, >=, ==, !=
    */
    
    echo "Operasi Komparasi Numerik<br>";
    $a = 20;
    $b = 19;
    echo "a = " . $a . "<br>";
    echo "b = " . $b . "<br>";
    
    // Kurang dari (<)
    echo "<br>" . "Kurang dari (<)" . "<br>";
    echo $a . " < " . $b . " = ";
    var_dump($a < $b);
    echo "<br>";
    echo $b . " < " . $a . " = ";
    var_dump($b < $a);
    
    // Lebih dari (>)
    echo "<br>" . "Lebih dari (>)" . "<br>";
    echo $a . " > " . $b . " = ";
    var_dump($a > $b);
    echo "<br>";
    echo $b . " > " . $a . " = ";
    var_dump($b > $a);
    
    // Kurang dari sama dengan (<=)
    echo "<br>" . "Kurang dari sama dengan (<=)" . "<br>";
    echo $a . " <= " . $b . " = ";
    var_dump($a <= $b);
    echo "<br>";
    echo $b . " <= " . $a . " = ";
    var_dump($b <= $a);
    
    // Lebih dari sama dengan (>=)
    echo "<br>" . "Lebih dari sama dengan (>=)" . "<br>";
    echo $a . " >= " . $b . " = ";
    var_dump($a >= $b);
    echo "<br>";
    echo $b . " >= " . $a . " = ";
    var_dump($b >= $a);
    
    // Sama dengan (==)
    echo "<br>" . "Sama dengan (==)" . "<br>";
    echo $a . " == " . $a . " = ";
    var_dump($a == $a);
    echo "<br>";
    echo $a . " == " . $b . " = ";
    var_dump($a == $b);
    
    // Tidak sama dengan (!=)
    echo "<br>" . "Tidak sama dengan (!=)" . "<br>";
    echo $a . " != " . $a . " = ";
    var_dump($a != $a);
    echo "<br>";
    echo $a . " != " . $b . " = ";
    var_dump($a != $b);

    echo "<br><br>Operasi Komparasi Numerik dan String<br>";
    $a1 = 20;
    $b1 = "19";
    echo "a1 = " . $a1 . "<br>";
    echo "b1 = " . $b1 . " (ini string)<br>";

    // Kurang dari (<)
    echo "<br>" . "Kurang dari (<)" . "<br>";
    echo $a1 . " < " . $b1 . " = ";
    var_dump($a1 < $b1);

    // Lebih dari (>)
    echo "<br>" . "Lebih dari (>)" . "<br>";
    echo $a1 . " > " . $b1 . " = ";
    var_dump($a1 > $b1);
    echo "<br>";
    
    // Sama dengan (==)
    echo "<br>" . "Sama dengan (==)" . "<br>";
    echo $a1 . " == " . $a1 . " = ";
    var_dump($a1 == $a1);
    echo "<br>";

    // Tidak sama dengan (!=)
    echo "<br>" . "Tidak sama dengan (!=)" . "<br>";
    echo $a1 . " != " . $a1 . " = ";
    var_dump($a1 != $a1);
    echo "<br>";

    /*
        Operator Identitas
        ===, !===
    */

    echo "<br><br> Operator Identitas <br>";
    $c = 15;
    $d = "15";
    echo "c = " . $c . "<br>";
    echo "d = " . $d . " (ini string)<br>";
    
    // Sama dengan (===)
    echo "<br>" . "Sama dengan (===)" . "<br>";
    echo $c . " === " . $c . " = ";
    var_dump($c === $c);
    echo "<br>";
    echo $d . " === " . $d . " = ";
    var_dump($d === $d);
    echo "<br>";
    echo $c . " === " . $d . " = ";
    var_dump($c === $d);
    
    // Tidak sama dengan (!==)
    echo "<br>" . "Tidak sama dengan (!==)" . "<br>";
    echo $c . " !== " . $c . " = ";
    var_dump($c !== $c);
    echo "<br>";
    echo $d . " !== " . $d . " = ";
    var_dump($d !== $d);
    echo "<br>";
    echo $c . " !== " . $d . " = ";
    var_dump($c !== $d);
    
?>
