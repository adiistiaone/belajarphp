<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "daftarbuku");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $judul = $data["judul"];
    $penulis = $data["penulis"];
    $penerbit = $data["penerbit"];
    $tahun = $data["tahun"];
    $stok = $data["stok"];
    $gambar = $data["gambar"];

    $query = "INSERT INTO buku
                VALUES
                ('', '$judul', '$penulis', '$penerbit', '$tahun', '$stok', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    $id = $data["id"];
    $judul = $data["judul"];
    $penulis = $data["penulis"];
    $penerbit = $data["penerbit"];
    $tahun = $data["tahun"];
    $stok = $data["stok"];
    $gambar = $data["gambar"];

    $query = "UPDATE buku
                SET
                judul = '$judul',
                penulis = '$penulis',
                penerbit = '$penerbit',
                tahun = '$tahun',
                stok = '$stok',
                gambar = '$gambar'
            WHERE id = $id;
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>