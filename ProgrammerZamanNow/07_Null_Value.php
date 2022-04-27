<?php
// Data NULL adalah variabel kosong tanpa nilai
$Nama = "Aji";
$Nama = NULL;

echo $Nama;

// NULL bisa dipakai untuk prototyping
$Umur = NULL;

echo $Umur = 29;
echo "\n";
echo $Umur = 23;
echo "\n";
echo $Umur = 30;
echo "\n";

// Memeriksa nilai yang kosong/NULL menggunakan fungsi is_null()
echo "Apakah variabel Nama kosong? ";
var_dump(is_null($Nama));
echo "\n";

/*
* Menghapus variabel menggunakan fungsi unset()
* Warning..! Setelah di unset() suatu variabel tidak akan dapat diakses kembali
* Lebih aman menggunakan fungsi isset() untuk memeriksa adanya variabel yang nilainya tidak NULL
*/
$contoh = "Aji";
unset($contoh);
echo "Unset method = ", $contoh;

$contoh = "Aji";
$contoh = NULL;
echo "\nIs set method = ", var_dump(isset($contoh));
?>