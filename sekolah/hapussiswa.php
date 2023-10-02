<?php
   include "koneksi.php";

   $nis = $_GET['nis'];
   $sql = "DELETE FROM siswa where nis = '$nis'";
   $query = mysqli_query($database, $sql);

   if ($query) {
      header('location:siswa.php');
   } else {
      echo "hapus siswa gagal";
   }
?>