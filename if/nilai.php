<?php
   if (!isset($_POST["nilai"])) {
      header("Location: " . $_SERVER['HTTP_REFERER']);
      exit;
   }

   $nilai = $_POST["nilai"];
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <title>Cek Kelulusan</title>
   </head>
   <body class="p-3">
      <h2 class="text-primary">
         Cek Kelulusan
      </h2>
      <?php if($nilai >= 80) : ?>
         <h4 class="text-success">
            Anda LULUS
         </h4>
      <?php else : ?>
         <h4 class="text-danger">
            Tidak LULUS
         </h4>
      <?php endif ?>
   </body>
</html>