<?php 
// variabel scope / lingkup variabel
// $x = 10; // variabel lokal di halaman php

// function tampilx() {
//     global $x;
//     echo $x; 
// }
// $x variabel lokal di function

// tampilx();

// superglobal
// variabel global milik php
// merupakan array associative

// var_dump($_SERVER);

// $_GET
$mahasiswa = [
    ["nama" => "clorinde", 
    "nim" => "010225", 
    "jurusan" => "Sistem Informasi", 
    "email" => "clorinde@gmail.com",
    "gambar" => "clorindethumbnail.png"
],
[
    "nama" => "Hu Tao", 
    "nim" => "020225", 
    "jurusan" => "Sistem Informasi", 
    "email" => "hutao@gmail.com",
    "gambar" => "hutaothumbnail.png"
],
[
    "nama" => "Raiden", 
    "nim" => "030225", 
    "jurusan" => "Sistem Informasi", 
    "email" => "raiden@gmail.com",
    "gambar" => "raidenthumbnail.png"
],
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>
    <ul></ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>