<?php
$mahasiswa = [
    ["Adi Setiawan", 181021700120, "Sistem Informasi", "Adisetiawantm18@gmail.com"],
    ["Irfan eky saputra", 181021800120, "Sistem Informasi", "Irfan@gmail.com"]
];


// array associative
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Adi Setiawan",
        "nim" => "181021700120",
        "jurusan" => "Sistem Informasi", 
        "email" => "Adisetiawantm18@gmail.com",
        "gambar" => "sandhika.jpeg"
    ],
    [
        "nama" => "Doddy ferdiansyah",
        "nim" => "092409284098",
        "jurusan" => "Sistem Informasi", 
        "email" => "Doddyferdiansyah@gmail.com",
        "gambar" => "doddy.jpg"
    ]
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>
        <img src="img/<?= $mhs["gambar"];?>">
    </li>
    <li>Nama : <?= $mhs["nama"]; ?></li> 
    <li>NIM : <?= $mhs["nim"]; ?></li> 
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li> 
    <li>Email : <?= $mhs["email"]; ?></li> 
</ul>
<?php endforeach; ?>

</body>
</html>