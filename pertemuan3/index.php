<?php 

// pengulangan / looping
// for, while, do..while, foreach

// for
// $jumlah = 10;
// $start = 1;
// for($start; $start <= $jumlah; $start++) {
//     echo "Hello World <br>";
// }

// while
// $i = 0;
// while ($i < 5) {
//     echo "Hello World <br>";
// $i++;
// } // cek kondisi dahulu baru eksekusi

// do while
// $i = 0;
// do {
//     echo "Hello World! <br>";
// $i++;
// } while($i < 5); // menampilkan hasil terleboh dahulu baru cek

// pengondisian / percabangan
// if else
// if else if else
// ternary
// switch

// if

// $x = 20;
// if($x < 20) {
//     echo "Benar";
// } elseif($x === 20){
//     echo "Bingo";
// } else {
//     echo "Salah";
// }

$jumlah = 10;
$angkot = 1;

for($angkot; $angkot <= $jumlah; $angkot++) {
    echo "angkot No. " . $angkot . " beroperasi dengan baik <br>";
}

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris{
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i = 1; $i <= 5; $i++) : ?>
            <?php if($i % 2 == 0) : ?>
                <tr class="warna-baris">
            <?php else : ?>
            <?php endif; ?>
                <?php for($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j" ?></td>
                <?php endfor ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html> -->