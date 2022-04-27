<?php
/*
 * +$nama_variabel ------> angka positif
 * -$nama_variabel ------> angka negatif
 * $nama_variabel + $nama_variabel ------> penjumlahan
 * $nama_variabel - $nama_variabel ------> pengurangan
 * $nama_variabel * $nama_variabel ------> perkalian
 * $nama_variabel / $nama_variabel ------> pembagian
 * $nama_variabel % $nama_variabel ------> modulus
 * $nama_variabel ** $nama_variabel ------> eksponen (pangkat)
 */

$a = 10;
$b = 10;

$Hasil = $a + $b;
var_dump($Hasil);

$Hasil = -$Hasil;
echo "Ubah menjadi negatif ", $Hasil, "\n";

$Hasil = +$Hasil;
echo "Ubah menjadi positif ", $Hasil, "\n";

$Hasil = $a % 3;
echo $a, " % ", 3, " = ", $Hasil, "\n";


?>
