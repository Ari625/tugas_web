<?php
    require 'functions.php';

    if ( isset($_POST["submit"])) {
        if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'index.php';
            </script>
            ";
        }else {
            echo "
                <script>
                    alert('Data Gagal Ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Tambah Data Taruna</title>
</head>
<body class="p-3">
    <h2 class="text-success text-center">Tambah Data Siswa</h2>
    <hr>
    <form action='' method="post">
        <table border="0">
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis" id="nis"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea rows="5" cols = "50" id="alamat" name="alamat"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="submit" name="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>