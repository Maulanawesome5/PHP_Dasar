<?php

/**
 * Static Scope
 * Secara default local variabel itu siklus hidupnya hanya sebatas function yang dieksekusi.
 * Jika suatu function selesai dieksekusi, maka siklus hidup local variabelnya selesai.
 * PHP memiliki scope yang bernama static
 * Static Scope hanya bisa di set ke local variabel
 * Saat kita membuat sebuah local variabel menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi.
 * Artinya jika function tersebut dieksekusi lagi, maka static variabel tersebut akan memiliki value dari sebelumnya. 
*/

function increment(){
    $counter = 1;
    echo "counter = $counter" . PHP_EOL;
    $counter++;
}
increment();
increment();
increment(); // akan tetap 1 meskipun dipanggil 3 kali

function insement(){
    static $counter = 1; // static scope
    echo "static counter = $counter" . PHP_EOL;
    $counter++;
}
insement();
insement();
insement(); // Akan terjadi pertambahan nilai
?>