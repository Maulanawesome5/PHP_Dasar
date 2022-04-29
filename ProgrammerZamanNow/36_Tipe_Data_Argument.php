<?php
/*
 * Tipe Data untuk Function Argument
 * Sama halnya seperti variabel, argument / parameter di PHP bisa dimasukkan tipe data yang dinamis.
 * Terkadang karena terlalu dinamis, akan menyulitkan jika ingin mempatenkan fungsi yang parameternya hanya berjenis satu tipe data.
 * Dalam PHP, tipe data bisa ditambahkan dalam suatu parameter fungsi untuk menghindari ambigu.
 * ======================= Valid Types =======================
    Class / Interface ---> Parameter harus bertipe class / interface
    self              ---> Parameter harus sama dengan class dimana function ini dibuat
    array             ---> Parameter harus array
    callable          ---> Parameter harus callable
    bool              ---> parameter harus boolean
    float             ---> parameter harus bilangan desimal
    string
    iterable
    object
*/

function tambah(int $a, int $b){
    $total = $a + $b;
    echo "Total = $a + $b = $total" . PHP_EOL;
}

tambah(10, 10); // 10 + 10
tambah(25.5, 25.5); // 25 + 25
tambah("100", "100"); // 100 + 100
tambah(true, false); // 1 + 0
// tambah([], []); // Fatal error: Uncaught TypeError: Argument 1 passed to tambah() must be of the type int, array given

/*
 * Variable-length Argument List (V-lAL)
 * merupakan kemampuan dimana kita bisa membuat suatu parameter yang menerima banyak value
 * V-lAL secara otomatis akan membuat argumen tersebut menjadi array, namun tidak perlu manual mengirim array kedalam fungsi.
 * V-lAL hanya bisa dilakukan di argumen posisi terakhir.
*/

function jumlah(...$angka){
    $total = 0;
    foreach ($angka as $nomor) {
        $total += $nomor;
    }
    echo "Total " . implode(" + ", $angka) . " = $total" . PHP_EOL; // implode (fungsi untuk mengubah array menjadi string)
}

jumlah(10, 20, 30, 40); // ini tidak bisa dimasukkan untuk variabel array yang sudah di deklarasi duluan.
jumlah(...[10, 20, 30, 40]);

// Jika sudah terlebih dahulu membuat variabel array, maka penggunaan Variable-lenght Argument List
// adalah seperti ini
$data_array = [1, 2, 3, 4, 5];
jumlah(...$data_array);

?>
