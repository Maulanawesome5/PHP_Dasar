<?php
/*
 * Function Argument / Parameter
 * Berguna untuk memasukkan informasi kedalam fungsi.
 * Argument ditempatkan didalam kurung () di bagian deklarasi fungsi.
 * Argument boleh lebih dari satu, jika lebih dari satu maka harus dipisahkan dengan koma.
*/

function sayHello($name, $pujian){
    echo "Halo $name, kamu orang yang $pujian" . PHP_EOL;
}

sayHello("Eko", "keren");
sayHello("Budi", "cerdas");

?>
