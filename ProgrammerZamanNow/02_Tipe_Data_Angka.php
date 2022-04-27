<?php
// Bilangan bulat (integer)
echo "Decimal : ";
var_dump(1234); // var_dump adalah fungsi bawaan PHP untuk menampilkan jenis tipe data

echo "Octal : ";
var_dump(0123);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b11111111);

echo "Underscore di Number : ";
var_dump(1_234_567); // Underscore ini untuk pemisah saja, ketika di run tidak akan tampil


// Bilangan pecahan (float)
echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E notation plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point dengan E notation minus (7 x 0.001) : ";
var_dump(7e-3);

echo "Underscore di Floating Point : ";
var_dump(1_234.567);


// Integer overflow (batas nilai yang bisa ditampung oleh tipe data integer)
echo("Nilai maksimal integer : ");
var_dump(9_223_372_036_854_775_807);

?>

/* 
9.223.372.036.854.775.807
9_223_ sembilan ribu dua ratus dua puluh tiga ribu triliun
372_ tiga ratus tujuh puluh dua triliun
036_ tiga puluh enam miliar
854_ delapan ratus lima puluh empat juta
775_ tujuh ratus tujuh puluh lima ribu
807  delapan ratus tujuh
*/