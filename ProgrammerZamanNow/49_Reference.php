<?php

/**
 * Reference
 * mengakses variable yang sama dengan nama variabel yang berbeda.
 * Reference di PHP tidak sama dengan reference pada C/C++ yang memiliki fitur pointer.
 * Saat mengubah isi value dari reference, maka secara otomatis value dari variabel aslinya juga akan berubah.
*/

$nama = "Eko";

$namaRef = &$nama; // Reference
echo "Hai $nama" . PHP_EOL;
echo "Hai $namaRef" . PHP_EOL;

// Mengubah value dari variabel yang diberi reference
$namaRef = "Kurniawan";
echo "Hai $nama" . PHP_EOL;
echo "Hai $namaRef" . PHP_EOL;

// Pass By Reference: mengirim data ke function dengan reference
function incement(int &$nilai){
    $nilai++;
}

$angka = 1;
incement($angka);
echo $angka . PHP_EOL;

// Returning Reference
function &getArisan(){
    static $value = 100;
    return $value;
}

$a = &getArisan();
echo "a = $a" . PHP_EOL;

$a = 2000;
echo "a = $a" . PHP_EOL;

$b = &getArisan();
echo "b = $b" . PHP_EOL;

?>