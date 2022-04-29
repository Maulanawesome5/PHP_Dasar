<?php
/*
 * PHP mendukung default argument untuk pembuatan fungsi
 * Fitur ini memungkinkan jika hendak memanggil fungsi tanpa perlu memasukkan parameter.
 * Jika memiliki lebih dari satu parameter, maka keduanya harus diisi nilai default-nya.
*/
function sayHello($first_name = "John", $last_name = "Doe"){
    echo "Halo, $first_name $last_name" . PHP_EOL;
}

sayHello();
sayHello("Eko");
sayHello("Eko", "Kurniawan");

?>