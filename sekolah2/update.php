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
    <form action="" method="post">
        <table border="0">
            <tr>
                <td>NIS</td>
                <td>
                    <input type="text" name="nis" id="nis" value="<?= $sswa['nis']; ?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" id="nama" value="<?= $sswa['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" id="alamat" cols="50" rows="5"><?= $sswa['alamat']; ?></textarea>
                </td>
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