<?php
$nama = "Aji"; // variabel bernilai string
$umur = 23; // variabel bernilai integer

echo "Nama : ";
echo $nama;
echo "\n";
echo "Umur : ";
echo $umur;


/*
* Variable Variables
* Membuat nama variabel berdasarkan nilai/value dari variabel yang sebelumnya dibuat
*/
$contoh = "Eko";
$$contoh = "Kurniawan";

echo "Contoh : ";
echo $contoh;
echo "\n";
echo "Eko : ";
echo $Eko; // Variabel $Eko ini diambil dari nilai variabel $contoh. Case sensitive sesuai penulisan kapital

?>
