<?php
    /* 
        Penulisan variabel dalam bahasa pemrograman PHP
        diawali dengan tanda $, lalu nama variabel.
        Penulisan nama variabel sama seperti bahasa pemrograman lain.
        1. tidak boleh diawali dengan angka, tapi angka bisa di taruh di akhir
        2. tidak boleh dipisah menggunakan operator aritmatika
        3. tidak boleh dipisahkan dengan spasi
        4. penulisan bisa menggunakan lowercase dan uppercase
        5. tipe data string bisa menggunakan single quote ('...')
        6. tipe data string bisa menggunakan double quote ("...")
    */
    $nama = "Maulana";
    $namaTengah = "Aji";
    $nama_Belakang = 'Wicaksono';
    $umur = 22;
    $pekerjaan1 = 'Desainer';
    $pekerjaan2 = 'Programmer';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Belajar PHP</title>
    </head>
    <body>
        <!--Implementasi variabel untuk ditempatkan ke HTML-->
        <h1>Halo, nama saya <?php echo $nama; ?></h1>
        <h3>Profil saya adalah sebagai berikut:</h3>
        <p>Nama depan : <?php echo $nama; ?> </p>
        <p>Nama tengah : <?php echo $namaTengah; ?> </p>
        <p>Nama belakang : <?php echo $nama_Belakang; ?> </p>
        <p>Umur saya <?php echo $umur ?> tahun</p>
        <p>
            Pekerjaan
            <ul>
                <li>
                    <?php echo $pekerjaan1;?>
                </li>
                <li>
                    <?php echo $pekerjaan2;?>
                </li>
            </ul>
        </p>
    </body>
</html>
