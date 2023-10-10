<?php 
   include "koneksi.php";
   function cari($keyword){
      $sql = "SELECT * FROM siswa
               WHERE
               nis     LIKE '%$keyword%' OR
               nama    LIKE '%$keyword%' OR
               alamat  LIKE '%$keyword%'
               ";
   $query = mysqli_query($database, $sql);
   }
?>