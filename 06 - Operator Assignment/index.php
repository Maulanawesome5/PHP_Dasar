<?php
    /*
        Assignment Operator pada pemrograman PHP
        =, +=, -=, *=, /=, %=, .=
    */
    echo "Operator Assignment Numerik" . "<br><br>";
    $a = 10;
    echo "Variabel a = " . $a . "<br>";
    
    $a += 3;
    echo "a ditambah 3 menjadi" . " = " . $a . "<br>";
    
    $a -= 3;
    echo "a dikurangi 3 menjadi" . " = " . $a . "<br>";
    
    $a *= 3;
    echo "a dikali 3 menjadi" . " = " . $a . "<br>";
    
    $a /= 3;
    echo "a dibagi 3 menjadi" . " = " . $a . "<br>";
    
    $a %= 3;
    echo "a dimodulus 3 menjadi" . " = " . $a . "<br><br>";
    
    echo "Operator Assignment String" . "<br><br>";
    $nama = "maulana";
    $nama .= " ";
    $nama .= "aji";
    $nama .= " ";
    $nama .= "wicaksono";
    echo "'maulana' .= ' ' .= 'aji' .= ' ' .= 'wicaksono' ";
    echo "<br>" . $nama;
?>
