<?php
/**
 ***** Require dan Include
 * Merupakan fungsi dari PHP untuk menyertakan file PHP yang lainnya.
 * Require -> Jika file yang diinginkan tidak ada, maka akan terjadi error dan program terhenti.
 * Include -> Jika file yang diinginkan tidak ada, maka hanya diberi warning, dan program akan tetap berjalan.
 ***** Require_once dan include_once
 * digunakan untuk menghindari error redeclare function akibat menyertakan file berisi function yang sama secara berulang
*/

require "./lib/fungsi01.php";
include "./lib/fungsi02.php";
// include "./lib/fungsi02.php"; // Fatal error: Cannot redeclare LuasKotak()
require_once "./lib/fungsi01.php";
include_once "./lib/fungsi02.php";

echo sayHello("Mang", "Kurniawan") . PHP_EOL;
echo "Luas kotak = " . LuasKotak(30, 15) . PHP_EOL;

?>