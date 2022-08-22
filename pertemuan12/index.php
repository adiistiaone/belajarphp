<?php
require 'functions.php';
$buku = query("SELECT * FROM buku");

//tombol cari ditekan
if( ISSET($_POST["cari"]) ) {
    $buku = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Buku</h1>

<a href="tambah.php">Tambah data buku</a>

<br>

<form action="" method="POST">
    <input type="text" name="keyword" size="40" autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
</form>

<br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun</th>
        <th>Stok</th>
        <th>Gambar</th>
    </tr>
    
    <?php $i = 1; ?>
    <?php  foreach( $buku as $row ) : ?>
    <tr> 
        <td><?= $i ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"];?>">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin?')">hapus</a>
        </td>
        <td><?= $row["judul"]; ?></td>
        <td><?= $row["penulis"]; ?></td>
        <td><?= $row["penerbit"]; ?></td>
        <td><?= $row["tahun"]; ?></td>
        <td><?= $row["stok"]; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>

</body>
</html>