<?php
/*
 * $a + $b -----> Union, menggabungkan dua array
 * $a == $b -----> Equality, akan true jika kedua array memiliki key-value sama
 * $a === $b -----> Identity, akan true jika kedua array memiliki key-value dan posisi sama
 * $a != $b -----> Inequality, akan true jika kedua array tidak sama
 * $a <> $b -----> Inequality, akan true jika kedua array tidak sama
 * $a !== $b -----> Non-identity, akan true jika keduanya tidak identik
*/
$first_name = [
    "first_name" => "Maulana",
    "last_name" => "Aji"
];

$last_name = [
    "first_name" => "Aji",
    "last_name" => "Wicaksono"
];

// Union operator
$full_name = $first_name + $last_name;
var_dump($full_name);


$a = [
    "first_name" => "Maulana",
    "last_name" => "Aji"
];

$b = [
    "last_name" => "Aji",
    "first_name" => "Maulana"
];

// Equality dan Identity operator
var_dump($a == $b);
var_dump($a === $b);

?>
