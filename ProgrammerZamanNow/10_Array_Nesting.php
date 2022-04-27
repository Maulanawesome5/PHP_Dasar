<?php

$Siswa = array(
    "Nama" => "Aji",
    "Umur" => 23,
    "NIS" => 20140630,
    "Alamat" => array(
        // Nesting Array
        "Dusun" => "Semambung",
        "Kecamatan" => "Gedangan",
        "Kabupaten" => "Sidoarjo"
    )
);
var_dump($Siswa["Nama"]);
var_dump($Siswa["Alamat"]["Kabupaten"]); // cara akses nesting array

$Mahasiswa = [
    "Nama" => "Aji",
    "Umur" => 23,
    "NIM" => 1714311002,
    "Program_Studi" => [
        // Nesting Array
        "Jurusan" => "Informatika",
        "Fakultas" => "Teknik"
    ]
];
var_dump($Mahasiswa["Nama"]);
var_dump($Mahasiswa["Program_Studi"]["Jurusan"]);

?>
