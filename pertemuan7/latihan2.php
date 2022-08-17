<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail buku</title>
</head>
<body>
    
<ul>
    <li><?= $_GET["judul"]; ?></li>
    <li><?= $_GET["penulis"]; ?></li>
    <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
    <li><?= $_GET["penerbit"]; ?></li>
    <li><?= $_GET["tahun"]; ?></li>
    <li><?= $_GET["stok"]; ?></li>
</ul>
<a href="latihan1.php"> Kembali </a>


</body>
</html>