<?php
$daftarbuku = [
    [
        "judul" => "Novel Laskar Pelangi",
        "penulis" => "Andrea Hirata",
        "penerbit" => "Bintang Pustaka",
        "tahun" => "2005",
        "stok" => "100",
        "gambar" => "AndreaHirata.jpg"
    ],
    [
        "judul" => "Azab dan Sengsara",
        "penulis" => "Merani Siregar",
        "penerbit" => "Balai Pustaka",
        "tahun" => "1920",
        "stok" => "90",
        "gambar" => "MeraniSiregar.jpg"
    ],
    [
        "judul" => "Sehat dan Kuat",
        "penulis" => "Allien Ludington",
        "penerbit" => "Indonesia Publishing House",
        "tahun" => "2011",
        "stok" => "76",
        "gambar" => "AllienLudington.jpg"
    ],
    [
        "judul" => "Hidup Sehat Berdasarkan Golongan Darah O",
        "penulis" => "Bianda Naulia",
        "penerbit" => "Dukon Publisher",
        "tahun" => "2011",
        "stok" => "65",
        "gambar" => "BiandaNaulia.jpg"
    ],
    [
        "judul" => "Raksasa Dari Jogja",
        "penulis" => "Dwitasari",
        "penerbit" => "Pinpoint Publishing",
        "tahun" => "2012",
        "stok" => "56",
        "gambar" => "Dwitasari.jpg"
    ]
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dafat buku</title>
</head>
<body>
    
<h1>Daftar Buku</h1>
<ul>
<?php foreach( $daftarbuku as $buku ) : ?>
        <li>
            <a href=
            "latihan2.php?
            judul=<?= $buku["judul"]; ?>&
            penulis=<?= $buku["penulis"]; ?>&
            gambar=<?= $buku["gambar"]; ?>&
            penerbit=<?= $buku["penerbit"]; ?>&
            tahun=<?= $buku["tahun"]; ?>&
            stok=<?= $buku["stok"]; ?>
            "><?= $buku["penulis"]; ?></a>
        </li>
<?php endforeach; ?>
</ul>
</body>
</html>