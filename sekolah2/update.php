<?php
   require "functions.php";

   $nis = $_GET["nis"];

$sswa = query("SELECT * FROM siswa WHERE nis = $nis")[0];

if ( isset($_POST["submit"])) {
    if (update($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Diubah!');
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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Data Siswa</title>
</head>
<body>
    <h1>Ubah Data Siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="nis" value="<?= $sswa["nis"]; ?>">
        <ul>
            <li>
                <label for="nis">Nis : </label>
                <input type="text" name="nis" id="nis" required value="<?= $sswa["nis"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $sswa["nama"]; ?>">
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat" required value="<?= $sswa["alamat"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>

</body>
</html>