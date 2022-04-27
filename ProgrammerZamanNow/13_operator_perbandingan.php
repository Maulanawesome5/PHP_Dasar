<?php
/*
 * $a == $b -----> sama dengan
 * $a === $b -----> identik
 * $a != $b -----> tidak sama dengan
 * $a <> $b -----> tidak sama dengan
 * $a !== $b -----> tidak identik
 * $a < $b -----> kurang dari
 * $a <= $b -----> kurang dari sama dengan
 * $a > $b -----> lebih dari
 * $a >= $b -----> lebih dari sama dengan
*/

$a = 10;
$b = 5;

$hasil = $a < $b;
echo $a, " < ", $b, " = ", $hasil, "\n";
var_dump($hasil); // Jika false, di console tidak akan muncul

$hasil = $a > $b;
echo $a, " > ", $b, " = ", $hasil, "\n";
var_dump($hasil); // Jika true, di console akan muncul 1

$hasil = $a == $b;
echo $a, " == ", $b, " = ", $hasil, "\n";
var_dump($hasil);

$hasil = $a != $b;
echo $a, " != ", $b, " = ", $hasil, "\n";
var_dump($hasil);


?>
