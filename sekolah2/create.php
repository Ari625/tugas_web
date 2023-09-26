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
    <h1>Tambah Data Siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nis">
                    <font>NIS : </font>
                </label>
                <input type="text" name="nis" id="nis" required>
            </li>
            <li>
                <label for="nama">
                <font>Nama : </font>
                </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="alamat">
                    <font>alamat : </font>
                </label>
                <input type="text" name="alamat" id="alamat">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>