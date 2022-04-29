<?php
/*
 * Secara default, function tidak menghasilkan nilai apapun.
 * Jika ingin membuat function yang bisa mengembalikan suatu nilai, maka perlu ditambahkan suatu keyword bernama Return.
 * Dalam fungsi hanya bisa mengembalikan / return satu nilai saja
*/

function Tambah(int $a, int $b){
    return $a + $b;
}

Tambah(50, 50); // kedua nilai sudah dijumlah, namun tidak di tampilkan
var_dump(Tambah(50, 50));


/* Fungsi yang menampilkan hasil */
function Jumlah(int $a, int $b){
    $hasil = $a + $b;
    return $hasil; // Membuat variabel local scope function, berguna jika rumus perhitungan banyak, maka yang di return adalah nilai akhir
}

$hasil = Jumlah(20, 20);
var_dump($hasil);


/* Fungsi dengan percabangan */
function Nilai($nilai){
    if ($nilai >= 80) {
        return "A";
    } elseif ($nilai >= 70) {
        return "B";
    } elseif ($nilai >= 60) {
        return "C";
    }elseif ($nilai >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$nilaiUjian = Nilai(90);
var_dump($nilaiUjian);

$nilaiUjian = Nilai(40);
var_dump($nilaiUjian);

$nilaiUjian = Nilai(75);
var_dump($nilaiUjian);


/* Return Data Type (untuk mengembalikan nilai return menjadi satu tipe data) */
function Perkalian(float $a, float $b): int {
    $hasil = $a * $b;
    return $hasil;
}

var_dump(Perkalian(3.14, 22.7)); // hasilnya 71, karena dikonversi menjadi integer

?>
