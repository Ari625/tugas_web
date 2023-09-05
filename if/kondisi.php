<?php
   $uts = $_POST["uts"];
   $uas = $_POST["uas"];

   //menghitung nilai akhir, 40% UTS dan 60% UAS
   $na = (0.4 * $uts)+(0.6 * $uas );

   if ($na >= 80) {
      $indeks = 'A';
   } elseif ($na >= 70) {
      $indeks = 'B';
   } elseif ($na >= 50) {
      $indeks = 'C';
   } elseif ($na >= 40) {
      $indeks = 'D';
   } else {
      $indeks = 'E';
   }

   echo "Nilai UTS = $uts<br>";
   echo "Nilai UAS = $uas<br>";
   echo "Nilai Akhir = <strong>$na</strong><br>";
   echo "Nilai Indeks = <strong>$indeks</strong><br>";
?>