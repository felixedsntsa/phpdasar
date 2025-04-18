<?php 

// $mahasiswa = [["Felix","210525","sistem Informasi","felix@gmail.com"], 
// ["kaela","210525","sistem Informasi","kaela@gmail.com"],
// ];

// array associative
// sama seperti array numerik, kecuali
// key adalah string yang kita buat sendiri
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
    <title>Daftar Mahasiswa</title>
    <style>
        body li{
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs['gambar'] ?>">
            </li>
            <li>Nama: <?= $mhs["nama"] ?></li>
            <li>NIM: <?= $mhs["nim"] ?></li>
            <li>Jurusan: <?= $mhs["jurusan"] ?></li>
            <li>Email: <?= $mhs["email"] ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>