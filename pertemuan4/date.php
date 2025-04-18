<?php 
    // Date
    // date untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-F-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // mengecek hari apa dari beberapa hari kedepan / kebelakang
    // echo date("l, d-F-Y", time()-60*60*24*1000);
    
    // mktime
    // membuat detik sendiri
    // mktime(0,0,0,0,0,0);
    // urutan (jam, menit, detik, bulan, tanggal, tahun)
    // echo date("l",mktime(0,0,0,2,21,2005));

    // strtotime
    // echo date( "l",strtotime("21 Feb 2005"));

    // String
    // strlen()
    // strcmp()
    // explode()
    // htmlspecialchars()

    // Utility
    // var_dump()
    // isset()
    // empty()
    // die()
?>