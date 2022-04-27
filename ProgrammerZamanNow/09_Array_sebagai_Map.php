<?php
/* Array sebagai Map
 * Biasanya di kebanyakan bahasa pemrograman, terdapat tipe data bernama Map, yaitu asosiasi antara key dan value
 * Namun di PHP, Map bisa dibuat menggunakan array
 * Secara default array akan menggunakan index sebagai key dan value apapun yang kita tentukan
 * Jika diinginkan, index array pada PHP bisa diubah menjadi bentuk lain semisal bertipe data string
 */

$Siswa = array(
    // index diganti menjadi string, agar lebih spesifik
    "Nama" => "Aji",
    "Umur" => 23,
    "Gender" => "Pria"
);
var_dump($Siswa);
var_dump(($Siswa["Nama"])); // cara akses

$Mahasiswa = [
    "Nama" => "Aji",
    "NIM" => 1714311002,
    "Jurusan" => "Informatika"
];
var_dump($Mahasiswa);

?>
