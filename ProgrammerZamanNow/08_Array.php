<?php
/* Tipe Data Array
 * Array adalah tipe data yang berisikan kosong atau banyak data
 * Array dalam PHP bisa berisikan data dengan tipe yang berbeda
 * Array dalam PHP memiliki panjang dinamis, artinya bisa menambahkan data kedalam array sebanyak-banyaknya
 * Array tidak bisa ditampilkan menggunakan echo
 * untuk menampilkan array, lebih cocok menggunakan looping
 */
$Data_Array = array(1,2,3,4);
var_dump($Data_Array);

$Array_Nama = ["Maulana", "Aji", "Wicaksono"];
// echo $Array_Nama; // Error
var_dump($Array_Nama);

/* Operasi untuk Array
* $array[index]         : mengakses data dalam array berdasarkan nomor indeks
* $array[index] = value : mengubah data di array pada nomor indeks dengan value baru
* $array[] = value      : menambahkan nilai baru pada index terakhir
* unset($array[index])  : menghapus data di array, indeks otomatis hilang dari array
* count($array)         : mengambil total data di array
*/
echo "\nIndex 0 Array Nama : ", var_dump($Array_Nama[0]);

$Array_Nama[0] = "Uzumaki";
echo "\nIndex 0 Array Nama, diganti : ", var_dump($Array_Nama[0]);
var_dump($Array_Nama);

unset($Array_Nama[1]);
echo "\nUnset Array Nama index 1\n";
var_dump($Array_Nama);

$Array_Nama[] = "Numero Uno";
var_dump($Array_Nama);
echo "\nPanjang Array Nama = ", var_dump(count($Array_Nama));
?>