<?php
session_start();

if (!isset($_SESSION["login"])) {
   header("location: login.php");
   exit;
}

require "functions_penjualan.php";
require "library/vendor/autoload.php";
$barang = query("SELECT * FROM barang");

if (isset($_POST["cari"])) {
   $barang = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <title>Penjualan</title>
</head>

<body class="p-3">
   <h2 class="text-center">
      Data Barang
   </h2>

   <div class="d-flex flex-row-reverse">
      <?php if (isset($_SESSION["login"])): ?>
         <div class="position-relative top-0 end-0">
            <a href="logout.php">
               <button class="btn btn-secondary">
                  Logout
               </button>
            </a>
         </div>
      <?php else: ?>
         <div class="position-relative top-0 end-0">
            <a href="login.php">
               <button class="btn btn-primary">
                  Login
               </button>
            </a>
         </div>
      <?php endif ?>
      <?php if (isset($_SESSION["login"])): ?>
         <div class="p-2">
            <h5>
               Login sebagai
               <font class="
                  <?= ($_SESSION["role"] === "admin") ? 'text-success' : 'text-primary' ?>
               text-uppercase fw-bold">
                  <?= $_SESSION["role"] ?>
               </font>
            </h5>
         </div>
      <?php endif ?>
   </div>
   <hr>
   <div class="d-flex justify-content-start">
      <form action="" method="POST" class="mb-2 row g-2">
         <div class="col-auto">
            <input type="text" name="keyword" size="40" autofocus placeholder="Masukan Keyword Pencarian.."
               autocomplete="off" class="form-control">
         </div>
         <div class="col-auto">
            <button type="submit" name="cari" class="btn btn-secondary">Cari!</button>
         </div>
      </form>
      <?php if (isset($_SESSION["login"])): ?>
         <?php if ($_SESSION["role"] === "admin" || $_SESSION["role"] === "default"): ?>
            <div class="col-auto">
               <a href="create.php" class="btn btn-primary ms-2">
                  Tambah
               </a>
            </div>
            <div class="col-auto">
               <a href="report.php" class="btn btn-success ms-2">
                  Cetak
               </a>
            </div>
         <?php else: ?>

         <?php endif ?>
      <?php else: ?>

      <?php endif ?>
   </div>


   <?php if (isset($_SESSION["login"])): ?>
      <table class="table-bordered" border="1" cellspacing="1" cellpading="5">
         <tr>
            <th class="text-center">No.</th>
            <th class="text-center">Kode Barang</th>
            <th class="text-center">Nama Barang</th>
            <th class="text-center">Satuan</th>
            <th class="text-center">Merk</th>
            <th class="text-center">Harga</th>
            <?php if ($_SESSION["role"] === "admin"): ?>
               <th class="text-center">Aksi</th>

            <?php else: ?>

            <?php endif ?>
         </tr>
         <?php
         $i = 1;
         $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
         ?>
         <?php foreach ($barang as $row): ?>
            <tr>
               <td class="">
                  <?= $i; ?>
               </td>
               <td>
                  <center>
                     <?= $generator->getBarcode($row["kode_barang"], $generator::TYPE_CODE_128); ?>
                     <?= $row["kode_barang"]; ?>
                  </center>
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
               <?php if ($_SESSION["role"] === "admin"): ?>
                  <td>
                     <a href="update.php?kode_barang=<?= $row["kode_barang"]; ?>" class="btn-warning btn m-1 ">
                        Ubah
                     </a>
                     |
                     <a href="delete.php?kode_barang=<?= $row["kode_barang"]; ?>" onclick="return confirm('yakin?');"
                        class="btn-danger btn m-1">
                        Hapus
                     </a>
                  </td>
               <?php else: ?>

               <?php endif ?>
            </tr>
            <?php $i++; ?>
         <?php endforeach ?>
      </table>

   <?php else: ?>

      <table class="table-bordered" border="1" cellspacing="1" cellpading="5">
         <tr>
            <th class="text-center">No.</th>
            <th class="text-center">Nama Barang</th>
            <th class="text-center">Satuan</th>
            <th class="text-center">Merk</th>
            <th class="text-center">Harga</th>
         </tr>
         <?php $i = 1 ?>
         <?php foreach ($barang as $row): ?>
            <tr>
               <td class="">
                  <?= $i; ?>
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
            </tr>
            <?php $i++; ?>
         <?php endforeach ?>
      </table>
   <?php endif ?>
</body>

</html>