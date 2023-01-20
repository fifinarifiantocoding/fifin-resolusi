<?php
require 'function.php';
//if (!isset($GET['id'])) {
//  header("location: index.php");
//  exit;
//}

//menggambil id dari URL menggunakan GET
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
        alert('data berhasil di tambahkan');
        document.location.href= 'index.php';
       </script>";
} else {
  echo "data gagal di tambahkan";
}
