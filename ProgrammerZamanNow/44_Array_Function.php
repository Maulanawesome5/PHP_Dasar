<?php
/*
 * Array Function
 * array_keys()   ---> Mengambil semua key milik array
 * array_values() ---> Mengambil semua value milik array
 * array_map()    ---> Mengubah semua data array dengan callback
 * sort()         ---> Mengurutkan array
 * rsort()        ---> Kebalikan urutan array
 * shuffle()      ---> Mengubah posisi data di array secara random
*/

$Data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// $mapFunction = fn(int $Value) => $Value * 10;
$dataResult = array_map(fn(int $Value) => $Value * 10, $Data);
var_dump($dataResult);

rsort($Data);
var_dump($Data);

$Siswa = [
    "Nama" => "Aji",
    "NIS" => 14045
];

var_dump(array_keys($Siswa));
var_dump(array_values($Siswa));

?>
