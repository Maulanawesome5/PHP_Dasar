<?php
/*
 * Control Flow untuk membatasi perulangan
 * Break, Continue
*/

$angka = 1;

// Break
while (true) {
    echo "Angka = " . $angka . PHP_EOL;
    $angka++;

    if ($angka > 10) {
        break; // Control flow
    }
}

echo "\n\n";

// Continue
for ($counter=0; $counter <= 100; $counter++) { 
    if ($counter % 2 == 0) {
        // Jika angka habis dimodulus 2 (genap), maka tidak akan di tampilkan
        continue;
    }
    echo "Counter = " . $counter . PHP_EOL; // Hasilnya angka ganjil yang di print
}

?>
