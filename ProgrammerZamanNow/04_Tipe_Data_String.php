<?php
// Menggunakan single quote
echo 'Nama : ';
echo 'Maulana A. W.';
// echo '\n';
echo "\n"; // escape sequence harus didalam double quotes

// Menggunakan double quote
echo "Nama : ";
echo "Maulana\t Aji\t Wicaksono\t";
echo "\n";

/* Membuat multiline string
* Heredoc adalah fitur untuk membuat string yang panjang, sehingga tidak perlu
  manual menambahkan escape sequence (\n \t).
* Nowdoc tidak memiliki kemampuan parsing seperti Heredoc atau double quote
*/
echo <<< INI_TEKS
Belajar PHP Dasar bersama Eko Kurniawan Khannedy
di channel YouTube : Programmer Zaman Now
Ini tulisan menggunakan metode Heredoc\n\n
INI_TEKS;

echo <<< 'TEKS_LAGI'
Belajar PHP Dasar bersama Eko Kurniawan Khannedy
di channel YouTube : Programmer Zaman Now
Ini tulisan menggunakan metode Nowdoc
TEKS_LAGI;
?>
