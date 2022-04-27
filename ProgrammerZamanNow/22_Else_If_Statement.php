<?php

$nilai = 70;
$absen = 90;

if ($nilai >= 80 && $absen >= 80) {
    echo "Anda mendapatkan nilai A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Anda mendapatkan nilai B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
    echo "Anda mendapatkan nilai C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
    echo "Anda mendapatkan nilai D" . PHP_EOL;
} else {
    echo "Maaf, Anda belum lulus. Segera lakukan remedial" . PHP_EOL;
}


?>
