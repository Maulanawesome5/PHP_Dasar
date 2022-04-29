<?php
/*
 * Arrow Function
 * Arrow Function diperkenalkan di PHP 7.4 sebagai alternative anonymous function yang lebih sederhana pembuatannya
 * Secara garis besar, sebenarnya arrow function dan anonymous function adalah dua hal yang sama
 * Hal yang membedakan arrow function adalah secara otomatis variabel diluar closure bisa digunakan, tidak seperti anonymous function
 yang harus disebutkan secara manual menggunakan kata kunci use()
 * Pembuatan arrow function tidak menggunakan keyword, melainkan fn
 * Arrow Function dikhususkan untuk pembuatan fungsi yang sederhana.
*/

$first_name = "Eko";
$mid_name = "Khannedy";

// ini anonymous function
$sayHello = function () use ($first_name, $mid_name) : string {
    return "Hello $first_name $mid_name" . PHP_EOL;
};
echo $sayHello();


// ini arrow function
$sayHello = fn() => "Halo $first_name $mid_name" . PHP_EOL;

echo $sayHello();

?>
