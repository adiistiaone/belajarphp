<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "daftarbuku");

// ambil data dari tabel buku / query
$result = mysqli_query($conn, "SELECT * FROM buku");

// mysqli_fetch_row() : mengembalikan array numerik
// mysqli_fetch_assoc() : mengembalikan array asosiative
// mysqli_fetch_array() : mengembalikan array numerik dan asosiative
// mysqli_fetch_object() : mengembalikan objek
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
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr> 
        <td><?= $i ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><?= $row["judul"]; ?></td>
        <td><?= $row["penulis"]; ?></td>
        <td><?= $row["penerbit"]; ?></td>
        <td><?= $row["tahun"]; ?></td>
        <td><?= $row["stok"]; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
</table>

</body>
</html>