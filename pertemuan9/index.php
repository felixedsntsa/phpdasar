<?php 

// koneksi ke database
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan php & database</title>
    <style>
        body a{
            text-decoration: none;
            color: black;
        }
        body a:hover{
            color: darkslategray;
        }
    </style>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <a href="tambahdata.php">Tambah Data Mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td class="ud-data">
                <a href="">ubah</a> |
                <a href="hapusdata.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin ingin menghapus data?')">hapus</a>
            </td>
            <td><img src="../src/img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>
</html>