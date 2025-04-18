<?php 

// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key adalah index, yang dimulai dari 0

// membuat array
// cara lama
// $hari = array("Senin","Selasa","Rabu");

// cara baru
// $bulan = ["Janurai","Februari","Maret"];
// $arr1 = [123, "halo", true]

// menampilkan array
// var_dump($hari); // menampilkan tipe data dan indeks array
// print_r($hari); // hanya indeks array
// echo $hari[0]; // menampilkan elemen pada indeks ke berapa

// menambahkan 1 elemen pada array
// $hari[] = "Kamis";

// pengulangan pada array
// for / foreach
$angka = [2,5,4,8,1,9,7,11,19];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear{clear: both;}
    </style>
</head>
<body>
    <!-- menggunakan for -->
    <?php for($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?= $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- mengguankan foreach -->
    <?php foreach($angka as $a) { ?>
        <div class="kotak"><?= $a ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- pakai : da endforeach -->
    <?php foreach($angka as $a) : ?>
        <div class="kotak"><?= $a ?></div>
    <?php endforeach ?>

</body>
</html>