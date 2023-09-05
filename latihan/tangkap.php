<?php
   if(isset($_POST['kirim'])) {
      if(isset($_POST['hobi1'])) {
         $hobi1 = $_POST['hobi1'];
      } else {
         $hobi1 = '';
      }
      if(isset($_POST['hobi2'])) {
         $hobi2 = $_POST['hobi2'];
      } else {
         $hobi2 = '';
      }
      if(isset($_POST['hobi3'])) {
         $hobi3 = $_POST['hobi3'];
      } else {
         $hobi3 = '';
      }
      echo 'Nama Anda adalah : '. $_POST['nama'].'<br>Anda seorang : '.$_POST['gender'].'<br>Yang Beragama : '.$_POST['agama'].'<br>Dan memiliki Hobi : '.$hobi1.$hobi2.$hobi3.'<br>Koemntar anda : '.$_POST['komentar'];
   }
?>