<?php
require "functions_penjualan.php";

$kodeBarang = $_GET["kode_barang"];

$brng = query("SELECT * FROM barang WHERE kode_barang = $kodeBarang")[0];

if (isset($_POST["submit"])) {
   if (update($_POST) > 0) {
      echo "
         <script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
         </script>
         ";
   } else {
      echo "
         <script>
            alert('Data Gagal Diubah!');
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
   <title>Ubah Data Siswa</title>
</head>

<body>
   <h2>Ubah Data Siswa</h2>
   <form action="" method="post">
      <table border="0">
         <tr>
            <td>Kode Barang</td>
            <td>
               <input type="text" name="kode_barang" id="kode_barang" value="<?= $brng['kode_barang']; ?>">
            </td>
         </tr>
         <tr>
            <td>Nama Barang</td>
            <td>
               <input type="text" name="nama_barang" id="nama_barang" value="<?= $brng['nama_barang']; ?>">
            </td>
         </tr>
         <tr>
            <td>Satuan</td>
            <td>
               <input type="text" name="satuan" id="nama" value="<?= $brng['satuan']; ?>">
            </td>
         </tr>
         <tr></tr>
            <td>Merk</td>
            <td>
               <input type="text" name="merk" id="nama" value="<?= $brng['merk']; ?>">
            </td>
         </tr>
         <tr>
            <td>Harga</td>
            <td>
               <input type="text" name="harga" id="nama" value="<?= $brng['harga']; ?>">
            </td>
         </tr>
         <tr>
            <td></td>
            <td>
               <input type="submit" name="submit" value="simpan">
            </td>
         </tr>
      </table>
   </form>
</body>

</html>