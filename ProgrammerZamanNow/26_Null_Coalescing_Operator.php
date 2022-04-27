<?php
/*
 * Null Coalescing Operator (??)
 * digunakan untuk memeriksa apakah suatu variabel kosong, atau memiliki nilai
 * Jika memiliki nilai, maka lakukan suatu action.
 * Jika kosong, maka lakukan atau tidak lakukan sesuatu.
 * Null Coalescing Operator digunakan sebagai pengganti if statement
*/

$data = [
    // "action" => "Create"
];

// tanpa Null Coalescing Operator
if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}
echo $action . PHP_EOL;

// Menggunakan NCO
$action = $data["action"] ?? "Nothing";
echo $action . PHP_EOL;

?>
