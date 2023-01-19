<?php
require 'function.php';

$id =$_GET['id'];
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Detail</title>
</head>
<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $m['gambar'];?>" width="60"></li>
    <li>NRP : <?= $m['nrp']; ?></li>
    <li>NRP : <?= $m['nama']; ?></li>
    <li>NRP : <?= $m['email']; ?></li>
    <li>NRP : <?= $m['jurusan']; ?></li>
    <li> <a href="">Ubah</a> | <a href="">Hapus</a></li>
    <li> <a href="latihan3.php">Kembali kedaftar mahasiswa</a></li>
  </ul>

</body>
</html>