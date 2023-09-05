<?php
   $name = $_POST["name"];
   $gender = $_POST["gender"];

   echo "<p>Data yang dimasukan :</p>";
   echo "<strong>Nama :</strong> $name <br />";
   echo "<strong>Jenis Kelamin :</strong> ";

   if ($gender == "p" ) {
      echo "Pria";
   } else {
      echo "Wanita";
   }
?>