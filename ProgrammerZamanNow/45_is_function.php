<?php
/**
 * Is Function
 * PHP memiliki banyak function dengan prefix is_
 * Fungsi-fungsi ini biasa digunakan untuk memeriksa tipe data dari suatu data
 * Contoh :
 * is_string() ---> Apakah tipe data string
 * is_bool() ---> Apakah tipe data boolean
 * is_int() ---> Apakah tipe data integer
 * is_float() ---> Apakah tipe data float
 * is_array() ---> Apakah tipe data array
 * is_callable() ---> Apakah tipe data callable
 * Semua fungsi tersebut akan mengembalikan / return hasil berupa boolean
*/

$dataStr = "Duaarrr";
$dataNum = 10001;

var_dump(is_string($dataStr));
var_dump(is_bool($dataNum));
var_dump(is_int($dataNum));
var_dump(is_float($dataNum));

?>
