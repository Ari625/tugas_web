<?php 
   include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <h2>Tambah - Siswa</h2>
   <hr>
   <form action='aksitambahsiswa.php' method="post">
      <table border="0">
         <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" id="nis"></td>
         </tr>
         <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" id="nama"></td>
         </tr>
         <tr>
            <td>Alamat</td>
            <td><textarea rows="5" cols = "50" id="alamat" name="alamat"></textarea></td>
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