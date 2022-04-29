<?php
/*
 * Recursive Function
 * Merupakan kemampuan function untuk memanggil dirinya sendiri
 * Untuk beberapa studi kasus, rekursif memang cocok untuk digunakan
 * Namun ada juga beberapa kasus yang lebih aman menggunakan iterasi biasa
 * Sebab iterasi biasa terkadang lebih cepat daripada rekursif
 * WARNING...!
 * Walaupun rekursif itu sangat menarik, namun perlu berhati-hati.
 * Jika rekursif terlalu dalam, maka akan ada kemungkinan terjadi memory overflow, yaitu error dimana memory terlalu banyak digunakan oleh PHP
 * Alasannya adalah disebabkan ketika fungsi dipanggil, PHP akan menyimpannya dalam stack secara berulang sampai fungsi itu terpenuhi.
*/

// Fungsi biasa
function Factorial(int $a): int {
    $total = 1;
    
    for ($i=1; $i <= $a; $i++) { 
        $total *= $i;
    }
    
    return $total;
}
var_dump(Factorial(5));


// Fungsi rekursif
function FactorialRecursive(int $value): int{
    if ($value == 1) {
        return 1;
    } else {
        return $value * FactorialRecursive($value - 1);
    }
}
var_dump(FactorialRecursive(5));



?>
