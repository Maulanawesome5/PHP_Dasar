<?php
// Percabangan switch case
$nilai = "A";

// Jika menggunakan if statement
if ($nilai == "A") {
    echo "Anda lulus dengan sangat baik." . PHP_EOL;
} elseif ($nilai == "B" || $nilai == "C") {
    echo "Anda lulus." . PHP_EOL;
} elseif ($nilai == "D") {
    echo "Anda belum lulus. Lakukan remedial" . PHP_EOL;
} else {
    echo "Ulangi lagi semester depan." . PHP_EOL;
}


// Jika menggunakan switch case
switch ($nilai) {
    case 'A':
        echo "Anda lulus dengan sangat baik." . PHP_EOL;
        break;
    case 'B':
    case 'C':
        echo "Anda lulus." . PHP_EOL;
        break;
    case 'D':
        echo "Anda belum lulus. Lakukan remedial." . PHP_EOL;
        break;
    
    default:
        echo "Ulangi lagi semester depan." . PHP_EOL;
        break;
}

// Bentuk lain switch case
switch ($nilai) :
    case 'A':
        echo "Anda lulus dengan sangat baik." . PHP_EOL;
        break;
    case 'B':
    case 'C':
        echo "Anda lulus." . PHP_EOL;
        break;
    case 'D':
        echo "Anda belum lulus. Lakukan remedial." . PHP_EOL;
        break;
    
    default:
        echo "Ulangi lagi semester depan." . PHP_EOL;
        break;
endswitch;


?>
