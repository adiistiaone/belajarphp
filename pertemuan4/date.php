<?php
    // Date untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / Epoch time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // echo time("l", time()60*60*24*2);

    // mktime
    // membuat sendiri detik
    // mktime (0,0,0,0,0,00)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date ("l", mktime(0, 0, 0, 11, 9,2000));

    // strtotime
    echo date("l", strtotime("25 aug 1985"));

?>