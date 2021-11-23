<?php
    // Ini adalah single-line comment
    /*
        Ini adalah comment
        dengan menggunakan multi-line comment.
        Comment tidak akan dieksekusi oleh program.
    */
    
    /*
        Sintaks PHP 'standard output' untuk menampilkan
        sesuatu ke layar.
        sintaks output --> echo, print, print_r, var_dump
    */
    echo "ini ditampilkan menggunakan echo.";
    print "ini ditampilkan menggunakan print.";
    print_r("ini ditampilkan menggunakan print_r.");
    var_dump("ini ditampilkan dengan var_dump");

    /*
        jenis penulisan sintaks PHP
        1. PHP di dalam HTML
        2. HTML di dalam PHP
    */

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Belajar PHP</title>
    </head>
    <body>
        <!--PHP di dalam sintaks HTML-->
        <h1>
            Nama saya <?php echo "Maulana Aji"; ?>
        </h1>
        <p>
            Paragraf ini <?php echo "ditulis menggunakan sintaks PHP didalam HTML"; ?>
        </p>
        <!--HTML di dalam sintaks PHP-->
        <?php 
            echo "<h1>Header ini ada di dalam sintaks PHP</h1>"
        ?>
    </body>
</html>