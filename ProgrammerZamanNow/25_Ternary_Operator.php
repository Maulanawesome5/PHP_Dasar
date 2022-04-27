<?php
// Ternary operator, berfungsi sebagai percabangan
// namun dinotasikan dengan tanda ? jadi tanpa menggunakan keyword if else

$gender = "PRIA";
$sapaan = null;

// Dengan menggunakan if statement
if ($gender == "PRIA") {
    echo "Halo mas" . PHP_EOL;
} else {
    echo "Halo mbak" . PHP_EOL;
}


// dengan menggunakan Ternary operator
$sapaan = $gender == "PRIA" ? "Halo mas" : "Halo mbak";
echo $sapaan . PHP_EOL;

?>
