<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambild data dari tabel mahasiswa
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");

//ambil data (fetch) mahasiswa dari object result
// mysqil_fetch_row() //mengembalikan array numerik
// mysqli_fetch_assoc() //mengemalikan array associative
// mysqli_fetch_array() //mengembalikan keduanya 
// mysqli_fetch_object()

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

    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <thead>
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
        </thead>

        <?php $i = 1; ?>
        <?php while( $row = mysqli_fetch_assoc($result)) : ?>
        <tbody>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="#">ubah</a> |
                    <a href="#">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
        </tbody>
        <?php $i++ ?>
        <?php endwhile; ?>


    </table>


</body>
</html>