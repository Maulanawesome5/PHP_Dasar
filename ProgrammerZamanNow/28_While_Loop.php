<?php
/*
 * Perulangan While
*/


$angka = 1;
// bentuk umum while
while ($angka <= 10) {
    echo "Angka = " . $angka . PHP_EOL;
    $angka++;
}

// bentuk lain while di PHP
$angka = 10;
while ($angka >= 1) :
    echo "Angka = " . $angka . PHP_EOL;
    $angka--;
endwhile;

?>
