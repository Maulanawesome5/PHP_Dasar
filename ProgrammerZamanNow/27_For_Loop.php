<?php
/*
 * For loop
 * Bentuk sintaks for pada bahasa pemrograman PHP
    for(init_statement; kondisi; post_statement){
        // block perulangan
    }
*/

// Bentuk umum for loop
for ($angka = 1; $angka <= 10; $angka++) { 
    echo "Angka = " . $angka . PHP_EOL;
}

// Bentuk lain for loop
for ($angka = 10; $angka >= 1; $angka--) : 
    echo "Angka = " . $angka . PHP_EOL;
endfor;

?>
