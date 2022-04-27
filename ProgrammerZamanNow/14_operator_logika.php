<?php
/*
 * $nama_variabel && $nama_variabel ----> true jika keduanya true
 * $nama_variabel and $nama_variabel ----> true jika keduanya true
 * $nama_variabel || $nama_variabel ----> true jika satu atau keduanya true
 * $nama_variabel or $nama_variabel ----> true jika satu atau keduanya true
 * ! $nama_variabel ----> (Not) true jika bernilai false / membalikkan hasil
 * $nama_variabel xor $nama_variabel ----> false xor true akan menjadi false, false xor false menjadi false
*/

$a = true;
$b = false;
$c = true;
$d = false;

// Operator AND
$hasil = $a && $b;
echo $a, " && ", $b, " = ", var_dump($hasil);
$hasil = $b && $c;
echo $b, " && ", $c, " = ", var_dump($hasil);
$hasil = $a && $a;
echo $a, " && ", $a, " = ", var_dump($hasil);
$hasil = $b && $b;
echo $b, " && ", $b, " = ", var_dump($hasil), "\n\n";

// Operator OR
$hasil = $a || $b;
echo $a, " || ", $b, " = ", var_dump($hasil);
$hasil = $b || $c;
echo $b, " || ", $c, " = ", var_dump($hasil);
$hasil = $a || $a;
echo $a, " || ", $a, " = ", var_dump($hasil);
$hasil = $b || $b;
echo $b, " || ", $b, " = ", var_dump($hasil), "\n\n";

// Operator XOR
$hasil = $a xor $b;
echo $a, " xor ", $b, " = ", var_dump($hasil);
$hasil = $b xor $c;
echo $b, " xor ", $c, " = ", var_dump($hasil);
$hasil = $a xor $a;
echo $a, " xor ", $a, " = ", var_dump($hasil);
$hasil = $b xor $b;
echo $b, " xor ", $b, " = ", var_dump($hasil), "\n\n";

// Operator NOT
echo "!true", " = ", var_dump(!$a);
echo "!false", " = ", var_dump(!$b);

?>
