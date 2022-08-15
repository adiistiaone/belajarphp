<?php
$mahasiswa = [
    ["Adi Setiawan", "181021700120", "Sistem Informasi", "Adi setiawantm18@gmail.com"],
    ["Irfan Eky Saputra", "181021712345", "Sistem Informasi", "eky@gmail.com"],
    ["Erik", "123122536", "Sistem Informasi", "erik@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    
<h1> Daftar Mahasiswa </h1>

<?php foreach ( $mahasiswa as $mhs ) :   ?>
   
<ul>
      <li>Nama : <?= $mhs[0]; ?></li>
      <li>NIM : <?= $mhs[1]; ?></li>
      <li>Jurusan : <?= $mhs[2]; ?></li>
      <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach;  ?>

</body>
</html>