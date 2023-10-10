<?php
   //mengaktifkan session php
   session_start();

   //menghubungkan dengan koneksi
   include 'koneksi.php';
   
   //menangkap data yang dikirim dari form
   $username = $_POST['username'];
   $password = $_POST['password'];

   //menyeleksi data admin dengan username dan password yang seseuai
   $query = "INSERT INTO admin (username, password) VALUES ('$username','$password'')";
   $data =  mysqli_query($database, $query);
?>