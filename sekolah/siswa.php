<?php 
   include "koneksi.php";

   if(isset($_GET['pesan'])){
      if($_GET['pesan']== 'gagal'){
         echo "<script>alert('Login gagal! useraname dan password salah')</script>";
      } else if($_GET['pesan']=="logout"){
         echo "<script>alert('Anda berhasil logout')</script>";
      } else if($_GET['pesan']=="belum login"){
         echo "<script>alert('Anda harus login untuk mengakses halaman admin')</script>";
      }
   }
   
   $no = 1;
   $sql="SELECT * FROM siswa";
   $query = mysqli_query($database, $sql);

   if (isset($_POST["cari"])){
      $keyword = $_POST['keyword'];
      $sql = "SELECT * FROM siswa WHERE
                           nis LIKE '%$keyword%' OR 
                           nama LIKE '%$keyword%' OR 
                           alamat LIKE '%$keyword%'
                           ";
      $query = mysqli_query($database, $sql);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Master data siswa</title>
</head>
<body>
   <h2 class="align-center">Master Data Siswa</h2>
   <hr>
   <center> 
      <form action="" method="POST">
         <input type="text" name="keyword" size="40" autofocus placeholder="Masukan Keyword Pencarian.." autocomplete="off">
         <button type="submit" name="cari">Cari!</button>
      </form>
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
   <br>
   <center>
      <input type="button" value="Tambah Data" onclick="location.href='tambahsiswa.php'">
   </center>
</body>
</html>