<?php
   require "functions.php";

   $nis = $_GET["nis"];

$sswa = query("SELECT * FROM siswa WHERE nis = $nis")[0];

if ( isset($_POST["submit"])) {
    if (update($_POST) > 0) {
        echo "
        <script>
            alert('Data Berahasil Diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    }else {
        echo "
        <script>
            alert('Data Gagal Diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>