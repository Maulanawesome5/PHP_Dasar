<?php

$nilai = 70;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    // Jika false (tidak lulus), maka baris ini tidak akan ditampilkan
    echo "Selamat, Anda lulus..!" . PHP_EOL;
} else {
    echo "Maaf, Anda belum lulus. Segera lakukan remedial" . PHP_EOL;
}


?>
