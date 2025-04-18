<?php 

$mahasiswa = [
    ["Felix Edna Santosa","232410101050","Sistem Informasi","felixednasantosa@gmail.com"],
    ["Kaela Kovalskia","242410101050","Sistem Informasi","kaelakovalskia@gmail.com"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        li {
            list-style: none;
        }
    </style>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama: <?= $mhs[0] ?></li>
        <li>NIM: <?= $mhs[1] ?></li>
        <li>Jurusan: <?= $mhs[2] ?></li>
        <li>Email: <?= $mhs[3] ?></li>
    </ul>
    <?php endforeach ?>
</body>
</html>