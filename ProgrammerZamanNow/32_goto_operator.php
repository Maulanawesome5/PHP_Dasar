<?php
/*
 * GOTO Operator
 * Goto adalah fitur untuk loncat ke kode program yang diinginkan.
 * Penggunaan GOTO Operator terlalu membingungkan untuk pembacaan kode program.
 * Agar Goto bisa berfungsi, maka perlu dibuatkan label di PHP dengan menggunakan nama label lalu diakhiri dengan simbol :
 * Goto juga bisa digunakan untuk menghentikan / keluar dari loop
*/
goto a;
echo "Hello World" . PHP_EOL; // baris ini akan dilewati saja

a:
echo "Hello A" . PHP_EOL;


// implementasi goto operator dalam looping
$counter = 1;
while (true) {
    echo "Ini adalah for while ke-{$counter}" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}

end:
echo "Akhir looping";

?>
