<?php
    $namalengkap = "Felix Edna Santosa";
    echo $namalengkap;

    $namadepan = "Felix";
    $namabelakang = "Edna Santosa";
    $umur = 20;
    $domisili = "Jember";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Halo nama saya <?= $namadepan . " " . $namabelakang ?>, saya berumur <?= $umur ?> tahun dan saya tinggal di kabupaten <?= $domisili ?>
    </p>
</body>
</html>