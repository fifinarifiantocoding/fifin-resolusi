<?php
require 'function.php';
$id = $_GET['id'];

$m = query("SELECT * FROM mahasiswa WHERE id = $id");
//cara mengecek tombol tambah udah d pencet atau belom
if (isset($_POST["ubah"])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('data berhasil di edit!');
          document.location.href= 'index.php';
         </script>";
  } else {
    echo "data gagal di edit!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit data</title>
</head>

<body>
  <h1>Form Edit Data Mahasiswa</h1>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $m['id'];?>">
    
    <ul>

      <li>
        <label>Nama :
          <input type="text" name="nama" autofocus required value="<?= $m['nama']; ?>">
        </label>
      </li>
      <li>
        <label> NRP :
          <input type="text" name="nrp" required value="<?= $m['nrp']; ?>">
        </label>
      </li>
      <li>
        <label> Email :
          <input type="text" name="email" required value="<?= $m['email']; ?>">
        </label>
      </li>
      <li>
        <label> jurusan :
          <input type="text" name="jurusan" required value="<?= $m['jurusan']; ?>">
        </label>
      </li>
      <li>
        <label> gambar :
          <input type="text" name="gambar" required value="<?= $m['gambar']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah data!</button>
      </li>
    </ul>


  </form>


</body>

</html>