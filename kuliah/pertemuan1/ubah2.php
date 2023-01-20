<?php

if(isset($_POST['proses'])){
  mysqli_query($koneksi, "update barang set
  kode_barang = '$_POST[kode_barang]',
  nama_barang = '$_POST
  where kode_barang = '$_GET[kode]'");
}

{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE mahasiswa SET
            nama ='$nama',
            nrp ='$nrp',
            email='$email',
            jurusan='$jurusan',
            gambar='$gambar',
            WHERE id ='$id'";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
