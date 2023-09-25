<?php 
   include "koneksi.php";

   $nis = $_POST["nis"];
   $nama = $_POST["nama"];
   $alamat = $_POST["alamat"];

   if(empty($nis)){
      die("Maaf, anda harus nis");
   }
   if(empty($nama)){
      die("Maaf, anda harus mengisi nama siswa");
   }
   if(empty($nis)){
      die("Maaf, anda harus mengisi alamat");
   }
   $sql = "INSERT INTO siswa (nis,nama, alamat) VALUES ('$nis','$nama','$alamat')";
   $query = mysqli_query($database, $sql);
   if(!$query) {
      header('location:siswa.php');
   } else {
      echo "Gagal Disimpan";
   }
?>