<?php
   if (!isset($_POST["name"],$_POST["jk"],$_POST["jbuku"])) {
      header("Location: " . $_SERVER['HTTP_REFERER']);
      exit;
   }

   $name = $_POST["name"];
   $jk = $_POST["jk"];
   $jbuku = $_POST["jbuku"];
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <title>Daftar Pesanan Buku</title>
   </head>
   <body class="p-3">
      <h2>
         Daftar Pesanan Buku
      </h2>
      <h6 class="text-capitalize">
         Nama : <?= $name; ?>
      </h6>
      <h6 class="text-capitalize">
         Kelas : <?= $jk; ?>
      </h6>
      <h6 class="text-capitalize">
         Jenis Buku : <?php foreach ($jbuku as $buku ) : ?>
            <?= $buku; ?>;
         <?php endforeach ?>
      </h6>
   </body>
</html>