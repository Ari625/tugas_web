<?php 
   include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title></title>
</head>
<body>
   <h2 class="align-center">Master Data Siswa</h2>
   <hr>
   <center>
      <input type="button" value="Tambah Data" onclick="location.href='tambahsiswa.php'">
   </center>
   <br>
   <center>
   <table border='1' cellspacing='0' cellpadding='5'>
      <tr>
         <td>NO</td>
         <td>NIS</td>
         <td>Nama</td>
         <td>Alamat</td>
         <td>Aksi</td>
      </tr>
      <?php 
         $no = 1;
         $sql="SELECT * FROM siswa";
         $query = mysqli_query($database, $sql);
         while($data = mysqli_fetch_array($query)) {
      ?>
      <tr>
         <td><?php echo "$no"; ?></td>
         <td><?php echo "$data[nis]"; ?></td>
         <td><?php echo "$data[nama]"; ?></td>
         <td><?php echo "$data[alamat]"; ?></td>
         <td>
            <a href="editsiswa.php?nis=<?php echo "$data[nis]"; ?>">EDIT</a>
            |
            <a href="hapussiswa.php?nis=<?php echo "$data[nis]"; ?>" onclick="return confirm('Anda yakin?')">HAPUS</a>
         </td>
      </tr>
      <?php
         $no++;
         }
      ?>
   </table>
   </center>
</body>
</html>