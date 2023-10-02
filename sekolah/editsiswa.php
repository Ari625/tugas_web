<?php 
   include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Menu Edit</title>
</head>
<body>
   <h2>
      Edit Siswa
   </h2>
   <hr>
   <?php
      $nis = $_GET['nis'];
      $sql = "SELECT * FROM siswa WHERE nis = '$nis'";
      $query = mysqli_query($database, $sql);
      $data = mysqli_fetch_array($query);
   ?>
   <form action="aksieditsiswa.php" method="post">
      <table border="0">
         <tr>
            <td>NIS</td>
            <td>
               <input type="text" name="nis" id="nis" value="<?= $data['nis']; ?>">
            </td>
         </tr>
         <tr>
            <td>Nama</td>
            <td>
               <input type="text" name="nama" id="nama" value="<?= $data['nama']; ?>">
            </td>
         </tr>
         <tr>
            <td>Alamat</td>
            <td>
               <textarea name="alamat" id="alamat" cols="50" rows="5">
                  <?= $data['alamat']; ?>
               </textarea>
            </td>
         </tr>
         <tr>
            <td></td>
            <td>
               <input type="submit" value="simpan">
            </td>
         </tr>
      </table>
   </form>
</body>
</html>