<?php
/*
 * Fungsi untuk memanipulasi tipe data string
 * join() / implode() ---> Menggabungkan array menjadi string
 * explode()          ---> Memisahkan string menjadi array
 * strtolower()       ---> Mengubah string menjadi lowercase
 * strtoupper()       ---> Mengubah string menjadi uppercase
 * substr()           ---> Mengambil sebagian string
 * trim()             ---> Menghapus spasi di depan dan di belakang string
*/

var_dump(join(",", [1, 2, 3, 4, 5, 6]));
var_dump(explode(" ", "Eko Kurniawan Khannedy"));
var_dump(trim("    Kurniawan    "));
var_dump(substr("Eko Kurniawan Khannedy", 0, 3)); // dimulai dari index 0, panjangnya 3 kata

?>
