<?php 
   $host = "localhost";
   $user_name = "root";
   $pass = "";
   $database_name = "sekolah";
   $database = mysqli_connect($host,$user_name, $pass, $database_name);
   if(!$database){
      echo "Tidak Terhubung";
   }
?>