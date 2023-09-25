<?php 
   require 'functions.php';

   $siswa = query("SELECT * FROM siswa");

   if (isset($_POST["cari"])){
      $siswa = cari($_POST["keyword"]);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <title>Data Siswa</title>
</head>
<body class="p-3">
   <h3 class="text-success text-center mb-3">
      <b>
         Daftar Nama Siswa
      </b>
   </h3>

  <hr>

   <form action="" method="POST" class="mb-3">
      <input type="text" name="keyword" size="40" autofocus placeholder="Masukan Keyword Pencarian.." autocomplete="off">
      <button type="submit" name="cari" class="btn btn-secondary">Cari!</button>
   </form>

   <table border="1" cellpadding="0" cellspacing="0" class="table table-bordered">
      <tr class="">
         <th>NO.</th>
         <th>NIS</th>
         <th>Nama</th>
         <th>Alamat</th>
         <th>Aksi</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach($siswa as $row) : ?>
         <tr>
            <td class=""><?= $i; ?></td>
            <td><?= $row["nis"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td>
               <a href="update.php?nis=<?= $row["nis"]; ?>" class="text-primary btn">
                  Ubah
               </a>
               |
               <a href="delete.php?nis=<?= $row["nis"]; ?>" onclick="return confirm('yakin?');" class="text-danger btn">
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