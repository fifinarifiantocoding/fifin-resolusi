<?php

require 'function.php';
//cara mengecek tombol tambah udah d pencet atau belom
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('data berhasil di tambahkan');
          document.location.href= 'index.php';
         </script>";
  } else {
    echo "data gagal di tambahkan";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah data</title>
</head>

<body>
  <h1>Form Tambah Data Mahasiswa</h1>
  <form action="" method="post">
    <ul>
      <li>
        <label>Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label> NRP :
          <input type="text" name="nrp" required>
        </label>
      </li>
      <li>
        <label> Email :
          <input type="text" name="email" required>
        </label>
      </li>
      <li>
        <label> jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <li>
        <label> gambar :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah data!</button>
      </li>
    </ul>


  </form>

</body>

</html>