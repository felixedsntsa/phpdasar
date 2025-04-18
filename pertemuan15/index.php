<?php 

session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// koneksi ke database
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if(isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

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
    
    <a href="logout.php">Logout</a>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambahdata.php">Tambah Data Mahasiswa</a>
    <br><br>
    
    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="">
        <button type="submit" name="cari">cari</button>
    </form>
    <br>

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
                <a href="ubahdata.php?id=<?= $row["id"]; ?>">ubah</a> |
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