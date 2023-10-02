<?php
   include "koneksi.php";

   $nis = $_POST['nis'];
   $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];

   $sql2 = "UPDATE siswa SET nama = '$nama', alamat = '$alamat' where nis = '$nis'";
   $query = mysqli_query($database, $sql2);

   if ($query) {
      header('location:siswa.php');
   } else {
      echo "Edit siswa gagal";
   }
?>