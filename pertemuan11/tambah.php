<?php
require 'functions.php';

// Cek apakah tombol submit sudah ditekan?
if( ISSET($_POST["submit"]) ) {

    //cek apakah data berhasil ditambahkan?
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan!');
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
    <title>Tambah data buku</title>
</head>
<body>
    
<h1>Tambah data buku</h1>

<form action="" method="POST">
    <ul>
        <li>
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul">
        </li>
        <li>
            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" id="penulis">
        </li>
        <li>
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit">
        </li>
        <li>
            <label for="tahun">Tahun</label>
            <input type="text" name="tahun" id="tahun">
        </li>
        <li>
            <label for="stok">Stok</label>
            <input type="text" name="stok" id="stok">
        </li>
        <li>
            <label for="gambar">Gambar</label>
            <input type="text" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data!</button>
        </li>
    </ul>
</form>


</body>
</html>