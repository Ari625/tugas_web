<?php
session_start();

if (!isset($_SESSION["login"])) {
   header("location: login.php");
   exit;
}

require 'functions_penjualan.php';

if (isset($_POST["submit"])) {
   if (tambah($_POST) > 0) {
      echo "
            <script>
               alert('Data Berhasil Ditambahkan');
               document.location.href = 'index.php';
            </script>
            ";
   } else {
      echo "
            <script>
               alert('Data Gagal Ditambahkan');
               document.location.href = 'index.php';
               </script>
            ";
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <title>Tambah Data Barang</title>
</head>

<body class="p-3">
   <h2 class="text-success text-center">Tambah Data Barang</h2>
   <hr>
   <form action='' method="post">
      <table border="0">
         <tr>
            <td>Kode Barang</td>
            <td><input type="text" name="kode_barang" id="kode_barang"></td>
         </tr>
         <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_barang" id="nama_barang"></td>
         </tr>
         <tr>
            <td>Satuan</td>
            <td><input type="text" name="satuan" id="satuan"></td>
         </tr>
         <tr>
            <td>Merk</td>
            <td><input type="text" name="merk" id="merk"></td>
         </tr>
         <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" id="harga"></td>
         </tr>
         <tr>
            <td></td>
            <td>
               <input type="submit" value="submit" name="submit">
            </td>
         </tr>
      </table>
   </form>
</body>

</html>