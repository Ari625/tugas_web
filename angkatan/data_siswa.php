<?php
   require "functions.php";
   $siswa = query("SELECT * FROM siswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <title>Kas Angkatan</title>
</head>
<body>
   <!-- navbar start -->
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
         <text class="navbar-brand" href="#">Kas Angkatan</text>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="data_siswa.php">Data Siswa</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="data_transaksi.php">Data Transaksi</a>
               </li>
               <!-- <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
               </li> -->
            </ul>
         </div>
      </div>
   </nav>
   <!-- navbar end -->
   <header>
      <h1 class="text-center">
         Data Siswa
      </h1>
   </header>
   <article class="position-relative">
      <table class="position-relative top-0 start-50 traslate-middle" border="1" cellpadding="5" cellspacing='5'>
         <tr>
            <th>No.</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
         </tr>
         <?php $i = 1 ?>
            <?php foreach($siswa as $row) : ?>
            <tr>
               <td class=""><?= $i; ?></td>
               <td><?= $row["nis"]; ?></td>
               <td><?= $row["nama"]; ?></td>
               <td><?= $row["kelas"]; ?></td>
            </tr>
            <?php $i++; ?>
         <?php endforeach ?>
      </table>
   </article>
</body>
</html>