<?php

/**
 * Variable Scope
 * adalah ruang lingkup suatu variabel yang hendak diakses.
 * Jenis scope di PHP --> global, local, static
 * Global Scope: Variabel yang dibuat diluar function, hanya bisa diakses dari luar function.
 * Local Scope: Variabel yang dibuat didalam function, hanya bisa diakses dari dalam function
*/


$nama = "John Doe"; // Global Scope

function Hallo(){
    $nama = "Jonah Hill"; // Local Scope
    echo "Samlekom $nama, ini local scope" . PHP_EOL; // PHP Notice:  Undefined variable: nama
}

Hallo();
echo "Halo $nama, ini global scope" . PHP_EOL;

/**
 * Global Keyword
 * digunakan untuk mengakses variabel yang berada di dalam function, keluar di scope global
 * Dengan menggunakan kata kunci global, maka hal tersebut bisa dilakukan.
*/

function masuk(){
    global $nama; // Global Scope diakses ke Local Scope
    echo "$nama akhirnya masuk di local scope" . PHP_EOL;
}
masuk();

/**
 * $GLOBAL Variabel
 * Selain menggunakan global keyword, setiap variabel yang berada di global scope secara otomatis akan disimpan dalam array $GLOBAL oleh PHP
 * Jadi kita bisa menggunakan $GLOBAL variable dengan key nama variabel dari dalam function.
 * $GLOBAL adalah variabel yang bersifat superglobal, artinya bisa diakses dari scope manapun.
*/

function berjumpa(){
    $nama = "Jonah Hill"; // local scope

    // akses menggunakan global variabel
    echo "{$GLOBALS['nama']} dan $nama bisa berjumpa di local scope" . PHP_EOL;
}
berjumpa();


?>
