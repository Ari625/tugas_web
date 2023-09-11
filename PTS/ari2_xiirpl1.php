<?php
   if (!isset($_POST["nama"],$_POST["jenis_k"],$_POST["jurusan"],$_POST["alamat"])) {
      header("Location: " . $_SERVER['HTTP_REFERER']);
      exit;
   }

   $name = $_POST["nama"];
   $jk = $_POST["jenis_k"];
   $jurusan = $_POST["jurusan"];
   $hobby = $_POST["hobby"];
   $alamat = $_POST["alamat"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <title class="text-primary">Formulir Pendaftaran</title>
</head>
<body class="p-3">
<h1 class="text-center">
      Formulir Pendaftaran
   </h2>
   <h4 class="text-center">
      PTS Ari Rifandi XII-RPL 1
   </h4>
   <br>
      <table>
         <tr>
            <td>
               Nama 
            </td>
            <td></td>
            <td class="text-capitalize">
               <?= $name; ?>
            </td>
         </tr>
         <tr>
            <td>
               Jenis Kelamin
            </td>
            <td></td>
            <td class="text-capitalize">
               <?= $jk; ?>
            </td>
         </tr>
         <tr>
            <td>
               Jurusan yang dipilih
            </td>
            <td></td>
            <td class="text-uppercase">
               <?= $jurusan; ?>
            </td>
         </tr>
         <?php $i = 1; ?>
         <?php foreach($hobby as $hobi) :  ?>
         <tr>
            <td class="text-capitalize">
               <?php if ($i == 1 ) : ?>
                  Hobby
               <?php else : ?>

               <?php endif ?>
            </td>
            <td></td>
            <td class="text-capitalize">
              - <?= $hobi; ?>
            </td>
         </tr>
         <?php $i++; ?>
         <?php endforeach ?> 
         <tr>
            <td>
               Alamat
            </td>
            <td></td>
            <td class="text-capitalize">
               <?= $alamat; ?>
            </td>
         </tr>
      </table>
</body>
</html>