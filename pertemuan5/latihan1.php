<?php

//elemen pada array boleh menggunakan tipe data yang berbeda

//Cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis");

//Cara baru
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September"];


//menampilkan array
//var_dump() / print_r()
// var_dump($bulan);
// echo "<br>";
// print_r($bulan);

// //menampilkan 1 elemen pada array
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Jumat";
$hari[] = "Sabtu";
echo "<br>";
var_dump($hari);


?>