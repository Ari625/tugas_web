<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
require 'functions_penjualan.php';
$kode_barang = $_GET["kode_barang"];

if (hapus($kode_barang) > 0) {
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'index.php';
        </script>
        ";
} else {
    echo "
        <script>
            alert('Data Gagal Dihapus');
            document.location.href = 'index.php';
        </script>
        ";
}
?>