<?php

/* Anonymous function, fungsi yang tidak diberikan nama */
$tanpaNama = function (string $nama){
    echo "Halo, $nama" . PHP_EOL;
};

$tanpaNama("Haji Bolot");


/* Memasukkan Anonymous Function sebagai Function Parameter */
function sayGoodBye(string $nama, $filter){
    $hasil = $filter($nama);
    echo "Good bye $hasil" . PHP_EOL;
}
// Setelah string Eko, parameter selanjutnya adalah Anonymous Function
sayGoodBye("Eko", function (string $nama): string{
        return strtoupper($nama);
    }
);


/* Mengakses variabel di luar Closure */
// Variabel global scope
$first_name = "Maulana";
$mid_name = "Aji";

$sayHello = function () use($first_name, $mid_name) {
    // Gunakan keyword use() agar function bisa mengakses variabel di global scope
    echo "Halo, $first_name $mid_name" . PHP_EOL;
};
$sayHello();

// $first_name = "Budi";
// $mid_name = "Kurniawan";

// $sayHello(); // tidak bisa di replace dengan global variabel baru

?>
