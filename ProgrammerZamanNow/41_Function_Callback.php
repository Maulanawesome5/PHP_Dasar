<?php
/*
 * Callback Function
 * Callback adalah mekanisme suatu fungsi untuk memanggil fungsi lain sesuai dengan parameter / argumen yang diberikan
 * Di PHP ada cara lain untuk implementasi callback, yaitu menggunakan tipe data callable
 * Dan untuk memanggil callback function tersebut, bisa menggunakan function call_user_func(callable, arguments) 
*/

function sayHello(string $nama, callable $filter){
    $hasil = call_user_func($filter, $nama);
    echo "Halo, $hasil" . PHP_EOL;
}

sayHello("Eko", "strtoupper");
sayHello("HAJI BOLOT", "strtolower");
// menggunakan anonymous function
sayHello("mpok nori", function (string $nama): string{
    return strtoupper($nama);
    }
);
// menggunakan arrow function
sayHello("Aji", fn($nama) => strtoupper($nama));

?>
