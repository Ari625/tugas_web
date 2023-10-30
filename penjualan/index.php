<?php
require "functions_penjualan.php";
$barang = query("SELECT * FROM barang");

if (isset($_POST["cari"])){
   $barang = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <title>Penjualan</title>
</head>

<body class="p-3">
   <h2 class="text-center">
      Data Barang
   </h2>
   <hr>
   <form action="" method="POST" class="mb-3">
      <input type="text" name="keyword" size="40" autofocus placeholder="Masukan Keyword Pencarian.."
         autocomplete="off">
      <button type="submit" name="cari" class="btn btn-secondary">Cari!</button>
   </form>

   <table class="table-bordered" border="1" cellspacing="1" cellpading="5">
      <tr>
         <th class="text-center">No.</th>
         <th class="text-center">Kode Barang</th>
         <th class="text-center">Nama Barang</th>
         <th class="text-center">Satuan</th>
         <th class="text-center">Merk</th>
         <th class="text-center">Harga</th>
         <th class="text-center">Aksi</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($barang as $row): ?>
         <tr>
            <td class="">
               <?= $i; ?>
            </td>
            <td>
               <?= $row["kode_barang"]; ?>
            </td>
            <td>
               <?= $row["nama_barang"]; ?>
            </td>
            <td>
               <?= $row["satuan"]; ?>
            </td>
            <td>
               <?= $row["merk"]; ?>
            </td>
            <td>
               <?= $row["harga"]; ?>
            </td>
            <td>
               <a href="update.php?kode_barang=<?= $row["kode_barang"]; ?>" class="text-primary btn">
                  Ubah
               </a>
               |
               <a href="delete.php?kode_barang=<?= $row["kode_barang"]; ?>" onclick="return confirm('yakin?');"
                  class="text-danger btn">
                  Hapus
               </a>
            </td>
         </tr>
         <?php $i++; ?>
      <?php endforeach ?>
   </table>
   
   <a href="create.php" class="btn">
      <button class="btn btn-primary">
         Tambah
      </button>
   </a>
</body>

</html>