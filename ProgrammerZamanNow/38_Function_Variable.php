<?php
/*
 * Mengubah nama fungsi menjadi variabel
 * Variable yang telah di assign dengan nama fungsi, akan memiliki kemampuan dari fungsi tersebut
*/

function Foo(){
    echo "Foo" . PHP_EOL;
}

$fungsi_01 = "Foo";
$fungsi_01();

// Contoh Function variabel dengan parameter
function sayHello(string $name, $filter){
    $hasil = $filter($name);
    echo "Halo $hasil" . PHP_EOL;
}
// dummy function
function Cuaca(string $name): string{
    return "$name, cuaca yang cerah";
}

sayHello("Eko", "Cuaca"); // Memasukkan nama fungsi Cuaca() kedalam parameter fungsi sayHello()
sayHello("Aji", "Cuaca");
sayHello("haji bolot", "strtoupper");

?>
