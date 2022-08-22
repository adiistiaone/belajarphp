<?php
require 'functions.php';

//ambil data dari URL
$id = $_GET["id"];

// query data
$mhs = query("SELECT * FROM buku WHERE id = $id")[0];

// Cek apakah tombol submit sudah ditekan?
if( ISSET($_POST["submit"]) ) {

    //cek apakah data berhasil ditambahkan?
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
        </script>
    ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data buku</title>
</head>
<body>
    
<h1>Ubah data buku</h1>

<form action="" method="POST">
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    <ul>
        <li>
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" value="<?= $mhs["judul"]; ?>">
        </li>
        <li>
            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" id="penulis" value="<?= $mhs["penulis"]; ?>">
        </li>
        <li>
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" value="<?= $mhs["penerbit"]; ?>">
        </li>
        <li>
            <label for="tahun">Tahun</label>
            <input type="text" name="tahun" id="tahun" value="<?= $mhs["tahun"]; ?>">
        </li>
        <li>
            <label for="stok">Stok</label>
            <input type="text" name="stok" id="stok" value="<?= $mhs["stok"]; ?>">
        </li>
        <li>
            <label for="gambar">Gambar</label>
            <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
        </li>
        <li>
            <button type="submit" name="submit">Ubah Data!</button>
        </li>
    </ul>
</form>


</body>
</html>