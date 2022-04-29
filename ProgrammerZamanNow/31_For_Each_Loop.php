<?php
/*
 * Perulangan For Each, digunakan untuk mengakses seluruh data dalam Array secara otomatis
*/

// Looping tanpa for each
$names = ["Eko", "Kurniawan", "Khannedy"];

echo "\nTanpa menggunakan foreach loop" . PHP_EOL;
for ($i=0; $i < count($names); $i++) { 
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}


// Looping dengan for each
echo "\nMenggunakan foreach loop" . PHP_EOL;
foreach ($names as $name) { // foreach ($nama_variabel as $nama_iterator)
    echo "Data $name" . PHP_EOL;
}


$person = [
    "first_name" => "Eko",
    "mid_name" => "Kurniawan",
    "last_name" => "Khannedy"
];

// Looping for each untuk Array Map
echo "\nMenggunakan foreach loop untuk Array Map" . PHP_EOL;
foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}


?>
